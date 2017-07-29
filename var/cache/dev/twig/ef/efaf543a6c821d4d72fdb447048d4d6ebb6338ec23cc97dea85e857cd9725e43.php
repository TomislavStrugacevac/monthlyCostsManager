<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_35c315a7fe70822b9ac9fc30197f5dadd28a745917234858869690570edb585c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_30b049a3be83eb4b24d88d00ee327975d3fd0c3992079367c47fab20ffff577f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b049a3be83eb4b24d88d00ee327975d3fd0c3992079367c47fab20ffff577f->enter($__internal_30b049a3be83eb4b24d88d00ee327975d3fd0c3992079367c47fab20ffff577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_75d5f6e4d5797a8ffe8b1c520ad027a894462f32ee17c8d01969b446e27afb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d5f6e4d5797a8ffe8b1c520ad027a894462f32ee17c8d01969b446e27afb9d->enter($__internal_75d5f6e4d5797a8ffe8b1c520ad027a894462f32ee17c8d01969b446e27afb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b049a3be83eb4b24d88d00ee327975d3fd0c3992079367c47fab20ffff577f->leave($__internal_30b049a3be83eb4b24d88d00ee327975d3fd0c3992079367c47fab20ffff577f_prof);

        
        $__internal_75d5f6e4d5797a8ffe8b1c520ad027a894462f32ee17c8d01969b446e27afb9d->leave($__internal_75d5f6e4d5797a8ffe8b1c520ad027a894462f32ee17c8d01969b446e27afb9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f6d930f6ca79cbdff9df39073d4912d46c93e351425ec0a411d6e2c9cf0dfc8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d930f6ca79cbdff9df39073d4912d46c93e351425ec0a411d6e2c9cf0dfc8d->enter($__internal_f6d930f6ca79cbdff9df39073d4912d46c93e351425ec0a411d6e2c9cf0dfc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae967ba556eeb210798f2c117926647ee045635e89e9df85fb392d362b4fbb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae967ba556eeb210798f2c117926647ee045635e89e9df85fb392d362b4fbb47->enter($__internal_ae967ba556eeb210798f2c117926647ee045635e89e9df85fb392d362b4fbb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae967ba556eeb210798f2c117926647ee045635e89e9df85fb392d362b4fbb47->leave($__internal_ae967ba556eeb210798f2c117926647ee045635e89e9df85fb392d362b4fbb47_prof);

        
        $__internal_f6d930f6ca79cbdff9df39073d4912d46c93e351425ec0a411d6e2c9cf0dfc8d->leave($__internal_f6d930f6ca79cbdff9df39073d4912d46c93e351425ec0a411d6e2c9cf0dfc8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e408e1604e43724bd9cd94a6e5a7cdcd5052f7282c89f4a2dfa6fce29cf5da77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e408e1604e43724bd9cd94a6e5a7cdcd5052f7282c89f4a2dfa6fce29cf5da77->enter($__internal_e408e1604e43724bd9cd94a6e5a7cdcd5052f7282c89f4a2dfa6fce29cf5da77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_295f8464b78bd918605225ff3857b657d639a27ef860fdc0442dbc3a82a8f23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295f8464b78bd918605225ff3857b657d639a27ef860fdc0442dbc3a82a8f23a->enter($__internal_295f8464b78bd918605225ff3857b657d639a27ef860fdc0442dbc3a82a8f23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_295f8464b78bd918605225ff3857b657d639a27ef860fdc0442dbc3a82a8f23a->leave($__internal_295f8464b78bd918605225ff3857b657d639a27ef860fdc0442dbc3a82a8f23a_prof);

        
        $__internal_e408e1604e43724bd9cd94a6e5a7cdcd5052f7282c89f4a2dfa6fce29cf5da77->leave($__internal_e408e1604e43724bd9cd94a6e5a7cdcd5052f7282c89f4a2dfa6fce29cf5da77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_342b16709e9a49386e3356d70ed58e64a5e42b092c38e5426d93f2e37bbb48a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342b16709e9a49386e3356d70ed58e64a5e42b092c38e5426d93f2e37bbb48a4->enter($__internal_342b16709e9a49386e3356d70ed58e64a5e42b092c38e5426d93f2e37bbb48a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b956ce5776a4ee4bc713c23f571c3077fc6e3bdcdc76fdab1e48d2bcda9fc463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b956ce5776a4ee4bc713c23f571c3077fc6e3bdcdc76fdab1e48d2bcda9fc463->enter($__internal_b956ce5776a4ee4bc713c23f571c3077fc6e3bdcdc76fdab1e48d2bcda9fc463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b956ce5776a4ee4bc713c23f571c3077fc6e3bdcdc76fdab1e48d2bcda9fc463->leave($__internal_b956ce5776a4ee4bc713c23f571c3077fc6e3bdcdc76fdab1e48d2bcda9fc463_prof);

        
        $__internal_342b16709e9a49386e3356d70ed58e64a5e42b092c38e5426d93f2e37bbb48a4->leave($__internal_342b16709e9a49386e3356d70ed58e64a5e42b092c38e5426d93f2e37bbb48a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
