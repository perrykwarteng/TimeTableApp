<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assert/Images/timetable app logo.png" type="image/x-icon">
    <title>TimeTable || Login</title>
    <link rel="stylesheet" href="../styles/formStyles/formStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body>

    <section class="logins">
        <div class="col-sm-12 col-md-5 col-lg-5 login">
            <div class="login-head">
                <img src="../assert/Images/timetable app logo.png" alt="Main logo">
            </div>
            <div class="login-body">
                <form action="">
                    <div class="mb-3">
                        <label for="indexNumber" class="form-label">IndexNumber</label>
                        <input type="email" class="form-control" name="indexNumber" id="indexNumber" placeholder="Enter IndexNumber">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; background:#fb3a26;height: 3.5rem; width:30rem; margin-top:5px; border:none;font-size:1.6rem; font-weight:500 ">Submit</button>
                    <div class="sameline">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="rememberMe" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remenber Me</label>
                        </div>
                        <div class="forgetpass">
                            <p><a href="#">Forget Password</a></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="signup">
                <p>Do you have an Account? <a href="./registration.php">SignUp</a></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-7 col-lg-7">
            <div class="cover">
                <div class="img">
                    <img src="../assert/Images/cover.jpg" alt="cover image">
                </div>
                <div id="fadeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assert/Images/home.png" class="" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../assert/Images/home.png" class="" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../assert/Images/timetable app logo.png" class="" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#fadeCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#fadeCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>