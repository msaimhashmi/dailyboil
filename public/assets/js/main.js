var formatsArr = {};
$("[data-size=unknown]").each(function( index ) {
	var formatId = $(this).attr("data-formatId");
	var linkUrl = $(this).attr("data-href");
	var linkData = {};
	linkData.formatId = formatId;
	linkData.linkUrl = linkUrl;
	formatsArr[index] = linkData;
}).promise().done(function() {
	$.ajax ({
		type: "POST",
		url: baseUrl+"main/get_stream_sizes",
		data: {"getSizes":"getSizes","url":videoUrl,"formatsArr":JSON.stringify(formatsArr)},
		dataType: "json",
		success: function(ajaxresult) {
			$.each(ajaxresult, function( index, value ) {
				$("#format-id-size-"+index).html(value);
			});
		}
	});
});