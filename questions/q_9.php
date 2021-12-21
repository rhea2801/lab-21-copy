<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_9') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_9') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>
<p>So you think you can pass this one? </p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="block.js"></script>
<script type="text/javascript">
  document.getElementById("labrynthx").onclick = function() {
    // location.href = "q_9/you_can_never_understand_this_question1.html";
    window.open('q_9/you_can_never_understand_this_question1.html', '_blank');
  };
</script>
<?php include('footer.php'); ?>