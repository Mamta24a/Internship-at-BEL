<?php
session_start();
if(!isset($_SESSION['user_name']))
{
 header("location:login.php");
}
else {
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>admin homepage</title>
    <script src="" type="text/javascript"></script>

<meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="css/reset.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

   <style>
h3:hover {
    color: red;
	text-shadow:3px 3px 3px red;
}
</style>
  
  
  <a href="adminlogout.php" align="right" style="text-decoration: none;" ><h3  style="text-shadow:3px 3px 3px lightseagreen;text-decoration: none;color:white;margin:30px;margin-right:50px;font-weight:900;font-size:25px">LOGOUT</h3></a> 
 
  
    <section class="buttons">
  <div class="container">
    <h1>ADMIN CONTROLS</h1>
    <a href="checkdmnd.php" class="btn btn-1"><svg><rect x="0" y="0" fill="none" width="100%" height="100%"/></svg>VIEW DEMANDS</a>
     <!--End of Button 1 -->
    <a href="demo_php_ajax/index.php" class="btn btn-4"><span>EDIT DEPARTMENT STRUCTURE</span></a>
    <!--End of Button 4 -->
      </div>
  
</section>
  </body>
</html>
<?php  }  ?>