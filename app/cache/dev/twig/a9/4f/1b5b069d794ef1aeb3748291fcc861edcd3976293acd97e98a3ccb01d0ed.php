<?php

/* ecopointBundle:productos:new.html.twig */
class __TwigTemplate_a94f1b5b069d794ef1aeb3748291fcc861edcd3976293acd97e98a3ccb01d0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ecopointBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ecopointBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"plat\">
        <center><h1>Datos del producto</h1></center>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">
        Volver a la lista de productos
        </a>
    </li>
</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ecopointBundle:productos:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
