<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_18cb62751a647ab21cf36348c09ff029a1cce9ef2c8cb082dc2cf1827cd8bd6f extends Twig_Template
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
        $__internal_93d4a6572ee05d7a3b9c9bbd9f21b6d5d8384c9dc455b04f71d847d66ba7671f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d4a6572ee05d7a3b9c9bbd9f21b6d5d8384c9dc455b04f71d847d66ba7671f->enter($__internal_93d4a6572ee05d7a3b9c9bbd9f21b6d5d8384c9dc455b04f71d847d66ba7671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_85db143bb1cd6dec7d4ab2026cbeb50ec7137950813db9384b05810bb6e0feee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85db143bb1cd6dec7d4ab2026cbeb50ec7137950813db9384b05810bb6e0feee->enter($__internal_85db143bb1cd6dec7d4ab2026cbeb50ec7137950813db9384b05810bb6e0feee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_93d4a6572ee05d7a3b9c9bbd9f21b6d5d8384c9dc455b04f71d847d66ba7671f->leave($__internal_93d4a6572ee05d7a3b9c9bbd9f21b6d5d8384c9dc455b04f71d847d66ba7671f_prof);

        
        $__internal_85db143bb1cd6dec7d4ab2026cbeb50ec7137950813db9384b05810bb6e0feee->leave($__internal_85db143bb1cd6dec7d4ab2026cbeb50ec7137950813db9384b05810bb6e0feee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
