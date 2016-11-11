<?php session_start();
   if(empty($_SESSION['uname'])){
          echo "Session Expired";
          echo "Redirecting.....";
          header('Refresh:0;url=../index.html');
    }  
?>
<!DOCTYPE html>
<html lang="en-US">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <title>CIRMS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="HTML5 Template">

  <!-- THEME CSS STYLE -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/base.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

  <!-- OTHER CSS STYLE -->
  <link rel="stylesheet" type="text/css" href="css/royal_preloader.css">
  <link rel="stylesheet" type="text/css" href="css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/mb-comingsoon.css">
  <link rel="stylesheet" type="text/css" href="fontastic.css">

  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

  <!-- APPLE TOUCH ICON -->
  <link rel="apple-touch-icon" href="images/webclip.png">

</head>

<body class="royal_preloader animsition">

  <!-- ROYAL PRELOADER -->
  <div id="royal_preloader"></div>

  <!-- TOP BORDER -->
  <div class="top-border">
    <div class="w-row">
      <div class="w-col w-col-6 w-clearfix">
        <a href="st.php" class="w-inline-block brand-logo animsition-link"><img width="135" src="images/logo.png" alt="logo">
        </a>
      </div>
      <div class="w-col w-col-6">
        <div class="social-wrapper">
          <a href="#" class="w-inline-block social-icon facebook">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="#" class="w-inline-block social-icon twitter">
           <i class="fa fa-twitter"></i>
          </a>
          <a href="#" class="w-inline-block social-icon behance">
           <i class="fa fa-instagram"></i>
          </a>
          <a href="#" class="w-inline-block social-icon instagram">
           <i class="fa fa-behance"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- LEFT BORDER -->
  <div class="left-border">
    <div data-ix="show-overlay-menu-on-click" class="w-embed move-center-hamb">
      <button class="c-hamburger c-hamburger--htla">
        <span>toggle menu</span>
      </button>
    </div>
  </div>

  <!-- RIGHT BORDER -->
  <div class="right-border"></div>

  <!-- BOTTOM BORDER -->
  <div class="bottom-border">
    <div class="w-hidden-medium w-hidden-small w-hidden-tiny title-top-border">
      <div>Corporate &amp; Industry Relations<br><a class="college" href="https://www.amrita.edu/">Amrita Vishwa Vidyapeetham.</a></div>
      </div>
  </div>
  <div data-ix="hide-overlay-menu-on-load" class="overlay-menu">
    <div class="w-container port-contatiner">
      <!-- NAVIGATION -->
      <nav>
        <ul class="w-list-unstyled ul-nav">
          <li data-ix="close-dropdown-on-hover"><a href="st.php" data-ix="show-dropdown-on-hover" class="w-inline-block nav-link animsition-link"><h3 class="biger">Home</h3></a>
          </li>
          <li data-ix="close-dropdown-on-hover"><a href="calender.html" data-ix="show-dropdown-on-hover" class="w-inline-block nav-link animsition-link"><h3 class="biger">Calender</h3></a>
          </li>
          <li data-ix="close-dropdown-on-hover"><a href="allc.html" data-ix="show-dropdown-on-hover" class="w-inline-block nav-link"><h3 class="biger">placments</h3></a>
            <ul data-ix="make-dropdown-height-0" class="w-list-unstyled ul-dropdown">
              <li>
                <a href="ase.html" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of Engineering</div>
                </a>
              </li>
              <li>
                <a href="asas.html" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of Arts &amp; science</div>
                </a>
              </li>
              <li>
                <a href="asbi.html" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of Biotechnology</div>
                </a>
              </li>
              <li>
                <a href="asbu.html" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of Business</div>
                </a>
              </li>
              <li>
                <a href="asay.html" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of ayurveda</div>
                </a>
              </li>
            </ul>
          </li>

          <li data-ix="close-dropdown-on-hover"><a href="../index.html" data-ix="show-dropdown-on-hover" class="w-inline-block nav-link animsition-link"><h3 class="biger">logout</h3></a>
          </li>
        </ul>
      </nav>
      <!-- END NAVIGATION -->
    </div>
  </div>


    <!-- RESPONSIVE NAVIGATION -->
    <div class="w-hidden-main">
      <div class="responsive-menu">
        <div class="w-container">
          <a href="index.html" class="w-inline-block brand-logo more-margin animsition-link"><img width="135" src="images/logo.png" alt="logo">
          </a>
          <div data-ix="open-responsive-menu" class="hamburger">
            <div class="w-embed">
              <button class="c-hamburger c-hamburger--htx">
                <span>toggle menu</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <nav class="responsive-nav">
        <div class="w-container">
          <ul class="w-list-unstyled dd-big-res">
            <li>
              <div class="w-clearfix nav-res-link"><a href="index.html" class="res-txt animsition-link">Home</a>
              </div>
            </li>
            <li>
              <div class="w-clearfix nav-res-link"><a href="calender.html" class="res-txt animsition-link">Calender</a>
              </div>
            </li>
            <li>
              <div data-ix="open-dd-res" class="w-clearfix nav-res-link"><a href="plac.html" class="res-txt">Placements</a>
                <a href="#" class="w-inline-block arrow-ico-res">
                  <i class="fa fa-angle-down"></i>
                </a>
              </div>
              <ul class="w-list-unstyled dd-res">
                <li>
                  <div class="w-clearfix nav-res-link">
                  <a href="ase.html" class="res-txt change-size animsition-link">Amrita School of Engineering</a>
                  </div>
                </li>
                <li>
                  <div class="w-clearfix nav-res-link">
                   <a href="asas.html" class="res-txt change-size animsition-link">Amrita School of Arts &amp; science</a>
                  </div>
                </li>
                <li>
                  <div class="w-clearfix nav-res-link">
                   <a href="asbi.html" class="res-txt change-size animsition-link">Amrita School of Biotechnology</a>
                  </div>
                </li>
                <li>
                  <div class="w-clearfix nav-res-link">
                   <a href="asbu.html" class="res-txt change-size animsition-link">Amrita School of Business</a>
                  </div>
                </li>
                <li>
                  <div class="w-clearfix nav-res-link">
                   <a href="asay.html" class="res-txt change-size animsition-link">Amrita School of ayurveda</a>
                  </div>
                </li>
              </ul>
            </li>
            <li>
              <div class="w-clearfix nav-res-link"><a href="index.html" class="res-txt animsition-link">logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- END RESPONSIVE NAVIGATION -->
        <?php
            $username="root"; 
            $password="asdf";
            $server = "localhost";
            $dbname= "praneeth";
            $con = new mysqli($server,$username,$password,$dbname);
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }
            $id = $_GET['id'];
            $query = "select * from `praneeth`.Details WHERE id = $id;";
            $result = $con->query($query);
            $count = $result->num_rows;
            if( $count > 0 ){
              while($row = $result->fetch_assoc()){
                echo '<section class="w-section section-imp">';
                echo '<div class="w-container">';
                  echo '<div class="w-row">';
                    echo '<div class="w-col w-col-6">';
                      echo '<div class="photo-item-spc"><img  src="display.php?id='.$row["id"].'">';
                    echo '</div>';
                  echo '</div>';
                  echo '<div class="w-col w-col-6">';
                    echo '<h1 class="port-item-title">'.$row["name"].'</h1>';
                      echo '<p>'.$row["category"].'</p>';
                      echo '<h4 class="post-title"><strong>Job Description</strong></h4>';
                        echo '<p><strong>'.$row["description"].'';
                        echo '<br>';
                        echo '<br><strong>'.$row["additional"].'</strong></p>';
                        echo '<h4 class="post-title"><strong>Details</strong></h4>';
                          echo '<ul class="w-list-unstyled">';
                            echo '<li>';
                              echo '<p><strong>Email: '.$row["email"].'</strong></p>';
                            echo '</li>';
                            echo '<li>';
                              echo '<p><strong>Url: '.$row["url"].'</strong></p>';
                            echo '</li>';
                            echo '<li>';
                              echo '<p><strong>Contact: '.$row["contact"].'</strong></p>';
                            echo '</li>';
                            echo '<li>';  
                            echo '<li>';
                              echo '<p><strong>Branches Applicable: '.$row["branches"].'</strong></p>';
                            echo '</li>';
                            echo '<li>';
                              echo '<p><strong>Date of Interview: '.$row["date"].'</strong></p>';
                            echo '</li>';
                            echo ' <li class="w-clearfix small-spc"><a href="cregister/RegisterForm.php?id='.$row["id"].'" target="_blank" class="w-button button">Register</a>';
                            echo '</li>';
              }     
            }
            
        ?>
              </ul>
          </div>
        </div>
      </div>
        
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4">
          <div class="contact-wrapper">
            <div class="data-blog cont-ico">
              <i class="icon-basic-headset"></i>
            </div>
            <div class="cont-sub-txt">Phone</div>
            <p> +91 476 2801280</p>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="contact-wrapper">
            <div class="data-blog cont-ico">
              <i class="icon-basic-geolocalize-05"></i>
            </div>
            <div class="cont-sub-txt">Address</div>
            <p>Amrita Vishwa Vidyapeetham<br>Amritapuri, Clappana P O<br>Kollam - 690525, Kerala, India</p>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="contact-wrapper">
            <div class="data-blog cont-ico">
              <i class="icon-basic-mail-open-text"></i>
            </div>
            <div class="cont-sub-txt">E-mail</div>
            <p><a class="mail" href="mailto:">cir@amrita.edu</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->
   <!-- SCROLL TO TOP -->
   <a href="#0" class="cd-top">Top</a>

  <!-- JQUERY SCRIPTS -->
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Lekton:regular","Yellowtail:regular","Playfair Display:regular,italic,700"]
      }
    });
  </script>
  <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
  <script type="text/javascript" src="js/jquery.animsition.min.js"></script>
  <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
  <script type="text/javascript" src="js/royal_preloader.min.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/tweecoolmi.js"></script>
  <script type="text/javascript" src="js/jquery.mb-comingsoon.min.js"></script>
  <script type="text/javascript" src="js/typed.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

  <!-- THEME CUSTOM -->
  <script type="text/javascript" src="js/scripts.js"></script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72514065-1', 'auto');
  ga('send', 'pageview');
  </script>

</body>
</html>
