<?php

require_once("navbar.php");

if(isset($_POST["log"]))
{
    $em = $_POST["email"];
    $pass = $_POST["pass"];

    if($em=='brijesh@gmail.com' && $pass=='brijesh123')
    {
        $_SESSION["email"]=$_POST["email"];
        echo "<h3 align='center' style='color:green'>You Are Logged In Successfully</h3>";
        header("refresh:4,profile.php");
    }
    else
    {
        echo "<h3 align='center' style='color:red'>Your Email And Password Are Incorrect Try Again</h3>";
        header("refresh:4,login.php"); 
    }
}

?>

<div class=container>
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center bg-white text-dark">Create Your Account</h3>

        <form method="post">

        <div class="form-group col-md-12">
            <label class="text-dark">Email : </label>
            <input type="text" name="email" placeholder="enter your email *" require class="form-control">
        </div>

        <div class="form-group col-md-12">
            <label class="text-dark">Password : </label>
            <input type="text" name="pass" placeholder="enter your password *" require class="form-control">
        </div>

        <button type="submit" name="log" class="btn btn-lg btn-dark" style="margin-left: 15px; width : 15%">Login!</button>
        <b><a href="#">Forget Password</a></b>
        <h4>Don't Have An Account ?<a href="register.php">Create Your Account</a></h4>

        </form>
        </div>
    </div>
</div> 

<?php

require_once("footer.php");

?>
 
