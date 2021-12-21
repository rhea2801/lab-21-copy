<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_8') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_8') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>


<p>Oops.. where is the question?</p>
<script>
  setTimeout(function() {
    alert("ERROR: Your question is not found here. Sorry for the inconvenience.");
  }, 4000);

  console.log("q_8/hunt.php");
</script>
<?php include('footer.php'); ?>