<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creators</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

div.social{
    display: block;
    align-items: center;
    padding-top: 25px;
    padding-left: 35px;
    padding-bottom: 20px;
    word-spacing: 18px;
    width: 100%;
}
i{
    color: black;
}

body{
  font-family: Arial, sans-serif;
  background-color:   #fbe4d8;
}
.item {
    width: 250px;
    margin-right: 50px;
    margin-left: 50px;
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: cornsilk;
    display: inline-block;
}

.item img {
    width: 100%;
    border-radius:18px;
    padding: 3px 3px 3px 3px;
    margin: 2px 2px 2px 2px;
}

.item h3, h5 {
    margin-top: 10px;
    font-size: 18px;
}

.watch-button {
    display: block;
    margin-top: 10px;
    background-color: #e50914;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
}
.watch-button:hover {
    background-color: #ff0000;
}
.main_section {
    margin-bottom: 40px;
}

.main_section h2 {
    margin-bottom: 20px;
}
h2 ,h1 , h5 ,h3 ,h6 {
  text-align: center;
  margin-bottom: 20px;
}
    </style>

    
</head>
<body background="">
<div class="container">
        <h1>Welcome to Creators Section</h1>
        <main>
            <section id="home" class="main_section">
                <h2>Creators</h2>
                <div class="popular-shows">

                <!-- the working block -->

                <div class="item">
                        <img src="WhatsApp Image 2024-03-08 at 18.30.36_a7559364.jpg" alt="Creator_pic">
                        <h3>Kartik Parsad</h3>
                        
                        <div class="social">
                    <a href="https://www.facebook.com/share/jYj1CwR6kRZAPHBg/?mibextid=qi2Omg" target="_blank"><i class="fa-brands fa-facebook fa-bounce fa-xl"></i></a>

                    <a href="https://www.instagram.com/r_kartik4u_?igsh=ZmdrZG5yODUwZ3Bj" target="_blank"><i class="fa-brands fa-instagram fa-bounce fa-xl"></i></i></i></a>

                    <a href="" target="_blank"><i class="fa-brands fa-twitter fa-bounce fa-xl"></i></i></a>

                    <a href="https://youtube.com/@hellokartik7393?si=m4eJpfxpob-rTmF7" target="_blank"><i class="fa-brands fa-youtube fa-bounce fa-xl"></i></i></a>
                </div>

                <h5>Funny Video creator</h5>

                <a href="kartik_profile.php" class="watch-button">Visit</a>
                
                    </div>
                    <!-- End -->

                    <?php
                    for($i=2;$i<=8;$i++)
                    {
                        ?>
                        <div class="item">
                        <img src="WhatsApp Image 2024-03-08 at 18.24.54_065e0ae0.jpg" alt="creator image">
                        <h3>Creator Name <?php echo $i ; ?></h3>
                        <h5>Social Madia of creator</h5>
                        <h5>Type of content</h5>
                        <a href="watch_movie1.php" class="watch-button">Visit</a>
                    </div>
                    <?php
                    };
                    ?>
                </div>
            </section>
        </main>
    </div>
</body>
</html>