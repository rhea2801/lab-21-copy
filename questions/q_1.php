<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_1') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_1') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php

include('header.php');

?>
<link rel="stylesheet" type="text/css" href="q_1/q_1.css" />
<div class="containernew">
  <div class="developer">
    <div class="head">
      <div class="cap">
        <div class="dot"></div>
        <div class="strip"></div>
      </div>
      <div class="face">
        <div class="spects spect1">
          <div class="eye"></div>
        </div>
        <div class="spects spect2">
          <div class="eye"></div>
        </div>
      </div>
    </div>
    <div class="t-shirt-container">
      <div class="t-shirt">
        <div class="neck"></div>
      </div>
    </div>
  </div>
  <div class="laptop">
    <div class="logo"></div>
  </div>
  <div class="table"></div>
</div>
<img src="q_1/folder.svg" alt=" " width="100" height="150" class="folder">
<script src='block.js'></script>

</body>



<?php
include('footer.php');
?>