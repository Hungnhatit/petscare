@extends ('master.master')
@section('content')

<body>
   <div class="wrapper">
      <div id="content" class="pets-management">
         <h1 class="mt-10 text-center">Gửi yêu cầu</h1>
         <div class="main-content">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-container row g-5">
                     <div class="col-lg-7">
                        <form action="{{ url('/login/employee') }}" method="post">
                           {{ csrf_field() }}
                           <div class="row g-3">
                              <div class="col-12">
                                 Tên danh mục dịch vụ <input name="name" type="text" class="form-control bg-light border-0 px-4" placeholder="Mã dịch vụ" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 Tên dịch vụ thời gian <input name="email" type="password" class="form-control bg-light border-0 px-4" placeholder="Tên dịch vụ" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                 Thời gian <input name="password" type="password" class="form-control bg-light border-0 px-4" placeholder="Thời gian bắt đầu" style="height: 55px;">
                              </div>

                              <textarea placeholder="Mô tả" name="" id=""></textarea>

                              Hình ảnh<input type="file">
                              <button>Gửi</button>
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