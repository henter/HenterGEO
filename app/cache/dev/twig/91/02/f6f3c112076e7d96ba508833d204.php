<?php

/* HenterGEOBundle::Place/index.html.twig */
class __TwigTemplate_9102f6f3c112076e7d96ba508833d204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intro' => array($this, 'block_intro'),
            'mapjs' => array($this, 'block_mapjs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <style type=\"text/css\">
        body, html{width: 100%;height: 100%;overflow-x: hidden;margin:0;}
        #l-map {margin-right: 300px;height: 100%;overflow: hidden;}
        #result {border-left:1px dotted #999;height:100%;width:295px;position:absolute;top:0px;right:0px;font-size:12px;}
        dl,dt,dd,ul,li{
            margin:0;
            padding:0;
            list-style:none;
        }
        dt{
            font-size:14px;
            font-family:\"微软雅黑\";
            font-weight:bold;
            border-bottom:1px dotted #000;
            padding:5px 0 5px 5px;
            margin:5px 0;
        }
        dd{
            padding:5px 0 0 5px;
        }
        dd p{font-size:16px;}
        li{
            line-height:28px;
        }



        .cityList{height: 320px;width:372px;overflow-y:auto;}
        .sel_container{z-index:9999;font-size:12px;position:absolute;right:300px;top:0px;width:140px;background:rgba(255,255,255,0.8);height:30px;line-height:30px;padding:5px;}
        .map_popup {position: absolute;z-index: 200000;width: 382px;height: 344px;right:320px;top:40px;}
        .map_popup .popup_main { background:#fff;border: 1px solid #8BA4D8;height: 100%;overflow: hidden;position: absolute;width: 100%;z-index: 2;}
        .map_popup .title {background: url(\"http://map.baidu.com/img/popup_title.gif\") repeat scroll 0 0 transparent;
            color: #6688CC;font-size: 12px;font-weight: bold;height: 24px;line-height: 25px;padding-left: 7px;}
        .map_popup button {background: url(\"http://map.baidu.com/img/popup_close.gif\") no-repeat scroll 0 0 transparent;
            border: 0 none;cursor: pointer;height: 12px;position: absolute;right: 4px;top: 6px;width: 12px;}

    </style>
    <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=1.5&ak=BC772b8e19c4c65f4bfe7cc576f9dc94\"></script>
    <!-- 加载百度地图样式信息窗口 -->
    <script type=\"text/javascript\" src=\"http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js\"></script>
    <link rel=\"stylesheet\" href=\"http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css\" />
    <!-- 加载城市列表 -->
    <script type=\"text/javascript\" src=\"http://api.map.baidu.com/library/CityList/1.2/src/CityList_min.js\"></script>
<script type=\"text/javascript\" src=\"http://lib.sinaapp.com/js/jquery/1.4.2/jquery.min.js\"></script>

    <title>";
        // line 51
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
<div id=\"l-map\"></div>
<div id=\"result\">

";
        // line 57
        $this->displayBlock('intro', $context, $blocks);
        // line 71
        echo "

    <dl>
        <dt>demo</dt>
        <dd>
            <p><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("near"), "html", null, true);
        echo "?\">near</a> </p>
            <p><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("center"), "html", null, true);
        echo "?lon=121.44&lat=31.25&max=10\">center</a> </p>
            <p><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("box"), "html", null, true);
        echo "\">box</a> </p>
            <p><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("polygon"), "html", null, true);
        echo "\">polygon</a> </p>
            <p><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("geonear"), "html", null, true);
        echo "\">geonear</a> </p>
            <p><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("distance"), "html", null, true);
        echo "\">distance</a> </p>


        </dd>
    </dl>

</div>



</body>
</html>
";
        // line 93
        $this->displayBlock('mapjs', $context, $blocks);
        // line 146
        echo "</body>
</html>
";
    }

    // line 51
    public function block_title($context, array $blocks = array())
    {
        echo "HenterGEO test";
    }

    // line 57
    public function block_intro($context, array $blocks = array())
    {
        // line 58
        echo "    <dl>
        <dt>get point(click)</dt>
        <dd>
            <p>
                longitude: <input id=\"longitude\"> <br />
                latitude: <input id=\"latitude\"> <br />
            </p>

        </dd>
    </dl>


";
    }

    // line 93
    public function block_mapjs($context, array $blocks = array())
    {
        // line 94
        echo "<script type=\"text/javascript\">
    var map = new BMap.Map(\"l-map\");          // 创建地图实例
    var point = new BMap.Point(121.48999,31.227729);  // 创建点坐标
    map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别
    map.enableScrollWheelZoom();
    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件


    function addCustomLayer(){


        var marker = new BMap.Marker(point);        // 创建标注
        map.addOverlay(marker);                     // 将标注添加到地图中

        marker.addEventListener(\"click\", function(){

            var opts = {
                width : 250,     // 信息窗口宽度
                height: 100,     // 信息窗口高度
                title : \"Hello\"  // 信息窗口标题
            }
            var infoWindow = new BMap.InfoWindow(\"World\", opts);  // 创建信息窗口对象
            map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口

        });


        var polyline = new BMap.Polyline([
            new BMap.Point(116.399, 39.910),
            new BMap.Point(116.359, 39.812),
            new BMap.Point(116.389, 39.514),
            new BMap.Point(116.399, 39.910)
        ],
                {strokeColor:\"blue\", strokeWeight:3, strokeOpacity:0.5}
        );
        map.addOverlay(polyline);

        //坐标
        function showInfo(e){
            //alert(e.point.lng + \", \" + e.point.lat);
            \$('#longitude').val(e.point.lng);
            \$('#latitude').val(e.point.lat);
        }
        map.addEventListener(\"click\", showInfo);

    }


    addCustomLayer();

</script>
";
    }

    public function getTemplateName()
    {
        return "HenterGEOBundle::Place/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 94,  160 => 93,  144 => 58,  141 => 57,  135 => 51,  129 => 146,  127 => 93,  112 => 81,  108 => 80,  104 => 79,  100 => 78,  96 => 77,  92 => 76,  85 => 71,  83 => 57,  74 => 51,  22 => 1,);
    }
}
