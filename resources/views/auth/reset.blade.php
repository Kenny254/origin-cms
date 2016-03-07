<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Web App">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Password Reset - Web App</title>

		<!-- Roboto font -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:700,500,400,300,100&ampamp;subset=latin,latin-ext,cyrillic,cyrillic-ext%22" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="/css/animate.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/web_app/web_app.css">
		<style type="text/css">
			.centrify {
				position: absolute;
				left: 50%;
				top: 50%;
				margin-left: -15px;
				margin-top: -15px;
			}
		</style>
	</head>
	<body class="gray-bg">
		<div class="text-center">
			<h1 class="logo-name">Web App</h1>
		</div>
		<div class="middle-box text-center loginscreen animated fadeInDown" style="padding-top: 0px;">
			<div class="ibox-content">
				<h3>Password Reset Form</h3>
				<form action="/password/reset" method="POST" name="password_reset" id="password_reset" class="m-t" role="form">
					@if (count($errors) > 0)
						@foreach ($errors->all() as $error)
							<div class="block">
								<div class="alert red-bg">
									<button type="button" class="close" data-dismiss="alert">
										<i class="fa fa-times"></i>
									</button>
									<strong>
										<i class="fa fa-exclamation-triangle fa-lg"></i> {{ $error }}
									</strong>
								</div>
							</div>
						@endforeach
					@endif
					{!! csrf_field() !!}
					<input type="hidden" name="token" value="{{ $token }}">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-envelope"></i>
							</span>
							<input type="text" name="email" id="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}">
						</div>
						<div class="text-danger" id="alert" style="text-align: left; display: none;">Please Enter Email Address</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-key"></i>
							</span>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password">
						</div>
						<div class="text-danger" id="alert" style="text-align: left; display: none;">Please Enter Password</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-key"></i>
							</span>
							<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
						</div>
						<div class="text-danger" id="alert" style="text-align: left; display: none;">Please Enter Confirm Password</div>
					</div>
					<button type="submit" class="btn btn-primary block full-width m-b">Reset Password</button>
				</form>
			</div>
		</div>
		<!-- Mainly scripts -->
		<script type="text/javascript" src="/js/jquery.js"></script>
		<script type="text/javascript" src="/js/bootstrap.js"></script>
	</body>
</html>