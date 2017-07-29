<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_035d5de76bad5154611344b9ac0306e9d8411a66319f11808d0e93e055efb968 extends Twig_Template
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
        $__internal_a6f47f3a9245b08a997e02c05d9d91d0b031255c5e295aa1858ca6200da6c7f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f47f3a9245b08a997e02c05d9d91d0b031255c5e295aa1858ca6200da6c7f3->enter($__internal_a6f47f3a9245b08a997e02c05d9d91d0b031255c5e295aa1858ca6200da6c7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_df2429041b7b3bcd978dc87785dab783e76872ddd714beeef226bf2f1fd10e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2429041b7b3bcd978dc87785dab783e76872ddd714beeef226bf2f1fd10e2a->enter($__internal_df2429041b7b3bcd978dc87785dab783e76872ddd714beeef226bf2f1fd10e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a6f47f3a9245b08a997e02c05d9d91d0b031255c5e295aa1858ca6200da6c7f3->leave($__internal_a6f47f3a9245b08a997e02c05d9d91d0b031255c5e295aa1858ca6200da6c7f3_prof);

        
        $__internal_df2429041b7b3bcd978dc87785dab783e76872ddd714beeef226bf2f1fd10e2a->leave($__internal_df2429041b7b3bcd978dc87785dab783e76872ddd714beeef226bf2f1fd10e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
