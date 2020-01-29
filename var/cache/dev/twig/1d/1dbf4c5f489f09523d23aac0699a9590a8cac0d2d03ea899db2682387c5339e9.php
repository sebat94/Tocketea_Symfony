<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9089d865f3d8b47fb5fa31881d4c78b92025af32df3a0ef10323817e47a03864 extends Twig_Template
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
        $__internal_2c828f5d170ba654032dd355bff635dcf782cc7cd32a28bc98195d9faadf7c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c828f5d170ba654032dd355bff635dcf782cc7cd32a28bc98195d9faadf7c5f->enter($__internal_2c828f5d170ba654032dd355bff635dcf782cc7cd32a28bc98195d9faadf7c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a1b3de8ee2f85f9ee34efb723453d780b031db355731c9e9acf6c89886bc4a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b3de8ee2f85f9ee34efb723453d780b031db355731c9e9acf6c89886bc4a98->enter($__internal_a1b3de8ee2f85f9ee34efb723453d780b031db355731c9e9acf6c89886bc4a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_2c828f5d170ba654032dd355bff635dcf782cc7cd32a28bc98195d9faadf7c5f->leave($__internal_2c828f5d170ba654032dd355bff635dcf782cc7cd32a28bc98195d9faadf7c5f_prof);

        
        $__internal_a1b3de8ee2f85f9ee34efb723453d780b031db355731c9e9acf6c89886bc4a98->leave($__internal_a1b3de8ee2f85f9ee34efb723453d780b031db355731c9e9acf6c89886bc4a98_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
