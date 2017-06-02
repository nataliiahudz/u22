$(document).ready(function(){

	var divset="<div class='settings'></div>";
	$(divset).appendTo("body");
	$(".settings").css("position","fixed").css("top","50%")

	var colors={
		red:"#9B1818",
		blue:"#002344",
		gray:"#808080",
		violet:"#F5CAFB"
	}

	for (var color in colors){
		var divcolor=$("<div></div>").appendTo(".settings");
		divcolor.addClass(color);
		divcolor.css("background",colors[color]).css("width","20px").css("height","20px").css("margin","5px");
	}

	$(".settings div").click(function(){
		var setcolor=$(this).attr("class");
		$("#mytemplate").attr("href","css/"+setcolor+".css");
	})

});