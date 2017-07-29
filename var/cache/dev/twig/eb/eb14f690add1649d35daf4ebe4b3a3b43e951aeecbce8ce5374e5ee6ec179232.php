<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8abf24a7fd9465cf4596135d5b010e59c3764277ca4bd022e48a982905834aec extends Twig_Template
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
        $__internal_fc4cd6583e21d75d22edf3f253857960b0ee7a06421181a0fc897bcb4ff10da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4cd6583e21d75d22edf3f253857960b0ee7a06421181a0fc897bcb4ff10da9->enter($__internal_fc4cd6583e21d75d22edf3f253857960b0ee7a06421181a0fc897bcb4ff10da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d0e2317e1928fb36cedb67e329faac01a140a68a2479abccd5b157a7da33d4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e2317e1928fb36cedb67e329faac01a140a68a2479abccd5b157a7da33d4ce->enter($__internal_d0e2317e1928fb36cedb67e329faac01a140a68a2479abccd5b157a7da33d4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fc4cd6583e21d75d22edf3f253857960b0ee7a06421181a0fc897bcb4ff10da9->leave($__internal_fc4cd6583e21d75d22edf3f253857960b0ee7a06421181a0fc897bcb4ff10da9_prof);

        
        $__internal_d0e2317e1928fb36cedb67e329faac01a140a68a2479abccd5b157a7da33d4ce->leave($__internal_d0e2317e1928fb36cedb67e329faac01a140a68a2479abccd5b157a7da33d4ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
