@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-language"></i> All Languages</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="https://localhost/downloader/admin/dashboard">Dashboard</a></li>
					<li class="active">Languages</li>
				</ol>
			</div>
		</div>
		<p><small><strong>Note : </strong>Drag the languages to change their order</small></p>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<div class="m-b-10">
						<a href="{{ route('languages.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New Language</a>
					</div>
					<ul class="list-group">
						<li class="active list-group-item">
							<div class="row">
								<div class="col-xs-3">Name</div>
								<div class="col-xs-3">Code</div>
								<div class="col-xs-2">Published</div>
								<div class="col-xs-2">Complete</div>
								<div class="col-xs-2">Actions</div>
							</div>
						</li>
						@if($languages)
						@foreach($languages as $lang)
						<li class="languages-lists list-group-item" id="1">
							<div class="row">
								<div class="col-xs-3">{{$lang->name}}</div>
								<div class="col-xs-3">{{$lang->code}}</div>
								<div class="col-xs-2">
									<span class="label label-success">{{(isset($lang->status) && $lang->status == 1 ? "Yes" : "No")}}</span>
								</div>
								<div class="col-xs-2">
									<span class="label label-info">100%</span>
								</div>
								<div class="col-xs-2">
									<a title="Edit Language" href="{{ route('languages.edit', $lang->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
									<form method="post" action="{{ route('languages.destroy' ,$lang->id) }}">
                            			{{ csrf_field() }}
                           	 			{{ method_field('delete')}}
                           	 			<a href="/admin/languages/delete/{{$lang->id}}"><button onclick="return confirm('Are You Sure Want To Delete This..!!')" data-status="{{$lang->id}}" data-id="{{$lang->id}}" class="dellangbtn btn btn-xs btn-danger"><i class="fa fa-trash"></i></button></a>
								</form>
									<a title="Edit Language Values" href="{{ route('languages.show', $lang->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
								</div>
							</div>
						</li>
						@endforeach
						@else
						<div class="alert alert-danger">No Languages Found..!!</div>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div></div>
@endsection
