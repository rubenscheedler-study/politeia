$(function() {
    $.ajax({
        type: "POST",
        url: "getUserStateSubjects.php",
        data: {id: 1},//TODO userId
        dataType:'JSON', 
        success: renderStates
    });
});

function renderStates(stateJSON) {
    var container = $("#state-of-state-widget");
    
    for (key in stateJSON) {
        var s = stateJSON[key];
        var stateRow = $("<div class='state-row'></div>");
        $("#state-of-state-widget").append(stateRow);
        stateRow.append("<span class='state-name'>" + s.subject + ":</span>");
        var perc = new PercentageBar({
           "container": stateRow ,
           min : 0,
           max: 100
        });
        perc.setValue(s.score);
    }
}