<?php
session_start();
if(session_destroy())
{
header("Location:/belns/login/index.php");
}
?>