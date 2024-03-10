<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video player</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #dfb6b2; /* Changed background color */
            background-attachment: fixed;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align items to the top */
        }
        .video {
            width: 70%;
            background-color: #fbe4d8;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content {
            width: 96%;
            background-color: #333;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .video h2 {
            color: #333;
            margin-top: 0;
        }
        .video p {
            color: #666;
        }
    
        .suggestions-container {
            width: 25%;
            margin-left: 20px; /* Add some space between the video and suggestions */
            overflow-y: auto; /* Enable vertical scrolling */
            max-height: calc(140vh - 100px); /* Adjusted the maximum height to account for the header */
        }
        .suggestions {
            padding-right: 10px; /* Add some right padding to prevent the scrollbar from overlapping content */
            overflow-y: auto; /* Enable vertical scrolling */
        }
        .suggestions .item {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .suggestions .item img {
            width: 100%;
            border-radius: 5px;
        }
        .suggestions .item h3 {
            margin-top: 10px;
            color: #333;
        }
        header {  
            color: #fff;
        }
        .creators-link {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text color */
            font-weight: bold; /* Bold font */
            padding: 8px 12px; /* Padding for better appearance */
            border-radius: 5px; /* Rounded corners */
            text-decoration: none; /* Remove underline */
        }

        .creators-link:hover {
            background-color: #45a049; /* Darker green on hover */
        }
        .nav_container {
            width: 90%;
            margin: 0 auto;
            padding: 20px 0;
        }

        header {
            padding: 10px 0;
            color: #333;
        }

        header .nav_container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav ul {
            list-style-type: none;
        }

        header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #333;
        }
        a:active {
            color: red;
        }

        header .nav_container .nav_logo{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav_logo h1 {
            font-size: 1.5em;
            margin-left: 40px;
        }
    </style>
</head>
<body>
<header>
    <div class="nav_container">
        <div class="nav_logo">
            <h1>Streamify</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#avm">AVM</a></li>
                <li><a href="#fan_arts">Fan Edits</a></li>
                <li><a href="project_creator.php" class="creators-link">Creators</a></li>
                <li><a href="project_premium.php">Premium</a></li>
                <li><a href="project_login.php">Login</a></li>
                <li><a href="project_signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </div>
</header> 
<main>
    <div class="video">
        <!-- Video player -->
        <div class="content">
            <video controls style="width: 100%;"> <!-- Set fixed height for the video -->
                <source src="bhool-bhulaiyaa-2-title-track-bts-best-of-me-choreo-edit-1080-ytshorts.savetube.me.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div><br>
        <!-- Video details --> 
        <div class="play-details-section">
            <h2>BTS - Bhool bhulaiyaa-2  (Edits)</h2>
            <p>BTS: Bangtan Boys - Bhool-bhulaiyaa-2-title-track-bts (Edits) in 4K resolution.</p>
            <strong>Origin:</strong><p>BTS was formed in 2010, after Big Hit Entertainment CEO Bang Si-hyuk wanted to form a hip hop group around RM (Kim Nam-joon), an underground rapper well known on the music scene in Seoul. At the time, physical album sales were on the decline and digital revenues were not yet high enough to compensate.</p>
        </div>
    </div>
    <div class="suggestions-container">
        <!-- Suggestions -->
        <div class="suggestions">
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 1">
                <h3>Suggested Video 1</h3>
            </div>
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 2">
                <h3>Suggested Video 2</h3>
            </div>
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 3">
                <h3>Suggested Video 3</h3>
            </div>
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 4">
                <h3>Suggested Video 4</h3>
            </div>
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 5">
                <h3>Suggested Video 5</h3>
            </div>
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 6">
                <h3>Suggested Video 6</h3>
            </div>
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 7">
                <h3>Suggested Video 7</h3>
            </div>
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 8">
                <h3>Suggested Video 8</h3>
            </div>
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 9">
                <h3>Suggested Video 9</h3>
            </div>
            <div class="item">
                <img src="1331368.png" alt="Suggested Video 10">
                <h3>Suggested Video 10</h3>
            </div>
        </div>
    </div>
</main>
</body>
</html>
