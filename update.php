<?php
include("connection.php");
$id=$_GET['updateid'];

$sql="Select *from `crud` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data update successfully";
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
    <button type="button" class="btn btn-primary">Add User</button>
        <form method="POST">
            <div class="mb-3">
                <label>EName</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off"
                value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"
                value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile" name="mobile" autocomplete="off"
                value=<?php echo $mobile;?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off"
                value=<?php echo $password;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>