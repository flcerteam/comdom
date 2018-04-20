@extends('master')
@section('content')
<div class="page">
  <main class="page__content" role="main">
     <div class="container">
        <div class="block block--page-title">
           <div class="page-header">
              <h1 class="page-title"><span>YAKI 1</span></h1>
           </div>
        </div>
        <article role="article" class="node location location--full">
           <div class="row">
              <div class="col-sm-7">
                 <div class="location__images visible-xs">
                   <div class="field__item flipInX">
                       <iframe style="width:100%; height:200px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0793925442626!2d106.66388831480097!3d10.805231292301999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752924e7bfab91%3A0x4325af2d79a2e935!2sWaseco+Plaza!5e0!3m2!1svi!2s!4v1522677539428"></iframe>
                   </div>
                 </div>
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
                 <hr>
                 <p>HELLO HELLO HELLO HELLO HELLO HELLO HELLO</p>
                 <a href="{{route('location')}}" class="button button--small">
                 <i class="fa fa-long-arrow-left"></i>Quay về</a>
              </div>
              <div class="col-sm-4 col-sm-offset-1">
                 <div class="location__images hidden-xs">
                    <div class="field__item flipInX">
                        <iframe style="width:100%; height:200px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0793925442626!2d106.66388831480097!3d10.805231292301999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752924e7bfab91%3A0x4325af2d79a2e935!2sWaseco+Plaza!5e0!3m2!1svi!2s!4v1522677539428"></iframe>
                    </div>
                 </div>
              </div>
           </div>
        </article>
     </div>
  </main>
</div>
@endsection
