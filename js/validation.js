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



function validateEmail() {
    var x = document.forms["registration"]["inputemail"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    else 
    {
        alert("valid e-mail address");
        return true;

    }
}
