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


function isPrevDate() {
   // alert("startDate is " + Startdate);
           var start_date = document.forms["custbook"]["inputdatetime"].value;

    if(Startdate.length != 0 && Startdate !='') {
       // alert("Input date: "+ start_date);
        start_date=start_date[1]+"/"+start_date[2]+"/"+start_date[0];
       // alert("start date arrray format " + start_date);
        var a = new Date(start_date);
        //alert("The date is a" +a);
        var today = new Date();
        var day = today.getDate();
        var mon = today.getMonth()+1;
        var year = today.getFullYear();
        today = (mon+"/"+day+"/"+year);
        //alert(today);
        var today = new Date(today);
       // alert("Today: "+today.getTime());
       // alert("a : "+a.getTime());
        if(today.getTime() > a.getTime() )
        {
            alert("Please select Start date in range");
            return false;
        } else {
            return true;
        }
    }
}
