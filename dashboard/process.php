<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'timetablesystem') or die(mysqli_error($conn));

// Staff records
if (isset($_POST['add_staff'])) {
    $name = $_POST['staff_name'];
    $contact = $_POST['staff_contact'];
    $email = $_POST['staff_email'];
    $position = $_POST['staff_position'];
    $gender = $_POST['staff_gender'];

    $conn->query("insert into staff (staff_name,staff_contact,staff_email,staff_position,staff_gender)values('$name','$contact','$email','$position','$gender')") or die($conn->error);

    $_SESSION['massage'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";

    header("location: ./staff.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("delete from staff where id= $id") or die($conn->error);

    $_SESSION['massage'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "Success";
    header("location: ./staff.php");
}

// if (isset($_GET['edit'])) {
//     $id = $_GET['edit'];
//     $result  = $conn->query("select * from staff where id=$id") or die($conn->error);
// }

// department records
if (isset($_POST['add_department'])) {
    $name = $_POST['name'];
    $facluty = $_POST['facluty'];

    $conn->query("insert into department (department_name,facluty)values('$name','$facluty')") or die($conn->error);

    $_SESSION['massage'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";

    header("location: ./department.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("delete from department where id= $id") or die($conn->error);

    $_SESSION['massage'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "Success";
    header("location: ./department.php");
}

//Course records
if (isset($_POST['add_course'])) {
    $courseId = $_POST['course_id'];
    $courseName = $_POST['course_name'];

    $conn->query("insert into course (course_id,course_name)values('$courseId','$courseName')") or die($conn->error);

    $_SESSION['massage'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";

    header("location: ./courses.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("delete from course where id= $id") or die($conn->error);

    $_SESSION['massage'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "Success";
    header("location: ./courses.php");
}

//Subject records
if (isset($_POST['add_subject'])) {
    $subjectCode = $_POST['subject_code'];
    $subjectName = $_POST['subject_name'];
    $subjectHours = $_POST['subject_hours'];

    $conn->query("insert into subject (subject_code,subject_name,subject_hours)values('$subjectCode','$subjectName','$subjectHours')") or die($conn->error);

    $_SESSION['massage'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";

    header("location: ./subject.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("delete from subject where id= $id") or die($conn->error);

    $_SESSION['massage'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "Success";
    header("location: ./subject.php");
}

//Subject records
if (isset($_POST['add_timetable'])) {
    $time = $_POST['time'];
    $courseCode = $_POST['course_code'];
    $venue = $_POST['venue'];

    $conn->query("insert into timetable_allocation (time,course_code,venue)values('$time','$courseCode','$venue')") or die($conn->error);

    $_SESSION['massage'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";

    header("location: ./timeallocation.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("delete from timetable_allocation where id= $id") or die($conn->error);

    $_SESSION['massage'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "Success";
    header("location: ./timeallocation.php");
}
