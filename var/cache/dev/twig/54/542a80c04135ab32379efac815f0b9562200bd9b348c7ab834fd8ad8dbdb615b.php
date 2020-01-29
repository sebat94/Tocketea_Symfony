<?php

/* private/form_evento.html.twig */
class __TwigTemplate_2b67ca27896ef643771e5b6919f3506f30406e4cf772e533ba120358fa555d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "private/form_evento.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a8da38877a5ed1e067665edb6bc85b29eb3a54893366ba4893d1099ad59d7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8da38877a5ed1e067665edb6bc85b29eb3a54893366ba4893d1099ad59d7ec->enter($__internal_2a8da38877a5ed1e067665edb6bc85b29eb3a54893366ba4893d1099ad59d7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/form_evento.html.twig"));

        $__internal_ae15dac3652c9a29cee6d771d0e489546dc9ed13dae61c6f0f1b477917b047a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae15dac3652c9a29cee6d771d0e489546dc9ed13dae61c6f0f1b477917b047a3->enter($__internal_ae15dac3652c9a29cee6d771d0e489546dc9ed13dae61c6f0f1b477917b047a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/form_evento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a8da38877a5ed1e067665edb6bc85b29eb3a54893366ba4893d1099ad59d7ec->leave($__internal_2a8da38877a5ed1e067665edb6bc85b29eb3a54893366ba4893d1099ad59d7ec_prof);

        
        $__internal_ae15dac3652c9a29cee6d771d0e489546dc9ed13dae61c6f0f1b477917b047a3->leave($__internal_ae15dac3652c9a29cee6d771d0e489546dc9ed13dae61c6f0f1b477917b047a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d3ca94a8bf612815846d09f261c089247d6cf02a4992ce8476dbc3baffeb69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3ca94a8bf612815846d09f261c089247d6cf02a4992ce8476dbc3baffeb69e->enter($__internal_6d3ca94a8bf612815846d09f261c089247d6cf02a4992ce8476dbc3baffeb69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77f8c541d14b2f6eff3c74941e2ad85c642163f704620bebfb4adc591bcf2a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f8c541d14b2f6eff3c74941e2ad85c642163f704620bebfb4adc591bcf2a3e->enter($__internal_77f8c541d14b2f6eff3c74941e2ad85c642163f704620bebfb4adc591bcf2a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mis eventos";
        
        $__internal_77f8c541d14b2f6eff3c74941e2ad85c642163f704620bebfb4adc591bcf2a3e->leave($__internal_77f8c541d14b2f6eff3c74941e2ad85c642163f704620bebfb4adc591bcf2a3e_prof);

        
        $__internal_6d3ca94a8bf612815846d09f261c089247d6cf02a4992ce8476dbc3baffeb69e->leave($__internal_6d3ca94a8bf612815846d09f261c089247d6cf02a4992ce8476dbc3baffeb69e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c318062df5664e44ca0c64571a6f8cd3d91829158914a8d60afafbcda2ba35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c318062df5664e44ca0c64571a6f8cd3d91829158914a8d60afafbcda2ba35b->enter($__internal_4c318062df5664e44ca0c64571a6f8cd3d91829158914a8d60afafbcda2ba35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_914eba9144d04816249010dd34b94089d3a903b33f482b5285607ab0b2e02711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914eba9144d04816249010dd34b94089d3a903b33f482b5285607ab0b2e02711->enter($__internal_914eba9144d04816249010dd34b94089d3a903b33f482b5285607ab0b2e02711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <section class=\"form_crear_evento\">
    <h1>Formulario Evento</h1>

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "

    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'errors');
        echo "

    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_end');
        echo "

  </section>

";
        
        $__internal_914eba9144d04816249010dd34b94089d3a903b33f482b5285607ab0b2e02711->leave($__internal_914eba9144d04816249010dd34b94089d3a903b33f482b5285607ab0b2e02711_prof);

        
        $__internal_4c318062df5664e44ca0c64571a6f8cd3d91829158914a8d60afafbcda2ba35b->leave($__internal_4c318062df5664e44ca0c64571a6f8cd3d91829158914a8d60afafbcda2ba35b_prof);

    }

    public function getTemplateName()
    {
        return "private/form_evento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  83 => 13,  79 => 12,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Mis eventos{% endblock %}

{% block body %}

  <section class=\"form_crear_evento\">
    <h1>Formulario Evento</h1>

    {{ form( form , {'attr': {'novalidate': 'novalidate'}}) }}

    {{ form_widget(form) }}
    {{ form_errors(form) }}

    {{ form_end(form) }}

  </section>

{% endblock %}
", "private/form_evento.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\form_evento.html.twig");
    }
}
