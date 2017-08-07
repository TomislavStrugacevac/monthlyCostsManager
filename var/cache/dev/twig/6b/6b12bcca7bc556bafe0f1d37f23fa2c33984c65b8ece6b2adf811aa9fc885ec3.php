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
        $__internal_e88d64df01a007e958b4c722ed0e987c1561af72ec875d934c4433910ad24e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88d64df01a007e958b4c722ed0e987c1561af72ec875d934c4433910ad24e06->enter($__internal_e88d64df01a007e958b4c722ed0e987c1561af72ec875d934c4433910ad24e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8d14f66d58cc74eb8e62247ddaf91a0702d6a4dbd863985310bc18fe25ec11dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d14f66d58cc74eb8e62247ddaf91a0702d6a4dbd863985310bc18fe25ec11dd->enter($__internal_8d14f66d58cc74eb8e62247ddaf91a0702d6a4dbd863985310bc18fe25ec11dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e88d64df01a007e958b4c722ed0e987c1561af72ec875d934c4433910ad24e06->leave($__internal_e88d64df01a007e958b4c722ed0e987c1561af72ec875d934c4433910ad24e06_prof);

        
        $__internal_8d14f66d58cc74eb8e62247ddaf91a0702d6a4dbd863985310bc18fe25ec11dd->leave($__internal_8d14f66d58cc74eb8e62247ddaf91a0702d6a4dbd863985310bc18fe25ec11dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ecb4386d11655ed131817950c94f3a9aa671102bfec304a7ad94ea7aa5ea60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecb4386d11655ed131817950c94f3a9aa671102bfec304a7ad94ea7aa5ea60c->enter($__internal_5ecb4386d11655ed131817950c94f3a9aa671102bfec304a7ad94ea7aa5ea60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_546e408f7b5b1bff76a71f1ad95d13fc915ecc0bdd0f9574d675587c10092312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546e408f7b5b1bff76a71f1ad95d13fc915ecc0bdd0f9574d675587c10092312->enter($__internal_546e408f7b5b1bff76a71f1ad95d13fc915ecc0bdd0f9574d675587c10092312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_546e408f7b5b1bff76a71f1ad95d13fc915ecc0bdd0f9574d675587c10092312->leave($__internal_546e408f7b5b1bff76a71f1ad95d13fc915ecc0bdd0f9574d675587c10092312_prof);

        
        $__internal_5ecb4386d11655ed131817950c94f3a9aa671102bfec304a7ad94ea7aa5ea60c->leave($__internal_5ecb4386d11655ed131817950c94f3a9aa671102bfec304a7ad94ea7aa5ea60c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_605cd42022d2ec7e2c945302f927fe372ba9ede0e3ff6a09d4a323ddc0b0c23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605cd42022d2ec7e2c945302f927fe372ba9ede0e3ff6a09d4a323ddc0b0c23c->enter($__internal_605cd42022d2ec7e2c945302f927fe372ba9ede0e3ff6a09d4a323ddc0b0c23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f686a18eb4d078a4c53edc279bcaec3a8101fc52f386409f17f788a9d95f5c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f686a18eb4d078a4c53edc279bcaec3a8101fc52f386409f17f788a9d95f5c8b->enter($__internal_f686a18eb4d078a4c53edc279bcaec3a8101fc52f386409f17f788a9d95f5c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f686a18eb4d078a4c53edc279bcaec3a8101fc52f386409f17f788a9d95f5c8b->leave($__internal_f686a18eb4d078a4c53edc279bcaec3a8101fc52f386409f17f788a9d95f5c8b_prof);

        
        $__internal_605cd42022d2ec7e2c945302f927fe372ba9ede0e3ff6a09d4a323ddc0b0c23c->leave($__internal_605cd42022d2ec7e2c945302f927fe372ba9ede0e3ff6a09d4a323ddc0b0c23c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc0506b8fda26a42fa6492a2016699bb0d726362998e3b58ba42daf86ed965f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0506b8fda26a42fa6492a2016699bb0d726362998e3b58ba42daf86ed965f4->enter($__internal_cc0506b8fda26a42fa6492a2016699bb0d726362998e3b58ba42daf86ed965f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_edc481def755962242299775780d1c8fbb168a242b8469314b0bf14f1f98f4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc481def755962242299775780d1c8fbb168a242b8469314b0bf14f1f98f4d4->enter($__internal_edc481def755962242299775780d1c8fbb168a242b8469314b0bf14f1f98f4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_edc481def755962242299775780d1c8fbb168a242b8469314b0bf14f1f98f4d4->leave($__internal_edc481def755962242299775780d1c8fbb168a242b8469314b0bf14f1f98f4d4_prof);

        
        $__internal_cc0506b8fda26a42fa6492a2016699bb0d726362998e3b58ba42daf86ed965f4->leave($__internal_cc0506b8fda26a42fa6492a2016699bb0d726362998e3b58ba42daf86ed965f4_prof);

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
