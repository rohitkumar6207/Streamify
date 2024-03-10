<?php
include 'user_db.php';
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streamify_login\Signup</title>

    <link rel="stylesheet" href="project.css">
    <style>
       h2 {
          color: #000;
       }
       h1, body {
          color: white;
       }
    </style>
</head>
<body background="forgotten-sword-thumb.jpg">
  
<?php   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Retrieve hashed password and email from the database based on the entered username
    $sql = "SELECT username, email, password FROM `registration` WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPasswordFromDB = $row["password"];

        // Verify the entered password against the hashed password from the database
        
            // Store user information in the session
            //$_SESSION[" id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["email"] = $row["email"];

            header("Location: index.php");
            exit();
        } 
        else {
            echo "Invalid username or password.";
        }
    }

    // Close the database connection
    $conn->close();
?>
<div class="login_container">
    <div class="login-cont"> 
        <h2>Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button name="login" type="submit">Login</button>
        </form>
    </div>
    <div class="go_back_button">
        <a href="project.php"><button>Go home</button></a>
    </div>
</div>   

</body>
</html>
