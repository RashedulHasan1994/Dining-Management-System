<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:helvetica, arial, verdana, sans-serif">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works with jquery library. -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-22.0.6.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 9,
                $SpacingX: 3,
                $SpacingY: 3,
                $Align: 260
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 960);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        .jssora02l.jssora02lds      (disabled)
        .jssora02r.jssora02rds      (disabled)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
        .jssora02l.jssora02lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
        .jssora02r.jssora02rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 03 css *//*.jssort03 .p            (normal).jssort03 .p:hover      (normal mouseover).jssort03 .pav          (active).jssort03 .pdn          (mousedown)*/.jssort03 .p {    position: absolute;    top: 0;    left: 0;    width: 62px;    height: 32px;}.jssort03 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort03 .w, .jssort03 .pav:hover .w {    position: absolute;    width: 60px;    height: 30px;    border: white 1px dashed;    box-sizing: content-box;}.jssort03 .pdn .w, .jssort03 .pav .w {    border-style: solid;}.jssort03 .c {    position: absolute;    top: 0;    left: 0;    width: 62px;    height: 32px;    background-color: #000;    filter: alpha(opacity=45);    opacity: .45;    transition: opacity .6s;    -moz-transition: opacity .6s;    -webkit-transition: opacity .6s;    -o-transition: opacity .6s;}.jssort03 .p:hover .c, .jssort03 .pav .c {    filter: alpha(opacity=0);    opacity: 0;}.jssort03 .p:hover .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}* html .jssort03 .w {    width /**/: 62px;    height /**/: 32px;}
    </style>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 200px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 200px; overflow: hidden;">
            <div data-p="112.50">
                <img data-u="image" src="img/d2.jpg" />
                <img data-u="thumb" src="img/d2.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/d1.jpg" />
                <img data-u="thumb" src="img/d1.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/d3.jpg" />
                <img data-u="thumb" src="img/d3.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/d4.jpg" />
                <img data-u="thumb" src="img/d4.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/d5.jpg" />
                <img data-u="thumb" src="img/d5.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/d6.jpg" />
                <img data-u="thumb" src="img/d6.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/d9.jpg" />
                <img data-u="thumb" src="img/d9.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/d10.jpg" />
                <img data-u="thumb" src="img/d10.jpg" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Slider 2</a>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/d12.jpg" />
                <img data-u="thumb" src="img/d12.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/d13.jpg" />
                <img data-u="thumb" src="img/d13.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort03" style="position:absolute;left:0px;bottom:0px;width:600px;height:50px;" data-autocenter="1">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=30.0); opacity:0.3;"></div>
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator 
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:45px;height:45px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:45px;height:45px;" data-autocenter="2"></span>
		-->
		
    </div>
    <!-- #endregion Jssor Slider End -->
</body>
</html>
