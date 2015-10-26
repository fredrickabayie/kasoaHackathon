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
    $(function () {
        var url, obj, path;
        obj = sendRequest(url);
        if (obj.result === 1) {
            var div = "";
            for (var index in obj.) {
                
            }
            $().html(div);
        } else {
            
        }
    });
}(jQuery));

//            Function to load the list of task
//            $ ( document ).ready ( function ( )
//            {
//               var url = "../controllers/user_controller.php?cmd=5";
//               var obj = sendRequest ( url );
//               var path = "";
//                if ( obj.result === 1 )
//                {
//                    path = $(".path").val();
//                    $("#profileimage").attr("src", path );
//                    var div = "";
//                    var timer;
//                    for ( var index in obj.tasks )
//                    {
//                        div += "<div class='showcontentdetailsinnertile showcontentdetailsinnertile2'\n\
//                                    onclick='getPreview ( "+obj.tasks [index].task_id+" )'>";
//                        div += "<input class='showcontentdetailsinnertilecheckbox showcontentdetailsinnertilecheckbox2'\n\
//                                    value="+obj.tasks [index].task_id+" name='todelete[]' type='checkbox'>";
//                        div += "<div class='showcontentdetailsinnertilename'>";
//                        div += "<span>"+obj.tasks [index].user_fname+" "+obj.tasks [index].user_sname+"</span>";
//                        div += "<div class='showcontentdetailsinnertiledelete showcontentdetailsinnertiledelete2' \n\
//                                    style='float:right; margin-right:10px'>";
//                        div += "<a class='delete' style='padding: 7px' id="+obj.tasks [index].task_id+"><i id='deleteicon' \n\
//                                    class='fa fa-trash-o'></i></a>";
//                        div += "</div>";
//                        div += "</div>";
//                        div += "<div class='showcontentdetailsinnertiletitle'>\n\
//                                    <span>"+obj.tasks [index].task_title+"</span></div>";
//                        div += "<div class='showcontentdetailsinnertiledescription'>\n\
//                                    <span>"+obj.tasks [index].task_description+"</span></div>";
//                        div += "</div>";
//                    }
//                    $ ( ".showcontentdetailsinner" ).html ( div );
////                     $ ( "#divStatus" ).text ( "Found " + obj.products.length + " results" );
//                }
//                else
//                {
////                        $ ( "#divStatus" ).text ( obj.message );
////                        $ ( "#divStatus" ).css ( "backgroundColor", "red" );
//                }
//
//                timer = setTimeout ( '(this)', 1000 );
//            });