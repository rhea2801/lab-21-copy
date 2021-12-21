<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src='questions/block.js'></script>
<script>
    $(document).ready(function() {
        $("body").bind("contextmenu", function(e) {
            alert("Right click not permitted here.");
            return false;
        });
    });

    $(document).ready(function() {
        $('body').bind('cut copy paste', function(e) {
            alert("Cut copy paste not permitted here.");
            e.preventDefault();
        });
    });

    $(document).keydown(function(event) {
        // Prevent F12 -
        if (event.keyCode == 123) {
            alert("F12 not permitted here")
            return false;
        }
        // Prevent Ctrl+a = disable select all
        // Prevent Ctrl+u = disable view page source
        // Prevent Ctrl+s = disable save
        if (event.ctrlKey && (event.keyCode === 85 || event.keyCode === 83 || event.keyCode === 65)) {
            return false;
        }
        // Prevent Ctrl+Shift+I = disabled debugger console using keys open
        else if (event.ctrlKey && event.shiftKey && event.keyCode === 73) {
            return false;
        }
    });
</script>

</html>