@extends('adminlte::page')

@section('content')
  <div class="box">
    <div class="portlet light">
      <div class="portlet-body">
        <div class="tabbable-custom nav-justified">
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a href="#detail" data-toggle="tab"><i class="fa fa-user"></i> Chi tiết</a>
            </li>
            <li>
              <a href="#email" data-toggle="tab"><i class="fa fa-envelove"></i>Email</a>
            </li>
            <li>
              <a href="#password" data-toggle="tab"><i class="fa fa-lock"></i> Mật khẩu</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
@endsection

@section('css')
  <link rel="stylesheet" href="/css/admin_costom.css">
@endsection
