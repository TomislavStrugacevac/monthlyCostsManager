<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ef1eab20373bc4335e8e7e0d725fb63206f6cf7b351e7b56416436a02b151b56 extends Twig_Template
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
        $__internal_730d1a99e7ab526f07d8e49b3aa97ad1f096f86909aec83c72ff0d4edfdd13a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730d1a99e7ab526f07d8e49b3aa97ad1f096f86909aec83c72ff0d4edfdd13a6->enter($__internal_730d1a99e7ab526f07d8e49b3aa97ad1f096f86909aec83c72ff0d4edfdd13a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7987796ef9fe84c43debe3bf171f3b1b0abbd7384cf6ccd3520ad76261c6b1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7987796ef9fe84c43debe3bf171f3b1b0abbd7384cf6ccd3520ad76261c6b1c1->enter($__internal_7987796ef9fe84c43debe3bf171f3b1b0abbd7384cf6ccd3520ad76261c6b1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_730d1a99e7ab526f07d8e49b3aa97ad1f096f86909aec83c72ff0d4edfdd13a6->leave($__internal_730d1a99e7ab526f07d8e49b3aa97ad1f096f86909aec83c72ff0d4edfdd13a6_prof);

        
        $__internal_7987796ef9fe84c43debe3bf171f3b1b0abbd7384cf6ccd3520ad76261c6b1c1->leave($__internal_7987796ef9fe84c43debe3bf171f3b1b0abbd7384cf6ccd3520ad76261c6b1c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
