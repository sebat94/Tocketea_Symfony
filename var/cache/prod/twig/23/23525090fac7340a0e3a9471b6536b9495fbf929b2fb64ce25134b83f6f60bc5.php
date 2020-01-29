<?php

/* private/eventos.html.twig */
class __TwigTemplate_7e658d6f792e49a3dc78ef005005c02c5c1108c53cd86ce41b1a7cd506d4f0b9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Mis eventos";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["events"] ?? null)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["globalParams"] ?? null), "categorias", array()));
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
        if ( !twig_test_empty(($context["events"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
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
    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  250 => 131,  246 => 130,  240 => 128,  237 => 127,  229 => 121,  223 => 117,  213 => 113,  207 => 110,  201 => 107,  195 => 104,  189 => 101,  183 => 98,  176 => 95,  170 => 93,  164 => 91,  162 => 90,  158 => 88,  154 => 87,  125 => 60,  122 => 59,  109 => 48,  93 => 35,  86 => 30,  75 => 28,  70 => 27,  61 => 20,  55 => 17,  46 => 11,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "private/eventos.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\eventos.html.twig");
    }
}
