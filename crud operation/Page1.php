<?php
include 'connect.php';
if(isset($_POST['submit'])){
    //then only will store data inside our database
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $DOB=$_POST['DOB'];
    $image=$_POST['image'];
  
     $sql = "insert into user_info_tbl (username,password,email,DOB,image) values('$username','$password','$email','$DOB','$image')";
    $result = mysqli_query($conn,$sql);
    if($result>0){
        echo "Data inseted succesfully";
        header('location:page2.php');
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

    <title>Crud Operation    </title>
    <link rel="icon" type="image/x-icon" href="/favicon.jpg">

    <style>
        h3{
            text-align: center;
            color: solid black;
        }
    </style>
</head>
<body>
      
    <h3>Signup page</h3>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">username</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username">
            </div>
               <div class="mb-3">
                <label class="form-label">password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" >
            </div>
            <div class="mb-3">
                <label class="form-label">DOB</label>
                <input type="date" class="form-control" placeholder="Enter your DOB" name="DOB">
            </div>
            <div class="mb-3">
                <label class="form-label">image</label>
                <input type="file" class="form-control" name="image" >
            </div>
            <div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               <p class="login-register-text">Have an account?<a href="page2.php">Login here</a>.</p>  
        </form>
    </div>
</body>
</html>