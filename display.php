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
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><a href="index.php">Team-7</a></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li><a href="about.php">About</a></li>
                <li><a href="display.php">Dashboard</a></li>
                <li><a href="registration.php">Registration</a></li>

                <!--<li class="services">
                    <a href="/">Course</a>
                    <ul class="dropdown">
                        <li><a href="/">HTML</a></li>
                        <li><a href="/">CSS</a></li>
                    </ul>
                </li>-->
                <!-- <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signUp.php">Sign Up</a></li> -->
                
            </div>
        </ul>
    </nav>
    
    <div class="container">
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