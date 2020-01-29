<?php

/* public/headers/navegacion_anonimos.html.twig */
class __TwigTemplate_a740232ec0c64414f469be2b2f8061f1efbc020ce793be430cfed158284f5df5 extends Twig_Template
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
        $__internal_e9d9795b3109f510af6212e3cd74608940eed125e789019edbc057e244fd930a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d9795b3109f510af6212e3cd74608940eed125e789019edbc057e244fd930a->enter($__internal_e9d9795b3109f510af6212e3cd74608940eed125e789019edbc057e244fd930a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/headers/navegacion_anonimos.html.twig"));

        $__internal_77d7ff6b61ff3c5d78566f509e163dae8845ba370a2df6ec785ff67114bfb9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d7ff6b61ff3c5d78566f509e163dae8845ba370a2df6ec785ff67114bfb9f6->enter($__internal_77d7ff6b61ff3c5d78566f509e163dae8845ba370a2df6ec785ff67114bfb9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/headers/navegacion_anonimos.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_e9d9795b3109f510af6212e3cd74608940eed125e789019edbc057e244fd930a->leave($__internal_e9d9795b3109f510af6212e3cd74608940eed125e789019edbc057e244fd930a_prof);

        
        $__internal_77d7ff6b61ff3c5d78566f509e163dae8845ba370a2df6ec785ff67114bfb9f6->leave($__internal_77d7ff6b61ff3c5d78566f509e163dae8845ba370a2df6ec785ff67114bfb9f6_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_91d1a9b7975e1f7bb3c18a0450ff431fc684b93cebf6abd21ee2aad351b53c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d1a9b7975e1f7bb3c18a0450ff431fc684b93cebf6abd21ee2aad351b53c65->enter($__internal_91d1a9b7975e1f7bb3c18a0450ff431fc684b93cebf6abd21ee2aad351b53c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_33c3e6558f257c5f0c86c19880288350a3d9f22eb7357bf5c8a9c85acde4e71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c3e6558f257c5f0c86c19880288350a3d9f22eb7357bf5c8a9c85acde4e71c->enter($__internal_33c3e6558f257c5f0c86c19880288350a3d9f22eb7357bf5c8a9c85acde4e71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_33c3e6558f257c5f0c86c19880288350a3d9f22eb7357bf5c8a9c85acde4e71c->leave($__internal_33c3e6558f257c5f0c86c19880288350a3d9f22eb7357bf5c8a9c85acde4e71c_prof);

        
        $__internal_91d1a9b7975e1f7bb3c18a0450ff431fc684b93cebf6abd21ee2aad351b53c65->leave($__internal_91d1a9b7975e1f7bb3c18a0450ff431fc684b93cebf6abd21ee2aad351b53c65_prof);

    }

    public function getTemplateName()
    {
        return "public/headers/navegacion_anonimos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  44 => 2,  26 => 1,);
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
          <li><a href=\"{{ path('tocketea_login') }}\" id=\"btn_login\"><i class=\"fa fa-sign-in\"></i><span>Acceder</span></a></li>
        </ul>
      </nav>
    </div>
{% endblock %}", "public/headers/navegacion_anonimos.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\public\\headers\\navegacion_anonimos.html.twig");
    }
}
