@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-line-chart"></i> Analytics Settings</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li class="active">Analytics Settings</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<form method="post" action="{{route('analytics-settings.update',$analytic->id) }}">
						{{csrf_field()}}
  					{{method_field('put')}}
						<div class="form-group">
							<label>Status</label>
							<div>
								<input type="hidden" name="status" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($analytic->status) && $analytic->status == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="status-check" value="{{ $analytic->status }}" name="status">
							</div>
						</div>
						<div id="code-field" class="form-group hide">
							<label>Code</label>
							<textarea name="code" class="form-control" placeholder="Enter Analytics Code..." rows="7">{{$analytic->code}}</textarea>
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