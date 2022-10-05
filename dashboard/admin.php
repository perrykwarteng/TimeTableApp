<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body>
    <div class="dashboard">
        <div class="navigation">
            <nav>

                <p><a href="./admin.php">Dashboard</a></p>
                <p><a href="./staff.php">Staff Details</a></p>
                <p><a href="./department.php">Department Details</a></p>
                <p><a href="./courses.php">Course Details</a></p>
                <p><a href="./subject.php">Subject Details</a></p>
                <p><a href="./timeallocation.php">Timetable Details</a></p>
            </nav>
        </div>
        <div class="content">
            <div class="taskbar">
                <h2>Admin Dashboard</h2>
                <p><a href="../home.php">logout</a></p>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="../assert/Images/staff.png" alt="">
                    <p><a href="./staff.php">Staff Details</a></p>
                </div>
                <div class="card">
                    <img src="../assert/Images/department.png" alt="">
                    <p><a href="./department.php">Department Details</a></p>
                </div>
                <div class="card">
                    <img src="../assert/Images/course.png" alt="">
                    <p><a href="./courses.php">Course Details</a></p>
                </div>
                <div class="card">
                    <img src="../assert/Images/subject.png" alt="">
                    <p><a href="./subject.php">Subject Details</a></p>
                </div>
                <div class="card">
                    <img src="../assert/Images/time.png" alt="">
                    <p><a href="./timeallocation.php">Timetable Details</a></p>
                </div>
            </div>
        </div>
        <div class="info">
            <img src="../assert/Images/atu.jpg" alt="">
            <p>Quick Timetable System</p>
        </div>
    </div>

</body>

</html>