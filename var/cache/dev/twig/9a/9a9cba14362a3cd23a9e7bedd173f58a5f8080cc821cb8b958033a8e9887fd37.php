<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f42cf7b9155ccdb717fa27b41492c764fd40582c8244ab2e480d73845dac9d04 extends Twig_Template
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
        $__internal_28814038073d12f6fb722310c94e75b14c7a5524d35789001f56b8fad19a1c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28814038073d12f6fb722310c94e75b14c7a5524d35789001f56b8fad19a1c2a->enter($__internal_28814038073d12f6fb722310c94e75b14c7a5524d35789001f56b8fad19a1c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c6b734d4e92444b7210f515eecfb5267d1fb52075ae62c27a7518efd62d2ea5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b734d4e92444b7210f515eecfb5267d1fb52075ae62c27a7518efd62d2ea5e->enter($__internal_c6b734d4e92444b7210f515eecfb5267d1fb52075ae62c27a7518efd62d2ea5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_28814038073d12f6fb722310c94e75b14c7a5524d35789001f56b8fad19a1c2a->leave($__internal_28814038073d12f6fb722310c94e75b14c7a5524d35789001f56b8fad19a1c2a_prof);

        
        $__internal_c6b734d4e92444b7210f515eecfb5267d1fb52075ae62c27a7518efd62d2ea5e->leave($__internal_c6b734d4e92444b7210f515eecfb5267d1fb52075ae62c27a7518efd62d2ea5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
