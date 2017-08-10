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
        $__internal_163132dc5cc1dfb2734f3365a3eb15fd3637119a4fc35dca1548e2467be68bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163132dc5cc1dfb2734f3365a3eb15fd3637119a4fc35dca1548e2467be68bf4->enter($__internal_163132dc5cc1dfb2734f3365a3eb15fd3637119a4fc35dca1548e2467be68bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $__internal_cdd76b5c216158bc74484a8b51ea61f489aefb3814064149da019b75f8016fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd76b5c216158bc74484a8b51ea61f489aefb3814064149da019b75f8016fed->enter($__internal_cdd76b5c216158bc74484a8b51ea61f489aefb3814064149da019b75f8016fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_163132dc5cc1dfb2734f3365a3eb15fd3637119a4fc35dca1548e2467be68bf4->leave($__internal_163132dc5cc1dfb2734f3365a3eb15fd3637119a4fc35dca1548e2467be68bf4_prof);

        
        $__internal_cdd76b5c216158bc74484a8b51ea61f489aefb3814064149da019b75f8016fed->leave($__internal_cdd76b5c216158bc74484a8b51ea61f489aefb3814064149da019b75f8016fed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3f8251a676d13ae0d1e72cb13f52563d5221dec05ac5e57c05388dd66abcadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f8251a676d13ae0d1e72cb13f52563d5221dec05ac5e57c05388dd66abcadd->enter($__internal_f3f8251a676d13ae0d1e72cb13f52563d5221dec05ac5e57c05388dd66abcadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ade8df6492c6b2ff7c7b3c035ff7c3242453ee30f06d5d9b9a3d12f5072ec7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ade8df6492c6b2ff7c7b3c035ff7c3242453ee30f06d5d9b9a3d12f5072ec7b->enter($__internal_6ade8df6492c6b2ff7c7b3c035ff7c3242453ee30f06d5d9b9a3d12f5072ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-lg-2 col-md-2 col-sm-12 col-xs-12\" id=\"userData\">
\t\t\t<h4>User:</h4>
\t\t\t<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h4>Lokacija:</h4>
\t\t\t<p> M. Divalta 92, Osijek</p>
\t\t\t<p></p>
\t\t\t<p></p>
\t\t</div>
\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-6\" id=\"formContainer\" name=\"form\">

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
\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_6ade8df6492c6b2ff7c7b3c035ff7c3242453ee30f06d5d9b9a3d12f5072ec7b->leave($__internal_6ade8df6492c6b2ff7c7b3c035ff7c3242453ee30f06d5d9b9a3d12f5072ec7b_prof);

        
        $__internal_f3f8251a676d13ae0d1e72cb13f52563d5221dec05ac5e57c05388dd66abcadd->leave($__internal_f3f8251a676d13ae0d1e72cb13f52563d5221dec05ac5e57c05388dd66abcadd_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96a3017664d02347b1cf634c1e65f1b617d7705b71dbadc2b07c5128dee5b3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a3017664d02347b1cf634c1e65f1b617d7705b71dbadc2b07c5128dee5b3dc->enter($__internal_96a3017664d02347b1cf634c1e65f1b617d7705b71dbadc2b07c5128dee5b3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5ac1127623c50d23c035d08845eac9d4c9951933ae8c1aac6357eeb332ff12e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac1127623c50d23c035d08845eac9d4c9951933ae8c1aac6357eeb332ff12e9->enter($__internal_5ac1127623c50d23c035d08845eac9d4c9951933ae8c1aac6357eeb332ff12e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "
";
        
        $__internal_5ac1127623c50d23c035d08845eac9d4c9951933ae8c1aac6357eeb332ff12e9->leave($__internal_5ac1127623c50d23c035d08845eac9d4c9951933ae8c1aac6357eeb332ff12e9_prof);

        
        $__internal_96a3017664d02347b1cf634c1e65f1b617d7705b71dbadc2b07c5128dee5b3dc->leave($__internal_96a3017664d02347b1cf634c1e65f1b617d7705b71dbadc2b07c5128dee5b3dc_prof);

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
        return array (  124 => 50,  115 => 49,  77 => 20,  73 => 19,  69 => 18,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t\t<p>{{ app.user.username }}</p>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h4>Lokacija:</h4>
\t\t\t<p> M. Divalta 92, Osijek</p>
\t\t\t<p></p>
\t\t\t<p></p>
\t\t</div>
\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-6\" id=\"formContainer\" name=\"form\">

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
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}

{% block javascripts %}

{% endblock %}
", "default/form.html.twig", "D:\\WebstormProjects\\rezije\\app\\Resources\\views\\default\\form.html.twig");
    }
}
