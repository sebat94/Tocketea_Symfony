<?php

/* private/comprar.html.twig */
class __TwigTemplate_4bc6bd7103af07f63c915d638e059b9706dd52ef5cea51eb37713cfadf2b3131 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Mis eventos";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  <main class=\"main_comprar_entradas\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"section_comprar_entradas\">

        ";
        // line 12
        if ((array_key_exists("ok", $context) && ($context["ok"] ?? null))) {
            // line 13
            echo "            <p class=\"comprar_entradas_success_message\">Ya tienes tus entradas compradas!</p>
        ";
        } else {
            // line 15
            echo "            <p class=\"comprar_entradas_error_message\">";
            if (array_key_exists("mensajeError", $context)) {
                echo twig_escape_filter($this->env, ($context["mensajeError"] ?? null), "html", null, true);
            }
            echo "</p>
        ";
        }
        // line 17
        echo "
        <article class=\"article_comprar_entradas clearfix\">
          <form action=\"/entradas/comprar/";
        // line 19
        echo twig_escape_filter($this->env, ($context["idEvento"] ?? null), "html", null, true);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()))) {
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
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"/js/comprar_entradas.js\"></script>
";
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
        return array (  120 => 58,  117 => 57,  111 => 53,  103 => 48,  97 => 45,  91 => 41,  89 => 40,  65 => 19,  61 => 17,  53 => 15,  49 => 13,  47 => 12,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "private/comprar.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\comprar.html.twig");
    }
}
