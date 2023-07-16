
<?php 
   include 'connect.php';
    
       session_start();
       if(isset($_SESSION['msg']))
       {
        echo $_SESSION['msg'];

       }
        unset($_SESSION['msg']);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>

    <center>HOME PAGE</center>
        <div class="container">
        <button class="btn btn-primary my-5"><a href="page1.php" class="text-light">Add user</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S No</th>
                    <th scope="col">userame</th>
                    <th scope="col">Password</th>
                    <th scope="col">email</th>
                    <th scope="col">DOB</th>
                    <th scope="col">image</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>


                <?php
                 $sql = "Select * from `user_info_tbl`";
                 $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $username = $row['username'];
                        $password = $row['password'];
                        $email = $row['email'];
                        $DOB = $row['DOB'];
                        $image = $row['image'];
                      
                        echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $username . '</td>
        <td>' . $password . '</td>
        <td>' . $email . '</td>
        <td>' . $DOB . '</td>
        <td>' . $image . '</td>
       
        <td>
    <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
      </td>
      </tr>';
      }
    }
    session_destroy();

    ?>
</tbody>
</table>
</body>
</html>