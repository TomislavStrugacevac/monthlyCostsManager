<?php

/* default/form.html.twig */
class __TwigTemplate_96a0b6159c2b7df2788af12d92b4641ce2f354d531020c16b8219fb25490f3a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78d7fdbb4cc6ab9c47519370d42f1143795a01897f6245a1391eb2d8064e7f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d7fdbb4cc6ab9c47519370d42f1143795a01897f6245a1391eb2d8064e7f2c->enter($__internal_78d7fdbb4cc6ab9c47519370d42f1143795a01897f6245a1391eb2d8064e7f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $__internal_181b4d339a3ffb3efe3f2149df4ad12373a479ec2bd417203fbdc8ae074be698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181b4d339a3ffb3efe3f2149df4ad12373a479ec2bd417203fbdc8ae074be698->enter($__internal_181b4d339a3ffb3efe3f2149df4ad12373a479ec2bd417203fbdc8ae074be698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d7fdbb4cc6ab9c47519370d42f1143795a01897f6245a1391eb2d8064e7f2c->leave($__internal_78d7fdbb4cc6ab9c47519370d42f1143795a01897f6245a1391eb2d8064e7f2c_prof);

        
        $__internal_181b4d339a3ffb3efe3f2149df4ad12373a479ec2bd417203fbdc8ae074be698->leave($__internal_181b4d339a3ffb3efe3f2149df4ad12373a479ec2bd417203fbdc8ae074be698_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3980138f12958c66c467b721675287bf9432590383c64cd28a5384dcb02bee34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3980138f12958c66c467b721675287bf9432590383c64cd28a5384dcb02bee34->enter($__internal_3980138f12958c66c467b721675287bf9432590383c64cd28a5384dcb02bee34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b056e751854eee463e13e5eefd111f640fc6520082f17ba50e07e10eb9b2124e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b056e751854eee463e13e5eefd111f640fc6520082f17ba50e07e10eb9b2124e->enter($__internal_b056e751854eee463e13e5eefd111f640fc6520082f17ba50e07e10eb9b2124e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-lg-2 col-md-2 col-sm-12 col-xs-12\" id=\"userData\">
\t\t\t<h4>User:</h4>
\t\t\t<p>Tomislav Strugačevac</p>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h4>Lokacija:</h4>
\t\t\t<p> M. Divalta 92, Osijek</p>
\t\t\t<p></p>
\t\t\t<p></p>
\t\t</div>
\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-6\" id=\"formContainer\" name=\"form\">
\t\t\t
\t\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>

\t\t<div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-0\"></div>
\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-6\">
\t\t\t\t<div class=\"col-12\" id=\"formContainer\" style=\"margin-bottom: 20px;\">
\t\t\t\t\t<h3>Ukupno režije:</h3>
\t\t\t\t\t<br>
\t\t\t\t\t<h4><span class=\"total\">0.00</span></h4>
\t\t\t\t</div>
\t\t\t\t

\t\t\t\t<div class=\"col-12\" id=\"formContainer\">
\t\t\t\t\t<h3>Pomoćni kalkulator:</h3>
\t\t\t\t\t<br>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4>Ukupno:<h4 class=\"form-control\">1453,26</h4></h4>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t</div>


";
        
        $__internal_b056e751854eee463e13e5eefd111f640fc6520082f17ba50e07e10eb9b2124e->leave($__internal_b056e751854eee463e13e5eefd111f640fc6520082f17ba50e07e10eb9b2124e_prof);

        
        $__internal_3980138f12958c66c467b721675287bf9432590383c64cd28a5384dcb02bee34->leave($__internal_3980138f12958c66c467b721675287bf9432590383c64cd28a5384dcb02bee34_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d219dd86a7a294021bb02595fd70bb53b2370d306bde6679e8b411569ee3cdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d219dd86a7a294021bb02595fd70bb53b2370d306bde6679e8b411569ee3cdf0->enter($__internal_d219dd86a7a294021bb02595fd70bb53b2370d306bde6679e8b411569ee3cdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da2ab7ff5e02dd23b132e67e45650babda83bcc853dbaa8e4e45be2e72fd1939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2ab7ff5e02dd23b132e67e45650babda83bcc853dbaa8e4e45be2e72fd1939->enter($__internal_da2ab7ff5e02dd23b132e67e45650babda83bcc853dbaa8e4e45be2e72fd1939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    
";
        
        $__internal_da2ab7ff5e02dd23b132e67e45650babda83bcc853dbaa8e4e45be2e72fd1939->leave($__internal_da2ab7ff5e02dd23b132e67e45650babda83bcc853dbaa8e4e45be2e72fd1939_prof);

        
        $__internal_d219dd86a7a294021bb02595fd70bb53b2370d306bde6679e8b411569ee3cdf0->leave($__internal_d219dd86a7a294021bb02595fd70bb53b2370d306bde6679e8b411569ee3cdf0_prof);

    }

    public function getTemplateName()
    {
        return "default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  112 => 49,  74 => 20,  70 => 19,  66 => 18,  50 => 4,  41 => 3,  11 => 1,);
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

{% block body%}

\t<div class=\"row\">
\t\t<div class=\"col-lg-2 col-md-2 col-sm-12 col-xs-12\" id=\"userData\">
\t\t\t<h4>User:</h4>
\t\t\t<p>Tomislav Strugačevac</p>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h4>Lokacija:</h4>
\t\t\t<p> M. Divalta 92, Osijek</p>
\t\t\t<p></p>
\t\t\t<p></p>
\t\t</div>
\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-6\" id=\"formContainer\" name=\"form\">
\t\t\t
\t\t\t{{ form_start(form) }}
\t\t\t{{ form_widget(form) }}
\t\t\t{{ form_end(form) }}
\t\t</div>

\t\t<div class=\"col-lg-1 col-md-1 col-sm-1 col-xs-0\"></div>
\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-6\">
\t\t\t\t<div class=\"col-12\" id=\"formContainer\" style=\"margin-bottom: 20px;\">
\t\t\t\t\t<h3>Ukupno režije:</h3>
\t\t\t\t\t<br>
\t\t\t\t\t<h4><span class=\"total\">0.00</span></h4>
\t\t\t\t</div>
\t\t\t\t

\t\t\t\t<div class=\"col-12\" id=\"formContainer\">
\t\t\t\t\t<h3>Pomoćni kalkulator:</h3>
\t\t\t\t\t<br>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4 class=\"form-control\">1453,26</h4>
\t\t\t\t\t<h4>Ukupno:<h4 class=\"form-control\">1453,26</h4></h4>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t</div>


{% endblock %}

{% block javascripts %}
    
{% endblock %}", "default/form.html.twig", "D:\\WebstormProjects\\rezije\\app\\Resources\\views\\default\\form.html.twig");
    }
}
