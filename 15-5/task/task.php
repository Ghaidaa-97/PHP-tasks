<?php

$cid = $_POST['id'];
$cname = $_POST['name'];
$cteacher = $_POST['th'];
$hours = $_POST['hr'];
$duration = $_POST['dur'];
$dept = $_POST['dept'];

$connect =  new mysqli('localhost','root','','school');
if($connect->connect_error)
{
    die('connection failed : $connect->connect_error');
}

else {
    echo "connected successfully";

$query = $connect->prepare("INSERT INTO courses (id , name , hr , dur , dept)
VALUES (?,?,?,?,?,?)") ;

$query->bind_param('issiis',$cid, $cname , $cteacher , $hours , $duration , $dept) ;
$query->execute();
echo "new course is added";
$query->close();
$connect->close();

}
?>