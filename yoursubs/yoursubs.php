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
    <title>Subscriptions
    </title>
    <link rel="stylesheet" href="yoursubsstyle.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="navbar"></div>
    <a href="/login/login.php" class="logOut">Log Out!</a>
<h1 class="username">Welcome, <?php echo $username; ?></h1>
    <span class="subs">Your Subscriptions</span>

    <div onClick="subs()" class="spotifybox1">
        <span class="spotify">Spotify</span>
        <img src="spotify.png" class="spotifyimg">
    
    </div>
<div class="allboxes">
    <div class="youtubebox1">
        <span class="ytpremium">YT Premium</span>
        <img src="youtube.png" class="youtubeimg">
    </div>

    <div class="netflixbox1">
        <span class="netflix">Netflix</span>
        <img src="netflix.png" class="netfliximg">
    </div>

    <div onClick="subs()" class="spotifybox2">
        <span class="spotify">Spotify</span>
        <img src="spotify.png" class="spotifyimg">
    
    </div>

    <div class="youtubebox2">
        <span class="ytpremium">YT Premium</span>
        <img src="youtube.png" class="youtubeimg">
    </div>

    <div class="netflixbox2">
        <span class="netflix">Netflix</span>
        <img src="netflix.png" class="netfliximg">
    </div>

    <div onClick="subs()" class="spotifybox3">
        <span class="spotify">Spotify</span>
        <img src="spotify.png" class="spotifyimg">
    
    </div>

    <div class="youtubebox3">
        <span class="ytpremium">YT Premium</span>
        <img src="youtube.png" class="youtubeimg">
    </div>

    <div class="netflixbox3">
        <span class="netflix">Netflix</span>
        <img src="netflix.png" class="netfliximg">
    </div>
    </div>

    <div class="dropdown">
  <div class="circle">
    <span class="plus">+</span>
  </div>
  <div class="dropdown-content">
    <a href="#" class="addsubscription">Add Subscription</a>
  </div>
</div> 


<script>
    function subs() {
        window.location.href = "/subs/index.php";
         }
   </script>


</body>
</html>

