<?php 

    if (isset($_POST['submit'])) {
        $from = $_POST['email']; 
        $to = "webuildgames@gmail.com"; 
        $subject = "Email Signup"; 
        $body = "Please sign me up to the mailing list."
            
            if(!$_POST['email']) {
                $emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email address</div>'; 
            }
        
            if(!$emailError) {
                if (mail ($to, $subject, $body, $from)) {
                    $result = '<div class="text-success"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Thank you we\'ll keep you updated</div>'; 
                } else {
                    $result = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Sorry there has been an error, please try again.</div>'; 
                }
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css"> 
    <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
      
  </head>
  <body>
    <section id="logo">
      
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-xs-center" >
                    <img src="img/webuildgameslogo.png" class="img-fluid"/>
                </div>
            </div>
        </div>
    </section>
      
      <section id="intro">
          <div class="container">
          <div class="row">
              <div class="col-md-12">
              <p>Learn Unity's Audio Mixer Like A Boss! New tutorial in...</p>
              </div>
              </div>
          </div>
      </section>
      
    <section id="counter">
          <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="countdown">
                  
                  </div>
                  
              </div>
              </div>
          </div>
    </section>
      
    <section id="icons">
          <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <ul class="list-inline">
                      
                      <a href="https://www.youtube.com/webuildgames" target="blank"><li class="list-inline-item"><i class="fa fa-youtube fa-3x youtube" aria-hidden="true"></i></li></a>
                      <!-- <a href="https://www.webuildgames.com" target="blank"><li class="list-inline-item"><i class="fa fa-video-camera fa-3x webuildgames" aria-hidden="true"></i></li></a> -->
                      <a href="https://www.twitter.com/joemarshall" target="blank"><li class="list-inline-item"><i class="fa fa-twitter fa-3x twitter" aria-hidden="true"></i></li></a>
                      <!--<a href="https://store.steampowered.com" target="blank"><li class="list-inline-item"><i class="fa fa-steam fa-3x steam" aria-hidden="true"></i></li></a> -->
                      <a href="https://www.instagram.com/webuildgames" target="blank"><li class="list-inline-item"><i class="fa fa-instagram fa-3x instagram" aria-hidden="true"></i></li></a>
                      <a href="https://itunes.apple.com/us/podcast/we-build-games-designer-game/id1090538928?mt=2&ls=1" target="blank"><li class="list-inline-item"><i class="fa fa-podcast fa-3x podcast" aria-hidden="true"></i></li></a>
                      <a href="https://www.pinterest.com/webuildgames/" target="blank"><li class="list-inline-item"><i class="fa fa-pinterest-p fa-3x pinterest" aria-hidden="true"></i></li></a>
                      
                  </ul>
              </div>
              </div>
          </div>
    </section>
      
          <section id="signup">
          <div class="container">
          <div class="row">
              <div class="col-md-12">
                <form class="form-inline" role="form" method="post" action="#signup">
                  <input type="email" class="form-control form-control-sm" name="email" placeholder="enter your email"> 
                    <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Notify Me!</button>
                  </form>
                  <?php echo $emailError; ?>
                  <?php echo $result; ?>
              </div>
              </div>
          </div>
    </section>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
      
      
    <script>
        $(function() {
            $('.countdown').countdown({
                date: "June 7, 2017 15:03:26"
                });
        });

      </script>
  </body>
</html>