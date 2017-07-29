<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3923a7537312516cb310f1a7d214d44c6014a936891830598ce845e7ef541f58 extends Twig_Template
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
        $__internal_f3599b94388dbed22741f5e183cf64a8d6340bdd86ba6537f400556da498b30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3599b94388dbed22741f5e183cf64a8d6340bdd86ba6537f400556da498b30f->enter($__internal_f3599b94388dbed22741f5e183cf64a8d6340bdd86ba6537f400556da498b30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_cc6e7a5d2d346f26baf53f03e21a921b5cb428643d7700b8aa7aba4b8b4c4dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6e7a5d2d346f26baf53f03e21a921b5cb428643d7700b8aa7aba4b8b4c4dfd->enter($__internal_cc6e7a5d2d346f26baf53f03e21a921b5cb428643d7700b8aa7aba4b8b4c4dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f3599b94388dbed22741f5e183cf64a8d6340bdd86ba6537f400556da498b30f->leave($__internal_f3599b94388dbed22741f5e183cf64a8d6340bdd86ba6537f400556da498b30f_prof);

        
        $__internal_cc6e7a5d2d346f26baf53f03e21a921b5cb428643d7700b8aa7aba4b8b4c4dfd->leave($__internal_cc6e7a5d2d346f26baf53f03e21a921b5cb428643d7700b8aa7aba4b8b4c4dfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
