<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_1fb8e51e3a05d1866884ea81b8df2aff6c06845ff91d718716e0e05d0b06033e extends Twig_Template
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
        $__internal_7efe4d1307fb942de81708d05ac8d19bdd952e8e530fe918d54268add36ba36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7efe4d1307fb942de81708d05ac8d19bdd952e8e530fe918d54268add36ba36b->enter($__internal_7efe4d1307fb942de81708d05ac8d19bdd952e8e530fe918d54268add36ba36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_32ac8ffa31da6b8ec53e5a76f4d0b1b936a811b33bebe2fa1f2654091ee75513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ac8ffa31da6b8ec53e5a76f4d0b1b936a811b33bebe2fa1f2654091ee75513->enter($__internal_32ac8ffa31da6b8ec53e5a76f4d0b1b936a811b33bebe2fa1f2654091ee75513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7efe4d1307fb942de81708d05ac8d19bdd952e8e530fe918d54268add36ba36b->leave($__internal_7efe4d1307fb942de81708d05ac8d19bdd952e8e530fe918d54268add36ba36b_prof);

        
        $__internal_32ac8ffa31da6b8ec53e5a76f4d0b1b936a811b33bebe2fa1f2654091ee75513->leave($__internal_32ac8ffa31da6b8ec53e5a76f4d0b1b936a811b33bebe2fa1f2654091ee75513_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
