<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_4ae58e4abb7b221792705807f15a587ffc7a2d44293b47ceaad29949820ddf6b extends Twig_Template
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
        $__internal_e8c601e307c6021197ffe5ef9853508654ff86c34a26d1c8874e696f22296455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c601e307c6021197ffe5ef9853508654ff86c34a26d1c8874e696f22296455->enter($__internal_e8c601e307c6021197ffe5ef9853508654ff86c34a26d1c8874e696f22296455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_01f14e9d8f9a4d72eb42f57b1a68421b05e1a96afdc13ee32c153d127f264286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f14e9d8f9a4d72eb42f57b1a68421b05e1a96afdc13ee32c153d127f264286->enter($__internal_01f14e9d8f9a4d72eb42f57b1a68421b05e1a96afdc13ee32c153d127f264286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_e8c601e307c6021197ffe5ef9853508654ff86c34a26d1c8874e696f22296455->leave($__internal_e8c601e307c6021197ffe5ef9853508654ff86c34a26d1c8874e696f22296455_prof);

        
        $__internal_01f14e9d8f9a4d72eb42f57b1a68421b05e1a96afdc13ee32c153d127f264286->leave($__internal_01f14e9d8f9a4d72eb42f57b1a68421b05e1a96afdc13ee32c153d127f264286_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
