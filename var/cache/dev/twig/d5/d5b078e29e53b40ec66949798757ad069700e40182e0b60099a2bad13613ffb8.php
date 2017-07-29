<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9ed47e9122ca43e0b48a170612f7b022aab2ce81a9e7820b48a3f9c9bdbe829f extends Twig_Template
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
        $__internal_35fa6f5d745f82935b4f09bf970ee4ab678360834818da318ff88df176f03256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fa6f5d745f82935b4f09bf970ee4ab678360834818da318ff88df176f03256->enter($__internal_35fa6f5d745f82935b4f09bf970ee4ab678360834818da318ff88df176f03256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6fe137dee538019106ea56af9a7febf650484e58afccc868c1d51a547007a716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe137dee538019106ea56af9a7febf650484e58afccc868c1d51a547007a716->enter($__internal_6fe137dee538019106ea56af9a7febf650484e58afccc868c1d51a547007a716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_35fa6f5d745f82935b4f09bf970ee4ab678360834818da318ff88df176f03256->leave($__internal_35fa6f5d745f82935b4f09bf970ee4ab678360834818da318ff88df176f03256_prof);

        
        $__internal_6fe137dee538019106ea56af9a7febf650484e58afccc868c1d51a547007a716->leave($__internal_6fe137dee538019106ea56af9a7febf650484e58afccc868c1d51a547007a716_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
