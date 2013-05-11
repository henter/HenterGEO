<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_fc80c80df352129e3952d0bf90768060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  71 => 21,  68 => 20,  62 => 16,  58 => 14,  56 => 13,  44 => 8,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  301 => 125,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  254 => 101,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  226 => 86,  221 => 83,  215 => 79,  212 => 78,  209 => 77,  207 => 76,  202 => 73,  196 => 69,  193 => 68,  190 => 67,  188 => 66,  183 => 63,  177 => 59,  174 => 58,  171 => 57,  169 => 56,  162 => 53,  143 => 43,  130 => 39,  107 => 27,  103 => 25,  97 => 23,  88 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  67 => 14,  61 => 12,  47 => 9,  36 => 5,  70 => 15,  63 => 9,  46 => 14,  39 => 6,  22 => 1,  163 => 32,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 45,  123 => 35,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  106 => 36,  101 => 33,  98 => 32,  96 => 31,  92 => 21,  80 => 24,  74 => 22,  64 => 19,  55 => 9,  52 => 15,  50 => 10,  43 => 9,  41 => 8,  37 => 8,  32 => 4,  29 => 6,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 121,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 100,  245 => 96,  238 => 97,  228 => 87,  225 => 88,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  198 => 74,  192 => 72,  184 => 70,  182 => 69,  172 => 64,  165 => 54,  158 => 56,  154 => 48,  151 => 47,  148 => 46,  140 => 42,  135 => 47,  131 => 42,  128 => 45,  125 => 44,  119 => 43,  116 => 31,  113 => 40,  110 => 39,  104 => 36,  100 => 24,  93 => 31,  89 => 29,  86 => 29,  83 => 28,  75 => 23,  72 => 22,  69 => 20,  66 => 20,  60 => 8,  54 => 6,  51 => 12,  48 => 15,  42 => 7,  38 => 5,  35 => 5,  33 => 4,  30 => 3,);
    }
}
