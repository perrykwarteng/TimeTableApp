<?php
$conn = mysqli_connect('localhost', 'root', '', 'timetablesystem');

if (!$conn) {
    echo "Please check your database connection";
} else {
    echo "Connection successful";
}
