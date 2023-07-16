<?php

$conn = new mysqli('localhost','root','','crudoperation');

/*if($conn){
    echo "Connection established succesfully";
}
else{
    die(mysqli_error($conn));
}*/
if(!$conn){
    die(mysqli_error($conn));
}

?>