$(function() {
    $(".party_value_bar").each(function() {
        var score = parseInt($(this).attr("data-score"));
        
        $(this).css("width", Math.abs(score));
        if (score < 0) {   //score in [-100,100]
            $(this).css("margin-left", (150+score) + "px");
            $(this).css("margin-right", (150) + "px");
            $(this).css("background-color", "#dd0000");
        } else {
            $(this).css("margin-left", 150 + "px");
            $(this).css("margin-right", (150-score) + "px");
            $(this).css("background-color", "#00dd00");
        }
        $(this).html(score);
    });
});