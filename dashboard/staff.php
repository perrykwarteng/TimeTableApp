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
    $query = "select * from staff";
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
                <h2>Staff Details</h2>
            </div>

            <div class="bar">
                <p>Add new Staff</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn-sub" data-bs-toggle="modal" data-bs-target="#staff">Add Staff</button>
            </div>







            <!-- Modal -->
            <div class="modal fade" id="staff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="./process.php" method="post">
                                <div class="mb-3">
                                    <label for="staff_name" class="form-label">Staff Name</label>
                                    <input type="text" class="form-control" name="staff_name">
                                </div>
                                <div class="mb-3">
                                    <label for="staff_contact" class="form-label">Staff Contact</label>
                                    <input type="text" class="form-control" name="staff_contact">
                                </div>
                                <div class="mb-3">
                                    <label for="staff_email" class="form-label">Staff Email</label>
                                    <input type="email" class="form-control" name="staff_email">
                                </div>
                                <div class="mb-3">
                                    <label for="staff_position" class="form-label">Staff Position</label>
                                    <input type="text" class="form-control" name="staff_position">
                                </div>
                                <div class="mb-3">
                                    <label for="staff_gender" class="form-label">Staff Gender</label>
                                    <input type="text" class="form-control" name="staff_gender">
                                </div>
                                <button type="submit" class="btn btn-primary" name="add_staff">Add</button>
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
                                <th scope="col">Staff Name</th>
                                <th scope="col">Staff Contact</th>
                                <th scope="col">Staff Email</th>
                                <th scope="col">Staff Position</th>
                                <th scope="col">Staff gender</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row = $result->fetch_assoc()) {;
                            ?>
                                <tr>
                                    <td> <?php echo $row['id']; ?></td>
                                    <td> <?php echo $row['staff_name']; ?></td>
                                    <td><?php echo $row['staff_contact']; ?></td>
                                    <td><?php echo $row['staff_email']; ?></td>
                                    <td><?php echo $row['staff_position']; ?></td>
                                    <td><?php echo $row['staff_gender']; ?></td>
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