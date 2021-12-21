<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_12') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_12') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>

<link rel="stylesheet" type="text/css" href="q_12/q_12.css">
<div class="container1">
  <p>All Stars Twinkle but this one...</p>
  <img src="q_12/img/httpswww.youtube.comwatchv=cL4uhaQ58Rk.png" alt="">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<?php include('footer.php'); ?>