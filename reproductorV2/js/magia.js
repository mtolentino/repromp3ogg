$(document).on("ready",inicial)
function inicial () {
	$("#imagens button").on("click", tranimages);
}
function tranimages()
{

	var listaCss=
	{
		
	  	
		heigth:"100%",
		opacity:1,
		
        paddingBottom:"40px",
        paddingTop:"40px",
        position: "absolute"
		
        
			
	};

	$("#un").css(listaCss);
}