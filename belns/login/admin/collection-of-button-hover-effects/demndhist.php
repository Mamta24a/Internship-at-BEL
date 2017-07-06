<?php


session_start();
if(!isset($_SESSION['user_name']))
{
 header("location:login.php");
}
else {
?>


<!DOCTYPE html>
<html>
<head>
    <title>demand_history</title>
    <style>
    td{border:1px solid;
	color:black;
      padding:15px;
      }th{padding:15px}
    </style>
</head>
<body style="background-color: antiquewhite">
    <div style="background-color: white;margin:270px;margin-top:100px;border:1px solid ;border-color:darkgrey "><br>
    <h1  align="center" style="color:orange"><br>DEMANDS HISTORY</h1>
	<div style=" border:2px solid;padding-left:0px; margin:166px; margin-top:50px;margin-bottom:100px">
        <?php
        $con=mysql_connect("localhost","root","");
        if(!$con){
        	die("can not connect".mysql_error());
        }

        mysql_select_db("belns",$con);
        $sql="SELECT * FROM demand WHERE NAME='".$_SESSION['user_name']."' ORDER BY id DESC";
        $myData = mysql_query($sql,$con);
		?>
		
		<table style="border:1px solid;color:black;" align="center">
  <tr style="border:1px solid;color:black;" align="center">
        <th style="border:1px solid;color:black; background-color:grey" align="center">Name:</th>
		<th style="border:1px solid;color:black; background-color:grey" align="center">Demand for:</th>
		<th style="border:1px solid;color:black; background-color:grey" align="center">Quantity:</th>
		<th style="border:1px solid;color:black; background-color:grey" align="center">Remark:</th>
		<th style="border:1px solid;color:black; background-color:grey" align="center">Date:</th></tr>
  
       <?php while($record = mysql_fetch_array($myData)){
            $name = $record['name'];
            $qty = $record['qty'];
            $dmndfr = $record['dmndfr'];
            $rmrk = $record['rmrk'];
            $date = $record['date'];
        ?>

     
  <tr><td><?php echo $name; ?></td>
      <td><?php echo $dmndfr; ?></td> 
	  <td><?php echo $qty; ?></td>
      <td><?php echo $rmrk; ?></td>
	  <td><?php echo $date; ?></td></tr>
    
	<?php } ?></table>
    </div></div>
</body>
</html>

<?php  }  ?>