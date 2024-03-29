<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a940b3020bf71efda387cc4e2464c8319f6f5eb2a0374f7b7d2bd5c3ce55ba41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b657f05aef58f2bd890ae145db769e68d1ea4d66b919101e7b069639e95c86b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b657f05aef58f2bd890ae145db769e68d1ea4d66b919101e7b069639e95c86b9->enter($__internal_b657f05aef58f2bd890ae145db769e68d1ea4d66b919101e7b069639e95c86b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_74f4f27f657718c30a87e36aeb3cd01fbecdc1d046150895c8ee2c18c0186250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f4f27f657718c30a87e36aeb3cd01fbecdc1d046150895c8ee2c18c0186250->enter($__internal_74f4f27f657718c30a87e36aeb3cd01fbecdc1d046150895c8ee2c18c0186250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b657f05aef58f2bd890ae145db769e68d1ea4d66b919101e7b069639e95c86b9->leave($__internal_b657f05aef58f2bd890ae145db769e68d1ea4d66b919101e7b069639e95c86b9_prof);

        
        $__internal_74f4f27f657718c30a87e36aeb3cd01fbecdc1d046150895c8ee2c18c0186250->leave($__internal_74f4f27f657718c30a87e36aeb3cd01fbecdc1d046150895c8ee2c18c0186250_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46945134fa92f98ed9ff757704dd5082d679cd3032dffdabadfcba089fe5a513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46945134fa92f98ed9ff757704dd5082d679cd3032dffdabadfcba089fe5a513->enter($__internal_46945134fa92f98ed9ff757704dd5082d679cd3032dffdabadfcba089fe5a513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af46dfad61595183ebe230a91ad5d48703cdad864faa9e25ef88e36bf9b81aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af46dfad61595183ebe230a91ad5d48703cdad864faa9e25ef88e36bf9b81aeb->enter($__internal_af46dfad61595183ebe230a91ad5d48703cdad864faa9e25ef88e36bf9b81aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_af46dfad61595183ebe230a91ad5d48703cdad864faa9e25ef88e36bf9b81aeb->leave($__internal_af46dfad61595183ebe230a91ad5d48703cdad864faa9e25ef88e36bf9b81aeb_prof);

        
        $__internal_46945134fa92f98ed9ff757704dd5082d679cd3032dffdabadfcba089fe5a513->leave($__internal_46945134fa92f98ed9ff757704dd5082d679cd3032dffdabadfcba089fe5a513_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbc8177570a1481686e24421a5cd2dd8fe484f4442eaab0d6dcccc79dc5b7e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc8177570a1481686e24421a5cd2dd8fe484f4442eaab0d6dcccc79dc5b7e2f->enter($__internal_dbc8177570a1481686e24421a5cd2dd8fe484f4442eaab0d6dcccc79dc5b7e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d418f8a1c6579fd0aca26ec2c32d5941558d7b2864b9b466e7448d358efc1ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d418f8a1c6579fd0aca26ec2c32d5941558d7b2864b9b466e7448d358efc1ad9->enter($__internal_d418f8a1c6579fd0aca26ec2c32d5941558d7b2864b9b466e7448d358efc1ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d418f8a1c6579fd0aca26ec2c32d5941558d7b2864b9b466e7448d358efc1ad9->leave($__internal_d418f8a1c6579fd0aca26ec2c32d5941558d7b2864b9b466e7448d358efc1ad9_prof);

        
        $__internal_dbc8177570a1481686e24421a5cd2dd8fe484f4442eaab0d6dcccc79dc5b7e2f->leave($__internal_dbc8177570a1481686e24421a5cd2dd8fe484f4442eaab0d6dcccc79dc5b7e2f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_04e320007cd534d9eba8b28acb4efda8fb0d5939b14f7de8c0befcbf5fa5d70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e320007cd534d9eba8b28acb4efda8fb0d5939b14f7de8c0befcbf5fa5d70f->enter($__internal_04e320007cd534d9eba8b28acb4efda8fb0d5939b14f7de8c0befcbf5fa5d70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba30ba2b44fd1bc9c15445e005f1dd4e2ce5850b125c48fc488a73b6863d9d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba30ba2b44fd1bc9c15445e005f1dd4e2ce5850b125c48fc488a73b6863d9d9b->enter($__internal_ba30ba2b44fd1bc9c15445e005f1dd4e2ce5850b125c48fc488a73b6863d9d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ba30ba2b44fd1bc9c15445e005f1dd4e2ce5850b125c48fc488a73b6863d9d9b->leave($__internal_ba30ba2b44fd1bc9c15445e005f1dd4e2ce5850b125c48fc488a73b6863d9d9b_prof);

        
        $__internal_04e320007cd534d9eba8b28acb4efda8fb0d5939b14f7de8c0befcbf5fa5d70f->leave($__internal_04e320007cd534d9eba8b28acb4efda8fb0d5939b14f7de8c0befcbf5fa5d70f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
