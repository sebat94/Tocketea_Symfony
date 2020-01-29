<?php

/* public/index.html.twig */
class __TwigTemplate_3e7929ae3516be5528b40ba793d00389a8365c229a1d6e16763460b169d8f82f extends Twig_Template
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
        $__internal_44778e72caaef5bf7c3aba3356f7b2de2a897e16459aa9451eca6fd616c279a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44778e72caaef5bf7c3aba3356f7b2de2a897e16459aa9451eca6fd616c279a1->enter($__internal_44778e72caaef5bf7c3aba3356f7b2de2a897e16459aa9451eca6fd616c279a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/index.html.twig"));

        $__internal_346e71aa636781bc49b52e13bc07c10bd7048c2cb8ff89ddef8aa7de623facc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346e71aa636781bc49b52e13bc07c10bd7048c2cb8ff89ddef8aa7de623facc0->enter($__internal_346e71aa636781bc49b52e13bc07c10bd7048c2cb8ff89ddef8aa7de623facc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44778e72caaef5bf7c3aba3356f7b2de2a897e16459aa9451eca6fd616c279a1->leave($__internal_44778e72caaef5bf7c3aba3356f7b2de2a897e16459aa9451eca6fd616c279a1_prof);

        
        $__internal_346e71aa636781bc49b52e13bc07c10bd7048c2cb8ff89ddef8aa7de623facc0->leave($__internal_346e71aa636781bc49b52e13bc07c10bd7048c2cb8ff89ddef8aa7de623facc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d92e2c9442c7f52ff525e29338709f5afaacab50f045ffb6967e99c88be2cd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92e2c9442c7f52ff525e29338709f5afaacab50f045ffb6967e99c88be2cd24->enter($__internal_d92e2c9442c7f52ff525e29338709f5afaacab50f045ffb6967e99c88be2cd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ad32252a44aee8e6d1a4de1df06428c4104b776c97b226fb8fd6101389669c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad32252a44aee8e6d1a4de1df06428c4104b776c97b226fb8fd6101389669c8->enter($__internal_1ad32252a44aee8e6d1a4de1df06428c4104b776c97b226fb8fd6101389669c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_1ad32252a44aee8e6d1a4de1df06428c4104b776c97b226fb8fd6101389669c8->leave($__internal_1ad32252a44aee8e6d1a4de1df06428c4104b776c97b226fb8fd6101389669c8_prof);

        
        $__internal_d92e2c9442c7f52ff525e29338709f5afaacab50f045ffb6967e99c88be2cd24->leave($__internal_d92e2c9442c7f52ff525e29338709f5afaacab50f045ffb6967e99c88be2cd24_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_02a0f9c0a74bb14774ff4fd7edeef24539007783846b1fb95ffdd01810586dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a0f9c0a74bb14774ff4fd7edeef24539007783846b1fb95ffdd01810586dcd->enter($__internal_02a0f9c0a74bb14774ff4fd7edeef24539007783846b1fb95ffdd01810586dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90f80a0443c57a85ce97be17237c06b99d724bef91ea51a62996fd26e42a0451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f80a0443c57a85ce97be17237c06b99d724bef91ea51a62996fd26e42a0451->enter($__internal_90f80a0443c57a85ce97be17237c06b99d724bef91ea51a62996fd26e42a0451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <main class=\"main_index\">


      <!-- FILTROS -->
      <section class=\"filtrar_eventos_index transition_activated unselectable\" id=\"menu_lateral_filtrar\">
        <form action=\"/\" method=\"post\" id=\"formFilter\">
          <div class=\"filtros_categoria_ciudad\">

            <article class=\"filtro_categoria\">
              <span id=\"filtrar_por_categoria\"><i class=\"fa fa-object-ungroup\"></i>Cateor&iacute;as<i>&#8250;</i></span>
              <ul>
                <li><input type=\"checkbox\" id=\"c_all\" name=\"c_all\"><label for=\"c_all\">Todas las categorías</label></li>
                <!-- Foreach categorias -->
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["globalParams"]) || array_key_exists("globalParams", $context) ? $context["globalParams"] : (function () { throw new Twig_Error_Runtime('Variable "globalParams" does not exist.', 19, $this->getSourceContext()); })()), "categorias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 20
            echo "                  <li><input type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, ("c_" . twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "getId", array(), "method")), "html", null, true);
            echo "\" name=\"categoria\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "getId", array(), "method"), "html", null, true);
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
        // line 22
        echo "                <!-- END Foreach categorias -->
              </ul>
            </article>
            <article class=\"filtro_ciudad\">
              <span id=\"filtrar_por_ciudad\"><i class=\"fa fa-map-marker\"></i>Ciudad<i>&#8250;</i></span>
              <ul>
                <li><input type=\"checkbox\" id=\"p_all\" name=\"p_all\"><label for=\"p_all\">Todas las ciudades</label></li>
                <!-- Foreach Provincias -->
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["globalParams"]) || array_key_exists("globalParams", $context) ? $context["globalParams"] : (function () { throw new Twig_Error_Runtime('Variable "globalParams" does not exist.', 30, $this->getSourceContext()); })()), "provincias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["prov"]) {
            // line 31
            echo "                  <li><input type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, ("p_" . twig_get_attribute($this->env, $this->getSourceContext(), $context["prov"], "getId", array(), "method")), "html", null, true);
            echo "\" name=\"provincia\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["prov"], "getId", array(), "method"), "html", null, true);
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
        // line 33
        echo "                <!-- END Foreach Provincias -->
              </ul>
            </article>

          </div>

          <article class=\"filtro_fecha\">
              <span><i class=\"fa fa-calendar-check-o\"></i>Filtrar por fecha</span>
              <ul>
                <li><input type=\"radio\" id=\"f_all\" name=\"fecha\" value=\"f_all\"><label for=\"f_all\">Todas las fechas</label></li>
                <li><input type=\"radio\" id=\"f_tomorrow\" name=\"fecha\" value=\"f_tomorrow\"><label for=\"f_tomorrow\">Ma&ntilde;ana</label></li>
                <li><input type=\"radio\" id=\"f_this_week\" name=\"fecha\" value=\"f_this_week\"><label for=\"f_this_week\">Esta semana</label></li>
                <li><input type=\"radio\" id=\"f_this_weekend\" name=\"fecha\" value=\"f_this_weekend\"><label for=\"f_this_weekend\">Este fin de semana</label></li>
                <li><input type=\"radio\" id=\"f_this_month\" name=\"fecha\" value=\"f_this_month\"><label for=\"f_this_month\">Este mes</label></li>
              </ul>
          </article>
        </form>
        <form action=\"/\" method=\"post\" id=\"formFilter\">
          <article class=\"filtro_buscar\">
            <label for=\"buscador\"><i class=\"fa fa-search\"></i>Buscar</label>
            <div class=\"buscador\">
              <input type=\"search\" id=\"buscador\" name=\"busqueda\" placeholder=\"Buscar eventos\" value=\"";
        // line 54
        echo "\">
              <i class=\"fa fa-rocket\"></i>
              <input type=\"submit\" value=\"\">
            </div>
          </article>
        </form>
      </section>

      <!-- TARJETAS -->
      <div class=\"bloque_contenedor clearfix\">

        <section class=\"titulo_index\">
          <h1>Explora nuestros eventos</h1>
        </section>

        <section class=\"eventos_index\">

          ";
        // line 72
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 72, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 73
            echo "
          <article class=\"evento_index\">
            <div class=\"img_evento_index\">
              ";
            // line 76
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "imagen", array(), "array"))) {
                // line 77
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/evento/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "imagen", array(), "array"))), "html", null, true);
                echo "\" alt=\"\">
              ";
            } else {
                // line 79
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/evento/default.jpg"), "html", null, true);
                echo "\" alt=\"\">
              ";
            }
            // line 81
            echo "
            </div>
            <div class=\"contenido_evento_index\">
              ";
            // line 84
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fk_usuario", array(), "array"), "imagen", array(), "array"))) {
                // line 85
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/perfil/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fk_usuario", array(), "array"), "imagen", array(), "array"))), "html", null, true);
                echo "\" alt=\"\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fk_usuario", array(), "array"), "username", array(), "array"), "html", null, true);
                echo "\">
              ";
            } else {
                // line 87
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/perfil/default.png"), "html", null, true);
                echo "\" alt=\"\" title=\"default\">
              ";
            }
            // line 89
            echo "              <div class=\"info_evento_index\">
                <div class=\"titulo_evento_index\">
                  <h2 title=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "titulo", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "titulo", array(), "array"), "html", null, true);
            echo "</h2>
                </div>
                <div class=\"posicionar_info_evento\">
                  <div class=\"fecha_evento_index\">
                    <span>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fecha_celebracion", array(), "array"), "d-m-Y"), "html", null, true);
            echo "</span>
                  </div>
                  <div class=\"localizacion_evento_index\">
                    <span title=\"\"><i class=\"fa fa-map-marker\"></i>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "direccion", array(), "array"), "html", null, true);
            echo "</span>
                  </div>
                  <div class=\"mas_informacion_evento\">
                    <a href=\"/eventos/";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array(), "array"), "html", null, true);
            echo "\">Más información...</a>
                  </div>
                </div>
                <div class=\"precio_evento_index\">
                  <span>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "precio_entradas", array(), "array"), "html", null, true);
            echo "€</span>
                </div>
                <div class=\"comprar_entrada\"><a href=\"/entradas/comprar/";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array(), "array"), "html", null, true);
            echo "\">Comprar entradas</a></div>
              </div>
              ";
            // line 109
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->getSourceContext()); })()), "user", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->getSourceContext()); })()), "user", array()), "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "fk_usuario", array(), "array"), "id", array(), "array")))) {
                // line 110
                echo "                <div class=\"editar_evento\"><a href=\"/gestor/form_evento/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array(), "array"), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></div>
              ";
            }
            // line 112
            echo "            </div>
          </article>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
        </section>


      </div>


  </main>

