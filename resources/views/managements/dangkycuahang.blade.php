@extends ('master.master')
@section('content')

<body>
   <div class="wrapper">
      <div id="content" class="pets-management">
         <h1 class="mt-10 text-center">Đăng ký cửa hàng</h1>
         <div class="main-content">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-container row g-5">
                     <div class="col-lg-7">
                        <form action="{{ url('/login/employee') }}" method="post">
                           {{ csrf_field() }}
                           <div class="row g-3">
                              <div class="col-12">
                                 <input name="name" type="text" class="form-control bg-light border-0 px-4" placeholder="Tên đăng nhập" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 <input name="email" type="password" class="form-control bg-light border-0 px-4" placeholder="Email" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 <input name="password" type="password" class="form-control bg-light border-0 px-4" placeholder="Mật khẩu" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 <input name="name" type="text" class="form-control bg-light border-0 px-4" placeholder="Địa chỉ" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 <input name="email" type="password" class="form-control bg-light border-0 px-4" placeholder="Số điện thoại" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 <input name="password" type="password" class="form-control bg-light border-0 px-4" placeholder="Hồ sơ" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 <button class="btn btn-primary w-100 py-3" type="submit">Đăng ký</button>
                              </div>
                              <p>Bạn đã có tài khoản? Đăng nhập ngay</p>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</body>
@endsection