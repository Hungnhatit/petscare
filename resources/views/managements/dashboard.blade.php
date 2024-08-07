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
                  <i class="material-icons">aspect_ratio</i>Duyệt</a>
               <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                  <li>
                     <a href="/account">Duyệt đăng ký tài khoản cửa hàng</a>
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

            <li class="dropdown">
               <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <i class="material-icons">extension</i>
                  <span>Cập nhật</span></a>
               <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                  <li>
                     <a href="#">Danh mục dịch vụ</a>
                  </li>
               </ul>
            </li>

            <li class="dropdown">
               <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <i class="material-icons">equalizer</i>
                  <span>Duyệt thanh toán</span></a>

            </li>




         </ul>
      </nav>

      <div id="content" class="pets-management">
         <div class="top-navbar">
            <div class="xp-breadcrumbbar">
               <h4 class="page-title">Duyệt đăng ký tài khoản cửa hàng</h4>
            </div>
         </div>

         <div class="main-content">
            <div class="row">
               <div class="col-md-12">
                  <table class="mt-4 col-md-10 table table-striped table-hover table-bordered">
                     <thead>
                        <tr>
                           <th class="font-family text-center text-uppercase" scope="col">STT</th>
                           <th class="font-family text-center text-uppercase" scope="col">Mã cửa hàng</th>
                           <th class="font-family text-center text-uppercase" scope="col">Tên đăng nhập</th>
                           <th class="font-family text-center text-uppercase" scope="col">Email</th>
                           <th class="font-family text-center text-uppercase" scope="col">Tên cửa hàng</th>
                           <th class="font-family text-center text-uppercase" scope="col">Số điện thoại</th>
                           <th class="font-family text-center text-uppercase" scope="col">Địa chỉ</th>
                           <th class="font-family text-center text-uppercase" scope="col">Trạng thái</th>
                           <th class="font-family text-center text-uppercase" class="text-center" scope="col" colspan="2">Hành động</th>
                        </tr>
                     </thead>
                     <tbody>

                        @foreach($stores as $store)
                        <tr>
                           <th class="text-center">{{$loop->iteration}}</th>
                           <td>{{$store->IDCH}}</td>
                           <td>{{$store->TENDN}}</td>
                           <td>{{$store->EMAIL}}</td>
                           <td>{{$store->TENCUAHANG}}</td>
                           <td>{{$store->SDT}}</td>
                           <td>{{$store->DIACHI}}</td>
                           <td>{{$store->TRANGTHAI}}</td>
                           <td class="text-center">
                              <!-- <a href="{{ url('/update-status/' . $store->IDCH) }}" class="btn btn-primary">Duyệt</a> -->

                              <form action="{{'/update-status/' . $store->IDCH }}" method="POST">
                                 @csrf
                                 @method("POST")
                                 @if ($store->TRANGTHAI=='Đã duyệt')
                                 <button type="submit" name="submit" class="btn btn-secondart" disabled>Duyệt</button>
                                 @else
                                 <button type="submit" name="submit" class="btn btn-primary">Duyệt</button>
                                 @endif
                                 @csrf
                              </form>
                           </td>
                           <td class="text-center">
                              <form action="{{ url('/delete-member/' . $store->IDCH) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" name="submit" class="btn btn-danger">Xoá</button>
                              </form>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>

               </div>

               <!-- Edit Modal HTML -->
               <div id="addEmployeeModal" class="modal fade">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <form>
                           <div class="modal-header">
                              <h4 class="modal-title">Add Employee</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           </div>
                           <div class="modal-body">
                              <div class="form-group">
                                 <label>Name</label>
                                 <input type="text" class="form-control" required>
                              </div>
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" class="form-control" required>
                              </div>
                              <div class="form-group">
                                 <label>Address</label>
                                 <textarea class="form-control" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Phone</label>
                                 <input type="text" class="form-control" required>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                              <input type="submit" class="btn btn-success" value="Add">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- Edit Modal HTML -->
               <div id="editEmployeeModal" class="modal fade">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <form>
                           <div class="modal-header">
                              <h4 class="modal-title">Edit Employee</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           </div>
                           <div class="modal-body">
                              <div class="form-group">
                                 <label>Name</label>
                                 <input type="text" class="form-control" required>
                              </div>
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" class="form-control" required>
                              </div>
                              <div class="form-group">
                                 <label>Address</label>
                                 <textarea class="form-control" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Phone</label>
                                 <input type="text" class="form-control" required>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                              <input type="submit" class="btn btn-info" value="Save">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>



               <!-- Delete Modal HTML -->
               <div id="deleteEmployeeModal" class="modal fade">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <form>
                           <div class="modal-header">
                              <h4 class="modal-title">Delete Employee</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           </div>
                           <div class="modal-body">
                              <p>Are you sure you want to delete these Records?</p>
                              <p class="text-warning"><small>This action cannot be undone.</small></p>
                           </div>
                           <div class="modal-footer">
                              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                              <input type="submit" class="btn btn-danger" value="Delete">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>


            </div>


            <!---footer---->


         </div>


      </div>

   </div>



</body>



@endsection