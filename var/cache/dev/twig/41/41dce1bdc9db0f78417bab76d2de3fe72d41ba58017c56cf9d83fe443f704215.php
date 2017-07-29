<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_3ff9034d3b534617cfe7f6dc5afc1ebed1d42e8492434eed31d1ab5dd8bf4dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_1b8b7fefb3633d6c2615f68899f47aca0ec4f481eb895e7cfeaa82aed7a97e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8b7fefb3633d6c2615f68899f47aca0ec4f481eb895e7cfeaa82aed7a97e96->enter($__internal_1b8b7fefb3633d6c2615f68899f47aca0ec4f481eb895e7cfeaa82aed7a97e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a0afef374cac2d30af3d5951d0024cf252f8c4f0f0a7b10dae8a025e69f8afb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0afef374cac2d30af3d5951d0024cf252f8c4f0f0a7b10dae8a025e69f8afb4->enter($__internal_a0afef374cac2d30af3d5951d0024cf252f8c4f0f0a7b10dae8a025e69f8afb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b8b7fefb3633d6c2615f68899f47aca0ec4f481eb895e7cfeaa82aed7a97e96->leave($__internal_1b8b7fefb3633d6c2615f68899f47aca0ec4f481eb895e7cfeaa82aed7a97e96_prof);

        
        $__internal_a0afef374cac2d30af3d5951d0024cf252f8c4f0f0a7b10dae8a025e69f8afb4->leave($__internal_a0afef374cac2d30af3d5951d0024cf252f8c4f0f0a7b10dae8a025e69f8afb4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db9dfa8fd6a1239e43af3384f22668ea32fdfd2d6f9a9d14c61a7bcd7314bd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9dfa8fd6a1239e43af3384f22668ea32fdfd2d6f9a9d14c61a7bcd7314bd28->enter($__internal_db9dfa8fd6a1239e43af3384f22668ea32fdfd2d6f9a9d14c61a7bcd7314bd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_152d9fa49e1ca0ede28cf7855ccc9cf2202e5c840d5ec1c0d1840eb5f0fee920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152d9fa49e1ca0ede28cf7855ccc9cf2202e5c840d5ec1c0d1840eb5f0fee920->enter($__internal_152d9fa49e1ca0ede28cf7855ccc9cf2202e5c840d5ec1c0d1840eb5f0fee920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_152d9fa49e1ca0ede28cf7855ccc9cf2202e5c840d5ec1c0d1840eb5f0fee920->leave($__internal_152d9fa49e1ca0ede28cf7855ccc9cf2202e5c840d5ec1c0d1840eb5f0fee920_prof);

        
        $__internal_db9dfa8fd6a1239e43af3384f22668ea32fdfd2d6f9a9d14c61a7bcd7314bd28->leave($__internal_db9dfa8fd6a1239e43af3384f22668ea32fdfd2d6f9a9d14c61a7bcd7314bd28_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
