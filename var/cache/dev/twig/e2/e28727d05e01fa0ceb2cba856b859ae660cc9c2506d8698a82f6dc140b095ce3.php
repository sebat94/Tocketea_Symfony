<?php

/* private/gestion_usuarios.html.twig */
class __TwigTemplate_9857e9e7b02b4283e349acc27100c1595d01af2a0ea73118342f668578cdc42f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "private/gestion_usuarios.html.twig", 1);
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
        $__internal_e1db76e2f88b24fc838441cd306fe65c0f41475d981aa890a26c1d09762a9087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1db76e2f88b24fc838441cd306fe65c0f41475d981aa890a26c1d09762a9087->enter($__internal_e1db76e2f88b24fc838441cd306fe65c0f41475d981aa890a26c1d09762a9087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/gestion_usuarios.html.twig"));

        $__internal_04d6bf3c1213d2214bbcd785f376bd3cf6ff5fd38e6bd6bd41f5814e16a3b659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d6bf3c1213d2214bbcd785f376bd3cf6ff5fd38e6bd6bd41f5814e16a3b659->enter($__internal_04d6bf3c1213d2214bbcd785f376bd3cf6ff5fd38e6bd6bd41f5814e16a3b659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "private/gestion_usuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1db76e2f88b24fc838441cd306fe65c0f41475d981aa890a26c1d09762a9087->leave($__internal_e1db76e2f88b24fc838441cd306fe65c0f41475d981aa890a26c1d09762a9087_prof);

        
        $__internal_04d6bf3c1213d2214bbcd785f376bd3cf6ff5fd38e6bd6bd41f5814e16a3b659->leave($__internal_04d6bf3c1213d2214bbcd785f376bd3cf6ff5fd38e6bd6bd41f5814e16a3b659_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12b54014e8a879a03097daa3af52b5f16cf51247b1422e8875625bb001963811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b54014e8a879a03097daa3af52b5f16cf51247b1422e8875625bb001963811->enter($__internal_12b54014e8a879a03097daa3af52b5f16cf51247b1422e8875625bb001963811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8b6c1734076794b49b7765f0986fbd4e9dbbb7e40dc83126fad8389de061bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b6c1734076794b49b7765f0986fbd4e9dbbb7e40dc83126fad8389de061bdc->enter($__internal_f8b6c1734076794b49b7765f0986fbd4e9dbbb7e40dc83126fad8389de061bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestión de usuarios";
        
        $__internal_f8b6c1734076794b49b7765f0986fbd4e9dbbb7e40dc83126fad8389de061bdc->leave($__internal_f8b6c1734076794b49b7765f0986fbd4e9dbbb7e40dc83126fad8389de061bdc_prof);

        
        $__internal_12b54014e8a879a03097daa3af52b5f16cf51247b1422e8875625bb001963811->leave($__internal_12b54014e8a879a03097daa3af52b5f16cf51247b1422e8875625bb001963811_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_513e034d099e66d95bbebd00283dc72785a7f7c8ccd5acfa0ebd2540cf3348bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513e034d099e66d95bbebd00283dc72785a7f7c8ccd5acfa0ebd2540cf3348bf->enter($__internal_513e034d099e66d95bbebd00283dc72785a7f7c8ccd5acfa0ebd2540cf3348bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d6b9a5d099f85f625b1f7bbb37e884971a217134c7593174f7d2a5eef9fa3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6b9a5d099f85f625b1f7bbb37e884971a217134c7593174f7d2a5eef9fa3ae->enter($__internal_1d6b9a5d099f85f625b1f7bbb37e884971a217134c7593174f7d2a5eef9fa3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <main class=\"main_mis_eventos\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"menu_tabla\">
        <div class=\"filtrar_menu_tabla\">
          <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_usuarios");
        echo "\" method=\"post\" id=\"formFiltrarGestionUsr\">

            <div class=\"num_eventos_tabla\">
              <span>Gestión de usuarios</span>
            </div>

            <div class=\"filtrar_eventos_por_categoria\">
              <div>
                <span>Filtrar por: </span>
                <select name=\"rolUsuarios\" id=\"categoriaMisEventos\">
                  <option id=\"todosRoles\">Todos los usuarios</option>
                  <option value=\"ROLE_COMPRADOR\">Comprador</option>
                  <option value=\"ROLE_GESTOR\">Gestor</option>
                  <option value=\"ROLE_ADMINISTRADOR\">Administrador</option>
                </select>
                <i class=\"fa fa-caret-down\"></i>
              </div>
            </div>

          </form>
        </div>
      </section>

      ";
        // line 34
        if ( !twig_test_empty((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new Twig_Error_Runtime('Variable "usuarios" does not exist.', 34, $this->getSourceContext()); })()))) {
            // line 35
            echo "        <section class=\"tabla\">
          <div class=\"tabla_responsive\">

            <div class=\"info_columnas_tabla\">
              <div class=\"columna_tabla_gestion_usuarios\">
                <span>Email</span>
              </div>
              <div class=\"columna_tabla_gestion_usuarios\">
                <span>Permisos</span>
              </div>
              <div class=\"columna_tabla_gestion_usuarios\">
                <span>Guardar</span>
              </div>
              <div class=\"columna_tabla_gestion_usuarios\">
                <span>Borrar</span>
              </div>
            </div>

            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new Twig_Error_Runtime('Variable "usuarios" does not exist.', 53, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 54
                echo "              <article class=\"fila_tabla\">
                <form action=\"";
                // line 55
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tocketea_upgradear_usuario");
                echo "\" method=\"post\">
                  <div class=\"columna_tabla_gestion_usuarios\">
                    ";
                // line 57
                if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["usuario"], "imagen", array()))) {
                    // line 58
                    echo "                      <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/perfil/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["usuario"], "imagen", array()))), "html", null, true);
                    echo "\" alt=\"\">
                    ";
                } else {
                    // line 60
                    echo "                      <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/perfil/default.png"), "html", null, true);
                    echo "\" alt=\"\" title=\"default\">
                    ";
                }
                // line 62
                echo "                    <div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["usuario"], "email", array()), "html", null, true);
                echo "</div>
                  </div>
                  <div class=\"columna_tabla_gestion_usuarios\">
                    <select name=\"rolUsuario\">
                      <option value=\"ROLE_COMPRADOR\">Comprador</option>
                      <option value=\"ROLE_GESTOR\">Gestor</option>
                      <option value=\"ROLE_ADMINISTRADOR\">Administrador</option>
                    </select>
                    <i class=\"fa fa-caret-down\"></i>
                  </div>
                  <div class=\"columna_tabla_gestion_usuarios\">
                    <div class=\"btn_submit_user\">
                      <i class=\"fa fa-floppy-o\"></i>
                      <input type=\"submit\" value=\"\">
                    </div>
                  </div>
                  <div class=\"columna_tabla_gestion_usuarios\">
                    <a href=\"/admin/usuarios/";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["usuario"], "id", array()), "html", null, true);
                echo "/eliminar\" class=\"borrar_elemento\"><i class=\"fa fa-trash-o\"></i></a>
                  </div>

                  <input type=\"hidden\" name=\"idUsuario\" value=\"";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["usuario"], "id", array()), "html", null, true);
                echo "\">
                </form>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
          </div>
        </section>
      ";
        }
        // line 90
        echo "
    </div>
  </main>
