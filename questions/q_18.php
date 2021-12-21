<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_18') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_18') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="q_18/q_18.css">
<div class="grid-container">

  <div class="grid-item" onclick="call_func(1)">T</div>
  <div class="grid-item" onclick="call_func(1)">D</div>
  <div class="grid-item" onclick="call_func(1)">E</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">M</div>
  <div class="grid-item" onclick="call_func(1)">V</div>
  <div class="grid-item" onclick="call_func(1)">W</div>
  <div class="grid-item" onclick="call_func(1)">L</div>
  <div class="grid-item" onclick="call_func(1)">Z</div>
  <div class="grid-item" onclick="call_func(1)">J</div>
  <div class="grid-item" onclick="call_func(1)">G</div>
  <div class="grid-item" onclick="call_func(1)">L</div>
  <div class="grid-item" onclick="call_func(1)">K</div>
  <div class="grid-item" onclick="call_func(1)">B</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(0)">A</div>
  <div class="grid-item" onclick="call_func(1)">B</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">B</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">D</div>
  <div class="grid-item" onclick="call_func(1)">X</div>
  <div class="grid-item" onclick="call_func(1)">D</div>
  <div class="grid-item" onclick="call_func(1)">B</div>
  <div class="grid-item" onclick="call_func(1)">R</div>
  <div class="grid-item" onclick="call_func(1)">Y</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">C</div>
  <div class="grid-item" onclick="call_func(1)">Y</div>
  <div class="grid-item" onclick="call_func(1)">B</div>
  <div class="grid-item" onclick="call_func(1)">E</div>
  <div class="grid-item" onclick="call_func(1)">U</div>
  <div class="grid-item" onclick="call_func(1)">V</div>
  <div class="grid-item" onclick="call_func(1)">X</div>
  <div class="grid-item" onclick="call_func(1)">J</div>
  <div class="grid-item" onclick="call_func(1)">S</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">T</div>
  <div class="grid-item" onclick="call_func(1)">O</div>
  <div class="grid-item" onclick="call_func(1)">G</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">C</div>
  <div class="grid-item" onclick="call_func(0)">N</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">M</div>
  <div class="grid-item" onclick="call_func(1)">U</div>
  <div class="grid-item" onclick="call_func(1)">S</div>
  <div class="grid-item" onclick="call_func(1)">T</div>
  <div class="grid-item" onclick="call_func(1)">E</div>
  <div class="grid-item" onclick="call_func(1)">G</div>
  <div class="grid-item" onclick="call_func(1)">U</div>
  <div class="grid-item" onclick="call_func(1)">K</div>
  <div class="grid-item" onclick="call_func(1)">P</div>
  <div class="grid-item" onclick="call_func(1)">U</div>
  <div class="grid-item" onclick="call_func(1)">J</div>
  <div class="grid-item" onclick="call_func(1)">O</div>
  <div class="grid-item" onclick="call_func(1)">I</div>
  <div class="grid-item" onclick="call_func(1)">C</div>
  <div class="grid-item" onclick="call_func(1)">K</div>
  <div class="grid-item" onclick="call_func(1)">F</div>
  <div class="grid-item" onclick="call_func(1)">W</div>
  <div class="grid-item" onclick="call_func(1)">S</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">X</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">L</div>
  <div class="grid-item" onclick="call_func(1)">G</div>
  <div class="grid-item" onclick="call_func(1)">U</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">C</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">W</div>
  <div class="grid-item" onclick="call_func(1)">Y</div>
  <div class="grid-item" onclick="call_func(1)">B</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">L</div>
  <div class="grid-item" onclick="call_func(1)">Z</div>
  <div class="grid-item" onclick="call_func(1)">U</div>
  <div class="grid-item" onclick="call_func(1)">X</div>
  <div class="grid-item" onclick="call_func(1)">D</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">R</div>
  <div class="grid-item" onclick="call_func(1)">Z</div>
  <div class="grid-item" onclick="call_func(1)">C</div>
  <div class="grid-item" onclick="call_func(1)">X</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">D</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">E</div>
  <div class="grid-item" onclick="call_func(1)">M</div>
  <div class="grid-item" onclick="call_func(1)">M</div>
  <div class="grid-item" onclick="call_func(1)">O</div>
  <div class="grid-item" onclick="call_func(1)">M</div>
  <div class="grid-item" onclick="call_func(1)">D</div>
  <div class="grid-item" onclick="call_func(1)">X</div>
  <div class="grid-item" onclick="call_func(1)">U</div>
  <div class="grid-item" onclick="call_func(1)">L</div>
  <div class="grid-item" onclick="call_func(1)">E</div>
  <div class="grid-item" onclick="call_func(1)">D</div>
  <div class="grid-item" onclick="call_func(1)">R</div>
  <div class="grid-item" onclick="call_func(1)">O</div>
  <div class="grid-item" onclick="call_func(1)">W</div>
  <div class="grid-item" onclick="call_func(1)">G</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">K</div>
  <div class="grid-item" onclick="call_func(1)">M</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">V</div>
  <div class="grid-item" onclick="call_func(0)">S</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">Q</div>
  <div class="grid-item" onclick="call_func(1)">C</div>
  <div class="grid-item" onclick="call_func(1)">R</div>
  <div class="grid-item" onclick="call_func(1)">L</div>
  <div class="grid-item" onclick="call_func(1)">E</div>
  <div class="grid-item" onclick="call_func(1)">F</div>
  <div class="grid-item" onclick="call_func(1)">K</div>
  <div class="grid-item" onclick="call_func(1)">M</div>
  <div class="grid-item" onclick="call_func(1)">B</div>
  <div class="grid-item" onclick="call_func(1)">O</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">F</div>
  <div class="grid-item" onclick="call_func(0)">D</div>
  <div class="grid-item" onclick="call_func(1)">O</div>
  <div class="grid-item" onclick="call_func(1)">L</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">D</div>
  <div class="grid-item" onclick="call_func(1)">E</div>
  <div class="grid-item" onclick="call_func(1)">W</div>
  <div class="grid-item" onclick="call_func(1)">E</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">I</div>
  <div class="grid-item" onclick="call_func(1)">X</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">Z</div>
  <div class="grid-item" onclick="call_func(1)">F</div>
  <div class="grid-item" onclick="call_func(1)">C</div>
  <div class="grid-item" onclick="call_func(1)">C</div>
  <div class="grid-item" onclick="call_func(1)">K</div>
  <div class="grid-item" onclick="call_func(1)">K</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">L</div>
  <div class="grid-item" onclick="call_func(1)">V</div>
  <div class="grid-item" onclick="call_func(1)">I</div>
  <div class="grid-item" onclick="call_func(1)">O</div>
  <div class="grid-item" onclick="call_func(1)">Q</div>
  <div class="grid-item" onclick="call_func(0)">C</div>
  <div class="grid-item" onclick="call_func(0)">S</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">O</div>
  <div class="grid-item" onclick="call_func(1)">L</div>
  <div class="grid-item" onclick="call_func(1)">J</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">Y</div>
  <div class="grid-item" onclick="call_func(0)">C</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">I</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">H</div>
  <div class="grid-item" onclick="call_func(1)">Q</div>
  <div class="grid-item" onclick="call_func(1)">W</div>
  <div class="grid-item" onclick="call_func(1)">T</div>
  <div class="grid-item" onclick="call_func(1)">Y</div>
  <div class="grid-item" onclick="call_func(1)">U</div>
  <div class="grid-item" onclick="call_func(1)">G</div>
  <div class="grid-item" onclick="call_func(1)">J</div>
  <div class="grid-item" onclick="call_func(1)">K</div>
  <div class="grid-item" onclick="call_func(1)">O</div>
  <div class="grid-item" onclick="call_func(1)">K</div>
  <div class="grid-item" onclick="call_func(1)">V</div>
  <div class="grid-item" onclick="call_func(0)">V</div>
  <div class="grid-item" onclick="call_func(1)">V</div>
  <div class="grid-item" onclick="call_func(1)">N</div>
  <div class="grid-item" onclick="call_func(1)">G</div>
  <div class="grid-item" onclick="call_func(1)">V</div>
  <div class="grid-item" onclick="call_func(1)">P</div>
  <div class="grid-item" onclick="call_func(1)">M</div>
  <div class="grid-item" onclick="call_func(1)">M</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">T</div>
  <div class="grid-item" onclick="call_func(1)">F</div>
  <div class="grid-item" onclick="call_func(1)">A</div>
  <div class="grid-item" onclick="call_func(1)">Q</div>
  <div class="grid-item" onclick="call_func(1)">S</div>
  <div class="grid-item" onclick="call_func(1)">D</div>
  <div class="grid-item" onclick="call_func(1)">N</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  var i = 0;

  function call_func(x) {
    if (!x) {
      if (i == 1) {
        console.log("m");
      } else if (i == 3) {
        console.log("i");
      } else if (i == 5) {
        console.log("s");
      } else if (i == 7) {
        console.log("p");
      } else if (i == 9) {
        console.log("r");
      } else if (i == 11) {
        console.log("o");
      } else if (i == 13) {
        console.log("n");
      } else if (i == 15) {
        console.log("o");
      } else if (i == 17) {
        console.log("u");
      } else if (i == 19) {
        console.log("n");
      } else if (i == 21) {
        console.log("c");
      } else if (i == 23) {
        console.log("e");
      }
      i++;

    }
  }
</script>
<?php include('footer.php'); ?>