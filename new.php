<?php
  date_default_timezone_set('Asia/Shanghai');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>大连化物所研究生部</title>
  <meta name="author" content="Kejie Shao">
  <meta charset="utf-8">
  <link rel="stylesheet" href="yjsb2016/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="yjsb2016/css/basic.css" rel="stylesheet" type="text/css" />
  <link href="yjsb2016/css/carousel.css" rel="stylesheet" type="text/css" />
  <link href="yjsb2016/css/slider.css" rel="stylesheet" type="text/css" />
  <script src="yjsb2016/jquery/1.12.4/jquery.min.js"></script>
  <script src="yjsb2016/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="yjsb2016/js/vticker.js"></script>
  <script src="yjsb2016/js/dropdown.min.js" type="text/javascript"></script>
  <script src="yjsb2016/js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
  <script src="yjsb2016/js/init.js" type="text/javascript"></script>
</head>

<body>
<?php include_once('yjsb2016/jumbotron.php'); ?>
<?php include_once('yjsb2016/nav.php'); ?>
<?php include_once('yjsb2016/slider.php'); ?>
<?php include_once('yjsb2016/news.php'); ?>
<?php include_once('yjsb2016/infos.php'); ?>
<?php include_once('yjsb2016/students.php'); ?>
<?php include_once('yjsb2016/carousel.php'); ?>
<?php include_once('yjsb2016/links.php'); ?>
<?php include_once('yjsb2016/footer.php'); ?>

<script>
$(document).ready(function(){$('#menubar > li').make_dropdown();});
</script>
<script>
$(function () {
  $('[data-toggle="popover"]').popover({html:true})
})
</script>
</body>
</html>
