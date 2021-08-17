@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-file-o"></i> All Pages</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li class="active">Pages</li>
				</ol>
			</div>
		</div>
		<p><small><strong>Note : </strong>Drag the pages to change their order</small></p>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<div class="m-b-10">
						<a href="{{ route('pages.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New Page</a>
					</div>
					<ul class="list-group">
						<li class="active list-group-item">
							<div class="row">
								<div class="col-xs-3">Title</div>
								<div class="col-xs-3">Permalink</div>
								<div class="col-xs-2">Position</div>
								<div class="col-xs-2">Published</div>
								<div class="col-xs-2">Actions</div>
							</div>
						</li>
						@if($pages)
						@foreach($pages as $page)
						<li class="pages-lists list-group-item" id="1">
							<div class="row">
								<div class="col-xs-3">{{$page->title}}</div>
								<div class="col-xs-3">{{$page->permalink}}</div>
								<div class="col-xs-2">
                                @if($page->position == '1')
									<span class="label label-info">Header</span>  
                                @elseif($page->position == '2')
									<span class="label label-info">Footer</span>
                                @elseif($page->position == '3')
									<span class="label label-info">Both</span>
								@endif
								</div>
								<div class="col-xs-2">
									 @if(isset($page->status) && $page->status == 1)
									<span class="label label-success">Yes</span>
									@else
									<span class="label label-warning">No</span>
									 @endif
								</div>
								<div class="col-xs-2">
									<a title="Edit Page" href="{{ route('pages.edit',$page->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
									<a data-permalink="{{$page->permalink}}" data-id="{{$page->id}}" title="Delete Page" class="delbtn btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
								</div>
							</div>
						</li>
						@endforeach
						@else
						<div class="alert alert-danger">Pages Not Found..!!</div>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
