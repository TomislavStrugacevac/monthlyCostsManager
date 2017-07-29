<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_70b1e2a7bde8dd80773bb175d771ca222c4fe9bccd1d1596af18e633d5f7a3f2 extends Twig_Template
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
        $__internal_88adc3d166c90cb6be33056f0c27e0514f4b1d5798f184bdb4cccc57158871bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88adc3d166c90cb6be33056f0c27e0514f4b1d5798f184bdb4cccc57158871bb->enter($__internal_88adc3d166c90cb6be33056f0c27e0514f4b1d5798f184bdb4cccc57158871bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_676eb5e7d5eda8b81faabed3a97c25664dc6f265f80522a5dd55f6c955fd90ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676eb5e7d5eda8b81faabed3a97c25664dc6f265f80522a5dd55f6c955fd90ac->enter($__internal_676eb5e7d5eda8b81faabed3a97c25664dc6f265f80522a5dd55f6c955fd90ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_88adc3d166c90cb6be33056f0c27e0514f4b1d5798f184bdb4cccc57158871bb->leave($__internal_88adc3d166c90cb6be33056f0c27e0514f4b1d5798f184bdb4cccc57158871bb_prof);

        
        $__internal_676eb5e7d5eda8b81faabed3a97c25664dc6f265f80522a5dd55f6c955fd90ac->leave($__internal_676eb5e7d5eda8b81faabed3a97c25664dc6f265f80522a5dd55f6c955fd90ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
