<?php

/* private/headers/navegacion_administrador.html.twig */
class __TwigTemplate_8085f9a96c89476916f7ba5e8295cb5d708cf3ea7eeedd8930adfa8cbce3ca5d extends Twig_Template
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
        $__internal_0cf7787cfef1e0774132ee596fb7da13993ea0c0c95cdba23ff49d4773fe0ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf7787cfef1e0774132ee596fb7da13993ea0c0c95cdba23ff49d4773fe0ca4->enter($__internal_0cf7787cfef1e0774132ee596fb7da13993ea0c0c95cdba23ff49d4773fe0ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/headers/navegacion_administrador.html.twig"));

        $__internal_f6bf4b5694893ab3a79c61c371f21642cbe139c085d4e010b0b226d029c56f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6bf4b5694893ab3a79c61c371f21642cbe139c085d4e010b0b226d029c56f70->enter($__internal_f6bf4b5694893ab3a79c61c371f21642cbe139c085d4e010b0b226d029c56f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/headers/navegacion_administrador.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_0cf7787cfef1e0774132ee596fb7da13993ea0c0c95cdba23ff49d4773fe0ca4->leave($__internal_0cf7787cfef1e0774132ee596fb7da13993ea0c0c95cdba23ff49d4773fe0ca4_prof);

        
        $__internal_f6bf4b5694893ab3a79c61c371f21642cbe139c085d4e010b0b226d029c56f70->leave($__internal_f6bf4b5694893ab3a79c61c371f21642cbe139c085d4e010b0b226d029c56f70_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_a183bd8e54f7eab0b247cf5a3619c66deacefe40288e273205f8a2af885178d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a183bd8e54f7eab0b247cf5a3619c66deacefe40288e273205f8a2af885178d6->enter($__internal_a183bd8e54f7eab0b247cf5a3619c66deacefe40288e273205f8a2af885178d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_58510dff5d0ed378c5092aef1f54d81d9b4cdd95be7d3c5de7d5188cd9536182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58510dff5d0ed378c5092aef1f54d81d9b4cdd95be7d3c5de7d5188cd9536182->enter($__internal_58510dff5d0ed378c5092aef1f54d81d9b4cdd95be7d3c5de7d5188cd9536182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_perfil");
        echo "\">Mi perfil</a>
              <a href=\"#\">Mis mensajes</a>
              <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_mis_eventos");
        echo "\">Mis eventos</a>
              <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_entradas");
        echo "\">Mis entradas</a>
              <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_usuarios");
        echo "\">Gesti&oacute;n usuarios</a>
              <a href=\"/salir\">Salir</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
  </div>
";
        
        $__internal_58510dff5d0ed378c5092aef1f54d81d9b4cdd95be7d3c5de7d5188cd9536182->leave($__internal_58510dff5d0ed378c5092aef1f54d81d9b4cdd95be7d3c5de7d5188cd9536182_prof);

        
        $__internal_a183bd8e54f7eab0b247cf5a3619c66deacefe40288e273205f8a2af885178d6->leave($__internal_a183bd8e54f7eab0b247cf5a3619c66deacefe40288e273205f8a2af885178d6_prof);

    }

    public function getTemplateName()
    {
        return "private/headers/navegacion_administrador.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  69 => 19,  65 => 18,  60 => 16,  44 => 2,  26 => 1,);
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
              <a href=\"{{ path('tocketea_mis_eventos') }}\">Mis eventos</a>
              <a href=\"{{ path('tocketea_entradas') }}\">Mis entradas</a>
              <a href=\"{{ path('tocketea_usuarios') }}\">Gesti&oacute;n usuarios</a>
              <a href=\"/salir\">Salir</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
  </div>
{% endblock %}", "private/headers/navegacion_administrador.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\headers\\navegacion_administrador.html.twig");
    }
}
