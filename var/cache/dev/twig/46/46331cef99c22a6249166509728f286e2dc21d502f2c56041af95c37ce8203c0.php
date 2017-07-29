<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d9b96ce23200d12f0042b91405cfdfd46fb6c9050a3a9e9f4fd477334b604b86 extends Twig_Template
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
        $__internal_41129777a1dd13a8d924a711b7a1903bb06ce682c18c3aedf04aebec34a3ae3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41129777a1dd13a8d924a711b7a1903bb06ce682c18c3aedf04aebec34a3ae3d->enter($__internal_41129777a1dd13a8d924a711b7a1903bb06ce682c18c3aedf04aebec34a3ae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_7c1f972c1c35c66c6727c8ee63e1a34304a64b4ec61b73f79c3054d22d5a874c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1f972c1c35c66c6727c8ee63e1a34304a64b4ec61b73f79c3054d22d5a874c->enter($__internal_7c1f972c1c35c66c6727c8ee63e1a34304a64b4ec61b73f79c3054d22d5a874c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_41129777a1dd13a8d924a711b7a1903bb06ce682c18c3aedf04aebec34a3ae3d->leave($__internal_41129777a1dd13a8d924a711b7a1903bb06ce682c18c3aedf04aebec34a3ae3d_prof);

        
        $__internal_7c1f972c1c35c66c6727c8ee63e1a34304a64b4ec61b73f79c3054d22d5a874c->leave($__internal_7c1f972c1c35c66c6727c8ee63e1a34304a64b4ec61b73f79c3054d22d5a874c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
