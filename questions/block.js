$(document).ready(function() {
    $("body").bind("contextmenu", function(e) {
        //alert("Right click not permitted here.");
        return false;
    });
});

$(document).ready(function() {
    $('body').bind('cut copy paste', function(e) {
        //alert("Cut copy paste not permitted here.");
        e.preventDefault();
    });
});

$(document).keydown(function(event) {
    // Prevent F12 -
    if (event.keyCode == 123) {
        //alert("F12 not permitted here.");
        return false;
    }
    // Prevent Ctrl+a = disable select all
    // Prevent Ctrl+u = disable view page source
    // Prevent Ctrl+s = disable save
    if (event.ctrlKey) {
        //alert("Ctrl + key functions not permitted here.");
        return false;
    }

});