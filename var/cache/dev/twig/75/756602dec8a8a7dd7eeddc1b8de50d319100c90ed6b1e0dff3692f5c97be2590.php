<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_39fd64b77a20582ceb43ddb85a8a4b5edce979b354dcfab69ebb7cc4ae260f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_852bb70ccdce87335199296d06af9a7ea0c08463d0ff446ef31ae53a4be4cda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852bb70ccdce87335199296d06af9a7ea0c08463d0ff446ef31ae53a4be4cda9->enter($__internal_852bb70ccdce87335199296d06af9a7ea0c08463d0ff446ef31ae53a4be4cda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_c8306bfb3a7df2d85ff2e799a48fa1064a24dbd7e6adfe5f42bfed9c3ce796e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8306bfb3a7df2d85ff2e799a48fa1064a24dbd7e6adfe5f42bfed9c3ce796e6->enter($__internal_c8306bfb3a7df2d85ff2e799a48fa1064a24dbd7e6adfe5f42bfed9c3ce796e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_852bb70ccdce87335199296d06af9a7ea0c08463d0ff446ef31ae53a4be4cda9->leave($__internal_852bb70ccdce87335199296d06af9a7ea0c08463d0ff446ef31ae53a4be4cda9_prof);

        
        $__internal_c8306bfb3a7df2d85ff2e799a48fa1064a24dbd7e6adfe5f42bfed9c3ce796e6->leave($__internal_c8306bfb3a7df2d85ff2e799a48fa1064a24dbd7e6adfe5f42bfed9c3ce796e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea6a0dcaf1ba39657c5fdb295422380ded56ec8ead78e7fecf67a32f3b7014c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6a0dcaf1ba39657c5fdb295422380ded56ec8ead78e7fecf67a32f3b7014c0->enter($__internal_ea6a0dcaf1ba39657c5fdb295422380ded56ec8ead78e7fecf67a32f3b7014c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_076162fc7f1e2d58c75fa2d761d0dc093ecbd2e4e3de64af0e8eee3280f3efde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076162fc7f1e2d58c75fa2d761d0dc093ecbd2e4e3de64af0e8eee3280f3efde->enter($__internal_076162fc7f1e2d58c75fa2d761d0dc093ecbd2e4e3de64af0e8eee3280f3efde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_076162fc7f1e2d58c75fa2d761d0dc093ecbd2e4e3de64af0e8eee3280f3efde->leave($__internal_076162fc7f1e2d58c75fa2d761d0dc093ecbd2e4e3de64af0e8eee3280f3efde_prof);

        
        $__internal_ea6a0dcaf1ba39657c5fdb295422380ded56ec8ead78e7fecf67a32f3b7014c0->leave($__internal_ea6a0dcaf1ba39657c5fdb295422380ded56ec8ead78e7fecf67a32f3b7014c0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c237c73356a1b3f433a953443dc3dfdd31384bb3735da867eb70a95438286af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c237c73356a1b3f433a953443dc3dfdd31384bb3735da867eb70a95438286af->enter($__internal_8c237c73356a1b3f433a953443dc3dfdd31384bb3735da867eb70a95438286af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_672ee81363ff948cd84de1d2bf7a9bf02df1d8fc4a0515958a3a26d543b22d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672ee81363ff948cd84de1d2bf7a9bf02df1d8fc4a0515958a3a26d543b22d58->enter($__internal_672ee81363ff948cd84de1d2bf7a9bf02df1d8fc4a0515958a3a26d543b22d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_672ee81363ff948cd84de1d2bf7a9bf02df1d8fc4a0515958a3a26d543b22d58->leave($__internal_672ee81363ff948cd84de1d2bf7a9bf02df1d8fc4a0515958a3a26d543b22d58_prof);

        
        $__internal_8c237c73356a1b3f433a953443dc3dfdd31384bb3735da867eb70a95438286af->leave($__internal_8c237c73356a1b3f433a953443dc3dfdd31384bb3735da867eb70a95438286af_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4d28be4347fc70be4e03c9706141afe736359ff9b6689f57535ca21a4a9b5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d28be4347fc70be4e03c9706141afe736359ff9b6689f57535ca21a4a9b5a5->enter($__internal_d4d28be4347fc70be4e03c9706141afe736359ff9b6689f57535ca21a4a9b5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5052c36a637ec0c8c19b8020da351f69a5abe9add2369464f06d9636e00ee670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5052c36a637ec0c8c19b8020da351f69a5abe9add2369464f06d9636e00ee670->enter($__internal_5052c36a637ec0c8c19b8020da351f69a5abe9add2369464f06d9636e00ee670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_5052c36a637ec0c8c19b8020da351f69a5abe9add2369464f06d9636e00ee670->leave($__internal_5052c36a637ec0c8c19b8020da351f69a5abe9add2369464f06d9636e00ee670_prof);

        
        $__internal_d4d28be4347fc70be4e03c9706141afe736359ff9b6689f57535ca21a4a9b5a5->leave($__internal_d4d28be4347fc70be4e03c9706141afe736359ff9b6689f57535ca21a4a9b5a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
