<?php
$connection=mysqli_connect('localhost','root','','blog');
if(!$connection){
    echo "not connectd".mysqli_error();
}

?>