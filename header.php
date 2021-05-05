<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>LyricsFlow</title>
    <meta charset="utf-8">
    <meta name="description" content="search for lyrics">
    <meta name="keywords" content="LyricsFlow, Lyrics">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="css/style.css" />

    <script src="https://kit.fontawesome.com/70fb894d64.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="index.php" class="link navbar-brand">Home</a>
            <a href="popular.php" class="link navbar-brand">Popular</a>
            <a href="about.php" class="link navbar-brand">About</a>
          </div>
          <div class="nav navbar-default">
            <?php
              if (isset($_SESSION["useruid"])) {
                echo "<a href='profile.php' class='link navbar-brand'>Profile</a>";
                echo "<a href='includes/logout.inc.php' class='link navbar-brand'>Log out</a>"; 
              }
              else {
                echo "<a href='signup.php' class='link navbar-brand'>Sign up</a>";
                echo "<a href='login.php' class='link navbar-brand'>Log in</a>";
              }

            ?>
          </div>
        </div>
      </nav>
    </header>