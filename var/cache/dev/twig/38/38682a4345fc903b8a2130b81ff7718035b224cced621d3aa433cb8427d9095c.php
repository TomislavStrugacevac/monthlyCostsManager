<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_cc94218d634d5a88104a54d7c617b4b2abbc231f37658f7f391b3f7e2c9770c8 extends Twig_Template
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
        $__internal_8f6bfabc35858068548d0818c6ec0d53b384a618a9cf625df9582f42efb32bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6bfabc35858068548d0818c6ec0d53b384a618a9cf625df9582f42efb32bac->enter($__internal_8f6bfabc35858068548d0818c6ec0d53b384a618a9cf625df9582f42efb32bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_d940a1e358d3284cb8d212485a0cc4607b3c4f4f21e85b448a8112ea9ff990c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d940a1e358d3284cb8d212485a0cc4607b3c4f4f21e85b448a8112ea9ff990c6->enter($__internal_d940a1e358d3284cb8d212485a0cc4607b3c4f4f21e85b448a8112ea9ff990c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8f6bfabc35858068548d0818c6ec0d53b384a618a9cf625df9582f42efb32bac->leave($__internal_8f6bfabc35858068548d0818c6ec0d53b384a618a9cf625df9582f42efb32bac_prof);

        
        $__internal_d940a1e358d3284cb8d212485a0cc4607b3c4f4f21e85b448a8112ea9ff990c6->leave($__internal_d940a1e358d3284cb8d212485a0cc4607b3c4f4f21e85b448a8112ea9ff990c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