";
        
        $__internal_90f80a0443c57a85ce97be17237c06b99d724bef91ea51a62996fd26e42a0451->leave($__internal_90f80a0443c57a85ce97be17237c06b99d724bef91ea51a62996fd26e42a0451_prof);

        
        $__internal_02a0f9c0a74bb14774ff4fd7edeef24539007783846b1fb95ffdd01810586dcd->leave($__internal_02a0f9c0a74bb14774ff4fd7edeef24539007783846b1fb95ffdd01810586dcd_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25b79f295ebf3149fa5a990d52f2726bbee93b2fa455f51f2144a5b800344a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b79f295ebf3149fa5a990d52f2726bbee93b2fa455f51f2144a5b800344a03->enter($__internal_25b79f295ebf3149fa5a990d52f2726bbee93b2fa455f51f2144a5b800344a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6824c24822b823212bdad1c52f55403595b9d2a916909dd095058d5764ade178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6824c24822b823212bdad1c52f55403595b9d2a916909dd095058d5764ade178->enter($__internal_6824c24822b823212bdad1c52f55403595b9d2a916909dd095058d5764ade178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6824c24822b823212bdad1c52f55403595b9d2a916909dd095058d5764ade178->leave($__internal_6824c24822b823212bdad1c52f55403595b9d2a916909dd095058d5764ade178_prof);

        
        $__internal_25b79f295ebf3149fa5a990d52f2726bbee93b2fa455f51f2144a5b800344a03->leave($__internal_25b79f295ebf3149fa5a990d52f2726bbee93b2fa455f51f2144a5b800344a03_prof);

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
        return array (  310 => 128,  305 => 127,  296 => 126,  277 => 115,  269 => 112,  263 => 110,  261 => 109,  256 => 107,  251 => 105,  244 => 101,  238 => 98,  232 => 95,  223 => 91,  219 => 89,  213 => 87,  205 => 85,  203 => 84,  198 => 81,  192 => 79,  186 => 77,  184 => 76,  179 => 73,  174 => 72,  155 => 54,  132 => 33,  117 => 31,  113 => 30,  103 => 22,  88 => 20,  84 => 19,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
  <main class=\"main_index\">


      <!-- FILTROS -->
      <section class=\"filtrar_eventos_index transition_activated unselectable\" id=\"menu_lateral_filtrar\">
        <form action=\"/\" method=\"post\" id=\"formFilter\">
          <div class=\"filtros_categoria_ciudad\">

            <article class=\"filtro_categoria\">
              <span id=\"filtrar_por_categoria\"><i class=\"fa fa-object-ungroup\"></i>Cateor&iacute;as<i>&#8250;</i></span>
              <ul>
                <li><input type=\"checkbox\" id=\"c_all\" name=\"c_all\"><label for=\"c_all\">Todas las categorías</label></li>
                <!-- Foreach categorias -->
                {% for cat in globalParams.categorias %}
                  <li><input type=\"checkbox\" id=\"{{ 'c_'~cat.getId() }}\" name=\"categoria\" value=\"{{ cat.getId() }}\"><label for=\"{{ 'c_'~cat.getId() }}\">{{ cat.getNombre() }}</label></li>
                {% endfor %}
                <!-- END Foreach categorias -->
              </ul>
            </article>
            <article class=\"filtro_ciudad\">
              <span id=\"filtrar_por_ciudad\"><i class=\"fa fa-map-marker\"></i>Ciudad<i>&#8250;</i></span>
              <ul>
                <li><input type=\"checkbox\" id=\"p_all\" name=\"p_all\"><label for=\"p_all\">Todas las ciudades</label></li>
                <!-- Foreach Provincias -->
                {% for prov in globalParams.provincias %}
                  <li><input type=\"checkbox\" id=\"{{ 'p_'~prov.getId() }}\" name=\"provincia\" value=\"{{ prov.getId() }}\"><label for=\"{{ 'p_'~prov.getId() }}\">{{ prov.getNombre() }}</label></li>
                {% endfor %}
                <!-- END Foreach Provincias -->
              </ul>
            </article>

          </div>

          <article class=\"filtro_fecha\">
              <span><i class=\"fa fa-calendar-check-o\"></i>Filtrar por fecha</span>
              <ul>
                <li><input type=\"radio\" id=\"f_all\" name=\"fecha\" value=\"f_all\"><label for=\"f_all\">Todas las fechas</label></li>
                <li><input type=\"radio\" id=\"f_tomorrow\" name=\"fecha\" value=\"f_tomorrow\"><label for=\"f_tomorrow\">Ma&ntilde;ana</label></li>
                <li><input type=\"radio\" id=\"f_this_week\" name=\"fecha\" value=\"f_this_week\"><label for=\"f_this_week\">Esta semana</label></li>
                <li><input type=\"radio\" id=\"f_this_weekend\" name=\"fecha\" value=\"f_this_weekend\"><label for=\"f_this_weekend\">Este fin de semana</label></li>
                <li><input type=\"radio\" id=\"f_this_month\" name=\"fecha\" value=\"f_this_month\"><label for=\"f_this_month\">Este mes</label></li>
              </ul>
          </article>
        </form>
        <form action=\"/\" method=\"post\" id=\"formFilter\">
          <article class=\"filtro_buscar\">
            <label for=\"buscador\"><i class=\"fa fa-search\"></i>Buscar</label>
            <div class=\"buscador\">
              <input type=\"search\" id=\"buscador\" name=\"busqueda\" placeholder=\"Buscar eventos\" value=\"{# if (isset(\$_POST['busqueda'])) echo \$_POST['busqueda']; #}\">
              <i class=\"fa fa-rocket\"></i>
              <input type=\"submit\" value=\"\">
            </div>
          </article>
        </form>
      </section>

      <!-- TARJETAS -->
      <div class=\"bloque_contenedor clearfix\">

        <section class=\"titulo_index\">
          <h1>Explora nuestros eventos</h1>
        </section>

        <section class=\"eventos_index\">

          {# Foreach #}
          {% for event in events %}

          <article class=\"evento_index\">
            <div class=\"img_evento_index\">
              {% if event['imagen'] is not null %}
                <img src=\"{{ asset('img/evento/'~event['imagen']) }}\" alt=\"\">
              {% else %}
                <img src=\"{{ asset('img/evento/default.jpg') }}\" alt=\"\">
              {% endif %}

            </div>
            <div class=\"contenido_evento_index\">
              {% if event['fk_usuario']['imagen'] is not null %}
                <img src=\"{{ asset('img/perfil/'~event['fk_usuario']['imagen']) }}\" alt=\"\" title=\"{{ event['fk_usuario']['username'] }}\">
              {% else %}
                <img src=\"{{ asset('img/perfil/default.png') }}\" alt=\"\" title=\"default\">
              {% endif %}
              <div class=\"info_evento_index\">
                <div class=\"titulo_evento_index\">
                  <h2 title=\"{{ event['titulo'] }}\">{{ event['titulo'] }}</h2>
                </div>
                <div class=\"posicionar_info_evento\">
                  <div class=\"fecha_evento_index\">
                    <span>{{ event['fecha_celebracion'] | date('d-m-Y') }}</span>
                  </div>
                  <div class=\"localizacion_evento_index\">
                    <span title=\"\"><i class=\"fa fa-map-marker\"></i>{{ event['direccion'] }}</span>
                  </div>
                  <div class=\"mas_informacion_evento\">
                    <a href=\"/eventos/{{ event['id'] }}\">Más información...</a>
                  </div>
                </div>
                <div class=\"precio_evento_index\">
                  <span>{{ event['precio_entradas'] }}€</span>
                </div>
                <div class=\"comprar_entrada\"><a href=\"/entradas/comprar/{{ event['id'] }}\">Comprar entradas</a></div>
              </div>
              {% if app.user is not empty and app.user.id == event['fk_usuario']['id'] %}
                <div class=\"editar_evento\"><a href=\"/gestor/form_evento/{{ event['id'] }}\"><i class=\"fa fa-edit\"></i></a></div>
              {% endif %}
            </div>
          </article>
          {% endfor %}

        </section>


      </div>


  </main>

{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script type=\"text/javascript\" src=\"{{ asset('js/index.js') }}\"></script>
{% endblock %}", "public/index.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\index.html.twig");
    }
}
