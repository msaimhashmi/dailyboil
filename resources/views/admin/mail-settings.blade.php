@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-envelope"></i> Mail Settings</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li class="active">Mail Settings</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					@if($mailsettings)
					<form method="post" action="{{ route('mail-settings.update',$mailsettings->id) }}">
					{{csrf_field()}}
  					{{method_field('put')}}
						<div class="form-group">
							<label>SMTP Status</label>
							<div>
								<input type="hidden" name="smtpStatus" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($mailsettings->smtpStatus) && $mailsettings->smtpStatus == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="smtpStatus-check" value="1" name="smtpStatus">
							</div>
						</div>
						<div id="settings-panel" class="hide">
							<div class="form-group">
								<label>Host</label>
								<input type="text" name="host" class="form-control" placeholder="Enter SMTP Host..." value="{{$mailsettings->host}}" />
							</div>
							<div class="form-group">
								<label>Port</label>
								<input type="number" name="port" class="form-control" placeholder="Enter SMTP Port..." value="{{$mailsettings->port}}" />
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" placeholder="Enter SMTP Username..." value="{{$mailsettings->username}}" />
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Enter SMTP Password..." value="{{$mailsettings->password}}" />
							</div>
						</div>
						<div class="form-group">
							<label>Contact Email</label>
							<input type="text" name="contactEmail" class="form-control" placeholder="Enter Contact Email..." value="{{$mailsettings->contactEmail}}" />
						</div>
						<div class="form-group m-b-0">
							<button type="submit" name="submit" class="btn btn-primary">
								<i class="fa fa-check-square-o"></i> Update
							</button>
						</div>
					</form>
					@elseif(!$mailsettings)
					<form method="post" action="{{ route('mail-settings.store') }}">
					{{csrf_field()}}
						<div class="form-group">
							<label>SMTP Status</label>
							<div>
								<input type="hidden" name="smtpStatus" value="0"/>
								<input data-toggle="toggle" data-of="No" data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="smtpStatus-check" value="1" name="smtpStatus">
							</div>
						</div>
						<div id="settings-panel" class="hide">
							<div class="form-group">
								<label>Host</label>
								<input type="text" name="host" class="form-control" placeholder="Enter SMTP Host..." value="" />
							</div>
							<div class="form-group">
								<label>Port</label>
								<input type="number" name="port" class="form-control" placeholder="Enter SMTP Port..." value="" />
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" placeholder="Enter SMTP Username..." value="" />
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Enter SMTP Password..." value="" />
							</div>
						</div>
						<div class="form-group">
							<label>Contact Email</label>
							<input type="text" name="contactEmail" class="form-control" placeholder="Enter Contact Email..." value="" />
						</div>
						<div class="form-group m-b-0">
							<button type="submit" name="submit" class="btn btn-primary">
								<i class="fa fa-check-square-o"></i> Update
							</button>
						</div>
					</form>
					@endif
				</div>
			</div>
		</div>
	</div></div>
@endsection
