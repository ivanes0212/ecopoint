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
        return array (  115 => 48,  108 => 43,  96 => 37,  90 => 34,  83 => 30,  79 => 29,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  57 => 24,  54 => 23,  50 => 22,  31 => 5,  28 => 4,);
    }
}
