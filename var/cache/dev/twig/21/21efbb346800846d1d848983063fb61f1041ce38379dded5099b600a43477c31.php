<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_91e140e1f3977e87dd06dc260a9ccd280c24aa7bbb2d7ba899578b4625479e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1dcd4e575e734ceb8d882bcdfcd370d80accb14a93d459ac8887310c19289dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcd4e575e734ceb8d882bcdfcd370d80accb14a93d459ac8887310c19289dfe->enter($__internal_1dcd4e575e734ceb8d882bcdfcd370d80accb14a93d459ac8887310c19289dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1936fcd971ea3b5ce1c7c349d18d4fcb1745442c39ecb68d48f2e8f72fe7c3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1936fcd971ea3b5ce1c7c349d18d4fcb1745442c39ecb68d48f2e8f72fe7c3ac->enter($__internal_1936fcd971ea3b5ce1c7c349d18d4fcb1745442c39ecb68d48f2e8f72fe7c3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dcd4e575e734ceb8d882bcdfcd370d80accb14a93d459ac8887310c19289dfe->leave($__internal_1dcd4e575e734ceb8d882bcdfcd370d80accb14a93d459ac8887310c19289dfe_prof);

        
        $__internal_1936fcd971ea3b5ce1c7c349d18d4fcb1745442c39ecb68d48f2e8f72fe7c3ac->leave($__internal_1936fcd971ea3b5ce1c7c349d18d4fcb1745442c39ecb68d48f2e8f72fe7c3ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5a5005aa3366e5d6f7121986a8382c6db787e05e7adf04a12d5df1f7ebb798d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a5005aa3366e5d6f7121986a8382c6db787e05e7adf04a12d5df1f7ebb798d->enter($__internal_f5a5005aa3366e5d6f7121986a8382c6db787e05e7adf04a12d5df1f7ebb798d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3883c90f59a1452d027573af11181917bc7b553d720346fdac76d317f7f873c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3883c90f59a1452d027573af11181917bc7b553d720346fdac76d317f7f873c9->enter($__internal_3883c90f59a1452d027573af11181917bc7b553d720346fdac76d317f7f873c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3883c90f59a1452d027573af11181917bc7b553d720346fdac76d317f7f873c9->leave($__internal_3883c90f59a1452d027573af11181917bc7b553d720346fdac76d317f7f873c9_prof);

        
        $__internal_f5a5005aa3366e5d6f7121986a8382c6db787e05e7adf04a12d5df1f7ebb798d->leave($__internal_f5a5005aa3366e5d6f7121986a8382c6db787e05e7adf04a12d5df1f7ebb798d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
