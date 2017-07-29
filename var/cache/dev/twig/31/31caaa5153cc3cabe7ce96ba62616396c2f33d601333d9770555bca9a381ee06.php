<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c0d02a7d69967e2e3366a7ebb84ff4c889dd0ded0eaf73db49ab057b1bfa5a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_6030c724dd2b4674f07abcd0e6af85c8bc924be0c29f4a382777e373681767f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6030c724dd2b4674f07abcd0e6af85c8bc924be0c29f4a382777e373681767f7->enter($__internal_6030c724dd2b4674f07abcd0e6af85c8bc924be0c29f4a382777e373681767f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e7ba1a8553d0f55dcf8d74fddb76e5e511999688ff66768d3d71620d954deb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ba1a8553d0f55dcf8d74fddb76e5e511999688ff66768d3d71620d954deb31->enter($__internal_e7ba1a8553d0f55dcf8d74fddb76e5e511999688ff66768d3d71620d954deb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6030c724dd2b4674f07abcd0e6af85c8bc924be0c29f4a382777e373681767f7->leave($__internal_6030c724dd2b4674f07abcd0e6af85c8bc924be0c29f4a382777e373681767f7_prof);

        
        $__internal_e7ba1a8553d0f55dcf8d74fddb76e5e511999688ff66768d3d71620d954deb31->leave($__internal_e7ba1a8553d0f55dcf8d74fddb76e5e511999688ff66768d3d71620d954deb31_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f2a3336e443e0e59a14a636340252c9a78179fc36258d740f7760945554522a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2a3336e443e0e59a14a636340252c9a78179fc36258d740f7760945554522a->enter($__internal_6f2a3336e443e0e59a14a636340252c9a78179fc36258d740f7760945554522a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7db30bb03cc0f50b446e9716531f058310ac7531bc1fd3061ea0d30192c92985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db30bb03cc0f50b446e9716531f058310ac7531bc1fd3061ea0d30192c92985->enter($__internal_7db30bb03cc0f50b446e9716531f058310ac7531bc1fd3061ea0d30192c92985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7db30bb03cc0f50b446e9716531f058310ac7531bc1fd3061ea0d30192c92985->leave($__internal_7db30bb03cc0f50b446e9716531f058310ac7531bc1fd3061ea0d30192c92985_prof);

        
        $__internal_6f2a3336e443e0e59a14a636340252c9a78179fc36258d740f7760945554522a->leave($__internal_6f2a3336e443e0e59a14a636340252c9a78179fc36258d740f7760945554522a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_38bc4055d36c177ca9d3e75930e0509011a3d84c0dc908ddd781c8e3c287ada2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bc4055d36c177ca9d3e75930e0509011a3d84c0dc908ddd781c8e3c287ada2->enter($__internal_38bc4055d36c177ca9d3e75930e0509011a3d84c0dc908ddd781c8e3c287ada2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e833a3962501c7d55586beff515c29a562115de9f6e18bde720256035876e617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e833a3962501c7d55586beff515c29a562115de9f6e18bde720256035876e617->enter($__internal_e833a3962501c7d55586beff515c29a562115de9f6e18bde720256035876e617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e833a3962501c7d55586beff515c29a562115de9f6e18bde720256035876e617->leave($__internal_e833a3962501c7d55586beff515c29a562115de9f6e18bde720256035876e617_prof);

        
        $__internal_38bc4055d36c177ca9d3e75930e0509011a3d84c0dc908ddd781c8e3c287ada2->leave($__internal_38bc4055d36c177ca9d3e75930e0509011a3d84c0dc908ddd781c8e3c287ada2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
