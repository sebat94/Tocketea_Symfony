<?php

/* private/headers/navegacion_gestor.html.twig */
class __TwigTemplate_50f0efd514b3958241f37d3acfe664f0ba1f25db772db77e9259b5ab3b48d599 extends Twig_Template
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
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_mis_eventos");
        echo "\">Mis eventos</a>
              <a href=\"";
        // line 20
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
    }

    public function getTemplateName()
    {
        return "private/headers/navegacion_gestor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  48 => 19,  43 => 17,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "private/headers/navegacion_gestor.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\headers\\navegacion_gestor.html.twig");
    }
}
