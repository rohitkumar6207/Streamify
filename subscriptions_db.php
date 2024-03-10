<?php
$conn=mysqli_connect('localhost','root','','subscription');
if($conn){
    echo"hello";
}
else echo "connection failed";
?>