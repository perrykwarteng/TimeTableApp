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
    <?php require_once './process.php'; ?>
    <?php
    $query = "select * from department";
    $result = mysqli_query($conn, $query);
    ?>

    <?php
    if (isset($_SESSION['message'])) {
    ?>
        <div class="alert alert-<? $_SESSTION['msg_type'] ?>">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>

        </div>
    <?php } ?>




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
                            <form action="./process.php" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Department Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="facluty" class="form-label">Facluty</label>
                                    <input type="text" class="form-control" name="facluty">
                                </div>
                                <button type="submit" class="btn btn-primary" name="add_department">Add</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <table class="table table-sm table-striped" style="margin-top:20rem;margin-left:2rem;width: 90%;font-size: 1.6rem;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Facluty</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row = $result->fetch_assoc()) {;
                            ?>
                                <tr>
                                    <td> <?php echo $row['id']; ?></td>
                                    <td> <?php echo $row['department_name']; ?></td>
                                    <td><?php echo $row['facluty']; ?></td>
                                    <td>
                                        <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/aos.js"></script>
</body>

</html>