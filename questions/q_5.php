<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_5') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_5') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>

<link rel="stylesheet" type="text/css" href="q_5/q_5.css">
<div class="container">
  <div class="strip strip1"></div>
  <div class="strip strip2"></div>
  <div class="strip strip3"></div>
  <div class="strip strip4"></div>
  <div class="strip strip5"></div>
  <div class="strip strip6"></div>
  <div class="strip strip7"></div>
  <div class="strip strip8"></div>
</div>
<script src='block.js'></script>

<?php include('footer.php'); ?>