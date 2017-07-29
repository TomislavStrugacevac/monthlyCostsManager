<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_58c4679a7f5365ff9f08ac70de857d66386d26934acb20f6c0eaf5006a7a16c8 extends Twig_Template
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
        $__internal_d107c421f174ec96b23c09b3ea962bfa477e2d9e3f365394161c0ae219f22271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d107c421f174ec96b23c09b3ea962bfa477e2d9e3f365394161c0ae219f22271->enter($__internal_d107c421f174ec96b23c09b3ea962bfa477e2d9e3f365394161c0ae219f22271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_11c3b8c290748d8f362736eec9bc39f864cfba76756ad00fbc4d1581853575e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c3b8c290748d8f362736eec9bc39f864cfba76756ad00fbc4d1581853575e2->enter($__internal_11c3b8c290748d8f362736eec9bc39f864cfba76756ad00fbc4d1581853575e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d107c421f174ec96b23c09b3ea962bfa477e2d9e3f365394161c0ae219f22271->leave($__internal_d107c421f174ec96b23c09b3ea962bfa477e2d9e3f365394161c0ae219f22271_prof);

        
        $__internal_11c3b8c290748d8f362736eec9bc39f864cfba76756ad00fbc4d1581853575e2->leave($__internal_11c3b8c290748d8f362736eec9bc39f864cfba76756ad00fbc4d1581853575e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
