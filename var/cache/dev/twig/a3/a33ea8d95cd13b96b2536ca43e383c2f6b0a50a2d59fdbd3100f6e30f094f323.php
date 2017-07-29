<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d203453b5adb32e15cb07be2bd4dfdd5f32595680749d72d52af32f8d7673393 extends Twig_Template
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
        $__internal_05440961a0592fb8318a2f4dbe822fd9eee0d9929a0d71e44561a55148e9dcc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05440961a0592fb8318a2f4dbe822fd9eee0d9929a0d71e44561a55148e9dcc0->enter($__internal_05440961a0592fb8318a2f4dbe822fd9eee0d9929a0d71e44561a55148e9dcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_6c40d37600b169c7941c03a91d5891ab613e6ee6370964bd0bdbc5f5fe871f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c40d37600b169c7941c03a91d5891ab613e6ee6370964bd0bdbc5f5fe871f95->enter($__internal_6c40d37600b169c7941c03a91d5891ab613e6ee6370964bd0bdbc5f5fe871f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_05440961a0592fb8318a2f4dbe822fd9eee0d9929a0d71e44561a55148e9dcc0->leave($__internal_05440961a0592fb8318a2f4dbe822fd9eee0d9929a0d71e44561a55148e9dcc0_prof);

        
        $__internal_6c40d37600b169c7941c03a91d5891ab613e6ee6370964bd0bdbc5f5fe871f95->leave($__internal_6c40d37600b169c7941c03a91d5891ab613e6ee6370964bd0bdbc5f5fe871f95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
