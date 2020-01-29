<?php

/* private/perfil.html.twig */
class __TwigTemplate_c2039251a62823b383b039e5bcbebef5aeef62aba6e5533ff378186df34f692c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "private/perfil.html.twig", 1);
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
        echo "Perfil";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <main class=\"main_perfil\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"section_perfil_1\">
        <div class=\"img_perfil\">
          ";
        // line 11
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getImagen", array()))) {
            // line 12
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/perfil/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getImagen", array()))), "html", null, true);
            echo "\" alt=\"\">
          ";
        } else {
            // line 14
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/perfil/default.png"), "html", null, true);
            echo "\" alt=\"\">
          ";
        }
        // line 16
        echo "        </div>
        <div class=\"info_section_perfil_1\">
          <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo " ()</span>
          <span>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "email", array()), "html", null, true);
        echo "</span>
        </div>
        <span>Idioma: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "idioma", array()), "html", null, true);
        echo "</span>
      </section>

      <section class=\"section_perfil_2\">
        <h1>Actualizar datos de usuario</h1>

          ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "imagen", array()), 'row');
        echo "
          ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "password", array()), 'row');
        echo "

          ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        </section>

    </div>
  </main>
";
    }

    public function getTemplateName()
    {
        return "private/perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  90 => 30,  86 => 29,  81 => 27,  72 => 21,  67 => 19,  63 => 18,  59 => 16,  53 => 14,  47 => 12,  45 => 11,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "private/perfil.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\perfil.html.twig");
    }
}
