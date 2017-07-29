<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_67f1a80dcd22a9c5a3b1e727e18659ceb16ff2d03f369079be7ad57887e7b122 extends Twig_Template
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
        $__internal_c1e4c7e9326652359a90fe5c050311ff58a8863c172209ff3ceb76f94fd36356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e4c7e9326652359a90fe5c050311ff58a8863c172209ff3ceb76f94fd36356->enter($__internal_c1e4c7e9326652359a90fe5c050311ff58a8863c172209ff3ceb76f94fd36356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_08339ca8f8bd5fd70a8f2be7bf72286ebfc5b0612bb7cd48e255a0ff0ef3a861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08339ca8f8bd5fd70a8f2be7bf72286ebfc5b0612bb7cd48e255a0ff0ef3a861->enter($__internal_08339ca8f8bd5fd70a8f2be7bf72286ebfc5b0612bb7cd48e255a0ff0ef3a861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c1e4c7e9326652359a90fe5c050311ff58a8863c172209ff3ceb76f94fd36356->leave($__internal_c1e4c7e9326652359a90fe5c050311ff58a8863c172209ff3ceb76f94fd36356_prof);

        
        $__internal_08339ca8f8bd5fd70a8f2be7bf72286ebfc5b0612bb7cd48e255a0ff0ef3a861->leave($__internal_08339ca8f8bd5fd70a8f2be7bf72286ebfc5b0612bb7cd48e255a0ff0ef3a861_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
