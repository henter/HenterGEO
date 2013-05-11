<?php

/* WebProfilerBundle:Profiler:base.html.twig */
class __TwigTemplate_9bdf6566e8cf7fb6740e66c27d9c0330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "        ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig")->display(array_merge($context, array("position" => "top", "floatable" => false)));
        // line 12
        echo "    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Profiler";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/css/profiler.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  63 => 9,  46 => 14,  39 => 11,  22 => 1,  163 => 32,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 45,  123 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  106 => 36,  101 => 33,  98 => 32,  96 => 31,  92 => 29,  80 => 24,  74 => 22,  64 => 19,  55 => 16,  52 => 15,  50 => 14,  43 => 9,  41 => 8,  37 => 8,  32 => 4,  29 => 6,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 133,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 105,  245 => 101,  238 => 97,  228 => 89,  225 => 88,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  198 => 74,  192 => 72,  184 => 70,  182 => 69,  172 => 64,  165 => 60,  158 => 56,  154 => 54,  151 => 53,  148 => 52,  140 => 49,  135 => 47,  131 => 42,  128 => 45,  125 => 44,  119 => 43,  116 => 41,  113 => 40,  110 => 39,  104 => 36,  100 => 35,  93 => 31,  89 => 29,  86 => 28,  83 => 25,  75 => 23,  72 => 22,  69 => 20,  66 => 20,  60 => 8,  54 => 6,  51 => 12,  48 => 15,  42 => 12,  38 => 6,  35 => 5,  33 => 7,  30 => 3,);
    }
}
