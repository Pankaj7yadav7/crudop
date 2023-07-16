<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }    
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
    .login-register{
        color: lightblue;
    }
</style>   
</head>    
<body>    
 
    <center> <h1>  Login Form </h1> </center>
      <?php
       session_start();
       if(isset($_SESSION['msg']))
       {
        echo $_SESSION['msg'];

       }
        unset($_SESSION['msg']);
       ?>   
    <form  method="post">  
        <div class="container">   
            <label>email : </label>   
            <input type="text" placeholder="Enter email" name="email" required>  
            <label>password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit" name="Login">Login</button> 
        </div> 
        <p class="login-register-text">Don't have an account?<a href="page1.php">register here</a>.</p>  

    </form>

 <?php
     include'connect.php';

     if(isset($_POST['Login']))
    {
      $email  = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM 
      user_info_tbl WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['msg']="succesfully login";
           header('location:display.php');
     
    }
    else{
        $_SESSION['msg']="username and password is incorrect";
    
        header('location:page2.php');
       
    }
 }
 session_destroy();
?> 

</body>     
</html>  