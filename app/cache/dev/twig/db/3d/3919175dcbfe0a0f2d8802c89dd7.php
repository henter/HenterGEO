<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_db3d3919175dcbfe0a0f2d8802c89dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  34 => 5,  31 => 4,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  144 => 73,  126 => 61,  112 => 52,  109 => 51,  28 => 3,  205 => 71,  178 => 86,  176 => 61,  170 => 60,  160 => 59,  132 => 47,  102 => 34,  90 => 41,  81 => 24,  204 => 94,  191 => 70,  185 => 68,  167 => 64,  164 => 63,  153 => 62,  147 => 58,  138 => 55,  134 => 54,  127 => 52,  122 => 51,  95 => 43,  91 => 35,  87 => 40,  84 => 25,  49 => 13,  27 => 3,  77 => 24,  71 => 20,  68 => 30,  62 => 27,  58 => 25,  56 => 13,  44 => 10,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  301 => 125,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  254 => 101,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  226 => 86,  221 => 83,  215 => 79,  212 => 78,  209 => 73,  207 => 95,  202 => 73,  196 => 92,  193 => 68,  190 => 89,  188 => 67,  183 => 63,  177 => 59,  174 => 67,  171 => 84,  169 => 56,  162 => 53,  143 => 56,  130 => 53,  107 => 27,  103 => 25,  97 => 23,  88 => 20,  82 => 19,  79 => 35,  76 => 34,  73 => 33,  67 => 23,  61 => 12,  47 => 11,  36 => 5,  70 => 24,  63 => 16,  46 => 12,  39 => 6,  22 => 1,  163 => 81,  155 => 50,  152 => 49,  149 => 48,  145 => 57,  139 => 71,  123 => 35,  120 => 50,  115 => 44,  111 => 38,  108 => 41,  106 => 36,  101 => 45,  98 => 32,  96 => 31,  92 => 21,  80 => 32,  74 => 21,  64 => 19,  55 => 24,  52 => 14,  50 => 22,  43 => 9,  41 => 19,  37 => 8,  32 => 6,  29 => 6,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 121,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 138,  245 => 96,  238 => 97,  228 => 87,  225 => 88,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  198 => 69,  192 => 72,  184 => 88,  182 => 64,  172 => 64,  165 => 54,  158 => 56,  154 => 48,  151 => 47,  148 => 74,  140 => 42,  135 => 47,  131 => 42,  128 => 45,  125 => 44,  119 => 57,  116 => 31,  113 => 40,  110 => 42,  104 => 35,  100 => 24,  93 => 42,  89 => 29,  86 => 29,  83 => 28,  75 => 23,  72 => 22,  69 => 20,  66 => 20,  60 => 15,  54 => 12,  51 => 13,  48 => 15,  42 => 7,  38 => 7,  35 => 6,  33 => 4,  30 => 5,);
    }
}
