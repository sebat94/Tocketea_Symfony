<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_f6f40a42e115ea531b9a2f382f8d5d02787f2f218d48b96d625b964869f058d1 extends Twig_Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array())) {
            // line 2
            echo "at ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "class", array()) . twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "type", array())) . twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), "")) : (""))) &&  !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array()), "")) : (""))))) {
            // line 5
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array()))), array((" at line " . twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array())) => ""));
            echo ":";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array());
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array())) ? (")") : (""));
        }
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  28 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/trace.txt.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
