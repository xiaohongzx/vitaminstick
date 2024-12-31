<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <div class="login_signup" style="background:url('images/signup_bg.png') lightgray 50% / cover no-repeat;">
        <div class="blurbg"></div>
        <div class="content" id="signupform">
            <div class="title">Register New Account</div>
            <p>Sign Up New Account</p>

            <form>
                <div class="form">
                    <div class="input-cover">
                        <div>
                            <span class="material-symbols-rounded">
                                person
                            </span>

                            <input type="text" class="input-field" placeholder="Full Name">
                        </div>
                    </div>

                    <div class="input-cover">
                        <div>
                            <span class="material-symbols-rounded">
                                event
                            </span>

                            <input type="text" name="dob" class="input-field" id="datepicker"
                                placeholder="Date Of Birth" inputmode="none" required autocomplete="off">
                        </div>
                    </div>

                    <div class="input-cover">
                        <div>
                            <span class="material-symbols-rounded">
                                email
                            </span>

                            <input type="email" class="input-field" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="input-cover">
                        <div>
                            <span class="material-symbols-rounded">
                                phone_enabled
                            </span>

                            <input id="mobileno_code" name="mobile" type="tel" value="" placeholder="123456789"
                                class="input-field" required>
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
                        <div>
                            <span class="material-symbols-rounded">
                                lock
                            </span>

                            <input type="password" class="input-field" placeholder="Confirm Password">
                        </div>
                    </div>


                    <div class="input-cover">
                        <p>Already got account? <a href="login.php">Sign In Now</a></p>
                    </div>

                    <div class="input-cover">
                        <input type="submit" value="Register Now" class="sub">
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