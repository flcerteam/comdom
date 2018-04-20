@extends('master')
@section('content')
<div class="page">
   <main class="page__content" role="main">
      <div class="container">
         <div class="views-element-container">
            <div class="view view--locations view--locations--page view-id-locations view-display-id-page js-view-dom-id-998b27373cf160a57b5b2c2e00cc07eb4e86460189b629c79fee59e757498e19">
               <div class="view__content">
                  <div class="view__row">
                     <article role="article" class="node location location--teaser">
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="location__images">
                                 <a href="{{route('dtl-location')}}">
                                    <picture>
                                          <source srcset="source/image/location/yaki.jpg" media="(min-width: 1200px)" type="image/jpeg">
                                          <source srcset="source/image/location/yaki.jpg" media="(min-width: 992px) and (max-width: 1199px)" type="image/jpeg">
                                          <source srcset="source/image/location/yaki.jpg" media="(min-width: 768px) and (max-width: 991px)" type="image/jpeg">
                                          <source srcset="source/image/location/yaki.jpg" media="(max-width: 767px)" type="image/jpeg">
                                       <img srcset="image">
                                    </picture>
                                 </a>
                              </div>
                           </div>
                           <div class="col-sm-7">
                              <h2 class="location__title">
                                 <a href="{{route('dtl-location')}}" rel="bookmark"><span>YAKI 1</span>
                                 </a>
                              </h2>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <h4 class="field__label">Địa Chỉ</h4>
                                    <p class="address" translate="no">
                                       <span class="address-line1">71 Chế Lan Viên</span><br>
                                       <span class="locality">P.Tây Thạnh</span>,
                                       <span class="administrative-area">Q.Tân Phú</span>
                                       <span class="postal-code"></span><br>
                                       <span class="country">HCM</span>
                                    </p>
                                    <div class="location__opening-hours">
                                       <h4 class="field__label">Giờ mở cửa</h4>
                                       <p>06:00 am - 10:00 pm</p>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <h4 class="field__label">Liên hệ</h4>
                                    <p>SDT:  0903906084 - (028)38162188 <br>FAX: +1 888 8888</p>
                                 </div>
                              </div>
                              <a href="{{route('dtl-location')}}" class="button button--small">
                              <i class="fa fa-map-marker"></i>Xem Chi Tiết</a>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
</div>
@endsection
