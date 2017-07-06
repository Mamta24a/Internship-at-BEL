<html>
<body>

<?php

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}else echo"success";

mysql_close($con);

?>

</body>
</html>