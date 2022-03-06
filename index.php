<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">Nadim</div>
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

    <!-- header section -->
    <div class="header">
        <h1>Hello</h1>
        <p>I am Nadim</p>
    </div>

    <!-- Gallery section -->
    <div>
        <h1 style="margin: 2%; text-align: center;">Gallery</h1>
        <div class="grid-gallery">
            <div class="gallery" style="margin-left:100px">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="./images/image1.jfif" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                <a target="_blank" href="img_forest.jpg">
                    <img src="./images/image2.jfif" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                <a target="_blank" href="img_lights.jpg">
                    <img src="./images/image3.jfif" alt="Northern Lights" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery" style="margin-left:100px ;margin-top: 20px;">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="./images/image4.jfif" alt="Mountains" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery" style="margin-top: 20px;">
                <iframe width="380" height="305" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            <div class="gallery" style="margin-top: 20px;">
                <iframe width="380" height="305" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>

        </div>
    </div>

    <!-- notice  section -->
    <table style="margin-top:5%">
        <tr>
            <th style="padding-left: 100px;">Date</th>
            <th style="padding-left: 400px;">Notice</th>
            <th style="padding-left: 400px;">Download</th>
        </tr>
        <tr>
            <td style="padding-left: 100px;">12.09.2021</td>
            <td style="padding-left: 400px;">Notice page here</td>
            <td style="padding-left: 400px; color: red">Click Here</td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">12.09.2021</td>
            <td style="padding-left: 400px;">Notice page here</td>
            <td style="padding-left: 400px; color: red">Click Here</td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">12.09.2021</td>
            <td style="padding-left: 400px;">Notice page here</td>
            <td style="padding-left: 400px; color: red">Click Here</td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">12.09.2021</td>
            <td style="padding-left: 400px;">Notice page here</td>
            <td style="padding-left: 400px; color: red">Click Here</td>
        </tr>
    </table>

    <!-- footer  section -->
    <footer style="margin-top: 10%; text-align: center;">
        <h1>Copyright &copy; Noman</h1>
    </footer>

</body>

</html>