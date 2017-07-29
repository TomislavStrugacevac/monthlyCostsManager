<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1761c6332f72f565103e18d5c150091532ed6585b7e1f579c0af27fdb290b664 extends Twig_Template
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
        $__internal_0b967483f27719fb3610221f164d6031d7e2f96ccccab089c21b79e8787171c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b967483f27719fb3610221f164d6031d7e2f96ccccab089c21b79e8787171c3->enter($__internal_0b967483f27719fb3610221f164d6031d7e2f96ccccab089c21b79e8787171c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7d6c3921ae9e6352bcf035558ab6d4d590aee9715347fa2556f42c2d77bebb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6c3921ae9e6352bcf035558ab6d4d590aee9715347fa2556f42c2d77bebb11->enter($__internal_7d6c3921ae9e6352bcf035558ab6d4d590aee9715347fa2556f42c2d77bebb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0b967483f27719fb3610221f164d6031d7e2f96ccccab089c21b79e8787171c3->leave($__internal_0b967483f27719fb3610221f164d6031d7e2f96ccccab089c21b79e8787171c3_prof);

        
        $__internal_7d6c3921ae9e6352bcf035558ab6d4d590aee9715347fa2556f42c2d77bebb11->leave($__internal_7d6c3921ae9e6352bcf035558ab6d4d590aee9715347fa2556f42c2d77bebb11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
