<?php

/* public/index.html.twig */
class __TwigTemplate_dfcda413078d63a3c75b048f923b4c66c126eb0b0a8ce4958146d833fc79133d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <main class=\"main_index\">
    <form action=\"/\" method=\"post\" id=\"formFilter\">

      <!-- FILTROS -->
      <section class=\"filtrar_eventos_index transition_activated unselectable\" id=\"menu_lateral_filtrar\">
        <div class=\"filtros_categoria_ciudad\">
          <article class=\"filtro_categoria\">
            <span id=\"filtrar_por_categoria\"><i class=\"fa fa-object-ungroup\"></i>Cateor&iacute;as<i>&#8250;</i></span>
            <ul>
              <li><input type=\"checkbox\" id=\"c_all\" name=\"c_all\"><label for=\"c_all\">Todas las categorías</label></li>
              <!-- Foreach categorias -->
              ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["globalParams"] ?? null), "categorias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 18
            echo "                <li><input type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, ("c_" . twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "getId", array(), "method")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ("c_" . twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "getId", array(), "method")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "getNombre", array(), "method"), "html", null, true);
            echo "\"><label for=\"";
            echo twig_escape_filter($this->env, ("c_" . twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "getId", array(), "method")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "getNombre", array(), "method"), "html", null, true);
            echo "</label></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "              <!-- END Foreach categorias -->
            </ul>
          </article>
          <article class=\"filtro_ciudad\">
            <span id=\"filtrar_por_ciudad\"><i class=\"fa fa-map-marker\"></i>Ciudad<i>&#8250;</i></span>
            <ul>
              <li><input type=\"checkbox\" id=\"p_all\" name=\"p_all\"><label for=\"p_all\">Todas las ciudades</label></li>
              <!-- Foreach Provincias -->
              ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["globalParams"] ?? null), "provincias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["prov"]) {
            // line 29
            echo "                <li><input type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, ("p_" . twig_get_attribute($this->env, $this->getSourceContext(), $context["prov"], "getId", array(), "method")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ("p_" . twig_get_attribute($this->env, $this->getSourceContext(), $context["prov"], "getId", array(), "method")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["prov"], "getNombre", array(), "method"), "html", null, true);
            echo "\"><label for=\"";
            echo twig_escape_filter($this->env, ("p_" . twig_get_attribute($this->env, $this->getSourceContext(), $context["prov"], "getId", array(), "method")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["prov"], "getNombre", array(), "method"), "html", null, true);
            echo "</label></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prov'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "              <!-- END Foreach Provincias -->
            </ul>
          </article>
        </div>

        <article class=\"filtro_fecha\">
          <span><i class=\"fa fa-calendar-check-o\"></i>Filtrar por fecha</span>
          <ul>
            <li><input type=\"radio\" id=\"f_all\" name=\"f_filter\" value=\"f_all\"><label for=\"f_all\">Todas las fechas</label></li>
            <li><input type=\"radio\" id=\"f_tomorrow\" name=\"f_filter\" value=\"f_tomorrow\"><label for=\"f_tomorrow\">Ma&ntilde;ana</label></li>
            <li><input type=\"radio\" id=\"f_this_week\" name=\"f_filter\" value=\"f_this_week\"><label for=\"f_this_week\">Esta semana</label></li>
            <li><input type=\"radio\" id=\"f_this_weekend\" name=\"f_filter\" value=\"f_this_weekend\"><label for=\"f_this_weekend\">Este fin de semana</label></li>
            <li><input type=\"radio\" id=\"f_this_month\" name=\"f_filter\" value=\"f_this_month\"><label for=\"f_this_month\">Este mes</label></li>
          </ul>
        </article>

        <article class=\"filtro_buscar\">
          <label for=\"buscador\"><i class=\"fa fa-search\"></i>Buscar</label>
          <div class=\"buscador\">
            <input type=\"search\" id=\"buscador\" name=\"busqueda\" placeholder=\"Buscar eventos\" value=\"";
        // line 50
        echo "\">
            <i class=\"fa fa-rocket\"></i>
            <input type=\"submit\" value=\"\">
          </div>
        </article>
      </section>

      <!-- TARJETAS -->
      <div class=\"bloque_contenedor clearfix\">

        <section class=\"titulo_index\">
          <h1>Explora nuestros eventos</h1>
        </section>

        <section class=\"eventos_index\">

          ";
        // line 67
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 68
            echo "
          <article class=\"evento_index\">
            <div class=\"img_evento_index\">
              ";
            // line 71
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "imagen", array(), "array"))) {
                // line 72
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/evento/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "imagen", array(), "array"))), "html", null, true);
                echo "\" alt=\"\">
              ";
            } else {
                // line 74
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/evento/default.jpg"), "html", null, true);
                echo "\" alt=\"\">
              ";
            }
            // line 76
            echo "
            </div>
            <div class=\"contenido_evento_index\">
              ";
            // line 79
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fk_usuario", array(), "array"), "imagen", array(), "array"))) {
                // line 80
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/perfil/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fk_usuario", array(), "array"), "imagen", array(), "array"))), "html", null, true);
                echo "\" alt=\"\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fk_usuario", array(), "array"), "username", array(), "array"), "html", null, true);
                echo "\">
              ";
            } else {
                // line 82
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/perfil/default.png"), "html", null, true);
                echo "\" alt=\"\" title=\"default\">
              ";
            }
            // line 84
            echo "              <div class=\"info_evento_index\">
                <div class=\"titulo_evento_index\">
                  <h2 title=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "titulo", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "titulo", array(), "array"), "html", null, true);
            echo "</h2>
                </div>
                <div class=\"posicionar_info_evento\">
                  <div class=\"fecha_evento_index\">
                    <span>";
            // line 90
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fecha_celebracion", array(), "array"), "d-m-Y"), "html", null, true);
            echo "</span>
                  </div>
                  <div class=\"localizacion_evento_index\">
                    <span title=\"\"><i class=\"fa fa-map-marker\"></i>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "direccion", array(), "array"), "html", null, true);
            echo "</span>
                  </div>
                  <div class=\"mas_informacion_evento\">
                    <a href=\"/eventos/";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array(), "array"), "html", null, true);
            echo "\">Más información...</a>
                  </div>
                </div>
                <div class=\"precio_evento_index\">
                  <span>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "precio_entradas", array(), "array"), "html", null, true);
            echo "€</span>
                </div>
                <div class=\"comprar_entrada\"><a href=\"/entradas/comprar/";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array(), "array"), "html", null, true);
            echo "\">Comprar entradas</a></div>
              </div>
              ";
            // line 104
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fk_usuario", array(), "array"), "id", array(), "array")))) {
                // line 105
                echo "                <div class=\"editar_evento\"><a href=\"/gestor/form_evento/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array(), "array"), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></div>
              ";
            }
            // line 107
            echo "            </div>
          </article>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
        </section>


      </div>

    </form>
  </main>

";
    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        // line 122
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "public/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 123,  262 => 122,  259 => 121,  246 => 110,  238 => 107,  232 => 105,  230 => 104,  225 => 102,  220 => 100,  213 => 96,  207 => 93,  201 => 90,  192 => 86,  188 => 84,  182 => 82,  174 => 80,  172 => 79,  167 => 76,  161 => 74,  155 => 72,  153 => 71,  148 => 68,  143 => 67,  125 => 50,  104 => 31,  87 => 29,  83 => 28,  73 => 20,  56 => 18,  52 => 17,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/index.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\index.html.twig");
    }
}
