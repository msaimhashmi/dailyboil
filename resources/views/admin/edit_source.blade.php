@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-cog"></i> Edit Source ({{$source->name}})</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li><a href="/admin/sources">Sources</a></li>
					<li class="active">Edit Source</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<form method="post" name="formEdit" id="formEdit" action="{{ route('sources.update',$source->id) }}" enctype="multipart/form-data">
					{{csrf_field()}}
  					{{method_field('put')}}
						<div class="form-group">
							<label>Name</label>
							<input readonly type="text" name="name" class="form-control" placeholder="Enter Name..." value="{{$source->name}}" />
						</div>
						<div class="form-group">
							<label>Website</label>
							<input readonly type="text" name="website" class="form-control" placeholder="Enter Website..." value="{{$source->website}}" />
						</div>
						<div class="form-group">
							<label>Link Cache Time (In Seconds)</label>
							<input type="text" name="link_cache_time" class="form-control" placeholder="Enter Link Cache Time..." value="{{$source->link_cache_time}}" />
						</div>
						<div class="form-group">
							<label>Icon</label>
							<div>
								<img style="max-width:100px;" id="iconShow" class="img-responsive img-thumbnail" src="/assets/uploads/{{$source->icon}}" />
								{{$source->icon}}
								<input type="hidden" name="oldicon" value="{{$source->icon}}" />
							</div>
							<div class="m-t-5">
								<input id="icon" type="file" class="hide" name="icon" />
								<button id="iconSelect" type="button" class="btn btn-xs btn-info"><small><i class="fa fa-upload"></i> &nbsp; Change Icon</small></button>
							</div>
													</div>
						<div class="form-group">
							<label>Status</label>
							<div>
								<input type="hidden" name="status" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($source->status) && $source->status == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" value="1" name="status">
							</div>
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