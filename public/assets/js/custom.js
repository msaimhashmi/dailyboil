$(".lang-li").click(function(e) {
	if($(this).hasClass("active")) {
		e.preventDefault();
	}
});