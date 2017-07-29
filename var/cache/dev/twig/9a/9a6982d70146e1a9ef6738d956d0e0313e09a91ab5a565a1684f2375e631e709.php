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
        $__internal_37f4e2506e883085530bfd08b14a826cbc083d4944c41a0472a3676acef4010a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f4e2506e883085530bfd08b14a826cbc083d4944c41a0472a3676acef4010a->enter($__internal_37f4e2506e883085530bfd08b14a826cbc083d4944c41a0472a3676acef4010a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2328a7da394e0e4fdbf5ae7b8d1261ddbf0ab0f396ed8960137bf74023e8c861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2328a7da394e0e4fdbf5ae7b8d1261ddbf0ab0f396ed8960137bf74023e8c861->enter($__internal_2328a7da394e0e4fdbf5ae7b8d1261ddbf0ab0f396ed8960137bf74023e8c861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f4e2506e883085530bfd08b14a826cbc083d4944c41a0472a3676acef4010a->leave($__internal_37f4e2506e883085530bfd08b14a826cbc083d4944c41a0472a3676acef4010a_prof);

        
        $__internal_2328a7da394e0e4fdbf5ae7b8d1261ddbf0ab0f396ed8960137bf74023e8c861->leave($__internal_2328a7da394e0e4fdbf5ae7b8d1261ddbf0ab0f396ed8960137bf74023e8c861_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c99f9aeecfcf10505ba86c594f5d792c655131517f71c7c550d367eca61cf07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c99f9aeecfcf10505ba86c594f5d792c655131517f71c7c550d367eca61cf07->enter($__internal_9c99f9aeecfcf10505ba86c594f5d792c655131517f71c7c550d367eca61cf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b42aeea76e52e0bdc9d7ce67022b02b73d2219342b8d2c8eb533bbd69c00461d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42aeea76e52e0bdc9d7ce67022b02b73d2219342b8d2c8eb533bbd69c00461d->enter($__internal_b42aeea76e52e0bdc9d7ce67022b02b73d2219342b8d2c8eb533bbd69c00461d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b42aeea76e52e0bdc9d7ce67022b02b73d2219342b8d2c8eb533bbd69c00461d->leave($__internal_b42aeea76e52e0bdc9d7ce67022b02b73d2219342b8d2c8eb533bbd69c00461d_prof);

        
        $__internal_9c99f9aeecfcf10505ba86c594f5d792c655131517f71c7c550d367eca61cf07->leave($__internal_9c99f9aeecfcf10505ba86c594f5d792c655131517f71c7c550d367eca61cf07_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb08c279b067f9e06ab29b70723d8fc0f9b23f4ab1053853e03124b4dceff5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb08c279b067f9e06ab29b70723d8fc0f9b23f4ab1053853e03124b4dceff5d6->enter($__internal_eb08c279b067f9e06ab29b70723d8fc0f9b23f4ab1053853e03124b4dceff5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6c9b3f876a7e5883f8f41a739b0de44b547c4735f8ebbc708edf7de31b2f8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c9b3f876a7e5883f8f41a739b0de44b547c4735f8ebbc708edf7de31b2f8c7->enter($__internal_d6c9b3f876a7e5883f8f41a739b0de44b547c4735f8ebbc708edf7de31b2f8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d6c9b3f876a7e5883f8f41a739b0de44b547c4735f8ebbc708edf7de31b2f8c7->leave($__internal_d6c9b3f876a7e5883f8f41a739b0de44b547c4735f8ebbc708edf7de31b2f8c7_prof);

        
        $__internal_eb08c279b067f9e06ab29b70723d8fc0f9b23f4ab1053853e03124b4dceff5d6->leave($__internal_eb08c279b067f9e06ab29b70723d8fc0f9b23f4ab1053853e03124b4dceff5d6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a12bfaac5e610d46f80c20ab01bae3e2b98c480680ea35662710f395d507f398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12bfaac5e610d46f80c20ab01bae3e2b98c480680ea35662710f395d507f398->enter($__internal_a12bfaac5e610d46f80c20ab01bae3e2b98c480680ea35662710f395d507f398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ce69e65ee0a7f5013c325fc18f821c64354263f4bd69091a04af1f8c2a716cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce69e65ee0a7f5013c325fc18f821c64354263f4bd69091a04af1f8c2a716cd->enter($__internal_1ce69e65ee0a7f5013c325fc18f821c64354263f4bd69091a04af1f8c2a716cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1ce69e65ee0a7f5013c325fc18f821c64354263f4bd69091a04af1f8c2a716cd->leave($__internal_1ce69e65ee0a7f5013c325fc18f821c64354263f4bd69091a04af1f8c2a716cd_prof);

        
        $__internal_a12bfaac5e610d46f80c20ab01bae3e2b98c480680ea35662710f395d507f398->leave($__internal_a12bfaac5e610d46f80c20ab01bae3e2b98c480680ea35662710f395d507f398_prof);

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
