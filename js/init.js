jssor_1_slider_init = function() {

    var jssor_1_options = {
      $AutoPlay: true,
      $AutoPlaySteps: 3,
      $SlideDuration: 160,
      $FillMode: 4,
      $SlideWidth: 200,
      $SlideSpacing: 6,
      $Cols: 5,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $Steps: 3
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
};

jssor_2_slider_init = function() {

    var jssor_2_options = {
      $AutoPlay: true,
      $SlideDuration: 500,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $ChanceToShow: 1
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };

    var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
};

$(function() {
  $('.vtick1').vTicker('init', {speed: 1000, 
    pause: 1000,
    height: 280,
    showItems: 10,
    padding: 4});
});

$(function() {
  $('.vtick2').vTicker('init', {speed: 1000, 
    pause: 1000,
    height: 140,
    showItems: 10,
    padding: 4});
});

//$(document).ready(
///*控制首页幻灯片样式*/
//function(){$(".sub-slider").nbspSlider({
//  widths:         "980px",        // 幻灯片宽度
//  heights:        "300px",        // 幻灯片高度
//  autoplay:       1,              // 是否自动播放幻灯片(1为是0为否)
//  delays:         5000,           // 自动播放--间隔(毫秒)
//  prevId:         'prevBtn',      // 上一张幻灯片按钮ID
//  nextId:         'nextBtn',      // 下一张幻灯片按钮ID
//  effect:         'horizontal',   // horizontal、vertical、fade、none == 特效：横向、竖向、淡出、无特效
//  speeds:         500,            // 幻灯片切换的速度(毫秒)
//  starEndNoEff:     0,            // 开始与结束中间无动画效果(1为是0为否)
//  preNexBtnShow:    1,            // 是否显示上一张下一张按钮
//  numBtnSty:        "num",        // num、square、circle、roundness、rectangle == 数字、正方形、圆圈、圆形、长方形
//  numBtnShow:       "1"
//});
//$(".sub-slider").hover(function(){$(".sliderBtn").show();},function(){$(".sliderBtn").hide();});
//});
