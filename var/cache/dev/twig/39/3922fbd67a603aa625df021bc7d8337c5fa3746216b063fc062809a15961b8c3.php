<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_813d99ef0d6b208d6e353d560da2bfc8f22822f9aecd8e20199f983a94aca8d9 extends Twig_Template
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
        $__internal_ffa765d5227f402383771265f266087401e6c714f0fec19cff05725f65edbfba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa765d5227f402383771265f266087401e6c714f0fec19cff05725f65edbfba->enter($__internal_ffa765d5227f402383771265f266087401e6c714f0fec19cff05725f65edbfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c7eb16743981ddaa0b66c008be48437f337292ad319f8db72cff0bbff3a4ca8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7eb16743981ddaa0b66c008be48437f337292ad319f8db72cff0bbff3a4ca8e->enter($__internal_c7eb16743981ddaa0b66c008be48437f337292ad319f8db72cff0bbff3a4ca8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ffa765d5227f402383771265f266087401e6c714f0fec19cff05725f65edbfba->leave($__internal_ffa765d5227f402383771265f266087401e6c714f0fec19cff05725f65edbfba_prof);

        
        $__internal_c7eb16743981ddaa0b66c008be48437f337292ad319f8db72cff0bbff3a4ca8e->leave($__internal_c7eb16743981ddaa0b66c008be48437f337292ad319f8db72cff0bbff3a4ca8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
