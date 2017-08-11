<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<html>

<head>

    <meta charset="utf-8">
    <title>Menu V2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="css/vendor/bootstrap/bootstrap.css">

    <!-- Glyphicons -->
    <link rel="stylesheet" href="css/vendor/glyphicons/glyphicons.css">
    <link rel="stylesheet" href="css/vendor/glyphicons/filetypes.css">
    <link rel="stylesheet" href="css/vendor/glyphicons/social.css">

    <!-- Grove Styles (switch for different color schemes, e.g. "styles-cleanblue.css") -->
    <!-- link rel="stylesheet" href="css/styles-blue.css" id="grove-styles"> -->

    <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie8.css">
        <script src="js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/styles-custom.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery/jquery-1.9.1.min.js"><\/script>')
    </script>
    <!-- jQuery with jQuery Easing, and jQuery Transit JS -->
    <script src="js/vendor/modernizr/modernizrAll.js"></script>
</head>

<body>
  <a href="#" id="showGallery"><</a>
  <div id="gallery">

  <div class="scrollbox">
  <img src="img/slides/Glass-Lion.jpg"/>
  <img src="img/slides/cityscape8finalpsd.jpg"/>
  <img src="img/slides/mayan2.jpg"/>
  <img src="img/slides/observer.jpg"/>
  <img src="img/slides/ted.jpg"/>
  <img src="img/slides/time4.jpg"/>
  <img src="img/slides/ufo.jpg"/>
  </div>

  </div>
    <div class="container-fluid perspective effect-laydown">

        <div id="container2">

            <a href="#" id="showMenu" class="em-height glyphicons show_lines"></a>


            <div class="wrapper">

                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-sm-6">
                            <!-- <?php
                        $menu = simplexml_load_file("menu.xml");
                        if ($menu == false){
                            echo "simplexml Load File didn't work";
                        }
                            foreach ($menu->xpath("/menu/category") as $category) {
                                print "<p>";
                                print $category["title"];
                                print "</p>";
                                    foreach (($category->item) as $item){
                                    print "<p>";
                                    print $item["type"];
                                    print "</p>";
                                }


                        }

                        ?> -->


                        </div>

                    </div>




            </div>
        </div>
        <nav class="outer-nav top horizontal">
            <a href="#">Home</a>
            <a href="#">News</a>
            <a href="#">Images</a>
            <a href="#">Uploads</a>
            <a href="#">Favorites</a>

        </nav>



    </div>

<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js">
</script>
<script type="text/javascript" src="slick/slick.min.js">
</script>
<script type="text/javascript" src="js/hammer.js"></script>
<script type="text/javascript" src="js/features.js">
</script>
</body>





</html>
