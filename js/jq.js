$(function(){
    $("#headerCon #content #Get_started").click(function(){
        $("#loginform").animate({
            
            top:'55px'
        }, 'slow');
    });
    $(" li#loginf a").click(function(){
        $("#loginform").animate({
            
            top:'55px'
        },'slow');
    });
    $("#loginform i").click(function(){
        $("#loginform").animate({
			top:'-680px'
		});
    });
});