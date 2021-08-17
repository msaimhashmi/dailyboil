@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-file-o"></i> All Sources</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li class="active">Sources</li>
				</ol>
			</div>
		</div>
		<p><small><strong>Note : </strong>Drag the sources to change their order</small></p>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<ul class="list-group">
						<li class="active list-group-item">
							<div class="row">
								<div class="col-xs-3">Name</div>
								<div class="col-xs-3">Link Cache Time <small>(Seconds)</small></div>
								<div class="col-xs-2">Icon</div>
								<div class="col-xs-2">Status</div>
								<div class="col-xs-2">Actions</div>
							</div>
						</li>
						@foreach($sources as $source)
						<li class="sources-lists list-group-item" id="{{substr($source->name, 0, -4)}}">
							<div class="row">
								<div class="col-xs-3">{{$source->name}}</div>
								<div class="col-xs-3">{{$source->link_cache_time}}</div>
								<div class="col-xs-2">
									<img style="max-width:30px" src="/assets/uploads//{{$source->icon}}"/>
								</div>
								<div class="col-xs-2">
									@if(isset($source->status) && $source->status == 1)
									<a href="#" data-id="{{substr($source->name, 0, -4)}}" data-name="{{$source->name}}" data-action="off" class="status">
										<span class="label label-success"> On</span>
										@else 
									<a href="#" data-id="{{substr($source->name, 0, -4)}}" data-name="{{$source->name}}" data-action="on" class="status"><span class="label label-warning"> Off</span>
									</a>
										@endif
								</div>
								<div class="col-xs-2">
									<a title="Edit Source" href="{{route('sources.edit',$source->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
