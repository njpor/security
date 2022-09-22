<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="./login.css">
        <title>Login</title>
    </head>
    <body>
        <section class="vh-100">
        <div class="container-fluid">
            <center>
                <div class="row">

                    <div class="col-sm-8 text-black" >

                        <!-- <div class="px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <span class="h1 fw-bold mb-0">Logo</span>
                        </div> -->
                        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5 div-from">
                            <div class="card">
                                <form class="card-body form-login" style="width: 23rem;" action="getuser.php" method="POST">

                                <h1 class="fw-normal" style="letter-spacing: 1px;">Log in</h1>
                                <p class="small mb-2 pb-lg-2 text-muted" style="font-size: 10px;">Enter your cerdential to access your account</p>

                                <div class="align-items-center  mb-3" >
                                    <button class="btn btn-light">
                                        <img src="../../images/googleicon.png" alt=""  width="20" height="20">&nbsp; Login with google account
                                    </button>
                                    <p>or</p>
                                </div>


                                <div class="form-outline mb-4">
                                    <input type="email" id="emailfiled" class="form-control form-control-lg" name="email" required/>
                                    <label class="form-label" for="emailfiled">Email address</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="passfield" class="form-control form-control-lg" name="pass" required/>
                                    <label class="form-label" for="passfield">Password</label>
                                </div>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                                <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>

                                </form>
                            </div>

                        </div>

                    </div>
                    <div class="col-sm-4 px-0 d-none d-sm-block">
                        <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                        alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;"> -->
                        <img src="../../images/login.jpg" class="w-100 vh-100" style="object-fit: cover;object-position: left;"/>
                    </div>
                </div>

            </center>
        </div>
        </section>
        
    </body>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</html>

