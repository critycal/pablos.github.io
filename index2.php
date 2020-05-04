
<?php
$imgs = "high-res";
$files1 = scandir($imgs);

print_r($files1);
//
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


foreach ($files1 as $row) {
  ?>
  <a href="high-res/<?php echo $row ?>" title="<?php echo $row ?>"><img src="high-res/<?php echo $row ?>" id="img-fluid"></a>
<?php
}






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
  <!-- Page Content -->
  <!-- <div class="container">
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">

        <div style="height: 700px"></div>

      </div>
    </div> -->
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
        <div class="col" style="width:25vw;">
          <div>
      </div>

</section>
      <section class="portfolio-section">
        <!-- <div class="popup-gallery">
        <a href="high-res/Alba.jpg" class="portfolio-item set-bg" data-setbg="high-res/Alba.jpg"></a>
      </div> -->

<!-- Deprecated image gallery viewer -->



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

        $array1 = array();
        $array2 = array();
        $array3 = array();


        $sql = "SELECT * from images_hd order by id desc";

        $prepare = $conn->prepare($sql);
        $preapr2 = $conn->query($sql);
        $prepare->execute();
        $array1 = $prepare->fetchAll(\PDO::FETCH_ASSOC);

        // print_r($array1);

        $sql2 = "SELECT ID as ID2 from images_hd WHERE ID_KEY %3 = 0 ORDER BY ID_KEY DESC;";
        $prepare = $conn->prepare($sql2);
        $prepare->execute();
        $array2 = $prepare->fetchAll(\PDO::FETCH_ASSOC);
        // print_r($array2);


        $sql3 = "SELECT ID AS ID3 from images_hd WHERE ID_KEY %3 = 2 ORDER BY ID_KEY DESC;";
        $prepare = $conn->prepare($sql3);
        $prepare->execute();
        $array3 = $prepare->fetchAll(\PDO::FETCH_ASSOC);
        // print_r($array3);

// $array = array_merge($array1, $array2, $array3);
// $c = array_map(function ($array1, $array2) { return "$array1','$array2"; }, $array1, $array2);

// var_dump($c);
?>
<div class="col">
  <div class="popup-gallery">

<?php

foreach( $preapr2 as $row ) // using foreach  to display each element of array
            {
              ?>

                  <a href="high-res/<?php echo $row['ID']?>" title="<?php echo $row['Name']; ?>"><img src="high-res/<?php echo $row['ID']?>" id="img-fluid"></a>
              <?php
          }




?>
</div>
</div>

      <!-- <div class="col" style="width:33vw;"> -->
<!--
<?php




?>

  </div>
  <div class="col" style="width:33vw;">

<?php

foreach( $prepare3 as $row ) // using foreach  to display each element of array
        {
          ?>

              <div class="popup-gallery">
              <a href="high-res/<?php echo $row['ID']?>" title="<?php echo $row['Name']; ?>"><img src="high-res/<?php echo $row['ID']?>" class="img-fluid"></a>
            </div>

          <?php
      }




?>

</div> -->

</div>
</section>
<a id="portfolio">

</a>
<!-- portfolio section end -->

            </div>
          </div>
          </body>
        </html>
