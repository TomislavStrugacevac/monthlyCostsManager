<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_db3e18dc0eab23a86facc6241065d5b06e315453ac9bfd166141071a94449b10 extends Twig_Template
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
        $__internal_c30c7316561e54e2eef5515712de2bfb0f9933af05bcfc4589212fe374cf0789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30c7316561e54e2eef5515712de2bfb0f9933af05bcfc4589212fe374cf0789->enter($__internal_c30c7316561e54e2eef5515712de2bfb0f9933af05bcfc4589212fe374cf0789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c4a5f4bb379a3c4eb322ebbc6ec7dcfb477e5d4167f06392bf8f49c26947f3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a5f4bb379a3c4eb322ebbc6ec7dcfb477e5d4167f06392bf8f49c26947f3fe->enter($__internal_c4a5f4bb379a3c4eb322ebbc6ec7dcfb477e5d4167f06392bf8f49c26947f3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c30c7316561e54e2eef5515712de2bfb0f9933af05bcfc4589212fe374cf0789->leave($__internal_c30c7316561e54e2eef5515712de2bfb0f9933af05bcfc4589212fe374cf0789_prof);

        
        $__internal_c4a5f4bb379a3c4eb322ebbc6ec7dcfb477e5d4167f06392bf8f49c26947f3fe->leave($__internal_c4a5f4bb379a3c4eb322ebbc6ec7dcfb477e5d4167f06392bf8f49c26947f3fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
