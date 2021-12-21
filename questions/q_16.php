<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_16') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_16') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>

<link rel="stylesheet" type="text/css" href="q_16/q_16.css">

<div class="container1">
  <div class="qrcode">
    <img src="q_16/img/qrcode.png" draggable="true" alt="">
  </div>
  <img src="q_16/img/Gupta-empire1.jpg" alt="">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="block.js"></script>

<?php include('footer.php'); ?>