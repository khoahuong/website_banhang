@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<a href="{{route('login')}}"><h6 class="inner-title">Đăng nhập</h6></a>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>	
<div class="container">
		<div id="content">			
			<form action="{{route('login')}}" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
					
					<!--thông báo lỗi xảy ra nếu có khi đăng nhập-->
					@if(Session::has('flag'))
						<div class="alert alert-{{Session::get('flag')}}">{{Session::get('thongbao1')}}</div>
					@endif
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<h7>Khách hàng vui lòng điền đầy đủ thông tin vào phần có dấu (*)</h7>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" name="email" placeholder="Nhập email đã đăng kí tài khoản" required>
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu*</label>
							<input type="password" name="password" placeholder="Nhập vào mật khẩu" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng nhập</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection