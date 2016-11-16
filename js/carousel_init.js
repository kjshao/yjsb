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
