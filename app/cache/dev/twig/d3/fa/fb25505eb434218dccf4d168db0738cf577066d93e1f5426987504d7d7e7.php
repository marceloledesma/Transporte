<?php

/* ::base.html.twig */
class __TwigTemplate_d3fafb25505eb434218dccf4d168db0738cf577066d93e1f5426987504d7d7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/transporte/default/images/muni.ico"), "html", null, true);
        echo "\" />
        
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        
            ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        
        
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de Transporte";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/transporte/foundation/css/foundation.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "        <script type=\"text/javascript\" language=\"javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/transporte/default/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/transporte/foundation/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).foundation();
        </script>
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
        return array (  89 => 20,  84 => 19,  81 => 18,  76 => 15,  69 => 10,  66 => 9,  60 => 5,  54 => 25,  52 => 18,  48 => 16,  46 => 15,  41 => 12,  39 => 9,  34 => 7,  29 => 5,  23 => 1,  123 => 71,  116 => 66,  104 => 60,  98 => 57,  91 => 53,  85 => 52,  82 => 51,  78 => 50,  31 => 5,  28 => 3,);
    }
}
