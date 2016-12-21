var pictures = [
	{
		"title":"Centennial",
		"description":"Perfect planet for students!",
		"url":"img/img1.jpg"
	},
	{
		"title":"In class!",
		"description":"Creative minds! :-)",
		"url":"img/img2.jpg"	
	},
	{
		"title":"Having fun",
		"description":"It's all about having fun",
		"url":"img/img3.jpg"	
	},
	{
		"title":"Little Planet",
		"description":"Just fooling around",
		"url":"img/img4.jpg"	
	},
	{
		"title":"Large head",
		"description":"Too many assignments",
		"url":"img/img5.jpg"	
	},
		{
		"title":"Underworld",
		"description":"I just want to get home!",
		"url":"img/img6.jpg"	
	},
];

//this tells jquery to wait until the document loads before running this function
$(document).ready(function(){
	//get picture data
	var count = 0;
	$(pictures).each(function(){
		//page container
		var img = $(document.createElement("img"));	
		$(img).attr({
			"src":this.url,	
			"data-index":count,
			"title":this.title,
			"alt":this.description
		});
		//putting images in out html container
		$(img).appendTo("figure");
		//create thumbnails
		var thumb = $(img).clone().appendTo("nav");
		// add onclick action in jquery which is called bind
		$(thumb).bind("click",function(){
			//hide all images sitting in the figure element		
			$("figure img").each(function(){
				$(this).addClass("hidden");	
			});
			//show selected image by getting its index number and unhiding it
			$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
			// show that tittle and description
			$('h3').html(this.getAttribute("title"));
			$('figcaption').html(this.getAttribute("alt"));
		});
		count++;	
	});
});
