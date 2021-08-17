@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-tachometer"></i> Dashboard</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li class="active"><a href="/admin/dashboard">Dashboard</a></li>
				</ol>
			</div>
		</div>
		
		{{-- Today --}}
		<h3>{{$today}}</h3>
		<div class="row
			">
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-success"><i class="fa fa-download"></i> &nbsp;Downloads</span>
						</li>
						<li class="text-right">
							<span class="counter text-success">{{ $tddownloads }}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-purple"><i class="fa fa-eye"></i> &nbsp;Page Views</span>
						</li>
						<li class="text-right">
							<span class="counter text-purple">{{$tdpageViews}}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-info"><i class="fa fa-user"></i> &nbsp;Unique Views</span>
						</li>
						<li class="text-right">
							<span class="text-info">{{$tduniqueViews}}</span>
						</li>
					</ul>
				</div>
			</div>
		</div>

		{{-- Last 7 Days --}}
		<h3>{{$weekTime}}</h3>
		<div class="row
			">
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-success"><i class="fa fa-download"></i> &nbsp;Downloads</span>
						</li>
						<li class="text-right">
							<span class="counter text-success">{{ $wdownloads }}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-purple"><i class="fa fa-eye"></i> &nbsp;Page Views</span>
						</li>
						<li class="text-right">
							<span class="counter text-purple">{{$wpageViews}}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-info"><i class="fa fa-user"></i> &nbsp;Unique Views</span>
						</li>
						<li class="text-right">
							<span class="text-info">{{$wuniqueViews}}</span>
						</li>
					</ul>
				</div>
			</div>
		</div>

		{{-- Last 30 Days --}}
		<h3>{{$monthTime}}</h3>
		<div class="row
			">
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-success"><i class="fa fa-download"></i> &nbsp;Downloads</span>
						</li>
						<li class="text-right">
							<span class="counter text-success">{{ $mdownloads }}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-purple"><i class="fa fa-eye"></i> &nbsp;Page Views</span>
						</li>
						<li class="text-right">
							<span class="counter text-purple">{{$mpageViews}}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-info"><i class="fa fa-user"></i> &nbsp;Unique Views</span>
						</li>
						<li class="text-right">
							<span class="text-info">{{$muniqueViews}}</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		{{-- All Time --}}
		<h3>{{$totalTime}}</h3>
		<div class="row
			">
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-success"><i class="fa fa-download"></i> &nbsp;Downloads</span>
						</li>
						<li class="text-right">
							<span class="counter text-success">{{ $alldownloads }}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-purple"><i class="fa fa-eye"></i> &nbsp;Page Views</span>
						</li>
						<li class="text-right">
							<span class="counter text-purple">{{$allpageViews}}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="white-box analytics-info">
					<ul class="list-inline two-part">
						<li class="text-left">
							<span class="text-info"><i class="fa fa-user"></i> &nbsp;Unique Views</span>
						</li>
						<li class="text-right">
							<span class="text-info">{{$alluniqueViews}}</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	@endsection