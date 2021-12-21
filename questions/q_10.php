<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_10') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_10') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>
<div class="contact-us">
  <form action="#">
    <label for="customerName">NAME <em>&#x2a;</em></label>
    <input id="customerName" name="customerName" />
    <label for="customerEmail">EMAIL <em>&#x2a;</em></label>
    <input id="customerEmail" name="customerEmail" />
    <label for="customerPhone">PHONE</label>
    <input id="customerPhone" name="customerPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
    <label for="orderNumber">SF ID</label><input id="orderNumber" name="orderNumber" />

    <label for="spamProtection">SPAM PROTECTION <em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;You are not an ________</span></label>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="block.js"></script>
<?php include('footer.php'); ?>