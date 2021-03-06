<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08eda9fd8f4586963fcd9b6037d2dd27f2cf59667da62654227fb0c8ec97dfd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3f24b3d8a6d0b4ced629e1ebdc7d593eccc6a98519ef12add94b9a0bc9b54c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f24b3d8a6d0b4ced629e1ebdc7d593eccc6a98519ef12add94b9a0bc9b54c99->enter($__internal_3f24b3d8a6d0b4ced629e1ebdc7d593eccc6a98519ef12add94b9a0bc9b54c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4ac57fbdc20fbd09304682c780d01e09905c5de7062731157386e3bcc102c130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac57fbdc20fbd09304682c780d01e09905c5de7062731157386e3bcc102c130->enter($__internal_4ac57fbdc20fbd09304682c780d01e09905c5de7062731157386e3bcc102c130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f24b3d8a6d0b4ced629e1ebdc7d593eccc6a98519ef12add94b9a0bc9b54c99->leave($__internal_3f24b3d8a6d0b4ced629e1ebdc7d593eccc6a98519ef12add94b9a0bc9b54c99_prof);

        
        $__internal_4ac57fbdc20fbd09304682c780d01e09905c5de7062731157386e3bcc102c130->leave($__internal_4ac57fbdc20fbd09304682c780d01e09905c5de7062731157386e3bcc102c130_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_984328924ed5cda2fb1fa00fcbbf384b4acb3a85d3d0d5a3f8a7dff1d07ac9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984328924ed5cda2fb1fa00fcbbf384b4acb3a85d3d0d5a3f8a7dff1d07ac9bf->enter($__internal_984328924ed5cda2fb1fa00fcbbf384b4acb3a85d3d0d5a3f8a7dff1d07ac9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b0e9c50b0160402ba574e6b2aa889fde2e847b244f6b4ed5018d2fa957eaacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0e9c50b0160402ba574e6b2aa889fde2e847b244f6b4ed5018d2fa957eaacb->enter($__internal_9b0e9c50b0160402ba574e6b2aa889fde2e847b244f6b4ed5018d2fa957eaacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9b0e9c50b0160402ba574e6b2aa889fde2e847b244f6b4ed5018d2fa957eaacb->leave($__internal_9b0e9c50b0160402ba574e6b2aa889fde2e847b244f6b4ed5018d2fa957eaacb_prof);

        
        $__internal_984328924ed5cda2fb1fa00fcbbf384b4acb3a85d3d0d5a3f8a7dff1d07ac9bf->leave($__internal_984328924ed5cda2fb1fa00fcbbf384b4acb3a85d3d0d5a3f8a7dff1d07ac9bf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6774a16b50734ce72a42e1c22d8faea2eb8255f8303e3918e9609b954ce15f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6774a16b50734ce72a42e1c22d8faea2eb8255f8303e3918e9609b954ce15f9->enter($__internal_f6774a16b50734ce72a42e1c22d8faea2eb8255f8303e3918e9609b954ce15f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6df4190edeedb6cbddfe689f5dc391418289b688fbe50d41841c5c785751f785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df4190edeedb6cbddfe689f5dc391418289b688fbe50d41841c5c785751f785->enter($__internal_6df4190edeedb6cbddfe689f5dc391418289b688fbe50d41841c5c785751f785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6df4190edeedb6cbddfe689f5dc391418289b688fbe50d41841c5c785751f785->leave($__internal_6df4190edeedb6cbddfe689f5dc391418289b688fbe50d41841c5c785751f785_prof);

        
        $__internal_f6774a16b50734ce72a42e1c22d8faea2eb8255f8303e3918e9609b954ce15f9->leave($__internal_f6774a16b50734ce72a42e1c22d8faea2eb8255f8303e3918e9609b954ce15f9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_897e0b00fcf7f0a9b7299eb79e568edaaec711fd41e4a245b9852511cc8668ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897e0b00fcf7f0a9b7299eb79e568edaaec711fd41e4a245b9852511cc8668ef->enter($__internal_897e0b00fcf7f0a9b7299eb79e568edaaec711fd41e4a245b9852511cc8668ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ead6ac90c7a145a7c13fae5ff57535762e779746eb865284cbecc51a72e52d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead6ac90c7a145a7c13fae5ff57535762e779746eb865284cbecc51a72e52d53->enter($__internal_ead6ac90c7a145a7c13fae5ff57535762e779746eb865284cbecc51a72e52d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ead6ac90c7a145a7c13fae5ff57535762e779746eb865284cbecc51a72e52d53->leave($__internal_ead6ac90c7a145a7c13fae5ff57535762e779746eb865284cbecc51a72e52d53_prof);

        
        $__internal_897e0b00fcf7f0a9b7299eb79e568edaaec711fd41e4a245b9852511cc8668ef->leave($__internal_897e0b00fcf7f0a9b7299eb79e568edaaec711fd41e4a245b9852511cc8668ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
