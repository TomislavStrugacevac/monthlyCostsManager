<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c32cfcbd6d9e5fb7b55576d6b25cc06f539402c92902d9d35e80c76a25d0b2a4 extends Twig_Template
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
        $__internal_1ef89e860ae5414364707271463c11ee77c2dfb47bb032f8091923adcecd987a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef89e860ae5414364707271463c11ee77c2dfb47bb032f8091923adcecd987a->enter($__internal_1ef89e860ae5414364707271463c11ee77c2dfb47bb032f8091923adcecd987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5f1f9ec8f0340f5af9e45c4f1f18081a635bc278c5fc61d4275dc16a36f3c68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1f9ec8f0340f5af9e45c4f1f18081a635bc278c5fc61d4275dc16a36f3c68d->enter($__internal_5f1f9ec8f0340f5af9e45c4f1f18081a635bc278c5fc61d4275dc16a36f3c68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1ef89e860ae5414364707271463c11ee77c2dfb47bb032f8091923adcecd987a->leave($__internal_1ef89e860ae5414364707271463c11ee77c2dfb47bb032f8091923adcecd987a_prof);

        
        $__internal_5f1f9ec8f0340f5af9e45c4f1f18081a635bc278c5fc61d4275dc16a36f3c68d->leave($__internal_5f1f9ec8f0340f5af9e45c4f1f18081a635bc278c5fc61d4275dc16a36f3c68d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
