function echo_email ()
{
    var who_email = "alexandre.gramfort"; 
    var who_domain = "telecom-paristech.fr";
    document.write("<a href=\"mailto"); 
    document.write(":" + who_email + "@"); 
    document.write(who_domain + "\">" + who_email + "@" + who_domain + "<\/a>");
}

$(document).ready(function() {
    $('#goto-top').click(function() { $('#full').ScrollTo(800); });
});
