 <!-- Topbar Start -->
 <div class="container-fluid border-bottom d-none d-lg-block">
 	<div class="row gx-0">
 		<div class="col-lg-4 text-center py-2">
 			<div class="d-inline-flex align-items-center">
 				<i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
 				<div class="text-start">
 					<h6 class="text-uppercase mb-1">Địa chỉ cửa hàng</h6>
 					<span>48 Cao Thắng, Thanh Bình, Hải Châu, Đà Nẵng</span>
 				</div>
 			</div>
 		</div>
 		<div class="col-lg-4 text-center border-start border-end py-2">
 			<div class="d-inline-flex align-items-center">
 				<i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
 				<div class="text-start">
 					<h6 class="text-uppercase mb-1">Email</h6>
 					<span>nhatpro204@gmail.com</span>
 				</div>
 			</div>
 		</div>
 		<div class="col-lg-4 text-center py-2">
 			<div class="d-inline-flex align-items-center">
 				<i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
 				<div class="text-start">
 					<h6 class="text-uppercase mb-1">Liên hệ</h6>
 					<span>0123 456 789</span>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- Topbar End -->

 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
 	<a href="/" class="navbar-brand ms-lg-5">
 		<h3 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>PetCare</h3>
 	</a>
 	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
 		<span class="navbar-toggler-icon"></span>
 	</button>


 	<div class="collapse navbar-collapse" id="navbarCollapse">
 		<div class="navbar-nav ms-auto py-0">
 			@if (session('user'))
 			<a href="/" class="nav-item nav-link active">Trang chủ</a>
 			<a href="/pets" class="nav-item nav-link">Quản lý</a>
 			<a href="product.html" class="nav-item nav-link">Sản phẩm</a>
 			<li class="">
 				<a class="nav-link" href="#" data-toggle="dropdown">
 					Xin chào {{ session('user')->TENNV }}
 				</a>
 				<ul class="dropdown-menu small-menu">
 					<li>
 						<a href="#">
 							<span class="material-icons">
 								person_outline
 							</span>Tài khoản
 						</a>
 					</li>
 					<li>
 						<a href="#"><span class="material-icons">
 								settings
 							</span>Thiết lập</a>
 					</li>
 					<li>
 						<a href="#">
 							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 								@csrf
 							</form>
 							<a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
 								<span class="material-icons">logout</span>
 								Đăng xuất
 							</a>
 						</a>
 					</li>
 				</ul>
 			</li>

 			@elseif (session('store'))
 			<a href="/" class="nav-item nav-link active">Trang chủ</a>
 			<a href="/account" class="nav-item nav-link">Quản lý</a>
 			<a href="product.html" class="nav-item nav-link">Sản phẩm</a>
 			<li class="">
 				<a class="nav-link" href="#" data-toggle="dropdown">
 					Xin chào {{ session('store')->USERNAME }}
 				</a>
 				<ul class="dropdown-menu small-menu">
 					<li>
 						<a href="#">
 							<span class="material-icons">
 								person_outline
 							</span>Tài khoản
 						</a>
 					</li>
 					<li>
 						<a href="#"><span class="material-icons">
 								settings
 							</span>Thiết lập</a>
 					</li>
 					<li>
 						<a href="#">
 							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 								@csrf
 							</form>
 							<a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
 								<span class="material-icons">logout</span>
 								Đăng xuất
 							</a>
 						</a>
 					</li>
 				</ul>
 			</li>
 			@else

 			<a href="/login" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">
 				<i class="bi bi-person-circle"></i>
 				Đăng nhập
 			</a>
 			@endif
 		</div>
 	</div>
 </nav>
 <!-- Navbar End -->