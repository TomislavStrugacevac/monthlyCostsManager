<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8c37657f0cb6e9e86578da9b539773576896016ed545a57263743211646ea8f8 extends Twig_Template
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
        $__internal_bf79d4ed6f767f58c96a42bee9d74f49ccae0ce2b9fb78ccfca677fa90af3020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf79d4ed6f767f58c96a42bee9d74f49ccae0ce2b9fb78ccfca677fa90af3020->enter($__internal_bf79d4ed6f767f58c96a42bee9d74f49ccae0ce2b9fb78ccfca677fa90af3020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8b852f50bd8a554d80033a592f364d9c6921e366996bab672f266c7183bfc342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b852f50bd8a554d80033a592f364d9c6921e366996bab672f266c7183bfc342->enter($__internal_8b852f50bd8a554d80033a592f364d9c6921e366996bab672f266c7183bfc342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bf79d4ed6f767f58c96a42bee9d74f49ccae0ce2b9fb78ccfca677fa90af3020->leave($__internal_bf79d4ed6f767f58c96a42bee9d74f49ccae0ce2b9fb78ccfca677fa90af3020_prof);

        
        $__internal_8b852f50bd8a554d80033a592f364d9c6921e366996bab672f266c7183bfc342->leave($__internal_8b852f50bd8a554d80033a592f364d9c6921e366996bab672f266c7183bfc342_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
