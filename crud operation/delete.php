<?php

include 'connect.php';
//Using get we can acess the variables or parameters from the url
if(isset($_GET['deleteid'])){
    //Now access the id
    $id=$_GET['deleteid'];

    $sql = "delete from `user_info_tbl` where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>