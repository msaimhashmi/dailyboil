var formatId;

$(document).on("click",".vd-down",function(e) {
	e.preventDefault();
	$("#download-dm-video").attr("href","");
	$("#download-dm-video").text("");
	$("#download-dm-video").addClass("hide");
	$("#download-modal").modal("show");
	formatId = $(this).attr("data-formatId");
});

$("#download-dailymotion-form").submit(function(e){
	e.preventDefault();
	var source = $("#source-dm").val();
	var start = source.indexOf('"qualities":');
	var end = source.indexOf(',"reporting"');
	source = source.slice(start,end);
	source = "{"+source+"}";
	source = JSON.parse(source);
	var downloadLink = source['qualities'][formatId][1]['url'];
	$("#download-dm-video").attr("href",downloadLink);
	$("#download-dm-video").text(lang_vars['download']+" "+formatId+"p");
	$("#download-dm-video").removeClass("hide");
	$.each(source['qualities'], function( index, value ) {
		if(index != "auto") {
			var context = $("[data-formatId="+index+"]");
			context.removeClass("vd-down");
			context.attr("href",value[1]['url']);
		}
	});
});

$("#download-dm-video").click(function() {
	$("#download-modal").modal("hide");
});