<?php

/* ecopointBundle::layout.html.twig */
class __TwigTemplate_8014a592bf83602b1e3413617e698471c844d8161c99a9346954011077169cd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "ecopointBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 51,  111 => 46,  98 => 39,  92 => 36,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  66 => 27,  62 => 26,  58 => 25,  54 => 23,  50 => 22,  31 => 5,  28 => 4,);
    }
}
