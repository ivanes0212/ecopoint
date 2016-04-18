<?php

/* ecopointBundle:productos:responderProducto.html.twig */
class __TwigTemplate_164843e498faabf31ef209b56f14bddb06fddcfcde1377cda53ac1f14efd916c extends Twig_Template
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
        // line 5
        echo "<h1>Producto con código de barras \"";
        echo twig_escape_filter($this->env, (isset($context["codigo"]) ? $context["codigo"] : $this->getContext($context, "codigo")), "html", null, true);
        echo "\":</h1>
<div id=\"texto\"> 
   <table>
        <tbody>
        
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "            
          <center>  
        <h2><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</a></h2>

        <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/ecopoint/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto")) . "")), "html", null, true);
            echo "\"/>
                
        
                <tr>
                <th>Nombre</th>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                <th>Marca</th>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "marca"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Material</th>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "material"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Capacidad</th>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "capacidad"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
          </center>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
</div>
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("productos");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
           
   
                

";
    }

    public function getTemplateName()
    {
        return "ecopointBundle:productos:responderProducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 42,  95 => 37,  84 => 32,  77 => 28,  70 => 24,  63 => 20,  55 => 15,  48 => 13,  44 => 11,  40 => 10,  31 => 5,  28 => 3,);
    }
}
