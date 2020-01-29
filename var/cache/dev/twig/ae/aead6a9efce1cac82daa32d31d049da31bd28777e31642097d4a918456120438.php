<?php

/* public/registro.html.twig */
class __TwigTemplate_c7d6efeffb2081069e770dce47bb2e206b0be80dfb0107ce3d4799bbb0c7835e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/registro.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eec55fcf2abe75545c347ebbff915312ac730e9610cb713ed0e6273ab460e053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec55fcf2abe75545c347ebbff915312ac730e9610cb713ed0e6273ab460e053->enter($__internal_eec55fcf2abe75545c347ebbff915312ac730e9610cb713ed0e6273ab460e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/registro.html.twig"));

        $__internal_40391027c6c61f8030d2f6b2807ca42301232a122420abdf5c727cd51df1cfc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40391027c6c61f8030d2f6b2807ca42301232a122420abdf5c727cd51df1cfc9->enter($__internal_40391027c6c61f8030d2f6b2807ca42301232a122420abdf5c727cd51df1cfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec55fcf2abe75545c347ebbff915312ac730e9610cb713ed0e6273ab460e053->leave($__internal_eec55fcf2abe75545c347ebbff915312ac730e9610cb713ed0e6273ab460e053_prof);

        
        $__internal_40391027c6c61f8030d2f6b2807ca42301232a122420abdf5c727cd51df1cfc9->leave($__internal_40391027c6c61f8030d2f6b2807ca42301232a122420abdf5c727cd51df1cfc9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a573a475873c06f8485e9b58daacba07563bb2e6e5dab79bc87310fe75402aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a573a475873c06f8485e9b58daacba07563bb2e6e5dab79bc87310fe75402aa->enter($__internal_4a573a475873c06f8485e9b58daacba07563bb2e6e5dab79bc87310fe75402aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe4866175ac0d24e75a18aee95da8d3c2a3f366de2aa7960cd97c302ed169dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4866175ac0d24e75a18aee95da8d3c2a3f366de2aa7960cd97c302ed169dff->enter($__internal_fe4866175ac0d24e75a18aee95da8d3c2a3f366de2aa7960cd97c302ed169dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceder";
        
        $__internal_fe4866175ac0d24e75a18aee95da8d3c2a3f366de2aa7960cd97c302ed169dff->leave($__internal_fe4866175ac0d24e75a18aee95da8d3c2a3f366de2aa7960cd97c302ed169dff_prof);

        
        $__internal_4a573a475873c06f8485e9b58daacba07563bb2e6e5dab79bc87310fe75402aa->leave($__internal_4a573a475873c06f8485e9b58daacba07563bb2e6e5dab79bc87310fe75402aa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9606fbdc13ac9524f8306c72f8ca8d2b0c29a36168a3135f61e8b223bc930844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9606fbdc13ac9524f8306c72f8ca8d2b0c29a36168a3135f61e8b223bc930844->enter($__internal_9606fbdc13ac9524f8306c72f8ca8d2b0c29a36168a3135f61e8b223bc930844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8c46e37d6578d28cad9247c17095f324d89e13fb06e3c4f7f6476e224743234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c46e37d6578d28cad9247c17095f324d89e13fb06e3c4f7f6476e224743234->enter($__internal_e8c46e37d6578d28cad9247c17095f324d89e13fb06e3c4f7f6476e224743234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <section class=\"login_registro\">

    <div class=\"img_login_registro\">
      <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/web/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
    </div>

    <div class=\"contenedor_login_registro\">
      <div class=\"bloque_contenedor\">

        <article class=\"info_login_registro\">


          <section class=\"ir_registro\" id=\"info_registro\"></section>

          <section class=\"ir_login\" id=\"info_login\">
            <h2>&#191;Tienes una cuenta&#63;</h2>
            <p>A que esperas para entrar y seguir disfrutando de tus eventos favoritos en Tocketea.</p>
            <div class=\"btn_ir_login\" id=\"btn_ir_login\"><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_login");
        echo "\">Login</a></div>
          </section>


          <section class=\"form_login_registro\" id=\"carta_login_registro\">

            <!-- FORMULARIO REGISTRO -->
            <article class=\"contenido_registro mover_carta_a_registro\" id=\"form_registro\">
              <h1>Registro</h1>


              ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "

                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), 'widget');
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
        echo "

              ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'form_end');
        echo "


            </article>
            <!-- FIN FORMULARIO REGISTRO -->

          </section><!-- form_login_registro -->
        </article><!-- info_login_registro -->

      </div><!-- bloque_contenedor -->
    </div><!-- contenedor_login_registro -->
  </section><!-- login_registro -->

";
        
        $__internal_e8c46e37d6578d28cad9247c17095f324d89e13fb06e3c4f7f6476e224743234->leave($__internal_e8c46e37d6578d28cad9247c17095f324d89e13fb06e3c4f7f6476e224743234_prof);

        
        $__internal_9606fbdc13ac9524f8306c72f8ca8d2b0c29a36168a3135f61e8b223bc930844->leave($__internal_9606fbdc13ac9524f8306c72f8ca8d2b0c29a36168a3135f61e8b223bc930844_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7089a74c2c5e8872a9a02c70ef1f4a0524973f42b2937ec372ba25e1ca38cec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7089a74c2c5e8872a9a02c70ef1f4a0524973f42b2937ec372ba25e1ca38cec6->enter($__internal_7089a74c2c5e8872a9a02c70ef1f4a0524973f42b2937ec372ba25e1ca38cec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0f3be7fd3d472811a9c13474c63899f029e57b14342404607d317e01edb3fa74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3be7fd3d472811a9c13474c63899f029e57b14342404607d317e01edb3fa74->enter($__internal_0f3be7fd3d472811a9c13474c63899f029e57b14342404607d317e01edb3fa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login_registro.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0f3be7fd3d472811a9c13474c63899f029e57b14342404607d317e01edb3fa74->leave($__internal_0f3be7fd3d472811a9c13474c63899f029e57b14342404607d317e01edb3fa74_prof);

        
        $__internal_7089a74c2c5e8872a9a02c70ef1f4a0524973f42b2937ec372ba25e1ca38cec6->leave($__internal_7089a74c2c5e8872a9a02c70ef1f4a0524973f42b2937ec372ba25e1ca38cec6_prof);

    }

    public function getTemplateName()
    {
        return "public/registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  152 => 55,  143 => 54,  119 => 39,  114 => 37,  110 => 36,  105 => 34,  91 => 23,  74 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Acceder{% endblock %}

{% block body %}
  <section class=\"login_registro\">

    <div class=\"img_login_registro\">
      <img src=\"{{ asset('img/web/1.jpg') }}\" alt=\"\">
    </div>

    <div class=\"contenedor_login_registro\">
      <div class=\"bloque_contenedor\">

        <article class=\"info_login_registro\">


          <section class=\"ir_registro\" id=\"info_registro\"></section>

          <section class=\"ir_login\" id=\"info_login\">
            <h2>&#191;Tienes una cuenta&#63;</h2>
            <p>A que esperas para entrar y seguir disfrutando de tus eventos favoritos en Tocketea.</p>
            <div class=\"btn_ir_login\" id=\"btn_ir_login\"><a href=\"{{ path('tocketea_login') }}\">Login</a></div>
          </section>


          <section class=\"form_login_registro\" id=\"carta_login_registro\">

            <!-- FORMULARIO REGISTRO -->
            <article class=\"contenido_registro mover_carta_a_registro\" id=\"form_registro\">
              <h1>Registro</h1>


              {{ form( form , {'attr': {'novalidate': 'novalidate'}}) }}

                {{ form_widget(form) }}
                {{ form_errors(form) }}

              {{ form_end(form) }}


            </article>
            <!-- FIN FORMULARIO REGISTRO -->

          </section><!-- form_login_registro -->
        </article><!-- info_login_registro -->

      </div><!-- bloque_contenedor -->
    </div><!-- contenedor_login_registro -->
  </section><!-- login_registro -->

{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script type=\"text/javascript\" src=\"{{ asset('js/login_registro.js') }}\"></script>
{% endblock %}", "public/registro.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\registro.html.twig");
    }
}
