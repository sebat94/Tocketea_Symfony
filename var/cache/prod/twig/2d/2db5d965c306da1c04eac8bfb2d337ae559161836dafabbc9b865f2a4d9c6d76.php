<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5e35f853a04d0ef7e02f68a0fbfc0a73fe1fc6dcae0628261fa13f263f0a828a extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\tocketea_symfony\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
