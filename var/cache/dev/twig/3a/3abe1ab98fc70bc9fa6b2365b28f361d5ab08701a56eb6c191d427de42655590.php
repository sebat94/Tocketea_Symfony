<?php

/* public/detalles_evento.html.twig */
class __TwigTemplate_65be034967121540dbecdc1d8c8da6f84da2ce2900f04e418fa7194e90ed5fad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/detalles_evento.html.twig", 1);
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
        $__internal_d8354e2dbf76abc507c9129ca7402df729645c940d9b1fa77ca6215bb4df6d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8354e2dbf76abc507c9129ca7402df729645c940d9b1fa77ca6215bb4df6d67->enter($__internal_d8354e2dbf76abc507c9129ca7402df729645c940d9b1fa77ca6215bb4df6d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/detalles_evento.html.twig"));

        $__internal_7c14e58628e2f21352fbd778e1f4fa9ad8d8fd906e3ac81404b599913d9b1dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c14e58628e2f21352fbd778e1f4fa9ad8d8fd906e3ac81404b599913d9b1dcf->enter($__internal_7c14e58628e2f21352fbd778e1f4fa9ad8d8fd906e3ac81404b599913d9b1dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/detalles_evento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8354e2dbf76abc507c9129ca7402df729645c940d9b1fa77ca6215bb4df6d67->leave($__internal_d8354e2dbf76abc507c9129ca7402df729645c940d9b1fa77ca6215bb4df6d67_prof);

        
        $__internal_7c14e58628e2f21352fbd778e1f4fa9ad8d8fd906e3ac81404b599913d9b1dcf->leave($__internal_7c14e58628e2f21352fbd778e1f4fa9ad8d8fd906e3ac81404b599913d9b1dcf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea1bb81455ea68617652822c1360db418064f439c581960a0eada10aea5a336e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1bb81455ea68617652822c1360db418064f439c581960a0eada10aea5a336e->enter($__internal_ea1bb81455ea68617652822c1360db418064f439c581960a0eada10aea5a336e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98f0165f0f9b3885a4b3d0f272b5f9a66f45b7fe0d08e00510bc00cba961009c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f0165f0f9b3885a4b3d0f272b5f9a66f45b7fe0d08e00510bc00cba961009c->enter($__internal_98f0165f0f9b3885a4b3d0f272b5f9a66f45b7fe0d08e00510bc00cba961009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles evento";
        
        $__internal_98f0165f0f9b3885a4b3d0f272b5f9a66f45b7fe0d08e00510bc00cba961009c->leave($__internal_98f0165f0f9b3885a4b3d0f272b5f9a66f45b7fe0d08e00510bc00cba961009c_prof);

        
        $__internal_ea1bb81455ea68617652822c1360db418064f439c581960a0eada10aea5a336e->leave($__internal_ea1bb81455ea68617652822c1360db418064f439c581960a0eada10aea5a336e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fcad266627f5501351432426d5497188646fbac3f8c69f7c65c557353ebec93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcad266627f5501351432426d5497188646fbac3f8c69f7c65c557353ebec93->enter($__internal_7fcad266627f5501351432426d5497188646fbac3f8c69f7c65c557353ebec93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92aba1ea7dc56fff4d5613d9011bbed47524969bc205ef7dfad1bb4d101f01fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92aba1ea7dc56fff4d5613d9011bbed47524969bc205ef7dfad1bb4d101f01fe->enter($__internal_92aba1ea7dc56fff4d5613d9011bbed47524969bc205ef7dfad1bb4d101f01fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <main class=\"main_detalles_evento\">
    <section class=\"detalles_evento_izq\">
      <div class=\"img_detalles_evento\">
        ";
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 9, $this->getSourceContext()); })()), "imagen", array(), "array"))) {
            // line 10
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/evento/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 10, $this->getSourceContext()); })()), "imagen", array(), "array"))), "html", null, true);
            echo "\" alt=\"\">
        ";
        } else {
            // line 12
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/evento/default.jpg"), "html", null, true);
            echo "\" alt=\"\">
        ";
        }
        // line 14
        echo "
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/evento/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 15, $this->getSourceContext()); })()), "imagen", array(), "array"))), "html", null, true);
        echo "\" alt=\"\">
        ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 16, $this->getSourceContext()); })()), "enlace_externo", array(), "array"))) {
            // line 17
            echo "        <div class=\"enlace_ofocial_detalles_evento2\">
          <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 18, $this->getSourceContext()); })()), "enlace_externo", array(), "array"), "html", null, true);
            echo "\" title=\"Web oficial\">
            <i class=\" fa fa-external-link\"></i>
          </a>
        </div>
        ";
        }
        // line 23
        echo "      </div>
      <!-- Información relativa al usuario gestor que ha creado el evento en esta sección -->
      <div class=\"entradas_detalles_evento\">
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-angle-left\"></i></a>
        <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 27, $this->getSourceContext()); })()), "entradas_restantes", array(), "array"), "html", null, true);
        echo "</span><span>/</span><span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 27, $this->getSourceContext()); })()), "total_entradas", array(), "array"), "html", null, true);
        echo "</span><sub>Entradas restantes</sub>
      </div>

      <div class=\"fecha_inicio_fin_detalles_evento\">
        <span>&#191;Cuándo puedes comprar tus entradas&#63;</span>
        <span>Desde el ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 32, $this->getSourceContext()); })()), "venta_fecha_inicio", array(), "array"), "d-m-Y"), "html", null, true);
        echo " <br>Hasta el ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 32, $this->getSourceContext()); })()), "venta_fecha_fin", array(), "array"), "d-m-Y"), "html", null, true);
        echo "</span>
      </div>

      <div class=\"comprar_entradas_desde_detalles_evento\">

        <a href=\"/entradas/comprar/";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 37, $this->getSourceContext()); })()), "id", array(), "array"), "html", null, true);
        echo "\">Comprar entradas</a>
      </div>

      <div class=\"info_gestor_detalles_evento\">
        <div class=\"ir_a_eventos_gestor_detalles_evento\">
          <a href=\"/";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 42, $this->getSourceContext()); })()), "fk_usuario", array(), "array"), "id", array(), "array"), "html", null, true);
        echo "\">
            ";
        // line 43
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 43, $this->getSourceContext()); })()), "fk_usuario", array(), "array"), "imagen", array(), "array"))) {
            // line 44
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/perfil/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 44, $this->getSourceContext()); })()), "fk_usuario", array(), "array"), "imagen", array(), "array"))), "html", null, true);
            echo "\" alt=\"\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 44, $this->getSourceContext()); })()), "fk_usuario", array(), "array"), "username", array(), "array"), "html", null, true);
            echo "\">
            ";
        } else {
            // line 46
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/perfil/default.png"), "html", null, true);
            echo "\" alt=\"\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 46, $this->getSourceContext()); })()), "fk_usuario", array(), "array"), "username", array(), "array"), "html", null, true);
            echo "\">
            ";
        }
        // line 48
        echo "          </a>
        </div>

        <a href=\"#\">
          <i class=\"fa fa-comment-o\" title=\"Contactar con ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 52, $this->getSourceContext()); })()), "fk_usuario", array(), "array"), "username", array(), "array"), "html", null, true);
        echo "\"></i>
        </a>
      </div>

      ";
        // line 56
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 56, $this->getSourceContext()); })()), "enlace_externo", array(), "array"))) {
            // line 57
            echo "      <div class=\"enlace_ofocial_detalles_evento\">
        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 58, $this->getSourceContext()); })()), "enlace_externo", array(), "array"), "html", null, true);
            echo "\" title=\"Web oficial\">
          <i class=\" fa fa-external-link\"></i>
        </a>
      </div>
      ";
        }
        // line 63
        echo "    </section>



    <section class=\"detalles_evento_der\">
      <!-- Información relativa al evento en esta sección -->
      <article class=\"info_detalles_evento\">
        <div class=\"contenido_info_detalles_evento\">

          <div class=\"titulo_detalles_evento\">
            <h1 title=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 73, $this->getSourceContext()); })()), "titulo", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 73, $this->getSourceContext()); })()), "titulo", array(), "array"), "html", null, true);
        echo "</h1>
          </div>

          <div class=\"localizacion_detalles_evento\">
            <span title=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 77, $this->getSourceContext()); })()), "direccion", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 77, $this->getSourceContext()); })()), "direccion", array(), "array"), "html", null, true);
        echo "</span>
          </div>

          <div class=\"descripcion_detalle_evento\">
            <p>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 81, $this->getSourceContext()); })()), "descripcion", array(), "array"), "html", null, true);
        echo "</p>
          </div>

          <div class=\"fecha_celebracion_detalles_evento\">
            <span>";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 85, $this->getSourceContext()); })()), "fecha_celebracion", array(), "array"), "d-m-Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 85, $this->getSourceContext()); })()), "hora_celebracion", array(), "array"), "H:i"), "html", null, true);
        echo "h</span>
          </div>

          <div class=\"precio_detalles_evento\">
            <span>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 89, $this->getSourceContext()); })()), "precio_entradas", array(), "array"), "html", null, true);
        echo "€</span>
          </div>

        </div>
      </article>
    </section>

  </main>
