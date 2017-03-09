// All ajax call point to signup.php, activate.php
$("#signupForm").submit(function (event) {
    // prevent default php processing
    event.preventDefault();
    // collect all user input
    var datatopost = $(this).serializeArray();
    // ajax call
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatopost,
        success: function (data) {
            if(data) {
                $("#signupmessage").html(data);
            }
        },
        error: function (data) {
            if(data) {
                $("#signupmessage").html("<div class='alert alert-danger'>There was an error. Try again later</div>")
            }
        }
    });
});