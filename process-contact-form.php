<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>OSU Cascades</title>

      <!-- Bootstrap -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="Stylesheets\style.css" rel="stylesheet">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
      <?php
        $contactName = $_GET["name"];
        $contactEmail = $_GET["email"];
        $contactMessage = $_GET["message"];
        $contactSignUp = $_GET["isSignedUpForNewsletter"];

        if ($contactName && $contactEmail){ // assuming name & email required TODO: Client Side Validation
          // The message
          $message = "Name: ". $contactName. "\n". "Email: ". $contactEmail. "\n". "Newsletter Sign Up: ". $contactSignUp. "\n". "Message: ". $contactMessage ;

          // Send
          mail('duquetteadam@gmail.com', 'CS Club Contact', $message);
        }
      ?>
      <body>
          <div class="wrapper">
              <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="index.html"><img src="Images\logo-1.png"></a>
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                          <ul class="nav navbar-nav">
                            <li><a href="events.html">Events</a></li>
                            <li><a href="freeStuff.html">Free Stuff!</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                              <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span>     Login</a></li>
                          </ul>
                      </div>
                  </div>
              </nav>

            <div class="jumbotron">
                  <br><br><br><br><br><br>
            </div>


            <div class="container">
                <div class="col-md-8">
                  <h2>Thank you for your interest!</h2>
                  <h4>We will send you an email as soon as we can.</h4>
               </div>
           </div>

            <footer class="container-fluid text-left">
              <h4 style="text-align:left;">Contact Info</h4>
              <p><a href="http://osucascades.edu/">OSU-Cascades</a><br>
                  2600 NW College Way<br>
                  Bend, Oregon 97703<br>
                  541-322-3100<br></p>
            </footer>
          </div>
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
          <script src="bootstrap/js/bootstrap.min.js"></script>
          <script src="javascripts/app.js"></script>
    </body>
</html>
