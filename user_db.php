<?php
$conn=mysqli_connect('localhost','root','','user');
if($conn){
    echo"helo";
}
else echo "connection failed";
?>