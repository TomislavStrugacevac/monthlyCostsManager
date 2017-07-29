<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_537dafe19aad3c085ee6e8de3defcf10426c3173281ebdaf33090df7fe45315b extends Twig_Template
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
        $__internal_3ed0ed58760f9f1bd803a77cdff23e2fbeda4f339ac6e155da92f2ad892859c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed0ed58760f9f1bd803a77cdff23e2fbeda4f339ac6e155da92f2ad892859c2->enter($__internal_3ed0ed58760f9f1bd803a77cdff23e2fbeda4f339ac6e155da92f2ad892859c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_49b1a578cf72235bdfd45bb629fb5b005b5bfa927c9539b1fd3eb8ebfb970cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b1a578cf72235bdfd45bb629fb5b005b5bfa927c9539b1fd3eb8ebfb970cf6->enter($__internal_49b1a578cf72235bdfd45bb629fb5b005b5bfa927c9539b1fd3eb8ebfb970cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3ed0ed58760f9f1bd803a77cdff23e2fbeda4f339ac6e155da92f2ad892859c2->leave($__internal_3ed0ed58760f9f1bd803a77cdff23e2fbeda4f339ac6e155da92f2ad892859c2_prof);

        
        $__internal_49b1a578cf72235bdfd45bb629fb5b005b5bfa927c9539b1fd3eb8ebfb970cf6->leave($__internal_49b1a578cf72235bdfd45bb629fb5b005b5bfa927c9539b1fd3eb8ebfb970cf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
