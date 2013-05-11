<?php

/* HenterGEOBundle:Place:box.html.twig */
class __TwigTemplate_752dd1249175693e1831579223f3091d extends Twig_Template
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
        echo "box  ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_intro($context, array $blocks = array())
    {
        // line 5
        echo "    <dl>
        <dt>搜索矩形</dt>
        <dd>
            <p>
                <br />
                longitude: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo " <br />
                latitude: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo " <br />
                <br />
                longitude2: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["longitude2"]) ? $context["longitude2"] : $this->getContext($context, "longitude2")), "html", null, true);
        echo " <br />
                latitude2: ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["latitude2"]) ? $context["latitude2"] : $this->getContext($context, "latitude2")), "html", null, true);
        echo " <br />


            </p>
        </dd>
    </dl>
";
    }

    // line 25
    public function block_mapjs($context, array $blocks = array())
    {
        // line 26
        echo "<script type=\"text/javascript\">
    var map = new BMap.Map(\"l-map\");          // 创建地图实例
    var point = new BMap.Point(";
        // line 28
        echo twig_escape_filter($this->env, (((isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")) + (isset($context["longitude2"]) ? $context["longitude2"] : $this->getContext($context, "longitude2"))) / 2), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (((isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")) + (isset($context["latitude2"]) ? $context["latitude2"] : $this->getContext($context, "latitude2"))) / 2), "html", null, true);
        echo ");  // 创建点坐标
    map.centerAndZoom(point, 14);                 // 初始化地图，设置中心点坐标和地图级别
    map.enableScrollWheelZoom();
    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件


    var pStart = new BMap.Point(";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo ");
    var pEnd = new BMap.Point(";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["longitude2"]) ? $context["longitude2"] : $this->getContext($context, "longitude2")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["latitude2"]) ? $context["latitude2"] : $this->getContext($context, "latitude2")), "html", null, true);
        echo ");
    var polygon = new BMap.Polygon([
        new BMap.Point(pStart.lng,pStart.lat),
        new BMap.Point(pEnd.lng,pStart.lat),
        new BMap.Point(pEnd.lng,pEnd.lat),
        new BMap.Point(pStart.lng,pEnd.lat)
    ], {strokeColor:\"blue\", strokeWeight:3, strokeOpacity:0.5});
    map.addOverlay(polygon);


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
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 63
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
        // line 65
        echo "

</script>
";
    }

    public function getTemplateName()
    {
        return "HenterGEOBundle:Place:box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  131 => 63,  127 => 62,  95 => 35,  89 => 34,  78 => 28,  74 => 26,  71 => 25,  60 => 14,  56 => 13,  51 => 11,  47 => 10,  40 => 5,  37 => 4,  30 => 2,);
    }
}
