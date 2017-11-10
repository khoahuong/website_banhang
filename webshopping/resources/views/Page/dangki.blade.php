@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<a href="{{route('signup')}}"><h6 class="inner-title">Đăng kí</h6></a>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>	
<div class="container">
		<div id="content">			
			<form action="{{route('signup')}}" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
					<!-- đưa ra các thông báo lỗi khi nhập không đúng-->
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								{{$err}}
							@endforeach
						</div>
					@endif
					<!--đưa ra thông báo đăng kí thành công tài khoản-->
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<h7>Khách hàng vui lòng điền đầy đủ thông tin vào phần có dấu (*)</h7>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Địa chỉ email*</label>
							<input type="email" name="email" placeholder="example@xyz.com" required>
						</div>

						<div class="form-block">
							<label for="fullname">Họ và tên*</label>
							<input type="text" name="fullname" placeholder="Họ tên đầy đủ" required>
						</div>

						<div class="form-block">
							<label for="address">Địa chỉ*</label>
							<input type="text" name="address" value="" placeholder="Nhập địa chỉ chi tiết" required>
						</div>

						<div class="form-block">
							<label for="phone">Số điện thoại*</label>
							<input type="text" name="phone" placeholder="Nhập số điện thoại" required>
						</div>
						<div class="form-block">
							<label for="phone">Tạo mật khẩu*</label>
							<input type="password" name="password" placeholder="Tạo mật khẩu nên nhiều hơn 8 kí tự" required>
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại mật khẩu*</label>
							<input type="password" name="re_password" placeholder="Nhập lại mật khẩu" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng kí</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection