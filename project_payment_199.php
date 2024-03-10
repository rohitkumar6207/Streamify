<?php
$conn=mysqli_connect('localhost','root','','subscription');
if($conn){
    echo"hello";
}
else echo "connection failed";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $cardNumber = $_POST["cardNumber"];
    $expiry = $_POST["expiry"];
    $cvv = $_POST["cvv"];
    
    // Basic validation
    if (empty($name) || empty($email) || empty($cardNumber) || empty($expiry) || empty($cvv)) {
        echo "All fields are required.";
    } else {
        // Insert data into the users table
        $sql = "INSERT INTO  `subscriptions_1` (name, email, cardNumber,expiry , cvv) VALUES ('$name', '$email', '$cardNumber', '$expiry', '$cvv')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<h1>Subscription successful! Welcome, $name! </h1>";
            header("Location: thank.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Premium Payment</title>

  <link rel="stylesheet" href="project.css">
  <style>
    h1, h2{
      color: #000;
    }
  </style>
</head>
<body background="z6btu437zgi91.webp">

<div class="container_payment">
  <h1>Payment for Premium Subscription (₹199)</h1>
  <form method="POST">
    <label for="name">Full Name</label>
    <input type="text" id="name" name="name" required><br>
    
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required><br>
    
    <label for="cardNumber">Card Number</label>
    <input type="number" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required><br>

    <label for="expiry">Expiration Date (MM/YYYY)</label>
    <input type="text" id="expiry" name="expiry" placeholder="MM/YYYY" pattern="[0-9]{2}/[0-9]{4}" required><br>
    
    <label for="cvv">CVV</label>
    <input type="number" id="cvv" name="cvv" placeholder="123" required><br>
    
    <input type="submit" value="Pay ₹199">
  </form>
</div>
</body>
</html>
