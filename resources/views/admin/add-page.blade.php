@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-plus-circle"></i> Add New Page</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li><a href="/admin/pages">Pages</a></li>
					<li class="active">Add New Page</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<form method="post" action="{{ route('pages.store') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" placeholder="Enter Title..." value="" />
						</div>
						<div class="form-group">
							<label>Permalink</label>
							<input type="text" name="permalink" class="form-control" placeholder="Enter Permalink (Optional : Leave the field to auto generate)" value="" />
													</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control" placeholder="Enter Description..." rows="4"></textarea>
													</div>
						<div class="form-group">
							<label>Keywords</label>
							<input type="text" name="keywords" class="form-control" placeholder="Enter Keywords..." value="" />
													</div>
						<div class="form-group">
							<label>Content</label>
							<textarea id="content" name="content" class="form-control" placeholder="Enter Content..." rows="4"></textarea>
													</div>
						<div class="form-group">
							<label>Position</label>
							<select class="form-control" name="position">
								<option value="1" >Header</option>
								<option value="2" >Footer</option>
								<option value="3" >Both</option>
							</select>
						</div>
						<div class="form-group">
							<label>Status</label>
							<div>
								<input type="hidden" name="status" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($socialsharing->status) && $socialsharing->status == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="status-check" value="1" name="status">
								
								{{-- <input type="checkbox" name="status" data-toggle="toggle" data-size="small" data-onstyle="success"  /> --}}
							</div>
						</div>
						<div class="form-group m-b-0">
							<button type="submit" name="submit" class="btn btn-primary">
								<i class="fa fa-plus-circle"></i> Add
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection