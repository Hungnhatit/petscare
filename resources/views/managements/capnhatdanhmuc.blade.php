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
                     <a href="/register">Cập nhật thông tin</a>
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
               <h4 class="page-title">Cập nhật danh mục dịch vụ</h4>
            </div>
         </div>

         <div class="main-content">
            <div class="row">
               <div class="col-md-12">
                  <table class="col-md-10 table table-striped table-hover table-bordered">
                     <thead>
                        <tr>
                           <th class="font-family text-center text-uppercase" scope="col">STT</th>
                           <th class="font-family text-center text-uppercase" scope="col">Mã giao dịch</th>
                           <th class="font-family text-center text-uppercase" scope="col">Mã dịch vụ</th>
                           <th class="font-family text-center text-uppercase" scope="col">Tên dịch vụ</th>
                           <th class="font-family text-center text-uppercase" scope="col">Mô tả</th>
                           <th class="font-family text-center text-uppercase" scope="col">Trạng thái</th>
                           <th class="font-family text-center text-uppercase" class="text-center" scope="col" colspan="2">Hành động</th>
                        </tr>
                     </thead>
                     <tbody>

                        <tr>
                           <td class="">1</td>
                           <td class="">GD001</td>
                           <td class="">DM001</td>
                           <td class="">Nhuộm</td>
                           <td class="">Nhuộm lông các màu: vàng, đỏ, xanh</td>
                           <td class="">Chờ duyệt</td>
                           <td class="text-center">
                              <form action="{{'/confirm-return/'}}" method="POST">
                                 @csrf
                                 @method("POST")

                                 <button type="submit" name="submit" class="btn btn-dark" disabled>Duyệt</button>

                                 <button type="submit" name="submit" class="btn btn-primary">Xoá</button>

                                 @csrf
                              </form>
                           </td>
                        </tr>

                        <tr>
                           <td class="">1</td>
                           <td class="">GD001</td>
                           <td class="">DM001</td>
                           <td class="">Nhuộm</td>
                           <td class="">Nhuộm lông các màu: vàng, đỏ, xanh</td>
                           <td class="">Chờ duyệt</td>
                           <td class="text-center">
                              <form action="{{'/confirm-return/'}}" method="POST">
                                 @csrf
                                 @method("POST")

                                 <button type="submit" name="submit" class="btn btn-dark" disabled>Duyệt</button>

                                 <button type="submit" name="submit" class="btn btn-primary">Xoá</button>

                                 @csrf
                              </form>
                           </td>
                        </tr>

                        <tr>
                           <td class="">1</td>
                           <td class="">GD001</td>
                           <td class="">DM001</td>
                           <td class="">Nhuộm</td>
                           <td class="">Nhuộm lông các màu: vàng, đỏ, xanh</td>
                           <td class="">Chờ duyệt</td>
                           <td class="text-center">
                              <form action="{{'/confirm-return/'}}" method="POST">
                                 @csrf
                                 @method("POST")

                                 <button type="submit" name="submit" class="btn btn-dark" disabled>Duyệt</button>

                                 <button type="submit" name="submit" class="btn btn-primary">Xoá</button>

                                 @csrf
                              </form>
                           </td>
                        </tr>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
</body>
@endsection