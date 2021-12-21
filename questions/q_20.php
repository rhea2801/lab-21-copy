<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_20') {
  // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_20') {
  header('Location:' . $_SESSION['levelname'] . '.php');
} else {
  header('Location:../index.php');
}
?>
<?php include('header.php'); ?>
<p onclick="func()">This one is hidden a place that is deserving of being the final one.</p>


<script>
  var _0x2357 = ['3521TnMXyM', '208057LAkFVH', '78871azPNSS', '55357PiKnax', '499354aLYFwQ', '82hUzpOd', 'You\x20should\x20look\x20for\x20it.\x20Everywhere.\x20Especially\x20where\x20you\x20haven\x27t\x20thought\x20of\x20before...', '3XSoVvK', '31457qDGuWf', '198894mPQpYh'];
  var _0x4e6b = function(_0x4b9515, _0x56f116) {
    _0x4b9515 = _0x4b9515 - 0x145;
    var _0x2357f9 = _0x2357[_0x4b9515];
    return _0x2357f9;
  };
  (function(_0x59df9f, _0x5d9b9f) {
    var _0x48d036 = _0x4e6b;
    while (!![]) {
      try {
        var _0x4a7a96 = parseInt(_0x48d036(0x148)) * -parseInt(_0x48d036(0x147)) + parseInt(_0x48d036(0x14d)) + parseInt(_0x48d036(0x14c)) + -parseInt(_0x48d036(0x14b)) + parseInt(_0x48d036(0x149)) + -parseInt(_0x48d036(0x145)) * parseInt(_0x48d036(0x14a)) + parseInt(_0x48d036(0x14e));
        if (_0x4a7a96 === _0x5d9b9f) break;
        else _0x59df9f['push'](_0x59df9f['shift']());
      } catch (_0x206d42) {
        _0x59df9f['push'](_0x59df9f['shift']());
      }
    }
  }(_0x2357, 0x3aeae));

  function func() {
    var _0x1bc88e = _0x4e6b;
    alert(_0x1bc88e(0x146));
  }
  // q_20/sudo.php
</script>


<?php include('footer.php'); ?>