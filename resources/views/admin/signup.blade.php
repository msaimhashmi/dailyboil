
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="https://www.digitalopment.com/downloader/assets/images/favicon.png">
		<title>Download All Videos - Signup</title>
		<meta name="description" content="The #1 Free Online Video Downloader allows you to download videos from Facebook, Vimeo, Break, Liveleak, Instagram, Soundcloud, Imgur and many more!">
		<meta name="keywords" content="download facebook videos, video downloader, facebook downloader, download online videos, download streaming videos">
		<link type="text/css" href="https://www.digitalopment.com/downloader/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="https://www.digitalopment.com/downloader/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link type="text/css" href="https://www.digitalopment.com/downloader/assets/css/vert-offset.css" rel="stylesheet">
		<link type="text/css" href="https://www.digitalopment.com/downloader/assets/css/style.css" rel="stylesheet">
		<style>
			html, body{
				height: 100%;
			}
		</style>
	</head>
	<body>
		
		<div class="login-box login-sidebar">
			<div class="white-box form-horizontal form-material">
				<a href="#" class="text-center center-block">
					<img src="https://www.digitalopment.com/downloader/assets/images/logo.jpg" alt="Logo">
				</a>
				<form role="form" method="post" action="/admin/signup">
					{{ csrf_field() }}    					
					 @if(session()->has('message'))
					    <div class="alert alert-success">
					        {{ session()->get('message') }}
					    </div>
					@endif				
					<div class="form-group m-t-40">
						<div class="col-xs-12">
							<input type="text" class="form-control login-controler" id="username" name="username" placeholder="Enter Your User Name..." value="" required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<input type="text" class="form-control login-controler" id="email" name="email" placeholder="Enter Email" value="" required autofocus />
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<input type="password" class="form-control login-controler" id="password" name="password" placeholder="Password..." value="" required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<input type="password" class="form-control login-controler" id="confirm_password" name="confirm_password" placeholder="Confirm Password..." value="" required />
						</div>
					</div>
					<div class="form-group text-center m-t-20">
						<div class="col-xs-12">
						<button class="btn btn-block text-uppercase login-btn" type="submit" name="submit" ><i class="fa fa-sign-in"></i> Sign Up</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<a href="/admin" class="text-dark pull-left"><i class="fa fa-lock m-r-5"></i> Login?</a>
							<!-- <a href="#" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot Your Password?</a> -->
						</div>
					</div>
				</form>
			</div>
		</div>
			
		<script type="text/javascript" src="https://www.digitalopment.com/downloader/assets/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="https://www.digitalopment.com/downloader/assets/bootstrap/js/bootstrap.min.js"></script>
			</body>
</html>