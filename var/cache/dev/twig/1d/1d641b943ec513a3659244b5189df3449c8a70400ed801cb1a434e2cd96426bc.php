<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_765d92e4f2378ac8f160167b5c9d732c1ca1b0a150c1eee8d34d81d61385fd5c extends Twig_Template
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
        $__internal_658df8d518cb7295e78c0840bd5406aab3390c0b0e111fef85d31c345c96567d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658df8d518cb7295e78c0840bd5406aab3390c0b0e111fef85d31c345c96567d->enter($__internal_658df8d518cb7295e78c0840bd5406aab3390c0b0e111fef85d31c345c96567d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_6d8238c2b3208ad33050f622722876052127017a33bb01ec9f1d38fdce0bec5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8238c2b3208ad33050f622722876052127017a33bb01ec9f1d38fdce0bec5b->enter($__internal_6d8238c2b3208ad33050f622722876052127017a33bb01ec9f1d38fdce0bec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_658df8d518cb7295e78c0840bd5406aab3390c0b0e111fef85d31c345c96567d->leave($__internal_658df8d518cb7295e78c0840bd5406aab3390c0b0e111fef85d31c345c96567d_prof);

        
        $__internal_6d8238c2b3208ad33050f622722876052127017a33bb01ec9f1d38fdce0bec5b->leave($__internal_6d8238c2b3208ad33050f622722876052127017a33bb01ec9f1d38fdce0bec5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
