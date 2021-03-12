<?php include('header.php');?>

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_7.jpg');">
    <br>
    <br><br><br><br>
    <h1 style="font-weight: 600;" class="text-center text-white">
        Login
    </h1>
    <div class="col-md-6 pr-md-5 m-auto">
        <form action="" method="POST">
            <div class="form-group py-2">
                <input type="email" name="c_email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group py-2">
                <input type="password" name="c_password" class="form-control " placeholder="Enter Your Password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name="c_login" class="btn btn-primary btn-block py-3 px-5">
            </div>
            <p class="text-center text-white">	
                Not Have have an Account <a href="register.php">Click Here to Signup</a>
            </p>
        </form>
    </div>

</div>

<?php
include('footer.php');
?>