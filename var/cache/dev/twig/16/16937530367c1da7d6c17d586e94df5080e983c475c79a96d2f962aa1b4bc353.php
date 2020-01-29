<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_68183ad5333961ed886d483b9b7c0f85dfdf5b8de6038ab1e8f1b42bf2fbb1ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_032e8ef92aa544b89b9f464ba4fe7ce7e0c2f8cf4b8bb6f5e5befe02059c3bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032e8ef92aa544b89b9f464ba4fe7ce7e0c2f8cf4b8bb6f5e5befe02059c3bbb->enter($__internal_032e8ef92aa544b89b9f464ba4fe7ce7e0c2f8cf4b8bb6f5e5befe02059c3bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9bf063e8d8075a502e838c5b7978310f3fe1fce5ac9a87e47193a28a5c978fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf063e8d8075a502e838c5b7978310f3fe1fce5ac9a87e47193a28a5c978fe9->enter($__internal_9bf063e8d8075a502e838c5b7978310f3fe1fce5ac9a87e47193a28a5c978fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_032e8ef92aa544b89b9f464ba4fe7ce7e0c2f8cf4b8bb6f5e5befe02059c3bbb->leave($__internal_032e8ef92aa544b89b9f464ba4fe7ce7e0c2f8cf4b8bb6f5e5befe02059c3bbb_prof);

        
        $__internal_9bf063e8d8075a502e838c5b7978310f3fe1fce5ac9a87e47193a28a5c978fe9->leave($__internal_9bf063e8d8075a502e838c5b7978310f3fe1fce5ac9a87e47193a28a5c978fe9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3bd4159317ae2c151c85adaf473a0b0f78d47709fac6de3f9c549dac15f408d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bd4159317ae2c151c85adaf473a0b0f78d47709fac6de3f9c549dac15f408d->enter($__internal_d3bd4159317ae2c151c85adaf473a0b0f78d47709fac6de3f9c549dac15f408d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_132d9cb695cf93c2c981a9652d33dedbca18b3e38f62773b77e2ef00ae4dafe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132d9cb695cf93c2c981a9652d33dedbca18b3e38f62773b77e2ef00ae4dafe6->enter($__internal_132d9cb695cf93c2c981a9652d33dedbca18b3e38f62773b77e2ef00ae4dafe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_132d9cb695cf93c2c981a9652d33dedbca18b3e38f62773b77e2ef00ae4dafe6->leave($__internal_132d9cb695cf93c2c981a9652d33dedbca18b3e38f62773b77e2ef00ae4dafe6_prof);

        
        $__internal_d3bd4159317ae2c151c85adaf473a0b0f78d47709fac6de3f9c549dac15f408d->leave($__internal_d3bd4159317ae2c151c85adaf473a0b0f78d47709fac6de3f9c549dac15f408d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5d6193837a00bc8d61f9b7bd2c16372d812561452772ad7b8dd6f3f51a963a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d6193837a00bc8d61f9b7bd2c16372d812561452772ad7b8dd6f3f51a963a3->enter($__internal_a5d6193837a00bc8d61f9b7bd2c16372d812561452772ad7b8dd6f3f51a963a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56878cf301d88a406c252f799e86122fe9e2d5b92c9b5ff0c20b8d7371a7e494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56878cf301d88a406c252f799e86122fe9e2d5b92c9b5ff0c20b8d7371a7e494->enter($__internal_56878cf301d88a406c252f799e86122fe9e2d5b92c9b5ff0c20b8d7371a7e494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_56878cf301d88a406c252f799e86122fe9e2d5b92c9b5ff0c20b8d7371a7e494->leave($__internal_56878cf301d88a406c252f799e86122fe9e2d5b92c9b5ff0c20b8d7371a7e494_prof);

        
        $__internal_a5d6193837a00bc8d61f9b7bd2c16372d812561452772ad7b8dd6f3f51a963a3->leave($__internal_a5d6193837a00bc8d61f9b7bd2c16372d812561452772ad7b8dd6f3f51a963a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b478c0b506c4d4ea71d9e437d97412b908cd7d3a536d54134fdf00a5c7d5f1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b478c0b506c4d4ea71d9e437d97412b908cd7d3a536d54134fdf00a5c7d5f1f1->enter($__internal_b478c0b506c4d4ea71d9e437d97412b908cd7d3a536d54134fdf00a5c7d5f1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09cdee0146a788d5559e03186a418db7dbbf5579469ca4579cbfbbe463d6e206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cdee0146a788d5559e03186a418db7dbbf5579469ca4579cbfbbe463d6e206->enter($__internal_09cdee0146a788d5559e03186a418db7dbbf5579469ca4579cbfbbe463d6e206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_09cdee0146a788d5559e03186a418db7dbbf5579469ca4579cbfbbe463d6e206->leave($__internal_09cdee0146a788d5559e03186a418db7dbbf5579469ca4579cbfbbe463d6e206_prof);

        
        $__internal_b478c0b506c4d4ea71d9e437d97412b908cd7d3a536d54134fdf00a5c7d5f1f1->leave($__internal_b478c0b506c4d4ea71d9e437d97412b908cd7d3a536d54134fdf00a5c7d5f1f1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
