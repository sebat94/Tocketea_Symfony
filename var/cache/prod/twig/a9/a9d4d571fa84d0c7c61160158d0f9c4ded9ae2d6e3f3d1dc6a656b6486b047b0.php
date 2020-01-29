<?php

/* private/entradas.html.twig */
class __TwigTemplate_22027e33d73dd6359ff4a7814b1ea61d5a895539ba6d5b1d72e201a739f60f25 extends Twig_Template
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
        if ( !twig_test_empty(($context["tickets"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? null));
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
        return array (  151 => 76,  144 => 71,  134 => 67,  128 => 64,  122 => 61,  116 => 58,  110 => 55,  103 => 52,  97 => 50,  91 => 48,  89 => 47,  85 => 45,  81 => 44,  55 => 20,  53 => 19,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "private/entradas.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\entradas.html.twig");
    }
}
