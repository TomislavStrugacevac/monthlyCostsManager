<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a43b1e1d79520b2d8dce5ac40d507c5d7c2b0412edb5744936fb2a9a6cd4630c extends Twig_Template
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
        $__internal_af2b451744e4be6f0dfb6c9b8a05ff09399c04afdab5a3275eebdadcd909e013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2b451744e4be6f0dfb6c9b8a05ff09399c04afdab5a3275eebdadcd909e013->enter($__internal_af2b451744e4be6f0dfb6c9b8a05ff09399c04afdab5a3275eebdadcd909e013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1b6234c38f7d829db6b83a92232aaa4f313d4b2c1cc46b9c59f0996dc66ccd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6234c38f7d829db6b83a92232aaa4f313d4b2c1cc46b9c59f0996dc66ccd59->enter($__internal_1b6234c38f7d829db6b83a92232aaa4f313d4b2c1cc46b9c59f0996dc66ccd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_af2b451744e4be6f0dfb6c9b8a05ff09399c04afdab5a3275eebdadcd909e013->leave($__internal_af2b451744e4be6f0dfb6c9b8a05ff09399c04afdab5a3275eebdadcd909e013_prof);

        
        $__internal_1b6234c38f7d829db6b83a92232aaa4f313d4b2c1cc46b9c59f0996dc66ccd59->leave($__internal_1b6234c38f7d829db6b83a92232aaa4f313d4b2c1cc46b9c59f0996dc66ccd59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
