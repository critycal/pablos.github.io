
<?php
$imgs = "high-res";
$files1 = scandir($imgs);

//
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);






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

#img-fluid {
  object-fit: cover;
  max-width: 32vw;
  max-height: 32vw;

  overflow: hidden;
  width: 32vw;
  height: 32vw;
}
  /* ellipse(100% 80% at 37% 19%) */
  /* .square {
    width: 100%;
    padding-bottom: 100%;
    background-size: cover;
    background-position: center;
} */

  </style>

<section>

  </div>
  </div>
    <div class="container-class" style="height:100vh">
      <div class="row">
        <div class="col" style="width:25vw;">

        </div>
        <div class="col" style="width:50vw;">
          <!-- <span style="display:flex; height:300px";>
          </span> -->
          <img src="img/firma.png" style="height:200px"></img><br>
          <a href="#portfolio">GALERIA</a><br>
          <a href="https://www.instagram.com/pwalloschke/">CONTACTO</a>
          <span style="display:flex; height:400px";>
          </span>
        </div>


        </div>
        <div class="col" style="width:25vw;">
          <div>
      </div>

</section>
      <section class="portfolio-section">



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

<div class="container-flex inline-flex">
  <div class="row">
    <div class="col" style="width:33vw;">
      <?php
      foreach ($files1 as $row) {
        ?>
        <a href="high-res/<?php echo $row ?>" title="<?php echo $row ?>"><img src="high-res/<?php echo $row ?>" id="img-fluid"></a>
      <?php
      }
      ?>
<div class="col">
  <div class="popup-gallery">

<?php





?>
</div>
</div>


</div>
</section>
<a id="portfolio">

</a>
<!-- portfolio section end -->

            </div>
          </div>
          </body>
        </html>
