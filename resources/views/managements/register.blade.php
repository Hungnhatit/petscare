@extends ('master.master')
@section('content')

<body>
   <div class="wrapper">
      <div class="body-overlay"></div>
      <!-- Sidebar  -->
      <nav id="sidebar">
         <ul class="list-unstyled components">
            <li class="active">
               <a href="#" class="dashboard"><i class="material-icons">dashboard</i>
                  <span>Dashboard</span></a>
            </li>

            <li class="dropdown">
               <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <i class="material-icons">aspect_ratio</i>Xác nhận</a>
               <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                  <li>
                     <a href="">Xác nhận nhận thú cưng</a>
                  </li>
                  <li>
                     <a href="/pets">Xác nhận trả thú cưng</a>
                  </li>
               </ul>
            </li>

            <li class="dropdown">
               <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <i class="material-icons">apps</i><span>Tài khoản</span></a>
               <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                  <li>
                     <a href="#">Cập nhật thông tin</a>
                  </li>
                  <li>
                     <a href="#">Thay đổi mật khẩu</a>
                  </li>
               </ul>
            </li>

            <li class="dropdown">
               <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <i class="material-icons">equalizer</i>
                  <span>Thống kê</span></a>
               <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                  <li>
                     <a href="#">Doanh thu</a>
                  </li>
               </ul>
            </li>
         </ul>
      </nav>

      <div id="content" class="pets-management">
         <div class="top-navbar">
            <div class="xp-breadcrumbbar">
               <h4 class="page-title">Cập nhật thông tin nhân viên</h4>
            </div>
         </div>

         <div class="main-content">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-container row g-5">
                     <div class="col-lg-7">
                        <form action="{{ url('/login/employee') }}" method="post">
                           {{ csrf_field() }}
                           <div class="row g-3">
                              <div class="col-12">
                                 <input name="name" type="text" class="form-control bg-light border-0 px-4" placeholder="Tên nhân viên" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 <input name="email" type="password" class="form-control bg-light border-0 px-4" placeholder="Email" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 <input name="password" type="password" class="form-control bg-light border-0 px-4" placeholder="Mật khẩu" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 <button class="btn btn-primary w-100 py-3" type="submit">Cập nhật</button>
                              </div>
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