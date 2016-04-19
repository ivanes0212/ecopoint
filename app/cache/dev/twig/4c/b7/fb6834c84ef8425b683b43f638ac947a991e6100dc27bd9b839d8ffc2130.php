<?php

/* ::base.html.twig */
class __TwigTemplate_4cb7fb6834c84ef8425b683b43f638ac947a991e6100dc27bd9b839d8ffc2130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'body' => array($this, 'block_body'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"cabecera\">
            ";
        // line 14
        $this->displayBlock('cabecera', $context, $blocks);
        // line 25
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 32
        $this->displayBlock('pie', $context, $blocks);
        // line 39
        echo "        </div>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecopoint/css/fuente.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        // line 15
        echo "                <h1><font color=\"#CBCBFD\" size=\"30\">ECOPOINT</font></h1>
                <h3>
                    <ul id=\"nav\">
        <li id=\"nav-1\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">Productos</a></li>
\t<li id=\"nav-2\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("productos_buscar_producto");
        echo "\">Buscar producto</a></li>
        <li id=\"nav-3\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("productos_new");
        echo "\">Ingresar nuevo producto</a></li>
\t             </ul>
                </h3>
                
            ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
    }

    // line 32
    public function block_pie($context, array $blocks = array())
    {
        // line 33
        echo "                <h6><font color=\"#CBCBFD\">
                    CONTACTO -> ecopoint@hotmail.com
                    <br>
                    SITIO WEB -> ecopoint.com
                    </font></h6>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  109 => 28,  100 => 20,  96 => 19,  92 => 18,  87 => 15,  84 => 14,  77 => 7,  74 => 6,  68 => 5,  62 => 39,  60 => 32,  55 => 29,  53 => 28,  48 => 25,  46 => 14,  39 => 10,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
