var currentUser;
$(function(){
    $.ajax({
        type: "POST",
        url: "getUser.php",
        data: {id: 1},
        dataType:'JSON', 
        success: function(response){
            currentUser = response;
            initialiseEmployees();
        }
    });
});

function initialiseEmployees() {
    var arr = [0,0,0,0,0];
    var employees = $.map(currentUser.employees,function(el) { return el; });
    
    for(var i = 0; i < employees.length; i++) {
        arr[employees[i].function_id-1]++;
    }
    $("#fractiegrootte").html(employees.length);
    $("#mannetjes").val(arr[0]);
    $("#pr").val(arr[1]);
    $("#campagnevoerders").val(arr[2]);
    $("#wettenbouwers").val(arr[3]);
    $("#regeringscritici").val(arr[4]);
}