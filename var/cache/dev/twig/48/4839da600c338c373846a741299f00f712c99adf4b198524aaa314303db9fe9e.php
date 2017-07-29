<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_580342ba5d8e36206cfb8dfd9a291e3ec13c68540f404a883ff71e893e36f332 extends Twig_Template
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
        $__internal_9fd679fc10a4109ae5e32ce8d5ce5809b3a48c151e94a71b08efcbee24ff4b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd679fc10a4109ae5e32ce8d5ce5809b3a48c151e94a71b08efcbee24ff4b5e->enter($__internal_9fd679fc10a4109ae5e32ce8d5ce5809b3a48c151e94a71b08efcbee24ff4b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f091637627bf728bdff5cafad3a2226143d922c737bbd0dd87e53e77a815a886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f091637627bf728bdff5cafad3a2226143d922c737bbd0dd87e53e77a815a886->enter($__internal_f091637627bf728bdff5cafad3a2226143d922c737bbd0dd87e53e77a815a886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9fd679fc10a4109ae5e32ce8d5ce5809b3a48c151e94a71b08efcbee24ff4b5e->leave($__internal_9fd679fc10a4109ae5e32ce8d5ce5809b3a48c151e94a71b08efcbee24ff4b5e_prof);

        
        $__internal_f091637627bf728bdff5cafad3a2226143d922c737bbd0dd87e53e77a815a886->leave($__internal_f091637627bf728bdff5cafad3a2226143d922c737bbd0dd87e53e77a815a886_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
