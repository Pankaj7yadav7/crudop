
<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql = "Select * from `user_info_tbl` where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$username=$row['username'];
$password=$row['password'];
$email=$row['email'];
$DOB=$row['DOB'];
$image=$row['image'];

if(isset($_POST['submit'])){
    //then only will store data inside our database
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $DOB=$_POST['DOB'];
    $image=$_POST['image'];
   

    $sql = "update `user_info_tbl` set id=$id, username= '$username',password='$password',email='$email',DOB='$DOB',image='$image' where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Updated succesfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">userame</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username" value=<?php echo $username;?>>
            </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">DOB</label>
                <input type="text" class="form-control" placeholder="Enter your DOB" name="DOB" autocomplete="off" value=<?php echo $DOB;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">image</label>
                <input type="file" class="form-control" name="image" >
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>


</body>

</html>