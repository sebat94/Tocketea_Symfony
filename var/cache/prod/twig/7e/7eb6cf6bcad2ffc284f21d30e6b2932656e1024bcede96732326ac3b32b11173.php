<?php

/* bundles/TwigBundle/Exception/error404.html.twig */
class __TwigTemplate_c45dd8f167886a10aad90052bb639a72f1a44d87db3ea733aa0ed05ec1272f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bundles/TwigBundle/Exception/error404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <h1 class=\"error_page\">Error 404</h1>
";
    }

    public function getTemplateName()
    {
        return "bundles/TwigBundle/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bundles/TwigBundle/Exception/error404.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\bundles\\TwigBundle\\Exception\\error404.html.twig");
    }
}
