<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_20ba3b2b4dd2a1442de899007c26160e2fb3d3593b152bbc9ad5190b91eb0ddb extends Twig_Template
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
        $__internal_07dc1270b8aa89d54f270561dfbf7baf9110ebadf4eec0d64a836f82b8fe1b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07dc1270b8aa89d54f270561dfbf7baf9110ebadf4eec0d64a836f82b8fe1b82->enter($__internal_07dc1270b8aa89d54f270561dfbf7baf9110ebadf4eec0d64a836f82b8fe1b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b66d241e2ab338466b6fc60a2d8e6d56695791cbc397ef9a96801fbf593d751c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66d241e2ab338466b6fc60a2d8e6d56695791cbc397ef9a96801fbf593d751c->enter($__internal_b66d241e2ab338466b6fc60a2d8e6d56695791cbc397ef9a96801fbf593d751c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_07dc1270b8aa89d54f270561dfbf7baf9110ebadf4eec0d64a836f82b8fe1b82->leave($__internal_07dc1270b8aa89d54f270561dfbf7baf9110ebadf4eec0d64a836f82b8fe1b82_prof);

        
        $__internal_b66d241e2ab338466b6fc60a2d8e6d56695791cbc397ef9a96801fbf593d751c->leave($__internal_b66d241e2ab338466b6fc60a2d8e6d56695791cbc397ef9a96801fbf593d751c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
