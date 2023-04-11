<?php include("../incs/menu.php"); ?>

<?php include("../DAL/UserDAO.php");?>
<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://th.bing.com/th/id/R.02a48a049a19f7536707d888c1ef7b30?rik=rIvffXXhgOj4rg&riu=http%3a%2f%2ftwilightwap.com%2fmobilium%2fwallpapers%2fdown%2f2012%2fmovies%2f640x960%2fkungfupand_wjnff2aa.jpg&ehk=fNhG7NcPHb7U%2bRoE%2b4kceBv3a0uMJqv48ICu1yi1vJw%3d&risl=&pid=ImgRaw&r=0" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action='Login.php?do=login' method='POST'>

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Login</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color=#d9232d;"><span style="#red">* <?php echo $nameErr;?></span></h5>
                                    
                                    <div class="form-outline mb-4">
                                        <input type="email" name="txtUsername" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Email address</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="txtPassword" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                    </div>

                                    <a class="small text-muted" href="#!">Forgot password?</a>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!" style="color: #393f81;">Register here</a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

