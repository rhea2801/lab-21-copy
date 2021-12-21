<?php

error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['level'] > 20) {
        //header('Location:../questions/congrats.php');
        //echo $_SESSION['level'];

    } else {
        //echo '<script>alert(1);</script>';
        // header('Location:../questions/' . $_SESSION['levelname'] . '.php');
    }
}
// include 'header.php';
?>

<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!!</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="questions.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/javascript" src="../js/logout.js"></script>
    <script src="header.js"></script>

</head>
<ul id="dropdown1" class="dropdown-content" style="overflow-y: hidden;">

    <li><a id='logout'>Logout</a></li>
</ul>
<nav id="navig">
    <div class="nav-wrapper">
        <a href="#" id="labrynthx" class="brand-logo blue-grey-text text-lighten-5"><b>Labyrinth 11.0</b></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="../rules/index.html">Rules</a></li>
            <li><a href="../credits/index.html">Credits</a></li>
            <li><a href="">Forum</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo $_SESSION['username']; ?><i class="large right material-icons">account_circle</i></a></li>
            <li onclick="myfunction2()" id="leader"><img src="../lbi.png" class="responsive" height="80%" style="margin-top: 10%;" alt="Leaderboard"></li>
        </ul>
    </div>
</nav>
<div class="leaderboard" id="cross" style="background-color: rgba(26, 64, 47, 1); z-index: 10000;">

    <h1>
        <i class="fa fa-trophy" style="font-size:40px;color:#ffd700"></i>

        LEADERBOARD
        <div onclick="myfunction()">✕</div>
    </h1>

    <ol style="list-style-type:none;padding:0;">
        <div class='medal'>
            <i class='fas fa-medal' style='font-size:7vh;color:#ffd700'></i>
            <i class='fas fa-medal' style='font-size:7vh;color:#C0C0C0'></i>
            <i class='fas fa-medal' style='font-size:7vh;color:#CD7F32'></i>
        </div>

        <div class='winners'>

            <li>
                <mark id='1'>1st</mark>
                <small></small>

            </li>

            <li>
                <mark id='2'>2nd</mark>
                <small></small>

            </li>

            <li>
                <mark id='3'>3rd</mark>

            </li>

        </div>
        <div class='w2'>
            <li>
                <mark id='4' class="extra">4th</mark>

            </li>
            <li>
                <mark id='5' class="extra">5th</mark>

            </li>
            <li>
                <mark id='6' class="extra">6th</mark>

            </li>
            <li>
                <mark id='7' class="extra">7th</mark>

            </li>
            <li>
                <mark id='8' class="extra">8th</mark>

            </li>
            <li>
                <mark id='9' class="extra">9th</mark>

            </li>
            <li>
                <mark id='10' class="extra">10th</mark>

            </li>
            <li id="myli">
                <mark id='my' class="extra"><?php echo $_SESSION['username'] . " (me)"; ?></mark>

            </li>

            <style>
                #myli::before {
                    content: "<?php echo $_SESSION['myrank']; ?>";
                    border-color: rgb(255, 215, 0);
                }

                #my,
                #myli::before {
                    color: rgb(255, 215, 0);
                }
            </style>
        </div>
    </ol>
</div>

<head>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        body {
            overflow: hidden;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(https://media.giphy.com/media/dRGWII2nDN1D2/giphy.gif);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .title {
            font-family: "Montserrat";
            text-align: center;
            color: #FFF;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            letter-spacing: 1px;
        }

        h1,
        h2 {
            color: rgba(255, 255, 255, 0.9);
            background-size: cover;
            -moz-background-clip: text;
            -webkit-background-clip: text;
            /* text-transform: uppercase; */
            font-size: 100px;
            margin: 10px 0;
        }

        h2 {
            font-size: 50px;
        }

        h2 b {
            font-size: larger;
            animation: myfirst 5s linear 2s infinite;
            background-color: cyan;
            position: relative;
            border-radius: 20px;
            padding: 10px;
        }

        @keyframes myfirst {
            0% {
                background-color: cyan;
                left: 0px;
            }

            25% {
                background-color: yellow;
                left: 100px;
            }

            50% {
                background-color: magenta;
                left: 0px;
            }

            75% {
                background-color: green;
                left: -100px;
            }

            100% {
                background-color: cyan;
                left: 0px;
            }
        }
    </style>
</head>

<body>
    <div class="title">
        <h1>Congratulations!!</h1><br />
        <h2> You have successfully completed <br><br> <b>Labyrinth 11.0</b></h2>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
        });

        function myfunction() {
            document.getElementById("cross").style.display = "none";
            document.getElementById("navig").style.display = "block";
            document.getElementById("row").style.display = "block";
        }

        function myfunction2() {
            document.getElementById("cross").style.display = "block";
            document.getElementById("navig").style.display = "none";
            document.getElementById("row").style.display = "none";

            $.ajax({
                url: '../controller/controller.php',
                type: 'POST',
                data: {
                    functionname: 'leaders'
                },
                success: function(response) {
                    var arr = response.split(',');

                    for (var i = 0; i < arr.length; i++) {
                        if (arr[i][0] == '[') {
                            arr[i] = arr[i].slice(1);
                        }
                        if (arr[i][arr[i].length - 1] == ']') {
                            arr[i] = arr[i].slice(0, arr[i].length - 1);
                        }
                        var b = arr[i].replace(/\"/g, '');
                        b = b.replace('[', '');
                        $('#' + (i + 1)).html(b);
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });

            $.ajax({
                url: '../controller/controller.php',
                type: 'POST',
                data: {
                    functionname: 'myrank'

                },
                success: function(response) {

                    console.log(response);

                    //$('#my').html(response);


                },
                error: function(err) {
                    console.log(err);
                }
            });
        }
    </script>
</body>

</html>