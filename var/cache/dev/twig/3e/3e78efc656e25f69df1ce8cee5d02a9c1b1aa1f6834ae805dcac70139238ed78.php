<?php

/* private/perfil.html.twig */
class __TwigTemplate_1f4cb018dfd1049727f0bab62aed935dbbca4bd092fda7928ffca0e77e77740f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "private/perfil.html.twig", 1);
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
        $__internal_b854abd007448bc15cf3ed0fb21af7b2ce25ca90e9984a109c76b31485a1c0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b854abd007448bc15cf3ed0fb21af7b2ce25ca90e9984a109c76b31485a1c0f7->enter($__internal_b854abd007448bc15cf3ed0fb21af7b2ce25ca90e9984a109c76b31485a1c0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/perfil.html.twig"));

        $__internal_31fcab6c412a0b3bf5e1690bce5012ab3abd6a7916a4b690c74aa05b30f92547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31fcab6c412a0b3bf5e1690bce5012ab3abd6a7916a4b690c74aa05b30f92547->enter($__internal_31fcab6c412a0b3bf5e1690bce5012ab3abd6a7916a4b690c74aa05b30f92547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/perfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b854abd007448bc15cf3ed0fb21af7b2ce25ca90e9984a109c76b31485a1c0f7->leave($__internal_b854abd007448bc15cf3ed0fb21af7b2ce25ca90e9984a109c76b31485a1c0f7_prof);

        
        $__internal_31fcab6c412a0b3bf5e1690bce5012ab3abd6a7916a4b690c74aa05b30f92547->leave($__internal_31fcab6c412a0b3bf5e1690bce5012ab3abd6a7916a4b690c74aa05b30f92547_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94473359df122bad473882410a782e696ca0c83594574459e5357c35bf69240b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94473359df122bad473882410a782e696ca0c83594574459e5357c35bf69240b->enter($__internal_94473359df122bad473882410a782e696ca0c83594574459e5357c35bf69240b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_493843d41df76b24c0c9f604121b60878c394a23aee69c5664e857af30344257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493843d41df76b24c0c9f604121b60878c394a23aee69c5664e857af30344257->enter($__internal_493843d41df76b24c0c9f604121b60878c394a23aee69c5664e857af30344257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Perfil";
        
        $__internal_493843d41df76b24c0c9f604121b60878c394a23aee69c5664e857af30344257->leave($__internal_493843d41df76b24c0c9f604121b60878c394a23aee69c5664e857af30344257_prof);

        
        $__internal_94473359df122bad473882410a782e696ca0c83594574459e5357c35bf69240b->leave($__internal_94473359df122bad473882410a782e696ca0c83594574459e5357c35bf69240b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8265c42ba34476e7a19c64aa04710624850303af8028c1ebe038ec541f5b6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8265c42ba34476e7a19c64aa04710624850303af8028c1ebe038ec541f5b6ac->enter($__internal_c8265c42ba34476e7a19c64aa04710624850303af8028c1ebe038ec541f5b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87bd00dc3a2831caf6385ab774c7e3be4cc76655a40372772e24776d7c1c7a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bd00dc3a2831caf6385ab774c7e3be4cc76655a40372772e24776d7c1c7a85->enter($__internal_87bd00dc3a2831caf6385ab774c7e3be4cc76655a40372772e24776d7c1c7a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <main class=\"main_perfil\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"section_perfil_1\">
        <div class=\"img_perfil\">
          ";
        // line 11
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "user", array()), "getImagen", array()))) {
            // line 12
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/perfil/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "user", array()), "getImagen", array()))), "html", null, true);
            echo "\" alt=\"\">
          ";
        } else {
            // line 14
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/perfil/default.png"), "html", null, true);
            echo "\" alt=\"\">
          ";
        }
        // line 16
        echo "        </div>
        <div class=\"info_section_perfil_1\">
          <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "</span>
          <span>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "user", array()), "email", array()), "html", null, true);
        echo "</span>
        </div>
        <span>Idioma: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "user", array()), "idioma", array()), "html", null, true);
        echo "</span>
      </section>

      <section class=\"section_perfil_2\">
        <h1>Actualizar datos de usuario</h1>

          ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'form_start');
        echo "

          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "imagen", array()), 'row');
        echo "
          ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "password", array()), 'row');
        echo "

          ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_end');
        echo "

        </section>

    </div>
  </main>
";
        
        $__internal_87bd00dc3a2831caf6385ab774c7e3be4cc76655a40372772e24776d7c1c7a85->leave($__internal_87bd00dc3a2831caf6385ab774c7e3be4cc76655a40372772e24776d7c1c7a85_prof);

        
        $__internal_c8265c42ba34476e7a19c64aa04710624850303af8028c1ebe038ec541f5b6ac->leave($__internal_c8265c42ba34476e7a19c64aa04710624850303af8028c1ebe038ec541f5b6ac_prof);

    }

    public function getTemplateName()
    {
        return "private/perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  120 => 30,  116 => 29,  111 => 27,  102 => 21,  97 => 19,  93 => 18,  89 => 16,  83 => 14,  77 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Perfil{% endblock %}

{% block body %}
  <main class=\"main_perfil\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"section_perfil_1\">
        <div class=\"img_perfil\">
          {% if app.user.getImagen is not null %}
            <img src=\"{{ asset('img/perfil/'~app.user.getImagen) }}\" alt=\"\">
          {% else %}
            <img src=\"{{ asset('img/perfil/default.png') }}\" alt=\"\">
          {% endif %}
        </div>
        <div class=\"info_section_perfil_1\">
          <span>{{ app.user.username }}</span>
          <span>{{ app.user.email }}</span>
        </div>
        <span>Idioma: {{ app.user.idioma }}</span>
      </section>

      <section class=\"section_perfil_2\">
        <h1>Actualizar datos de usuario</h1>

          {{ form_start(form) }}

          {{ form_row(form.imagen) }}
          {{ form_row(form.password) }}

          {{ form_end(form) }}

        </section>

    </div>
  </main>
{% endblock %}", "private/perfil.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\perfil.html.twig");
    }
}
