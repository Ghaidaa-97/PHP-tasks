<?php

if(isset($_GET['o']))
{
    $url=$_GET['u'];
    echo "<script>location.href='$url';</script>";
}
?>