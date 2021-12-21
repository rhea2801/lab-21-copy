<?php
  error_reporting(0);
  session_start();
  
  if(isset($_SESSION['levelname']) && $_SESSION['levelname'] == 'q_4'){
    // print_r("alert");
  }else if(isset($_SESSION['levelname']) && $_SESSION['levelname'] != 'q_4'){
    header('Location:'.$_SESSION['levelname'].'.php');
  }
  else
   {
    header('Location:../index.php');
  }
?>
<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="q_4/style.css">


<div id="container">
                        <div id="pos">
                          <div class="cube">
                            <div class="left"></div>
                            <div class="center"></div>
                            
                            <div class="rigt"></div>
                            <div class="bottom"></div>
                            <div class="shadow"></div>
                          </div>
                          <div class="cube">
                            <div class="left"></div>
                            <div class="center"></div>
                            <div class="rigt"></div>
                            <div class="bottom"></div>
                            <div class="shadow"></div>
                            
                          </div>
                          <div class="cube">
                            <div class="left"></div>
                            <div class="center"></div>
                            <div class="rigt"></div>
                            <div class="bottom"></div>
                            <div class="shadow"></div>
                          </div>
                          <div class="cube">
                            <div class="left"></div>
                            <div class="center"></div>
                            <div class="rigt"></div>
                            <div class="bottom"></div>
                            <div class="shadow"></div>
                          </div>
                          <div class="cube">
                            <div class="left"></div>
                            <div class="center"></div>
                              <div class="rigt"></div>
                            <div class="bottom"></div>
                            <div class="shadow"></div>
                           </div>
                          <div class="cube">
                            <div class="left"></div>
                            <div class="center"></div>
                            <div class="rigt"></div>
                            <div class="bottom"></div>
                            <div class="shadow"></div>
                          </div>
                          <div class="cube">
                            <div class="left"></div>
                            <div class="center"></div>
                             <div class="rigt"></div>
                            <div class="bottom"></div>
                            <div class="shadow"></div>
                          </div>
                          <div class="cube">
                            <div class="left"></div>
                            <div class="center"></div>
                            <div class="rigt"></div>
                            <div class="bottom"></div>
                            <div class="shadow"></div>
                          </div>
                        </div>
                      </div>
<script type="text/javascript">
    document.getElementById("pos").onclick  = function () {
        for (let count = 0; count < 900; count++)
          if(count%2) console.log("/\\╱\\ʕº");
          else console.log("/\\╱\\ʕ º");
    };

//     .--.       .--.
//     _  `    \     /    `  _
//      `\.===. \.^./ .===./`
//             \/`"`\/
//          ,  |     |  ,
//         / `\|`-.-'|/` \
//        /    |  \  |    \
//     .-' ,-'`|   ; |`'-, '-.
//         |   |    \|   | 
//         |   |    ;|   |
//         |   \    //   |
//         |    `._//'   |
//        .'             `.
//     _,'                 `,_
  
</script>
  <?php include('footer.php'); ?>
