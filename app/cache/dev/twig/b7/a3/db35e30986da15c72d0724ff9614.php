<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b7a3db35e30986da15c72d0724ff9614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  70 => 14,  63 => 9,  46 => 14,  22 => 1,  163 => 32,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 33,  96 => 31,  83 => 25,  80 => 24,  74 => 22,  66 => 20,  55 => 16,  52 => 15,  50 => 14,  43 => 9,  41 => 8,  37 => 8,  35 => 5,  32 => 4,  29 => 6,  184 => 70,  178 => 66,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 53,  143 => 48,  138 => 45,  136 => 44,  133 => 43,  130 => 42,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 32,  95 => 28,  92 => 29,  89 => 26,  85 => 24,  81 => 22,  73 => 19,  64 => 19,  60 => 8,  57 => 12,  54 => 6,  51 => 10,  48 => 15,  45 => 8,  42 => 12,  39 => 11,  36 => 5,  33 => 7,  30 => 3,);
    }
}
