<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_413750e5031d1795d4006759d99f7e019f3bb2981f322fdd4412e19fe4c266be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7bca3e282fd06c06f5b1c6530943c1db2fccde45ae887e89f298c62e1419b25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bca3e282fd06c06f5b1c6530943c1db2fccde45ae887e89f298c62e1419b25f->enter($__internal_7bca3e282fd06c06f5b1c6530943c1db2fccde45ae887e89f298c62e1419b25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6be35178a6a401c839a657dbb18a40f82ef96502d668cf4124db03e52454e557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be35178a6a401c839a657dbb18a40f82ef96502d668cf4124db03e52454e557->enter($__internal_6be35178a6a401c839a657dbb18a40f82ef96502d668cf4124db03e52454e557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bca3e282fd06c06f5b1c6530943c1db2fccde45ae887e89f298c62e1419b25f->leave($__internal_7bca3e282fd06c06f5b1c6530943c1db2fccde45ae887e89f298c62e1419b25f_prof);

        
        $__internal_6be35178a6a401c839a657dbb18a40f82ef96502d668cf4124db03e52454e557->leave($__internal_6be35178a6a401c839a657dbb18a40f82ef96502d668cf4124db03e52454e557_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09d92ea763cc7ec4021df76990ce44ec322f3badb484ada9016282926981a0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d92ea763cc7ec4021df76990ce44ec322f3badb484ada9016282926981a0b7->enter($__internal_09d92ea763cc7ec4021df76990ce44ec322f3badb484ada9016282926981a0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a7ec38828b4df8462f50e8ba9037bfffd064d55b6e518c838082d61cec1383e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ec38828b4df8462f50e8ba9037bfffd064d55b6e518c838082d61cec1383e7->enter($__internal_a7ec38828b4df8462f50e8ba9037bfffd064d55b6e518c838082d61cec1383e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a7ec38828b4df8462f50e8ba9037bfffd064d55b6e518c838082d61cec1383e7->leave($__internal_a7ec38828b4df8462f50e8ba9037bfffd064d55b6e518c838082d61cec1383e7_prof);

        
        $__internal_09d92ea763cc7ec4021df76990ce44ec322f3badb484ada9016282926981a0b7->leave($__internal_09d92ea763cc7ec4021df76990ce44ec322f3badb484ada9016282926981a0b7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a4ba17f4774106a88679c9db16e4a25a7fb6d53935d13f35481c54345308a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4ba17f4774106a88679c9db16e4a25a7fb6d53935d13f35481c54345308a51->enter($__internal_9a4ba17f4774106a88679c9db16e4a25a7fb6d53935d13f35481c54345308a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2be79f9e0c62815ed2412b094988c5262443ea73839c3249d3204f03202a2dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be79f9e0c62815ed2412b094988c5262443ea73839c3249d3204f03202a2dfa->enter($__internal_2be79f9e0c62815ed2412b094988c5262443ea73839c3249d3204f03202a2dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2be79f9e0c62815ed2412b094988c5262443ea73839c3249d3204f03202a2dfa->leave($__internal_2be79f9e0c62815ed2412b094988c5262443ea73839c3249d3204f03202a2dfa_prof);

        
        $__internal_9a4ba17f4774106a88679c9db16e4a25a7fb6d53935d13f35481c54345308a51->leave($__internal_9a4ba17f4774106a88679c9db16e4a25a7fb6d53935d13f35481c54345308a51_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9d1dfb59a7686e811d2f5be2bd212db37b7d7cac81b0d6c323dabe58ba4acfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d1dfb59a7686e811d2f5be2bd212db37b7d7cac81b0d6c323dabe58ba4acfa->enter($__internal_f9d1dfb59a7686e811d2f5be2bd212db37b7d7cac81b0d6c323dabe58ba4acfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_926e96e851c63be94f5ca60b3fde06abf282a882d721eb09aadcd66bd80c915e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926e96e851c63be94f5ca60b3fde06abf282a882d721eb09aadcd66bd80c915e->enter($__internal_926e96e851c63be94f5ca60b3fde06abf282a882d721eb09aadcd66bd80c915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_926e96e851c63be94f5ca60b3fde06abf282a882d721eb09aadcd66bd80c915e->leave($__internal_926e96e851c63be94f5ca60b3fde06abf282a882d721eb09aadcd66bd80c915e_prof);

        
        $__internal_f9d1dfb59a7686e811d2f5be2bd212db37b7d7cac81b0d6c323dabe58ba4acfa->leave($__internal_f9d1dfb59a7686e811d2f5be2bd212db37b7d7cac81b0d6c323dabe58ba4acfa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
