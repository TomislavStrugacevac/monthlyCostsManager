<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_90784263706ccb0d5e5d97ab31ddaa0342fa64a83aa6f3878240b141aadd7566 extends Twig_Template
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
        $__internal_016ce4710815064c90abcce843ee60cac59d147c791f7d3a3779434530f96ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016ce4710815064c90abcce843ee60cac59d147c791f7d3a3779434530f96ded->enter($__internal_016ce4710815064c90abcce843ee60cac59d147c791f7d3a3779434530f96ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_3acb62c7c26b14a11410475aedde92a28d3a38596bc2dc67e68aa8d113003d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acb62c7c26b14a11410475aedde92a28d3a38596bc2dc67e68aa8d113003d92->enter($__internal_3acb62c7c26b14a11410475aedde92a28d3a38596bc2dc67e68aa8d113003d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_016ce4710815064c90abcce843ee60cac59d147c791f7d3a3779434530f96ded->leave($__internal_016ce4710815064c90abcce843ee60cac59d147c791f7d3a3779434530f96ded_prof);

        
        $__internal_3acb62c7c26b14a11410475aedde92a28d3a38596bc2dc67e68aa8d113003d92->leave($__internal_3acb62c7c26b14a11410475aedde92a28d3a38596bc2dc67e68aa8d113003d92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
