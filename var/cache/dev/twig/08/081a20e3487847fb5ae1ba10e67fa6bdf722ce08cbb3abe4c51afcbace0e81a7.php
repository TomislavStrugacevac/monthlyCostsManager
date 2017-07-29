<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_72fd49833c537459418532413276ef6a6dc228e9b1dd47c36dfe0d78f2e3b0c1 extends Twig_Template
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
        $__internal_b1b513ed28afa2b344de5ef3601cc6f1519ddd46a6df2ba67b39ee673e55088b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b513ed28afa2b344de5ef3601cc6f1519ddd46a6df2ba67b39ee673e55088b->enter($__internal_b1b513ed28afa2b344de5ef3601cc6f1519ddd46a6df2ba67b39ee673e55088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_61bcb24e6491fccc8e41fc4d264f4e285641d5b8a4acf9c81b11d4efbe7183d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bcb24e6491fccc8e41fc4d264f4e285641d5b8a4acf9c81b11d4efbe7183d5->enter($__internal_61bcb24e6491fccc8e41fc4d264f4e285641d5b8a4acf9c81b11d4efbe7183d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_b1b513ed28afa2b344de5ef3601cc6f1519ddd46a6df2ba67b39ee673e55088b->leave($__internal_b1b513ed28afa2b344de5ef3601cc6f1519ddd46a6df2ba67b39ee673e55088b_prof);

        
        $__internal_61bcb24e6491fccc8e41fc4d264f4e285641d5b8a4acf9c81b11d4efbe7183d5->leave($__internal_61bcb24e6491fccc8e41fc4d264f4e285641d5b8a4acf9c81b11d4efbe7183d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
