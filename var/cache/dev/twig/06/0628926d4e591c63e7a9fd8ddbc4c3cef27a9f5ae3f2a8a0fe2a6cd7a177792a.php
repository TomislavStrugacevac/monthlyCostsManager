<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a5e9a2548982c5219f7a508f6e3634abeb61eaa0b1949553c202d5fb1af35a8f extends Twig_Template
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
        $__internal_139b2038ec9058216fef182eacda48a7160e99caaa7ac172c183e03e4c4e4264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139b2038ec9058216fef182eacda48a7160e99caaa7ac172c183e03e4c4e4264->enter($__internal_139b2038ec9058216fef182eacda48a7160e99caaa7ac172c183e03e4c4e4264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_4daa0854ba644510b9a4fb709cff98852af53a99efb852c055f8e592444805c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4daa0854ba644510b9a4fb709cff98852af53a99efb852c055f8e592444805c1->enter($__internal_4daa0854ba644510b9a4fb709cff98852af53a99efb852c055f8e592444805c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_139b2038ec9058216fef182eacda48a7160e99caaa7ac172c183e03e4c4e4264->leave($__internal_139b2038ec9058216fef182eacda48a7160e99caaa7ac172c183e03e4c4e4264_prof);

        
        $__internal_4daa0854ba644510b9a4fb709cff98852af53a99efb852c055f8e592444805c1->leave($__internal_4daa0854ba644510b9a4fb709cff98852af53a99efb852c055f8e592444805c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
