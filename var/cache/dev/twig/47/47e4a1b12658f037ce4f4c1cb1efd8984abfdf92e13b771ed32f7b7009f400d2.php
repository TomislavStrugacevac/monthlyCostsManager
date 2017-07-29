<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_99bce2bfd007c613e083694b9ccfe0285a4efc2dece9d917b7fd0b2ab2e372fa extends Twig_Template
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
        $__internal_04c27bc7d6031c2a10960ee414a600b36d7512d7f7caaa6ddb1a6074659b888d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c27bc7d6031c2a10960ee414a600b36d7512d7f7caaa6ddb1a6074659b888d->enter($__internal_04c27bc7d6031c2a10960ee414a600b36d7512d7f7caaa6ddb1a6074659b888d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1290e4e6ad4e1efd5dfceaa7d19e65d407eaf8d53eb22218d71b41f92b995dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1290e4e6ad4e1efd5dfceaa7d19e65d407eaf8d53eb22218d71b41f92b995dbc->enter($__internal_1290e4e6ad4e1efd5dfceaa7d19e65d407eaf8d53eb22218d71b41f92b995dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_04c27bc7d6031c2a10960ee414a600b36d7512d7f7caaa6ddb1a6074659b888d->leave($__internal_04c27bc7d6031c2a10960ee414a600b36d7512d7f7caaa6ddb1a6074659b888d_prof);

        
        $__internal_1290e4e6ad4e1efd5dfceaa7d19e65d407eaf8d53eb22218d71b41f92b995dbc->leave($__internal_1290e4e6ad4e1efd5dfceaa7d19e65d407eaf8d53eb22218d71b41f92b995dbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
