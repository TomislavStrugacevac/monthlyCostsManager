<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e1f7c4110a8589269679854d36d1778cd00a056ff70f139ab1fffed6dcf0c96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7f848956b9257923304df7b1f4a369374924edcb6d946cf1aeff4211af71744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f848956b9257923304df7b1f4a369374924edcb6d946cf1aeff4211af71744->enter($__internal_b7f848956b9257923304df7b1f4a369374924edcb6d946cf1aeff4211af71744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0aa4c8aab2a612959bbeb9e12eb7e9eeda0f0bb51bcebed22a1089a94458d353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa4c8aab2a612959bbeb9e12eb7e9eeda0f0bb51bcebed22a1089a94458d353->enter($__internal_0aa4c8aab2a612959bbeb9e12eb7e9eeda0f0bb51bcebed22a1089a94458d353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f848956b9257923304df7b1f4a369374924edcb6d946cf1aeff4211af71744->leave($__internal_b7f848956b9257923304df7b1f4a369374924edcb6d946cf1aeff4211af71744_prof);

        
        $__internal_0aa4c8aab2a612959bbeb9e12eb7e9eeda0f0bb51bcebed22a1089a94458d353->leave($__internal_0aa4c8aab2a612959bbeb9e12eb7e9eeda0f0bb51bcebed22a1089a94458d353_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b81c4c2e68d59cdc47b2893d0f907db05ced5cd44f5353c6a01a8124e50d927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b81c4c2e68d59cdc47b2893d0f907db05ced5cd44f5353c6a01a8124e50d927->enter($__internal_9b81c4c2e68d59cdc47b2893d0f907db05ced5cd44f5353c6a01a8124e50d927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0f4013425df628bf62a317769782648dead44a09ae3949f41870107c446acd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4013425df628bf62a317769782648dead44a09ae3949f41870107c446acd25->enter($__internal_0f4013425df628bf62a317769782648dead44a09ae3949f41870107c446acd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0f4013425df628bf62a317769782648dead44a09ae3949f41870107c446acd25->leave($__internal_0f4013425df628bf62a317769782648dead44a09ae3949f41870107c446acd25_prof);

        
        $__internal_9b81c4c2e68d59cdc47b2893d0f907db05ced5cd44f5353c6a01a8124e50d927->leave($__internal_9b81c4c2e68d59cdc47b2893d0f907db05ced5cd44f5353c6a01a8124e50d927_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
