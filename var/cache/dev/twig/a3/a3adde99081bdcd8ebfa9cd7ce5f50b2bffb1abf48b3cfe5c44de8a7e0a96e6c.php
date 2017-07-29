<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_590e0d1656fe47aef845ab4cc569065fffc90539b95839532bd5d7832f02dd2f extends Twig_Template
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
        $__internal_68f935a899ef0809a02495918ec5cd5ee1f640052e53b9aab36f4e696631a43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f935a899ef0809a02495918ec5cd5ee1f640052e53b9aab36f4e696631a43c->enter($__internal_68f935a899ef0809a02495918ec5cd5ee1f640052e53b9aab36f4e696631a43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7a484bee2b25850bed88e40d031f4c0fea70fbeaaf59fa6cb0bb14ec53871aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a484bee2b25850bed88e40d031f4c0fea70fbeaaf59fa6cb0bb14ec53871aac->enter($__internal_7a484bee2b25850bed88e40d031f4c0fea70fbeaaf59fa6cb0bb14ec53871aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_68f935a899ef0809a02495918ec5cd5ee1f640052e53b9aab36f4e696631a43c->leave($__internal_68f935a899ef0809a02495918ec5cd5ee1f640052e53b9aab36f4e696631a43c_prof);

        
        $__internal_7a484bee2b25850bed88e40d031f4c0fea70fbeaaf59fa6cb0bb14ec53871aac->leave($__internal_7a484bee2b25850bed88e40d031f4c0fea70fbeaaf59fa6cb0bb14ec53871aac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
