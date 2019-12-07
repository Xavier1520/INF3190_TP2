function animation()
{
    $("#dollar").click(function(){
		$(this).animate({bottom: "-=300", left: "-=300"}, 2000)
               .animate({bottom: "-=300", left: "+=300"}, 2000)
               .fadeOut(1000);
	});
    
}

$(document).ready(function(){
    animation();
});
