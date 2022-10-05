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
    $query = "select * from timetable_allocation";
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
                <p><a href="./lecturer.php">Timetable</a></p>
                <p><a href="../home.php">Logout</a></p>
            </nav>
        </div>
        <div class="content">
            <div style="font-size:2rem;color:#2d2942;margin-top: 5rem;" class="head text-center">
                <h2>Lecturer Dashboard</h2>
            </div>

            <div class="cards">
                <div class="card">
                    <img src="../assert/Images/time.png" alt="">
                    <p><a href="./staff.php">TimeTable</a></p>
                </div>
                <div class="card">
                    <img src="../assert/Images/department.png" alt="">
                    <p><a href="./department.php">Logout</a></p>
                </div>

                <div>
                    <div>
                        <table class="table table-sm table-striped" style="margin-top:20rem;margin-left:2rem;width: 100%;font-size: 1.6rem;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Course Code </th>
                                    <th scope="col">Venue</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {;
                                ?>
                                    <tr>
                                        <td> <?php echo $row['id']; ?></td>
                                        <td> <?php echo $row['time']; ?></td>
                                        <td><?php echo $row['course_code']; ?></td>
                                        <td><?php echo $row['venue']; ?></td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>