
<?php

//
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";

try {
$conn = new PDO("mysql:host=$servername;dbname=pablo", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162752197-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162752197-1');
  </script>
    <style="css" src="css/style.css"></style>
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="magnific-popup/jquery.magnific-popup.js"></script>



      <!-- Stylesheets -->
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
      <link rel="stylesheet" href="css/font-awesome.min.css"/>
      <link rel="stylesheet" href="css/magnific-popup.css"/>
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />

  </head>
  <body>
  <style>
  #grid {
      display: inline-block;
      width: 200px;
      height: 200px;
      margin: 5px;
      background-position: center center;
      background-size: cover;
  }


  ellipse(100% 80% at 37% 19%)
  /* .square {
    width: 100%;
    padding-bottom: 100%;
    background-size: cover;
    background-position: center;
} */

  </style>

<section>
  <!-- Page Content -->
  <!-- <div class="container">
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">

        <div style="height: 700px"></div>

      </div>
    </div> -->
  </div>
  </div>
    <div class="container-class" style="height:100%">
      <div class="row">
        <div class="col" display=width: 25%;>

        </div>
        <div class="col">
          <span style="display:flex; height:300px";>
          </span>
          <img src="img/firma.png" style="height:200px"></img><br>
          <a href="#portfolio">GALERIA</a><br>
          <a href="#contacto">CONTACTO</a>
          <span style="display:flex; height:400px";>
          </span>
        </div>

      <!-- <div class="col">
      </div>
      <div class="row">
        <div class="col">

        </div>
      </div>

      <hr>
            <!-- <div class="container-flex bg-primary" background-color:">
              <div class="row"> -->

              <!-- portfolio section start -->

        </div>
        <div class="col">
          <div>
      </div>

</section>
      <section class="portfolio-section">
        <!-- <div class="popup-gallery">
        <a href="high-res/Alba.jpg" class="portfolio-item set-bg" data-setbg="high-res/Alba.jpg"></a>
      </div> -->


<script>
                $(document).ready(function() {
                	$('.popup-gallery').magnificPopup({
                		delegate: 'a',
                		type: 'image',
                		tLoading: 'Loading image #%curr%...',
                		mainClass: 'mfp-img-mobile',
                		gallery: {
                			enabled: true,
                			navigateByImgClick: true,
                			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                		},
                		image: {
                			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                			titleSrc: function(item) {
                				return item.el.attr('title') + '<small>by Pablo Walloschke</small>';
                			}
                		}
                	});
                });

</script>
<div class="d-flex bd-highlight">
  <!-- <div class="popup-gallery">
    	<a href="high-res/Alba.jpg" title="Alba"><img src="high-res/Alba.jpg" width="75" height="75"></a>
  </div> -->
        <?php

                $sql = "SELECT * from `images_hd`";"
                -- COLLATE utf8_general_ci";
                $prepare = $conn->query($sql);

foreach( $prepare as $row ) // using foreach  to display each element of array
            {
              ?>
            <!-- </div>

          <div class="container p-md-0 ">
            <div class="row portfolios-area">
              <div class="mix col-lg-6 col-md-6 web">
                  <div class="pi-inner"></a>
                    <h2>+ See Project</h2>
                  </div>
                </div> -->
<!--
            <div class="container p-md-0 ">

              <div class="popup-gallery">
               <div class="row">
                <div class="col-sm"> -->
                <!-- <div class="d-inline-flex p-2 bd-highlight"> -->
                <div class="p-2 flex-fill bd-highlight">
                  <div class="popup-gallery">
                  <a href="high-res/<?php echo $row['ID']?>" title="<?php echo $row['Name']; ?>"><img src="high-res/<?php echo $row['ID']?>" class="img-fluid"></a>
                </div>
                </div>
              <!-- </div>
            </div> -->



              <?php
}
?>
      </div>
  </div>
</section>
<a id="portfolio">

</a>
<!-- portfolio section end -->
<!--====== Javascripts & Jquery ======-->
<!-- <script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/main.js"></script> -->

            </div>
          </div>
          </body>
        </html>
