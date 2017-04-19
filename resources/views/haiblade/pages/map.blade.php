@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav justify-content-center">
				<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mặt Hàng</a>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Sách</a>
      <a class="dropdown-item" href="#">Máy tính</a>
      <a class="dropdown-item" href="#">Điện thoại</a>
    </div>
  </li>
				<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Nơi Tìm</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Kho Hàng</a>
      <a class="dropdown-item" href="#">Đơn Hàng</a>
    </div>
  </li>
				<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tình Trạng</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Mới</a>
      <a class="dropdown-item" href="#">Cũ</a>
    </div>
  </li>
			</ul>
		</div>
	</div>
	<div id="map">

	</div>
</div>
@endsection()