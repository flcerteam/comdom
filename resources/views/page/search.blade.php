@extends('master')
@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Sản phẩm</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="index.html">Home</a> / <span>Sản phẩm</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-3">
          <ul class="aside-menu">
            @foreach($loai_sp as $loai)
            <li><a href="{{route('product-type',$loai->id)}}">{{$loai->name}}</a></li>
            @endforeach
          </ul>
        </div>
        <div class="col-sm-9">
          <div class="beta-products-list">
            <h4>Search Result</h4>
            <div class="beta-products-details">
              <p class="pull-left">{{count($sp_theo_ten)}} sản phẩm</p>
              <div class="clearfix"></div>
            </div>

            <div class="row">
              @foreach($sp_theo_ten as $sptl)
              <div class="col-sm-4">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="product.html"><img src="source/image/product/{{$sptl->image}}" alt="" height="250px"></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">{{$sptl->name}}</p>
                    <p class="single-item-price">
                      <span>{{number_format($sptl->unit_price)}} VND</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left sp1" href="">
                      <input type="hidden" value="{{$sptl->id}}" name="product_id"/>
                      <i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="{{route('product-detail',$sptl->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="row">{{$sp_theo_ten->appends(request()->input())->links()}}</div>
          </div> <!-- .beta-products-list -->
        </div>
      </div> <!-- end section with sidebar and main content -->
    </div> <!-- .main-content -->
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection
