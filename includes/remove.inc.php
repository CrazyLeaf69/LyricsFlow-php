<?php

if (isset($_POST['submit'])) {

    $userUid = $_POST["userUid"];
    $stringPL = $_POST['playlist'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    removefromplaylist($conn, $stringPL, $userUid);
  }
else {
    header("location: ../index.php");
    exit();
}