@extends('master')
@section('content')
      <!--slider-->
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-3 hidden-xs">
          <div class="container-fluid">
            <ul class="aside-menu">
              <h4><strong>Danh Mục<strong></h4>
              @foreach($loai_sp as $loai)
              <li><a href="#{{$loai->id}}">{{$loai->name}}</a></li>
              @endforeach
              <li role="separator" class="divider"></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-9">
          @foreach($loai_sp as $loai)
          <div class="beta-products-list" id="{{$loai->id}}">
            <h4><strong>{{$loai->name}}<strong></h4>
            <div class="beta-products-details">
              <p class="pull-left">Tìm thấy {{$product_count}} sản phẩm</p>
              <div class="clearfix"></div>
            </div>
            <div class="row infinite-scroll">
              @foreach($new_product as $new)
              <div class="col-sm-4">
                <div class="single-item">
                  @if($new->promotion_price != 0)
                  <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                  @endif
                  <div class="single-item-header">
                    <a href="{{route('product-detail',$new->id)}}"><img  src="source/image/product/{{$new->image}}" alt="" height="200px"></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">{{$new->name}}</p>
                    <p class="single-item-price">
                      @if($new->promotion_price != 0)
                      <span class="flash-del">{{number_format($new->unit_price)}} VND</span>
                      <span class="flash-sale">{{number_format($new->promotion_price)}} VND</span>
                      @else
                      <span class="flash-sale">{{number_format($new->unit_price)}} VND</span>
                      @endif
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left sp1" href="">
                      <input type="hidden" value="{{$new->id}}" name="product_id"/>
                      <i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="{{route('product-detail',$new->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="space40"></div>
              @endforeach
              </div>
            </div>
            <div class="space50">&nbsp;</div>
          @endforeach
          </div>
      </div> <!-- end section with sidebar and main content -->
    </div> <!-- .main-content -->
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection
