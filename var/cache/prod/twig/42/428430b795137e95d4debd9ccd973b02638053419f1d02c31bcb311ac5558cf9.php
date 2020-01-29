<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b91a46b069d16d9b2a0e93b133b87081665c39ccb94f350d884b45eb5fdd4192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\tocketea_symfony\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
