@extends('layouts.master')
@section('contentt')
<div id="loader-div" class="p-t-40 p-b-40 text-center hide">
    <img src="/assets/images/loader.svg" />
</div>
<div class="page-content">
    <div class="features-list">
        <div class="container">
            <div class="row p-b-30">
                <div class="col-xs-12 col-md-5">
				    <div id="video-data">
				    	<h1><?php echo $oembed[->title] ?></h1>
				        
				        <h1><?php echo $oembed->thumbnail_width ?></h1>
				        
				        <p><?php echo $oembed->description ?></p>
				        
				        
				    </div>
				</div>
				<div class="col-xs-12 col-md-5">
				    <div id="video-data">
				        
				        <?php echo html_entity_decode($oembed->html) ?>
				        <h2>by <a href="<?php echo $oembed->author_url ?>"><?php echo $oembed->author_name ?></a></h2>
				    </div>
				</div>
			</div>
		</div>
	</div>
    <div class="features-list">
        <div class="container">
            <div class="row p-b-30">
                <div class="col-xs-12 col-md-5">
                    <h3>
                        @foreach($json as $member){{ $member['multiple_sources_section_heading'] }}@endforeach
                    </h3>
                    <p>@foreach($json as $member){{ $member['multiple_sources_section_description'] }}@endforeach</p>
                </div>
                <div class="col-xs-12 col-md-7">
                    <img class="img-responsive" src="/assets/uploads/{{$Generalsettings->coverImage}}" alt="Multiple Sources">
                </div>
            </div>
            <div class="row p-t-40 p-b-20">
                <div class="col-xs-12 col-md-6 pull-right">
                    <h3><p>@foreach($json as $member){{ $member['multiple_formats_section_heading'] }}@endforeach</p></h3>
                    <p>@foreach($json as $member){{ $member['multiple_formats_section_description'] }}@endforeach</p>
                </div>
                <div class="col-xs-12 col-md-6 pull-left">
                    <img class="img-responsive formates-image" src="/assets/images/formats.png" alt="Multiple Formats">
                </div>
            </div>
        </div>
    </div>
        
    <div class="bg-alt">
        <div class="container">
            <div class="supported-sources">
                <h2>@foreach($json as $member){{ $member['supported_sources'] }}@endforeach<span class="badge custom">{{$count_source}}</span></h2>
                <div class="s-list">
                    @foreach($sources as $source)
                    @if($source->status ==1)
                    <div class="product-sList">
                        <div class="s-img">
                            <img class="img-responsive" src="/assets/uploads/{{$source->icon}}">
                        </div>
                        <div class="s-name">{{$source->name}}</div>
                    </div>
                    @endif
                    @endforeach
                    <div class="product-sList">
                        <div class="s-img">
                            <img src="/assets/images/sources/more.png">
                        </div>
                        <div class="s-name">@foreach($json as $member){{ $member['more_coming_soon'] }}@endforeach</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

