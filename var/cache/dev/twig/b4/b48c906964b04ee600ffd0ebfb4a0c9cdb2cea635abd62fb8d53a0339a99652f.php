<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_00f0f74f70f37ffe99edf32da5d30433001f890ec59660b91eb0d1b8a0006943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c6232d8fddf08a0ea41068656fb36fa537c86d7b16dc87c68f352bda1f99425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6232d8fddf08a0ea41068656fb36fa537c86d7b16dc87c68f352bda1f99425->enter($__internal_5c6232d8fddf08a0ea41068656fb36fa537c86d7b16dc87c68f352bda1f99425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7b83918ee56d10a9167b7b86a74443b57cd68332280520a3955388ca97f317ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b83918ee56d10a9167b7b86a74443b57cd68332280520a3955388ca97f317ba->enter($__internal_7b83918ee56d10a9167b7b86a74443b57cd68332280520a3955388ca97f317ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c6232d8fddf08a0ea41068656fb36fa537c86d7b16dc87c68f352bda1f99425->leave($__internal_5c6232d8fddf08a0ea41068656fb36fa537c86d7b16dc87c68f352bda1f99425_prof);

        
        $__internal_7b83918ee56d10a9167b7b86a74443b57cd68332280520a3955388ca97f317ba->leave($__internal_7b83918ee56d10a9167b7b86a74443b57cd68332280520a3955388ca97f317ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80bd453f88176265d41acfb82260c7914234c8a8aaff14a3cae0b53834b71009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bd453f88176265d41acfb82260c7914234c8a8aaff14a3cae0b53834b71009->enter($__internal_80bd453f88176265d41acfb82260c7914234c8a8aaff14a3cae0b53834b71009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c510ae35b726869bf3d513c15d2cf6fb793f615b26d8bf2259d689266aaf1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c510ae35b726869bf3d513c15d2cf6fb793f615b26d8bf2259d689266aaf1d8->enter($__internal_5c510ae35b726869bf3d513c15d2cf6fb793f615b26d8bf2259d689266aaf1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c510ae35b726869bf3d513c15d2cf6fb793f615b26d8bf2259d689266aaf1d8->leave($__internal_5c510ae35b726869bf3d513c15d2cf6fb793f615b26d8bf2259d689266aaf1d8_prof);

        
        $__internal_80bd453f88176265d41acfb82260c7914234c8a8aaff14a3cae0b53834b71009->leave($__internal_80bd453f88176265d41acfb82260c7914234c8a8aaff14a3cae0b53834b71009_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c55d595fbea62759179cab0fb8861e6a26eeb0e65014fb930523e7464c81d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c55d595fbea62759179cab0fb8861e6a26eeb0e65014fb930523e7464c81d6d->enter($__internal_4c55d595fbea62759179cab0fb8861e6a26eeb0e65014fb930523e7464c81d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7219d6fc0acb27922eb77a56bc8fada572b3d0e80190c299eca1fa959e6f3cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7219d6fc0acb27922eb77a56bc8fada572b3d0e80190c299eca1fa959e6f3cda->enter($__internal_7219d6fc0acb27922eb77a56bc8fada572b3d0e80190c299eca1fa959e6f3cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7219d6fc0acb27922eb77a56bc8fada572b3d0e80190c299eca1fa959e6f3cda->leave($__internal_7219d6fc0acb27922eb77a56bc8fada572b3d0e80190c299eca1fa959e6f3cda_prof);

        
        $__internal_4c55d595fbea62759179cab0fb8861e6a26eeb0e65014fb930523e7464c81d6d->leave($__internal_4c55d595fbea62759179cab0fb8861e6a26eeb0e65014fb930523e7464c81d6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
