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
               <h4 class="page-title">Xác nhận trả thú cưng</h4>
            </div>
         </div>

         <div class="main-content">
            <div class="row">
               <div class="col-md-12">
                  <table class="col-md-10 table table-striped table-hover table-bordered">
                     <thead>
                        <tr>
                           <th class="font-family text-center text-uppercase" scope="col">STT</th>
                           <th class="font-family text-center text-uppercase" scope="col">Mã lịch hẹn</th>
                           <th class="font-family text-center text-uppercase" scope="col">Mã khách hàng</th>
                           <th class="font-family text-center text-uppercase" scope="col">Số điện thoại khách hàng</th>
                           <th class="font-family text-center text-uppercase" scope="col">Mã nhân viên</th>
                           <th class="font-family text-center text-uppercase" scope="col">Số lượng thú cưng</th>
                           <th class="font-family text-center text-uppercase" scope="col">Thời gian hẹn</th>
                           <th class="font-family text-center text-uppercase" scope="col">Hình ảnh</th>
                           <th class="font-family text-center text-uppercase" scope="col">Trạng thái</th>
                           <th class="font-family text-center text-uppercase" class="text-center" scope="col" colspan="2">Hành động</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($pets as $pet)
                        <tr>
                           <td class="text-center">{{$loop->iteration}}</td>
                           <td class="">{{$pet->MALICHHEN}}</td>
                           <td class="">{{$pet->MAKH}}</td>
                           <td class="">{{$pet->SDT_KH}}</td>
                           <td class="">{{$pet->MANV}}</td>
                           <td class="">{{$pet->SOLUONGTHUCUNG}}</td>
                           <td class="">{{$pet->THOIGIANHEN}}</td>
                           <td class="">
                              <img style="width: 100px;" src="{{asset($pet->HINHANH)}}" alt="">
                           </td>
                           <td class="">{{$pet->TRANGTHAI}}</td>
                           <td class="text-center">
                              <form action="{{'/confirm-return/' . $pet->MALICHHEN }}" method="POST">
                                 @csrf
                                 @method("POST")
                                 @if ($pet->TRANGTHAI=='Đã duyệt'||$pet->TRANGTHAI=='Chờ duyệt' || $pet->TRANGTHAI=='Đã trả thú cưng')
                                 <button type="submit" name="submit" class="btn btn-dark" disabled>Xác nhận trả</button>
                                 @else
                                 <button type="submit" name="submit" class="btn btn-primary">Xác nhận trả</button>
                                 @endif
                                 @csrf
                              </form>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
</body>
@endsection