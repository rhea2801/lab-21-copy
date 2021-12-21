<?php
session_start();

?>

<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/43e3c925c3.js'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labyrinth 2021 | Spring Fest 2021</title>
    <link rel="shortcut icon" href="../sf_logo.png" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="questions.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="../js/eng.js"></script>
    <script type="text/javascript" src="../js/logout.js"></script>
    <script src="header.js"></script>
</head>

<body>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <nav id="navig">
        <div class="nav-wrapper">
            <a href="#" id="labrynthx" class="brand-logo blue-grey-text text-lighten-5">Q<?php echo substr($_SESSION['levelname'], 2); ?> | <b>Labyrinth 11.0</b></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">

                <li><a href=""><i class="large right material-icons">account_circle</i><?php echo $_SESSION['username']; ?></a></li>
                <li><a href="../rules/index.html" target="blank">Rules</a></li>
                <li><a href="../credits/index.html" target="blank">Credits</a></li>
                <li><a href="https://discord.gg/aXH9MhUd" target="_blank">Forum</a></li>
                <li><a id='logout'>Logout</a></li>
                <li onclick="myfunction2()" id="leader"><img src="../lbi.png" class="responsive" height="51.2px" style="margin-top: 5px;" alt="Leaderboard"></li>
            </ul>
        </div>
    </nav>
    <div class="leaderboard" id="cross">

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
                        content: attr(data-before);
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
    <div class="row" id="row">
        <div class="col s8 offset-s2 valign-wrapper">
            <div id="q-box" class="white container hoverable">
                <form action="">
                    <label class="flow-text" for="ans">

                        <script type="text/javascript">
                            $(document).ready(function() {
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


                                        $('#myli').attr('data-before', response); //anything is the 'content' value


                                        //console.log(response);

                                        //$('#my').html(response);


                                    },
                                    error: function(err) {
                                        console.log(err);
                                    }
                                });
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


                            }
                        </script>