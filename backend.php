<?php
// Database connection parameters
$dbserver = "localhost";
$dbuser = "root";
$dbpass = " ";
$dbname = "moviedb";

// Create connection
try{
    $conn = mysqli_connect($db_server,  $db_user, $db_pass,  $db_name);
  }
   catch(mysqli_sql_exception)
   {
    echo "Not connected!!!";
   }

// Check if the form is submitted for sign up
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

    // Perform validation and database operations as needed
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Sign up successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Check if the form is submitted for sign in
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signin"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform validation and database operations as needed
    $sql = "SELECT id, name, password FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            echo "Sign in successful!";
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }
}

// Close the database connection
mysqli_close($conn);
?>
