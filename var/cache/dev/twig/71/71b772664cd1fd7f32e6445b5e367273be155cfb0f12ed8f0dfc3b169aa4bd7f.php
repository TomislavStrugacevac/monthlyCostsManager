<?php

/* default/index.html.twig */
class __TwigTemplate_86f96822ecc2f5a2f26fac572780936195d6cfff81e7e381121ca4f9f7b17a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb9ff2438398597de70ffa70a2b5c56b0e0f7fe561d8ed42828d095745eb760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb9ff2438398597de70ffa70a2b5c56b0e0f7fe561d8ed42828d095745eb760->enter($__internal_deb9ff2438398597de70ffa70a2b5c56b0e0f7fe561d8ed42828d095745eb760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_aecaf2cde6bf988e41e4534dfddeb750ebe93fc9d152588a9eeba806c1dfa556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecaf2cde6bf988e41e4534dfddeb750ebe93fc9d152588a9eeba806c1dfa556->enter($__internal_aecaf2cde6bf988e41e4534dfddeb750ebe93fc9d152588a9eeba806c1dfa556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb9ff2438398597de70ffa70a2b5c56b0e0f7fe561d8ed42828d095745eb760->leave($__internal_deb9ff2438398597de70ffa70a2b5c56b0e0f7fe561d8ed42828d095745eb760_prof);

        
        $__internal_aecaf2cde6bf988e41e4534dfddeb750ebe93fc9d152588a9eeba806c1dfa556->leave($__internal_aecaf2cde6bf988e41e4534dfddeb750ebe93fc9d152588a9eeba806c1dfa556_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3c2ab6d1826f79db360c3714a0782eee17af7d2128537b5acbde29d941bd7bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c2ab6d1826f79db360c3714a0782eee17af7d2128537b5acbde29d941bd7bd->enter($__internal_f3c2ab6d1826f79db360c3714a0782eee17af7d2128537b5acbde29d941bd7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca1604ed32d8b62a38b011064fb39e38138e8e99d723a5b02e8b583ed45ece62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1604ed32d8b62a38b011064fb39e38138e8e99d723a5b02e8b583ed45ece62->enter($__internal_ca1604ed32d8b62a38b011064fb39e38138e8e99d723a5b02e8b583ed45ece62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Index page</h1>
";
        
        $__internal_ca1604ed32d8b62a38b011064fb39e38138e8e99d723a5b02e8b583ed45ece62->leave($__internal_ca1604ed32d8b62a38b011064fb39e38138e8e99d723a5b02e8b583ed45ece62_prof);

        
        $__internal_f3c2ab6d1826f79db360c3714a0782eee17af7d2128537b5acbde29d941bd7bd->leave($__internal_f3c2ab6d1826f79db360c3714a0782eee17af7d2128537b5acbde29d941bd7bd_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Index page</h1>
{% endblock %}
", "default/index.html.twig", "D:\\WebstormProjects\\rezije\\app\\Resources\\views\\default\\index.html.twig");
    }
}
