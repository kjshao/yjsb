<?php
  date_default_timezone_set('Asia/Shanghai');
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>大连化物所研究生部主页</title>
  <meta name="author" content="Kejie Shao">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/slider.css" rel="stylesheet" type="text/css" />
  <link href="css/drop.css" rel="stylesheet" type="text/css" />
  <script src="../jquery/1.12.4/jquery.min.js"></script>
  <script src="../bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/vticker.js"></script>
  <script src="js/drop.js"></script>
  <script type="text/javascript" src="js/jquery.nbspSlider.1.1.min.js"></script>
  <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
  <script src="js/carousel_init.js" type="text/javascript"></script>
  <link href="css/carousel.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include_once('jumbotron.php'); ?>
<?php include_once('nav.php'); ?>
<?php include_once('slider.php'); ?>
<?php include_once('news.php'); ?>
<?php include_once('tab1.php'); ?>
<?php include_once('students.php'); ?>
<?php include_once('carousel.php'); ?>
<?php include_once('links.php'); ?>
<?php include_once('footer.php'); ?>

<script>
$(function() {
  $('#example').vTicker('init', {speed: 1000, 
    pause: 1000,
    height: 280,
    showItems: 10,
    padding: 4});
});
</script>
<script type="text/javascript">
$(document).ready(
/*控制首页幻灯片样式*/
function(){$(".sub-slider").nbspSlider({
  widths:         "980px",        // 幻灯片宽度
  heights:        "300px",        // 幻灯片高度
  autoplay:       1,              // 是否自动播放幻灯片(1为是0为否)
  delays:         5000,           // 自动播放--间隔(毫秒)
  prevId:         'prevBtn',      // 上一张幻灯片按钮ID
  nextId:         'nextBtn',      // 下一张幻灯片按钮ID
  effect:         'horizontal',   // horizontal、vertical、fade、none == 特效：横向、竖向、淡出、无特效
  speeds:         500,            // 幻灯片切换的速度(毫秒)
  starEndNoEff:     0,            // 开始与结束中间无动画效果(1为是0为否)
  preNexBtnShow:    1,            // 是否显示上一张下一张按钮
  numBtnSty:        "num",        // num、square、circle、roundness、rectangle == 数字、正方形、圆圈、圆形、长方形
  numBtnShow:       "1"
});
$(".sub-slider").hover(function(){$(".sliderBtn").show();},function(){$(".sliderBtn").hide();});
});
</script>
</body>
</html>
