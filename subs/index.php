<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: /login.php");
  exit();
}
$username = $_SESSION['username'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.ico" type="image/icon">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">   
    <title>SpotifySub</title>
</head>
<body>
    <div class="navbar"></div>
    <span class="username"><?php echo $username; ?></span>
    

    <div class="subscript-spot">
        <img src="" alt="">
        <span class="title">Spotify</span>
    </div>

        <p class="first-line">
            * Ad-free music listening
        </p>
        
        <p class="second-line">
            * Offline listening
        </p>

        <p class="third-line">
            * On-demand playback

        </p> 
    <div class="img">
        <img class="billede" src="img/spotfy.jpg" alt="">
    </div>


    <div class="container">
        <a href="https://www.spotify.com/dk-da/premium/" target="_blank" class="btn">Website</a>
    </div>    

</body>
</html>