";
        
        $__internal_1d6b9a5d099f85f625b1f7bbb37e884971a217134c7593174f7d2a5eef9fa3ae->leave($__internal_1d6b9a5d099f85f625b1f7bbb37e884971a217134c7593174f7d2a5eef9fa3ae_prof);

        
        $__internal_513e034d099e66d95bbebd00283dc72785a7f7c8ccd5acfa0ebd2540cf3348bf->leave($__internal_513e034d099e66d95bbebd00283dc72785a7f7c8ccd5acfa0ebd2540cf3348bf_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_947f20d8fbc327f2d2f5ec68647ec59e0c1028d7542c6017bdaafb668c001051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947f20d8fbc327f2d2f5ec68647ec59e0c1028d7542c6017bdaafb668c001051->enter($__internal_947f20d8fbc327f2d2f5ec68647ec59e0c1028d7542c6017bdaafb668c001051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_12aa04184a417d6cb32ea0ef2197775f7b40dc4babb69e23016e162da5806999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12aa04184a417d6cb32ea0ef2197775f7b40dc4babb69e23016e162da5806999->enter($__internal_12aa04184a417d6cb32ea0ef2197775f7b40dc4babb69e23016e162da5806999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.all.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crud.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gestion_usuarios.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_12aa04184a417d6cb32ea0ef2197775f7b40dc4babb69e23016e162da5806999->leave($__internal_12aa04184a417d6cb32ea0ef2197775f7b40dc4babb69e23016e162da5806999_prof);

        
        $__internal_947f20d8fbc327f2d2f5ec68647ec59e0c1028d7542c6017bdaafb668c001051->leave($__internal_947f20d8fbc327f2d2f5ec68647ec59e0c1028d7542c6017bdaafb668c001051_prof);

    }

    public function getTemplateName()
    {
        return "private/gestion_usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 99,  221 => 98,  215 => 96,  206 => 95,  193 => 90,  187 => 86,  177 => 82,  171 => 79,  150 => 62,  144 => 60,  138 => 58,  136 => 57,  131 => 55,  128 => 54,  124 => 53,  104 => 35,  102 => 34,  76 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Gestión de usuarios{% endblock %}

{% block body %}
  <main class=\"main_mis_eventos\">
    <div class=\"bloque_contenedor clearfix\">

      <section class=\"menu_tabla\">
        <div class=\"filtrar_menu_tabla\">
          <form action=\"{{ path('tocketea_usuarios') }}\" method=\"post\" id=\"formFiltrarGestionUsr\">

            <div class=\"num_eventos_tabla\">
              <span>Gestión de usuarios</span>
            </div>

            <div class=\"filtrar_eventos_por_categoria\">
              <div>
                <span>Filtrar por: </span>
                <select name=\"rolUsuarios\" id=\"categoriaMisEventos\">
                  <option id=\"todosRoles\">Todos los usuarios</option>
                  <option value=\"ROLE_COMPRADOR\">Comprador</option>
                  <option value=\"ROLE_GESTOR\">Gestor</option>
                  <option value=\"ROLE_ADMINISTRADOR\">Administrador</option>
                </select>
                <i class=\"fa fa-caret-down\"></i>
              </div>
            </div>

          </form>
        </div>
      </section>

      {% if(usuarios is not empty) %}
        <section class=\"tabla\">
          <div class=\"tabla_responsive\">

            <div class=\"info_columnas_tabla\">
              <div class=\"columna_tabla_gestion_usuarios\">
                <span>Email</span>
              </div>
              <div class=\"columna_tabla_gestion_usuarios\">
                <span>Permisos</span>
              </div>
              <div class=\"columna_tabla_gestion_usuarios\">
                <span>Guardar</span>
              </div>
              <div class=\"columna_tabla_gestion_usuarios\">
                <span>Borrar</span>
              </div>
            </div>

            {% for usuario in usuarios %}
              <article class=\"fila_tabla\">
                <form action=\"{{ path('tocketea_upgradear_usuario') }}\" method=\"post\">
                  <div class=\"columna_tabla_gestion_usuarios\">
                    {% if usuario.imagen is not null %}
                      <img src=\"{{ asset('img/perfil/'~usuario.imagen) }}\" alt=\"\">
                    {% else %}
                      <img src=\"{{ asset('img/perfil/default.png') }}\" alt=\"\" title=\"default\">
                    {% endif %}
                    <div>{{ usuario.email }}</div>
                  </div>
                  <div class=\"columna_tabla_gestion_usuarios\">
                    <select name=\"rolUsuario\">
                      <option value=\"ROLE_COMPRADOR\">Comprador</option>
                      <option value=\"ROLE_GESTOR\">Gestor</option>
                      <option value=\"ROLE_ADMINISTRADOR\">Administrador</option>
                    </select>
                    <i class=\"fa fa-caret-down\"></i>
                  </div>
                  <div class=\"columna_tabla_gestion_usuarios\">
                    <div class=\"btn_submit_user\">
                      <i class=\"fa fa-floppy-o\"></i>
                      <input type=\"submit\" value=\"\">
                    </div>
                  </div>
                  <div class=\"columna_tabla_gestion_usuarios\">
                    <a href=\"/admin/usuarios/{{ usuario.id }}/eliminar\" class=\"borrar_elemento\"><i class=\"fa fa-trash-o\"></i></a>
                  </div>

                  <input type=\"hidden\" name=\"idUsuario\" value=\"{{ usuario.id }}\">
                </form>
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
  <script type=\"text/javascript\" src=\"{{ asset('js/gestion_usuarios.js') }}\"></script>
{% endblock %}", "private/gestion_usuarios.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\gestion_usuarios.html.twig");
    }
}
