<?php

error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['level'] > 20) {
        header('Location:../questions/congratulations.php');
        echo $_SESSION['level'];
    } else {
        //echo '<script>alert(1);</script>';
        header('Location:../questions/' . $_SESSION['levelname'] . '.php');
    }
}
// include 'header.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations</title>
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
</body>

</html>