<?php

$connection = new mysqli('localhost','root','','school');

if ($connection -> connect_error)
echo "error";

else
echo "connected to database";

?>