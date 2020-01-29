<?php

/* private/eventos.html.twig */
class __TwigTemplate_593681174e44c6eccea0aa6ba79645c43c105d64fa9a39e62e371b0741252485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "private/eventos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e97ae69c4f5fa24964f4974662e915cc8fb9ea88f997d619808a999b105ba24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e97ae69c4f5fa24964f4974662e915cc8fb9ea88f997d619808a999b105ba24->enter($__internal_0e97ae69c4f5fa24964f4974662e915cc8fb9ea88f997d619808a999b105ba24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/eventos.html.twig"));

        $__internal_c8db8487aeb8e16fe152b572419947d1c952336fb33248d2e82b5e4bd6d242f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8db8487aeb8e16fe152b572419947d1c952336fb33248d2e82b5e4bd6d242f8->enter($__internal_c8db8487aeb8e16fe152b572419947d1c952336fb33248d2e82b5e4bd6d242f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/eventos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e97ae69c4f5fa24964f4974662e915cc8fb9ea88f997d619808a999b105ba24->leave($__internal_0e97ae69c4f5fa24964f4974662e915cc8fb9ea88f997d619808a999b105ba24_prof);

        
        $__internal_c8db8487aeb8e16fe152b572419947d1c952336fb33248d2e82b5e4bd6d242f8->leave($__internal_c8db8487aeb8e16fe152b572419947d1c952336fb33248d2e82b5e4bd6d242f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98cccd8041ddbdc91d04810a21883fd64ec0544ac831b78c688685a1ecb4a7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cccd8041ddbdc91d04810a21883fd64ec0544ac831b78c688685a1ecb4a7f2->enter($__internal_98cccd8041ddbdc91d04810a21883fd64ec0544ac831b78c688685a1ecb4a7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40ab2934366858db5c55be3e72ad3d86bbf251bdc58a45bc703f448e7be69fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ab2934366858db5c55be3e72ad3d86bbf251bdc58a45bc703f448e7be69fbb->enter($__internal_40ab2934366858db5c55be3e72ad3d86bbf251bdc58a45bc703f448e7be69fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mis eventos";
        
        $__internal_40ab2934366858db5c55be3e72ad3d86bbf251bdc58a45bc703f448e7be69fbb->leave($__internal_40ab2934366858db5c55be3e72ad3d86bbf251bdc58a45bc703f448e7be69fbb_prof);

        
        $__internal_98cccd8041ddbdc91d04810a21883fd64ec0544ac831b78c688685a1ecb4a7f2->leave($__internal_98cccd8041ddbdc91d04810a21883fd64ec0544ac831b78c688685a1ecb4a7f2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9321f3ceed83cc0a99a65b309bac6ec916e10a425a20ae08603a097cf867170e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9321f3ceed83cc0a99a65b309bac6ec916e10a425a20ae08603a097cf867170e->enter($__internal_9321f3ceed83cc0a99a65b309bac6ec916e10a425a20ae08603a097cf867170e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a747f15d0ea759f555b6ab654ef7805c1e9d68a5dfad6bffdde35ec102fcb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a747f15d0ea759f555b6ab654ef7805c1e9d68a5dfad6bffdde35ec102fcb22->enter($__internal_0a747f15d0ea759f555b6ab654ef7805c1e9d68a5dfad6bffdde35ec102fcb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <main class=\"main_mis_eventos\">
    <div class=\"bloque_contenedor clearfix\">
      <section class=\"menu_tabla\">

        <div class=\"crear_nuevo_evento\">
          <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_crear_evento");
        echo "\"><i class=\"fa fa-plus-square-o\"></i> Crear evento</a>
        </div>

        <div class=\"filtrar_menu_tabla\">

          <div class=\"num_eventos_tabla\">
            <span>";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 17, $this->getSourceContext()); })())), "html", null, true);
        echo " Eventos creados</span>
          </div>

          <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_mis_eventos");
        echo "\" method=\"post\" id=\"filtrarEventosCategoria\">
            <div class=\"filtrar_eventos_por_categoria\">
              <div>
                <span>Filtrar por: </span>
                <select name=\"categoriaMisEventos\" id=\"filtroCategoria\">
                  <option value=\"0\" id=\"todosCategoria\">Todas las categor&iacute;as</option>
                  ";
        // line 27
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["globalParams"]) || array_key_exists("globalParams", $context) ? $context["globalParams"] : (function () { throw new Twig_Error_Runtime('Variable "globalParams" does not exist.', 27, $this->getSourceContext()); })()), "categorias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 28
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "getNombre", array(), "method"), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </select>
                <i class=\"fa fa-caret-down\"></i>
              </div>
            </div>
          </form>
          <form action=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_mis_eventos");
        echo "\" method=\"post\" id=\"filtrarEventosFecha\">
            <div class=\"filtrar_eventos_futuros_pasados\">
              <div>
                <select name=\"fechaMisEventos\" id=\"filtroFecha\">
                  <option value=\"0\" id=\"todosFecha\">Todas las fechas</option>
                  <option name=\"fechaMisEventos\" value=\"pasados\">Eventos Pasados</option>
                  <option name=\"fechaMisEventos\" value=\"futuros\">Eventos Futuros</option>
                </select>
              </div>
            </div>
          </form>

          <div class=\"filtrar_eventos_por_nombre\">
            <form action=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_mis_eventos");
        echo "\" method=\"post\">
              <input type=\"search\" name=\"buscarMisEventos\" placeholder=\"Buscar eventos\" value=\"\">
              <i class=\"fa fa-rocket\"></i>
              <input type=\"submit\" name=\"\" value=\"\">
            </form>
          </div>

        </div>
      </section>

      ";
        // line 59
        echo "      ";
        if ( !twig_test_empty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "      <section class=\"tabla\">
        <div class=\"tabla_responsive\">

          <div class=\"info_columnas_tabla\">
            <div class=\"columna_tabla_eventos\">
              <span>T&iacute;tulo</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Precio</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Ventas</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Importe</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Ver</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Editar</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Borrar</span>
            </div>
          </div>

          ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new Twig_Error_Runtime('Variable "events" does not exist.', 87, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 88
                echo "            <article class=\"fila_tabla\">
              <div class=\"columna_tabla_eventos\">
                ";
                // line 90
                if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "imagen", array()))) {
                    // line 91
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/evento/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "imagen", array()))), "html", null, true);
                    echo "\" alt=\"\">
                ";
                } else {
                    // line 93
                    echo "                  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/evento/default.jpg"), "html", null, true);
                    echo "\" alt=\"\" title=\"default\">
                ";
                }
                // line 95
                echo "                <div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "titulo", array()), "html", null, true);
                echo "</div>
              </div>
              <div class=\"columna_tabla_eventos\">
                <span>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "precioEntradas", array()), "html", null, true);
                echo "€</span>
              </div>
              <div class=\"columna_tabla_eventos\">
                <span>";
                // line 101
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "totalEntradas", array()) - twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "entradasRestantes", array())), "html", null, true);
                echo "</span>
              </div>
              <div class=\"columna_tabla_eventos\">
                <span>";
                // line 104
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "totalEntradas", array()) - twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "entradasRestantes", array())) * twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "precioEntradas", array())), "html", null, true);
                echo "</span>
              </div>
              <div class=\"columna_tabla_eventos\">
                <a href=\"/eventos/";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></a>
              </div>
              <div class=\"columna_tabla_eventos\">
                <a href=\"/gestor/form_evento/";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-pencil-square-o\"></i></a>
              </div>
              <div class=\"columna_tabla_eventos\">
                <a href=\"/gestor/eventos/";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "id", array()), "html", null, true);
                echo "/eliminar\" class=\"borrar_elemento\"><i class=\"fa fa-trash-o\"></i></a>
              </div>
            </article>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "
        </div>
      </section>
      ";
        }
        // line 121
        echo "
    </div>
  </main>

