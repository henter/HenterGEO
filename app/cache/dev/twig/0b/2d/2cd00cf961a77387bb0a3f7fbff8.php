<?php

/* HenterGEOBundle:Place:geonear.html.twig */
class __TwigTemplate_0b2d2cd00cf961a77387bb0a3f7fbff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HenterGEOBundle::Place/index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intro' => array($this, 'block_intro'),
            'mapjs' => array($this, 'block_mapjs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HenterGEOBundle::Place/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "near  ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_intro($context, array $blocks = array())
    {
        // line 5
        echo "    <dl>
        <dt>geoNear</dt>
        <dd>
            <p>

                longitude: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo " <br />
                latitude: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo " <br />
                周边";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "html", null, true);
        echo "km

            </p>
        </dd>
    </dl>
";
    }

    // line 22
    public function block_mapjs($context, array $blocks = array())
    {
        // line 23
        echo "<script type=\"text/javascript\">
    var map = new BMap.Map(\"l-map\");          // 创建地图实例
    var point = new BMap.Point(";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo ");  // 创建点坐标
    map.centerAndZoom(point, 14);                 // 初始化地图，设置中心点坐标和地图级别
    map.enableScrollWheelZoom();
    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件

    //current location
        // 复杂的自定义覆盖物
        function ComplexCustomOverlay(point, text){
            this._point = point;
            this._text = text;
        }
        ComplexCustomOverlay.prototype = new BMap.Overlay();
        ComplexCustomOverlay.prototype.initialize = function(map){
            this._map = map;
            var div = this._div = document.createElement(\"div\");
            div.style.position = \"absolute\";
            div.style.zIndex = BMap.Overlay.getZIndex(this._point.lat);
            div.style.backgroundColor = \"#FF00FF\";
            div.style.border = \"1px solid #BC3B3A\";
            div.style.color = \"white\";
            div.style.height = \"18px\";
            div.style.padding = \"2px\";
            div.style.lineHeight = \"18px\";
            div.style.whiteSpace = \"nowrap\";
            div.style.MozUserSelect = \"none\";
            div.style.fontSize = \"14px\"
            var span = this._span = document.createElement(\"span\");
            div.appendChild(span);
            span.appendChild(document.createTextNode(this._text));
            var that = this;

            var arrow = this._arrow = document.createElement(\"div\");
            arrow.style.background = \"url(http://map.baidu.com/fwmap/upload/r/map/fwmap/static/house/images/label.png) no-repeat\";
            arrow.style.position = \"absolute\";
            arrow.style.width = \"11px\";
            arrow.style.height = \"10px\";
            arrow.style.top = \"22px\";
            arrow.style.left = \"10px\";
            arrow.style.overflow = \"hidden\";
            div.appendChild(arrow);

            map.getPanes().labelPane.appendChild(div);
            return div;
        }
        ComplexCustomOverlay.prototype.draw = function(){
            var map = this._map;
            var pixel = map.pointToOverlayPixel(this._point);
            this._div.style.left = pixel.x - parseInt(this._arrow.style.left) + \"px\";
            this._div.style.top  = pixel.y - 30 + \"px\";
        }
        var txt = \"当前位置\";

        var myCompOverlay = new ComplexCustomOverlay(new BMap.Point(";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo "), txt);

        map.addOverlay(myCompOverlay);



    function addCustomLayer(longitude, latitude, title, address){
        var point = new BMap.Point(longitude, latitude);
        var marker = new BMap.Marker(point);        // 创建标注
        map.addOverlay(marker);                     // 将标注添加到地图中

        marker.addEventListener(\"click\", function(){

            var opts = {
                width : 250,     // 信息窗口宽度
                height: 100,     // 信息窗口高度
                title : title  // 信息窗口标题
            }
            var infoWindow = new BMap.InfoWindow(address, opts);  // 创建信息窗口对象
            map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口
        });
    }

    ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 101
            echo "        addCustomLayer(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "coordinate"), "longitude"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "coordinate"), "latitude"), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "coordinate"), "longitude"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "coordinate"), "latitude"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "address"), "html", null, true);
            echo "');
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "

</script>
";
    }

    public function getTemplateName()
    {
        return "HenterGEOBundle:Place:geonear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 103,  161 => 101,  157 => 100,  129 => 77,  72 => 25,  68 => 23,  65 => 22,  55 => 12,  51 => 11,  47 => 10,  40 => 5,  37 => 4,  30 => 2,);
    }
}
