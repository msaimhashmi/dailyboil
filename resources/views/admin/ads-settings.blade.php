@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-code"></i> Ads Settings</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li class="active">Ads Settings</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<form method="post" action="{{route('ads-settings.update',$ads->id) }}">
					{{csrf_field()}}
  					{{method_field('put')}}
						<div class="row">
							<div class="col-sm-10">
								<h3 class="m-t-0">Ad - 728 x 90</h3>
								<hr class="m-t-0" />
								<div class="row">
									<div class="col-sm-2 m-b-10">
										<div class="form-group m-b-0">
											<label>Status</label>
											<div>
												<input type="hidden" name="ad728x90Status" value="0"/>
												<input data-toggle="toggle" data-of="No" @if(isset($ads->ad728x90Status) && $ads->ad728x90Status == 1)checked="checked"@endif 
												data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="ad728x90Status-check" value="1" name="ad728x90Status">
											</div>
										</div>
									</div>
									<div class="col-sm-2 m-b-10">
										<div class="form-group m-b-0">
											<label>Responsive</label>
											<div>
												<input type="hidden" name="ad728x90ResponsiveStatus" value="0"/>
												<input data-toggle="toggle" data-of="No" @if(isset($ads->ad728x90ResponsiveStatus) && $ads->ad728x90ResponsiveStatus == 1)checked="checked"@endif 
												data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="ad728x90ResponsiveStatus-check" value="1" name="ad728x90ResponsiveStatus">
											</div>
										</div>
									</div>
									<div class="col-sm-8">
										<div class="form-group">
											<label>Code</label>
											<textarea name="ad728x90" rows="5" class="text-re-no form-control" placeholder="Enter Ad Code">{{$ads->ad728x90}}</textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-10">
								<h3 class="m-t-0">Ad - 250 x 250</h3>
								<hr class="m-t-0" />
								<div class="row">
									<div class="col-sm-2 m-b-10">
										<div class="form-group m-b-0">
											<label>Status</label>
											<div>
												<input type="hidden" name="ad250x250Status" value="0"/>
												<input data-toggle="toggle" data-of="No" @if(isset($ads->ad250x250Status) && $ads->ad250x250Status == 1)checked="checked"@endif 
												data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="ad250x250Status-check" value="1" name="ad250x250Status">
											</div>
										</div>
									</div>
									<div class="col-sm-2 m-b-10">
										<div class="form-group m-b-0">
											<label>Responsive</label>
											<div>
												<input type="hidden" name="ad250x250ResponsiveStatu" value="0"/>
												<input data-toggle="toggle" data-of="No" @if(isset($ads->ad250x250ResponsiveStatu) && $ads->ad250x250ResponsiveStatu == 1)checked="checked"@endif 
												data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="ad250x250ResponsiveStatu" value="1" name="ad250x250ResponsiveStatu">
											</div>
										</div>
									</div>
									<div class="col-sm-8">
										<div class="form-group">
											<label>Code</label>
											<textarea name="ad250x250" rows="5" class="text-re-no form-control" placeholder="Enter Ad Code">{{$ads->ad250x250}}</textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-10">
								<h3 class="m-t-0">POP Ad</h3>
								<hr class="m-t-0" />
								<div class="row">
									<div class="col-sm-4 m-b-10">
										<div class="form-group m-b-0">
											<label>Status</label>
											<div>
												<input type="hidden" name="popAdStatus" value="0"/>
												<input data-toggle="toggle" data-of="No" @if(isset($ads->popAdStatus) && $ads->popAdStatus == 1)checked="checked"@endif 
												data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="popAdStatus-check" value="1" name="popAdStatus">
											</div>
										</div>
									</div>
									<div class="col-sm-8">
										<div class="form-group">
											<label>Code</label>
											<textarea name="popAd" rows="5" class="text-re-no form-control" placeholder="Enter Ad Code">{{$ads->popAd}}</textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>POP Ad Fequency <small>(Per Day For A Visitor)</small></label>
											<div class="m-b-5">
												<small>Enter 0 to show on every page load</small>
											</div>
											<input name="popAdFrequency" class="form-control" placeholder="Enter POP Ad Frequency..." value="{{$ads->popAdFrequency}}"/></div>
									</div>
								</div>
							</div>
						</div>
						<hr class="m-t-0" />
						<div class="form-group">
							<label>Display On Home Page</label>
							<div>
								<input type="hidden" name="displayOnHomePage" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($ads->displayOnHomePage) && $ads->displayOnHomePage == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="displayOnHomePage-check" value="1" name="displayOnHomePage">
							</div>
						</div>
						<div class="form-group">
							<label>Display On Dynamic Pages</label>
							<div>
								<input type="hidden" name="displayOnDynamicPages" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($ads->displayOnDynamicPages) && $ads->displayOnDynamicPages == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="displayOnDynamicPages-check" value="1" name="displayOnDynamicPages">
							</div>
						</div>
						<div class="form-group">
							<label>Display On Contact Page</label>
							<div>
								<input type="hidden" name="displayOnContactPage" value="0"/>
								<input data-toggle="toggle" data-of="No" @if(isset($ads->displayOnContactPage) && $ads->displayOnContactPage == 1)checked="checked"@endif data-size="small" data-onstyle="success" class="toggle btn btn-sm btn-default" type="checkbox" id="displayOnContactPage-check" value="1" name="displayOnContactPage">
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
	</div></div>
@endsection