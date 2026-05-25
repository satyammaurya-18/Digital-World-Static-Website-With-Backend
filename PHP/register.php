<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $phone = $_POST['Number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords Do Not Match! Reaload page and Try Again'); </script>";
        exit;
    }

	$conn = mysqli_connect("localhost", "root", "", "registration_db");
	if (!$conn) {
		die("Connection failed: ");
	}
    //  $sql = "CREATE TABLE members (
    //      fname VARCHAR(50),
    //      lname VARCHAR(50),
    //      phone int(10),
	//  	email char(100) PRIMARY KEY,
	//  	password char(15)
	//  );";

	
	$sql1 = "INSERT INTO members (fname,lname,phone,email,password) VALUES ('$fname','$lname','$phone','$email','$password')";
	// mysqli_query($conn, $sql);
     mysqli_query($conn, $sql1);
    
    echo "<script>Registered Succesfully</script>";
	header("Location: ../login.html");
	}

?>