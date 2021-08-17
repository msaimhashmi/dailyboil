@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-share"></i> Social Sharing</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li class="active">Social Sharing</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<form method="post" action="{{route('social-sharing.update',$socialsharing->id)}}">
					{{csrf_field()}}
  					{{method_field('put')}}
						<div class="form-group">
							<label>Status</label>
							<div>
								<input type="hidden" name="status" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($socialsharing->status) && $socialsharing->status == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="status-check" value="1" name="status">
							</div>
						</div>
						<div id="settings-panel" class="">
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6 col-sm-4">
										<label>Facebook Sharing</label>
									</div>
									<div class="col-xs-6 col-sm-4">
										<input type="hidden" name="facebookSharing" value="0"/>
										<input data-toggle="toggle" data-of="No" @if(isset($socialsharing->facebookSharing) && $socialsharing->facebookSharing == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="facebookSharing-check" value="1" name="facebookSharing">
									</div>
								</div>
							</div>
							<div class="form-group " id="facebook-sharing">
								<label>Facebook Page Name</label>
								<input type="text" name="facebookPageName" class="form-control" placeholder="Enter Facebook Page Name..." value="{{$socialsharing->facebookPageName}}" />
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6 col-sm-4">
										<label>GooglePlus Sharing</label>
									</div>
									<div class="col-xs-6 col-sm-4">
										<input type="hidden" name="googleplusSharing" value="0"/>
										<input data-toggle="toggle" data-of="No" @if(isset($socialsharing->googleplusSharing) && $socialsharing->googleplusSharing == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="googleplusSharing-check" value="1" name="googleplusSharing">
									</div>
								</div>
							</div>
							<div class="form-group " id="googleplus-sharing">
								<label>GooglePlus Page Id</label>
								<input type="text" name="googleplusPageId" class="form-control" placeholder="Enter GooglePlus Page Id..." value="{{$socialsharing->googleplusPageId}}" />
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6 col-sm-4">
										<label>Twitter Sharing</label>
									</div>
									<div class="col-xs-6 col-sm-4">
										<input type="hidden" name="twitterSharing" value="0"/>
										<input data-toggle="toggle" data-of="No" @if(isset($socialsharing->twitterSharing) && $socialsharing->twitterSharing == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="twitterSharing-check" value="1" name="twitterSharing">
									</div>
								</div>
							</div>
							<div class="form-group " id="twitter-sharing">
								<label>Twitter Tweet Text</label>
								<input type="text" name="twitterTweetText" class="form-control" placeholder="Enter Twitter Tweet Text..." value="{{$socialsharing->twitterTweetText}}" />
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6 col-sm-4">
										<label>LinkedIn Sharing</label>
									</div>
									<div class="col-xs-6 col-sm-4">
										<input type="hidden" name="linkedinSharing" value="0"/>
										<input data-toggle="toggle" data-of="No" @if(isset($socialsharing->linkedinSharing) && $socialsharing->linkedinSharing == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="linkedinSharing-check" value="1" name="linkedinSharing">
									</div>
								</div>
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