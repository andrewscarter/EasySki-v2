
jQuery(document).ready(function($){

    //CHANGE ME!!! Define the relative or absolute path to your backend script
    var remoteUrl = 'Backend.php';
    var url_base = "https://wwwp.cs.unc.edu/Courses/comp426-f17/users/sarafati/FinalProject/panels/";

    //Initialize the HTTP cache
    var remoteCache = new Array();
    var newDate = "2017-12-15";
    //For each link in the calendar...
    $('table.calendar a').each(function(i,item)
    {

        $(this).click(function(){
            var myDate = JSON.stringify(item.id);
            $.ajax(url_base + "dateHandler.php",
                   {type: "GET",
                    dataType: "json",
                    data: { date : myDate },
                    success: function(data) {
                        for (var i=0; i<data.length; i++) {
                            console.log(data[i]);
                            load_tickets(data[i]);
                        }
                    }
                   });
        });
    });

});


var load_panels = function(ticket_item)
{ 
    //setTimeout(function(){ alert(ticket_item); }, 500);
};

$(window).scroll(function() 
{
    if($(window).scrollTop() == $(document).height() - $(window).height())
    {
           // ajax call get data from server and append to the div
    }
});
