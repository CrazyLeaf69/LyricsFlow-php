<?php
  include_once 'header.php';
?>

<div class="jumbotron jumbotron-fluid">
        <img src="images/logo 1.png" alt="LyricsFlow Logo" class="logo">
      </div>
    </header>

    <!-- <h3>Have you ever heard a song and thought to yourself, what are they actually singing? LyricsFlow is a site where you can lock up a lyrics by searching for it or its artist or even a line in the lyrics</h3> -->
    <div class="container">

      <h3 class="headtext">Search for a song, artist or a line in the lyrics</h3>
      <div class="col-12 col-sm-9 col-lg-9" id="inputssss">
        <input id="input" class="input-lg" type="text" placeholder="Search for a lyrics...">
        <button id="searchButton" type="button"><i class="fas fa-search fa-lg"></i></button>
      </div>
      <br><br>
      <div id="ResultList"></div>
    </div>

    <?php
      include_once 'footer.php';
    ?>
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- egen javascript -->
    <script src="javascript/index.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>