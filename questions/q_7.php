<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_7') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_7') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>
<style>
  #arrow {
    transition: 2s ease-in-out;
  }
</style>
<p><a id="arrow" href="./q_7/q_7_1.php" target='blank' style="color:#fff;font-size:20px;font-weight:800;" onmouseover="this.style.color='#000'">→</a></p>
<script src="block.js"></script>
<?php include('footer.php'); ?>