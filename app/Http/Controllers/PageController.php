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
      $slide = Slide::all();
      // lấy sp trong table product có column new =1
      $new_product = Product::where('new',1)->paginate(4);
      $sp_khuyen_mai = Product::where('promotion_price','<>',0)->paginate(8);
      // print_r($slide);
      // exit;
      // //return view('page.trangchu',['slide'=>$slide]);
      return view('page.trangchu',compact('slide','new_product','sp_khuyen_mai'));
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
        //return response()->json(['success','true']);
        $input = $req->all();
        //  dd($input);
        $product = Product::find($input['id']);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        //dd($cart);
        //dd($product);
        $cart->add($product,$input['id']);
        //dd($cart);
        Session::put('cart',$cart);
        //dd(Session::get('cart'));
        return response()->json(['cart'=>$cart]);
    }
    public function google(Request $request){
      return response()->json(['success','true']);
    }
    // public function getGioHang(){
    //   //$view = View::make('')
    //   return view('giohang');
    // }
}
