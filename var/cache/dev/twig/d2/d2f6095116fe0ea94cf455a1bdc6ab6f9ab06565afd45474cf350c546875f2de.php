<?php

/* public/login.html.twig */
class __TwigTemplate_29dfe0dc16b3d5977b63a48031207af80e0a2c5da293dfe7b55a0b3d11b23097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/login.html.twig", 1);
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
        $__internal_caa2f8d453ef4f3eb59825d47785bb1962596b185e67a119cabd158623cff5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa2f8d453ef4f3eb59825d47785bb1962596b185e67a119cabd158623cff5d9->enter($__internal_caa2f8d453ef4f3eb59825d47785bb1962596b185e67a119cabd158623cff5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/login.html.twig"));

        $__internal_dbac301ec1b46eb6bb292522835061ef450a0d7576896bdcda81d166f8310dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbac301ec1b46eb6bb292522835061ef450a0d7576896bdcda81d166f8310dfa->enter($__internal_dbac301ec1b46eb6bb292522835061ef450a0d7576896bdcda81d166f8310dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa2f8d453ef4f3eb59825d47785bb1962596b185e67a119cabd158623cff5d9->leave($__internal_caa2f8d453ef4f3eb59825d47785bb1962596b185e67a119cabd158623cff5d9_prof);

        
        $__internal_dbac301ec1b46eb6bb292522835061ef450a0d7576896bdcda81d166f8310dfa->leave($__internal_dbac301ec1b46eb6bb292522835061ef450a0d7576896bdcda81d166f8310dfa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5abd415de05f49dbb908d273d9ae75f63ee73cdc8aff26b4a3b12758278ac255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abd415de05f49dbb908d273d9ae75f63ee73cdc8aff26b4a3b12758278ac255->enter($__internal_5abd415de05f49dbb908d273d9ae75f63ee73cdc8aff26b4a3b12758278ac255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61e6335b7dcc2d6f208d3654087f7ae10cc99919605007aea157a23d9684531e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e6335b7dcc2d6f208d3654087f7ae10cc99919605007aea157a23d9684531e->enter($__internal_61e6335b7dcc2d6f208d3654087f7ae10cc99919605007aea157a23d9684531e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceder";
        
        $__internal_61e6335b7dcc2d6f208d3654087f7ae10cc99919605007aea157a23d9684531e->leave($__internal_61e6335b7dcc2d6f208d3654087f7ae10cc99919605007aea157a23d9684531e_prof);

        
        $__internal_5abd415de05f49dbb908d273d9ae75f63ee73cdc8aff26b4a3b12758278ac255->leave($__internal_5abd415de05f49dbb908d273d9ae75f63ee73cdc8aff26b4a3b12758278ac255_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a884b8e31ee02ae3effc8eef5329d73e3e2f5d64b87013aecc621697c04a270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a884b8e31ee02ae3effc8eef5329d73e3e2f5d64b87013aecc621697c04a270->enter($__internal_0a884b8e31ee02ae3effc8eef5329d73e3e2f5d64b87013aecc621697c04a270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f160549cc06e6c42ca5b68d12f36135f74229236a7d0a39ebd632e9f6c010576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f160549cc06e6c42ca5b68d12f36135f74229236a7d0a39ebd632e9f6c010576->enter($__internal_f160549cc06e6c42ca5b68d12f36135f74229236a7d0a39ebd632e9f6c010576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


          <section class=\"ir_registro\" id=\"info_registro\">
            <h2>&#191;No tienes una cuenta&#63;</h2>
            <p>Date del alta ahora y disfruta de todas las ventajas que te ofrecemos en Tocketea.</p>
            <div class=\"btn_ir_registro\" id=\"btn_ir_registro\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_registro");
        echo "\">Reg&iacute;strate</a></div>
          </section>

          <section class=\"ir_login\" id=\"info_login\"></section>


          <section class=\"form_login_registro mover_carta_a_login\" id=\"carta_login_registro\">

            <!-- FORMULARIO LOGIN -->
            <article class=\"contenido_login\" id=\"form_login\">
              <h1>Login</h1>
              ";
        // line 32
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 32, $this->getSourceContext()); })())) {
            // line 33
            echo "                <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 33, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 33, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
              ";
        }
        // line 35
        echo "              <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_login");
        echo "\" method=\"post\">

                <div class=\"login_email\">
                  <input type=\"text\" placeholder=\"Email\" name=\"_username\" id=\"username\" tabindex=\"1\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required>
                  <i class=\"fa fa-envelope\"></i>
                </div>
                <div class=\"login_password\">
                  <input type=\"password\" placeholder=\"Contrase&ntilde;a\" name=\"_password\" id=\"password\" tabindex=\"2\" required>
                  <i class=\"fa fa-lock\"></i>
                </div>

                <div class=\"login_enviar\">
                  <a href=\"#\">Recuperar contrase&ntilde;a</a>
                  <input type=\"submit\" tabindex=\"3\" value=\"LOGIN\">
                </div>

                <div class=\"ir_registro2\" id=\"ir_registro2\"><span>Reg&iacute;strate</span></div>

              </form>
            </article>
            <!-- FIN FORMULARIO LOGIN -->

          </section><!-- form_login_registro -->
        </article><!-- info_login_registro -->

      </div><!-- bloque_contenedor -->
    </div><!-- contenedor_login_registro -->
  </section><!-- login_registro -->

";
        
        $__internal_f160549cc06e6c42ca5b68d12f36135f74229236a7d0a39ebd632e9f6c010576->leave($__internal_f160549cc06e6c42ca5b68d12f36135f74229236a7d0a39ebd632e9f6c010576_prof);

        
        $__internal_0a884b8e31ee02ae3effc8eef5329d73e3e2f5d64b87013aecc621697c04a270->leave($__internal_0a884b8e31ee02ae3effc8eef5329d73e3e2f5d64b87013aecc621697c04a270_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30db43082f08d5816c79db4f3b528df56b2240591845c8ce014f56b9d213a7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30db43082f08d5816c79db4f3b528df56b2240591845c8ce014f56b9d213a7cd->enter($__internal_30db43082f08d5816c79db4f3b528df56b2240591845c8ce014f56b9d213a7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1957f3cc2332cbd62d4fdeac053595425e7b1410a86e693b75ec71a58231915c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1957f3cc2332cbd62d4fdeac053595425e7b1410a86e693b75ec71a58231915c->enter($__internal_1957f3cc2332cbd62d4fdeac053595425e7b1410a86e693b75ec71a58231915c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_1957f3cc2332cbd62d4fdeac053595425e7b1410a86e693b75ec71a58231915c->leave($__internal_1957f3cc2332cbd62d4fdeac053595425e7b1410a86e693b75ec71a58231915c_prof);

        
        $__internal_30db43082f08d5816c79db4f3b528df56b2240591845c8ce014f56b9d213a7cd->leave($__internal_30db43082f08d5816c79db4f3b528df56b2240591845c8ce014f56b9d213a7cd_prof);

    }

    public function getTemplateName()
    {
        return "public/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 67,  155 => 66,  118 => 38,  111 => 35,  105 => 33,  103 => 32,  89 => 21,  74 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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


          <section class=\"ir_registro\" id=\"info_registro\">
            <h2>&#191;No tienes una cuenta&#63;</h2>
            <p>Date del alta ahora y disfruta de todas las ventajas que te ofrecemos en Tocketea.</p>
            <div class=\"btn_ir_registro\" id=\"btn_ir_registro\"><a href=\"{{ path('tocketea_registro') }}\">Reg&iacute;strate</a></div>
          </section>

          <section class=\"ir_login\" id=\"info_login\"></section>


          <section class=\"form_login_registro mover_carta_a_login\" id=\"carta_login_registro\">

            <!-- FORMULARIO LOGIN -->
            <article class=\"contenido_login\" id=\"form_login\">
              <h1>Login</h1>
              {% if error %}
                <div class=\"text-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
              {% endif %}
              <form action=\"{{ path('tocketea_login') }}\" method=\"post\">

                <div class=\"login_email\">
                  <input type=\"text\" placeholder=\"Email\" name=\"_username\" id=\"username\" tabindex=\"1\" value=\"{{ last_username }}\" required>
                  <i class=\"fa fa-envelope\"></i>
                </div>
                <div class=\"login_password\">
                  <input type=\"password\" placeholder=\"Contrase&ntilde;a\" name=\"_password\" id=\"password\" tabindex=\"2\" required>
                  <i class=\"fa fa-lock\"></i>
                </div>

                <div class=\"login_enviar\">
                  <a href=\"#\">Recuperar contrase&ntilde;a</a>
                  <input type=\"submit\" tabindex=\"3\" value=\"LOGIN\">
                </div>

                <div class=\"ir_registro2\" id=\"ir_registro2\"><span>Reg&iacute;strate</span></div>

              </form>
            </article>
            <!-- FIN FORMULARIO LOGIN -->

          </section><!-- form_login_registro -->
        </article><!-- info_login_registro -->

      </div><!-- bloque_contenedor -->
    </div><!-- contenedor_login_registro -->
  </section><!-- login_registro -->

{% endblock %}

{% block javascripts %}
  {{ parent() }}
{% endblock %}", "public/login.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\login.html.twig");
    }
}
