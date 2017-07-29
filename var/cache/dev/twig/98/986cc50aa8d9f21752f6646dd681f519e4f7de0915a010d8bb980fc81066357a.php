<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d7abfa3213c3ffd0f88726be2576bc8ea425b5c93fbed7fe5b4e15b7d94dbd8 extends Twig_Template
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
        $__internal_a01f448de3e97368fdce0fb4698146bd9c12478b5575486c611a79369f40ebcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01f448de3e97368fdce0fb4698146bd9c12478b5575486c611a79369f40ebcc->enter($__internal_a01f448de3e97368fdce0fb4698146bd9c12478b5575486c611a79369f40ebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d3ddc8caeff0229519823c3bc0c56b107b52067dbf8539c87ce03bd3f49b2b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ddc8caeff0229519823c3bc0c56b107b52067dbf8539c87ce03bd3f49b2b36->enter($__internal_d3ddc8caeff0229519823c3bc0c56b107b52067dbf8539c87ce03bd3f49b2b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a01f448de3e97368fdce0fb4698146bd9c12478b5575486c611a79369f40ebcc->leave($__internal_a01f448de3e97368fdce0fb4698146bd9c12478b5575486c611a79369f40ebcc_prof);

        
        $__internal_d3ddc8caeff0229519823c3bc0c56b107b52067dbf8539c87ce03bd3f49b2b36->leave($__internal_d3ddc8caeff0229519823c3bc0c56b107b52067dbf8539c87ce03bd3f49b2b36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
