/*global */
function sendRequest(u) {
    "use strict";
    var obj, result;
    obj = $.ajax({url: u, async: false});
    result = $.parseJSON(obj.responseText);
    return result;
}//end of sendRequest(u)


(function ($) {
    'use strict';
    $(function () {

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    }); // end of document ready
}(jQuery)); // end of jQuery name space


(function ($) {
    "use strict";
    $('#farmers_table').ready(function () {
        var url, obj;
        url ="";
        if (obj.result === 1){
            var div = "";
            for (var index in obj.farmers){
                div += "<table><thead><tr>";
                div += "<th data-field='farmer_name'>"+obj.farmers[index]+"</th>";
                div += "<th data-field='farmer_number'>"+obj.farmers[index]+"</th>";
                div += "<th data-field='farmer_name'>"+obj.farmers[index]+"</th>";
                div += "<th data-field='farmer_name'>"+obj.farmers[index]+"</th>";
                div += "</tr></thead><tbody><tr>";
                div += "<td>"+obj.farmers[index].name+"</td>";
                div += "<td>"+obj.farmers[index].phone+"</td>";
                div += "<td>"+obj.farmers[index].produce_type+"</td>";
                div += "<td>"+obj.farmers[index].location+"</td>";
                div += "</tr><tbody></table>";
            }
            $ ( "#farmers_table" ).html ( div );
        }
        
    });
}(jQuery));




(function ($) {
    "use strict";
    $('#farmers_table').ready(function () {
        var url, obj;
        url ="http://10.10.29.193/";
        if (obj.result === 1){
            var div = "";
            for (var index in obj.price){
                div += "<table><thead><tr>";
                div += "<th data-field='farmer_name'>"+obj.price[index]+"</th>";
                div += "<th data-field='farmer_number'>"+obj.price[index]+"</th>";
                div += "<th data-field='farmer_name'>"+obj.price[index]+"</th>";
                div += "</tr></thead><tbody><tr>";
                div += "<td>"+obj.price[index].produce_type+"</td>";
                div += "<td>"+obj.price[index].produce_quantity+"</td>";
                div += "<td>"+obj.price[index].produce_price+"</td>";
                div += "</tr><tbody></table>";
            }
            $ ( "#prices_table" ).html ( div );
        }
        
    });
}(jQuery));




(function ($) {
    "use strict";
    $('#farmers_table').ready(function () {
        var url, obj;
        url ="";
        if (obj.result === 1){
            var div = "";
            for (var index in obj.produce){
                div += "<table><thead><tr>";
                div += "<th data-field='farmer_name'>"+obj.produce[index]+"</th>";
                div += "<th data-field='farmer_number'>"+obj.produce[index]+"</th>";
                div += "<th data-field='farmer_name'>"+obj.produce[index]+"</th>";
                div += "</tr></thead><tbody><tr>";
                div += "<td>"+obj.produce[index].name+"</td>";
                div += "<td>"+obj.produce[index].produce_quantity+"</td>";
                div += "<td>"+obj.produce[index].produce_type+"</td>";
                div += "</tr><tbody></table>";
            }
            $ ( "#produce_table" ).html ( div );
        }
        
    });
}(jQuery));


////            Function to load the list of task
//$ ( document ).ready ( function ( )
//{
//var url = "../controllers/user_controller.php?cmd=5";
//var obj = sendRequest ( url );
//var path = "";
//if ( obj.result === 1 )
//{
//path = $(".path").val();
//$("#profileimage").attr("src", path );
//var div = "";
//var timer;
//for ( var index in obj.tasks )
//{
//div += "<div class='showcontentdetailsinnertile showcontentdetailsinnertile2'\n\
//            onclick='getPreview ( "+obj.tasks [index].task_id+" )'>";
//div += "<input class='showcontentdetailsinnertilecheckbox showcontentdetailsinnertilecheckbox2'\n\
//            value="+obj.tasks [index].task_id+" name='todelete[]' type='checkbox'>";
//div += "<div class='showcontentdetailsinnertilename'>";
//div += "<span>"+obj.tasks [index].user_fname+" "+obj.tasks [index].user_sname+"</span>";
//div += "<div class='showcontentdetailsinnertiledelete showcontentdetailsinnertiledelete2' \n\
//            style='float:right; margin-right:10px'>";
//div += "<a class='delete' style='padding: 7px' id="+obj.tasks [index].task_id+"><i id='deleteicon' \n\
//            class='fa fa-trash-o'></i></a>";
//div += "</div>";
//div += "</div>";
//div += "<div class='showcontentdetailsinnertiletitle'>\n\
//            <span>"+obj.tasks [index].task_title+"</span></div>";
//div += "<div class='showcontentdetailsinnertiledescription'>\n\
//            <span>"+obj.tasks [index].task_description+"</span></div>";
//div += "</div>";
//}
//$ ( ".showcontentdetailsinner" ).html ( div );
////                     $ ( "#divStatus" ).text ( "Found " + obj.products.length + " results" );
//}
//else
//{
////                        $ ( "#divStatus" ).text ( obj.message );
////                        $ ( "#divStatus" ).css ( "backgroundColor", "red" );
//}
//
//timer = setTimeout ( '(this)', 1000 );
//});


















