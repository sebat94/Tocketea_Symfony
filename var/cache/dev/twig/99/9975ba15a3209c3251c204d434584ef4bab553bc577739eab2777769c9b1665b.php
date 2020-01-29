<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_51e38b01f0bea56b05cc61438f2a9304cd312f59c6ab2ff4ed2cc1ff69c33da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_690339519bb6b3211f6ef4978bd1e373ae7adedcb90b2f19a70290189fd870b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690339519bb6b3211f6ef4978bd1e373ae7adedcb90b2f19a70290189fd870b9->enter($__internal_690339519bb6b3211f6ef4978bd1e373ae7adedcb90b2f19a70290189fd870b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef3db7ff6aa80fe973d715d4ccb94d9031b70b26795e42ee7f0a9fa97c29c8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef3db7ff6aa80fe973d715d4ccb94d9031b70b26795e42ee7f0a9fa97c29c8c4->enter($__internal_ef3db7ff6aa80fe973d715d4ccb94d9031b70b26795e42ee7f0a9fa97c29c8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690339519bb6b3211f6ef4978bd1e373ae7adedcb90b2f19a70290189fd870b9->leave($__internal_690339519bb6b3211f6ef4978bd1e373ae7adedcb90b2f19a70290189fd870b9_prof);

        
        $__internal_ef3db7ff6aa80fe973d715d4ccb94d9031b70b26795e42ee7f0a9fa97c29c8c4->leave($__internal_ef3db7ff6aa80fe973d715d4ccb94d9031b70b26795e42ee7f0a9fa97c29c8c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ddc63883d0a5e3deafa92170d42d9bdba9012dabe995aae924a889a8dc0488d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddc63883d0a5e3deafa92170d42d9bdba9012dabe995aae924a889a8dc0488d->enter($__internal_1ddc63883d0a5e3deafa92170d42d9bdba9012dabe995aae924a889a8dc0488d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_63fe6faa3c51959b8d1fc02447f710579ee3804f5a4657e7f5b04dd7cc9b2436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fe6faa3c51959b8d1fc02447f710579ee3804f5a4657e7f5b04dd7cc9b2436->enter($__internal_63fe6faa3c51959b8d1fc02447f710579ee3804f5a4657e7f5b04dd7cc9b2436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_63fe6faa3c51959b8d1fc02447f710579ee3804f5a4657e7f5b04dd7cc9b2436->leave($__internal_63fe6faa3c51959b8d1fc02447f710579ee3804f5a4657e7f5b04dd7cc9b2436_prof);

        
        $__internal_1ddc63883d0a5e3deafa92170d42d9bdba9012dabe995aae924a889a8dc0488d->leave($__internal_1ddc63883d0a5e3deafa92170d42d9bdba9012dabe995aae924a889a8dc0488d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_702809659fffa856f2ca39ea0759ee29b764cb56efe94eb838e73cab7878b310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702809659fffa856f2ca39ea0759ee29b764cb56efe94eb838e73cab7878b310->enter($__internal_702809659fffa856f2ca39ea0759ee29b764cb56efe94eb838e73cab7878b310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_52a8d962be6e200830cd45d10b0d2a7d783e8f7db398a3f98250ca15f17ab66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a8d962be6e200830cd45d10b0d2a7d783e8f7db398a3f98250ca15f17ab66c->enter($__internal_52a8d962be6e200830cd45d10b0d2a7d783e8f7db398a3f98250ca15f17ab66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_52a8d962be6e200830cd45d10b0d2a7d783e8f7db398a3f98250ca15f17ab66c->leave($__internal_52a8d962be6e200830cd45d10b0d2a7d783e8f7db398a3f98250ca15f17ab66c_prof);

        
        $__internal_702809659fffa856f2ca39ea0759ee29b764cb56efe94eb838e73cab7878b310->leave($__internal_702809659fffa856f2ca39ea0759ee29b764cb56efe94eb838e73cab7878b310_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9442241804e08b79efb022886dcce41db0cd9bad815b74af96dafa207d87c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9442241804e08b79efb022886dcce41db0cd9bad815b74af96dafa207d87c86->enter($__internal_d9442241804e08b79efb022886dcce41db0cd9bad815b74af96dafa207d87c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a61680df3dda181d0497735e655f09c4e27889fc54c22aa856d945c51b582feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61680df3dda181d0497735e655f09c4e27889fc54c22aa856d945c51b582feb->enter($__internal_a61680df3dda181d0497735e655f09c4e27889fc54c22aa856d945c51b582feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a61680df3dda181d0497735e655f09c4e27889fc54c22aa856d945c51b582feb->leave($__internal_a61680df3dda181d0497735e655f09c4e27889fc54c22aa856d945c51b582feb_prof);

        
        $__internal_d9442241804e08b79efb022886dcce41db0cd9bad815b74af96dafa207d87c86->leave($__internal_d9442241804e08b79efb022886dcce41db0cd9bad815b74af96dafa207d87c86_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
