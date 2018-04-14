<div class="header">
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid" style="background-image:url('source/image/wood.jpg')">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('trang-chu')}}">
            <img alt="Brand" src="source/image/YakiBBQ_Logo.jpg" width="100px" height="30px">
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="{{route('trang-chu')}}">Trang Chủ</a></li>
            <li><a href="{{route('about')}}">Giới Thiệu</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thực Đơn<span class="caret"></span></a>
              <ul class="dropdown-menu"  style="background-image:url('source/image/wood.jpg')">
                @foreach($loai_sp as $sp)
                <li><a href="{{route('product-type',$sp->id)}}" style="color:#fff">{{$sp->name}}</a></li>
                <li role="separator" class="divider"></li>
              @endforeach
              </ul>
            </li>
            <li><a href="#">Siêu Thị Yaki</a></li>
            <li><a href="#">Tin Tức Yaki</a></li>
            <li><a href="{{route('contact')}}">Liên Hệ</a></li>
            <li><a href="#" style="border:3px solid;border-color: #cfea38;border-radius: 5px;">Đặt Bàn</a></li>
          </ul>
          <div class="beta-comp navbar-form navbar-left">
            <form role="search" method="get" id="searchform" action="search" >
              <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..."/>
              <button class="fa fa-search" type="submit" id="searchsubmit"></button>
            </form>
          </div>
          <div class="beta-comp giohang navbar-right navbar-form">
              @if(Session::has('cart'))
              <div class="cart">
                <div class="beta-select"><i class="fa fa-shopping-cart"></i> <a style="color:#fff"><span id="tongso" class="badge"> @if(Session::has('cart'))
                  {{Session('cart')->totalQty}} </span> @else 0 @endif </a><i class="fa fa-chevron-down"></i></div>
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
            @else
              <div class="cart">
                <div class="beta-select"><i class="fa fa-shopping-cart"></i> <a style="color:#fff"><span id="tongso" class="badge">0</span> </a><i class="fa fa-chevron-down"></i></div>
                <div class="beta-dropdown cart-body">
                  <div class="list-items">
                  </div>
                  <div class="cart-caption">
                    <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">0 VND</span></div>
                    <div class="clearfix"></div>
                    <div class="center">
                      <div class="space10">&nbsp;</div>
                      <a href="{{route('checkout')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
      </div><!-- /.navbar-collapse -->
    </nav>
  </div>
</div>
