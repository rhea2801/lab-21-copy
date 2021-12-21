<?php
  error_reporting(0);
  session_start();
  
  if(isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_13'){
    // print_r("alert");
  }else if(isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_13'){
    header('Location:'.$_SESSION['levelname'].'.php');
  }
  else
   {
    header('Location:../index.php');
  }
?>
<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="q_13/q_13.css">
<div class="box">
    <div class="circle">
        <div class="inner"></div>
        <div class="highlight" onclick="alert('Wrong Location!!');"><div class="Error">26.7922°N 82.1998°E</div></div>
    </div>
    <div class="square"></div>
</div>
    <div class="shadow"></div>
<?php include('footer.php'); ?>