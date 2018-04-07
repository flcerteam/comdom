@extends('master')
@section('content')
      <!--slider-->
<script>

</script>
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="beta-products-list">
            <h4>NEW PRODUCTS</h4>
            <div class="beta-products-details">
              <p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
              <div class="clearfix"></div>
            </div>

            <div class="row">
              @foreach($new_product as $new)
              <div class="col-sm-3">
                <div class="single-item">
                  @if($new->promotion_price != 0)
                  <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                  @endif
                  <div class="single-item-header">
                    <a href="product.html"><img src="source/image/product/{{$new->image}}" alt="" height="250px"></a>
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
              @endforeach
            </div>
            <div class = "row">{{$new_product->links()}} </div>
          </div> <!-- .beta-products-list -->
          <div class="space50">&nbsp;</div>
          <div class="beta-products-list">
            <h4>SALE PRODUCTS</h4>
            <div class="beta-products-details">
              <p class="pull-left">Tìm thấy {{count($sp_khuyen_mai)}} sản phẩm</p>
              <div class="clearfix"></div>
            </div>
            <div class="row">
              @foreach($sp_khuyen_mai as $sp)
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                  <div class="single-item-header">
                    <a href="product.html"><img src="source/image/product/{{$sp->image}}" alt="" height="250px"></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">{{$sp->name}}</p>
                    <p class="single-item-price">
                      <span class="flash-sale">{{number_format($sp->promotion_price)}} VND</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left sp1" href="">
                      <input type="hidden" value="{{$sp->id}}" name="product_id"/>
                      <i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="{{route('product-detail',$sp->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class = "row">{{$sp_khuyen_mai->links()}} </div>
          </div> <!-- .beta-products-list -->
        </div>
      </div> <!-- end section with sidebar and main content -->
    </div> <!-- .main-content -->
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection
