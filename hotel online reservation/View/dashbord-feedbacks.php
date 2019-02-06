<?php

?>
<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>Agaza | Admin-Feedbacks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <!-- Header - Start  -->
    <header id="header">
      <div class="menu-button">
        <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        </div>
      </div>
      <div id="top-bar">
        <h3>Agaza Admin Dashboard</h3>
      </div>
    </header>
    <!-- Header - End  -->

    <!-- Navigation - Start  -->
    <nav id="sidemenu">
      <div class="main-menu">
        <ul class='main-menu'>
        <li>
          <a href="dashbord-rooms.html">
          <span class='glyphicon glyphicon-home'></span> Rooms
          </a>
        </li>
        <li class="link-active">
          <a href="dashbord-feedbacks.html">
          <span class='glyphicon glyphicon-comment'></span> Feedbacks
          </a>
        </li>
        </ul>
      </div>
      <p class="copyright">Agaza - &copy; 2018</p>
    </nav>
    <!-- Navigation - End  -->

    <!-- Content - Start  -->
    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="text-center" style="margin: 50px;"><h1>Viwe all feedbacks data</h1></div>
        <section class="feedbacks">
          <div class="container">
            <div class="feedbacks-data">
              <table class="feedbacks-table">
                  <tr>
                    <th>Feedback ID</th>
                    <th>Feedback Owner</th>
                    <th>Feedback Subject</th>
                    <th>Feedback Text</th>
                  </tr>
                  <?php




                  ?>
                </table>
            </div>
          </div>
        </section>
      </div>
    </div>
    


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script  src="js/main.js"></script>
  </body>

</html>
