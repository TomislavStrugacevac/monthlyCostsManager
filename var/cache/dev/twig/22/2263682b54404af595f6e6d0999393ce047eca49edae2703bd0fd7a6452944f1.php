<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_28b68d99d7b21fa81c8dfffcc170db1832250f1fe75792b54c460e3e8840b646 extends Twig_Template
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
        $__internal_fd71b3507d59a6e4a8f43d359c6cd449b89166b466aaa05a884f335a626fc437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd71b3507d59a6e4a8f43d359c6cd449b89166b466aaa05a884f335a626fc437->enter($__internal_fd71b3507d59a6e4a8f43d359c6cd449b89166b466aaa05a884f335a626fc437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_cf3d80a1c1be9078b6946d4215e63873caa50ee8066d12000438427d07c759d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3d80a1c1be9078b6946d4215e63873caa50ee8066d12000438427d07c759d7->enter($__internal_cf3d80a1c1be9078b6946d4215e63873caa50ee8066d12000438427d07c759d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fd71b3507d59a6e4a8f43d359c6cd449b89166b466aaa05a884f335a626fc437->leave($__internal_fd71b3507d59a6e4a8f43d359c6cd449b89166b466aaa05a884f335a626fc437_prof);

        
        $__internal_cf3d80a1c1be9078b6946d4215e63873caa50ee8066d12000438427d07c759d7->leave($__internal_cf3d80a1c1be9078b6946d4215e63873caa50ee8066d12000438427d07c759d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
