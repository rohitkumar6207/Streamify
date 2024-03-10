<?php
$conn=mysqli_connect('localhost','root','','user');
if($conn){
    echo"";
}
else echo "connection failed";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $package_id = $_POST["package_id"];
    $package_price = $_POST["package_price"];
    $package_time = $_POST["package_time"];
    
    // Basic validation
    if (empty($name) || empty($email) || empty($contact) || empty($package_id) || empty($package_price) || empty($package_time)) {
        echo "All fields are required.";
    } else {
        // Insert data into the users table
        $sql = "INSERT INTO  `user_details` (name, email, contact, package_id , package_price, package_time) VALUES ('$name', '$email', '$contact', '$package_id', '$package_price','$package_time')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<h1>Subscription successful! Welcome, $name! </h1>";
            header("Location: project.php");
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
    <title>Streaming Website - Profile Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url("Images/161377-my-hero-academia-manga-wallpaper-top-free-my-hero-academia.jpg");
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            backdrop-filter: blur(5px); /* Apply blur effect */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="radio"] {
            width: calc(100% - 12px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
        }
        .select-sections {
            display: flex;
            justify-content: space-between;
        }
        .select-section {
            flex: 0 0 calc(30% - 10px);
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
        }
        .select-section label {
            display: flex;
            align-items: center;
        }
        .select-section div {
            display: flex;
            align-items: center;
        }
        .select-section div input[type="radio"] {
            margin-right: 5px;
            width: 20px; /* Set the width of radio buttons */
            height: 20px; /* Set the height of radio buttons */
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block; /* Display block to move to the next line */
            margin-top: 20px; /* Add margin to separate from the radio buttons */
            margin-left: auto; /* Align the button to the right */
            margin-right: auto; /* Align the button to the left */
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Profile Section</h1>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" required>

        <ddiv class="select-sections">
            <div class="select-section">
                <label>Select Package:</label>
                <div>
                    <input type="radio" id="package1" name="package_id" value="Streamify VIP">
                    <label for="package1">Streamify VIP</label>
                </div>
                <div>
                    <input type="radio" id="package2" name="package_id" value="Streamify Premium">
                    <label for="package2">Streamify Premium</label>
                </div>
                <div>
                    <input type="radio" id="package3" name="package_id" value="Streamify Premium+">
                    <label for="package3">Streamify Premium+</label>
                </div>
            </div>

            <div class="select-section">
                <label>Select Package Price:</label>
                <div>
                    <input type="radio" id="price199" name="package_price" value="199">
                    <label for="price199">$199</label>
                </div>
                <div>
                    <input type="radio" id="price499" name="package_price" value="499">
                    <label for="price499">$499</label>
                </div>
                <div>
                    <input type="radio" id="price999" name="package_price" value="999">
                    <label for="price999">$999</label>
                </div>
            </div>

            <div class="select-section">
                <label>Select Package Time:</label>
                <div>
                    <input type="radio" id="year1" name="package_time" value="1">
                    <label for="year1">1 Year</label>
                </div>
                <div>
                    <input type="radio" id="year2" name="package_time" value="2">
                    <label for="year2">2 Years</label>
                </div>
                <div>
                    <input type="radio" id="year3" name="package_time" value="3">
                    <label for="year3">3 Years</label>
                </div>
            </div>
        </div>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
