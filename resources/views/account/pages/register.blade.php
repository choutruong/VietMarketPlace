@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col col-md-4 text-center">
	<form role="form" action="{!!route('postRegister')!!}" method="POST">
		<input type="hidden" name="_token" value="{!!csrf_token()!!}">
		<h1>Tạo Tài khoản Mới</h1>
		<h3>Cam kết miễn phí trọn đời</h3>
		<br>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Tài khoản" id="name" name="username" required>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Họ và Tên" id="fullname" name="fullname" required>
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Địa chỉ Email" id="email" name="email" required>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Mật khẩu" id="password" name="password" required>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Nhập lại Mật khẩu" id="confirm_password" name="confirm_password" required>
		</div>
		
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Địa chỉ liên hệ" id="address" name="address" required>
		</div>
		<div class="form-group">
			<input type="tel" class="form-control" placeholder="Số điện thoại" id="phone" name="phone" required>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" required> Tôi đã đọc và đồng ý với các khoản <em>Điều lệ Sử dụng</em> and <em>Quyền Riêng tư</em>
			</label>
		</div>
		<CENTER><button type="submit" class="btn btn-lg btn-account">
			Tạo tài khoản
		</button></CENTER>

		<div>
			<center>
				Bạn đã có tài khoản?
				<a style="color: #000; font-weight: bold;" href="{{url('login')}}">Đăng nhập</a>
			</center>
		</div>
	</form>
</div>
<div class="col col-md-8">
	image qc them sau
</div>
</div>
</div>
@endsection()