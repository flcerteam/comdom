<div id="header">
  <div class="header-top">
    <div class="container">
      <div class="pull-left auto-width-left">
        <ul class="top-menu menu-beta l-inline">
          <li><a href=""><i class="fa fa-home"></i> 26 Trần Hưng Đạo, Kbang, Gia Lai</a></li>
          <li><a href=""><i class="fa fa-phone"></i> 098xxxxxxx</a></li>
        </ul>
      </div>
      <div class="pull-right auto-width-right">
        <ul class="top-details menu-beta l-inline">
          <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
          <li><a href="#">Đăng kí</a></li>
          <li><a href="{{route('login')}}">Đăng nhập</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div> <!-- .container -->
  </div> <!-- .header-top -->
  <div class="header-body">
    <div class="container beta-relative">
      <div class="pull-left">
        <a href="{{route('trang-chu')}}" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
      </div>
      <div class="pull-right beta-components space-left ov">
        <div class="space10">&nbsp;</div>
        <div class="beta-comp">
          <form role="search" method="get" id="searchform" action="search">
                <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..."/>
                <button class="fa fa-search" type="submit" id="searchsubmit"></button>
          </form>
        </div>

        <div class="beta-comp giohang">
          @if(Session::has('cart'))
          <div class="cart">
            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng ( <span id="tongso"> @if(Session::has('cart'))
              {{Session('cart')->totalQty}} </span> @else Trống @endif) <i class="fa fa-chevron-down"></i></div>
            <div class="beta-dropdown cart-body">
              <div class="list-items">
              @foreach($product_cart as $prd)
              <div class="cart-item">
                <div class="media">
                  <a class="pull-left" href="#"><img src="source/image/product/{{$prd['item']['image']}}" alt="" width="30px" height="30px"></a>
                  <div class="media-body">
                    <span class="cart-item-title">{{$prd['item']['name']}}</span>
                    <span class="cart-item-amount">{{$prd['qty']}} * <span>{{number_format($prd['item']['unit_price'])}}</span></span>
                  </div>
                </div>
              </div>
              @endforeach
              </div>

              <div class="cart-caption">
                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}} VND</span></div>
                <div class="clearfix"></div>

                <div class="center">
                  <div class="space10">&nbsp;</div>
                  <a href="{{route('checkout')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div> <!-- .cart -->
        </div>
        @endif
      </div>
      <div class="clearfix"></div>
    </div> <!-- .container -->
  </div> <!-- .header-body -->
  <div class="header-bottom" style="background-color: #0277b8;">
    <div class="container">
      <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
      <div class="visible-xs clearfix"></div>
      <nav class="main-menu ">
        <ul class="l-inline ov">
          <li><a href="{{ route('trang-chu') }}">Trang chủ</a></li>
          <li><a class="dropdown-toggle" data-toggle="dropdown" >Loại Sản phẩm <span class="caret"></span></a>
            <ul class="dropdown-menu ">
              @foreach($loai_sp as $sp)
              <li><a href="{{route('product-type',$sp->id)}}">{{$sp->name}}</a></li>
            @endforeach
            </ul>
          </li>
          <li><a href="{{ route('about') }}">Giới thiệu</a></li>
          <li><a href="{{ route('contact') }}">Liên hệ</a></li>
       </ul>
        <div class="clearfix"></div>
      </nav>
    </div> <!-- .container -->
      {{-- <div class="container">
        <nav class="navbar navbar-default"  >
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar1" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{ route('trang-chu') }}">Trang chủ</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Loại Sản Phẩm <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    @foreach($loai_sp as $sp)
                    <li><a href="{{route('product-type',$sp->id)}}">{{$sp->name}}</a></li>
                    <li class="divider"></li>
                  @endforeach
                  </ul>
                </li>
                <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
          <!--/.container-fluid -->
        </nav>
      </div> --}}
  </div> <!-- .header-bottom -->
</div> <!-- #header -->
