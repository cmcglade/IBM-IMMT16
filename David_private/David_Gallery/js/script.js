var pictures = [
{
	"title":"Nisekoi Abridged",
	"description":"Episode 1 - Long Shot.",
	"url":"img/NewEp1.jpg"
},
{
	"title":"TIBA",
	"description":"My Housemates Are Ruining My Social Life.",
	"url":"img/TIBA1.jpg"
},

{
	"title":"Supporting The Official Release",
	"description":"Episode 3 - ERASED Blu-Ray Review.",
	"url":"img/STOR_Ep3.jpg"
},

{
	"title":"OTALKU",
	"description":"Episode 17 - Your Name.",
	"url":"img/Episode 17 Thumbnail.jpg"
},
];

$(document).ready(function(){
var count = 0;
	//Read image information
	$(pictures).each(function(){
		//make space for images to display
		var img = $(document.createElement("img"));
		$(img).attr({
			"src":this.url,
			"data-index":count,
			"title":this.title,
			"alt":this.description,
});
$(img).appendTo("figure");
//Make thumbnails exist
var thumb = $(img).clone().appendTo("nav");
//Make thumbnails do something on click
$(thumb).bind("click", function(){
	//hide thumbnail
	$("figure img").each(function(){
		$(this).addClass("hidden");
	});
	$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
	$('h3').html(this.getAttribute("title"));
	$('figcaption').html(this.getAttribute("alt"));
});
});
});