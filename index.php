<?php
include "top-cache.php";

?>
<?php
$files = "";
$dir = "high-res";
// $files1 = scandir($dir);
// var_dump($files1);


function scan_dir($dir) {
    $ignored = array('.', '..', '.svn', '.htaccess');

    $files = array();
    foreach (scandir($dir) as $file) {
        if (in_array($file, $ignored)) continue;
        $files[$file] = filemtime($dir . '/' . $file);
    }

    arsort($files);
    $files = array_keys($files);

    return ($files) ? $files : false;
    var_dump($files);

}
// var_dump($files);
$files = scan_dir($dir);







?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Pablo Walloschke - Gallery</title>
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.3/picturefill.min.js"></script>
  <script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>
  <script src="picturefill.js" async></script>


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
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@600&display=swap" rel="stylesheet">
      <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
      <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet" />
      <script src="//cdnjs.cloudflare.com/ajax/libs/detect_swipe/2.1.1/jquery.detect_swipe.min.js"></script>

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
body  .row {
    margin-left: 0!important;
    margin-right: 0!important;


}
body {
  font-family: 'Jost', sans-serif;
}
  /* ellipse(100% 80% at 37% 19%) */
  /* .square {
    width: 100%;
    padding-bottom: 100%;
    background-size: cover;
    background-position: center;
} */

img {
    max-width: 100%;
    height: auto;
}
.mfp-content {
    width:500px;
    height:400px;
 }
 .featherlight .featherlight-content .caption {
    font-size: 90%;
    color: #868e96;
    display: block;
    position: absolute;
    bottom: 0;
    background-color: rgba(255, 255, 255, .9);
    padding: 0 1rem;
}

.cosas {
  /* position the div in center */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin-top: 50vh;
  /* filter:blur(5px)!important; */
  opacity: 0%;


  animation: unblur 1s forwards;
}

.cosas {
     font-weight: strong;
     font-size: 28px;
 -webkit-animation-delay: 0.7s;
  -moz-animation-delay: 0.7s;
  animation-delay: 0.7s;
}

@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.cosas {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}
@keyframes unblur {
  from {
    opacity: 0%;
  }
  to {
    /* color:black; */
    opacity: 100%!important;
  }
  }
.container-class {
  /* filter:blur(1.1px); */

}
  </style>
<script>

  $(document).ready(function() {
    $(".gallery").featherlightGallery({
      gallery: {
        fadeIn: 300,
        fadeOut: 300
      },
      openSpeed: 300,
      closeSpeed: 300
    });
  });

  $.featherlightGallery.prototype.afterContent = function() {
          /*var caption = this.$currentTarget.data('caption');*/
      var caption = this.$currentTarget.parent().find($('.figure-caption')).html();
      this.$instance.find(".caption").remove();
      $('<span class="caption">').text(caption).appendTo(this.$instance.find('.featherlight-content'));
  };

</script>
<section>



<picture>
  <!-- <source srcset="high-res/Alba.jpg" media -->

</picture>
    <div class="container-class" style="height:100vh">
      <div class="row">
        <div class="col">
          <div class="cosas">
            <img src="/img/firma.png" style="height:200px"></img><br>
          <a href="#portfolio">GALERIA</a><br>
          <a href="https://www.instagram.com/pwallos/">CONTACTO</a>
        </div>
      </div>
    </div>
  </div>
    <hr>

        </div>
        <div class="col" style="width:25vw;">
          <div>
      </div>

</section>
      <section class="portfolio-section">


<!--
<script>
$(document).ready(function() {
$('body').css("height",$( window ).height());
$('body').css("overflow","hidden");
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

</script> -->


<div class="col" id="portfolio">
  <div class="row">

<?php


foreach ($files as $row) {
  ?>
  <!-- <a href="high-res/<?php echo $row ?>" title="<?php echo $row ?>"><img src="high-res/<?php echo $row ?>" id="img-fluid" style="max-height:100vh;"></a> -->
  <figure class="figure col-md-3">
    <a class="thumbnail gallery" href="high-res/<?php echo $row;?>"><img src="high-res/<?php echo $row;?>" class="figure-img img-fluid animated fadeIn" data-caption="Giganotosaurus Carolinii says good morning breakfast" /></a>
    <figcaption class="figure-caption"><?php echo pathinfo($row, PATHINFO_FILENAME); ?></figcaption>
  </figure>

<?php
}
?>

</div>
</div>


</div>
</section>

<!-- portfolio section end -->

            </div>
          </div>
          <script src="//code.jquery.com/jquery-latest.js"></script>
          	<script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
          	<script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
        </body>
  </html>
  <?php include "bottom-cache.php" ?>
