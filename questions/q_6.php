<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_6') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_6') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>
<style>
  #btn {
    outline: none;
    border: none;
    padding: 30px;
    background-color: #c8f7ff;
    width: 20%;
    border-radius: 10%;
    font-size: 2em;
    font-weight: bolder;
    font-family: "Courier New", Courier, monospace;
    display: block;

  }

  #btn:hover {
    cursor: pointer;
    background-color: #9fe2d9;
    transition: all 0.2s ease;
  }

  #melon {
    display: none;
    margin: 0 auto;
  }

  #level-ans,
  #level-submit {
    display: none;
  }
</style>
<p id="p" style="display: none;">Does something look different to you?</p>
<img id="melon" src="q_6/melon.gif" alt="melon" style="margin-top: 20px;">

<div id="btn" onclick="start()" style="color: black; text-align: center; ">Go?</div>


<script>
  function start() {
    tick = new Audio("q_6/tick.mp3");
    tick.play();
    document.querySelector("#btn").style.display = "none";
    document.querySelector("#p").style.display = 'block';
    setTimeout(function() {
      window.history.pushState("object or string", "Title", "q_6X.php");
      document.querySelector("#p").innerHTML = "Look everywhere, top to bottom!";
      song = new Audio("q_6/song.mp3");
      song.volume = 0.6;
      song.play();
      document.querySelector("#melon").style.display = "block";
      document.querySelector("#level-ans").style.display = 'block';
      document.querySelector("#level-submit").style.display = 'block';

      setTimeout(function() {
        window.history.pushState("object or string", "Title", "q_6.php");
      }, 5000);
    }, 12000);
  }
</script>

<?php include('footer.php'); ?>