";
        
        $__internal_92aba1ea7dc56fff4d5613d9011bbed47524969bc205ef7dfad1bb4d101f01fe->leave($__internal_92aba1ea7dc56fff4d5613d9011bbed47524969bc205ef7dfad1bb4d101f01fe_prof);

        
        $__internal_7fcad266627f5501351432426d5497188646fbac3f8c69f7c65c557353ebec93->leave($__internal_7fcad266627f5501351432426d5497188646fbac3f8c69f7c65c557353ebec93_prof);

    }

    public function getTemplateName()
    {
        return "public/detalles_evento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 89,  229 => 85,  222 => 81,  213 => 77,  204 => 73,  192 => 63,  184 => 58,  181 => 57,  179 => 56,  172 => 52,  166 => 48,  158 => 46,  150 => 44,  148 => 43,  144 => 42,  136 => 37,  126 => 32,  116 => 27,  112 => 26,  107 => 23,  99 => 18,  96 => 17,  94 => 16,  90 => 15,  87 => 14,  81 => 12,  75 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Detalles evento{% endblock %}

{% block body %}
  <main class=\"main_detalles_evento\">
    <section class=\"detalles_evento_izq\">
      <div class=\"img_detalles_evento\">
        {% if event['imagen'] is not null %}
          <img src=\"{{ asset('img/evento/'~event['imagen']) }}\" alt=\"\">
        {% else %}
          <img src=\"{{ asset('img/evento/default.jpg') }}\" alt=\"\">
        {% endif %}

        <img src=\"{{ asset('img/evento/'~event['imagen']) }}\" alt=\"\">
        {% if(event['enlace_externo'] is not empty) %}
        <div class=\"enlace_ofocial_detalles_evento2\">
          <a href=\"{{ event['enlace_externo'] }}\" title=\"Web oficial\">
            <i class=\" fa fa-external-link\"></i>
          </a>
        </div>
        {% endif %}
      </div>
      <!-- Información relativa al usuario gestor que ha creado el evento en esta sección -->
      <div class=\"entradas_detalles_evento\">
        <a href=\"{{ app.request.headers.get('referer') }}\"><i class=\"fa fa-angle-left\"></i></a>
        <span>{{ event['entradas_restantes'] }}</span><span>/</span><span>{{ event['total_entradas'] }}</span><sub>Entradas restantes</sub>
      </div>

      <div class=\"fecha_inicio_fin_detalles_evento\">
        <span>&#191;Cuándo puedes comprar tus entradas&#63;</span>
        <span>Desde el {{ event['venta_fecha_inicio'] | date('d-m-Y')  }} <br>Hasta el {{ event['venta_fecha_fin'] | date('d-m-Y')  }}</span>
      </div>

      <div class=\"comprar_entradas_desde_detalles_evento\">

        <a href=\"/entradas/comprar/{{ event['id'] }}\">Comprar entradas</a>
      </div>

      <div class=\"info_gestor_detalles_evento\">
        <div class=\"ir_a_eventos_gestor_detalles_evento\">
          <a href=\"/{{ event['fk_usuario']['id'] }}\">
            {% if event['fk_usuario']['imagen'] is not null %}
              <img src=\"{{ asset('img/perfil/'~event['fk_usuario']['imagen']) }}\" alt=\"\" title=\"{{ event['fk_usuario']['username'] }}\">
            {% else %}
              <img src=\"{{ asset('img/perfil/default.png') }}\" alt=\"\" title=\"{{ event['fk_usuario']['username'] }}\">
            {% endif %}
          </a>
        </div>

        <a href=\"#\">
          <i class=\"fa fa-comment-o\" title=\"Contactar con {{ event['fk_usuario']['username'] }}\"></i>
        </a>
      </div>

      {% if(event['enlace_externo'] is not empty) %}
      <div class=\"enlace_ofocial_detalles_evento\">
        <a href=\"{{ event['enlace_externo'] }}\" title=\"Web oficial\">
          <i class=\" fa fa-external-link\"></i>
        </a>
      </div>
      {% endif %}
    </section>



    <section class=\"detalles_evento_der\">
      <!-- Información relativa al evento en esta sección -->
      <article class=\"info_detalles_evento\">
        <div class=\"contenido_info_detalles_evento\">

          <div class=\"titulo_detalles_evento\">
            <h1 title=\"{{ event['titulo'] }}\">{{ event['titulo'] }}</h1>
          </div>

          <div class=\"localizacion_detalles_evento\">
            <span title=\"{{ event['direccion'] }}\">{{ event['direccion'] }}</span>
          </div>

          <div class=\"descripcion_detalle_evento\">
            <p>{{ event['descripcion'] }}</p>
          </div>

          <div class=\"fecha_celebracion_detalles_evento\">
            <span>{{ event['fecha_celebracion'] | date('d-m-Y')  }} - {{ event['hora_celebracion'] | date('H:i') }}h</span>
          </div>

          <div class=\"precio_detalles_evento\">
            <span>{{ event['precio_entradas'] }}€</span>
          </div>

        </div>
      </article>
    </section>

  </main>
{% endblock %}", "public/detalles_evento.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\detalles_evento.html.twig");
    }
}
