$(function(){
    $("#sidebar-left .item").mouseover(function(){
        $(this).animate({"background-color": "rgba(255,255,255,0.7)"},500);
    });
    
    $("#sidebar-left .item").mouseout(function(){
        $(this).animate({"background-color": "rgba(20,20,20,0.7)"},500);
    });
    
    $("#sidebar-left .item").click(function(){
        $(".sidebar-left-widget").hide();
        $("#" + $(this).children(".icon").first().attr("data-id")).toggle(500,configTweedeKamerView);

    });
});