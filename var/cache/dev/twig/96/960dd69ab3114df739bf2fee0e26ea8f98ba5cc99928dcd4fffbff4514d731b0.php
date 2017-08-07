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
        $__internal_9f35c6cf683d8d34d431f9ac945ef171b8c13105d4d3795a58d789a5c3dd822f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f35c6cf683d8d34d431f9ac945ef171b8c13105d4d3795a58d789a5c3dd822f->enter($__internal_9f35c6cf683d8d34d431f9ac945ef171b8c13105d4d3795a58d789a5c3dd822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c69c1ac8a902b41155954c161f9a4c0762851fa7e02bc81457826cd0a6ff0fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69c1ac8a902b41155954c161f9a4c0762851fa7e02bc81457826cd0a6ff0fb8->enter($__internal_c69c1ac8a902b41155954c161f9a4c0762851fa7e02bc81457826cd0a6ff0fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f35c6cf683d8d34d431f9ac945ef171b8c13105d4d3795a58d789a5c3dd822f->leave($__internal_9f35c6cf683d8d34d431f9ac945ef171b8c13105d4d3795a58d789a5c3dd822f_prof);

        
        $__internal_c69c1ac8a902b41155954c161f9a4c0762851fa7e02bc81457826cd0a6ff0fb8->leave($__internal_c69c1ac8a902b41155954c161f9a4c0762851fa7e02bc81457826cd0a6ff0fb8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c2836f2f98cefc2ec70b7214703a63da1b819104689c0ca04949d57caa87404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2836f2f98cefc2ec70b7214703a63da1b819104689c0ca04949d57caa87404->enter($__internal_9c2836f2f98cefc2ec70b7214703a63da1b819104689c0ca04949d57caa87404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6053c5599c7667272116baed94df0677e3fd7ec34d8bceebb5fc3f762fed4323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6053c5599c7667272116baed94df0677e3fd7ec34d8bceebb5fc3f762fed4323->enter($__internal_6053c5599c7667272116baed94df0677e3fd7ec34d8bceebb5fc3f762fed4323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6053c5599c7667272116baed94df0677e3fd7ec34d8bceebb5fc3f762fed4323->leave($__internal_6053c5599c7667272116baed94df0677e3fd7ec34d8bceebb5fc3f762fed4323_prof);

        
        $__internal_9c2836f2f98cefc2ec70b7214703a63da1b819104689c0ca04949d57caa87404->leave($__internal_9c2836f2f98cefc2ec70b7214703a63da1b819104689c0ca04949d57caa87404_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25c5691fe73fd59c8f401110bc4cda90f4f1f72f7190932dae22f05f060f90c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c5691fe73fd59c8f401110bc4cda90f4f1f72f7190932dae22f05f060f90c1->enter($__internal_25c5691fe73fd59c8f401110bc4cda90f4f1f72f7190932dae22f05f060f90c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_628c7609a6cf269588a75c99929b97fbc45e34791b84eb22bd8d74d906b56989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628c7609a6cf269588a75c99929b97fbc45e34791b84eb22bd8d74d906b56989->enter($__internal_628c7609a6cf269588a75c99929b97fbc45e34791b84eb22bd8d74d906b56989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_628c7609a6cf269588a75c99929b97fbc45e34791b84eb22bd8d74d906b56989->leave($__internal_628c7609a6cf269588a75c99929b97fbc45e34791b84eb22bd8d74d906b56989_prof);

        
        $__internal_25c5691fe73fd59c8f401110bc4cda90f4f1f72f7190932dae22f05f060f90c1->leave($__internal_25c5691fe73fd59c8f401110bc4cda90f4f1f72f7190932dae22f05f060f90c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_993f3f23f131febe95270c0df8e63443e1d6ac6975097acfcb492b27fb3bb665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993f3f23f131febe95270c0df8e63443e1d6ac6975097acfcb492b27fb3bb665->enter($__internal_993f3f23f131febe95270c0df8e63443e1d6ac6975097acfcb492b27fb3bb665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7980de6cf2a55ce05977c9e59d29549849dbf96fcee36ffcc7ea08c99546670f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7980de6cf2a55ce05977c9e59d29549849dbf96fcee36ffcc7ea08c99546670f->enter($__internal_7980de6cf2a55ce05977c9e59d29549849dbf96fcee36ffcc7ea08c99546670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7980de6cf2a55ce05977c9e59d29549849dbf96fcee36ffcc7ea08c99546670f->leave($__internal_7980de6cf2a55ce05977c9e59d29549849dbf96fcee36ffcc7ea08c99546670f_prof);

        
        $__internal_993f3f23f131febe95270c0df8e63443e1d6ac6975097acfcb492b27fb3bb665->leave($__internal_993f3f23f131febe95270c0df8e63443e1d6ac6975097acfcb492b27fb3bb665_prof);

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
