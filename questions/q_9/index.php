<?php
error_reporting(0);
session_start();

if (isset($_SESSION['levelname'])) {
    header('Location: ../' . $_SESSION['levelname'] . '.php');
} else {
    header('Location:../../index.php');
}
