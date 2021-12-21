<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_15') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_15') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="block.js"></script>

<?php include('header.php'); ?>
<p>What if there was no php? </p>
<?php include('footer.php'); ?>