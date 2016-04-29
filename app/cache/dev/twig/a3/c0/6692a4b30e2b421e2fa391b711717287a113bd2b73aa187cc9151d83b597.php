<?php

/* TransporteBundle:Default:portada.html.twig */
class __TwigTemplate_a3c06692a4b30e2b421e2fa391b711717287a113bd2b73aa187cc9151d83b597 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"callout primary large-text-center\">
    <h1 class=\"text-center\">Bienvenido</h1>
</div>

";
    }

    public function getTemplateName()
    {
        return "TransporteBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 3,);
    }
}
