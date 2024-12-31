<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <div class="login_signup" style="background:url('images/login_bg.png') lightgray 50% / cover no-repeat;">
        <div class="blurbg"></div>
        <div class="content" id="loginform">
            <div class="title">Sign in Account</div>
            <p>Sign into Your Account</p>

            <form>
                <div class="form">
                    <div class="input-cover">
                        <div>
                            <span class="material-symbols-rounded">
                                mail
                            </span>

                            <input type="email" class="input-field" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="input-cover">
                        <div>
                            <span class="material-symbols-rounded">
                                lock
                            </span>

                            <input type="password" class="input-field" placeholder="Password">
                        </div>
                    </div>

                    <div class="input-cover">
                        <a href="#" class="forgetpass">Forget Password?</a>
                    </div>

                    <div class="input-cover">
                        <input type="submit" value="Login Now" class="sub">
                    </div>

                    <div class="input-cover textcenter">
                        <p>Don't have account yet? <a href="signup.php">Register Now</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php include 'footer.php'; ?>

    <?php include 'popup.php'; ?>

    <?php include 'page-script.php'; ?>

</body>

</html>