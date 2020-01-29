<?php

/* private/entradas.html.twig */
class __TwigTemplate_20a74197e7f627d37f3ec6f2b3c9f61a5fd98b3b8b7f0b29f1e7582e1b6a9288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "private/entradas.html.twig", 1);
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
        $__internal_81a311c2b99213c79db00379a5bf9c54cf026c122e6e1c291298775027c9d52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a311c2b99213c79db00379a5bf9c54cf026c122e6e1c291298775027c9d52c->enter($__internal_81a311c2b99213c79db00379a5bf9c54cf026c122e6e1c291298775027c9d52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/entradas.html.twig"));

        $__internal_e5cdffb59930139fd1cc756d47d0f5703c78a309c28445755668ad13f3efdd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cdffb59930139fd1cc756d47d0f5703c78a309c28445755668ad13f3efdd73->enter($__internal_e5cdffb59930139fd1cc756d47d0f5703c78a309c28445755668ad13f3efdd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/entradas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81a311c2b99213c79db00379a5bf9c54cf026c122e6e1c291298775027c9d52c->leave($__internal_81a311c2b99213c79db00379a5bf9c54cf026c122e6e1c291298775027c9d52c_prof);

        
        $__internal_e5cdffb59930139fd1cc756d47d0f5703c78a309c28445755668ad13f3efdd73->leave($__internal_e5cdffb59930139fd1cc756d47d0f5703c78a309c28445755668ad13f3efdd73_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c28ef01cf2d71bc599078269f295a0000bc7e9472229fe7a3860477acc5118ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28ef01cf2d71bc599078269f295a0000bc7e9472229fe7a3860477acc5118ad->enter($__internal_c28ef01cf2d71bc599078269f295a0000bc7e9472229fe7a3860477acc5118ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2842f07762fa20a6b64c7aac2b6ed599feaa0e6e04c6e8aa38ea6050580d80d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2842f07762fa20a6b64c7aac2b6ed599feaa0e6e04c6e8aa38ea6050580d80d1->enter($__internal_2842f07762fa20a6b64c7aac2b6ed599feaa0e6e04c6e8aa38ea6050580d80d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mis eventos";
        
        $__internal_2842f07762fa20a6b64c7aac2b6ed599feaa0e6e04c6e8aa38ea6050580d80d1->leave($__internal_2842f07762fa20a6b64c7aac2b6ed599feaa0e6e04c6e8aa38ea6050580d80d1_prof);

        
        $__internal_c28ef01cf2d71bc599078269f295a0000bc7e9472229fe7a3860477acc5118ad->leave($__internal_c28ef01cf2d71bc599078269f295a0000bc7e9472229fe7a3860477acc5118ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9b7d4b9eaa2d019f3e73c41df33c1dfbdb978a81cb2858670e4b4c82c1bd4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b7d4b9eaa2d019f3e73c41df33c1dfbdb978a81cb2858670e4b4c82c1bd4f7->enter($__internal_b9b7d4b9eaa2d019f3e73c41df33c1dfbdb978a81cb2858670e4b4c82c1bd4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5b136ad67deb1e98ab767430ab3513a3b33b90dbb63a8b36720cbb32c820539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b136ad67deb1e98ab767430ab3513a3b33b90dbb63a8b36720cbb32c820539->enter($__internal_c5b136ad67deb1e98ab767430ab3513a3b33b90dbb63a8b36720cbb32c820539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <main class=\"main_mis_entradas\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"menu_tabla\">
        <div class=\"filtrar_menu_tabla\">

          <div class=\"num_eventos_tabla\">
            <span>Mis entradas</span>
          </div>

        </div>
      </section>

      ";
        // line 19
        if ( !twig_test_empty((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new Twig_Error_Runtime('Variable "tickets" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo "        <section class=\"tabla\">
          <div class=\"tabla_responsive\">

            <div class=\"info_columnas_tabla\">
              <div class=\"columna_tabla_entradas\">
                <span>T&iacute;tulo</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Fecha</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Hora</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Entradas</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Importe</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Ver</span>
              </div>
            </div>

            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new Twig_Error_Runtime('Variable "tickets" does not exist.', 44, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 45
                echo "              <article class=\"fila_tabla\">
                <div class=\"columna_tabla_entradas\">
                  ";
                // line 47
                if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ticket"], "id_evento", array()), "imagen", array()))) {
                    // line 48
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/evento/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ticket"], "id_evento", array()), "imagen", array()))), "html", null, true);
                    echo "\" alt=\"\">
                  ";
                } else {
                    // line 50
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/evento/default.jpg"), "html", null, true);
                    echo "\" alt=\"\" title=\"default\">
                  ";
                }
                // line 52
                echo "                  <div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ticket"], "id_evento", array()), "titulo", array()), "html", null, true);
                echo "</div>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <span>";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ticket"], "id_evento", array()), "fecha_celebracion", array()), "m/d/Y"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <span>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ticket"], "id_evento", array()), "hora_celebracion", array()), "H:i:s"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <span>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ticket"], "num_entradas", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <span>";
                // line 64
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ticket"], "id_evento", array()), "precio_entradas", array()) * twig_get_attribute($this->env, $this->getSourceContext(), $context["ticket"], "num_entradas", array())), "html", null, true);
                echo "€</span>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <a href=\"/eventos/";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ticket"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></a>
                </div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "

          </div>
        </section>
      ";
        }
        // line 76
        echo "
    </div>
  </main>
";
        
        $__internal_c5b136ad67deb1e98ab767430ab3513a3b33b90dbb63a8b36720cbb32c820539->leave($__internal_c5b136ad67deb1e98ab767430ab3513a3b33b90dbb63a8b36720cbb32c820539_prof);

        
        $__internal_b9b7d4b9eaa2d019f3e73c41df33c1dfbdb978a81cb2858670e4b4c82c1bd4f7->leave($__internal_b9b7d4b9eaa2d019f3e73c41df33c1dfbdb978a81cb2858670e4b4c82c1bd4f7_prof);

    }

    public function getTemplateName()
    {
        return "private/entradas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 76,  174 => 71,  164 => 67,  158 => 64,  152 => 61,  146 => 58,  140 => 55,  133 => 52,  127 => 50,  121 => 48,  119 => 47,  115 => 45,  111 => 44,  85 => 20,  83 => 19,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Mis eventos{% endblock %}

{% block body %}
  <main class=\"main_mis_entradas\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"menu_tabla\">
        <div class=\"filtrar_menu_tabla\">

          <div class=\"num_eventos_tabla\">
            <span>Mis entradas</span>
          </div>

        </div>
      </section>

      {% if tickets is not empty %}
        <section class=\"tabla\">
          <div class=\"tabla_responsive\">

            <div class=\"info_columnas_tabla\">
              <div class=\"columna_tabla_entradas\">
                <span>T&iacute;tulo</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Fecha</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Hora</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Entradas</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Importe</span>
              </div>
              <div class=\"columna_tabla_entradas\">
                <span>Ver</span>
              </div>
            </div>

            {% for ticket in tickets %}
              <article class=\"fila_tabla\">
                <div class=\"columna_tabla_entradas\">
                  {% if ticket.id_evento.imagen is not null %}
                    <img src=\"{{ asset('img/evento/'~ticket.id_evento.imagen) }}\" alt=\"\">
                  {% else %}
                    <img src=\"{{ asset('img/evento/default.jpg') }}\" alt=\"\" title=\"default\">
                  {% endif %}
                  <div>{{ ticket.id_evento.titulo }}</div>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <span>{{ ticket.id_evento.fecha_celebracion | date(\"m/d/Y\") }}</span>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <span>{{ ticket.id_evento.hora_celebracion | date('H:i:s') }}</span>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <span>{{ ticket.num_entradas }}</span>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <span>{{ ticket.id_evento.precio_entradas * ticket.num_entradas }}€</span>
                </div>
                <div class=\"columna_tabla_entradas\">
                  <a href=\"/eventos/{{ ticket.id }}\"><i class=\"fa fa-eye\"></i></a>
                </div>
              </article>
            {% endfor %}


          </div>
        </section>
      {% endif %}

    </div>
  </main>
{% endblock %}", "private/entradas.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\entradas.html.twig");
    }
}
