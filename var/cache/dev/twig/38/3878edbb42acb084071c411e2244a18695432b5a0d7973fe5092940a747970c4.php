<?php

/* private/headers/navegacion_gestor.html.twig */
class __TwigTemplate_e7b955e3291951c9bb02289b7acd7050ca31158e206df192dd96d092e06fe822 extends Twig_Template
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
        $__internal_6544441dae11ca28a21066e0fa01dbff60b28bc8a7bed330f08d4ed57172f7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6544441dae11ca28a21066e0fa01dbff60b28bc8a7bed330f08d4ed57172f7cc->enter($__internal_6544441dae11ca28a21066e0fa01dbff60b28bc8a7bed330f08d4ed57172f7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/headers/navegacion_gestor.html.twig"));

        $__internal_378f4e22637cb251142eebc826ec78da41d19e7c3894f5ad2495708a51a7b4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378f4e22637cb251142eebc826ec78da41d19e7c3894f5ad2495708a51a7b4a3->enter($__internal_378f4e22637cb251142eebc826ec78da41d19e7c3894f5ad2495708a51a7b4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/headers/navegacion_gestor.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_6544441dae11ca28a21066e0fa01dbff60b28bc8a7bed330f08d4ed57172f7cc->leave($__internal_6544441dae11ca28a21066e0fa01dbff60b28bc8a7bed330f08d4ed57172f7cc_prof);

        
        $__internal_378f4e22637cb251142eebc826ec78da41d19e7c3894f5ad2495708a51a7b4a3->leave($__internal_378f4e22637cb251142eebc826ec78da41d19e7c3894f5ad2495708a51a7b4a3_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_ddbdf44d780683e062bd6b77d0af4598058b8f8998aee556327a26dcb6bde440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbdf44d780683e062bd6b77d0af4598058b8f8998aee556327a26dcb6bde440->enter($__internal_ddbdf44d780683e062bd6b77d0af4598058b8f8998aee556327a26dcb6bde440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0fef57cf7de90d5fd356ea3752642239d3be69a47abf477edccc9da92fca8cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fef57cf7de90d5fd356ea3752642239d3be69a47abf477edccc9da92fca8cdb->enter($__internal_0fef57cf7de90d5fd356ea3752642239d3be69a47abf477edccc9da92fca8cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0fef57cf7de90d5fd356ea3752642239d3be69a47abf477edccc9da92fca8cdb->leave($__internal_0fef57cf7de90d5fd356ea3752642239d3be69a47abf477edccc9da92fca8cdb_prof);

        
        $__internal_ddbdf44d780683e062bd6b77d0af4598058b8f8998aee556327a26dcb6bde440->leave($__internal_ddbdf44d780683e062bd6b77d0af4598058b8f8998aee556327a26dcb6bde440_prof);

    }

    public function getTemplateName()
    {
        return "private/headers/navegacion_gestor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  66 => 19,  61 => 17,  44 => 2,  26 => 1,);
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
              <a href=\"/salir\">Salir</a>
            </div>
          </div>
        </li>

      </ul>
    </nav>
  </div>
{% endblock %}", "private/headers/navegacion_gestor.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\headers\\navegacion_gestor.html.twig");
    }
}
