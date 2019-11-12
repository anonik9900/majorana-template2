
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MAJORANA-MARCONI SITO UFFICIALE</title>
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <?php
include('script/nav_css.php');
?>
  <?php
  include('script/footer_css.php');
   ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <meta name="author" content="Nicholas Impieri Aka Anonik">
    <meta name="description" content="Safari Template Builded with HTML5, CSS3 and Webkit">
    <meta name="keywords" content="Safari, template, html5 template, css3, css3 template, apple, mac os, internet">
    <meta name="application-name" content="Safari Template By Anonik">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"/>
    <script type="text/javascript">
    /*
    jQuery Scroll to ID
    */
    function scroll_to(id) {
    $('html,body').animate({
    scrollTop: $('#'+id).offset().top
    },'slow');
    }
    </script>
</head>



<body>

  <?php
  include('script/navbar.php');
?>

<div id="home">
  <div id="home-content">
<h1 class="titolo">Istituto Tecnico Professionale Majorana - Marconi"</p>
  <div align="center">
    <img class="media-reactive" src="galleria/logo1.jpg">
  </div>


<div id ="news-feed">

 <h3 class="feed">News Feed</h3>

 <script language="JavaScript" src="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fnewsmajorana.altervista.org%2Ffeed%2F&chan=y&utf=y"  charset="UTF-8" type="text/javascript"></script>

<noscript>
<a href="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fnewsmajorana.altervista.org%2Ffeed%2F&chan=y&utf=y&html=y">View RSS feed</a>
</noscript>
</div>
</div>
</div>



<?php
include('script/footer.php');
?>





</body>
</html>
