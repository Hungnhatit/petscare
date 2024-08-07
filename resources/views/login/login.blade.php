@extends ('master.master')
@section('content')
<div class="container-fluid pt-5">
   <div class="container">
      <div class="ps-5 mb-5" style="max-width: 600px;">
         <h1 class="display-5 text-uppercase mb-0">Đăng nhập</h1>
         <h6 class="text-primary text-uppercase">Đăng nhập với tư cách</h6>
      </div>
      <div class="btn-auth-container row g-5">
         <button onclick="window.location.href='/login/employee'" class="btn-auth btn btn-primary">Nhân viên</button>
         <button onclick="window.location.href='/login/store'" class="btn-auth btn btn-primary">Quản trị viên</button>
      </div>
   </div>
</div>
@endsection