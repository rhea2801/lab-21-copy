<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_14') {
    // print_r("alert");
} else if (isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_14') {
    header('Location:' . $_SESSION['levelname'] . '.php');
} else {
    header('Location:../index.php');
}
?>
<?php include('header.php'); ?>


<style>
    #level-submit,
    #level-ans {
        display: none;
    }

    .para {

        padding: 2%;
        font-family: "Bodoni Moda", serif;
        font-size: 4vh;

    }

    #ipt,
    #btn {
        display: block;
        margin: 0 auto;
        outline: none;
    }

    #btn {
        margin-top: 2vh;
        border: none;
        font-size: 2vh;
        color: black;
        margin: 0 auto;
        text-align: center;
        width: 20%;
        border-radius: 10%;
        padding: 2%;
        margin-bottom: 0;
        margin-top: 5%;
        background-color: #e6e6e6;
    }

    #btn:hover {
        cursor: pointer;
    }

    .clue-para {
        font-size: 1.75em;
    }
</style>

<div id="riddle">
    <p class="para">Now that I see you are smart enough to have made it to level xyz, I will riddle you
        this. How many words?
        Now take that and multiply it by eight, then subtract three.
    </p>

    <p style="color: white; padding: 0; font-size: 0.5em;" class="riddle">Nice, you were smart enough to catch this</p>

    <input id="ipt" class="riddle" type="text" placeholder="Enter answer here">
    <div id="btn" class="riddle" type="submit" onclick="check()">Submit</div>

    <p style="color: white; padding: 0; float: right; font-size: 0.5em;">And this too.</p>
</div>

<p class="clue para" style="display: none; margin: 0 auto;">
    <span> 0 &lt; x &lt; 3 ;&nbsp;&nbsp; 0 &lt; y &lt; 2</span><br>
    <span style="color: magenta;"> 6 &lt; x &lt; 7 ;&nbsp;&nbsp; 0 &lt; y &lt; 9</span><br>
    <span> 5 &lt; x &lt; 6 ;&nbsp;&nbsp; 1 &lt; y &lt; 11</span><br>

    <span style="color: blue;"> 4 &lt; x &lt; 5 ;&nbsp;&nbsp; 1 &lt; y &lt; 10</span><br>

    <span> 6 &lt; x &lt; 9 ;&nbsp;&nbsp; 9 &lt; y &lt; 10</span><br>

    <span> 2 &lt; x &lt; 4 ;&nbsp;&nbsp; 2 &lt; y &lt; 3 </span><br>

    <span style="color: magenta;"> 7 &lt; x &lt; 8 ;&nbsp;&nbsp; 8 &lt; y &lt; 9</span><br>

    <span> 3 &lt; x &lt; 6 ;&nbsp;&nbsp; 0 &lt; y &lt; 1 </span><br>


</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="block.js"></script>

<script>
    var _0x4bab = ['137015icdksV', '24919SIcpfM', '#level-submit', '292ejsuNh', '6979UQCsTd', '221TLxYnZ', 'Nope.', '236344IlScgv', 'block', '7iUOLwg', 'none', 'display', 'value', '35LckmDH', '21dgfQSv', '898IvDlOm', 'getElementById', '3PwHgUk', 'style', 'querySelector', '.clue', '13HTTBsx', '25469dnjkWf', '#level-ans'];
    var _0xbaae = function(_0x33f8ee, _0x3b0a8d) {
        _0x33f8ee = _0x33f8ee - 0x16f;
        var _0x4bab8a = _0x4bab[_0x33f8ee];
        return _0x4bab8a;
    };
    (function(_0x3a550a, _0x98e597) {
        var _0x1ca30e = _0xbaae;
        while (!![]) {
            try {
                var _0x252bc7 = -parseInt(_0x1ca30e(0x170)) * -parseInt(_0x1ca30e(0x179)) + parseInt(_0x1ca30e(0x182)) * -parseInt(_0x1ca30e(0x181)) + -parseInt(_0x1ca30e(0x17b)) * parseInt(_0x1ca30e(0x17a)) + parseInt(_0x1ca30e(0x171)) * -parseInt(_0x1ca30e(0x16f)) + -parseInt(_0x1ca30e(0x173)) + parseInt(_0x1ca30e(0x175)) * parseInt(_0x1ca30e(0x185)) + parseInt(_0x1ca30e(0x17d)) * parseInt(_0x1ca30e(0x184));
                if (_0x252bc7 === _0x98e597) break;
                else _0x3a550a['push'](_0x3a550a['shift']());
            } catch (_0xaada4e) {
                _0x3a550a['push'](_0x3a550a['shift']());
            }
        }
    }(_0x4bab, 0x2bae0));

    function check() {
        var _0x538142 = _0xbaae,
            _0x59bef9 = document[_0x538142(0x17f)]('input')[_0x538142(0x178)];
        _0x59bef9 == 0x185 ? (document[_0x538142(0x17c)]('riddle')[_0x538142(0x17e)]['display'] = _0x538142(0x176), document['querySelector'](_0x538142(0x180))[_0x538142(0x17e)][_0x538142(0x177)] = 'block', document['querySelector'](_0x538142(0x183))[_0x538142(0x17e)][_0x538142(0x177)] = 'block', document['querySelector'](_0x538142(0x186))['style'][_0x538142(0x177)] = _0x538142(0x174)) : alert(_0x538142(0x172));
    }
</script>
<?php include('footer.php'); ?>