@extends('admin.layout.master')
@section('content')
<div id="page-wrapper" class="dashboard-page">
<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title"><i class="fa fa-pencil-square-o"></i> Edit Language Values ({{$language->name}})</h4>
			</div>
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="/admin/dashboard">Dashboard</a></li>
					<li><a href="/admin/languages">languages</a></li>
					<li class="active">Edit Language Values</li>
				</ol>
			</div>
		</div>
		<p><small><strong>Note : </strong>Text between <strong>*{* YOUR TEXT *}*</strong> will be bold</small></p>
		<div class="row">
			<div class="col-md-12">
								<div class="white-box">
					<form method="post" action="/admin/languages/update_values/{{$language->id}}">
						{{csrf_field()}}
  						{{method_field('put')}}
							<div class="form-group">
								<label for="Home">Home</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Home</small></div>
								<input type="text" hidden="" name="language_id" value="{{$language->id}}">
								<input type="text" name="home" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->home}}" />	
							</div>
								
							<div class="form-group">
								<label for="Hero Section Title">Hero Section Title</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Free Video Downloader online</small></div>
								<input type="text" name="title" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->title}}" />	
							</div>
								
							<div class="form-group">
								<label for="SearchBar Placeholder">SearchBar Placeholder</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Enter your Video link here...</small></div>
								<input type="text" name="search_bar_placeholder" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->search_bar_placeholder}}" />	
							</div>
								
							<div class="form-group">
								<label for="Get in touch with us">Get in touch with us</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Get in touch with us</small></div>
								<input type="text" name="get_in_touch_with_us" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->get_in_touch_with_us}}" />	
							</div>
								
							<div class="form-group">
								<label for="Source">Source</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Source</small></div>
								<input type="text" name="source" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->source}}" />	
							</div>
								
							<div class="form-group">
								<label for="Share on Facebook">Share on Facebook</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Share on Facebook</small></div>
								<input type="text" name="share_on_facebook" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->share_on_facebook}}" />	
							</div>
								
							<div class="form-group">
								<label for="Share on Twitter">Share on Twitter</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Share on Twitter</small></div>
								<input type="text" name="share_on_twitter" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->share_on_twitter}}" />	
							</div>
								
							<div class="form-group">
								<label for="Share on Google+">Share on Google+</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Share on Google+</small></div>
								<input type="text" name="share_on_googleplus" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->share_on_googleplus}}" />	
							</div>
								
							<div class="form-group">
								<label for="Share on VK">Share on VK</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Share on VK</small></div>
								<input type="text" name="share_on_vk" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->share_on_vk}}" />	
							</div>
								
							<div class="form-group">
								<label for="Share on WhatsApp">Share on WhatsApp</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Share on WhatsApp</small></div>
								<input type="text" name="share_on_whatsapp" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->share_on_whatsapp}}" />	
							</div>
								
							<div class="form-group">
								<label for="Video">Video</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Video</small></div>
								<input type="text" name="video" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->video}}" />	
							</div>
								
							<div class="form-group">
								<label for="Video only">Video only</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Video only</small></div>
								<input type="text" name="video_only" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->video_only}}" />	
							</div>
								
							<div class="form-group">
								<label for="More">More</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>More</small></div>
								<input type="text" name="more" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->more}}" />	
							</div>
								
							<div class="form-group">
								<label for="Less">Less</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Less</small></div>
								<input type="text" name="less" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->less}}" />	
							</div>
								
							<div class="form-group">
								<label for="Audio">Audio</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Audio</small></div>
								<input type="text" name="audio" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->audio}}" />	
							</div>
								
							<div class="form-group">
								<label for="GIF">GIF</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>GIF</small></div>
								<input type="text" name="gif" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->gif}}" />	
							</div>
								
							<div class="form-group">
								<label for="Quality">Quality</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Quality</small></div>
								<input type="text" name="quality" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->quality}}" />	
							</div>
								
							<div class="form-group">
								<label for="Format">Format</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Format</small></div>
								<input type="text" name="format" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->format}}" />	
							</div>
								
							<div class="form-group">
								<label for="Size">Size</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Size</small></div>
								<input type="text" name="size" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->size}}" />	
							</div>
								
							<div class="form-group">
								<label for="Downloads">Downloads</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Downloads</small></div>
								<input type="text" name="downloads" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->downloads}}" />	
							</div>
								
							<div class="form-group">
								<label for="Download">Download</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Download</small></div>
								<input type="text" name="download" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->download}}" />	
							</div>
								
							<div class="form-group">
								<label for="Error">Error</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Error</small></div>
								<input type="text" name="error" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->error}}" />	
							</div>
								
							<div class="form-group">
								<label for="Source not found error">Source not found error</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Currently this source isn't supported, maybe we will add it in future.</small></div>
								<input type="text" name="source_not_found_error" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->source_not_found_error}}" />	
							</div>
								
							<div class="form-group">
								<label for="Video not found error">Video not found error</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Unable to fetch video, Invalid link or Video Doesn't Exist.</small></div>
								<input type="text" name="video_not_found_error" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->video_not_found_error}}" />	
							</div>
								
							<div class="form-group">
								<label for="Invalid Url Error">Invalid Url Error</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Invalid Url. Make sure url is with *{*http*}* or *{*https*}*</small></div>
								<input type="text" name="invalid_url_error" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->invalid_url_error}}" />	
							</div>
								
							<div class="form-group">
								<label for="Stay in touch with us">Stay in touch with us</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Stay in touch with us</small></div>
								<input type="text" name="stay_in_touch_with_us" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->stay_in_touch_with_us}}" />	
							</div>
								
							<div class="form-group">
								<label for="Features Heading">Features Heading</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Powerful Features to Download Videos</small></div>
								<input type="text" name="features_heading" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->features_heading}}" />	
							</div>
								
							<div class="form-group">
								<label for="Multiple Sources Section Heading">Multiple Sources Section Heading</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Download Videos from Multiple Sources</small></div>
								<input type="text" name="multiple_sources_section_heading" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->multiple_sources_section_heading}}" />	
							</div>
								
							<div class="form-group">
								<label for="Multiple Sources Section Description">Multiple Sources Section Description</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Video Downloader Script offers you to download videos from multiple sources which includes Youtube, Vimeo, Facebook, Dailymotion, SoundCloud, Instagram, Liveleak, Break and Imgur.</small></div>
								<input type="text" name="multiple_sources_section_description" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->multiple_sources_section_description}}" />	
							</div>
								
							<div class="form-group">
								<label for="Multiple Formats Section Heading">Multiple Formats Section Heading</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Download Videos in Multiple Formats</small></div>
								<input type="text" name="multiple_formats_section_heading" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->multiple_formats_section_heading}}" />	
							</div>
								
							<div class="form-group">
								<label for="Multiple Formats Section Description">Multiple Formats Section Description</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Download videos in multiple formats including MP4, AVI, MP3, WEBM, 3GP.</small></div>
								<input type="text" name="multiple_formats_section_description" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->multiple_formats_section_description}}" />	
							</div>
								
							<div class="form-group">
								<label for="Supported Sources">Supported Sources</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Supported Sources</small></div>
								<input type="text" name="supported_sources" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->supported_sources}}" />	
							</div>
								
							<div class="form-group">
								<label for="More coming soon...">More coming soon...</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>More coming soon...</small></div>
								<input type="text" name="more_coming_soon" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->more_coming_soon}}" />	
							</div>
								
							<div class="form-group">
								<label for="Copyright">Copyright</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Copyright</small></div>
								<input type="text" name="copyright" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->copyright}}" />	
							</div>
								
							<div class="form-group">
								<label for="All Rights Reserved">All Rights Reserved</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>All Rights Reserved</small></div>
								<input type="text" name="all_rights_reserved" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->all_rights_reserved}}" />	
							</div>
								
							<div class="form-group">
								<label for="Contact Us">Contact Us</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Contact Us</small></div>
								<input type="text" name="contact_us" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->contact_us}}" />	
							</div>
								
							<div class="form-group">
								<label for="Contact Page Heading">Contact Page Heading</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Get in touch with us</small></div>
								<input type="text" name="contact_page_heading" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->contact_page_heading}}" />	
							</div>
								
							<div class="form-group">
								<label for="Enter your Name">Enter your Name</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Enter your Name...</small></div>
								<input type="text" name="enter_your_name" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->enter_your_name}}" />	
							</div>
								
							<div class="form-group">
								<label for="Enter your email">Enter your email</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Enter your email...</small></div>
								<input type="text" name="enter_your_email" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->enter_your_email}}" />	
							</div>
								
							<div class="form-group">
								<label for="Enter subject">Enter subject</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Enter subject...</small></div>
								<input type="text" name="enter_subject" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->enter_subject}}" />	
							</div>
								
							<div class="form-group">
								<label for="Enter your message">Enter your message</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Enter your message...</small></div>
								<input type="text" name="enter_your_message" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->enter_your_message}}" />	
							</div>
								
							<div class="form-group">
								<label for="Send">Send</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Send</small></div>
								<input type="text" name="send" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->send}}" />	
							</div>
								
							<div class="form-group">
								<label for="Name Error">Name Error</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Only A-z and spaces allowed</small></div>
								<input type="text" name="name_error" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->name_error}}" />	
							</div>
								
							<div class="form-group">
								<label for="Email Error">Email Error</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Invalid email address</small></div>
								<input type="text" name="email_error" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->email_error}}" />	
							</div>
								
							<div class="form-group">
								<label for="Subject Error">Subject Error</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Subject should not be empty</small></div>
								<input type="text" name="subject_error" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->subject_error}}" />	
							</div>
								
							<div class="form-group">
								<label for="Message Error">Message Error</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Message should not be empty</small></div>
								<input type="text" name="message_error" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->message_error}}" />	
							</div>
								
							<div class="form-group">
								<label for="Captcha Error">Captcha Error</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Invalid Captcha</small></div>
								<input type="text" name="captcha_error" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->captcha_error}}" />	
							</div>
								
							<div class="form-group">
								<label for="Page Not Found">Page Not Found</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Page Not Found</small></div>
								<input type="text" name="page_not_found" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->page_not_found}}" />	
							</div>
								
							<div class="form-group">
								<label for="Page Not Found">Page Not Found</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>You seem to be trying to find this way home.</small></div>
								<input type="text" name="you_seem_to_be_trying_to_find_this_way_home" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->you_seem_to_be_trying_to_find_this_way_home}}" />	
							</div>
								
							<div class="form-group">
								<label for="Back to home">Back to home</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Back to home</small></div>
								<input type="text" name="back_to_home" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->back_to_home}}" />	
							</div>
								
							<div class="form-group">
								<label for="here">here</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>here</small></div>
								<input type="text" name="here" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->here}}" />	
							</div>
								
							<div class="form-group">
								<label for="Dailymotion download guide heading">Dailymotion download guide heading</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>To Download video from dailymotion follow these steps</small></div>
								<input type="text" name="dailymotion_download_guide_heading" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->dailymotion_download_guide_heading}}" />	
							</div>
								
							<div class="form-group">
								<label for="Dailymotion download guide: step 1">Dailymotion download guide: step 1</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Goto the Video *{*page*}* by clicking</small></div>
								<input type="text" name="dailymotion_download_guide_step_1" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->dailymotion_download_guide_step_1}}" />	
							</div>
								
							<div class="form-group">
								<label for="Dailymotion download guide: step 2">Dailymotion download guide: step 2</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>After opening the page press *{*ctrl + u*}* from keyboard or *{*Right Click*}* any where on page and click on *{*View Page Source*}*</small></div>
								<input type="text" name="dailymotion_download_guide_step_2" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->dailymotion_download_guide_step_2}}" />	
							</div>
								
							<div class="form-group">
								<label for="Dailymotion download guide: step 3">Dailymotion download guide: step 3</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Select all the source code by pressing *{*ctrl + a*}*</small></div>
								<input type="text" name="dailymotion_download_guide_step_3" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->dailymotion_download_guide_step_3}}" />	
							</div>
								
							<div class="form-group">
								<label for="Dailymotion download guide: step 4">Dailymotion download guide: step 4</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Copy all the source code by pressing *{*ctrl + c*}* or *{*Right Click*}* any where on page and click on *{*copy*}*</small></div>
								<input type="text" name="dailymotion_download_guide_step_4" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->dailymotion_download_guide_step_4}}" />	
							</div>
								
							<div class="form-group">
								<label for="Dailymotion download guide: step 5">Dailymotion download guide: step 5</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>After copying came back to this page and paste the code in the *{*text box*}* below and click on *{*generate link*}* button</small></div>
								<input type="text" name="dailymotion_download_guide_step_5" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->dailymotion_download_guide_step_5}}" />	
							</div>
								
							<div class="form-group">
								<label for="Paste source code here...">Paste source code here...</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Paste source code here...</small></div>
								<input type="text" name="paste_source_code_here" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->paste_source_code_here}}" />	
							</div>
								
							<div class="form-group">
								<label for="Generate Link">Generate Link</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Generate Link</small></div>
								<input type="text" name="generate_link" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->generate_link}}" />	
							</div>
								
							<div class="form-group">
								<label for="Close">Close</label>
								<div style="margin-bottom: 5px;"><small><strong>Original Text : </strong>Close</small></div>
								<input type="text" name="close" class="form-control" placeholder="Value in {{$language->name}}..." value="{{$language->close}}" />	
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