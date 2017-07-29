<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_fa6056848138aeead5fff0a5aa5d68e6c2dd84bd00bf4b7f75ffcc782e427fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_e61025c77d7142b24ec4d54b5254e1110ba6f73bfc21b158d00d9b52af7c006f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61025c77d7142b24ec4d54b5254e1110ba6f73bfc21b158d00d9b52af7c006f->enter($__internal_e61025c77d7142b24ec4d54b5254e1110ba6f73bfc21b158d00d9b52af7c006f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_066acc4f222dc02b56230e28a0fee24a07f3d722b8edece38e2a5f86c006eb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066acc4f222dc02b56230e28a0fee24a07f3d722b8edece38e2a5f86c006eb7a->enter($__internal_066acc4f222dc02b56230e28a0fee24a07f3d722b8edece38e2a5f86c006eb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e61025c77d7142b24ec4d54b5254e1110ba6f73bfc21b158d00d9b52af7c006f->leave($__internal_e61025c77d7142b24ec4d54b5254e1110ba6f73bfc21b158d00d9b52af7c006f_prof);

        
        $__internal_066acc4f222dc02b56230e28a0fee24a07f3d722b8edece38e2a5f86c006eb7a->leave($__internal_066acc4f222dc02b56230e28a0fee24a07f3d722b8edece38e2a5f86c006eb7a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d9eb686711f4e06860ceedd208b6de6cf2d9e1b7fd4727625e29a636dd52eee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9eb686711f4e06860ceedd208b6de6cf2d9e1b7fd4727625e29a636dd52eee0->enter($__internal_d9eb686711f4e06860ceedd208b6de6cf2d9e1b7fd4727625e29a636dd52eee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_edd54360477cc041b8a82b19aa14833714ee9604ad77ad436516e9661b7341d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd54360477cc041b8a82b19aa14833714ee9604ad77ad436516e9661b7341d9->enter($__internal_edd54360477cc041b8a82b19aa14833714ee9604ad77ad436516e9661b7341d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_edd54360477cc041b8a82b19aa14833714ee9604ad77ad436516e9661b7341d9->leave($__internal_edd54360477cc041b8a82b19aa14833714ee9604ad77ad436516e9661b7341d9_prof);

        
        $__internal_d9eb686711f4e06860ceedd208b6de6cf2d9e1b7fd4727625e29a636dd52eee0->leave($__internal_d9eb686711f4e06860ceedd208b6de6cf2d9e1b7fd4727625e29a636dd52eee0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5fd30bba6a7444ee49b965ec1e84a6cdb27634285f9ff4d32b46dbb304b5c62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd30bba6a7444ee49b965ec1e84a6cdb27634285f9ff4d32b46dbb304b5c62e->enter($__internal_5fd30bba6a7444ee49b965ec1e84a6cdb27634285f9ff4d32b46dbb304b5c62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e62e76d347e9ec61fd1232fe1bb366b43eb8419052fc21b14446e4d12d83524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e62e76d347e9ec61fd1232fe1bb366b43eb8419052fc21b14446e4d12d83524->enter($__internal_5e62e76d347e9ec61fd1232fe1bb366b43eb8419052fc21b14446e4d12d83524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5e62e76d347e9ec61fd1232fe1bb366b43eb8419052fc21b14446e4d12d83524->leave($__internal_5e62e76d347e9ec61fd1232fe1bb366b43eb8419052fc21b14446e4d12d83524_prof);

        
        $__internal_5fd30bba6a7444ee49b965ec1e84a6cdb27634285f9ff4d32b46dbb304b5c62e->leave($__internal_5fd30bba6a7444ee49b965ec1e84a6cdb27634285f9ff4d32b46dbb304b5c62e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
