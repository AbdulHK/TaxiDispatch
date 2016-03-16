function myFunction() {
    var pass1 = document.getElementById("inputpassword").value;
    var pass2 = document.getElementById("inputconfirmpassword").value;
    var ok = true;
    if (pass1 != pass2) {
        alert("Passwords Do not match");
        document.getElementById("inputpassword");
        document.getElementById("inputconfirmpassword");
        ok = false;
    }
    else {
        alert("Passwords Match!!!");
    }
    return ok;
}
