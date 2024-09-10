<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="../assets/css/admin/login.css"> -->
     <link rel="stylesheet" href="login.css">
</head>
<body>
    
<div class="container">
    <!-- admin login form start -->
    <div class="row justify-content-center h-100vh" id="login-form-box">
        <div class="col-lg-10 my-auto ">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center text-primary font-weight-bold">Login to your account</h2>
                    <hr class="my-3">
                    <form action="#" method="post" class="px-3 flex-column" id="login-form" >
                        <div class="input-group input-group-lg form-group flex align-items-center">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input style="height: 37px;" type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                            
                        </div>
                        <div class="input-group input-group-lg form-group flex align-items-center mt-3 input">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">
                                    <i class="fas fa-key"></i>
                                </span>
                            </div>
                            <input style="height: 37px;"  type="password" class="form-control" id="password" name="password" placeholder="Enter Your password">
                        </div>
                        <div class="form-group ">
                            <div class="float-left custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                <label for="rememberMe" class="custom-control-label">Remember me</label>

                            </div>
                            <div class="float-right">
                                <a href="#" class="text-decoration-none" id="showForgetForm">Forget Password?</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sing In" class="btn btn-block btn-primary">
                        </div>
                        

                    </form>
                </div>
                <div class="card p-4 justify-content-center" style="background: #363C43;">
                    <h2 class="text-center text-white font-weight-bold">Welcome Back</h2>
                    <hr class="my-3 bg-light">
                    <p class="text-center text-light lead">Please Login using your email and password. if you haven't registered yet, you can register for free.</p>
                    <button class="btn btn-outline-light btn-lg align-self-center mt-4" id="showSignUpForm">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
     <!-- admin login form end -->
      <!-- admin register form start -->
    <div class="row justify-content-center h-100vh" id="register-form-box" style="display: none">
        <div class="col-lg-10 my-auto ">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center text-primary font-weight-bold">Create new account</h2>
                    <hr class="my-3">
                    <form action="#" method="post" class="px-3 flex-column" id="register-form" >
                        
                    <div class="input-group input-group-lg form-group flex align-items-center mt-3 input">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input style="height: 37px;"  type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                        </div>
                        <div class="input-group input-group-lg form-group flex align-items-center">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input style="height: 37px;" type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="input-group input-group-lg form-group flex align-items-center mt-3 input">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">
                                    <i class="fas fa-key"></i>
                                </span>
                            </div>
                            <input style="height: 37px;"  type="password" class="form-control" id="password" name="password" placeholder="Enter Your password">
                        </div>
                        <div class="input-group input-group-lg form-group flex align-items-center mt-3 input">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">
                                    <i class="fas fa-key"></i>
                                </span>
                            </div>
                            <input style="height: 37px;"  type="password" class="form-control" id="c_password" name="c_password" placeholder="Confirm password">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Register" class="btn btn-block btn-primary">
                        </div>
                        

                    </form>
                </div>
                <div class="card p-4 justify-content-center" style="background: #363C43;">
                    <h2 class="text-center text-white font-weight-bold">Welcome Back</h2>
                    <hr class="my-3 bg-light">
                    <p class="text-center text-light lead">Enter your email and check your inbox for instructions.please also check your spam folder.</p>
                    <button class="btn btn-outline-light btn-lg align-self-center mt-4" id="showSignInForm">Sign In</button>
                </div>
            </div>
        </div>
    </div>
     <!-- admin register form end -->
      <!-- admin forgotten password start -->
    <div class="row justify-content-center h-100vh" id="forgotten-form-box" style="display: none;">
        <div class="col-lg-10 my-auto ">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center text-primary font-weight-bold">Forgotten Password</h2>
                    <hr class="my-3">
                    <form action="#" method="post" class="px-3 flex-column" id="forgotten-form" >
                        <div class="input-group input-group-lg form-group flex align-items-center">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input style="height: 37px;" type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                            
                        </div>
                        
                       
                        <div class="form-group">
                            <input type="submit" value="Reset Password" class="btn btn-block btn-primary">
                        </div>
                        

                    </form>
                </div>
                <div class="card p-4 justify-content-center" style="background: #363C43;">
                    <h2 class="text-center text-white font-weight-bold">Welcome Back</h2>
                    <hr class="my-3 bg-light">
                    <p class="text-center text-light lead">Enter your email and check your inbox for instructions.please also check your spam folder.</p>
                    <button class="btn btn-outline-light btn-lg align-self-center mt-4" id="back">Back</button>
                </div>
            </div>
        </div>
    </div>
     <!-- admin forgotten password end -->
</div>


<script src="../assets/js/jquery-3.7.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/admin/login.js"></script>
</body>
</html>