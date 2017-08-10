<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cb9bcdb914acea5868a69dd88c5f9ac970b9d4799243e9f9f215391a42881cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c40eee096fba74c9846d8da7de106e9c73c5f849450cb4923bf7552cb19e3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c40eee096fba74c9846d8da7de106e9c73c5f849450cb4923bf7552cb19e3ec->enter($__internal_0c40eee096fba74c9846d8da7de106e9c73c5f849450cb4923bf7552cb19e3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d56376a80a8e0ba44ee11bbb2eb3b470fd5ededa913c50cf20bd498409d8061a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56376a80a8e0ba44ee11bbb2eb3b470fd5ededa913c50cf20bd498409d8061a->enter($__internal_d56376a80a8e0ba44ee11bbb2eb3b470fd5ededa913c50cf20bd498409d8061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c40eee096fba74c9846d8da7de106e9c73c5f849450cb4923bf7552cb19e3ec->leave($__internal_0c40eee096fba74c9846d8da7de106e9c73c5f849450cb4923bf7552cb19e3ec_prof);

        
        $__internal_d56376a80a8e0ba44ee11bbb2eb3b470fd5ededa913c50cf20bd498409d8061a->leave($__internal_d56376a80a8e0ba44ee11bbb2eb3b470fd5ededa913c50cf20bd498409d8061a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0f9c9a6b3e649ba046bef277a101382492b9aa2960713ebb095cd29aa6b7011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f9c9a6b3e649ba046bef277a101382492b9aa2960713ebb095cd29aa6b7011->enter($__internal_e0f9c9a6b3e649ba046bef277a101382492b9aa2960713ebb095cd29aa6b7011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55610fdda044d29017def436d9b6242a1ed5bd019e7928e2841dcd6791bea522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55610fdda044d29017def436d9b6242a1ed5bd019e7928e2841dcd6791bea522->enter($__internal_55610fdda044d29017def436d9b6242a1ed5bd019e7928e2841dcd6791bea522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55610fdda044d29017def436d9b6242a1ed5bd019e7928e2841dcd6791bea522->leave($__internal_55610fdda044d29017def436d9b6242a1ed5bd019e7928e2841dcd6791bea522_prof);

        
        $__internal_e0f9c9a6b3e649ba046bef277a101382492b9aa2960713ebb095cd29aa6b7011->leave($__internal_e0f9c9a6b3e649ba046bef277a101382492b9aa2960713ebb095cd29aa6b7011_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cacb7a2c85013464b816e52e926a41e4032d8e4d62260cc1af3adb05304914c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacb7a2c85013464b816e52e926a41e4032d8e4d62260cc1af3adb05304914c6->enter($__internal_cacb7a2c85013464b816e52e926a41e4032d8e4d62260cc1af3adb05304914c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b77e33b85d2a0683d3413be866739902a7125c8efdf8f9fdb29adf3cb952b70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77e33b85d2a0683d3413be866739902a7125c8efdf8f9fdb29adf3cb952b70f->enter($__internal_b77e33b85d2a0683d3413be866739902a7125c8efdf8f9fdb29adf3cb952b70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b77e33b85d2a0683d3413be866739902a7125c8efdf8f9fdb29adf3cb952b70f->leave($__internal_b77e33b85d2a0683d3413be866739902a7125c8efdf8f9fdb29adf3cb952b70f_prof);

        
        $__internal_cacb7a2c85013464b816e52e926a41e4032d8e4d62260cc1af3adb05304914c6->leave($__internal_cacb7a2c85013464b816e52e926a41e4032d8e4d62260cc1af3adb05304914c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a386770205a030101d5129002bb67863d9faa168d9242d7920156aa48822885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a386770205a030101d5129002bb67863d9faa168d9242d7920156aa48822885->enter($__internal_9a386770205a030101d5129002bb67863d9faa168d9242d7920156aa48822885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b6a9757c72fd2292946394a2070f6609a3618a29e5a216cf8ff7a15d6ee3314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6a9757c72fd2292946394a2070f6609a3618a29e5a216cf8ff7a15d6ee3314->enter($__internal_1b6a9757c72fd2292946394a2070f6609a3618a29e5a216cf8ff7a15d6ee3314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b6a9757c72fd2292946394a2070f6609a3618a29e5a216cf8ff7a15d6ee3314->leave($__internal_1b6a9757c72fd2292946394a2070f6609a3618a29e5a216cf8ff7a15d6ee3314_prof);

        
        $__internal_9a386770205a030101d5129002bb67863d9faa168d9242d7920156aa48822885->leave($__internal_9a386770205a030101d5129002bb67863d9faa168d9242d7920156aa48822885_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
