<?php

/* base.html.twig */
class __TwigTemplate_cbd4704fdca4b5b09664ada55471663c285fd74736f904d59f6447046e1d911a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2180f2e2189e55ab2ff731c49c9c4fc19e1c2c3c9df765f8a21a10d1604bcd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2180f2e2189e55ab2ff731c49c9c4fc19e1c2c3c9df765f8a21a10d1604bcd9f->enter($__internal_2180f2e2189e55ab2ff731c49c9c4fc19e1c2c3c9df765f8a21a10d1604bcd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b99655bc910f6405c010e03b9ee35a871a03cfda0e963eb2d2dc1d017be3891f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99655bc910f6405c010e03b9ee35a871a03cfda0e963eb2d2dc1d017be3891f->enter($__internal_b99655bc910f6405c010e03b9ee35a871a03cfda0e963eb2d2dc1d017be3891f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body>

  ";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "
  ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
</body>
</html>
";
        
        $__internal_2180f2e2189e55ab2ff731c49c9c4fc19e1c2c3c9df765f8a21a10d1604bcd9f->leave($__internal_2180f2e2189e55ab2ff731c49c9c4fc19e1c2c3c9df765f8a21a10d1604bcd9f_prof);

        
        $__internal_b99655bc910f6405c010e03b9ee35a871a03cfda0e963eb2d2dc1d017be3891f->leave($__internal_b99655bc910f6405c010e03b9ee35a871a03cfda0e963eb2d2dc1d017be3891f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a763f29d49570f0b136d1297c7f0493652ca21a3b72ffa7b76a7a43b820c86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a763f29d49570f0b136d1297c7f0493652ca21a3b72ffa7b76a7a43b820c86d->enter($__internal_0a763f29d49570f0b136d1297c7f0493652ca21a3b72ffa7b76a7a43b820c86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f61d7bdb26367465ac1b4112c8cf7f9b40c436c913c722efb5d179466f64adf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61d7bdb26367465ac1b4112c8cf7f9b40c436c913c722efb5d179466f64adf6->enter($__internal_f61d7bdb26367465ac1b4112c8cf7f9b40c436c913c722efb5d179466f64adf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f61d7bdb26367465ac1b4112c8cf7f9b40c436c913c722efb5d179466f64adf6->leave($__internal_f61d7bdb26367465ac1b4112c8cf7f9b40c436c913c722efb5d179466f64adf6_prof);

        
        $__internal_0a763f29d49570f0b136d1297c7f0493652ca21a3b72ffa7b76a7a43b820c86d->leave($__internal_0a763f29d49570f0b136d1297c7f0493652ca21a3b72ffa7b76a7a43b820c86d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0cc2801644cd31cfa74d77ed2f898c9548d695e3ba278082ce71637fff56935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cc2801644cd31cfa74d77ed2f898c9548d695e3ba278082ce71637fff56935->enter($__internal_f0cc2801644cd31cfa74d77ed2f898c9548d695e3ba278082ce71637fff56935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6632af2c6d94259b5838f2b562f5399921336d684335c6ff0c76bd9ff7d8757e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6632af2c6d94259b5838f2b562f5399921336d684335c6ff0c76bd9ff7d8757e->enter($__internal_6632af2c6d94259b5838f2b562f5399921336d684335c6ff0c76bd9ff7d8757e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/global.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_6632af2c6d94259b5838f2b562f5399921336d684335c6ff0c76bd9ff7d8757e->leave($__internal_6632af2c6d94259b5838f2b562f5399921336d684335c6ff0c76bd9ff7d8757e_prof);

        
        $__internal_f0cc2801644cd31cfa74d77ed2f898c9548d695e3ba278082ce71637fff56935->leave($__internal_f0cc2801644cd31cfa74d77ed2f898c9548d695e3ba278082ce71637fff56935_prof);

    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7bc1e8153a451d630485eb42236b8a1f0cd1d3aff4060c92c9b274732754cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bc1e8153a451d630485eb42236b8a1f0cd1d3aff4060c92c9b274732754cbb->enter($__internal_d7bc1e8153a451d630485eb42236b8a1f0cd1d3aff4060c92c9b274732754cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_063a6592861d48e45587f7a8950c590cf7d95e4e5d109ed5ab399fddfedc9f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063a6592861d48e45587f7a8950c590cf7d95e4e5d109ed5ab399fddfedc9f2b->enter($__internal_063a6592861d48e45587f7a8950c590cf7d95e4e5d109ed5ab399fddfedc9f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 15
        echo "
    <header class=\"cabecera\">
      <div class=\"cabecera_izq unselectable\">
        ";
        // line 19
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route"), "method") == "tocketea_eventos")) {
            echo "  ";
            // line 20
            echo "          <button type=\"button\" id=\"btn_filtros\"><span></span><span></span><span></span></button>
        ";
        }
        // line 22
        echo "        <h1><a href=\"/\">Tocketea</a></h1>
      </div>

      ";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->getSourceContext()); })()), "user", array())) {
            // line 26
            echo "          ";
            if ((json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "user", array()), "roles", array())) == "[\"ROLE_COMPRADOR\"]")) {
                // line 27
                echo "            ";
                $this->loadTemplate("private/headers/navegacion_comprador.html.twig", "base.html.twig", 27)->display($context);
                // line 28
                echo "          ";
            } elseif ((json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->getSourceContext()); })()), "user", array()), "roles", array())) == "[\"ROLE_GESTOR\"]")) {
                // line 29
                echo "            ";
                $this->loadTemplate("private/headers/navegacion_gestor.html.twig", "base.html.twig", 29)->display($context);
                // line 30
                echo "          ";
            } elseif ((json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->getSourceContext()); })()), "user", array()), "roles", array())) == "[\"ROLE_ADMINISTRADOR\"]")) {
                // line 31
                echo "            ";
                $this->loadTemplate("private/headers/navegacion_administrador.html.twig", "base.html.twig", 31)->display($context);
                // line 32
                echo "          ";
            }
            // line 33
            echo "      ";
        } else {
            // line 34
            echo "          ";
            $this->loadTemplate("public/headers/navegacion_anonimos.html.twig", "base.html.twig", 34)->display($context);
            // line 35
            echo "      ";
        }
        // line 36
        echo "
    </header>
  ";
        
        $__internal_063a6592861d48e45587f7a8950c590cf7d95e4e5d109ed5ab399fddfedc9f2b->leave($__internal_063a6592861d48e45587f7a8950c590cf7d95e4e5d109ed5ab399fddfedc9f2b_prof);

        
        $__internal_d7bc1e8153a451d630485eb42236b8a1f0cd1d3aff4060c92c9b274732754cbb->leave($__internal_d7bc1e8153a451d630485eb42236b8a1f0cd1d3aff4060c92c9b274732754cbb_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a0ea69a720a9a1b901468e578cbcca7b55ad96c0a04e1f193355b0d39ecf9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0ea69a720a9a1b901468e578cbcca7b55ad96c0a04e1f193355b0d39ecf9ad->enter($__internal_7a0ea69a720a9a1b901468e578cbcca7b55ad96c0a04e1f193355b0d39ecf9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f3172bc01623abf61778468ac1762be2d4a0ef2b1a115b8d6f9598ab6c03907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3172bc01623abf61778468ac1762be2d4a0ef2b1a115b8d6f9598ab6c03907->enter($__internal_7f3172bc01623abf61778468ac1762be2d4a0ef2b1a115b8d6f9598ab6c03907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f3172bc01623abf61778468ac1762be2d4a0ef2b1a115b8d6f9598ab6c03907->leave($__internal_7f3172bc01623abf61778468ac1762be2d4a0ef2b1a115b8d6f9598ab6c03907_prof);

        
        $__internal_7a0ea69a720a9a1b901468e578cbcca7b55ad96c0a04e1f193355b0d39ecf9ad->leave($__internal_7a0ea69a720a9a1b901468e578cbcca7b55ad96c0a04e1f193355b0d39ecf9ad_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e0de42ab149afb434fffeab2a4476a21f6955161a73c0183709672a594790b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0de42ab149afb434fffeab2a4476a21f6955161a73c0183709672a594790b7->enter($__internal_8e0de42ab149afb434fffeab2a4476a21f6955161a73c0183709672a594790b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_92fb47acb078a50e14306ecbce7a1007708f31e96a0b20110451cd0d8a384f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fb47acb078a50e14306ecbce7a1007708f31e96a0b20110451cd0d8a384f9b->enter($__internal_92fb47acb078a50e14306ecbce7a1007708f31e96a0b20110451cd0d8a384f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/global.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_92fb47acb078a50e14306ecbce7a1007708f31e96a0b20110451cd0d8a384f9b->leave($__internal_92fb47acb078a50e14306ecbce7a1007708f31e96a0b20110451cd0d8a384f9b_prof);

        
        $__internal_8e0de42ab149afb434fffeab2a4476a21f6955161a73c0183709672a594790b7->leave($__internal_8e0de42ab149afb434fffeab2a4476a21f6955161a73c0183709672a594790b7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 43,  207 => 42,  190 => 40,  178 => 36,  175 => 35,  172 => 34,  169 => 33,  166 => 32,  163 => 31,  160 => 30,  157 => 29,  154 => 28,  151 => 27,  148 => 26,  146 => 25,  141 => 22,  137 => 20,  133 => 19,  128 => 15,  119 => 14,  107 => 9,  103 => 8,  98 => 7,  89 => 6,  72 => 5,  59 => 45,  57 => 42,  54 => 41,  52 => 40,  49 => 39,  47 => 14,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}{% endblock %}</title>
  {% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fonts.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/global.css') }}\">
  {% endblock %}
</head>
<body>

  {% block head %}

    <header class=\"cabecera\">
      <div class=\"cabecera_izq unselectable\">
        {# Si estamos en el index, mostramos la hamburguesa #}
        {% if app.request.get('_route') == 'tocketea_eventos' %}  {# Comprobar si al enviar parámetro se mantiene #}
          <button type=\"button\" id=\"btn_filtros\"><span></span><span></span><span></span></button>
        {% endif %}
        <h1><a href=\"/\">Tocketea</a></h1>
      </div>

      {% if app.user %}
          {% if app.user.roles | json_encode == '[\"ROLE_COMPRADOR\"]' %}
            {% include 'private/headers/navegacion_comprador.html.twig' %}
          {% elseif app.user.roles | json_encode == '[\"ROLE_GESTOR\"]' %}
            {% include 'private/headers/navegacion_gestor.html.twig' %}
          {% elseif app.user.roles | json_encode == '[\"ROLE_ADMINISTRADOR\"]' %}
            {% include 'private/headers/navegacion_administrador.html.twig' %}
          {% endif %}
      {% else %}
          {% include 'public/headers/navegacion_anonimos.html.twig' %}
      {% endif %}

    </header>
  {% endblock %}

  {% block body %}{% endblock %}

  {% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/global.js') }}\"></script>
  {% endblock %}

</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\base.html.twig");
    }
}
