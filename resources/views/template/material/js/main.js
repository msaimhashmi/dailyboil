$(document).ready(function(){function p(){if(-1<window.location.href.indexOf("#url=")&&!1===m){var b=window.location.href.match(/#url=(.+)/)[1],d=$("#token").val();$("#url").val(b);""!==b&&($("#send").html('<i class="fas fa-circle-notch fa-spin"></i>'),document.getElementById("send").disabled=!0,document.getElementById("links").scrollIntoView(),n(b,d))}}function t(b){if("error"!==b&&""!==b.title){var d="",f="",l=0,k=0,e=0;b.links.forEach(function(a){if(null!==a.url)switch(btoa(unescape(encodeURIComponent(b.title))),
a.url=btoa(unescape(encodeURIComponent(a.url))),!0){case "m4a"===a.type||"mp3"===a.type||a.quality.includes("kbps"):var c='<a href="{{url}}" class="btn btn-success btn-sq btn-dl" target="_blank"><span class="align-middle"><i class="fas fa-headphones"></i><br>{{quality}}<br>{{type}}<br>({{size}})</span></a>'.replace(RegExp("{{quality}}","g"),a.quality);c=c.replace(RegExp("{{type}}","g"),a.type);c=c.replace(RegExp("{{size}}","g"),a.size);c=c.replace(RegExp("{{url}}","g"),"dl.php?source="+b.source+"&dl="+
btoa(e));f=f.concat(c);l++;e++;break;case "youtube"===b.source&&!0===a.mute:c='<a href="{{url}}" class="btn btn-warning btn-sq btn-dl" target="_blank"><span class="align-middle"><i class="fas fa-volume-mute fa-lg"></i><br>{{quality}}<br>{{type}}<br>({{size}})</span></a>'.replace(RegExp("{{quality}}","g"),a.quality);c=c.replace(RegExp("{{type}}","g"),a.type);c=c.replace(RegExp("{{size}}","g"),a.size);c=c.replace(RegExp("{{url}}","g"),"dl.php?source="+b.source+"&dl="+btoa(e));d=d.concat(c);k++;e++;
break;case "jpg"===a.type:c='<a href="{{url}}" class="btn btn-primary btn-sq btn-dl" target="_blank"><span class="align-middle"><i class="fas fa-images"></i><br>{{quality}}<br>{{type}}<br>({{size}})</span></a>'.replace(RegExp("{{quality}}","g"),a.quality);c=c.replace(RegExp("{{type}}","g"),a.type);c=c.replace(RegExp("{{size}}","g"),a.size);c=c.replace(RegExp("{{url}}","g"),"dl.php?source="+b.source+"&dl="+btoa(e));d=d.concat(c);k++;e++;break;default:c='<a href="{{url}}" class="btn btn-info btn-sq btn-dl" target="_blank"><span class="align-middle"><i class="fas fa-video"></i><br>{{quality}}<br>{{type}}<br>({{size}})</span></a>'.replace(RegExp("{{quality}}",
"g"),a.quality),c=c.replace(RegExp("{{type}}","g"),a.type),c=c.replace(RegExp("{{size}}","g"),a.size),c=c.replace(RegExp("{{url}}","g"),"dl.php?source="+b.source+"&dl="+btoa(e)),d=d.concat(c),k++,e++}});var g="",a="";switch(!0){case 0<l&&0===k:g="template/material/downloads.php?audio=true";break;case 0<l&&0<k:g="template/material/downloads.php?video=true&audio=true";break;default:g="template/material/downloads.php?video=true"}!1!==jQuery.isEmptyObject(localStorage.getItem(g))&&$.ajax({url:g,async:!1,
dataType:"html",success:function(a){localStorage.setItem(g,a)}});a=localStorage.getItem(g);a=a.replace(RegExp("{{video_title}}","g"),b.title);a=a.replace(RegExp("{{video_thumbnail}}","g"),b.thumbnail);a=a.replace(RegExp("{{video_duration}}","g"),b.duration);var h=window.location.href.replace(RegExp("#url=","g"),"?u=");a=a.replace(RegExp("{{facebook_share_link}}","g"),encodeURI("https://www.facebook.com/sharer.php?u="+h));a=a.replace(RegExp("{{twitter_share_link}}","g"),encodeURI("https://twitter.com/intent/tweet?url="+
h+"&text=Download "+b.title));a=a.replace(RegExp("{{whatsapp_share_link}}","g"),encodeURI("whatsapp://send?text=Download "+b.title+" "+h));a=a.replace(RegExp("{{pinterest_share_link}}","g"),encodeURI("http://pinterest.com/pin/create/link/?url="+h));a=a.replace(RegExp("{{tumblr_share_link}}","g"),encodeURI("https://www.tumblr.com/widgets/share/tool?canonicalUrl="+h+"&title="+b.title));a=a.replace(RegExp("{{reddit_share_link}}","g"),encodeURI("https://reddit.com/submit?url="+h+"&title="+b.title));a=
a.replace(RegExp("{{qr_share_link}}","g"),encodeURI("https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl="+h));0<k&&(a=a.replace(RegExp("{{video_links}}","g"),d));0<l&&(a=a.replace(RegExp("{{audio_links}}","g"),f));$("#links").html(a);void 0===b.duration&&$("#video-details").remove();$(".fa-spinner").remove();document.getElementById("send").disabled=!1;a=$("#send");a.empty();a.html('<i class="fas fa-download"></i>');$("#links").addClass("result");document.getElementById("download_area").scrollIntoView()}else u()}
function n(b,d){$.post("system/action.php",{url:b,token:d},function(d){"error"!==d&&(d.timestamp=new Date,localStorage.setItem(b,JSON.stringify(d)));t(d)})}function q(){history.pushState("",document.title,window.location.pathname+window.location.search)}function u(){document.getElementById("body").scrollIntoView();$(".fa-spinner").remove();document.getElementById("send").disabled=!1;var b=$("#send");b.empty();b.html('<i class="fas fa-download"></i>');$("[data-toggle='popover']").popover("show");setTimeout(function(){$("[data-toggle='popover']").popover("hide")},
5E3)}var m=!1;$(window).bind("hashchange",function(){p()});(function(){if(null!=document.getElementById("url")){var b=0,d=[$("#url").attr("placeholder"),"YouTube","Facebook","Twitter","Dailymotion","Vimeo","Instagram","and more..."];setInterval(function(){void 0!==d[b]&&(document.getElementById("url").placeholder=d[b]);d.length>b?b++:b=0},750)}})();var r=document.getElementById("url");null!=r&&r.addEventListener("keyup",function(b){b.preventDefault();13===b.keyCode&&document.getElementById("send").click()});
p();$(document).keypress(function(b){if(13==b.which){var d=$("#url").val();if(""!==d){m=!0;document.getElementById("send").html('<i class="fas fa-circle-notch fa-spin"></i>');document.getElementById("send").disabled=!0;var f=$("#token").val();n(d,f);q();window.location.replace("#url="+d)}b.preventDefault()}});$("#send").click(function(b){var d=$("#url").val();if(""!==d){m=!0;$(this).html('<i class="fas fa-circle-notch fa-spin"></i>');document.getElementById("send").disabled=!0;var f=$("#token").val();
n(d,f);q();window.location.replace("#url="+d)}b.preventDefault()})});