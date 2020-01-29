<?php

/* public/detalles_evento.html.twig */
class __TwigTemplate_bcc5e38a2618c54495c2432c761f48ee939ccc1231042d6f924935c49dcddc63 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Detalles evento";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <main class=\"main_detalles_evento\">
    <section class=\"detalles_evento_izq\">
      <div class=\"img_detalles_evento\">
        ";
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "imagen", array(), "array"))) {
            // line 10
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/evento/" . twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "imagen", array(), "array"))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/evento/" . twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "imagen", array(), "array"))), "html", null, true);
        echo "\" alt=\"\">
        ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "enlace_externo", array(), "array"))) {
            // line 17
            echo "        <div class=\"enlace_ofocial_detalles_evento2\">
          <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "enlace_externo", array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-angle-left\"></i></a>
        <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "entradas_restantes", array(), "array"), "html", null, true);
        echo "</span><span>/</span><span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "total_entradas", array(), "array"), "html", null, true);
        echo "</span><sub>Entradas restantes</sub>
      </div>

      <div class=\"fecha_inicio_fin_detalles_evento\">
        <span>&#191;Cuándo puedes comprar tus entradas&#63;</span>
        <span>Desde el ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "venta_fecha_inicio", array(), "array"), "d-m-Y"), "html", null, true);
        echo " <br>Hasta el ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "venta_fecha_fin", array(), "array"), "d-m-Y"), "html", null, true);
        echo "</span>
      </div>

      <div class=\"comprar_entradas_desde_detalles_evento\">

        <a href=\"/entradas/comprar/";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "id", array(), "array"), "html", null, true);
        echo "\">Comprar entradas</a>
      </div>

      <div class=\"info_gestor_detalles_evento\">
        <div class=\"ir_a_eventos_gestor_detalles_evento\">
          <a href=\"";
        // line 42
        echo "\">
            ";
        // line 43
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "fk_usuario", array(), "array"), "imagen", array(), "array"))) {
            // line 44
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/perfil/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "fk_usuario", array(), "array"), "imagen", array(), "array"))), "html", null, true);
            echo "\" alt=\"\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "fk_usuario", array(), "array"), "username", array(), "array"), "html", null, true);
            echo "\">
            ";
        } else {
            // line 46
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/perfil/default.png"), "html", null, true);
            echo "\" alt=\"\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "fk_usuario", array(), "array"), "username", array(), "array"), "html", null, true);
            echo "\">
            ";
        }
        // line 48
        echo "          </a>
        </div>

        <a href=\"";
        // line 51
        echo "\">
          <i class=\"fa fa-comment-o\" title=\"Contactar con ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "fk_usuario", array(), "array"), "username", array(), "array"), "html", null, true);
        echo "\"></i>
        </a>
      </div>

      ";
        // line 56
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "enlace_externo", array(), "array"))) {
            // line 57
            echo "      <div class=\"enlace_ofocial_detalles_evento\">
        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "enlace_externo", array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "titulo", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "titulo", array(), "array"), "html", null, true);
        echo "</h1>
          </div>

          <div class=\"localizacion_detalles_evento\">
            <span title=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "direccion", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "direccion", array(), "array"), "html", null, true);
        echo "</span>
          </div>

          <div class=\"descripcion_detalle_evento\">
            <p>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "descripcion", array(), "array"), "html", null, true);
        echo "</p>
          </div>

          <div class=\"fecha_celebracion_detalles_evento\">
            <span>";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "fecha_celebracion", array(), "array"), "d-m-Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "hora_celebracion", array(), "array"), "H:i"), "html", null, true);
        echo "h</span>
          </div>

          <div class=\"precio_detalles_evento\">
            <span>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["event"] ?? null), "precio_entradas", array(), "array"), "html", null, true);
        echo "€</span>
          </div>

        </div>
      </article>
    </section>

  </main>
";
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
        return array (  209 => 89,  200 => 85,  193 => 81,  184 => 77,  175 => 73,  163 => 63,  155 => 58,  152 => 57,  150 => 56,  143 => 52,  140 => 51,  135 => 48,  127 => 46,  119 => 44,  117 => 43,  114 => 42,  106 => 37,  96 => 32,  86 => 27,  82 => 26,  77 => 23,  69 => 18,  66 => 17,  64 => 16,  60 => 15,  57 => 14,  51 => 12,  45 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/detalles_evento.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\detalles_evento.html.twig");
    }
}
