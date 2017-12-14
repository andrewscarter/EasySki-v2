var username = "";
var url_base = "https://wwwp.cs.unc.edu/Courses/comp426-f17/users/carter4/EasySki2/ticketsUI/";

jQuery(document).ready(function($){

    //var myTickets = getCookie('orange');
    
    var cookie = 'orange';
    var cookie_data;
    
    $.ajax(url_base + "cookieGetter.php",
           {type: "GET",
            dataType: "json",
            data : { cookie_name : cookie },
            success: function(cookie_return) {
                cookie_data = cookie_return;
            }
           });

    console.log(cookie_data);

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
});