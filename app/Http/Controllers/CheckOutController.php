<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;
use App\Cart;
use Session;
use Illuminate\Http\Request;
use View;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use DB;
class CheckOutController extends Controller
{
  public function postCheckout(Request $req){
      DB::beginTransaction();
      try{
        $cart = Session::get('cart');
        $customer = new Customer;
        $customer = DB::table('customers')
                    ->whereNameAndEmail($req->name, $req->email)
                    ->first();
        // nếu đã tồn tại customer thì k add thêm
        if(null == $customer) {
          $customer->name = $req->name;
          $customer->gender = $req->gender;
          $customer->email = $req->email;
          $customer->address = $req->address;
          $customer->phone_number = $req->phone;
          $customer->note = $req->notes;
          $customer->save();
        }
        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        DB::commit();
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
      } catch(\Exception $e) {
        DB::rollback();
        return redirect()->back()->with('thongbao','Đặt hàng thất bại');
      }
  }

  public function getCustomerInfo(Request $req){
      $input = $req->all();
      $customer = Customer::where('phone_number',$input['phone'])->first();
      if( null == $customer) {
        $returnData = array(
            'status' => 'error',
            'message' => 'An error occurred!'
        );
        return response()->json($returnData);
      }
      return response()->json(['customer'=>$customer]);
  }
}
