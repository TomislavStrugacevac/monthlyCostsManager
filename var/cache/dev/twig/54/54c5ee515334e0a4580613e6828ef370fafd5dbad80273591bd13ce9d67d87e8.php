<?php

/* :default:index.html.twig */
class __TwigTemplate_86d84153e0a078c041b3eb27cc9e19464ae6ca5bad9ac0ffe463a2bf1a50a3e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07eca4cdbd8409ce349e3d561aecf7da156116643cf56c3c467aa6394d5eb662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07eca4cdbd8409ce349e3d561aecf7da156116643cf56c3c467aa6394d5eb662->enter($__internal_07eca4cdbd8409ce349e3d561aecf7da156116643cf56c3c467aa6394d5eb662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_c56d53373ceb1e5d2c885e0ffcc11618ee884b0460b44a477a69ef97f71c0443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56d53373ceb1e5d2c885e0ffcc11618ee884b0460b44a477a69ef97f71c0443->enter($__internal_c56d53373ceb1e5d2c885e0ffcc11618ee884b0460b44a477a69ef97f71c0443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07eca4cdbd8409ce349e3d561aecf7da156116643cf56c3c467aa6394d5eb662->leave($__internal_07eca4cdbd8409ce349e3d561aecf7da156116643cf56c3c467aa6394d5eb662_prof);

        
        $__internal_c56d53373ceb1e5d2c885e0ffcc11618ee884b0460b44a477a69ef97f71c0443->leave($__internal_c56d53373ceb1e5d2c885e0ffcc11618ee884b0460b44a477a69ef97f71c0443_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0854fa37a79115460b6452ed93e66cbca5455d18d31b921d506c854d7d04732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0854fa37a79115460b6452ed93e66cbca5455d18d31b921d506c854d7d04732->enter($__internal_f0854fa37a79115460b6452ed93e66cbca5455d18d31b921d506c854d7d04732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b99bce77dd1c9458abe02bb6039e3b50ba769c3a634cf3c2af1c736b077a814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b99bce77dd1c9458abe02bb6039e3b50ba769c3a634cf3c2af1c736b077a814->enter($__internal_0b99bce77dd1c9458abe02bb6039e3b50ba769c3a634cf3c2af1c736b077a814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Index page</h1>
";
        
        $__internal_0b99bce77dd1c9458abe02bb6039e3b50ba769c3a634cf3c2af1c736b077a814->leave($__internal_0b99bce77dd1c9458abe02bb6039e3b50ba769c3a634cf3c2af1c736b077a814_prof);

        
        $__internal_f0854fa37a79115460b6452ed93e66cbca5455d18d31b921d506c854d7d04732->leave($__internal_f0854fa37a79115460b6452ed93e66cbca5455d18d31b921d506c854d7d04732_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Index page</h1>
{% endblock %}
", ":default:index.html.twig", "D:\\WebstormProjects\\rezije\\app/Resources\\views/default/index.html.twig");
    }
}
