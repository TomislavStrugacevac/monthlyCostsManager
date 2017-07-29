<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0bb07ad31854661362a1ae856741bbc7061c2d26b7bdebb7cfee771331f6bdbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57e15e847eec1537abfe07465eb581f3a649316003c8508329ee25910ec53c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e15e847eec1537abfe07465eb581f3a649316003c8508329ee25910ec53c7d->enter($__internal_57e15e847eec1537abfe07465eb581f3a649316003c8508329ee25910ec53c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5a6a6f8a5dded23c099dfc45c596dc8eb3fdb5803030eefc58e9891113d7815b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6a6f8a5dded23c099dfc45c596dc8eb3fdb5803030eefc58e9891113d7815b->enter($__internal_5a6a6f8a5dded23c099dfc45c596dc8eb3fdb5803030eefc58e9891113d7815b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_57e15e847eec1537abfe07465eb581f3a649316003c8508329ee25910ec53c7d->leave($__internal_57e15e847eec1537abfe07465eb581f3a649316003c8508329ee25910ec53c7d_prof);

        
        $__internal_5a6a6f8a5dded23c099dfc45c596dc8eb3fdb5803030eefc58e9891113d7815b->leave($__internal_5a6a6f8a5dded23c099dfc45c596dc8eb3fdb5803030eefc58e9891113d7815b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
