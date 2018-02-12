$(function(){
    $("#employeesSaveButton").click(validateAndSaveEmployees);
});

function validateAndSaveEmployees() {
    var total = 0;
    $.each($(".employeeValue"),function(ind,value) {
        total += parseInt($(value).val());
    });
}