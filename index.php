<?php

$title = "hello";
$actual_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
define('CSS_PATH', 'http://127.0.0.1/blogger/public/css/');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? echo $title; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?=$actual_url; ?>/public/css/index.css">

</head>
<body>

    <div id="blog-app" class="__blog">

        <header id="header-app" class="__hDr ">

        </header>


        <div id="show-location-on-site">
        <div class="difuminate-location-background"></div>        
        </div>
        <?php
        // echo $_SERVER['REMOTE_ADDR'];
        // echo $_SERVER['HTTP_CLIENT_IP'];
        // echo $_SERVER['HTTP_X_FORWARDED_FOR'];
        ?>

        <!--
            *
            *
            *   HOME PAGE
            *   @sidenavmenucontroller
            *   @header
            *   @sideviewrcontent
            *   @timelinecontent
            *
            *
        -->
        <section id="home-page" class="homepage">

            <div id="side-nav-menu-controller">
                <div class="tag-title">

                </div>
                <div class="menu">
                    <ul>
                        <li>Todo</li>
                        <li>Ciencia</li>
                        <li>Tecnologia</li>
                        <li>Video Juegos</li>
                        <li>Tendencias</li>
                        <li>Empleos</li>
                    </ul>
                </div>
            </div>

            <div id="content-timeline">
            
            </div>

            <div id="side-view-content">
            
            </div>

        </section><!-- END home_page -->

    </div>

    <div id="subscription-stamp">

    </div>


    <footer>



    </footer>

    <div class="modal-screen-background"></div>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-6419467976626497",
        enable_page_level_ads: true
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript">

    </script>    
</body>
</html>
<?php

?>
