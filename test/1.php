<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>test1.slider - Jssor Slider</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">
    
    
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com/fayelulu/test1.slider -->
    <!-- This code works without jquery library. -->
    <script src="http://cdn.jssor.com/script/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_2_slider_init = function() {

            var jssor_2_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $ChanceToShow: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 22px;
            height: 22px;
            text-align: center;
            line-height: 22px;
            color: #000;
            font-size: 13px;
            overflow: hidden;
            cursor: pointer;
        }
        /*.jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }*/
        .jssorb03 div { width:22px; height:22px; line-height:25px; text-align:center; cursor:pointer; margin-left:10px; background:#90EE90; float:right; border:1px solid #ccc; overflow:hidden;} 
        .jssorb03 div:hover, .jssorb03 .av:hover { width:22px; height:22px; line-height:25px; text-align:center; cursor:pointer; margin-left:10px; background:#FFAEB9;float:right; border:1px solid #ccc; overflow:hidden;}
        .jssorb03 .av { width:11px; height:11px; float:right; background:#ADD8E6; cursor:pointer; margin-right:5px; overflow:hidden;}
        .jssorb03 .dn, .jssorb03 .dn:hover { width:22px; height:22px; line-height:25px; text-align:center; cursor:pointer; margin-left:10px; background:#FFAEB9;float:right; border:1px solid #ccc; overflow:hidden;}

        /* jssor slider arrow navigator skin 21 css */
        /*
        .jssora21l                  (normal)
        .jssora21r                  (normal)
        .jssora21l:hover            (normal mouseover)
        .jssora21r:hover            (normal mouseover)
        .jssora21l.jssora21ldn      (mousedown)
        .jssora21r.jssora21rdn      (mousedown)
        .jssora21l.jssora21lds      (disabled)
        .jssora21r.jssora21rds      (disabled)
        */
        .jssora21l, .jssora21r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('a21.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora21l { background-position: -3px -33px; }
        .jssora21r { background-position: -63px -33px; }
        .jssora21l:hover { background-position: -123px -33px; }
        .jssora21r:hover { background-position: -183px -33px; }
        .jssora21l.jssora21ldn { background-position: -243px -33px; }
        .jssora21r.jssora21rdn { background-position: -303px -33px; }
        .jssora21l.jssora21lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
        .jssora21r.jssora21rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_2" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 900px; height: 300px; overflow: hidden; visibility: hidden; background-color: #ffffff;">
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 900px; height: 300px; overflow: hidden;">
            <div data-p="150.00">
                <div style="position: absolute; top: 0px; left: 451px; width: 450px; height: 300px; background-color: rgba(173,173,173,0.3); font-size: 20px; color: #212121; line-height: 30px; text-align: center;">
                    <p>
                        This is a test line.

                    </p>
                </div>
                <img src="http://cdn.jssor.com/demos/img/landscape/01.jpg" style="position: absolute; top: 0px; left: 0px; width: 450px; height: 300px;" />
            </div>
            <div data-p="150.00" style="display: none;">
                <div style="position: absolute; top: 0px; left: 451px; width: 450px; height: 300px; background-color: rgba(173,173,173,0.3); font-size: 20px; color: #212121; line-height: 30px; text-align: center;">
                    <p>
                        This is a test line.

                    </p>
                </div>
                <img src="http://cdn.jssor.com/demos/img/landscape/02.jpg" style="position: absolute; top: 0px; left: 0px; width: 450px; height: 300px;" />
            </div>
            <div data-p="150.00" style="display: none;">
                <div style="position: absolute; top: 0px; left: 451px; width: 450px; height: 300px; background-color: rgba(173,173,173,0.3); font-size: 20px; color: #212121; line-height: 30px; text-align: center;">
                    <p>
                        This is a test line.

                    </p>
                </div>
                <img src="http://cdn.jssor.com/demos/img/landscape/03.jpg" style="position: absolute; top: 0px; left: 0px; width: 450px; height: 300px;" />
            </div>
            <div data-p="150.00" style="display: none;">
                <div style="position: absolute; top: 0px; left: 451px; width: 450px; height: 300px; background-color: rgba(173,173,173,0.3); font-size: 20px; color: #212121; line-height: 30px; text-align: center;">
                    <p>
                        This is a test line.

                    </p>
                </div>
                <img src="http://cdn.jssor.com/demos/img/landscape/04.jpg" style="position: absolute; top: 0px; left: 0px; width: 450px; height: 300px;" />
            </div>
            <div data-p="150.00" style="display: none;">
                <div style="position: absolute; top: 0px; left: 451px; width: 450px; height: 300px; background-color: rgba(173,173,173,0.3); font-size: 20px; color: #212121; line-height: 30px; text-align: center;">
                    <p>
                        This is a test line.

                    </p>
                </div>
                <img src="http://cdn.jssor.com/demos/img/landscape/05.jpg" style="position: absolute; top: 0px; left: 0px; width: 450px; height: 300px;" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb03" style="bottom:16px;right:16px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:21px;height:21px;">
                <div data-u="numbertemplate"></div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora21l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora21r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_2_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
</body>
</html>
