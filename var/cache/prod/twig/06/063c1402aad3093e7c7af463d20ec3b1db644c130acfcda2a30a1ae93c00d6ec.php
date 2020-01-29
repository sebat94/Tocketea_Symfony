<?php

/* base.html.twig */
class __TwigTemplate_0018a3275f40a5c9df063e54a6a43cfd215737da0ac201f9ef1d35cceef93083 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        // line 15
        echo "
    <header class=\"cabecera\">
      <div class=\"cabecera_izq unselectable\">
        ";
        // line 19
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "tocketea_eventos")) {
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array())) {
            // line 26
            echo "          ";
            if ((json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "roles", array())) == "[\"ROLE_COMPRADOR\"]")) {
                // line 27
                echo "            ";
                $this->loadTemplate("private/headers/navegacion_comprador.html.twig", "base.html.twig", 27)->display($context);
                // line 28
                echo "          ";
            } elseif ((json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "roles", array())) == "[\"ROLE_GESTOR\"]")) {
                // line 29
                echo "            ";
                $this->loadTemplate("private/headers/navegacion_gestor.html.twig", "base.html.twig", 29)->display($context);
                // line 30
                echo "          ";
            } elseif ((json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "roles", array())) == "[\"ROLE_ADMINISTRADOR\"]")) {
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
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/global.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  147 => 42,  142 => 40,  136 => 36,  133 => 35,  130 => 34,  127 => 33,  124 => 32,  121 => 31,  118 => 30,  115 => 29,  112 => 28,  109 => 27,  106 => 26,  104 => 25,  99 => 22,  95 => 20,  91 => 19,  86 => 15,  83 => 14,  77 => 9,  73 => 8,  68 => 7,  65 => 6,  60 => 5,  53 => 45,  51 => 42,  48 => 41,  46 => 40,  43 => 39,  41 => 14,  36 => 11,  34 => 6,  30 => 5,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\base.html.twig");
    }
}
