<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_2') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_2') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>

<link rel="stylesheet" type="text/css" href="q_2/q_2.css">
<div id="no">
  <img id="pic1" src="q_2/img/usa.jpg" alt="">
</div>


<script>
  document.getElementById("pic1").addEventListener("click", myFunction);

  function myFunction() {
    setTimeout(function() {
      window.alert("ERROR 404 Item Not Found");
    }, 2000);

  }
</script>

<?php include('footer.php'); ?>