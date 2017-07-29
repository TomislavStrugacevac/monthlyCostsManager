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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a418fa4fa257eeed40ff4dfd123ce108f4b77e0c79e465b2e12f089dec1fc2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a418fa4fa257eeed40ff4dfd123ce108f4b77e0c79e465b2e12f089dec1fc2d->enter($__internal_3a418fa4fa257eeed40ff4dfd123ce108f4b77e0c79e465b2e12f089dec1fc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $__internal_f2c06cc03ca21122ce6eb3943aaf314566607895a811b4340474860adb183943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c06cc03ca21122ce6eb3943aaf314566607895a811b4340474860adb183943->enter($__internal_f2c06cc03ca21122ce6eb3943aaf314566607895a811b4340474860adb183943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a418fa4fa257eeed40ff4dfd123ce108f4b77e0c79e465b2e12f089dec1fc2d->leave($__internal_3a418fa4fa257eeed40ff4dfd123ce108f4b77e0c79e465b2e12f089dec1fc2d_prof);

        
        $__internal_f2c06cc03ca21122ce6eb3943aaf314566607895a811b4340474860adb183943->leave($__internal_f2c06cc03ca21122ce6eb3943aaf314566607895a811b4340474860adb183943_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d4a57e362cc15cbbfa0747929fcef74194ffaa241607e22e1a82d1cfac33b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4a57e362cc15cbbfa0747929fcef74194ffaa241607e22e1a82d1cfac33b03->enter($__internal_5d4a57e362cc15cbbfa0747929fcef74194ffaa241607e22e1a82d1cfac33b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ecc135b05ad3c389a8e9770d469fda8ee653008c29058b0e71abdf68c4e4c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecc135b05ad3c389a8e9770d469fda8ee653008c29058b0e71abdf68c4e4c54->enter($__internal_2ecc135b05ad3c389a8e9770d469fda8ee653008c29058b0e71abdf68c4e4c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t
\t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_2ecc135b05ad3c389a8e9770d469fda8ee653008c29058b0e71abdf68c4e4c54->leave($__internal_2ecc135b05ad3c389a8e9770d469fda8ee653008c29058b0e71abdf68c4e4c54_prof);

        
        $__internal_5d4a57e362cc15cbbfa0747929fcef74194ffaa241607e22e1a82d1cfac33b03->leave($__internal_5d4a57e362cc15cbbfa0747929fcef74194ffaa241607e22e1a82d1cfac33b03_prof);

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
        return array (  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t
\t{{ form_start(form) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}

{% endblock %}", "default/form.html.twig", "D:\\WebstormProjects\\rezije\\app\\Resources\\views\\default\\form.html.twig");
    }
}
