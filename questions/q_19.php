<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_19') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_19') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>
<p>Do you really want to see this question <span id="myspan">?</span></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="block.js"></script>

<script type="text/javascript">
  document.getElementById("myspan").onclick = function() {
    //location.href = "q_19/eyes_and_ears_are_our_best_friends.html";
    window.open('q_19/eyes_and_ears_are_our_best_friends.html', '_blank');
  };
</script>
<?php include('footer.php'); ?>