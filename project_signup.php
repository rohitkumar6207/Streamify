<?php
include 'user_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streamify_login\Signup</title>

    <link rel="stylesheet" href="project.css">
<style>
   h2{
    color: #000;
  }
  h1{
    color: white;
  }
</style>
</head>
<body background="forgotten-sword-thumb.jpg">

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $re_password = $_POST["re_password"];
        
        // Basic validation
        if($password==$re_password){
          if (empty($username) || empty($email) || empty($password)) {
            echo "All fields are required.";
          } else {
                // Hash the password using password_hash
                  $password = password_hash($password, PASSWORD_DEFAULT);
                  // Insert data into the users table
                  $sql = "INSERT INTO `registration`(username, email, password) VALUES ('$username', '$email', '$password')";
        
                  if ($conn->query($sql) === TRUE) {
                        echo "<h1>Registration successful! Welcome, $username! </h1>";
          
                      } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  header("Location: project_login.php");
            exit();
                        
                  // Close the database connection
                    $conn->close();
           }
          }
          else {
            echo "password not matched...";
            }
        }
          ?>

    <div class="login_container"> 
        <div class="signup-cont">
          <h2>Sign Up</h2>
          <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="re_password" placeholder="Re-Password" required>
            <button name="signup" type="submit">Sign Up</button>
          </form>
        </div>
        <div class="go_back_button">
          <a href="project_login.php"><button>Go To Login</button></a>
        </div>

      </div>
</body>
</html>