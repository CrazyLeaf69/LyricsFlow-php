<?php
  include_once 'header.php';
?>
<head>
  <script src="javascript/YTEmbed.js"></script>
</head>

      <div class="jumbotron jumbotron-fluid">
        <img src="images/logo 1.png" alt="LyricsFlow Logo" class="logo">
      </div>
    </header>
    
    <div class="container">
        <div id="song"></div>
        <div id="target" class="lyrics"></div>
    </div>
    <footer class="text-center text-lg-start fixed-bottom mediaPlayer">
      <div class="content">
        <i class="fas fa-play fa-lg" id="playAndPause"></i>
        <i><span id="time">time</span></i>
        <input type="range" min="0" max="100" step="0.1" value="0" class="slider" id="myRange">
        <i class="totDuration">duration</i>
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<form action='includes/profile.inc.php' method='post' id='plus'>
            <input type='hidden' name='videoId' value='123' id='vidId' />
            <input type='hidden' name='userUid' value='". $_SESSION["useruid"] ."' />
            <button type='submit' name='submit' class='fas fa-plus'></button>
        </form>";
          }
        ?>
      </div> 
    </footer>

    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"></div>

      <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- egen javascript -->

    <script src="javascript/lyrics.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>