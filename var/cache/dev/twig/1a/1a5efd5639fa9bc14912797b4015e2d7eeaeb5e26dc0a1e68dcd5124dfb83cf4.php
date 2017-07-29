<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_42b242e64ca85e830393a8cb59b29dc060699f5b68fa1e61b95ce086abc6c4ab extends Twig_Template
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
        $__internal_efa243802a465a3e088247b8fe10feeee8a0ac1a00300e4c3070564fb574e6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa243802a465a3e088247b8fe10feeee8a0ac1a00300e4c3070564fb574e6cd->enter($__internal_efa243802a465a3e088247b8fe10feeee8a0ac1a00300e4c3070564fb574e6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7c5efc397f109bd15a4751b99589c1fec5735e35a4a628c469367df102d3709f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5efc397f109bd15a4751b99589c1fec5735e35a4a628c469367df102d3709f->enter($__internal_7c5efc397f109bd15a4751b99589c1fec5735e35a4a628c469367df102d3709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_efa243802a465a3e088247b8fe10feeee8a0ac1a00300e4c3070564fb574e6cd->leave($__internal_efa243802a465a3e088247b8fe10feeee8a0ac1a00300e4c3070564fb574e6cd_prof);

        
        $__internal_7c5efc397f109bd15a4751b99589c1fec5735e35a4a628c469367df102d3709f->leave($__internal_7c5efc397f109bd15a4751b99589c1fec5735e35a4a628c469367df102d3709f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
