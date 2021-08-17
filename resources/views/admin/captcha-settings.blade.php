@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-rocket"></i> Captcha Settings</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="https://localhost/downloader/admin/dashboard">Dashboard</a></li>
					<li class="active">Captcha Settings</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<form method="post" name="captcha-settings" id="captcha-settings" action="{{ route('captcha-settings.update',$captcha->id)}}">
					{{csrf_field()}}
  					{{method_field('put')}}
						<div class="form-group">
							<label>Site Key</label>
							<input type="text" name="siteKey" class="form-control" placeholder="Enter Site Key..." value="{{$captcha->siteKey}}" />
						</div>
						<div class="form-group">
							<label>Secret Key</label>
							<input type="text" name="secretKey" class="form-control" placeholder="Enter Secret Key..." value="{{$captcha->secretKey}}" />
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-6 col-sm-5">
									<label>Captcha On Login Page</label>
								</div>
								<div class="col-xs-6 col-sm-4">
								<input type="hidden" name="loginCaptcha" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($captcha->loginCaptcha) && $captcha->loginCaptcha == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" value="1" name="loginCaptcha">

									{{-- <input type="checkbox" name="loginCaptcha[]" data-toggle="toggle" data-size="small" data-onstyle="success"  value="{{$captcha->loginCaptcha}}" {{(isset($captcha->loginCaptcha) && $captcha->loginCaptcha == 1 ? "checked" : 0)}}> --}}
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-6 col-sm-5">
									<label>Captcha On Password Reset Page</label>
								</div>
								<div class="col-xs-6 col-sm-4">
									<input type="hidden" name="forgotPasswordCaptcha" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($captcha->forgotPasswordCaptcha) && $captcha->forgotPasswordCaptcha == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" value="1" name="forgotPasswordCaptcha">

									{{-- <input type="checkbox" name="forgotPasswordCaptcha[]" data-toggle="toggle" data-size="small" data-onstyle="success" value="{{$captcha->forgotPasswordCaptcha}}" {{(isset($captcha->forgotPasswordCaptcha) && $captcha->forgotPasswordCaptcha == 1 ? "checked" : "")}} > --}}
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-6 col-sm-5">
									<label>Captcha On Contact Page</label>
								</div>
								<div class="col-xs-6 col-sm-4">
									<input type="hidden" name="contactCaptcha" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($captcha->contactCaptcha) && $captcha->contactCaptcha == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" value="1" name="contactCaptcha">

									{{-- <input type="checkbox" name="contactCaptcha[]" data-toggle="toggle" data-size="small" data-onstyle="success" value="{{$captcha->contactCaptcha}}" {{(isset($captcha->contactCaptcha) && $captcha->contactCaptcha == 1 ? "checked" : 0)}}> --}}
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-6 col-sm-5">
									<label>Captcha On Reset Password Page</label>
								</div>
								<div class="col-xs-6 col-sm-4">
									<input type="hidden" name="resetPasswordCaptcha" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($captcha->resetPasswordCaptcha) && $captcha->resetPasswordCaptcha == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" value="1" name="resetPasswordCaptcha">

									{{-- <input type="checkbox" name="resetPasswordCaptcha[]" data-toggle="toggle" data-size="small" data-onstyle="success" value="{{$captcha->resetPasswordCaptcha}}" {{(isset($captcha->resetPasswordCaptcha) && $captcha->resetPasswordCaptcha == 1 ? "checked" : 0)}}> --}}
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Show CaptchaAfter Failed Login Attempts (<small>Only For Login Page</small>)</label>
							<input type="hidden" name="captchaShowFailedAttempts" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($captcha->captchaShowFailedAttempts) && $captcha->captchaShowFailedAttempts == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" value="1" name="captchaShowFailedAttempts">

							{{-- <input type="number" name="captchaShowFailedAttempts" class="form-control" placeholder="Enter Attempts..." value="{{$captcha->captchaShowFailedAttempts}}" /> --}}
						</div>
						<div class="form-group m-b-0">
							<button type="submit" name="submit" class="btn btn-primary">
								<i class="fa fa-check-square-o"></i> Update
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div></div>
@endsection