$(function(){
	var current_li;

	function setImg(src, id){
		$("#main").attr("src", src);
        var path = "text/"+id+".txt";
        $.get(path,function(data){
            $("#description p").html(data);
        });
	}

	$("#portfol img").click(function(){
		var src = $(this).attr("src");
		var id =$(this).attr("id");
		current_li = $(this).parent();
		setImg(src, id);
		$("#frame").fadeIn("slow");
		$("#overlay").fadeIn("slow");
	});



	$("#overlay").click(function(){
		$(this).fadeOut("slow");
		$("#frame").fadeOut("slow");
	});

	$("#suiv").click(function(){

		if (current_li.is(":last-child")){
			var next_li = $("#portfol li").first();
		}else{
			var next_li = current_li.next();
		}
		
		var next_src = next_li.children("img").attr("src");
		var id = next_li.children("img").attr("id");
		
		setImg(next_src, id);
		current_li = next_li;
	});

	$("#prec").click(function(){
		if (current_li.is(":first-child")){
			var prev_li = $("#portfol li").last();
		}else{
			var prev_li = current_li.prev();
		}
		var prev_src = prev_li.children("img").attr("src");
		var id = prev_li.children("img").attr("id");
		setImg(prev_src, id);
		current_li = prev_li;
	});

	$("#prec, #suiv").mouseover(function(){
		$(this).css("opacity",0.75);
	});
	$("#prec, #suiv").mouseleave(function(){
		$(this).css("opacity",0.5);
	});
});