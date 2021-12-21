<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sudoku</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="question">
        <div class="check">
            <img id="lock" src="lock1.gif" alt="">
            <button id="btn" onclick="start()">Solved?</button>

        </div>
        <table id="sudoku">

            <colgroup>
                <col>
                <col>
                <col>
            </colgroup>
            <colgroup>
                <col>
                <col>
                <col>
            </colgroup>
            <colgroup>
                <col>
                <col>
                <col>
            </colgroup>
            <tbody>
                <tr>
                    <td>8
                    <td>7
                    <td>3
                    <td><input type="text" class="ans red">
                    <td><input type="text" class="ans blue">
                    <td><input type="text" class="ans pink">
                    <td>4
                    <td><input type="text" class="ans green">
                    <td>0
                <tr>
                    <td><input type="text" class="ans pink">
                    <td><input type="text" class="ans red">
                    <td><input type="text" class="ans blue">
                    <td>4
                    <td><input type="text" class="ans purple">
                    <td><input type="text" class="ans orange">
                    <td><input type="text" class="ans pink">
                    <td><input type="text" class="ans purple">
                    <td>6
                <tr>
                    <td><input type="text" class="ans orange">
                    <td><input type="text" class="ans green">
                    <td><input type="text" class="ans purple">
                    <td><input type="text" class="ans pink">
                    <td><input type="text" class="ans green">
                    <td><input type="text" class="ans blue">
                    <td><input type="text" class="ans red">
                    <td><input type="text" class="ans green">
                    <td>8
            <tbody>
                <tr>
                    <td><input type="text" class="ans purple">
                    <td><input type="text" class="ans blue">
                    <td><input type="text" class="ans pink">
                    <td><input type="text" class="ans blue">
                    <td>0
                    <td><input type="text" class="ans red">
                    <td><input type="text" class="ans purple">
                    <td><input type="text" class="ans blue">
                    <td><input type="text" class="ans orange">
                <tr>
                    <td><input type="text" class="ans pink">
                    <td>1
                    <td><input type="text" class="ans red">
                    <td>6
                    <td><input type="text" class="ans purple">
                    <td>2
                    <td>0
                    <td><input type="text" class="ans pink">
                    <td><input type="text" class="ans red">
                <tr>
                    <td>4
                    <td>5
                    <td><input type="text" class="ans green">
                    <td><input type="text" class="ans pink">
                    <td><input type="text" class="ans orange">
                    <td><input type="text" class="ans green">
                    <td><input type="text" class="ans orange">
                    <td><input type="text" class="ans green">
                    <td><input type="text" class="ans purple">
            <tbody>
                <tr>
                    <td>7
                    <td><input type="text" class="ans blue">
                    <td><input type="text" class="ans pink">
                    <td><input type="text" class="ans red">
                    <td><input type="text" class="ans orange">
                    <td><input type="text" class="ans purple">
                    <td>3
                    <td>8
                    <td>5
                <tr>
                    <td><input type="text" class="ans green">
                    <td><input type="text" class="ans orange">
                    <td><input type="text" class="ans green">
                    <td><input type="text" class="ans blue">
                    <td>8
                    <td><input type="text" class="ans pink">
                    <td><input type="text" class="ans green">
                    <td><input type="text" class="ans red">
                    <td><input type="text" class="ans pink">
                <tr>
                    <td>0
                    <td><input type="text" class="ans pink">
                    <td><input type="text" class="ans red">
                    <td>1
                    <td>7
                    <td><input type="text" class="ans blue">
                    <td><input type="text" class="ans orange">
                    <td><input type="text" class="ans purple">
                    <td><input type="text" class="ans blue">
        </table>
        <img id="gif" style="display: none; " src="gif.gif" alt="">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../block.js"></script>



    <script>
        var _0x29cc = ['none', '1112648KytIOj', 'style', 'Nope!', '5388UIMDxa', 'unlock.gif', '572163sdeIrh', 'unlock2.gif', 'sudoku', '3TLwsLA', 'gif', '645196lxEeAE', 'block', '134pZVsxj', '4IjjVjN', 'display', '168758hRmrgw', 'getElementsByClassName', 'lock', 'getElementById', 'btn', 'ans', '21241WXKHqb', 'src', '539790mHnzsQ'];
        var _0x1965 = function(_0x3c248f, _0x3f2dbf) {
            _0x3c248f = _0x3c248f - 0x162;
            var _0x29cc86 = _0x29cc[_0x3c248f];
            return _0x29cc86;
        };
        (function(_0x14b7de, _0x864139) {
            var _0x1972f1 = _0x1965;
            while (!![]) {
                try {
                    var _0x281fe7 = parseInt(_0x1972f1(0x173)) + parseInt(_0x1972f1(0x176)) * parseInt(_0x1972f1(0x16a)) + -parseInt(_0x1972f1(0x16c)) + -parseInt(_0x1972f1(0x17a)) * -parseInt(_0x1972f1(0x171)) + -parseInt(_0x1972f1(0x178)) + parseInt(_0x1972f1(0x164)) * -parseInt(_0x1972f1(0x162)) + parseInt(_0x1972f1(0x16e));
                    if (_0x281fe7 === _0x864139) break;
                    else _0x14b7de['push'](_0x14b7de['shift']());
                } catch (_0x19d518) {
                    _0x14b7de['push'](_0x14b7de['shift']());
                }
            }
        }(_0x29cc, 0x950cc));
        var answ = [0x5, 0x6, 0x1, 0x2, 0x5, 0x0, 0x2, 0x3, 0x8, 0x7, 0x1, 0x1, 0x4, 0x6, 0x7, 0x2, 0x0, 0x5, 0x3, 0x2, 0x6, 0x7, 0x3, 0x4, 0x8, 0x5, 0x1, 0x3, 0x8, 0x5, 0x7, 0x4, 0x0, 0x8, 0x1, 0x7, 0x2, 0x6, 0x3, 0x2, 0x1, 0x0, 0x4, 0x6, 0x6, 0x3, 0x4, 0x2, 0x5, 0x1, 0x0, 0x7, 0x8, 0x5, 0x3, 0x6, 0x4, 0x2];

        function start() {
            var _0x2a1fe0 = _0x1965,
                _0x16bf72 = document[_0x2a1fe0(0x165)](_0x2a1fe0(0x169)),
                _0x5245cc = !![];
            for (i = 0x0; i < _0x16bf72['length']; i++) {
                if (_0x16bf72[i]['value'] != answ[i]) {
                    _0x5245cc = ![];
                    break;
                }
            }
            _0x5245cc ? (document[_0x2a1fe0(0x167)](_0x2a1fe0(0x175))[_0x2a1fe0(0x16f)][_0x2a1fe0(0x163)] = _0x2a1fe0(0x16d), document[_0x2a1fe0(0x167)]('gif')[_0x2a1fe0(0x16f)][_0x2a1fe0(0x163)] = _0x2a1fe0(0x179), document[_0x2a1fe0(0x167)]('lock')[_0x2a1fe0(0x16b)] = _0x2a1fe0(0x172), document['getElementById'](_0x2a1fe0(0x168))['style']['display'] = 'none', setTimeout(function() {
                var _0x17fab3 = _0x2a1fe0;
                document[_0x17fab3(0x167)](_0x17fab3(0x166))[_0x17fab3(0x16b)] = _0x17fab3(0x174), document[_0x17fab3(0x167)](_0x17fab3(0x177))[_0x17fab3(0x16f)]['display'] = 'none';
            }, 0x992)) : alert(_0x2a1fe0(0x170));
        }
    </script>
</body>


</html>