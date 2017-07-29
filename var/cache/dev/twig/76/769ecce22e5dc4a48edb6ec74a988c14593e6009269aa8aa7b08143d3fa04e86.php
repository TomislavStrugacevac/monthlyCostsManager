<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c67818556a4512d0dccbd4d42c7ab7bb34200511f30ca0e3741d125103a79061 extends Twig_Template
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
        $__internal_89f2a56d2f8f56499e05681d4e9c09f7783f18145f254b7fcf15642941c29f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f2a56d2f8f56499e05681d4e9c09f7783f18145f254b7fcf15642941c29f49->enter($__internal_89f2a56d2f8f56499e05681d4e9c09f7783f18145f254b7fcf15642941c29f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_cdbb9dc340e4989de0aa8c97522547a63dfe5d77d50e3fe2f978227195e9f171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbb9dc340e4989de0aa8c97522547a63dfe5d77d50e3fe2f978227195e9f171->enter($__internal_cdbb9dc340e4989de0aa8c97522547a63dfe5d77d50e3fe2f978227195e9f171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_89f2a56d2f8f56499e05681d4e9c09f7783f18145f254b7fcf15642941c29f49->leave($__internal_89f2a56d2f8f56499e05681d4e9c09f7783f18145f254b7fcf15642941c29f49_prof);

        
        $__internal_cdbb9dc340e4989de0aa8c97522547a63dfe5d77d50e3fe2f978227195e9f171->leave($__internal_cdbb9dc340e4989de0aa8c97522547a63dfe5d77d50e3fe2f978227195e9f171_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
