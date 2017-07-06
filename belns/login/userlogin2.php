<?php
session_start();

$user_name=$_POST['user_name'];
$password=$_POST['password'];
 //$_SESSION["username"] =$_POST['user_name'];

if($user_name&&$password)
 {
      $connect = mysql_connect("localhost","root","") or die("couldn't connect to the database!");
      mysql_select_db("belns") or die ("couldn't find database");

      $query = mysql_query("SELECT * FROM users WHERE user_name='$user_name'");

      $numrows = mysql_num_rows($query);

  if($numrows!==0)
      {
          while($row= mysql_fetch_assoc($query))
             {
                  $dbuser_name=$row['user_name'];
                  $dbpassword=$row['password'];
             }
       if($user_name==$dbuser_name&&$password==$dbpassword)
           {
                 echo "you are logged in!";
                 echo "<script>window.open('admin/collection-of-button-hover-effects/loginindex.php','_self')</script>";
                 @$_SESSION['user_name'] = $user_name;
           }
       else
              echo "your password is incorrect!";
              echo "<script>window.open('userindex.php','_self')</script>";
      }
  else
         die("that user doesn't exists!");
 }
else
       die("please enter a username and password!");
?>