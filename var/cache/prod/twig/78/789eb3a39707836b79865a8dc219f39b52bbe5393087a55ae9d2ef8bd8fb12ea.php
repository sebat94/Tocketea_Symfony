<?php

/* public/headers/navegacion_anonimos.html.twig */
class __TwigTemplate_0780bd29f18764626dd0e4fe31af6258b8ed3f18f131ae0549161dad6ce7778b extends Twig_Template
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
        echo "    <div class=\"cabecera_der\">
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
          <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_login");
        echo "\" id=\"btn_login\"><i class=\"fa fa-sign-in\"></i><span>Acceder</span></a></li>
        </ul>
      </nav>
    </div>
";
    }

    public function getTemplateName()
    {
        return "public/headers/navegacion_anonimos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/headers/navegacion_anonimos.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\headers\\navegacion_anonimos.html.twig");
    }
}
