var angle = 0;

$(document).ready(function() {
   
    TweenMax.set($(".Red"), {rotationY:-180});
	TweenMax.set($(".Yellow"), {rotationY:-180});

	$.each($("div.spinLogo"), function(i,element) {
		var greenCard = $(this).find(".Green"),
	    redCard = $(this).find(".Red"),
	    yellowCard = $(this).find(".Yellow"),
	    menuTitle = $(this).find(".menuTitle"),

	    tl = new TimelineMax();
		
		tl

			.to(greenCard, .50, {rotationY:180})
			.to(redCard, .50, {rotationY:0},0)
			.to(redCard, .50, {rotationY:180},0.5)
			.to(yellowCard, .50, {rotationY:0},0.5)
			.to(yellowCard, .50, {rotationY:180},1)
			.to(greenCard, .50, {rotationY:180},1)
			.to(greenCard, .50, {rotationY:0},1)
			.to(greenCard, .50, {rotationY:180},1.5)
			.to(greenCard, .50, {rotationY:0},2)
			
			.to(yellowCard, .50, {rotationY:0},1.5)
			.to(redCard, .50, {left:50},2)
			.to(yellowCard, .50, {left:456},2)
			.to(redCard, .50, {rotationY:0},1.5)	
			

			.to(menuTitle, .50, {display:'block'},2)
			.to(menuTitle, .50, {bottom:-30},2)	

			.to(element, .5, {z:50},0)
			.to(element, .5, {z:0},.5);
		
		element.animation = tl;
	});

	$('.hover').bind('touchstart', function(e) { /* Add touchend and preventDefault for nice effect. Needs to be complemented with another anchor though cuz originally link won't open..*/
        // e.preventDefault();
        $(this).toggleClass('hover_effect');
    });

	$(".pillsNav li").click(function(e){
		e.preventDefault();
		initAjax($(e.target).context.id);
	});

	$('.pillsNav li a').on('click', function(){
	    $('.pillsNav li label.current').removeClass('current');
	    $(this).next().addClass('current');
	});
	$('.touch-pill').on('click', function() {
		$('.pill-cnt span').css({backgroundColor: '#EAEAE5'});
		$(this).siblings('span').css({backgroundColor: 'yellow'});

		// $('.hover').attr('data-category')
		// console.log($(this).text);
	});

	$(".touch-pill").click(function(e){
		e.preventDefault();
		initAjax($(e.target).context.id);
	});

	$('#menu-trigger').on('click', function() {
		$('.mobile-toggle').slideToggle();
		TweenMax.to('#caret', 1, {rotation: angle + 180});
		angle += 180;
	});

	$('#entry').on('click', function() {
		console.log($(this));
	});

	$('#entry-mobile a').on('click', function() {
		$('.caseDiv div').hide();
		var target = $(this).text();

		if ($(this).attr('href') == 'all' ) {
			$('.caseDiv div').fadeIn(600);
		}
		else {
			$('.caseDiv div').each(function() {
				if( $(this).attr('data-cat1') == target ) {
					$(this).fadeIn(800);
				}
				else if( $(this).attr('data-cat2') == target ) {
					$(this).fadeIn(800);
				}
			});
		}	
	});
});

function initAjax(MyID){
	var file = 'category.json';
    $.ajax({
    	dataType: "json",
    	url: file,
    	success: function(result) {
    		// console.log(result[MyID].title)
			$('.caseTitle').html(result[MyID].title);
			$('.caseText').html(result[MyID].text);
			$('.caseLink').html(result[MyID].link);
			}		
	});
}