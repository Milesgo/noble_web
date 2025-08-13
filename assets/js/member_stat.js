$(document).ready(function() {
    
    $("#btn_search").on("click", function(e) {
        e.preventDefault() ;

        $(location).attr('href', window.location.origin + window.location.pathname +"?year=" + $("#selYear").val() + "&month=" + $("#selMonth").val());
    }) ;
});