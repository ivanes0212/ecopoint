<?php

/* ecopointBundle:productos:buscarProducto.html.twig */
class __TwigTemplate_3228b9b88ad74030aa12480690d91f8cf3449ffc4fea78b96cec984679874d37 extends Twig_Template
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
        echo "<br>Buscar un producto por código de barras:
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("productos_responder_producto");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"codigo\" value=\"\">
    <input type=\"submit\" value=\"OK\">
</form>
";
    }

    public function getTemplateName()
    {
        return "ecopointBundle:productos:buscarProducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}
