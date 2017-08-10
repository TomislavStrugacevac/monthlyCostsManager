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
        $__internal_cee52b0adeba7267963c5a4ede72a806f7c8c4a6633c84062ebd30dc43f010fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee52b0adeba7267963c5a4ede72a806f7c8c4a6633c84062ebd30dc43f010fa->enter($__internal_cee52b0adeba7267963c5a4ede72a806f7c8c4a6633c84062ebd30dc43f010fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dcf8170d028feed86c6d7a552131eff5fd8077fac01514683a87ffd365293449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf8170d028feed86c6d7a552131eff5fd8077fac01514683a87ffd365293449->enter($__internal_dcf8170d028feed86c6d7a552131eff5fd8077fac01514683a87ffd365293449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee52b0adeba7267963c5a4ede72a806f7c8c4a6633c84062ebd30dc43f010fa->leave($__internal_cee52b0adeba7267963c5a4ede72a806f7c8c4a6633c84062ebd30dc43f010fa_prof);

        
        $__internal_dcf8170d028feed86c6d7a552131eff5fd8077fac01514683a87ffd365293449->leave($__internal_dcf8170d028feed86c6d7a552131eff5fd8077fac01514683a87ffd365293449_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66fd3079b68784cfe0508f781ce0548b476a728a4993469e1688bc8e2dc90643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fd3079b68784cfe0508f781ce0548b476a728a4993469e1688bc8e2dc90643->enter($__internal_66fd3079b68784cfe0508f781ce0548b476a728a4993469e1688bc8e2dc90643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7cb709be840e11264287fa711b36292ad937baa712e1cc40306aad3b0dc55ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb709be840e11264287fa711b36292ad937baa712e1cc40306aad3b0dc55ec9->enter($__internal_7cb709be840e11264287fa711b36292ad937baa712e1cc40306aad3b0dc55ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7cb709be840e11264287fa711b36292ad937baa712e1cc40306aad3b0dc55ec9->leave($__internal_7cb709be840e11264287fa711b36292ad937baa712e1cc40306aad3b0dc55ec9_prof);

        
        $__internal_66fd3079b68784cfe0508f781ce0548b476a728a4993469e1688bc8e2dc90643->leave($__internal_66fd3079b68784cfe0508f781ce0548b476a728a4993469e1688bc8e2dc90643_prof);

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
