var username = "";
var url_base = "https://wwwp.cs.unc.edu/Courses/comp426-f17/users/carter4/EasySki2/ticketsUI/";

jQuery(document).ready(function($){

    //var myTickets = getCookie('orange');
    console.log("Test");
    var cookie = JSON.stringify("orange");
    var cookie_data;

    $.ajax(url_base + "cookieGetter.php",
           {type: "GET",
            dataType: "json",
            data : { cookie_name : cookie },
            success: function(cookie_return) {
                cookie_data = cookie_return;
                console.log("test2");
                console.log(cookie_return);
                console.log(cookie_data);
                ticketUpdate(cookie_data);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
           });

    
    var ui_tickets_display = $("<div class='tickets_display'>Tickets Display</div>");
    $(tickets_div).append(ui_tickets_display);

    var ticketUpdate = function(cookie_data) {
        ui_tickets_display.empty();
        for (var i=0; i<cookie_data.length; i++) {
            console.log(cookie_data[i]);
            $(ui_tickets_display).append($("<div id='"+cookie_data[i]+"' class='mySavedTickets'>"+cookie_data[i]+"</div>"));
        }
        $(tickets_div).append(ui_tickets_display);
    }
    
    
//    var setCookieFromAjax = function(ajax_data) {
//        cookie_data = ajax_data;
//    }
//    
    console.log(cookie_data);


});