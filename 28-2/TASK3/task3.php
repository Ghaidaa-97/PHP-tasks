<?php

session_start();
$_SESSION['u']=$_GET['u'];

if(isset($_GET['o']))
{

   echo "<script>location.href =$_SESSION['u'];</script>"; 

}
?>