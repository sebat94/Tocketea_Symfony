<?php

/* private/comprar.html.twig */
class __TwigTemplate_e517e997714c2d595342740cd71fb872e2cb85c4c2687487fd730252e02bcf9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "private/comprar.html.twig", 1);
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
        $__internal_6dc9326c3ef816d7f6614ccdd7e10ca541c3441ad6c7133b242c2ab40e4f00e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc9326c3ef816d7f6614ccdd7e10ca541c3441ad6c7133b242c2ab40e4f00e5->enter($__internal_6dc9326c3ef816d7f6614ccdd7e10ca541c3441ad6c7133b242c2ab40e4f00e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/comprar.html.twig"));

        $__internal_b429f8bdf347e61e843d1979b46c9230211369e45708e879ee943a3060ec92fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b429f8bdf347e61e843d1979b46c9230211369e45708e879ee943a3060ec92fb->enter($__internal_b429f8bdf347e61e843d1979b46c9230211369e45708e879ee943a3060ec92fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/comprar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc9326c3ef816d7f6614ccdd7e10ca541c3441ad6c7133b242c2ab40e4f00e5->leave($__internal_6dc9326c3ef816d7f6614ccdd7e10ca541c3441ad6c7133b242c2ab40e4f00e5_prof);

        
        $__internal_b429f8bdf347e61e843d1979b46c9230211369e45708e879ee943a3060ec92fb->leave($__internal_b429f8bdf347e61e843d1979b46c9230211369e45708e879ee943a3060ec92fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bfe1fe79a9ce6f86bd0f8d1150cf8e40c4953f77c211f7aad9cd7a4787aafce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfe1fe79a9ce6f86bd0f8d1150cf8e40c4953f77c211f7aad9cd7a4787aafce->enter($__internal_7bfe1fe79a9ce6f86bd0f8d1150cf8e40c4953f77c211f7aad9cd7a4787aafce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f80a57fe097e45652476901c91ac8cfd299463b5e8e47d3c9a2a02f52b75027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f80a57fe097e45652476901c91ac8cfd299463b5e8e47d3c9a2a02f52b75027->enter($__internal_5f80a57fe097e45652476901c91ac8cfd299463b5e8e47d3c9a2a02f52b75027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mis eventos";
        
        $__internal_5f80a57fe097e45652476901c91ac8cfd299463b5e8e47d3c9a2a02f52b75027->leave($__internal_5f80a57fe097e45652476901c91ac8cfd299463b5e8e47d3c9a2a02f52b75027_prof);

        
        $__internal_7bfe1fe79a9ce6f86bd0f8d1150cf8e40c4953f77c211f7aad9cd7a4787aafce->leave($__internal_7bfe1fe79a9ce6f86bd0f8d1150cf8e40c4953f77c211f7aad9cd7a4787aafce_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce013652fd5a0e21c47baa7c6b20c293c2f39ffbe370aa5a96cbe74b6587c9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce013652fd5a0e21c47baa7c6b20c293c2f39ffbe370aa5a96cbe74b6587c9d4->enter($__internal_ce013652fd5a0e21c47baa7c6b20c293c2f39ffbe370aa5a96cbe74b6587c9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4881ff4f3207df88d32ae693edd24d18ffceb397f95173c9e8bb1dd25bc92862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4881ff4f3207df88d32ae693edd24d18ffceb397f95173c9e8bb1dd25bc92862->enter($__internal_4881ff4f3207df88d32ae693edd24d18ffceb397f95173c9e8bb1dd25bc92862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <main class=\"main_comprar_entradas\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"section_comprar_entradas\">

        ";
        // line 12
        if ((array_key_exists("ok", $context) && (isset($context["ok"]) || array_key_exists("ok", $context) ? $context["ok"] : (function () { throw new Twig_Error_Runtime('Variable "ok" does not exist.', 12, $this->getSourceContext()); })()))) {
            // line 13
            echo "            <p class=\"comprar_entradas_success_message\">Ya tienes tus entradas compradas!</p>
        ";
        } else {
            // line 15
            echo "            <p class=\"comprar_entradas_error_message\">";
            if (array_key_exists("mensajeError", $context)) {
                echo twig_escape_filter($this->env, (isset($context["mensajeError"]) || array_key_exists("mensajeError", $context) ? $context["mensajeError"] : (function () { throw new Twig_Error_Runtime('Variable "mensajeError" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            }
            echo "</p>
        ";
        }
        // line 17
        echo "
        <article class=\"article_comprar_entradas clearfix\">
          <form action=\"/entradas/comprar/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["idEvento"]) || array_key_exists("idEvento", $context) ? $context["idEvento"] : (function () { throw new Twig_Error_Runtime('Variable "idEvento" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"post\" id=\"form_comprar_entradas\">

            <div class=\"sumar_restar_entradas\">
              <label for=\"numero_entradas\">Uds. Tickets</label>
              <input type=\"text\" value=\"0\" name=\"numero_entradas\" id=\"input_numero_entradas\">
              <button type=\"button\" id=\"restarEntrada\"><a href=\"#\">-</a></button>
              <button type=\"button\" id=\"sumarEntrada\"><a href=\"#\">+</a></button>
            </div>

            <div class=\"btn_comprar_entradas\">
              <input type=\"submit\" value=\"Comprar entradas\">
            </div>

          </form>
        </article>
      </section>

    </div>
  </main>

  <!-- Modal -->
  ";
        // line 40
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "user", array()))) {
            // line 41
            echo "    <div class=\"modal_preguntar_log\">
      <div class=\"info_preguntar_log clearfix\">
        <span>Necesitas estar registrado para comprar tus entradas</span>
        <div class=\"btn_ir_login_desde_comprar\">
          <a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_login");
            echo "\">Login</a>
        </div>
        <div class=\"btn_ir_registro_desde_comprar\">
          <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_registro");
            echo "\">Registro</a>
        </div>
      </div>
    </div>
  ";
        }
        // line 53
        echo "

";
        
        $__internal_4881ff4f3207df88d32ae693edd24d18ffceb397f95173c9e8bb1dd25bc92862->leave($__internal_4881ff4f3207df88d32ae693edd24d18ffceb397f95173c9e8bb1dd25bc92862_prof);

        
        $__internal_ce013652fd5a0e21c47baa7c6b20c293c2f39ffbe370aa5a96cbe74b6587c9d4->leave($__internal_ce013652fd5a0e21c47baa7c6b20c293c2f39ffbe370aa5a96cbe74b6587c9d4_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fba645c7844e0859d896ea2818ba5c697544e5c7332792490ac4038135239976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba645c7844e0859d896ea2818ba5c697544e5c7332792490ac4038135239976->enter($__internal_fba645c7844e0859d896ea2818ba5c697544e5c7332792490ac4038135239976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_80bede924a5b21ab5ee3b9ba739bd7d6991858a32dee9005cc4273979e730357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bede924a5b21ab5ee3b9ba739bd7d6991858a32dee9005cc4273979e730357->enter($__internal_80bede924a5b21ab5ee3b9ba739bd7d6991858a32dee9005cc4273979e730357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"/js/comprar_entradas.js\"></script>
";
        
        $__internal_80bede924a5b21ab5ee3b9ba739bd7d6991858a32dee9005cc4273979e730357->leave($__internal_80bede924a5b21ab5ee3b9ba739bd7d6991858a32dee9005cc4273979e730357_prof);

        
        $__internal_fba645c7844e0859d896ea2818ba5c697544e5c7332792490ac4038135239976->leave($__internal_fba645c7844e0859d896ea2818ba5c697544e5c7332792490ac4038135239976_prof);

    }

    public function getTemplateName()
    {
        return "private/comprar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 58,  153 => 57,  141 => 53,  133 => 48,  127 => 45,  121 => 41,  119 => 40,  95 => 19,  91 => 17,  83 => 15,  79 => 13,  77 => 12,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Mis eventos{% endblock %}

{% block body %}

  <main class=\"main_comprar_entradas\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"section_comprar_entradas\">

        {% if ok is defined and ok %}
            <p class=\"comprar_entradas_success_message\">Ya tienes tus entradas compradas!</p>
        {% else %}
            <p class=\"comprar_entradas_error_message\">{% if mensajeError is defined %}{{ mensajeError }}{% endif %}</p>
        {% endif %}

        <article class=\"article_comprar_entradas clearfix\">
          <form action=\"/entradas/comprar/{{ idEvento }}\" method=\"post\" id=\"form_comprar_entradas\">

            <div class=\"sumar_restar_entradas\">
              <label for=\"numero_entradas\">Uds. Tickets</label>
              <input type=\"text\" value=\"0\" name=\"numero_entradas\" id=\"input_numero_entradas\">
              <button type=\"button\" id=\"restarEntrada\"><a href=\"#\">-</a></button>
              <button type=\"button\" id=\"sumarEntrada\"><a href=\"#\">+</a></button>
            </div>

            <div class=\"btn_comprar_entradas\">
              <input type=\"submit\" value=\"Comprar entradas\">
            </div>

          </form>
        </article>
      </section>

    </div>
  </main>

  <!-- Modal -->
  {% if app.user is empty %}
    <div class=\"modal_preguntar_log\">
      <div class=\"info_preguntar_log clearfix\">
        <span>Necesitas estar registrado para comprar tus entradas</span>
        <div class=\"btn_ir_login_desde_comprar\">
          <a href=\"{{ path('tocketea_login') }}\">Login</a>
        </div>
        <div class=\"btn_ir_registro_desde_comprar\">
          <a href=\"{{ path('tocketea_registro') }}\">Registro</a>
        </div>
      </div>
    </div>
  {% endif %}


{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script type=\"text/javascript\" src=\"/js/comprar_entradas.js\"></script>
{% endblock %}", "private/comprar.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\comprar.html.twig");
    }
}
