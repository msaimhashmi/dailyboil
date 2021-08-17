@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-pencil-square-o"></i> Edit Page(Test)</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="https://localhost/downloader/admin/dashboard">Dashboard</a></li>
					<li><a href="https://localhost/downloader/admin/pages">Pages</a></li>
					<li class="active">Edit Page</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<form method="post" action="{{ route('pages.update',$page->id)}}">
					{{csrf_field()}}
  					{{method_field('put')}}
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" placeholder="Enter Title..." value="{{$page->title}}" />
						</div>
						<div class="form-group">
							<label>Permalink</label>
							<input type="hidden" name="oldPermalink" value="httpsyoutubecom" />
							<input type="text" name="permalink" class="form-control" placeholder="Enter Permalink (Optional : Leave the field to auto generate)" value="{{$page->permalink}}" />
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control" placeholder="Enter Description..." rows="4">{{$page->description}}</textarea>
						</div>
						<div class="form-group">
							<label>Keywords</label>
							<input type="text" name="keywords" class="form-control" placeholder="Enter Keywords..." value="{{$page->keywords}}" />
						</div>
						<div class="form-group">
							<label>Content</label>
							<textarea id="content" name="content" class="form-control" placeholder="Enter Content..." rows="4">{{$page->content}}</textarea>
						</div>
						<div class="form-group">
							<label>Position</label>
							<select class="form-control" name="position" value="{{$page->position}}">
								<option value="{{ $page->position == '1' ? 'selected':'1' }}" >Header</option>
								<option value="{{ $page->position == '2' ? 'selected':'2' }}" >Footer</option>
								<option value="{{ $page->position == '3' ? 'selected':'3' }}">Both</option>
							</select>
						</div>
						<div class="form-group">
							<label>Status</label>
							<div>
								<input type="hidden" name="status" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($page->status) && $page->status == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="status-check" value="1" name="status">
							</div>
						</div>
						<div class="form-group m-b-0">
							<button type="submit" name="submit" class="btn btn-primary">
								<i class="fa fa-pencil-square-o"></i> Update
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection