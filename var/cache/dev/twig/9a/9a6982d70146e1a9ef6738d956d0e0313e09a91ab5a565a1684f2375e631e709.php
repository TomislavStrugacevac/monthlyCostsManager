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
        $__internal_4e117cf2769330a3e588237fb805a777a2c4431ba2f72c369fdb566db4826f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e117cf2769330a3e588237fb805a777a2c4431ba2f72c369fdb566db4826f1f->enter($__internal_4e117cf2769330a3e588237fb805a777a2c4431ba2f72c369fdb566db4826f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_01183a7239a3e66978384f072ebc2fe9e17ec9526a17d536af91f9eb428b49f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01183a7239a3e66978384f072ebc2fe9e17ec9526a17d536af91f9eb428b49f9->enter($__internal_01183a7239a3e66978384f072ebc2fe9e17ec9526a17d536af91f9eb428b49f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e117cf2769330a3e588237fb805a777a2c4431ba2f72c369fdb566db4826f1f->leave($__internal_4e117cf2769330a3e588237fb805a777a2c4431ba2f72c369fdb566db4826f1f_prof);

        
        $__internal_01183a7239a3e66978384f072ebc2fe9e17ec9526a17d536af91f9eb428b49f9->leave($__internal_01183a7239a3e66978384f072ebc2fe9e17ec9526a17d536af91f9eb428b49f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8af0f0a0a1a5ac5012f56e091c21e87cea80b0760de8f8c8f3403120121fdf2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af0f0a0a1a5ac5012f56e091c21e87cea80b0760de8f8c8f3403120121fdf2e->enter($__internal_8af0f0a0a1a5ac5012f56e091c21e87cea80b0760de8f8c8f3403120121fdf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c2326a2f8837b9271cdae230861c59d2331d748172a7d097e7382e359e56798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2326a2f8837b9271cdae230861c59d2331d748172a7d097e7382e359e56798->enter($__internal_1c2326a2f8837b9271cdae230861c59d2331d748172a7d097e7382e359e56798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1c2326a2f8837b9271cdae230861c59d2331d748172a7d097e7382e359e56798->leave($__internal_1c2326a2f8837b9271cdae230861c59d2331d748172a7d097e7382e359e56798_prof);

        
        $__internal_8af0f0a0a1a5ac5012f56e091c21e87cea80b0760de8f8c8f3403120121fdf2e->leave($__internal_8af0f0a0a1a5ac5012f56e091c21e87cea80b0760de8f8c8f3403120121fdf2e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_eced83d059202d78d97c2d8942c87007f410ea4b0d3c62df085392d90e8b8b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eced83d059202d78d97c2d8942c87007f410ea4b0d3c62df085392d90e8b8b0f->enter($__internal_eced83d059202d78d97c2d8942c87007f410ea4b0d3c62df085392d90e8b8b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_367fc220b6436e469c69012ea2aa55f455e539750a147be94fc9ec28de4a9ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367fc220b6436e469c69012ea2aa55f455e539750a147be94fc9ec28de4a9ddb->enter($__internal_367fc220b6436e469c69012ea2aa55f455e539750a147be94fc9ec28de4a9ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_367fc220b6436e469c69012ea2aa55f455e539750a147be94fc9ec28de4a9ddb->leave($__internal_367fc220b6436e469c69012ea2aa55f455e539750a147be94fc9ec28de4a9ddb_prof);

        
        $__internal_eced83d059202d78d97c2d8942c87007f410ea4b0d3c62df085392d90e8b8b0f->leave($__internal_eced83d059202d78d97c2d8942c87007f410ea4b0d3c62df085392d90e8b8b0f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d52e42ee9ee9fcc7f4086c8b3f6db32ba871eb6601c6b61071e9dcb899e9d98d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52e42ee9ee9fcc7f4086c8b3f6db32ba871eb6601c6b61071e9dcb899e9d98d->enter($__internal_d52e42ee9ee9fcc7f4086c8b3f6db32ba871eb6601c6b61071e9dcb899e9d98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_710179ff437fc478caa5bb29d3c4801018888fc32e26941e3d9e17f8210d0063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710179ff437fc478caa5bb29d3c4801018888fc32e26941e3d9e17f8210d0063->enter($__internal_710179ff437fc478caa5bb29d3c4801018888fc32e26941e3d9e17f8210d0063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_710179ff437fc478caa5bb29d3c4801018888fc32e26941e3d9e17f8210d0063->leave($__internal_710179ff437fc478caa5bb29d3c4801018888fc32e26941e3d9e17f8210d0063_prof);

        
        $__internal_d52e42ee9ee9fcc7f4086c8b3f6db32ba871eb6601c6b61071e9dcb899e9d98d->leave($__internal_d52e42ee9ee9fcc7f4086c8b3f6db32ba871eb6601c6b61071e9dcb899e9d98d_prof);

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
