<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_09f66bc8c257df05b28b019110722ba1ae4f2ea88a4583245711d52719488c38 extends Twig_Template
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
        $__internal_6c3bf5cdc2155c8bb498a27f86dbedb952317b6750db2a1346d3aa6d85493562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3bf5cdc2155c8bb498a27f86dbedb952317b6750db2a1346d3aa6d85493562->enter($__internal_6c3bf5cdc2155c8bb498a27f86dbedb952317b6750db2a1346d3aa6d85493562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_119ca2c534912c0306902e9a9b80f87084867d5f15f11dff8e3a4815be0e6184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119ca2c534912c0306902e9a9b80f87084867d5f15f11dff8e3a4815be0e6184->enter($__internal_119ca2c534912c0306902e9a9b80f87084867d5f15f11dff8e3a4815be0e6184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6c3bf5cdc2155c8bb498a27f86dbedb952317b6750db2a1346d3aa6d85493562->leave($__internal_6c3bf5cdc2155c8bb498a27f86dbedb952317b6750db2a1346d3aa6d85493562_prof);

        
        $__internal_119ca2c534912c0306902e9a9b80f87084867d5f15f11dff8e3a4815be0e6184->leave($__internal_119ca2c534912c0306902e9a9b80f87084867d5f15f11dff8e3a4815be0e6184_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
