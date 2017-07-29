<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c7847c9774e3c0e990835cbbf897527f323b9e5d6725d033aded69cdb012604c extends Twig_Template
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
        $__internal_4a4ea275cb5e300aa6f83756b626fb39025705f579fedfedf37bb3abcd5d825a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4ea275cb5e300aa6f83756b626fb39025705f579fedfedf37bb3abcd5d825a->enter($__internal_4a4ea275cb5e300aa6f83756b626fb39025705f579fedfedf37bb3abcd5d825a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3a395a6ed2d09a9874a069b5c3892678e283a3b447e987080807e4a0a1660fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a395a6ed2d09a9874a069b5c3892678e283a3b447e987080807e4a0a1660fb9->enter($__internal_3a395a6ed2d09a9874a069b5c3892678e283a3b447e987080807e4a0a1660fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4a4ea275cb5e300aa6f83756b626fb39025705f579fedfedf37bb3abcd5d825a->leave($__internal_4a4ea275cb5e300aa6f83756b626fb39025705f579fedfedf37bb3abcd5d825a_prof);

        
        $__internal_3a395a6ed2d09a9874a069b5c3892678e283a3b447e987080807e4a0a1660fb9->leave($__internal_3a395a6ed2d09a9874a069b5c3892678e283a3b447e987080807e4a0a1660fb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
