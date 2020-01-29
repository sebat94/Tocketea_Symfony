<?php

/* private/gestion_usuarios.html.twig */
class __TwigTemplate_30de3ac4b62fa302fded42ddb49e26229d12e226a961b198c7d5cb8aaeeff0ae extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Gestión de usuarios";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        if ( !twig_test_empty(($context["usuarios"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["usuarios"] ?? null));
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
    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  183 => 99,  179 => 98,  173 => 96,  170 => 95,  163 => 90,  157 => 86,  147 => 82,  141 => 79,  120 => 62,  114 => 60,  108 => 58,  106 => 57,  101 => 55,  98 => 54,  94 => 53,  74 => 35,  72 => 34,  46 => 11,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "private/gestion_usuarios.html.twig", "C:\\xampp\\htdocs\\tocketea_symfony\\templates\\private\\gestion_usuarios.html.twig");
    }
}
