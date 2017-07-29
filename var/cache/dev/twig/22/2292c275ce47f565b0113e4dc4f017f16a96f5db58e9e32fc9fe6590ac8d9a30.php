<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_92b5add0d24ca0ad8c7a5440a2fd9b588025f39b146480613a48550b9ca2694d extends Twig_Template
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
        $__internal_ba3d6b748043fa644ab63b89b810313c9d759f557378d2f78775ae7a01656bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3d6b748043fa644ab63b89b810313c9d759f557378d2f78775ae7a01656bf7->enter($__internal_ba3d6b748043fa644ab63b89b810313c9d759f557378d2f78775ae7a01656bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_fd22ed3016edf7e8aab8a0f3a722e879be109241b1d9b7d76bcbacc59f2552ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd22ed3016edf7e8aab8a0f3a722e879be109241b1d9b7d76bcbacc59f2552ce->enter($__internal_fd22ed3016edf7e8aab8a0f3a722e879be109241b1d9b7d76bcbacc59f2552ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ba3d6b748043fa644ab63b89b810313c9d759f557378d2f78775ae7a01656bf7->leave($__internal_ba3d6b748043fa644ab63b89b810313c9d759f557378d2f78775ae7a01656bf7_prof);

        
        $__internal_fd22ed3016edf7e8aab8a0f3a722e879be109241b1d9b7d76bcbacc59f2552ce->leave($__internal_fd22ed3016edf7e8aab8a0f3a722e879be109241b1d9b7d76bcbacc59f2552ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
