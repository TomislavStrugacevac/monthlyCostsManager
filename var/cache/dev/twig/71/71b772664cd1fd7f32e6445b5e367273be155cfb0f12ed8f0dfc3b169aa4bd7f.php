<?php

/* default/index.html.twig */
class __TwigTemplate_86f96822ecc2f5a2f26fac572780936195d6cfff81e7e381121ca4f9f7b17a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_23016095207bcee2aa26ae555b9bea3f5bce7e0fcdf6dd3cca600d71b847fcec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23016095207bcee2aa26ae555b9bea3f5bce7e0fcdf6dd3cca600d71b847fcec->enter($__internal_23016095207bcee2aa26ae555b9bea3f5bce7e0fcdf6dd3cca600d71b847fcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_51ff47a6860704a1623beb95427247f57838165f5d503c531c0b49dc561031cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ff47a6860704a1623beb95427247f57838165f5d503c531c0b49dc561031cd->enter($__internal_51ff47a6860704a1623beb95427247f57838165f5d503c531c0b49dc561031cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23016095207bcee2aa26ae555b9bea3f5bce7e0fcdf6dd3cca600d71b847fcec->leave($__internal_23016095207bcee2aa26ae555b9bea3f5bce7e0fcdf6dd3cca600d71b847fcec_prof);

        
        $__internal_51ff47a6860704a1623beb95427247f57838165f5d503c531c0b49dc561031cd->leave($__internal_51ff47a6860704a1623beb95427247f57838165f5d503c531c0b49dc561031cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c7f8bf40b1b27c82cd12830114b965baa27accb6c74a8390f044597279d2bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7f8bf40b1b27c82cd12830114b965baa27accb6c74a8390f044597279d2bbe->enter($__internal_3c7f8bf40b1b27c82cd12830114b965baa27accb6c74a8390f044597279d2bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_481845ddeded3aa1e9a6cad39f7595e464c0192f3c395953f2de47ea8e22470a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481845ddeded3aa1e9a6cad39f7595e464c0192f3c395953f2de47ea8e22470a->enter($__internal_481845ddeded3aa1e9a6cad39f7595e464c0192f3c395953f2de47ea8e22470a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Index page</h1>
";
        
        $__internal_481845ddeded3aa1e9a6cad39f7595e464c0192f3c395953f2de47ea8e22470a->leave($__internal_481845ddeded3aa1e9a6cad39f7595e464c0192f3c395953f2de47ea8e22470a_prof);

        
        $__internal_3c7f8bf40b1b27c82cd12830114b965baa27accb6c74a8390f044597279d2bbe->leave($__internal_3c7f8bf40b1b27c82cd12830114b965baa27accb6c74a8390f044597279d2bbe_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
", "default/index.html.twig", "D:\\WebstormProjects\\rezije\\app\\Resources\\views\\default\\index.html.twig");
    }
}
