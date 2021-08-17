
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="The #1 Free Online Video Downloader allows you to download videos from Facebook, Vimeo, Break, Liveleak, Instagram, Soundcloud, Imgur and many more!">
	<meta name="keywords" content="download facebook videos, video downloader, facebook downloader, download online videos, download streaming videos">
    <link rel="icon" href="/assets/images/favicon.png">
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin-css/sidebar-nav.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin-css/animate.css" rel="stylesheet" type="text/css">
	<link href="/assets/admin-css/style.css" rel="stylesheet" type="text/css">
	<link href="/assets/admin-css/spinners.css" rel="stylesheet" type="text/css">
	<link href="/assets/admin-css/colors-default.css" id="theme" rel="stylesheet" type="text/css">
	<link href="/assets/admin-css/c-style.css" type="text/css" rel="stylesheet">
	<link href="/assets/bootstrap-toggle/css/bootstrap-toggle.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/jquery-confirm/jquery-confirm.min.css" rel="stylesheet" type="text/css">
	<title>Dashboard - downloader</title>
</head>
<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part hidden-xs">
					<a class="logo" href="/admin/dashboard">
						<span class="admin-logo">
							<img src="https://www.digitalopment.com/downloader/assets/images/logo.jpg" alt="dashboard" class="img-responsive light-logo" />
						</span>
					</a>
                </div>
				<ul class="nav navbar-top-links navbar-left">
                    <li>
                    	<a href="javascript:void(0)" class="open-close waves-effect waves-light wave-font"><i class="fa fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="true">
							{{-- <img src="https://www.gravatar.com/avatar/ac110eb3e7e9fc9b2a20ac7c346dad2c.?s=40&d=http%3A%2F%2Flocalhost%2Fdownloader%2Fassets%2Fimages%2Favatar.jpg" alt="user-img" width="36" class="img-circle"> --}}<b class="hidden-xs">{{ Auth::user()->username }}</b>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-user animated flipInY">
							<li>
								<a href="/"><i class="fa fa-globe"></i> &nbsp;Visit Website</a>
							</li>
                            <li>
								<a href="/admin/change-password"><i class="fa fa-key"></i> &nbsp;Change Password</a>
							</li>
                            <li>
								<a href="/admin/logout"><i class="fa fa-power-off"></i> &nbsp;Logout</a>
							</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
      	<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav slimscrollsidebar">
				<div class="sidebar-head">
					<h3><span class="fa-fw open-close"><i class="fa fa-times"></i></span> <span class="hide-menu">Navigation</span></h3>
				</div>
				<ul class="nav" id="side-menu">
					<li style="padding: 70px 0 0;">
						<a href="/admin/dashboard" class="waves-effect">
							<i class="fa fa-tachometer fa-fw" aria-hidden="true"></i>Dashboard
						</a>
					</li>
					<li>
						<a href="/admin/general-settings" class="waves-effect">
							<i class="fa fa-cog fa-fw" aria-hidden="true"></i>General Settings
						</a>
					</li>
					<li>
						<a href="/admin/sources" class="waves-effect not-active">
							<i class="fa fa-area-chart fa-fw" aria-hidden="true"></i>Sources
						</a>
					</li>
					<!--<li>
						<a href="" class="waves-effect">
							<i class="fa fa-stack-overflow fa-fw" aria-hidden="true"></i>API Keys
						</a>
					</li>-->
					<li>
						<a href="/admin/captcha-settings" class="waves-effect">
							<i class="fa fa-rocket fa-fw" aria-hidden="true"></i>Captcha Settings
						</a>
					</li>
					<li>
						<a href="/admin/analytics-settings" class="waves-effect">
							<i class="fa fa-line-chart fa-fw" aria-hidden="true"></i>Analytics Settings
						</a>
					</li>
					<li>
						<a href="/admin/ads-settings" class="waves-effect">
							<i class="fa fa-code fa-fw" aria-hidden="true"></i>Ads Settings
						</a>
					</li>
					<li>
						<a href="/admin/social-sharing" class="waves-effect">
							<i class="fa fa-share fa-fw" aria-hidden="true"></i>Social Sharing
						</a>
					</li>
					<li>
						<a href="/admin/mail-settings" class="waves-effect">
							<i class="fa fa-envelope fa-fw" aria-hidden="true"></i>Mail Settings
						</a>
					</li>
					<li>
						<a href="/admin/languages" class="waves-effect not-active">
							<i class="fa fa-language fa-fw" aria-hidden="true"></i>Languages
						</a>
					</li>
					<li>
						<a href="/admin/pages" class="waves-effect not-active">
							<i class="fa fa-file-o fa-fw" aria-hidden="true"></i>Pages
						</a>
					</li>
					<li>
						<a href="/admin/change-password" class="waves-effect">
							<i class="fa fa-key fa-fw" aria-hidden="true"></i>Change Password
						</a>
					</li>
					<li>
						<a href="/clear-cache" class="waves-effect">
							<i class="fa fa-eraser fa-fw" aria-hidden="true"></i>Clear Cache
						</a>
					</li>
					<li>
						<a href="/admin/logout" class="waves-effect">
							<i class="fa fa-power-off fa-fw" aria-hidden="true"></i>Logout
						</a>
					</li>
				</ul>
			</div>
		</div> 
		<!-- Dashboard start-->
		 @yield('content')
		<!-- Dashboard end-->

 	</div>
	<footer class="footer text-center"> 2019 &copy; downloader </footer></div>
 
	<script type="text/javascript" src="/assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/admin-js/sidebar-nav.min.js"></script>
	<script type="text/javascript" src="/assets/admin-js/slimscroll.min.js"></script>
	<script type="text/javascript" src="/assets/admin-js/waves.min.js"></script>	
	<script type="text/javascript" src="/assets/admin-js/custom.min.js"></script>
	<script type="text/javascript">
		var baseURL = '/';
		var adminURL = 'admin';
	</script>
	</script><script type="text/javascript" src="/assets/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
	</script><script type="text/javascript" src="/assets/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/assets/jquery-confirm/jquery-confirm.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("ul.list-group").sortable ({ 
			opacity: 0.8, 
			cursor: 'move',
			axis: "y",
			items: ".sources-lists",
			containment: ".white-box",
			update: function(event,ui)  {
				var order = $(this).sortable("toArray");
				$.ajax ({
					type: "POST",
					url: baseURL+adminURL+"/update-sources-order",
					data: {"updateSourcesOrder":"updateSourcesOrder","order":order}
				});
			},
			stop: function() {
				$(".ui-sortable-handle").css ({
					'top' : 'auto',
					'left' : 'auto'
				});
			}
		});
		
		$(".status").click(function(e) {
			e.preventDefault();
			var action = $(this).attr("data-action");
			var contentLine = (action == "on" ? "Do you want to enabled this source?" : "Do you want to disabled this source");
			var context = $(this);
			var alertContext = $.confirm ({
				title: 'Confirm!',
				content: contentLine,
				theme: 'dark',
				buttons: {
					confirm: {
						text: 'Confirm',
						btnClass: 'btn-green',
						action: function(){
							var name = context.attr("data-name");
							var id = context.attr("data-id");
							this.buttons.confirm.setText('Wait <i class="fa fa-spinner fa-spin"></i>');
							$.ajax ({
								type: 'POST',
								dataType: 'json',
								url:"source/change-source-status",
								data: {"changeSourceStatus":"changeSourceStatus","action":action,"name":name,"id":id},
								success: function (result) {
									alertContext.close();
									if(result.status == "success") {
										if(action == "on") {
											context.attr("data-action","off");
											context.html('<span class="label label-success">On</span>');
										}
										else {
											context.attr("data-action","on");
											context.html('<span class="label label-warning">Off</span>');
										}
										$.confirm ({
											title: 'Success!',
											theme: 'dark',
											content: result.message,
											type: 'green',
											typeAnimated: true,
											buttons: {
												close: function () {
												}
											}
										});
									}
								}
							});
							return false;
						}
					},
					close: {
						text: 'Cancel',
						action: function(){}
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		function showImage(file,element,match,context) {
			var imagefile = file.type;
			if($.inArray(imagefile,match) != -1) {
				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = function(e) {
					$(element).attr("src",e.target.result);
				};
			}
			else {
				context.val("");
			}
		}
			
		/*** Cover Image ***/	
		$("#coverImageSelect").click(function() {
			$("#coverImage").trigger("click");
		});
			
		$("#coverImage").change(function() {
			var file = this.files[0];
			var match = ["image/jpeg","image/png","image/jpg"];
			showImage(file,"#coverImageShow",match,$(this))
		});
		
		/*** Background Image ***/
		$("#backgroundImageSelect").click(function() {
			$("#backgroundImage").trigger("click");
		});
			
		$("#backgroundImage").change(function() {
			var file = this.files[0];
			var match = ["image/jpeg","image/png","image/jpg"];
			showImage(file,"#backgroundImageShow",match,$(this))
		});
		
		/*** Logo ***/
		$("#logoSelect").click(function() {
			$("#logo").trigger("click");
		});
			
		$("#logo").change(function() {
			var file = this.files[0];
			var match = ["image/jpeg","image/png","image/jpg"];
			showImage(file,"#logoShow",match,$(this))
		});
		
		/*** Logo Light***/
		$("#logoLightSelect").click(function() {
			$("#logoLight").trigger("click");
		});
			
		$("#logoLight").change(function() {
			var file = this.files[0];
			var match = ["image/jpeg","image/png","image/jpg"];
			showImage(file,"#logoLightShow",match,$(this))
		});
		
		/*** Favicon ***/
		$("#faviconSelect").click(function() {
			$("#favicon").trigger("click");
		});
			
		$("#favicon").change(function() {
			var file = this.files[0];
			var match = ["image/jpeg","image/png","image/jpg","image/ico"];
			showImage(file,"#faviconShow",match,$(this))
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		function showImage(file,element,match,context) {
			var imagefile = file.type;
			if($.inArray(imagefile,match) != -1) {
				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = function(e) {
					$(element).attr("src",e.target.result);
				};
			}
			else {
				context.val("");
			}
		}
			
		$("#iconSelect").click(function() {
			$("#icon").trigger("click");
		});
			
		$("#icon").change(function() {
			var file = this.files[0];
			var match = ["image/jpeg","image/png","image/jpg","image/ico"];
			showImage(file,"#iconShow",match,$(this))
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("ul.list-group").sortable ({
			opacity: 0.8, 
			cursor: 'move',
			axis: "y",
			items: ".languages-lists",
			containment: ".white-box",
			update: function(event,ui)  {
				var order = $(this).sortable("toArray");
				$.ajax ({
					type: "POST",
					url: baseURL+adminURL+"/update-languages-order",
					data: {"updateLanguagesOrder":"updateLanguagesOrder","order":order}
				});
			},
			stop: function() {
				$(".ui-sortable-handle").css ({
					'top' : 'auto',
					'left' : 'auto'
				});
			}
		});
		
		$(document).on("click",".dellangbtn",function() {
			var context = $(this);
			var alertContext = $.confirm({
				title: 'Confirm!',
				content: 'Do you want to delete that language?',
				theme: 'dark',
				buttons: {
					confirm: {
						text: 'Confirm',
						btnClass: 'btn-green',
						action: function(){
							id = context.attr("data-id");
							this.buttons.confirm.setText('Wait <i class="fa fa-spinner fa-spin"></i>');
							var id = context.attr("data-id");	
							var status = context.attr("data-status");	
							$.ajax ({
								type: 'POST',
								url:"/admin/languages/delete/"+id,
								dataType: "json",
								data: {"deleteLanguage":"deleteLanguage","id":id,"status":status},
								success: function (result) {
									alertContext.close();
									if(result.status == "success") {
										context.parents("li").remove();
										$.confirm({
											title: 'Success!',
											theme: 'dark',
											content: 'Language Deleted Successfully.',
											type: 'green',
											typeAnimated: true,
											buttons: {
												close: function () {
												}
											}
										});
									}
									else {
										$.confirm({
											title: 'Warning!',
											theme: 'dark',
											content: result.message,
											type: 'orange',
											typeAnimated: true,
											buttons: {
												close: function () {
												}
											}
										});
									}
								}
							});
							return false;
						}
					},
					close: {
						text: 'Cancel',
						action: function(){}
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#countries").change(function() {
			var value = $(this).val();
			if(value && value.length !== 0) {
				$("#flag-show").removeClass("hide");
				$("#countryFlagShow").attr("src",baseURL+"assets/countries/flags/"+value+".svg");
			}
			else {
				$("#flag-show").addClass("hide");
				$("#countryFlagShow").removeAttr("src");
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("ul.list-group").sortable ({ 
			opacity: 0.8, 
			cursor: 'move',
			axis: "y",
			items: ".pages-lists",
			containment: ".white-box",
			update: function(event,ui)  {
				var order = $(this).sortable("toArray");
				$.ajax ({
					type: "POST",
					url: baseURL+adminURL+"/update-pages-order",
					data: {"updatePagesOrder":"updatePagesOrder","order":order}
				});
			},
			stop: function() {
				$(".ui-sortable-handle").css ({
					'top' : 'auto',
					'left' : 'auto'
				});
			}
		});
		
		$(document).on("click",".delbtn",function() {
			var context = $(this);
			var alertContext = $.confirm({
				title: 'Confirm!',
				content: 'Do you want to delete that Page?',
				theme: 'dark',
				buttons: {
					confirm: {
						text: 'Confirm',
						btnClass: 'btn-green',
						action: function(){
							id = context.attr("data-id");
							permalink = context.attr("data-permalink");
							this.buttons.confirm.setText('Wait <i class="fa fa-spinner fa-spin"></i>');
							var id = context.attr("data-id");	
							$.ajax ({
								type: 'POST',
								url: 'pages/delete/'+id ,
								data: {"deletePage":"deletePage","id":id,"permalink":permalink},
								success: function (result) {
									alertContext.close();
									context.parents("li").remove();
									$.confirm({
										title: 'Success!',
										theme: 'dark',
										content: 'Page Deleted Successfully.',
										type: 'green',
										typeAnimated: true,
										buttons: {
											close: function () {
											}
										}
									});
								}
							});
							return false;
						}
					},
					close: {
						text: 'Cancel',
						action: function(){}
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#status-check').change(function() {
			if($(this).prop('checked') == true) {
				$("#code-field").removeClass("hide");
			}
			else {
				$("#code-field").addClass("hide");
			}
		});
	});
	$(document).ready(function() {
		$('#smtpStatus-check').change(function() {
			if($(this).prop('checked') == true) {
				$("#settings-panel").removeClass("hide");
			}
			else {
				$("#settings-panel").addClass("hide");
			}
		});
	});
</script>
</body>
</html>