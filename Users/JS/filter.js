$(function(){
	$("#filter li").click(function(){
		var category = $(this).html();
		$("#filter li").removeClass("active");
		$(this).addClass("active");

		$("#portfol li").hide("slow").each(function(){
			if($(this).hasClass(category)){
				$(this).show("slow");
			}
		});
	});
});