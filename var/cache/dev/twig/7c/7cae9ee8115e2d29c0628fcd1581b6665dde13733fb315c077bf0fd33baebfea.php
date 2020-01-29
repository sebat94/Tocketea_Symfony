<?php

/* private/headers/navegacion_comprador.html.twig */
class __TwigTemplate_b13ad27a61982cdcd31d44358164b9c8c85d6ef1a2e90c370fd3d39631bd64c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ffdf7da0b8a5f501b09151ddd93c6dcfbed25c9ee1d1a2ef5d9f514c19c1b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffdf7da0b8a5f501b09151ddd93c6dcfbed25c9ee1d1a2ef5d9f514c19c1b31->enter($__internal_3ffdf7da0b8a5f501b09151ddd93c6dcfbed25c9ee1d1a2ef5d9f514c19c1b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/headers/navegacion_comprador.html.twig"));

        $__internal_64723fd8a0f2eac2516f19b80a3a921926a212a19b0fbd2303f9910ca2de8a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64723fd8a0f2eac2516f19b80a3a921926a212a19b0fbd2303f9910ca2de8a89->enter($__internal_64723fd8a0f2eac2516f19b80a3a921926a212a19b0fbd2303f9910ca2de8a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/headers/navegacion_comprador.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_3ffdf7da0b8a5f501b09151ddd93c6dcfbed25c9ee1d1a2ef5d9f514c19c1b31->leave($__internal_3ffdf7da0b8a5f501b09151ddd93c6dcfbed25c9ee1d1a2ef5d9f514c19c1b31_prof);

        
        $__internal_64723fd8a0f2eac2516f19b80a3a921926a212a19b0fbd2303f9910ca2de8a89->leave($__internal_64723fd8a0f2eac2516f19b80a3a921926a212a19b0fbd2303f9910ca2de8a89_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_942b1f4a1a3f8f9997e4b8aac599aa099205cda496c47e198091beeb768a691b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942b1f4a1a3f8f9997e4b8aac599aa099205cda496c47e198091beeb768a691b->enter($__internal_942b1f4a1a3f8f9997e4b8aac599aa099205cda496c47e198091beeb768a691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e35b40989da52a517174a87cf7356ff9982fb12b7ffc796a942e5884d12f15c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35b40989da52a517174a87cf7356ff9982fb12b7ffc796a942e5884d12f15c4->enter($__internal_e35b40989da52a517174a87cf7356ff9982fb12b7ffc796a942e5884d12f15c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "  <div class=\"cabecera_der\">
    <nav>
      <ul>
        <li>
          <a href=\"/\">Home</a>
          <a href=\"/\"><i class=\"fa fa-home\"></i></a>
        </li>
        <li>
          <a href=\"/nosotros\">Acerca de</a>
          <a href=\"/nosotros\"><i class=\"fa fa-diamond\"></i></a>
        </li>

        <li>
          <div class=\"dropdown\"><span><i class=\"fa fa-user-o\"></i><span>Nombre de usuario</span></span>
            <div class=\"dropdown_content\">
              <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_perfil");
        echo "\">Mi perfil</a>
              <a href=\"#\">Mis mensajes</a>
              <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_entradas");
        echo "\">Mis entradas</a>
              <a href=\"/salir\">Salir</a>
            </div>
          </div>
        </li>

      </ul>
    </nav>
  </div>
";
        
        $__internal_e35b40989da52a517174a87cf7356ff9982fb12b7ffc796a942e5884d12f15c4->leave($__internal_e35b40989da52a517174a87cf7356ff9982fb12b7ffc796a942e5884d12f15c4_prof);

        
        $__internal_942b1f4a1a3f8f9997e4b8aac599aa099205cda496c47e198091beeb768a691b->leave($__internal_942b1f4a1a3f8f9997e4b8aac599aa099205cda496c47e198091beeb768a691b_prof);

    }

    public function getTemplateName()
    {
        return "private/headers/navegacion_comprador.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  61 => 17,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block head %}
  <div class=\"cabecera_der\">
    <nav>
      <ul>
        <li>
          <a href=\"/\">Home</a>
          <a href=\"/\"><i class=\"fa fa-home\"></i></a>
        </li>
        <li>
          <a href=\"/nosotros\">Acerca de</a>
          <a href=\"/nosotros\"><i class=\"fa fa-diamond\"></i></a>
        </li>

        <li>
          <div class=\"dropdown\"><span><i class=\"fa fa-user-o\"></i><span>Nombre de usuario</span></span>
            <div class=\"dropdown_content\">
              <a href=\"{{ path('tocketea_perfil') }}\">Mi perfil</a>
              <a href=\"#\">Mis mensajes</a>
              <a href=\"{{ path('tocketea_entradas') }}\">Mis entradas</a>
              <a href=\"/salir\">Salir</a>
            </div>
          </div>
        </li>

      </ul>
    </nav>
  </div>
{% endblock %}", "private/headers/navegacion_comprador.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\headers\\navegacion_comprador.html.twig");
    }
}
