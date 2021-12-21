<?php

error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
  if ($_SESSION['level'] > 20) {
    header('Location:questions/congrats.php');
    echo $_SESSION['level'];
  } else {
    //echo '<script>alert(1);</script>';
    header('Location:questions/' . $_SESSION['levelname'] . '.php');
  }
}
// include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="landing/landing.css">
  <link rel="stylesheet" href="landing/formstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" href="sf_logo.png">
  <title>Labyrinth 2021 | Spring Fest 2021</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap');
</style>

<body>
  <audio id="coffin" src="landing/coffin3.mp3" loop> </audio>

  <div class="outer">

    <img class='svg' src="landing/calendar.png" onclick="redirect('calendar')" alt="" id="calendar">
    <img src="landing/clock.png" onclick="redirect('clock')" alt="" class="svg" id="clock">
    <img src="landing/coffee.png" onclick="redirect('coffee')" alt="" class="svg" id="coffee">
    <img src="landing/books.png" onclick="redirect('books')" alt="" id="books" class="svg">
    <img src="landing/laptop.png" onclick="redirect('laptop')" alt="" id="laptop">
    <img id="desk" src="landing/desk.png" alt="">

    <p id="calendar-p" class="svg-p">RULES</p>
    <p id="clock-p" class="svg-p">FORUM</p>
    <p id="books-p" class="svg-p">PLAY NOW!</p>
    <p id="coffee-p" class="svg-p">CREDITS</p>

  </div>
  <span id="headline">LABYRINTH 11.0</span>
  <img id="sf2020" src="landing/gif2.gif" alt="">
  <img id="presents" src="landing/presents.gif" alt="">
  <div class="black"></div>

  <!-- Form-->
  <div class="form" id="form">
    <span id="close">X</span>
    <ul class="tab-group">
      <li class="tab active"><a href="#signup">Sign Up</a></li>
      <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
      <div id="signup">


        <form method="post">

          <div class="top-row">
            <div class="field-wrap">

              <input type="text" id="uname" name="uname" placeholder="Username*" required autocomplete="off" />
            </div>

            <div class="field-wrap">

              <input type="email" name="email" id="email" placeholder="Email*" required autocomplete="off" />
            </div>
          </div>

          <div class="field-wrap">

            <input type="number" name="phone" id="phone" placeholder="Phone Number*" required autocomplete="off" />
          </div>

          <div class="field-wrap">

            <input type="password" id="pass1" name="pass" placeholder="Password*" required autocomplete="off" />
          </div>

          <div class="field-wrap">

            <input type="password" id="pass2" name="pass2" required autocomplete="off" placeholder="Confirm Password*" />
          </div>

          <button id="sign-up" type="submit" class="button button-block signup-btn">Sign Up</button>

        </form>

      </div>

      <div id="login">


        <form method="post">

          <div class="field-wrap">

            <input type="text" id="username" name="uname" required autocomplete="off" placeholder="Username*" />
          </div>

          <div class="field-wrap">

            <input type="password" id="pswd" name="pass" required autocomplete="off" placeholder="Password*" />
          </div>

          <button type="submit" class="button button-block login-btn">Log In</button>

        </form>

      </div>

    </div><!-- tab-content -->

  </div> <!-- /form -->
  <a target="blank" href="http://www.iitkgp.ac.in"><img src="landing/kgp.png" alt="kgp" class="logo" id="kgp"></a>
  <a target="blank" href="https://www.springfest.in/"><img src="landing/sf.png" alt="sf" class="logo" id="sf"></a>

  <img onclick="aud()" src="landing/mute.png" alt="mute" id="audio" class="mute">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="landing/formscript.js"></script>
  <script src="landing/landing.js"></script>
</body>


<script type="text/javascript">
  $(window).on('load resize', function() {
    if ($(window).width() <= 950) {
      window.location = "landing/404.html"
    }

  });
</script>


<script>
  console.log($("#username").val);
  $(".login-btn").click(function(e) {
    $.ajax({
      type: "POST",
      url: "controller/controller.php",
      data: {
        'functionname': "login",
        'credentials': $("#username").val(),
        'password': $("#pswd").val(),
        'status': localStorage.getItem("status")
      },
      dataType: "json",
      success: function(data) {
        console.log(data);
        if (data == 404) {
          $("#username").val("");
          $("#pswd").val("");
          $("#username").addClass("error");
          $("#pswd").addClass("error");
          $("#username").attr(
            "placeholder",
            "You are already logged in somewhere."
          );
          $("#pswd").attr(
            "placeholder",
            "You are already logged in somewhere."
          );

        } else if (data == 1) {
          console.log("1");
          window.location.href = "questions/q_1.php";
        } else if (data == 0) {
          //console.log("h");
          $("#username").val("");
          $("#pswd").val("");
          $("#username").addClass("error");
          $("#pswd").addClass("error");


          $("#username").attr(
            "placeholder",
            "Username and password do not match"
          );
          $("#pswd").attr(
            "placeholder",
            "Username and password do not match"
          );
        }
      },
      error: function(error) {
        console.log(error);
      }
    });
    e.preventDefault();
  });

  $(".signup-btn").click(function(e) {

    e.preventDefault();
    var uname = $("#uname").val();
    var pass = $("#pass1").val();
    var pass2 = $("#pass2").val();
    var contact = $("#phone").val();
    var email = $("#email").val();
    if (uname != "" && pass != "" && pass2 != "" && contact != "" && email != "") {
      if (pass != pass2) {
        alert("Passwords do not match.");
        $("#pass1").addClass("error");
        $("#pass2").addClass("error");
        return;
      }
      if (pass.length < 8) {
        alert("Password must be at least 8 characters long.");
        $("#pass1").addClass("error");
        $("#pass2").addClass("error");
        return;
      }
      if (contact.length != 10) {
        alert("Invalid contact number.");
        $("#contact").addClass("error");

        return;
      }
      var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!re.test(email)) {
        alert("Enter valid email address.");
        $("#email").addClass("error");
        return;
      }
      if (uname.length < 4) {
        alert("Username must be at least 4 characters long.");
        $("#uname").addClass("error");
        return;
      }

      var format = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

      if (format.test(uname)) {
        alert("Username cannot contain special characters.");
        $("#uname").addClass("error");
        return;
      }
      $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: {
          functionname: "signup",
          username: uname,
          password1: pass,
          password2: pass2,
          contact: contact,
          email: email
        },
        success: function(data) {
          console.log(data);


          if (data == 403) {
            alert("This username is already taken.");
            $("#uname").addClass("error");
          } else if (data == 402) {
            alert("This email is already taken.");
            $("#email").addClass("error");
          } else if (data == 401) {
            alert("This contact number is already taken.");
            $("#contact").addClass("error");
          } else {
            window.location.href = "questions/q_1.php";
          }

        },
        error: function(error) {
          // alert('error');
          console.log(error);
        }
      });
    } else {
      alert("Please fill out all fields!");
    }
  });
</script>



</html>