<?php
include('conn.php');
if(isset($_POST['reg-submit']))
{
 $sql = "INSERT INTO php_users_login (Name,Password) VALUES ('".$_POST["name"]."','".$_POST["Password"]."')";
 $result = mysqli_query($conn , $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login And Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">LogIn</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>

            </div>
            <div class="social-icons">
                <img src="fb.png">
                <img src="tw.png">
                <img src="gp.png">
            </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" name="userid" placeholder="UserId" required>
                <input type="text" class="input-field" name="pass" placeholder="EnterPassword" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" name="log-submit" class="submit-btn">LogIn</button>
            </form>
            <form id="register" class="input-group" action="login.php" method="POST">
                <input type="text" class="input-field" name="name" placeholder="Name" required>
                <input type="text" class="input-field" name="Password" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" name="reg-submit" class="submit-btn">Register</button>
            </form>

        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>
</html>