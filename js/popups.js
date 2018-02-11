$(function() {
    //registration of pop-up openers
    $("#manage-employees-button").click(function() {showPopup("employees-popup"); showEmployeeForm();});
    
    //standard hide functionality
    $(".popup-close").click(function() {
        $("#dark-overlay").fadeOut(500);
        $(this).parents(".popup").hide(500); 
    });
    
    //hide by click around pop up
    $("#dark-overlay").click(function() {
       $(".popup").hide(500);
       $("#dark-overlay").fadeOut(500);
    });
});

function showPopup(popupId) {
    $("#dark-overlay").fadeIn(500);
    $("#"+popupId).show(500);
}

function showEmployeeForm() {
    
}