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
                <p><a href="./staff.php">Staff Details</a></p>
                <p><a href="./department.php">Department Details</a></p>
                <p><a href="./courses.php">Course Details</a></p>
                <p><a href="./subject.php">Subject Details</a></p>
                <p><a href="./timeallocation.php">Timetable Details</a></p>
            </nav>
        </div>
        <div class="content">
            <div class="taskbar">
                <h2>Department Details</h2>
            </div>

            <div class="bar">
                <p>Add new Department</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn-sub" data-bs-toggle="modal" data-bs-target="#department">Add Department</button>
            </div>




            <!-- Modal -->
            <div class="modal fade" id="department" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/aos.js"></script>
</body>

</html>