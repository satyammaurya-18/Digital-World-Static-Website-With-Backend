<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel="stylesheet" href="../CSS/Data.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/mediaqueries.css">
    <link rel="stylesheet" href="../CSS/main.css">
    <style>

    </style>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">Digital World</a>
        <nav class="navbar">
            <a href="../index.html">Home</a>
            <a href="../services.html">Services</a>
            <a href="../about.html">About</a>
            <a href="../members.html">Members</a>
            <a href="../book.html">Join Us</a>
            <a href="../review.html">Review</a>
            <a href="../blogs.html">Blogs</a>
            <a href="../events.html">Events</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <!-- Black section background for the entire form and table -->
    <div style="background-image: url('../assets/white.jpg'); 
            background-size: cover; 
            background-position: center; 
            min-height: 100vh; 
            padding: 120px 0; 
            color: white;
            text-align: center;">

        <div class="heading">
            <h2 style="color: black;">User Data</h2>
        </div>
        <div class="main-contaier">
            <div id="login" class="login-container"
                style="background-image: url(../assets/black2.jpg); background-repeat: no-repeat; background-size: cover;">
                <br><br><br><br><br><br>

                <!-- Login Form -->
                <form id="loginForm" style="color: aliceblue;" action="" method="post">
                    <div class="input-container">
                        <input type="password" id="password" name="password" placeholder="Enter Special password"
                            required style="color: aliceblue;">
                    </div>
                    <button type="submit" value="Submit" class="btn2" name="submit">Submit</button>
                </form>
            </div>
        </div>

        <!-- PHP Output (table appears just below login box) -->
        <div
            style="margin-top: 0px; display: flex;  align-items: center; flex-direction: column;">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $entered = $_POST['password'];
                $correct = "student123";

                if ($entered != $correct) {
                    echo "<h1 style='color:red; font-size:25px;'>Incorrect Password !!</h1>";
                } else {
                    $conn = mysqli_connect("localhost", "root", "", "registration_db");
                    if (!$conn) {
                        die("<p style='color:red;'>Connection failed: " . mysqli_connect_error() . "</p>");
                    }

                    $sql = "SELECT fname, lname, phone, email, password, membership FROM members";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // Make table bigger & closer
                        echo "<div style='overflow-x:auto; width:90%; margin-top:20px;'>";
                        echo "<table style='background-color:white; color:black; 
                        border-collapse: collapse; 
                        border-radius:8px; 
                        width:100%; 
                        font-size:18px;
                        box-shadow: 0 0 20px rgba(0,0,0,0.3);'>";
                        echo "<tr style='background-color:#222; color:white; font-size:19px;'>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Membership</th>
                      </tr>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr style='background-color:#f9f9f9;'>
                            <td>{$row['fname']}</td>
                            <td>{$row['lname']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['password']}</td>
                            <td>{$row['membership']}</td>
                          </tr>";
                        }
                        echo "</table></div>";
                    } else {
                        echo "<p style='color:white;'>No records found.</p>";
                    }
                }
            }
            ?>
        </div>

    </div>


    <div class="main-footer">
        <div class="footer-top">
            <div class="footer-top-left">
                <h3>Relax. We've Got You</h3><br>
                <a href="./contact.html" class="btn">Get in Touch <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="footer-top-right">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../services.html">Services</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../members.html">Members</a></li>
                    <li><a href="../book.html">Join</a></li>
                    <li><a href="../review.html">Review</a></li>
                    <li><a href="../blogs.html">Blogs</a></li>
                    <li><a href="../events.html">Events</a></li>
                    <li><a href="../Login.html">Login</a></li>
                    <li><a href="../Registeration.html">Register</a></li>
                </ul>
                <div class="footer-social-media">
                    <ul>
                        <li><a href="#">X→</a></li>
                        <li><a href="#">Instagram→</a></li>
                        <li><a href="#">LinkedIn→</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <p>San Diego—California</p>
                <p>Paris—France</p>
            </div>
            <div class="brand">
                <h1><span>D</span><span>i</span><span>g</span><span>i</span><span>t</span><span>a</span><span>l</span>
                    <span>w</span><span>o</span><span>r</span><span>l</span><span>d</span>
                </h1>
            </div>
            <div class="footer-bottom-right">
                <p>biz@rejouice.com</p>
                <p>©2023 All Rights Reserved</p>
            </div>
        </div>
    </div>

</body>

</html>