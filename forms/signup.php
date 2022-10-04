<?php
require_once('conn.php');
if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $userType = mysqli_real_escape_string($conn, $_POST['userType']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($name) || empty($username) || empty($userType) || empty($password)) {
    echo "<br>" . "Please Fill in you details";
  }
  if ($password && $userType) {
    $password = md5($password);
    $sql = "insert into masterlogin (name,username,userType,password) values ('$name','$username','$userType','$password')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "Your records has been entered";
      header("location:../home.php");
    } else {
      echo "Please check your query";
    }
  }
}
