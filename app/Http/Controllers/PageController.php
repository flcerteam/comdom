<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\Cart;
use Session;
use Illuminate\Http\Request;
use View;
class PageController extends Controller
{
    public function getIndex(){
      // lấy sp trong table product có column new =1
      $product_count = count(Product::all());
      $new_product = Product::paginate(4);
      $sp_khuyen_mai = Product::where('promotion_price','<>',0)->paginate(8);
      return view('page.trangchu',compact('product_count','new_product','sp_khuyen_mai','san_pham'));
    }

    public function getLoaiSp($type){
      $sp_theo_loai = Product::where('id_type',$type)->get();
      $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
      return view('page.product_type',compact('sp_theo_loai','sp_khac'));
    }
    public function getChiTietSp($id){
      $detail = Product::where('id',$id)->first();
      return view('page.product_detail',compact('detail'));
    }
    public function getLienHe(){
      return view('page.contact');
    }
    public function getAbout(){
        return view('page.about');
    }
    public function getAddToCart(Request $req){
        $input = $req->all();
        $product = Product::find($input['id']);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$input['id']);
        //dd($cart);
        Session::put('cart',$cart);
        return response()->json(['cart'=>$cart]);
    }

    public function getLogin(){
      return view('page.login');
    }
    public function getSearchItem(Request $req){
      $input = $req->all();
      $sp_theo_ten = Product::where('name','LIKE','%'.$input['s'].'%')->paginate(10);
      $product_count = count(Product::where('name','LIKE','%'.$input['s'].'%')->get());
      return view('page.search',compact('sp_theo_ten','product_count'));
    }

    public function searchItem(Request $req){
      return Product::where('name', 'LIKE', '%'.$req->q.'%')->get();
    }

    public function getCheckOut(){
      return view('page.checkout');
    }
}
