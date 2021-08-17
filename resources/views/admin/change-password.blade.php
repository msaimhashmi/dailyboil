@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-key"></i> Change Password</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li class="active">Change Password</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<form method="POST" action="{{ route('change-password.store') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
								<div class="alert alert-danger"><small>{{ $error }}</small></div>
                         @endforeach 
                         @if(session()->has('message'))
						    <div class="alert alert-success">
						        {{ session()->get('message') }}
						    </div>
						@endif	

						<div class="form-group">
							<label>Current Password</label>
							<input type="password" name="current_password" class="form-control" placeholder="Enter Old Password..." value="" />
						</div>
						<div class="form-group">
							<label>New Password</label>
							<input type="password" name="new_password" class="form-control" placeholder="Enter New Password..." value="" />
						</div>
						<div class="form-group">
							<label>Confirm New Password</label>
							<input type="password" name="new_confirm_password" class="form-control" placeholder="Confirm New Password..." value="" />
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
	</div>
	</div>
@endsection