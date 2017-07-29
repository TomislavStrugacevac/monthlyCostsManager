<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_20ec72c20e22018c92b4e6421bfb94ba17b75681a627b008b254483f5d18155d extends Twig_Template
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
        $__internal_876494c569363a9d45419c7591649768042762c3a29289062db2e17a81a04b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876494c569363a9d45419c7591649768042762c3a29289062db2e17a81a04b7e->enter($__internal_876494c569363a9d45419c7591649768042762c3a29289062db2e17a81a04b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6268d98e2e3210538113c370eb1384ad827ef22017844315ade693fc8812f2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6268d98e2e3210538113c370eb1384ad827ef22017844315ade693fc8812f2e4->enter($__internal_6268d98e2e3210538113c370eb1384ad827ef22017844315ade693fc8812f2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_876494c569363a9d45419c7591649768042762c3a29289062db2e17a81a04b7e->leave($__internal_876494c569363a9d45419c7591649768042762c3a29289062db2e17a81a04b7e_prof);

        
        $__internal_6268d98e2e3210538113c370eb1384ad827ef22017844315ade693fc8812f2e4->leave($__internal_6268d98e2e3210538113c370eb1384ad827ef22017844315ade693fc8812f2e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
