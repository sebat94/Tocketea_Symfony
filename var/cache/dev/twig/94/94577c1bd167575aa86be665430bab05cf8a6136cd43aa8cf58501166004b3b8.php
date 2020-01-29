<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_d5f3f674c5ebcb764fb3785d3b90b4910d120b6428e32713240445320bd6fb90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1de44521e163c6874dbedd77aa5de852f0c4a5342fc31c0e985309bfe783c7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de44521e163c6874dbedd77aa5de852f0c4a5342fc31c0e985309bfe783c7df->enter($__internal_1de44521e163c6874dbedd77aa5de852f0c4a5342fc31c0e985309bfe783c7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_90db8d0ff2697ae0efee683e7157edefc55d3f9969f6658390194544f219f469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90db8d0ff2697ae0efee683e7157edefc55d3f9969f6658390194544f219f469->enter($__internal_90db8d0ff2697ae0efee683e7157edefc55d3f9969f6658390194544f219f469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1de44521e163c6874dbedd77aa5de852f0c4a5342fc31c0e985309bfe783c7df->leave($__internal_1de44521e163c6874dbedd77aa5de852f0c4a5342fc31c0e985309bfe783c7df_prof);

        
        $__internal_90db8d0ff2697ae0efee683e7157edefc55d3f9969f6658390194544f219f469->leave($__internal_90db8d0ff2697ae0efee683e7157edefc55d3f9969f6658390194544f219f469_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ac34c302014b3ba6cadecf6ed16114f607b15539775f5bfe9d0fd42769cc81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac34c302014b3ba6cadecf6ed16114f607b15539775f5bfe9d0fd42769cc81c->enter($__internal_9ac34c302014b3ba6cadecf6ed16114f607b15539775f5bfe9d0fd42769cc81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19489323ef84a92184c54f1328c0e6880b1fafbff95ffa4e4017300d76f051eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19489323ef84a92184c54f1328c0e6880b1fafbff95ffa4e4017300d76f051eb->enter($__internal_19489323ef84a92184c54f1328c0e6880b1fafbff95ffa4e4017300d76f051eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_19489323ef84a92184c54f1328c0e6880b1fafbff95ffa4e4017300d76f051eb->leave($__internal_19489323ef84a92184c54f1328c0e6880b1fafbff95ffa4e4017300d76f051eb_prof);

        
        $__internal_9ac34c302014b3ba6cadecf6ed16114f607b15539775f5bfe9d0fd42769cc81c->leave($__internal_9ac34c302014b3ba6cadecf6ed16114f607b15539775f5bfe9d0fd42769cc81c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bca513078d1426a7f077425ee9b1085bbce6f42d9ef02d4e373161fd216b913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bca513078d1426a7f077425ee9b1085bbce6f42d9ef02d4e373161fd216b913->enter($__internal_4bca513078d1426a7f077425ee9b1085bbce6f42d9ef02d4e373161fd216b913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b92b06d4707fc7757cbb8aab95625dcb7e5936c56c975eb2f701333ea8af3273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92b06d4707fc7757cbb8aab95625dcb7e5936c56c975eb2f701333ea8af3273->enter($__internal_b92b06d4707fc7757cbb8aab95625dcb7e5936c56c975eb2f701333ea8af3273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b92b06d4707fc7757cbb8aab95625dcb7e5936c56c975eb2f701333ea8af3273->leave($__internal_b92b06d4707fc7757cbb8aab95625dcb7e5936c56c975eb2f701333ea8af3273_prof);

        
        $__internal_4bca513078d1426a7f077425ee9b1085bbce6f42d9ef02d4e373161fd216b913->leave($__internal_4bca513078d1426a7f077425ee9b1085bbce6f42d9ef02d4e373161fd216b913_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_32c7ee2753dee73727a8c1ad14407f0dc49e850bda0e9d0d13af234ab2c0edcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c7ee2753dee73727a8c1ad14407f0dc49e850bda0e9d0d13af234ab2c0edcd->enter($__internal_32c7ee2753dee73727a8c1ad14407f0dc49e850bda0e9d0d13af234ab2c0edcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2aced15249a054f9aa0bd37b603656d5ab28c8867c20590acf7b2484adcabed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aced15249a054f9aa0bd37b603656d5ab28c8867c20590acf7b2484adcabed6->enter($__internal_2aced15249a054f9aa0bd37b603656d5ab28c8867c20590acf7b2484adcabed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2aced15249a054f9aa0bd37b603656d5ab28c8867c20590acf7b2484adcabed6->leave($__internal_2aced15249a054f9aa0bd37b603656d5ab28c8867c20590acf7b2484adcabed6_prof);

        
        $__internal_32c7ee2753dee73727a8c1ad14407f0dc49e850bda0e9d0d13af234ab2c0edcd->leave($__internal_32c7ee2753dee73727a8c1ad14407f0dc49e850bda0e9d0d13af234ab2c0edcd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