";
        
        $__internal_0a747f15d0ea759f555b6ab654ef7805c1e9d68a5dfad6bffdde35ec102fcb22->leave($__internal_0a747f15d0ea759f555b6ab654ef7805c1e9d68a5dfad6bffdde35ec102fcb22_prof);

        
        $__internal_9321f3ceed83cc0a99a65b309bac6ec916e10a425a20ae08603a097cf867170e->leave($__internal_9321f3ceed83cc0a99a65b309bac6ec916e10a425a20ae08603a097cf867170e_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b284a7a8b41163e2a9b1fe99fec59801b38776adbeb5a1790588bd7743a38166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b284a7a8b41163e2a9b1fe99fec59801b38776adbeb5a1790588bd7743a38166->enter($__internal_b284a7a8b41163e2a9b1fe99fec59801b38776adbeb5a1790588bd7743a38166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3d6918df5c5c018086b7866528b1b349fffcbb7079686ffbf96968197e6131c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6918df5c5c018086b7866528b1b349fffcbb7079686ffbf96968197e6131c7->enter($__internal_3d6918df5c5c018086b7866528b1b349fffcbb7079686ffbf96968197e6131c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.all.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crud.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mis_eventos.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3d6918df5c5c018086b7866528b1b349fffcbb7079686ffbf96968197e6131c7->leave($__internal_3d6918df5c5c018086b7866528b1b349fffcbb7079686ffbf96968197e6131c7_prof);

        
        $__internal_b284a7a8b41163e2a9b1fe99fec59801b38776adbeb5a1790588bd7743a38166->leave($__internal_b284a7a8b41163e2a9b1fe99fec59801b38776adbeb5a1790588bd7743a38166_prof);

    }

    public function getTemplateName()
    {
        return "private/eventos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 131,  288 => 130,  282 => 128,  273 => 127,  259 => 121,  253 => 117,  243 => 113,  237 => 110,  231 => 107,  225 => 104,  219 => 101,  213 => 98,  206 => 95,  200 => 93,  194 => 91,  192 => 90,  188 => 88,  184 => 87,  155 => 60,  152 => 59,  139 => 48,  123 => 35,  116 => 30,  105 => 28,  100 => 27,  91 => 20,  85 => 17,  76 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Mis eventos{% endblock %}

{% block body %}
  <main class=\"main_mis_eventos\">
    <div class=\"bloque_contenedor clearfix\">
      <section class=\"menu_tabla\">

        <div class=\"crear_nuevo_evento\">
          <a href=\"{{ path('tocketea_crear_evento') }}\"><i class=\"fa fa-plus-square-o\"></i> Crear evento</a>
        </div>

        <div class=\"filtrar_menu_tabla\">

          <div class=\"num_eventos_tabla\">
            <span>{{ events|length }} Eventos creados</span>
          </div>

          <form action=\"{{ path('tocketea_mis_eventos') }}\" method=\"post\" id=\"filtrarEventosCategoria\">
            <div class=\"filtrar_eventos_por_categoria\">
              <div>
                <span>Filtrar por: </span>
                <select name=\"categoriaMisEventos\" id=\"filtroCategoria\">
                  <option value=\"0\" id=\"todosCategoria\">Todas las categor&iacute;as</option>
                  {# foreach #}
                  {% for cat in globalParams.categorias %}
                    <option value=\"{{ cat.getId() }}\">{{ cat.getNombre() }}</option>
                  {% endfor %}
                </select>
                <i class=\"fa fa-caret-down\"></i>
              </div>
            </div>
          </form>
          <form action=\"{{ path('tocketea_mis_eventos') }}\" method=\"post\" id=\"filtrarEventosFecha\">
            <div class=\"filtrar_eventos_futuros_pasados\">
              <div>
                <select name=\"fechaMisEventos\" id=\"filtroFecha\">
                  <option value=\"0\" id=\"todosFecha\">Todas las fechas</option>
                  <option name=\"fechaMisEventos\" value=\"pasados\">Eventos Pasados</option>
                  <option name=\"fechaMisEventos\" value=\"futuros\">Eventos Futuros</option>
                </select>
              </div>
            </div>
          </form>

          <div class=\"filtrar_eventos_por_nombre\">
            <form action=\"{{ path('tocketea_mis_eventos') }}\" method=\"post\">
              <input type=\"search\" name=\"buscarMisEventos\" placeholder=\"Buscar eventos\" value=\"\">
              <i class=\"fa fa-rocket\"></i>
              <input type=\"submit\" name=\"\" value=\"\">
            </form>
          </div>

        </div>
      </section>

      {# if (!empty(\$eventos)) #}
      {% if events is not empty%}
      <section class=\"tabla\">
        <div class=\"tabla_responsive\">

          <div class=\"info_columnas_tabla\">
            <div class=\"columna_tabla_eventos\">
              <span>T&iacute;tulo</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Precio</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Ventas</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Importe</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Ver</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Editar</span>
            </div>
            <div class=\"columna_tabla_eventos\">
              <span>Borrar</span>
            </div>
          </div>

          {% for event in events %}
            <article class=\"fila_tabla\">
              <div class=\"columna_tabla_eventos\">
                {% if event.imagen is not null %}
                  <img src=\"{{ asset('img/evento/'~event.imagen) }}\" alt=\"\">
                {% else %}
                  <img src=\"{{ asset('img/evento/default.jpg') }}\" alt=\"\" title=\"default\">
                {% endif %}
                <div>{{ event.titulo }}</div>
              </div>
              <div class=\"columna_tabla_eventos\">
                <span>{{ event.precioEntradas }}€</span>
              </div>
              <div class=\"columna_tabla_eventos\">
                <span>{{ event.totalEntradas - event.entradasRestantes }}</span>
              </div>
              <div class=\"columna_tabla_eventos\">
                <span>{{ (event.totalEntradas - event.entradasRestantes) * event.precioEntradas }}</span>
              </div>
              <div class=\"columna_tabla_eventos\">
                <a href=\"/eventos/{{ event.id }}\"><i class=\"fa fa-eye\"></i></a>
              </div>
              <div class=\"columna_tabla_eventos\">
                <a href=\"/gestor/form_evento/{{ event.id }}\"><i class=\"fa fa-pencil-square-o\"></i></a>
              </div>
              <div class=\"columna_tabla_eventos\">
                <a href=\"/gestor/eventos/{{ event.id }}/eliminar\" class=\"borrar_elemento\"><i class=\"fa fa-trash-o\"></i></a>
              </div>
            </article>
          {% endfor %}

        </div>
      </section>
      {% endif %}

    </div>
  </main>

{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.all.js\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/crud.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/mis_eventos.js') }}\"></script>
{% endblock %}
", "private/eventos.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\eventos.html.twig");
    }
}
