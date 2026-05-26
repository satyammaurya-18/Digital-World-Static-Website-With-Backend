<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "registration_db");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM members WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);

        // ✅ Save primary key (ID) into session
        $_SESSION['user_id'] = $row['email'];

        // ✅ Redirect to profile page
        header("Location: ../After_login/PHP/profile.php");
        exit;
    } 
    else {
        echo "<script>alert('Incorrect Email or Password!');</script>";
    }
}
?>
