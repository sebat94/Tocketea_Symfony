<?php

/* public/login.html.twig */
class __TwigTemplate_e2cf127471e25304e256385d06fd1aacaa7d75fc463e8ef448f60a63ccb10833 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Acceder";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        if (($context["error"] ?? null)) {
            // line 33
            echo "                <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
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
        return array (  122 => 67,  119 => 66,  88 => 38,  81 => 35,  75 => 33,  73 => 32,  59 => 21,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/login.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\login.html.twig");
    }
}
