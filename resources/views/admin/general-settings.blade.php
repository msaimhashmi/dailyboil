@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-cog"></i> General Settings</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li class="active">General Settings</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<form method="post" enctype="multipart/form-data" name="formEdit" id="formEdit" action="{{ route('general-settings.update',$Generalsettings->id) }}">
						{{csrf_field()}}
      					{{method_field('put')}}
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" placeholder="Enter Title..." value="{{$Generalsettings->title}}" /></div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control" placeholder="Enter Description..." rows="4">{{$Generalsettings->description}}</textarea>
						</div>
						<div class="form-group">
							<label>Keywords</label>
							<input type="text" name="keywords" class="form-control" placeholder="Enter Keywords..." value="{{$Generalsettings->keywords}}"/>
						</div>
						<div class="form-group">
							<label>Cover Image</label>
							<div>
								<img style="max-width:300px;" id="coverImageShow" class="img-responsive img-thumbnail" src="/assets/uploads/{{$Generalsettings->coverImage}}" />
								<input type="hidden" name="oldCoverImage" value="{{$Generalsettings->coverImage}}" />
							</div>
							<div class="m-t-5">
								<input id="coverImage" type="file" class="hide" name="coverImage" />
								<button id="coverImageSelect" type="button" class="btn btn-xs btn-info"><small><i class="fa fa-upload"></i> &nbsp;Change Cover Image</small></button>
							</div>
						</div>
						<div class="form-group">
							<label>Background Image</label>
							<div>
								<img style="max-width:300px;" id="backgroundImageShow" class="img-responsive img-thumbnail" src="/assets/uploads/{{$Generalsettings->backgroundImage}}" />
								<input type="hidden" name="backgroundImage" value="{{$Generalsettings->backgroundImage}}" />
							</div>
							<div class="m-t-5">
								<input id="backgroundImage" type="file" class="hide" name="backgroundImage" />
								<button id="backgroundImageSelect" type="button" class="btn btn-xs btn-info"><small><i class="fa fa-upload"></i> &nbsp;Change Background Image</small></button>
							</div>
						</div>
						<div class="form-group">
							<label>Logo</label>
							<div>
								<img style="max-width:160px;" id="logoShow" class="img-responsive img-thumbnail" src="/assets/uploads/{{$Generalsettings->logo}}" />
								<input type="file" id="logo" class="hide" name="logo" value="{{$Generalsettings->logo}}" />
							</div>
							<div class="m-t-5">
								{{-- <input id="logo" type="file" class="hide" name="logo" /> --}}
								<button id="logoSelect" type="button" class="btn btn-xs btn-info"><small><i class="fa fa-upload"></i> &nbsp;Change Logo</small></button>
							</div>
						</div>
						<div class="form-group">
							<label>Logo Light</label>
							<div>
								<img style="background-color:#e8e8e8;max-width:160px;" id="logoLightShow" class="img-responsive img-thumbnail" src="/assets/uploads/{{$Generalsettings->logoLight}}" />
								<input type="hidden" name="oldLogoLight" value="{{$Generalsettings->logoLight}}" />
							</div>
							<div class="m-t-5">
								<input id="logoLight" type="file" class="hide" name="logoLight" />
								<button id="logoLightSelect" type="button" class="btn btn-xs btn-info"><small><i class="fa fa-upload"></i> &nbsp;Change Logo Light</small></button>
							</div>
						</div>
						<div class="form-group">
							<label>Favicon</label>
							<div>
								<img style="max-width:100px;" id="faviconShow" class="img-responsive img-thumbnail" src="/assets/uploads/{{$Generalsettings->favicon}}" />
								<input type="hidden" name="oldFavicon" value="{{$Generalsettings->favicon}}" />
							</div>
							<div class="m-t-5">
								<input id="favicon" type="file" class="hide" name="favicon" />
								<button id="faviconSelect" type="button" class="btn btn-xs btn-info"><small><i class="fa fa-upload"></i> &nbsp; Change Favicon</small></button>
							</div>
						</div>
						<div class="form-group">
							<label>Allow Direct Link <strong><small>(Download Links)</small></strong></label>
							<div>
								<input type="hidden" name="allowDirectLink" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($Generalsettings->allowDirectLink) && $Generalsettings->allowDirectLink == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" value="1" name="allowDirectLink">
							</div>
						</div>
						<div class="form-group">
							<label>Force <strong>(www)</strong></label>
							<div>
								<input type="hidden" name="www" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($Generalsettings->www) && $Generalsettings->www == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" value="1" name="www">
							</div>
						</div>
						<div class="form-group">
							<label>Force <strong>(https)</strong></label>
							<div>
								<input type="hidden" name="https" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($Generalsettings->https) && $Generalsettings->https == 1)checked="checked"@endif 
								data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" value="1" name="https">
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
