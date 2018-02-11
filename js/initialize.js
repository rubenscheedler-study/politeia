var currentUser;
$(function(){
    $.ajax({
        type: "POST",
        url: "getUser.php",
        data: {id: 1},
        dataType:'JSON', 
        success: function(response){
            console.log(response);
            // put on console what server sent back...
        }
    });
});