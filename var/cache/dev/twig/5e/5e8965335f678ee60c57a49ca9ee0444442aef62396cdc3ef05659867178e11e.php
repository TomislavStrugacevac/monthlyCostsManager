<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8e056758bbf498e36dc394e54ea3c1c9621998f54a210fc676ea4fce2635ce03 extends Twig_Template
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
        $__internal_6365a197128cbdbb6f9d41b5e4b67e25449cc004f1112776bdf771b300544afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6365a197128cbdbb6f9d41b5e4b67e25449cc004f1112776bdf771b300544afb->enter($__internal_6365a197128cbdbb6f9d41b5e4b67e25449cc004f1112776bdf771b300544afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_335265b5b5ab62f9af6fae0f900e40ce76e1087b6fe22f7cd79002fe223ac140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335265b5b5ab62f9af6fae0f900e40ce76e1087b6fe22f7cd79002fe223ac140->enter($__internal_335265b5b5ab62f9af6fae0f900e40ce76e1087b6fe22f7cd79002fe223ac140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6365a197128cbdbb6f9d41b5e4b67e25449cc004f1112776bdf771b300544afb->leave($__internal_6365a197128cbdbb6f9d41b5e4b67e25449cc004f1112776bdf771b300544afb_prof);

        
        $__internal_335265b5b5ab62f9af6fae0f900e40ce76e1087b6fe22f7cd79002fe223ac140->leave($__internal_335265b5b5ab62f9af6fae0f900e40ce76e1087b6fe22f7cd79002fe223ac140_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
