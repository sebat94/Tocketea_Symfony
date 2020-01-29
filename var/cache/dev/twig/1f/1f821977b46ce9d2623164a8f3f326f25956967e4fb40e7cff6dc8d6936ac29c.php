<?php

/* public/nosotros.html.twig */
class __TwigTemplate_462a90ed6d0b18f7d1ce6defa588b3d88fa4b42b7e5c5cfcfc9acf6f2263b66c extends Twig_Template
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
        $__internal_3605e11181e8817f9c26b5c00b3cf5102553b01a875f1498cbdbbec96b9e8110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3605e11181e8817f9c26b5c00b3cf5102553b01a875f1498cbdbbec96b9e8110->enter($__internal_3605e11181e8817f9c26b5c00b3cf5102553b01a875f1498cbdbbec96b9e8110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/nosotros.html.twig"));

        $__internal_6670d2de7f1128c7c643a00d45d90fa5dd900d2acb4a5368d48dfb165eaf7c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6670d2de7f1128c7c643a00d45d90fa5dd900d2acb4a5368d48dfb165eaf7c8b->enter($__internal_6670d2de7f1128c7c643a00d45d90fa5dd900d2acb4a5368d48dfb165eaf7c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/nosotros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3605e11181e8817f9c26b5c00b3cf5102553b01a875f1498cbdbbec96b9e8110->leave($__internal_3605e11181e8817f9c26b5c00b3cf5102553b01a875f1498cbdbbec96b9e8110_prof);

        
        $__internal_6670d2de7f1128c7c643a00d45d90fa5dd900d2acb4a5368d48dfb165eaf7c8b->leave($__internal_6670d2de7f1128c7c643a00d45d90fa5dd900d2acb4a5368d48dfb165eaf7c8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5064af5c2492e9d70723f0ddc8da55f0a0d44fbf009f61a91d159c98ba4b9604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5064af5c2492e9d70723f0ddc8da55f0a0d44fbf009f61a91d159c98ba4b9604->enter($__internal_5064af5c2492e9d70723f0ddc8da55f0a0d44fbf009f61a91d159c98ba4b9604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88787ea3c04b2b97c13e3be70776d0def96705343cfc8d75cd66ed5e323e0a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88787ea3c04b2b97c13e3be70776d0def96705343cfc8d75cd66ed5e323e0a3d->enter($__internal_88787ea3c04b2b97c13e3be70776d0def96705343cfc8d75cd66ed5e323e0a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nosotros";
        
        $__internal_88787ea3c04b2b97c13e3be70776d0def96705343cfc8d75cd66ed5e323e0a3d->leave($__internal_88787ea3c04b2b97c13e3be70776d0def96705343cfc8d75cd66ed5e323e0a3d_prof);

        
        $__internal_5064af5c2492e9d70723f0ddc8da55f0a0d44fbf009f61a91d159c98ba4b9604->leave($__internal_5064af5c2492e9d70723f0ddc8da55f0a0d44fbf009f61a91d159c98ba4b9604_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f063682919cf0af9c5db0030ba523c858da8158d2abdaf9183598ef02a5395f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f063682919cf0af9c5db0030ba523c858da8158d2abdaf9183598ef02a5395f->enter($__internal_5f063682919cf0af9c5db0030ba523c858da8158d2abdaf9183598ef02a5395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_501a3ec82aa5a90f2be72e85ca9e7b2bf53f2698d2966abb57cc7bd29cc8a783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501a3ec82aa5a90f2be72e85ca9e7b2bf53f2698d2966abb57cc7bd29cc8a783->enter($__internal_501a3ec82aa5a90f2be72e85ca9e7b2bf53f2698d2966abb57cc7bd29cc8a783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_501a3ec82aa5a90f2be72e85ca9e7b2bf53f2698d2966abb57cc7bd29cc8a783->leave($__internal_501a3ec82aa5a90f2be72e85ca9e7b2bf53f2698d2966abb57cc7bd29cc8a783_prof);

        
        $__internal_5f063682919cf0af9c5db0030ba523c858da8158d2abdaf9183598ef02a5395f->leave($__internal_5f063682919cf0af9c5db0030ba523c858da8158d2abdaf9183598ef02a5395f_prof);

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
        return array (  108 => 38,  93 => 26,  78 => 14,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Nosotros{% endblock %}

{% block body %}
  <main class=\"main_acerca_de\">
    <div class=\"bloque_contenedor clearfix\">
      <section class=\"contenido_acerca_de\">

        <h1>Quienes somos</h1>

        <article class=\"info_contenido_acerca_de\">
          <div class=\"img_info_contenido_acerca_de\">
            <img src=\"{{ asset('img/web/7.jpg') }}\" alt=\"\">
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
            <img src=\"{{ asset('img/web/14.jpg') }}\" alt=\"\">
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
            <img src=\"{{ asset('img/web/17.jpg') }}\" alt=\"\">
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
{% endblock %}
", "public/nosotros.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\nosotros.html.twig");
    }
}
