<?php
  date_default_timezone_set('Asia/Shanghai');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>大连化物所研究生部</title>
  <meta name="author" content="Kejie Shao">
  <meta charset="utf-8">
  <link rel="stylesheet" href="../bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/basic.css" rel="stylesheet" type="text/css" />
  <link href="css/carousel.css" rel="stylesheet" type="text/css" />
  <link href="css/slider.css" rel="stylesheet" type="text/css" />
  <script src="../jquery/1.12.4/jquery.min.js"></script>
  <script src="../bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/vticker.js"></script>
  <script src="js/make_dropdown.min.js" type="text/javascript"></script>
  <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
  <script src="js/init.js" type="text/javascript"></script>
</head>

<body>
<?php include_once('jumbotron.php'); ?>
<?php include_once('navx.php'); ?>
<?php include_once('slider.php'); ?>
<?php include_once('news.php'); ?>
<?php include_once('infos.php'); ?>
<?php include_once('students.php'); ?>
<?php include_once('carousel.php'); ?>
<?php include_once('links.php'); ?>
<?php include_once('footer.php'); ?>

<script>
$(document).ready(function(){$('#menubar > li').make_dropdown();});
</script>
</body>
</html>
