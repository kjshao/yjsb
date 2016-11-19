<?php
  date_default_timezone_set('Asia/Shanghai');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>大连化物所研究生部主页</title>
  <meta name="author" content="Kejie Shao">
  <meta charset="utf-8">
  <link rel="stylesheet" href="../bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/drop.css" rel="stylesheet" type="text/css" />
  <script src="../jquery/1.12.4/jquery.min.js"></script>
  <script src="../bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/vticker.js"></script>
  <script src="js/drop.js"></script>
  <script type="text/javascript" src="js/jquery.nbspSlider.1.1.min.js"></script>
  <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
  <script src="js/init.js" type="text/javascript"></script>
  <link href="css/carousel.css" rel="stylesheet" type="text/css" />
  <link href="css/sliderx.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="http://cdn.webfont.youziku.com/wwwroot/js/wf/youziku.api.min.js"></script>
</head>

<body>
<?php include_once('jumbotron.php'); ?>
<?php include_once('nav.php'); ?>
<?php include_once('sliderx.php'); ?>
<?php include_once('news.php'); ?>
<?php include_once('tab1.php'); ?>
<?php include_once('students.php'); ?>
<?php include_once('carousel.php'); ?>
<?php include_once('links.php'); ?>
<?php include_once('footer.php'); ?>

<script type="text/javascript">
    $youziku.load("body", "6e9b15eff889471cb2cdec5c72ef714d", "PingFangSC");
    /*$youziku.load("body", "655dd6987e2f421f80043c4f9cb47909", "SansGBW3");*/
    /*$youziku.load("body", "aec90f1fbe4d4f7c8959e7884e9a80d9", "HiraginoGBW3");*/
    /*$youziku.load("body", "3f1fa64ff7e7429b87cf9c639bd039f6", "Source-Han-Normal");*/
    /*$youziku.load("body", "7700df140c47403abc7a77063f204a0c", "Source-Han-Light");*/
    /*$youziku.load("#id1,.class1,h1", "7700df140c47403abc7a77063f204a0c", "Source-Han-Light");*/
    /*．．．*/
    $youziku.draw();
</script>
</body>
</html>
