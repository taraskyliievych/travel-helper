
/*$.ajax({
    url: 'http://127.0.0.1:8000/index_script'
}).then(function (result) {
    console.log('result', result)
})*/

//$('#myTabel').append("");

function creater() {
    $("#Create").click(function(){
        var d = document.getElementById("Trip_Name").value;
        var d1 = document.getElementById("Start_City").value;
        var d2 = document.getElementById("End_Сity").value;
        var d3 = document.getElementById("Days").value;
        var d4 = document.getElementById("Day_Cost").value;
        var d5 = document.getElementById("Hotel_per_day_cost").value;
        var d6 = document.getElementById("Air_Tickets_Cost").value;
        var d7 = document.getElementById("Other_Transport_Cost").value;
        var d8 = document.getElementById("Ticket_To_City_Cost").value;
        var d9 = document.getElementById("Ticket_From_City_Cost").value;
        var d10 = getname();

        // https://travelhelper11.000webhostapp.com



        $.ajax({
            url: 'http://127.0.0.1:8000/create_script',
            type: "get",
            data: {
                0:d,1:d1,2:d2,3:d3,4:d4,5:d5,6:d6,7:d7,8:d8,9:d9,10:d10}


        });

        tableLoader();
        alert("created")



    });


}

function tableLoader(){

    $.ajax({
        url: 'http://127.0.0.1:8000/index_script'
    }).then(function (data) {
        $('#apnd').empty();
        for (var i = 0; i < data.length; i++) {
            if((data[i].autor)==(getname())){
            $('#apnd').append("<tr>"+
                "<th><input class='name' value="+data[i].trip_name+" id=trip_name"+data[i].id+"></th>"+
                "<th><input value="+data[i].start_city+" id=start_city"+data[i].id+"\></th>"+
                "<th><input value="+data[i].end_city+" id=end_city"+data[i].id+"\></th>"+
                "<th><input type=\"number\" value="+data[i].days+" id=days"+data[i].id+"\></th>"+
                "<th><input type=\"number\" value="+data[i].day_cost+" id=day_cost"+data[i].id+"\></th>"+
                "<th><input type=\"number\" value="+data[i].hotel_per_day_cost+" id=hotel_per_day_cost"+data[i].id+"\></th>"+
                "<th><input type=\"number\" value="+data[i].air_tickets_cost+" id=air_tickets_cost"+data[i].id+"\></th>"+
                "<th><input type=\"number\" value="+data[i].other_transport_cost+" id=other_transport_cost"+data[i].id+"\></th>"+
                "<th><input type=\"number\" value="+data[i].ticket_to_city_cost+" id=ticket_to_city_cost"+data[i].id+"\></th>"+
                "<th><input type=\"number\" value="+data[i].ticket_from_city_cost+" id=ticket_from_city_cost"+data[i].id+"\></th>"+
                "<th>"+data[i].autor+"</th>"+
                "<th>"+"<button  type=\"button\"  id=\"Edit\" value=\""+data[i].id+"\">Edit</button>\n"+"</th>"+
                "<th>"+"<button type=\"button\"  id=\"Delete\" value=\""+data[i].id+"\">Delete</button>\n"+"</th>"+
                +"</tr>");

        }}
        $(function() {

            // add parser through the tablesorter addParser method
            $.tablesorter.addParser({
                id: 'inputs',
                is: function(s) {
                    return false;
                },
                format: function(s, table, cell, cellIndex) {
                    var $c = $(cell);
                    // return 1 for true, 2 for false, so true sorts before false
                    if (!$c.hasClass('updateInput')) {
                        $c
                            .addClass('updateInput')
                            .bind('keyup', function() {
                                $(table).trigger('updateCell', [cell, false]); // false to prevent resort
                            });
                    }
                    return $c.find('input').val();
                },
                type: 'text'
            });

            $(function() {
                $('table').tablesorter({
                    widgets: ['zebra'],
                    headers: {
                        0: {
                            sorter: 'inputs'
                        },
                        1: {
                            sorter: 'inputs'
                        },
                        2: {
                            sorter: 'inputs'
                        },
                        3: {
                            sorter: 'inputs'
                        },
                        4: {
                            sorter: 'inputs'
                        },
                        5: {
                            sorter: 'inputs'
                        },
                        6: {
                            sorter: 'inputs'
                        },
                        7: {
                            sorter: 'inputs'
                        },
                        8: {
                            sorter: 'inputs'
                        },
                        9: {
                            sorter: 'inputs'
                        },
                        10: {
                            sorter: 'inputs'
                        }
                    }
                });
            });
            $("table").trigger("update");

        });



    });
}



function deleter() {
    // $(function() {
    $(document).on("click", '#Delete', function() {
        //alert($(this).val())
        var deletval = $(this).val();
        $.ajax({
            url: 'http://127.0.0.1:8000/delete_script',
            type: "get",
            data: {
                id:deletval
            }


        });

        tableLoader();
        alert("deleted")
    });

}

function editer() {
    $(document).on("click", '#Edit', function() {

        var editval = $(this).val();


        var d_edit = document.getElementById("trip_name"+editval).value;
        var d1_edit = document.getElementById("start_city"+editval).value;
        var d2_edit = document.getElementById("end_city"+editval).value;
        var d3_edit = document.getElementById("days"+editval).value;
        var d4_edit = document.getElementById("day_cost"+editval).value;
        var d5_edit = document.getElementById("hotel_per_day_cost"+editval).value;
        var d6_edit = document.getElementById("air_tickets_cost"+editval).value;
        var d7_edit = document.getElementById("other_transport_cost"+editval).value;
        var d8_edit = document.getElementById("ticket_to_city_cost"+editval).value;
        var d9_edit = document.getElementById("ticket_from_city_cost"+editval).value;
        var d10_edit = getname();
        // alert(d1_edit);

        $.ajax({
            url: 'http://127.0.0.1:8000/edit_script',
            type: "get",
            data: {
                //id:
                0:d_edit,1:d1_edit,2:d2_edit,3:d3_edit,4:d4_edit,5:d5_edit,6:d6_edit,7:d7_edit,8:d8_edit,9:d9_edit,10:d10_edit,11:editval
            }


        });

        tableLoader();
        alert("edited")

    });

}

function getname() {
    var obj;
    $.ajax({
        url: 'http://127.0.0.1:8000/cheak_login',
        async:false,
        success:function (data) {
            obj = (data);
        }
    });
    return (obj);
}



//alert(getname());

function comentaator(){

    $(document).on("dblclick", '.name', function() {
        //alert($(this).val())

        nmstrid= event.target.id.substring(9,14);

        var nmstrid = nmstrid;


        localStorage.setItem("id",nmstrid);

        window.location.href = "http://127.0.0.1:8000/comentator";





    });


}




tableLoader();
creater();
deleter();
editer();
comentaator();
