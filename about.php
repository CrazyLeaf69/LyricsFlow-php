<?php
  include_once 'header.php';
?>

<div class="container">

        <div id="aboutText">
          <h1>Welcome to LyricsFlow!</h1>
          <h3>A website made to find and listen to lyrics that you may have heard but you are courius what they are actually saying </h3>
        </div>

        <h1 class="ContactBorder">Contact Form</h1>

        <form id="fcf-form-id" class="fcf-form-class">

            <div class="fcf-form-group">
                <label for="Name" class="fcf-label">Your name</label>
                <div class="fcf-input-group">
                    <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                </div>
            </div>
    
            <div class="fcf-form-group">
                <label for="Email" class="fcf-label">Your email address</label>
                <div class="fcf-input-group">
                    <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                </div>
            </div>
    
            <div class="fcf-form-group">
                <label for="Message" class="fcf-label">Your message</label>
                <div class="fcf-input-group">
                    <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                </div>
            </div>
    
            <div class="fcf-form-group">
                <button id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
            </div>
    
        </form>
    </div>

    <?php
      include_once 'footer.php';
    ?>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- egen javascript -->
    <script src="javascript/about.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>