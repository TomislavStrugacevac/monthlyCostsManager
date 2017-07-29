<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_381891c981c9ce4cdeb2e68fb9bbd8652f3dad17e7d594e7f4c812f2aa2ef5c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_252e9b6c921e032f578abe8e75631e6aa55e192b79a7c860694c31cddd21cc41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252e9b6c921e032f578abe8e75631e6aa55e192b79a7c860694c31cddd21cc41->enter($__internal_252e9b6c921e032f578abe8e75631e6aa55e192b79a7c860694c31cddd21cc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2afa999729756935e3d1ff38afaa85ca83d8c715ec99231f05e4c974bee8c687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afa999729756935e3d1ff38afaa85ca83d8c715ec99231f05e4c974bee8c687->enter($__internal_2afa999729756935e3d1ff38afaa85ca83d8c715ec99231f05e4c974bee8c687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_252e9b6c921e032f578abe8e75631e6aa55e192b79a7c860694c31cddd21cc41->leave($__internal_252e9b6c921e032f578abe8e75631e6aa55e192b79a7c860694c31cddd21cc41_prof);

        
        $__internal_2afa999729756935e3d1ff38afaa85ca83d8c715ec99231f05e4c974bee8c687->leave($__internal_2afa999729756935e3d1ff38afaa85ca83d8c715ec99231f05e4c974bee8c687_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_281b3895c504f09911d13cc2074c9d826ed3fbed0786f8cfc614a4e6e8bf42df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281b3895c504f09911d13cc2074c9d826ed3fbed0786f8cfc614a4e6e8bf42df->enter($__internal_281b3895c504f09911d13cc2074c9d826ed3fbed0786f8cfc614a4e6e8bf42df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_01835103b904d1683883a86031821116f7bd3d691fdb22f0bbddcea0dccad8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01835103b904d1683883a86031821116f7bd3d691fdb22f0bbddcea0dccad8ab->enter($__internal_01835103b904d1683883a86031821116f7bd3d691fdb22f0bbddcea0dccad8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_01835103b904d1683883a86031821116f7bd3d691fdb22f0bbddcea0dccad8ab->leave($__internal_01835103b904d1683883a86031821116f7bd3d691fdb22f0bbddcea0dccad8ab_prof);

        
        $__internal_281b3895c504f09911d13cc2074c9d826ed3fbed0786f8cfc614a4e6e8bf42df->leave($__internal_281b3895c504f09911d13cc2074c9d826ed3fbed0786f8cfc614a4e6e8bf42df_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c918bfdeb6e1c608fb373fef421b1f584e329a668371e9eddc0c7d2cb78e52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c918bfdeb6e1c608fb373fef421b1f584e329a668371e9eddc0c7d2cb78e52f->enter($__internal_1c918bfdeb6e1c608fb373fef421b1f584e329a668371e9eddc0c7d2cb78e52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5266bd298cda160f7dcfea90594bec64ab6a4fd0f213a8837966e55864be3ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5266bd298cda160f7dcfea90594bec64ab6a4fd0f213a8837966e55864be3ce8->enter($__internal_5266bd298cda160f7dcfea90594bec64ab6a4fd0f213a8837966e55864be3ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5266bd298cda160f7dcfea90594bec64ab6a4fd0f213a8837966e55864be3ce8->leave($__internal_5266bd298cda160f7dcfea90594bec64ab6a4fd0f213a8837966e55864be3ce8_prof);

        
        $__internal_1c918bfdeb6e1c608fb373fef421b1f584e329a668371e9eddc0c7d2cb78e52f->leave($__internal_1c918bfdeb6e1c608fb373fef421b1f584e329a668371e9eddc0c7d2cb78e52f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
