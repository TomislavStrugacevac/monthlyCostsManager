<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_10f95c5595e64c6f16abaaac935c74871ea06c6c60ecf1a66552b1a2ad059887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_e3c5b27ebe8ec10f05dbed703bdec9329cfbfed68d131004b2b1dd9fe73fa30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c5b27ebe8ec10f05dbed703bdec9329cfbfed68d131004b2b1dd9fe73fa30c->enter($__internal_e3c5b27ebe8ec10f05dbed703bdec9329cfbfed68d131004b2b1dd9fe73fa30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_90c43630c3d91a27147278551e850dbc5936d310a67d984d654ab14784c07fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c43630c3d91a27147278551e850dbc5936d310a67d984d654ab14784c07fb5->enter($__internal_90c43630c3d91a27147278551e850dbc5936d310a67d984d654ab14784c07fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c5b27ebe8ec10f05dbed703bdec9329cfbfed68d131004b2b1dd9fe73fa30c->leave($__internal_e3c5b27ebe8ec10f05dbed703bdec9329cfbfed68d131004b2b1dd9fe73fa30c_prof);

        
        $__internal_90c43630c3d91a27147278551e850dbc5936d310a67d984d654ab14784c07fb5->leave($__internal_90c43630c3d91a27147278551e850dbc5936d310a67d984d654ab14784c07fb5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b56b35a69d5baae85954ddfa651551247ee0f561787c998f05bf2cb2eb0ccfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b56b35a69d5baae85954ddfa651551247ee0f561787c998f05bf2cb2eb0ccfb->enter($__internal_2b56b35a69d5baae85954ddfa651551247ee0f561787c998f05bf2cb2eb0ccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cbffc245c09ea87c365155bdd052891fed35a001aadc5e8fc4210a9396e8eb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbffc245c09ea87c365155bdd052891fed35a001aadc5e8fc4210a9396e8eb45->enter($__internal_cbffc245c09ea87c365155bdd052891fed35a001aadc5e8fc4210a9396e8eb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cbffc245c09ea87c365155bdd052891fed35a001aadc5e8fc4210a9396e8eb45->leave($__internal_cbffc245c09ea87c365155bdd052891fed35a001aadc5e8fc4210a9396e8eb45_prof);

        
        $__internal_2b56b35a69d5baae85954ddfa651551247ee0f561787c998f05bf2cb2eb0ccfb->leave($__internal_2b56b35a69d5baae85954ddfa651551247ee0f561787c998f05bf2cb2eb0ccfb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2f65ff0bca5ab171a924979582418b371b17487f2989d775b1c6a6d843ee998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f65ff0bca5ab171a924979582418b371b17487f2989d775b1c6a6d843ee998->enter($__internal_b2f65ff0bca5ab171a924979582418b371b17487f2989d775b1c6a6d843ee998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_070b908fba12abd381919def04a71588dfc108029d145879bfedafd905b25d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070b908fba12abd381919def04a71588dfc108029d145879bfedafd905b25d0b->enter($__internal_070b908fba12abd381919def04a71588dfc108029d145879bfedafd905b25d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_070b908fba12abd381919def04a71588dfc108029d145879bfedafd905b25d0b->leave($__internal_070b908fba12abd381919def04a71588dfc108029d145879bfedafd905b25d0b_prof);

        
        $__internal_b2f65ff0bca5ab171a924979582418b371b17487f2989d775b1c6a6d843ee998->leave($__internal_b2f65ff0bca5ab171a924979582418b371b17487f2989d775b1c6a6d843ee998_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27fe1d21ec4899f96fce1d548b234de6de2096c921ecf1f13eb9f0f05403eeca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fe1d21ec4899f96fce1d548b234de6de2096c921ecf1f13eb9f0f05403eeca->enter($__internal_27fe1d21ec4899f96fce1d548b234de6de2096c921ecf1f13eb9f0f05403eeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3567092bbdfb1b9afba4b7aef65c567a71cc41049c810ed95057b01c4a8f7ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3567092bbdfb1b9afba4b7aef65c567a71cc41049c810ed95057b01c4a8f7ccb->enter($__internal_3567092bbdfb1b9afba4b7aef65c567a71cc41049c810ed95057b01c4a8f7ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3567092bbdfb1b9afba4b7aef65c567a71cc41049c810ed95057b01c4a8f7ccb->leave($__internal_3567092bbdfb1b9afba4b7aef65c567a71cc41049c810ed95057b01c4a8f7ccb_prof);

        
        $__internal_27fe1d21ec4899f96fce1d548b234de6de2096c921ecf1f13eb9f0f05403eeca->leave($__internal_27fe1d21ec4899f96fce1d548b234de6de2096c921ecf1f13eb9f0f05403eeca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
