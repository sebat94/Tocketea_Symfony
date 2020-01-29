<?php

/* public/nosotros.html.twig */
class __TwigTemplate_ed4fb8fc193d5055288ed06ffa1eb8c9e737a713b639f71578b2621db3e76514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/nosotros.html.twig", 1);
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
        echo "Nosotros";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <main class=\"main_acerca_de\">
    <div class=\"bloque_contenedor clearfix\">
      <section class=\"contenido_acerca_de\">

        <h1>Quienes somos</h1>

        <article class=\"info_contenido_acerca_de\">
          <div class=\"img_info_contenido_acerca_de\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/web/7.jpg"), "html", null, true);
        echo "\" alt=\"\">
          </div>
          <div class=\"decoracion_info_contenido_acerca_de\">
            <div class=\"texto_info_contenido_acerca_de\">
              <h3>Plataforma autogestionable</h3>
              <p>Hemos desarrollado una soluci&oacuten tecnol&oacute;gica que simplifica la forma en que se organizan y gestionan los eventos online y se venden entradas.</p>
            </div>
          </div>
        </article>

        <article class=\"info_contenido_acerca_de\">
          <div class=\"img_info_contenido_acerca_de\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/web/14.jpg"), "html", null, true);
        echo "\" alt=\"\">
          </div>
          <div class=\"decoracion_info_contenido_acerca_de\">
            <div class=\"texto_info_contenido_acerca_de\">
              <h3>Escaparate de eventos</h3>
              <p>Adem&aacute;s, hemos construido una web de descubrimiento en la que siempre se encuentran eventos relevantes, con un proceso de compra &aacute;gil y 100% seguro.</p>
            </div>
          </div>
        </article>

        <article class=\"info_contenido_acerca_de\">
          <div class=\"img_info_contenido_acerca_de\">
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/web/17.jpg"), "html", null, true);
        echo "\" alt=\"\">
          </div>
          <div class=\"decoracion_info_contenido_acerca_de\">
            <div class=\"texto_info_contenido_acerca_de\">
              <h3>Somos nosotros</h3>
              <p>Tocketea tambi&eacute;n somos las más de 60 personas que trabajamos por todo el mundo para hacer que todo funcione.</p>
            </div>
          </div>
        </article>

      </section>
    </div>
  </main>
";
    }

    public function getTemplateName()
    {
        return "public/nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  63 => 26,  48 => 14,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/nosotros.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\nosotros.html.twig");
    }
}
