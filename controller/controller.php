<?php
require_once '../model/connect.php';
require_once '../model/user.php';

session_start();

if (isset($_POST['functionname'])) {
  $functionname = $_POST['functionname'];
  //echo($functionname);
  if ($functionname == "login") {
    $credentials = $_POST['credentials'];
    $pass = $_POST['password'];
    $password = md5($pass);
    $status = $_POST['status'];

    if ($user->login($credentials, $password, $status) == false) {
      echo 0;
    } else {
      $x = $user->myrank($_SESSION['username']);
      echo 1;
    }
  } else if ($functionname == 'leaders') {
    $leaders = array();
    $leaders = $user->leaders();
    echo json_encode($leaders);
  } else if ($functionname == 'myrank') {
    $x = $user->myrank($_SESSION['username']);
    $_SESSION['myrank'] = $x;
    echo $x;
  } else if ($functionname == "logout") {
    $a = $user->logout($_SESSION['username']);
    echo $a;
  } else if ($functionname == "checkuser") {
    echo $user->checkuser($_POST['user']);
  } else if ($functionname == "checkemail") {
    echo $user->checkemail($_POST['email']);
  } else if ($functionname == "checkContact") {
    echo $user->checkContact($_POST['phone']);
  } else if ($functionname == "signup") {
    if (isset($_POST['username'])) {
      if ($user->checkuser($_POST['username']) == false) {
        $username = $_POST['username'];
        if (isset($_POST['email'])) {
          if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            if ($user->checkemail($_POST['email']) == false) {
              $email = $_POST['email'];
              if (isset($_POST['contact'])) {
                $contact = $_POST['contact'];
                if ($user->checkContact($contact) == false) {
                  if (isset($_POST['password1']) && isset($_POST['password2'])) {
                    $pass1 = $_POST['password1'];
                    $pass2 = $_POST['password2'];
                    $passLen = strlen($pass1);
                    if ($passLen > 5) {
                      if ($pass1 == $pass2) {
                        $password1 = md5($pass1);
                        $_SESSION["levelname"] = "q_1";
                        $x = $user->myrank($_POST['username']);
                        echo $user->signup($username, $password1, $email, $contact);
                      }
                    }
                  }
                } else echo 401;
              }
            } else echo 402;
          }
        }
      } else echo 403;
    }
  } else if ($functionname == "getusername") {
    echo $user->getusername();
  } else if ($functionname == "level1") {
    $answer = $_POST['answer'];

    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 2);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 1);

      echo 1;
    }
  } else if ($functionname == "level2") {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {

      $user->changelevel($_SESSION['username'], 3);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 2);
      echo 1;
    }
  } else if ($functionname == 'level3') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 4);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 3);
      echo 1;
    }
  } else if ($functionname == 'level4') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 5);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 4);
      echo 1;
    }
  } else if ($functionname == 'level5') {
    $answer = $_POST['answer'];

    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 6);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 5);
      echo 1;
    }
  } else if ($functionname == 'level6') {
    $answer = $_POST['answer'];

    if ($user->checkAnswer($answer) == 1) {

      $user->changelevel($_SESSION['username'], 7);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 6);
      echo 1;
    }
  } else if ($functionname == 'level7') {
    $answer = $_POST['answer'];

    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 8);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 7);
      echo 1;
    }
  } else if ($functionname == 'level8') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 9);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 8);
      echo 1;
    }
  } else if ($functionname == 'level9') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 10);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 9);
      echo 1;
    }
  } else if ($functionname == 'level10') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 11);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 10);
      echo 1;
    }
  } else if ($functionname == 'level11') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 12);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 11);
      echo 1;
    }
  } else if ($functionname == 'level12') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 13);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 12);
      echo 1;
    }
  } else if ($functionname == 'level13') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 14);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 13);
      echo 1;
    }
  } else if ($functionname == 'level14') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 15);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 14);
      echo 1;
    }
  } else if ($functionname == 'level15') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {

      $user->changelevel($_SESSION['username'], 16);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 15);
      echo 1;
    }
  } else if ($functionname == 'level16') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 17);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 16);
      echo 1;
    }
  } else if ($functionname == 'level17') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 18);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 17);
      echo 1;
    }
  } else if ($functionname == 'level18') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 19);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 18);
      echo 1;
    }
  } else if ($functionname == 'level19') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 20);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 19);
      echo 1;
    }
  } else if ($functionname == 'level20') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 21);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 20);
      echo 1;
    }
  } else if ($functionname == 'level21') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 21);
      $user->update($_SESSION['username']);
      $user->insertime($_SESSION['username'], 20);
      $_SESSION['levelname'] = 'congrats';
      echo 1;
    }
  } else if ($functionname == 'level22') {
    $answer = $_POST['answer'];
    if ($user->checkAnswer($answer) == 1) {
      $user->changelevel($_SESSION['username'], 23);
      $user->update($_SESSION['username']);
      echo 1;
    }
  } else if ($functionname == 'alert') {
    $result = 'Opps!Time over.Refresh the page to play again.';
    echo json_encode($result);
  } else if ($functionname == 'alert2') {
    $result = "Dylan O'Brien";
    echo json_encode($result);
  } else if ($functionname == 'alert3') {
    $result = "Destination?";
    echo json_encode($result);
  } else if ($functionname == 'userExist') {
    $user = $_POST['user'];
    $user->userExist($user);
    if ($result == 1) {
      $error = "username already taken";
      echo $error;
    } else {
      echo "new user";
    }
  }
}
