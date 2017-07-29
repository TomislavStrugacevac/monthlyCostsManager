<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_788503598b325b0fe2db2d8fd4714b14560fef35ee8d1454c80d66842efb3ce5 extends Twig_Template
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
        $__internal_1e9dc7236924599e9b7621f83536c8b07e2ec2ec607ad5e76a77d2a67e88daeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9dc7236924599e9b7621f83536c8b07e2ec2ec607ad5e76a77d2a67e88daeb->enter($__internal_1e9dc7236924599e9b7621f83536c8b07e2ec2ec607ad5e76a77d2a67e88daeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_693682b4d80859b6c918f2ef30723b5268ffdbac4be27dc83f65cd6a9065f89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693682b4d80859b6c918f2ef30723b5268ffdbac4be27dc83f65cd6a9065f89a->enter($__internal_693682b4d80859b6c918f2ef30723b5268ffdbac4be27dc83f65cd6a9065f89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1e9dc7236924599e9b7621f83536c8b07e2ec2ec607ad5e76a77d2a67e88daeb->leave($__internal_1e9dc7236924599e9b7621f83536c8b07e2ec2ec607ad5e76a77d2a67e88daeb_prof);

        
        $__internal_693682b4d80859b6c918f2ef30723b5268ffdbac4be27dc83f65cd6a9065f89a->leave($__internal_693682b4d80859b6c918f2ef30723b5268ffdbac4be27dc83f65cd6a9065f89a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
