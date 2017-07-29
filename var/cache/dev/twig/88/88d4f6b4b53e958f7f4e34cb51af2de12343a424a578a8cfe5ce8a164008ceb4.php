<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_320956a3c8876e0ae5aea8abca1e6ded0343eb39ff2d5228fae9d739e959eec2 extends Twig_Template
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
        $__internal_48cac5592408ac56f085931e56097f1fdc55493abb96deed0793922b1bf7c716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cac5592408ac56f085931e56097f1fdc55493abb96deed0793922b1bf7c716->enter($__internal_48cac5592408ac56f085931e56097f1fdc55493abb96deed0793922b1bf7c716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b7df35bf63676e5a289766d28fcaf92ec351b3804010d9d647472f9c3ef2049d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7df35bf63676e5a289766d28fcaf92ec351b3804010d9d647472f9c3ef2049d->enter($__internal_b7df35bf63676e5a289766d28fcaf92ec351b3804010d9d647472f9c3ef2049d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_48cac5592408ac56f085931e56097f1fdc55493abb96deed0793922b1bf7c716->leave($__internal_48cac5592408ac56f085931e56097f1fdc55493abb96deed0793922b1bf7c716_prof);

        
        $__internal_b7df35bf63676e5a289766d28fcaf92ec351b3804010d9d647472f9c3ef2049d->leave($__internal_b7df35bf63676e5a289766d28fcaf92ec351b3804010d9d647472f9c3ef2049d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
