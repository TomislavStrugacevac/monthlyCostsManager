<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_654892c36d44fb0b0f53afc7f2616157508e5e2bff2318124865b6ecedde41af extends Twig_Template
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
        $__internal_0f69a6653ea8b8b08e495787edd975005bdad881ac29fcb4353d2000f98cc7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f69a6653ea8b8b08e495787edd975005bdad881ac29fcb4353d2000f98cc7ee->enter($__internal_0f69a6653ea8b8b08e495787edd975005bdad881ac29fcb4353d2000f98cc7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f91322535fb2c0714f376d31fc389d846a858b8abbb4eb27a678f1087b14b5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91322535fb2c0714f376d31fc389d846a858b8abbb4eb27a678f1087b14b5d4->enter($__internal_f91322535fb2c0714f376d31fc389d846a858b8abbb4eb27a678f1087b14b5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0f69a6653ea8b8b08e495787edd975005bdad881ac29fcb4353d2000f98cc7ee->leave($__internal_0f69a6653ea8b8b08e495787edd975005bdad881ac29fcb4353d2000f98cc7ee_prof);

        
        $__internal_f91322535fb2c0714f376d31fc389d846a858b8abbb4eb27a678f1087b14b5d4->leave($__internal_f91322535fb2c0714f376d31fc389d846a858b8abbb4eb27a678f1087b14b5d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
