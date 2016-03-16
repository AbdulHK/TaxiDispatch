function checkPasswordMatch() {
    var password = $("#inputpassword").val();
    var confirmPassword = $("#inputconfirmpassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}