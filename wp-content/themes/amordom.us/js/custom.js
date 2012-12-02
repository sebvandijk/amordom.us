/* Sliders
============================================================================== */	
// Index Slider
$(function(){
	$("#featured").slides({
		preload: true,
		preloadImage: '../images/loading.gif',
		generateNextPrev: false,
		next: 'next',
		prev: 'prev',
		pagination: true,
		generatePagination: true,
		paginationClass: 'pagination',
		fadeSpeed: 350,
		slideSpeed: 350,
		play: 5000,
		pause: 2500,
		effect: 'fade slide',
		crossfade: true,
		randomize: false,
		hoverPause: true
	});
});

// Work slider
$(function(){
	$("#werk-images").slides({
		preload: true,
		preloadImage: '../images/loading.gif',
		generateNextPrev: true,
		next: 'next-werk-image',
		prev: 'prev-werk-image',
		pagination: true,
		generatePagination: true,
		paginationClass: 'werk-image-pagination',
		fadeSpeed: 350,
		slideSpeed: 350,
		play: 5000,
		pause: 2500,
		effect: 'fade slide',
		crossfade: true,
		randomize: false,
		hoverPause: true,
		autoHeight: true,
		autoHeightSpeed: 350
	});
});

/* Other
============================================================================== */	
$(document).ready(function(){
	
	/* animaties */
	
	$(".werk-item, #featured a, .blog-item").hover(function(){
		$("img", this).stop().fadeTo(300, 0.1); // animate to transparent
		},function(){
		$("img", this).stop().fadeTo(300, 1); // animate to opaque
	});
	
	$("a.off").hover(function(){
		$(this).stop().fadeTo(300, 0.3); // animate to transparent
		},function(){
		$(this).stop().fadeTo(300, 1); // animate to opaque
	});
	
	$("#single-blog-content a img").hover(function(){
		$(this).stop().fadeTo(300, 0.7); // animate to transparent
		},function(){
		$(this).stop().fadeTo(300, 1); // animate to opaque
	});
	
	$("#open-website a").hover(function(){
		$(this).stop().fadeTo(300, 0.8); // animate to transparent
		},function(){
		$(this).stop().fadeTo(300, 1); // animate to opaque
	});
	
	// tooltip

	$('#single-cat a').tooltipsy({
	 offset: [0, -10],
	 alignTo: 'element',
    
    css: {
        'padding': '5px 10px 5px 10px',
        'color': '#000',
        'background-color': '#fff',
        'border': '1px solid #ccc',
        '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
        '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
        'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
        'text-shadow': 'none'
    }
	});
	
	// featured paginatie
	$("#featured").hover(function(){
		$(".pagination", this).stop().animate({'bottom' : '20px'}, 300);  
		},function(){
		$(".pagination", this).stop().animate({'bottom' : '-100px'}, 300); 
	});
	
});