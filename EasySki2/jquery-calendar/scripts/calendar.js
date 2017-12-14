jQuery(document).ready(function($){

    //CHANGE ME!!! Define the relative or absolute path to your backend script
    var remoteUrl = 'backend.php';
    var url_base = "https://wwwp.cs.unc.edu/Courses/comp426-f17/users/carter4/EasySki2/jquery-calendar/";   

    var ui_price_display = $("<div class='price_display'>Price Display</div>");
    $(price_div).append(ui_price_display);

    var priceUpdate = function(tickets) {
        ui_price_display.empty();
        for (var i=0; i<tickets.length; i++) {
            console.log(tickets[i]);
            console.log(tickets[i].tid);
            $(ui_price_display).append($("<div id='"+tickets[i].tid+"' class='resorts "+tickets[i].rid+"'>"+tickets[i].rid+"<br>$"+tickets[i].price+"<br>"+tickets[i].tid+"</div>"));
        }
        $(price_div).append(ui_price_display);
    }

    // use for favoriting


    ui_price_display.on("click", "div.resorts", function(e){
        console.log($(this));
        console.log("hello");
        var ticket_info = $(this)[0].id;
        console.log(ticket_info);
        var myTid = ticket_info;
        myTid = JSON.stringify(myTid);
        var msg = JSON.stringify("1");
        console.log(myTid);
        $.ajax(url_base + "scripts/ticketSave.php",
               {type: "POST",
                dataType: "json",
                data: { tid : myTid },
                success: function(data) {
                    console.log("success!!");
                    console.log(data);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
               }
              );
        //e.preventDefault(); //to prevent any other unwanted behavior clicking the div might cause
    });

    //For each link in the calendar...
    $("#submit").click( function() {
        var date =  $("#start_date").val();
        var startDate = JSON.stringify(date);
        var resort =  $("#autocomplete").val();
        if(resort!="") {
            var resortName = JSON.stringify(resort);
            $.ajax(url_base + "searchResort.php",
                   {type: "GET",
                    dataType: "json",
                    data: { start : startDate, resort : resortName },
                    success: function(data) {
                        for (var i=0; i<data.length; i++) {
                            priceUpdate(data);
                        }

                    }

                   }
                  );
        } else {
            var startDate = JSON.stringify(date);
            $.ajax(url_base + "searchDate.php",
                   {type: "GET",
                    dataType: "json",
                    data: { start : startDate },
                    success: function(data) {
                        priceUpdate(data);
                    }

                   }
                  );
        }
    });

    var monthArray = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    var month = 12;
    var year = 2017;
    $("#dayHeading").html("<h2>" + monthArray[month-1] + " " + year + "</h2>");
    var myMonth = JSON.stringify(month);
    var myYear = JSON.stringify(year);
    $.ajax(url_base + "includes/calendar.php",
           {type: "GET",
            dataType: "json",
            data: { months : myMonth, year : myYear },
            success: function(data) {
                $("#calendar").html("");
                $("#calendar").html(data);
                $('table.calendar button').each(function(i,item){

                    $(this).click(function(){
                        var myDate = JSON.stringify(item.id);
                        $.ajax(url_base + "dateHandler.php",
                               {type: "GET",
                                dataType: "json",
                                data: { date : myDate },
                                success: function(data) {
                                    priceUpdate(data);
                                    //                                    $("#output").html("");
                                    //                                    $("#output").append("Tickets available on " + item.id + "<br>");
                                    //                                    for (var i=0; i<data.length; i++) {
                                    //                                        console.log(data[i]);
                                    //                                        $("#output").append(data[i].rid + " ");
                                    //                                        $("#output").append("$" + data[i].price + " "); 
                                    //}
                                }
                               });
                    });
                });
            }}

          );

    $("#nextMonth").click(function () {
        if(year===2017 && month===12 || year < 2020 && year > 2017) {
            if(month === 12) {
                month=1;
                year++;
            } else {
                month++;
            }
            $("#dayHeading").html("<h2>" + monthArray[month-1] + " " + year + "</h2>");
            var myMonth = JSON.stringify(month);
            var myYear = JSON.stringify(year);
            $.ajax(url_base + "includes/calendar.php",
                   {type: "GET",
                    dataType: "json",
                    data: { months : myMonth, year : myYear },
                    success: function(data) {
                        $("#calendar").html("");
                        $("#calendar").html(data);
                        $('table.calendar button').each(function(i,item){

                            $(this).click(function(){
                                var myDate = JSON.stringify(item.id);
                                $.ajax(url_base + "dateHandler.php",
                                       {type: "GET",
                                        dataType: "json",
                                        data: { date : myDate },
                                        success: function(data) {
                                            $("#output").html("");
                                            $("#output").append("Tickets available on " + item.id + "<br>");
                                            for (var i=0; i<data.length; i++) {
                                                console.log(data[i]);
                                                $("#output").append(data[i].rid + " ");
                                                $("#output").append("$" + data[i].price + " "); 
                                            }
                                        }
                                       });
                            });
                        });
                    }}

                  );
        }
    });

    $("#previousMonth").click(function () {
        if(year==2018 && month===1 || year > 2017 && year < 2020) {
            if(month === 1) {
                month=12;
                year--;
            } else {
                month--;
            }
            $("#dayHeading").html("<h2>" + monthArray[month-1] + " " + year + "</h2>");
            var myMonth = JSON.stringify(month);
            var myYear = JSON.stringify(year);
            $.ajax(url_base + "includes/calendar.php",
                   {type: "GET",
                    dataType: "json",
                    data: { months : myMonth, year : myYear },
                    success: function(data) {
                        $("#calendar").html("");
                        $("#calendar").html(data);
                        $('table.calendar button').each(function(i,item){

                            $(this).click(function(){
                                var myDate = JSON.stringify(item.id);
                                $.ajax(url_base + "dateHandler.php",
                                       {type: "GET",
                                        dataType: "json",
                                        data: { date : myDate },
                                        success: function(data) {
                                            $("#output").html("");
                                            $("#output").append("Tickets available on " + item.id + "<br>");
                                            for (var i=0; i<data.length; i++) {
                                                console.log(data[i]);
                                                $("#output").append(data[i].rid + " ");
                                                $("#output").append("$" + data[i].price + " "); 
                                            }
                                        }
                                       });
                            });
                        });
                    }}

                  );
        }
    });  

});












