<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_41528b0a910c67afbc829d8c99cafeedc5539d49b4d56fa069c84ab9f6226e9b extends Twig_Template
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
        $__internal_0033161bb3efdf7539366bb8a52700f27f64e223def234a92a89c8e47f4ffafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0033161bb3efdf7539366bb8a52700f27f64e223def234a92a89c8e47f4ffafe->enter($__internal_0033161bb3efdf7539366bb8a52700f27f64e223def234a92a89c8e47f4ffafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e106436c8065abb48105678ff3c6b5701c3ec764bddd66c607d7678369abb166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e106436c8065abb48105678ff3c6b5701c3ec764bddd66c607d7678369abb166->enter($__internal_e106436c8065abb48105678ff3c6b5701c3ec764bddd66c607d7678369abb166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0033161bb3efdf7539366bb8a52700f27f64e223def234a92a89c8e47f4ffafe->leave($__internal_0033161bb3efdf7539366bb8a52700f27f64e223def234a92a89c8e47f4ffafe_prof);

        
        $__internal_e106436c8065abb48105678ff3c6b5701c3ec764bddd66c607d7678369abb166->leave($__internal_e106436c8065abb48105678ff3c6b5701c3ec764bddd66c607d7678369abb166_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
