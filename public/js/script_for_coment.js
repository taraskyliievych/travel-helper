function get_data() {

    var data = localStorage.getItem('id');
    return(parseInt(data));
    //localStorage.clear();
    if (data !== undefined) {
        //do something
        alert("No travel with that name.");
        window.location.href = "http://127.0.0.1:8000/";

    }
}



/*$.ajax({
    url: 'http://127.0.0.1:8000/index_script'
}).then(function (result) {
    console.log('result', result)
})*/

//$('#myTabel').append("");
function creater() {
    $("#comntbtn").click(function(){
        var d = new Date();
        var d1 =getname() +"   "+d+"   COMMENT:";
        d1 += document.getElementById("comentintput").value;





        $.ajax({
            url: 'http://127.0.0.1:8000/createcomment',
            type: "get",
            data: {
                0:get_data(),1:d1}


        });

        alert("Comment send")
        loadecomment();



    });


}

function loadecomment() {
    $.ajax({
        url: 'http://127.0.0.1:8000/loadcomment'
    }).then(function (data) {
        $('#coment_histori').empty();

        for (var i = 0; i < data.length; i++) {

                 if((data[i].id)==(get_data())) {

                     $('#coment_histori').append("<tr>" + "<th colspan=\"11\">"+"<textarea id='areacom' readonly=\"true\"8>" + data[i].comment + "</textarea>"+"</th>" + "</tr>");
                 }

        }
        if(getname()=="admin"){
            $('#coment_histori').append("<tr>\n" +
                "    <th colspan=\"11\">\n" +
                "        <button id=\"comntbtn1\">Clear Comments</button>\n" +
                "\n" +
                "        </th>\n" +
                "</tr>    ")
        }


    })

}
function clearcomments() {


    $(document).on("click", '#comntbtn1', function() {



        $.ajax({
            url: 'http://127.0.0.1:8000/clearcoment',
            type: "get",
            data: {
                0:get_data()
            }


        });

        alert("Сleared")
        loadecomment();

    })
}



function tableLoader(){

    $.ajax({
        url: 'http://127.0.0.1:8000/index_script'
    }).then(function (data) {
        $('#apnd').empty();
        for (var i = 0; i < data.length; i++) {
            if((data[i].id)==(get_data())) {

                $('#apnd').append("<tr>" +
                    "<th><input value=" + data[i].trip_name + " id=trip_name" + data[i].id + "></th>" +
                    "<th><input value=" + data[i].start_city + " id=start_city" + data[i].id + "\></th>" +
                    "<th><input value=" + data[i].end_city + " id=end_city" + data[i].id + "\></th>" +
                    "<th><input type=\"number\" value=" + data[i].days + " id=days" + data[i].id + "\></th>" +
                    "<th><input type=\"number\" value=" + data[i].day_cost + " id=day_cost" + data[i].id + "\></th>" +
                    "<th><input type=\"number\" value=" + data[i].hotel_per_day_cost + " id=hotel_per_day_cost" + data[i].id + "\></th>" +
                    "<th><input type=\"number\" value=" + data[i].air_tickets_cost + " id=air_tickets_cost" + data[i].id + "\></th>" +
                    "<th><input type=\"number\" value=" + data[i].other_transport_cost + " id=other_transport_cost" + data[i].id + "\></th>" +
                    "<th><input type=\"number\" value=" + data[i].ticket_to_city_cost + " id=ticket_to_city_cost" + data[i].id + "\></th>" +
                    "<th><input type=\"number\" value=" + data[i].ticket_from_city_cost + " id=ticket_from_city_cost" + data[i].id + "\></th>" +
                    "<th><input value=" + data[i].autor + " id=autor" + data[i].id + "></th>" + "<tr>");
            }
        }

        $(function() {

                 $(function() {
                $('table').tablesorter({


                });
            });

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
    $("#comntbtn").click(function(){
        var d0 = document.getElementById("areacom").value;

        var d = new Date();
        var d1 =d0+"         "+getname() +"   "+d+"<br>"+"\\n COMMENT: ";
        d1 += document.getElementById("comentintput").value;





        $.ajax({
            url: 'http://127.0.0.1:8000/createcomment',
            type: "get",
            data: {
                0:get_data(),1:d1}


        });

        alert("Comment send")



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
clearcomments();

tableLoader();

loadecomment();

creater();


