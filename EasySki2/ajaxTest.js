//  +1 style points
var url_base = "https://wwwp.cs.unc.edu/Courses/comp426-f17/users/carter4/EasySki/";


//  temporary date. This will need to be change to on-click, or something similar for final application
var temp = "2017-12-15";


$(document).ready(function () {
    var myDate = JSON.stringify(temp);
    $.ajax(url_base + "/dateHandler.php",
           {type: "GET",
            dataType: "json",
            data: { date : myDate },
            success: function(data) {
                for (var i=0; i<data.length; i++) {
                    load_tickets(data[i]);
                }
            }
           });
});

// for now we are printing them to the log, but for the real application, we will populate the div with these returned values!
var load_tickets = function(ticket_item) { 
    console.log(ticket_item);
}

