<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_85b555113ae4d252c00beaeaed9569c3879ec276ab2350707bfdd6f5a301d468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_251d19f5013c345ad96c7f1535bc04bbe13d541432d3f614248422766e2b85db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251d19f5013c345ad96c7f1535bc04bbe13d541432d3f614248422766e2b85db->enter($__internal_251d19f5013c345ad96c7f1535bc04bbe13d541432d3f614248422766e2b85db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_812e1ce3e299ceef20543e09d5e073741087eaa0403bd4eacc22c487ff5b42f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812e1ce3e299ceef20543e09d5e073741087eaa0403bd4eacc22c487ff5b42f8->enter($__internal_812e1ce3e299ceef20543e09d5e073741087eaa0403bd4eacc22c487ff5b42f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251d19f5013c345ad96c7f1535bc04bbe13d541432d3f614248422766e2b85db->leave($__internal_251d19f5013c345ad96c7f1535bc04bbe13d541432d3f614248422766e2b85db_prof);

        
        $__internal_812e1ce3e299ceef20543e09d5e073741087eaa0403bd4eacc22c487ff5b42f8->leave($__internal_812e1ce3e299ceef20543e09d5e073741087eaa0403bd4eacc22c487ff5b42f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ca1de38bae89f16a23ef85081617911495f2783f9128b93e5489434326d9582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca1de38bae89f16a23ef85081617911495f2783f9128b93e5489434326d9582->enter($__internal_9ca1de38bae89f16a23ef85081617911495f2783f9128b93e5489434326d9582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3eb5bc09e7b1952e59df03f2a7d1c6edbe1bb31c045e812488fe0f5a494111e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb5bc09e7b1952e59df03f2a7d1c6edbe1bb31c045e812488fe0f5a494111e1->enter($__internal_3eb5bc09e7b1952e59df03f2a7d1c6edbe1bb31c045e812488fe0f5a494111e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3eb5bc09e7b1952e59df03f2a7d1c6edbe1bb31c045e812488fe0f5a494111e1->leave($__internal_3eb5bc09e7b1952e59df03f2a7d1c6edbe1bb31c045e812488fe0f5a494111e1_prof);

        
        $__internal_9ca1de38bae89f16a23ef85081617911495f2783f9128b93e5489434326d9582->leave($__internal_9ca1de38bae89f16a23ef85081617911495f2783f9128b93e5489434326d9582_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ea70b828b02415ad27a0919fbd27d6162edcd66f2bcce58bba9a7be7bdfad9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea70b828b02415ad27a0919fbd27d6162edcd66f2bcce58bba9a7be7bdfad9a->enter($__internal_7ea70b828b02415ad27a0919fbd27d6162edcd66f2bcce58bba9a7be7bdfad9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c2dceb897a0c79b823eb0295505fbe6168be9acf4b7c54623df9ec21357de52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2dceb897a0c79b823eb0295505fbe6168be9acf4b7c54623df9ec21357de52->enter($__internal_9c2dceb897a0c79b823eb0295505fbe6168be9acf4b7c54623df9ec21357de52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_9c2dceb897a0c79b823eb0295505fbe6168be9acf4b7c54623df9ec21357de52->leave($__internal_9c2dceb897a0c79b823eb0295505fbe6168be9acf4b7c54623df9ec21357de52_prof);

        
        $__internal_7ea70b828b02415ad27a0919fbd27d6162edcd66f2bcce58bba9a7be7bdfad9a->leave($__internal_7ea70b828b02415ad27a0919fbd27d6162edcd66f2bcce58bba9a7be7bdfad9a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
