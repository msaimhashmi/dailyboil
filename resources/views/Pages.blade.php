@extends('frontend.master')
@section('contentt')

	<div class="page-content pages">
		<div class="container">
		    <div class="page-inner">
				<h2>{{$page->title}}</h2>
				<p>
					{{$page->content}}
				</p>
		    </div>
		</div>
	</div>

@endsection