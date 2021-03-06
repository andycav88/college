<!-- Ahora SI -->
<!-- Si la sesion esta activa vamos a homepage . WEB-->
<?php
session_start();
if (isset($_SESSION['active']))
    if ($_SESSION['active']) {
        header("Location:http://localhost/college/views/homepage.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <title>Dashboard - SB Admin</title> -->
    <title>College Login</title>
    <link href="http://localhost/college/dist/css/style.online.css" rel="stylesheet" />
    <link href="http://localhost/college/dist/css/styles.css" rel="stylesheet" />
    <script src="http://localhost/college/dist/js/all.js"></script>

    <script src="http://localhost/college/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/college/dist/js/scripts.js"></script>
    <script src="http://localhost/college/dist/js/jquery-3.6.0.js"></script>
    <script src="http://localhost/college/dist/js/Chart.min.js"></script>
    <!-- <script src="http://localhost/college/dist/js/simple-datatables.js"></script> -->
    <script src="http://localhost/college/dist/js/datatables-simple-demo.js"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>

                                </div>

                                <div class="card-body">
                                    <div class="alert alert-danger text-center" role="alert" style="display: none">
                                        <p class="fw-bold">Wrong Credentials </p>
                                        Invalid username or password
                                    </div>
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com" />
                                            <label id="inputEmaillabel" for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" />
                                            <label id="inputPasswordlabel" for="inputPassword">Password</label>
                                        </div>
                                        <!-- <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div> -->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="session/password">Forgot Password?</a>
                                            <!-- <button id="loginbtn" class="btn btn-primary d-block w-100"><i class="fas fa-user"></i> Login</button> -->
                                            <a class="btn btn-primary">Login</a>
                                        </div>

                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="session/register">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- <script src="http://localhost/college/dist/js/jquery-3.6.0.js"></script> -->
    <script>
        $(function() {

            $('.btn-primary').click(function() {

                var email = $('#inputEmail').val();
                var pass = $('#inputPassword').val();

                $.ajax({
                    type: "POST",
                    url: 'http://localhost/college/session/login',
                    data: {
                        email: email,
                        pass: pass
                    },
                    success: function(returnData) {
                        let result = JSON.parse(returnData);
                        if (result == "true") {
                            window.location = "session/index";
                        } else {
                            $(".alert").css('display', 'block');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>