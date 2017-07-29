<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_69d351f20ffd94816e2e88a71f4252fcd05557b24f387403955b8741e2c3bdaf extends Twig_Template
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
        $__internal_4d6e756252e4a0b6d7374e68a8ed64e1e26ed5920397136e84919c67c1ea898e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6e756252e4a0b6d7374e68a8ed64e1e26ed5920397136e84919c67c1ea898e->enter($__internal_4d6e756252e4a0b6d7374e68a8ed64e1e26ed5920397136e84919c67c1ea898e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_2bd7252e68f755da041b4b8653c27dd5225a0ce39c12a1ca19795bd745f85663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd7252e68f755da041b4b8653c27dd5225a0ce39c12a1ca19795bd745f85663->enter($__internal_2bd7252e68f755da041b4b8653c27dd5225a0ce39c12a1ca19795bd745f85663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4d6e756252e4a0b6d7374e68a8ed64e1e26ed5920397136e84919c67c1ea898e->leave($__internal_4d6e756252e4a0b6d7374e68a8ed64e1e26ed5920397136e84919c67c1ea898e_prof);

        
        $__internal_2bd7252e68f755da041b4b8653c27dd5225a0ce39c12a1ca19795bd745f85663->leave($__internal_2bd7252e68f755da041b4b8653c27dd5225a0ce39c12a1ca19795bd745f85663_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
