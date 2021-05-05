<?php
include_once 'header.php';
?>

<div class="jumbotron jumbotron-fluid">
  <img src="images/logo 1.png" alt="LyricsFlow Logo" class="logo">
</div>
</header>

<div class="container">

  <button onclick="toggle()" class="toggle">Songs/All Genres/Today</button>
  <table id="table">
    <tr>
      <th class="bl bt" id="1">Type</th>
      <th class="bt" id="2">Genre</th>
      <th class="br bt" id="3">Time</th>
    </tr>
    <tr>
      <td class="bl" id="1"><button class="chart_btn">Songs</button></td>
      <td class="" id="2"><button class="chart_btn">All</button></td>
      <td class="br" id="3"><button class="chart_btn">Day</button></td>
    </tr>
    <tr>
      <td class="bl" id="1"><button class="chart_btn">Albums</button></td>
      <td class="" id="2"><button class="chart_btn">Rap</button></td>
      <td class="br" id="3"><button class="chart_btn">Week</button></td>
    </tr>
    <tr>
      <td class="bl" id="1"><button class="chart_btn">Artists</button></td>
      <td class="" id="2"><button class="chart_btn">Pop</button></td>
      <td class="br" id="3"><button class="chart_btn">Month</button></td>
    </tr>
    <tr>
      <td class="bl" id="1"><button class="chart_btn">Lyrics</button></td>
      <td class="" id="2"><button class="chart_btn">R&B</button></td>
      <td class="br" id="3"><button class="chart_btn">All_Time</button></td>
    </tr>
    <tr>
      <td class="bl" id="1"></td>
      <td class="" id="2"><button class="chart_btn">Rock</button></td>
      <td class="br" id="3"></td>
    </tr>
    <tr>
      <td class="bl bb"></td>
      <td class="bb" id="2"><button class="chart_btn">Country</button></td>
      <td class="br bb"></td>
    </tr>
  </table>

  <table class="popularList">
    <tbody class="popularItem">
      <tr>
        <td></td>
      </tr>
    </tbody>
  </table>

</div>

<?php
include_once 'footer.php';
?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- egen javascript -->
<script src="javascript/popular.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<!-- <tbody class="popularItem">
    <tr>
        <a href="lyrics.html/"></a>
        <td class="nm">1</th>
        <td class="thumbnail fonts"><img style="text-align: left;" src="https://images.genius.com/4164dff756ddd455675789bd67fe5f1a.300x300x1.png" alt="song image" width="50px" height="50px"></th>
        <td class="ellipsis fonts" style="width: 26%;"><span class="title">title</span></td>
        <td class="ellipsis fonts" style="width: 26%;"><span class="artist">artist</span></td>
        <td class="ellipsis fonts"><span style="text-align: right;">views</span></td>
    </tr>
</tbody> -->