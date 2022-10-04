<?php
include_once('conn.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $userType = $_POST['userType'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Please fill in your details";
    } else {
        $query = "select * from masterlogin where username= '$username'";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            $db_password = $row['password'];
            $db_userType = $row['userType'];
            if (md5($password) == $db_password && $userType == $db_userType) {
                if ($userType == 'admin') {
                    header("location:../dashboard/admin.php");
                } elseif ($userType == 'student') {
                    header("location:../dashboard/student.php");
                } elseif ($userType == 'lecturer') {
                    header("location:../dashboard/lecturer.php");
                } else {
                    echo "Invalid user";
                }
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "Please check your query";
        }
    }
}
