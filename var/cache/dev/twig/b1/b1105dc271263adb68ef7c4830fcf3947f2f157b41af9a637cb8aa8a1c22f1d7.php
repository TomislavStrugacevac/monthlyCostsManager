<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_544eceb123f90ab3edc622926914de35dee6fef7a019f24b2b99c393bf87f121 extends Twig_Template
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
        $__internal_cf0a3fde5f9891a3f9c954eee20abafab6f2194f2b75d27d6d5cfec78c088b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0a3fde5f9891a3f9c954eee20abafab6f2194f2b75d27d6d5cfec78c088b9e->enter($__internal_cf0a3fde5f9891a3f9c954eee20abafab6f2194f2b75d27d6d5cfec78c088b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a66af5791e7885bf1fff19059d5347b2ca99cf09aa4b428725bc07419af5a4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66af5791e7885bf1fff19059d5347b2ca99cf09aa4b428725bc07419af5a4b0->enter($__internal_a66af5791e7885bf1fff19059d5347b2ca99cf09aa4b428725bc07419af5a4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cf0a3fde5f9891a3f9c954eee20abafab6f2194f2b75d27d6d5cfec78c088b9e->leave($__internal_cf0a3fde5f9891a3f9c954eee20abafab6f2194f2b75d27d6d5cfec78c088b9e_prof);

        
        $__internal_a66af5791e7885bf1fff19059d5347b2ca99cf09aa4b428725bc07419af5a4b0->leave($__internal_a66af5791e7885bf1fff19059d5347b2ca99cf09aa4b428725bc07419af5a4b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
