<?php
include("mysqlconnect.php");

if (isset($_POST['submit'])){

$user_name=$_POST['user_name'];
$password=$_POST['password'];

     $sql="SELECT * FROM login WHERE
     user_name = '$user_name' AND password = '$password'";

    $run=mysql_query($sql);

if(mysql_num_rows($run)>0)  {

$_SESSION['user_name']=$user_name;

echo "<script>window.open('admin/collection-of-button-hover-effects/admin.php','_self')</script>";
}
else  {
echo "<script>alert('user name or password is incorrect')</script>";
}}
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet prefetch' href='css/font-awesome-4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<head>
    <link href='css/css.css' rel='stylesheet' type='text/css'>
</head>
<div class="wrapper">
    <div class="background"></div>
    <div class="auth opa">
        <div class="image-size">
            <h1><img src="untitled.jpg" width="270px"></h1>
        </div>
        <div class="login-title">
            <h3>Welcome Back!</h3>
        </div>
        <form action="login.php" method="post">
        <div class="inputWrapper">
            <div class="user-icon">
                <i class="fa fa-user fa-fw"></i>
            </div>
            <input type="text" class="username" placeholder="Enter your username" name="user_name"/>
            <div class="user-icon">
                <i class="fa fa-key fa-fw"></i>
            </div>
            <input type="password" class="password" placeholder="Enter your password" name="password"/>
            <input type="submit" class="btn btn-login" value="Log in" name="submit"/>
            </div></form>
    </div>
</div>
</body>
</html>
