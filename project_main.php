<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streamify main</title>

    <link rel="stylesheet" href="project.css">
    
</head>
<body background="">
    <div class="container">
        <h1>Welcome to Streamify</h1>
        <main>

            <section id="home" class="main_section">
                <h2>Popular Shows</h2>
                <div class="popular-shows">

                <!-- the working block -->

                <div class="item">
                        <img src="hqdefault.webp" alt="One Piece">
                        <h3>One Piece</h3>
                        <a href="project_play-1.php" class="watch-button">Watch</a>
                    </div>
                    <!-- End -->

                    <?php
                    for($i=2;$i<=10;$i++)
                    {
                        ?>
                        <div class="item">
                        <img src="43e0db2f-fea0-4308-bfb9-09f2a88f6ee4_what_is_netflix_1_en.png" alt="Show 1">
                        <h3>Show <?php echo $i ; ?></h3>
                        <h5>Premium</h5>
                        <a href="watch_movie1.php" class="watch-button">Watch</a>
                    </div>
                    <?php
                    };
                    ?>
                </div>
            </section>

            <section id="avm" class="main_section">
                <h2>AVM (Anime Video Mixes/Music)</h2>
                <div class="movie">
                    <!-- the working block -->

                    <div class="item">
                        <img src="hqdefault (1).webp" alt="Demon Slayer">
                        <h3>Demon Slayer</h3>
                        <a href="project_play.php" class="watch-button">Watch</a>
                    </div>
                    <!-- End -->

                    <?php
                    for($i=2;$i<=10;$i++)
                    {
                        ?>
                    <div class="item">
                        <img src="43e0db2f-fea0-4308-bfb9-09f2a88f6ee4_what_is_netflix_1_en.png" alt="Movie 1">
                        <h3>Movie <?php echo $i ; ?></h3>
                        <h5>Premium</h5>
                        <a href="watch_movie1.php" class="watch-button">Watch</a>
                    </div>
                    <?php
                    };
                    ?>

                </div>
            </section>

            <section id="fan_arts" class="main_section">
                <h2>Fan Art Galleries</h2>
                <div class="web-series">

                <!-- the working block -->

                <div class="item">
                        <img src="WhatsApp Image 2024-02-21 at 12.54.12_cf971e54.jpg" alt="Demon Slayer">
                        <h3>BTS</h3>
                        <a href="project_play-2.php" class="watch-button">Watch</a>
                    </div>
                <!-- End -->

                <?php
                    for($i=1;$i<=10;$i++)
                    {
                        ?>
                    <div class="item">
                        <img src="NETFLIX_1.png" alt="Web Series 1">
                        <h3>Web Series <?php echo $i ; ?></h3>
                        <h5>Premium</h5>
                        <a href="watch_webseries1.php" class="watch-button">Watch</a>
                    </div>
                    <?php
                    };
                    ?>
                </div>
            </section>
        </main>
    </div>
</body>
</body>
</html>