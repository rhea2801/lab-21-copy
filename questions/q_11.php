<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_11') {
    // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_11') {
    header('Location:' . $_SESSION['levelname'] . '.php');
} else {
    header('Location:../index.php');
}
?>
<?php include('header.php'); ?>


<style>
    #q-box {
        background-image: linear-gradient(rgba(255, 255, 255, 0.85),
                rgba(255, 255, 255, 0.85)),
            url("q_11/bg.jpg");
    }

    #img {
        display: block;
        margin: 0 auto;
        margin-top: 80px;
        margin-bottom: 60px;
        max-height: 35vh;
        max-width: 35vh;
        transition: opacity 0.2s ease;
    }

    #btn {
        display: block;
        margin: 0 auto;
        outline: none;
        border: none;
        padding: 30px;
        background-color: white;
        border-radius: 20%;
        color: #a6a6a6;
        text-align: center;
        font-size: 1.5em;
        width: 60%;
        margin: 0 auto;
        font-weight: bolder;
        font-family: "Courier New", Courier, monospace;
        display: block;
        transition: all 0.2s ease;
    }

    #btn:hover {
        cursor: pointer;
        background-color: rgb(247, 86, 86);
        color: white;
    }

    #para {
        display: none;
        margin: 0 auto;
        margin-top: 60px;
        font-weight: bolder;
        font-size: 1.75em;
        color: black;
        text-align: center;
        font-family: "Yusei Magic", sans-serif;
        opacity: 0;
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<img id="img" src="q_11/still.png" alt="still">
<div id="btn" onclick="start()">Začněte leštit</div>
<p id="para">Odvedl si dobrou práci!</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="block.js"></script>

<script>
    function start() {
        document.getElementById("img").src = "q_11/gif.gif";
        document.getElementById("btn").style.opacity = "0";
        setTimeout(function() {
            document.getElementById("btn").style.display = "none";
        }, 300);
        setTimeout(function() {
            document.getElementById("img").style.opacity = "0";

            document.getElementById("para").style.display = "block";

            setTimeout(function() {
                document.getElementById("para").style.opacity = "1";
            }, 1500);
            setTimeout(function() {
                document.getElementById("img").src = "q_11/gif2.gif";
                document.getElementById("img").style.opacity = "1";
            }, 1000);
        }, 7500);


    }
</script>
<?php include('footer.php'); ?>