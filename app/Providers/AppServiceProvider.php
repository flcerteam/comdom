<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\TypeProduct;
use App\Cart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // Schema::defaultStringLength(191);
      view()->composer('*',function($view){
        $loai_sp = TypeProduct::all();
        $view->with('loai_sp',$loai_sp);
      });

      view()->composer('*',function($view){
        if(Session('cart')){
          // get gio hang gawn vao gio hang
          $oldCart=Session::get('cart');
          $cart = new Cart($oldCart);
          $view->with(['cart'=> Session::get('cart'),
          'product_cart'=>$cart->items,'total_price'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        }
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
