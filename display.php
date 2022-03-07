<?php
include("connection.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team-7/deshbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <strong>Team-7</strong>
            </a>

            <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="display.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LogIn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">SignUp</a>
                </li>
                </ul>

            </div>
            </nav>

            </div>
        </div>
        </header>
    
    <div class="container my-5">
    <button type="button" class="btn btn-primary"><a href="registration.php" class="text-white">Add User</a></button>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">SI No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `crud`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo ' <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>
                    <td>
                    <button type="button" class="btn btn-primary"><a href="update.php?updateid= ' .$id .'" class="text-light">Update</a></button>
                   <button type="button" class="btn btn-danger"><a href="delete.php?deleteid='. $id.' " class="text-light">Delete</a></button>
            </td>
                     </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>
</body>
     
</html>