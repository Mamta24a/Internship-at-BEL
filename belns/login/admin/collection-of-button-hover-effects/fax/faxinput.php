<?php
if (isset($_POST['submit'])){
$too=$_POST['too'];
$fax1=$_POST['fax1'];
$copy=$_POST['copy'];
$fax2=$_POST['fax2'];
$frm=$_POST['frm'];
$fax3=$_POST['fax3'];
$date=date('d-m-y');
$sub=$_POST['sub'];
$ref=$_POST['ref'];
$body=$_POST['body'];
$regards=$_POST['regards'];
$name=$_POST['name'];

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
     }

   mysql_select_db("belns",$con);
   $sql="INSERT INTO fax(too,fax1,copy,fax2,frm,fax3,date,sub,ref,body,regards,name)
     VALUES(
   '$_POST[too]','$_POST[fax1]','$_POST[copy]','$_POST[fax2]','$_POST[frm]','$_POST[fax3]','$_POST[date]','$_POST[sub]',
   '$_POST[ref]','$_POST[body]','$_POST[regards]','$_POST[name]')";

if(mysql_query($sql,$con)){
	echo"inserted";
}else echo "error".mysql_error();

mysql_close($con);

}
?>

<!DOCTYPE html>
<html >

  <head>
    <title>fax format</title>
       <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<div class="container">
  <div class="row header">
    <h1>NAVAL SYSTEMS</h1>
    <h3>FAX Message!</h3>
  </div>
  <div class="row body">
    <form action="tcpdf/tcpdf/examples/faxpdf.php" method="post" target="" id="fax">
      <ul>
	  <li>
          <p class="left">
           <label for="too">To:</label>
            <input type="text" name="too" placeholder="To" />
          </p>
          <p class="pull-right">
            <label for="fax1">Fax: </label>
            <input type="text" name="fax1" placeholder="Fax" />      
          </p>
        </li>
		<li>
          <p class="left">
                     <label for="copy">Copy:</label>
            <input type="text" name="copy" placeholder="Copy" />
          </p>
          <p class="pull-right">
            <label for="fax2">Fax: </label>
            <input type="text" name="fax2" placeholder="Fax" />      
          </p>
        </li>
		<li>
          <p class="left">
            <label for="frm">From:</label>
            <input type="text" name="frm" placeholder="From" />
          </p>
          <p class="pull-right">
            <label for="fax3">Fax: </label>
            <input type="text" name="fax3" placeholder="Fax" />      
          </p>
        </li>
	<!--	<li>
          <p class="left">
            <label for="date">Date: </label>
            <input type="date" name="date" placeholder="Date" />
          </p>

        </li> -->
		
		<li><div class="divider"></div></li>
		<li>
          <p>
            <label for="sub">Subject: </label>
            <input type="text" name="sub" placeholder="Subject" />
          </p>
        </li> 
		<li>
          <p>
            <label for="ref">Ref: </label>
            <input type="text" name="ref" placeholder="Refarence" />
          </p>
        </li> 
              
        <li>
          <label for="body">Body</label>
          <textarea cols="46" rows="3" name="body" placeholder="Message Body"></textarea>
        </li>
		<li>
          <p>
            <label for="regards">Regards:</label>
            <input type="text" name="regards" placeholder="Regards" />
          </p>
        </li> 
		<li>
          <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Name" />
          </p>
        </li> 
        
        <li>
          <input class="btn btn-submit" type="submit" value="Submit" name="submit" />
          <small>or press <strong>enter</strong></small>
        </li>
      </ul>
    </form>
                 <!-- <button onclick="location.href = 'faxformat.php';" class="btn btn-submit" >print</button>-->

  </div>
</div>
  </body>
</html>

