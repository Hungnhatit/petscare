@extends('master.master')
@section('content')
<div class="container-fluid pt-5">
   <div class="container">
      <div class="login-heading">
         <h1 class="text-uppercase mb-0">Đăng nhập</h1>
      </div>
      <div class="login-container row g-5">
         <div class="col-lg-7">
            <form action="{{ url('/login/employee') }}" method="post">
               {{ csrf_field() }}
               <div class="row g-3">
                  <div class="col-12">
                     <input name="name" type="text" class="form-control bg-light border-0 px-4" placeholder="Tên nhân viên" style="height: 55px;">
                  </div>
                  <div class="col-12">
                     <input name="password" type="password" class="form-control bg-light border-0 px-4" placeholder="Mật khẩu" style="height: 55px;">
                  </div>
                  <div class="col-12">
                     <button class="btn btn-primary w-100 py-3" type="submit">Đăng nhập</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection