<?php
class User

{
  private $db;
  function __construct($DB_conn)
  {
    $this->db = $DB_conn;
  }
  public function login($credentials, $password, $status)
  {
    try {
      $stmt = $this->db->prepare("SELECT * FROM user_details WHERE username=:name AND password=:pass");
      $stmt->execute(array(":name" => $credentials, ":pass" => $password));
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($stmt->rowCount() > 0) {

        if ($password == $user['password']) {
          $sql = ' UPDATE `user_details` SET  `status`=:status  WHERE `username` = :user_id';
          $stmt = $this->db->prepare($sql);
          $stmt->bindValue(":user_id", $credentials);
          $stmt->bindValue(":status", 1);
          $stmt->execute();
          $_SESSION['username'] = $user['username'];
          $level = $user['level'];
          $_SESSION['level'] = $level;
          $stmt1 = $this->db->prepare("SELECT * FROM level_answer WHERE level=:level");
          $stmt1->execute(array(":level" => $level));
          $levname = $stmt1->fetch(PDO::FETCH_ASSOC);
          if ($level <= 20) {
            $levelname = $levname['levelname'];
            $_SESSION['levelname'] = $levelname;
            return $levelname;
          } else {
            $levelname = "congrats";
            $_SESSION['levelname'] = "congrats";
            return $levelname;
          }
        } else {
          return false;
        }
      } else {
        return false;
      }
    } catch (PDOException $error) {
      echo "Error: " . $error->getMessage();
    }
  }

  public function logout($username)
  {
    session_destroy();
    try {
      $sql = ' UPDATE `user_details` SET  `status`=:status  WHERE `username` = :user_id';
      $stmt = $this->db->prepare($sql);
      $stmt->bindValue(":user_id", $username);
      $stmt->bindValue(":status", 0);
      $stmt->execute();
    } catch (PDOException $e) {
      echo 'Error:' . $e->getMessage();
    }
  }
  public function checkuser($username)
  {
    try {
      $stmt = $this->db->prepare("SELECT * FROM user_details WHERE username=:username");
      $stmt->execute(array(":username" => $username));
      $checkuser = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($stmt->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      return "Error: " . $e->getMessage();
    }
  }
  public function checkemail($useremail)
  {
    try {
      $stmt = $this->db->prepare("SELECT * FROM user_details WHERE email=:useremail");
      $stmt->execute(array(":useremail" => $useremail));
      $checkuser = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($stmt->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      return "Error: " . $e->getMessage();
    }
  }
  public function checkContact($usercontact)
  {
    $len = strlen($usercontact);

    try {

      $stmt = $this->db->prepare("SELECT contact FROM user_details WHERE contact=:usercontact");
      $stmt->execute(array(":usercontact" => $usercontact));
      $checkuser = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($stmt->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      return "Error: " . $e->getMessage();
    }
  }


  public function signup($username, $password, $email, $contact)
  {

    $http_client_ip = @$_SERVER['HTTP_CLIENT_IP'];
    $http_x_forward_for = @$_SERVER['HTTP_X_FORWARD_FOR'];
    /*Checking if user is using any proxy*/
    $remote_addr = $_SERVER['REMOTE_ADDR'];

    if (!empty($http_client_ip)) {
      $ip = $http_client_ip;
    } else if (!empty($http_x_forward_for)) {
      $ip = $http_x_forward_for;
    } else {
      $ip = $remote_addr;
    }



    $level = 1;

    try {
      $stmt = "INSERT INTO user_details (username, password, email,contact,level,status) VALUES ('$username', '$password', '$email','$contact','$level',1)";
      // use exec() because no results are returned

      $this->db->exec($stmt);
      $time = time();
      $stmt1 = "INSERT INTO timing (username,current,regtime) VALUES ('$username','$time','$time')";
      $this->db->exec($stmt1);
      echo "New record created successfully";
      /* $sql2="UPDATE `user_details` SET  `ip`=:ip  WHERE `username` = :user_id";
            $stmt2=$this->db->prepare($sql2);
            $stmt2->bindValue(":user_id", $username);
            $stmt2->bindvalue(':ip',$ip);
            $stmt2->execute();*/
      $_SESSION["username"] = $username;
      $_SESSION["level"] = $level;
      $_SESSION["levelname"] = "q_1";


      return $level;
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }

  public function checkAnswer($answer)
  {
    try {

      $currentLvl = $_SESSION['level'];
      $stmt = $this->db->prepare("SELECT answer FROM level_answer WHERE level=:level AND answer=:answer");
      $stmt->execute(array(":level" => $currentLvl, ":answer" => $answer));
      $stmt->execute();
      $check = $stmt->fetch(PDO::FETCH_ASSOC);
      $row = $stmt->rowCount();
      if ($row > 0) {
        return 1;
      } else {
        return 0;
      }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }

  public function insertime($username, $level)
  {
    try {
      $time = time();
      $sql = "UPDATE `timing` SET  `level" . $level . "`=:level,`current` =:level  WHERE `username` = :user_id";
      $stmt = $this->db->prepare($sql);
      $stmt->bindValue(":user_id", $username);
      $stmt->bindValue(":level", $time);
      $stmt->execute();
    } catch (PDOException $e) {
      echo 'Error:' . $e->getMessage();
    }
  }
  public function changelevel($username, $level)
  {
    try {
      $sql = ' UPDATE `user_details`  SET  `level`=:level  WHERE `username` = :user_id';
      $stmt = $this->db->prepare($sql);
      $stmt->bindValue(":user_id", $username);
      $stmt->bindValue(":level", $level);
      $stmt->execute();
      $sql1 = ' UPDATE `timing`  SET  `level`=:level  WHERE `username` = :user_id';
      $stmt1 = $this->db->prepare($sql1);
      $stmt1->bindValue(":user_id", $username);
      $stmt1->bindValue(":level", $level);
      $stmt1->execute();
    } catch (PDOException $e) {
      echo 'Error:' . $e->getMessage();
    }
  }
  public function grab_ip()
  {
    $http_client_ip = @$_SERVER['HTTP_CLIENT_IP'];
    $http_x_forward_for = @$_SERVER['HTTP_X_FORWARD_FOR'];
    /*Checking if user is using any proxy*/
    $remote_addr = $_SERVER['REMOTE_ADDR'];

    if (!empty($http_client_ip)) {
      $ip = $http_client_ip;
    } else if (!empty($http_x_forward_for)) {
      $ip = $http_x_forward_for;
    } else {
      $ip = $remote_addr;
    }

    return $ip;
  }

  public function leaders()
  {
    try {
      $stmt = $this->db->prepare("SELECT username FROM timing ORDER BY level DESC, current ASC LIMIT 10");
      $stmt->execute();
      $result = $stmt->fetchAll();
      $rowCount = $stmt->rowCount();
      $arrayTemp = array();
      $i = 0;
      foreach ($result as $val) {
        $arrayTemp[$i] = $val['username'];
        $i++;
      }
      $x = $arrayTemp;
      //$x = array_reverse($arrayTemp);
      return $x;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  public function myrank($username)
  {
    try {
      $stmt = $this->db->prepare("SELECT * FROM timing WHERE username =:username");
      $stmt->execute(array(":username" => $username));
      $result = $stmt->fetchAll();
      $mylevel = $result[0]['level'];
      //$rowCount = $stmt->rowCount();

      $stmt2 = $this->db->prepare("SELECT username FROM timing WHERE level >:mylevel");
      $stmt2->execute(array(":mylevel" => $mylevel));
      $myrank = $stmt2->rowCount() + 1;

      $stmt3 = $this->db->prepare("SELECT username FROM timing WHERE level =:mylevel ORDER BY current ASC");
      $stmt3->execute(array(":mylevel" => $mylevel));
      $result3 = $stmt3->fetchAll();
      foreach ($result3 as $val) {
        if ($val['username'] != $username) {
          $myrank++;
        } else {
          break;
        }
      }

      $_SESSION['myrank'] = $myrank;
      return $myrank;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }


  public function update($username)
  {
    try {
      $sql = $this->db->prepare("SELECT * FROM user_details WHERE username=:username");
      $sql->execute(array(":username" => $username));
      $checkuser = $sql->fetch(PDO::FETCH_ASSOC);
      $checkuser2 = $checkuser['level'];
      $_SESSION["level"] = $checkuser2;
      if ($sql->rowCount() > 0) {
        $sql1 = $this->db->prepare("SELECT * FROM level_answer WHERE level=:level");
        $sql1->execute(array(":level" => $checkuser2));

        $checkuser1 = $sql1->fetch(PDO::FETCH_ASSOC);
        $_SESSION['levelname'] = $checkuser1['levelname'];
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
};
