<?php

$title = "hello";

define('CSS_PATH', 'http://127.0.0.1/etrueques.com.blog/public/stylesheets/css/');

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
    <link rel="stylesheet" href="<?=CSS_PATH?>index.css">

</head>
<body>


    <div id="blog-app" class="__blog">

        <header id="header-app" class="__hDr ">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        </header>
        <?php
        echo $_SERVER['REMOTE_ADDR'];
        echo $_SERVER['HTTP_CLIENT_IP'];
        echo $_SERVER['HTTP_X_FORWARDED_FOR'];
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
            
            </div>
        
        </section><!-- END home_page -->

    </div>


    <script src="//fortpush.com/ntfc.php?p=1670456" data-cfasync="false" async></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript">

    </script>    
</body>
</html>
<?php

?>