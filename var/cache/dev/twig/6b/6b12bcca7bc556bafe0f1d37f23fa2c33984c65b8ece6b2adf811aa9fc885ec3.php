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
        $__internal_68b3868dc24493679b7c53fc41a2558ae88a415c78e5a374aae0a2c9f57e75e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b3868dc24493679b7c53fc41a2558ae88a415c78e5a374aae0a2c9f57e75e8->enter($__internal_68b3868dc24493679b7c53fc41a2558ae88a415c78e5a374aae0a2c9f57e75e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_efda83e0a971285245082188644ce38e3650f66b25dcf3f95419866bbc4e7cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efda83e0a971285245082188644ce38e3650f66b25dcf3f95419866bbc4e7cfa->enter($__internal_efda83e0a971285245082188644ce38e3650f66b25dcf3f95419866bbc4e7cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b3868dc24493679b7c53fc41a2558ae88a415c78e5a374aae0a2c9f57e75e8->leave($__internal_68b3868dc24493679b7c53fc41a2558ae88a415c78e5a374aae0a2c9f57e75e8_prof);

        
        $__internal_efda83e0a971285245082188644ce38e3650f66b25dcf3f95419866bbc4e7cfa->leave($__internal_efda83e0a971285245082188644ce38e3650f66b25dcf3f95419866bbc4e7cfa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de2a0ab5f5f533fdde700b45efb11daa1209204ad4fb1c2c2e20c5a91c202de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2a0ab5f5f533fdde700b45efb11daa1209204ad4fb1c2c2e20c5a91c202de1->enter($__internal_de2a0ab5f5f533fdde700b45efb11daa1209204ad4fb1c2c2e20c5a91c202de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_204803f2923393af6582e2646979c7180d7cca0d94f9fa41ae1d042d5ba4eb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204803f2923393af6582e2646979c7180d7cca0d94f9fa41ae1d042d5ba4eb5b->enter($__internal_204803f2923393af6582e2646979c7180d7cca0d94f9fa41ae1d042d5ba4eb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_204803f2923393af6582e2646979c7180d7cca0d94f9fa41ae1d042d5ba4eb5b->leave($__internal_204803f2923393af6582e2646979c7180d7cca0d94f9fa41ae1d042d5ba4eb5b_prof);

        
        $__internal_de2a0ab5f5f533fdde700b45efb11daa1209204ad4fb1c2c2e20c5a91c202de1->leave($__internal_de2a0ab5f5f533fdde700b45efb11daa1209204ad4fb1c2c2e20c5a91c202de1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a69a145e824dc8a3c089051da85f1d312e374d72ac28af9a62cb0570bb9b8aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69a145e824dc8a3c089051da85f1d312e374d72ac28af9a62cb0570bb9b8aeb->enter($__internal_a69a145e824dc8a3c089051da85f1d312e374d72ac28af9a62cb0570bb9b8aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_111657477120ae55c54f099435cdd9a18c3848451f3867ce9014056b000e87d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111657477120ae55c54f099435cdd9a18c3848451f3867ce9014056b000e87d6->enter($__internal_111657477120ae55c54f099435cdd9a18c3848451f3867ce9014056b000e87d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_111657477120ae55c54f099435cdd9a18c3848451f3867ce9014056b000e87d6->leave($__internal_111657477120ae55c54f099435cdd9a18c3848451f3867ce9014056b000e87d6_prof);

        
        $__internal_a69a145e824dc8a3c089051da85f1d312e374d72ac28af9a62cb0570bb9b8aeb->leave($__internal_a69a145e824dc8a3c089051da85f1d312e374d72ac28af9a62cb0570bb9b8aeb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_926655d79bf179e6d9e1cfe7ab374ca79e78bb621dea83a234290bca09301083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926655d79bf179e6d9e1cfe7ab374ca79e78bb621dea83a234290bca09301083->enter($__internal_926655d79bf179e6d9e1cfe7ab374ca79e78bb621dea83a234290bca09301083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9325b2d2e740b0d5361937d3a9fabc8508bc9f201677016f2ea1b3f021aca9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9325b2d2e740b0d5361937d3a9fabc8508bc9f201677016f2ea1b3f021aca9d7->enter($__internal_9325b2d2e740b0d5361937d3a9fabc8508bc9f201677016f2ea1b3f021aca9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9325b2d2e740b0d5361937d3a9fabc8508bc9f201677016f2ea1b3f021aca9d7->leave($__internal_9325b2d2e740b0d5361937d3a9fabc8508bc9f201677016f2ea1b3f021aca9d7_prof);

        
        $__internal_926655d79bf179e6d9e1cfe7ab374ca79e78bb621dea83a234290bca09301083->leave($__internal_926655d79bf179e6d9e1cfe7ab374ca79e78bb621dea83a234290bca09301083_prof);

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
