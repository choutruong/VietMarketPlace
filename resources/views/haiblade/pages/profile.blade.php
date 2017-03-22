@extends('haiblade.master')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<br>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-block">
								<center>
									<img alt="{!! $data->username !!}" src="../resources/upload/user/{!! $data->avatar !!}" class="img-circle">
									<h3 class="text-center">
										{!! $data->usernname !!}
									</h3>
								</center>
								<div class="row text-center">
									<div class="col-md-6">
										<dl>
											<dt>
												Họ &amp tên
											</dt>
											<dd>
												{!! $data->fullname !!}
											</dd>
											<dt>
												Email
											</dt>
											<dd>
												{!! $data->email !!}
											</dd>
										</dl>
									</div>
									<div class="col-md-6">
										<dl>
											<dt>
												Danh tiếng
											</dt>
											<dd>
												<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
											</dd>
											<dt>
												Điện thoại
											</dt>
											<dd>
												{!! $data->phone !!}
											</dd>
										</dl>
									</div>
								</div>
								<div class="row text-center">
									<div class="col-md-12">
										<dl class="dl">
											<dt>
												Địa chỉ
											</dt>
											<dd>
												{!! $data->address !!}
											</dd>
										</dl>
									</div>

								</div>

								<a href="#" class="btn btn-block btn-pf" type="button" data-toggle="modal" data-target="#editProfile">Sửa thông tin</a>

								<!-- Modal -->
								<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="editProfile" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<!-- Modal content-->
										<div class="modal-content">

											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalLabel">Thông tin của bạn</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>

											<div class="modal-body">
												<div class="input-group">
													<span class="input-group-addon" id="addon-fullname">Họ &amp tên</span>
													<input type="text" class="form-control" value="{!! $data->fullname !!}" placeholder="Họ tên" id="fullname" aria-describedby="addon-fullname">
												</div>
												<br />
												<div class="input-group">
													<span class="input-group-addon" id="addon-username">Nickname</span>
													<input type="text" class="form-control" value="{!! $data->username !!}" id="nickname" aria-describedby="addon-username">
												</div>
												<br />
												<div class="input-group">
													<span class="input-group-addon" id="addon-phone">Điện thoại</span>
													<input type="text" class="form-control" value="{!! $data->phone !!}" id="sdt" aria-describedby="addon-phone">
												</div>
												<br />
												<div class="input-group">
													<span class="input-group-addon" id="addon-email">Email</span>
													<input type="text" class="form-control" value="{!! $data->email !!}" id="email" aria-describedby="addon-email" readonly>
												</div>
												<br />
												<div class="input-group">
													<span class="input-group-addon" id="addon-address">Địa chỉ</span>
													<input type="text" class="form-control" value="{!! $data->address !!}" id="address" aria-describedby="addon-address">
												</div>
												<br />



											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-success" data-dismiss="modal">Lưu &amp Thoát</button>
											</div>
										</div>

									</div>
								</div>

								<a href="#" class="btn btn-block btn-pf" type="button" data-toggle="modal" data-target="#editpw">Đổi Mật Khẩu</a>

								<!-- Modal -->
								<div id="editpw" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title text-center">Đổi Mật Khẩu</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>

											</div>
											<div class="modal-body">
												<div class="form-group">
													<input type="password" class="form-control" placeholder="Mật Khẩu Hiện Tại" id="password">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" placeholder="Mật Khẩu Mới" id="password">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" placeholder="Nhập Lại Mật Khẩu Mới" id="password">
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-success" data-dismiss="modal">Lưu &amp Thoát</button>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="">
							<div class="list-group">
								<a href="#" class="list-group-item active">
									Đánh Giá
								</a>
								<a href="#" class="list-group-item list-group-item-action">Nháp</a>
							</div>
						</div>
					</div>


					<div class="col-md-8">
						<div class="card">
							<div class="card-block">
								<h4>
									Đánh Giá
								</h4>
							</div>
						</div>
						<br>
						<div class="card">
							<div class="card-block">
								<div class="media">

									<img class="d-flex mr-3 img-circle" src="{{url('public/img/avartar2.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
										<blockquote>
											<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
											<p>
												Hàng xài bình thường, không gặp vấn đề
											</p>

											<small>Phạm Tuấn Anh <br>
												<em>
													<time datetime="2011-01-12">January 12th, 2011</time>
												</em>
											</small>
										</blockquote>
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-block">
								<div class="media">
									<img class="d-flex mr-3 img-circle" src="{{url('public/img/avartar.png')}}" alt="Generic placeholder image">
									<div class="media-body">
										<blockquote>
											<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
											<p>
												test
											</p>
											<small>trieuhai <br>
												<em>
													<time datetime="2011-01-12">January 12th, 2011</time>
												</em>
											</small>
										</blockquote>
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-block">
								<div class="media">
									<img class="d-flex mr-3 img-circle" src="{{url('public/img/avartar1.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
										<blockquote>
											<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
											<p>
												Chất lượng như website
											</p>
											<small>Le Duy Nguyen <br>
												<em>
													<time datetime="2011-01-12">January 12th, 2011</time>
												</em>
											</small>

										</blockquote>


									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-block">
								<div class="media">
									<img class="d-flex mr-3 img-circle" src="{{url('public/img/avartar1.jpg')}}" alt="Generic placeholder image">
									<div class="media-body">
										<blockquote>
											<div id="hearts-existing" class="starrr" data-rating='4'>****</div>
											<p>
												Hẹn đúng giờ, nhanh chóng
											</p>
											<small>Le Duy Nguyen<br>
												<em>
													<time datetime="2011-01-12">January 12th, 2011</time>
												</em>
											</small>
										</blockquote>


									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
@endsection