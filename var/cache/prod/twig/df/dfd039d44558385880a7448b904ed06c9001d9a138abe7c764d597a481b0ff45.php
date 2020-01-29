<?php

/* public/registro.html.twig */
class __TwigTemplate_4e326f9642b975ce308a725483b515f7d32bb2f6d71905911c689ccc91e9c3a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/registro.html.twig", 1);
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


          <section class=\"ir_registro\" id=\"info_registro\"></section>

          <section class=\"ir_login\" id=\"info_login\">
            <h2>&#191;Tienes una cuenta&#63;</h2>
            <p>A que esperas para entrar y seguir disfrutando de tus eventos favoritos en Tocketea.</p>
            <div class=\"btn_ir_login\" id=\"btn_ir_login\"><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_login");
        echo "\">Login</a></div>
          </section>


          <section class=\"form_login_registro\" id=\"carta_login_registro\">

            <!-- FORMULARIO REGISTRO -->
            <article class=\"contenido_registro mover_carta_a_registro\" id=\"form_registro\">
              <h1>Registro</h1>


              ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "

                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

              ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


            </article>
            <!-- FIN FORMULARIO REGISTRO -->

          </section><!-- form_login_registro -->
        </article><!-- info_login_registro -->

      </div><!-- bloque_contenedor -->
    </div><!-- contenedor_login_registro -->
  </section><!-- login_registro -->

";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login_registro.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "public/registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 56,  110 => 55,  107 => 54,  89 => 39,  84 => 37,  80 => 36,  75 => 34,  61 => 23,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/registro.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\registro.html.twig");
    }
}
