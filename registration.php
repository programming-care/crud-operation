<?php
include("connection.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud` (name,email,mobile,password) 
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($conn));
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team-7/registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
 <nav class="navbar">
        <div class="logo"><a href="index.php">Team-7</a></div>
        <ul class="nav-links">
            <div class="menu">
                <li><a href="about.php">About</a></li>
                <li><a href="display.php">Dashboard</a></li>
                <li><a href="registration.php">Registration</a></li>
            </div>
        </ul>
    </nav>
    
    <div class="container my-5">
    <button type="button" class="btn btn-primary">Add User</button>
        <form method="POST">
            <div class="mb-3">
                <label>EName</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile" name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>