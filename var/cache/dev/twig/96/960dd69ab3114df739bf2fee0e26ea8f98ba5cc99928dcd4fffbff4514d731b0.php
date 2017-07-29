<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cb9bcdb914acea5868a69dd88c5f9ac970b9d4799243e9f9f215391a42881cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f94c73ce6f928d4d53dc8f4d41926b25b5e3281b7158e6993203df0fa0f3059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f94c73ce6f928d4d53dc8f4d41926b25b5e3281b7158e6993203df0fa0f3059->enter($__internal_0f94c73ce6f928d4d53dc8f4d41926b25b5e3281b7158e6993203df0fa0f3059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5352711c569d0d2d54e9ece4a208d8b28f2203216ae254630b74eb10cc4fd4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5352711c569d0d2d54e9ece4a208d8b28f2203216ae254630b74eb10cc4fd4c3->enter($__internal_5352711c569d0d2d54e9ece4a208d8b28f2203216ae254630b74eb10cc4fd4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f94c73ce6f928d4d53dc8f4d41926b25b5e3281b7158e6993203df0fa0f3059->leave($__internal_0f94c73ce6f928d4d53dc8f4d41926b25b5e3281b7158e6993203df0fa0f3059_prof);

        
        $__internal_5352711c569d0d2d54e9ece4a208d8b28f2203216ae254630b74eb10cc4fd4c3->leave($__internal_5352711c569d0d2d54e9ece4a208d8b28f2203216ae254630b74eb10cc4fd4c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06315a938c3ec1ec352c2d72c10dc8dec6b0e33b384ba1a351610c460dc18154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06315a938c3ec1ec352c2d72c10dc8dec6b0e33b384ba1a351610c460dc18154->enter($__internal_06315a938c3ec1ec352c2d72c10dc8dec6b0e33b384ba1a351610c460dc18154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_149245ebaa5d40398fc92cecc21ef160bafb6299a28b49785c36be3572de7909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149245ebaa5d40398fc92cecc21ef160bafb6299a28b49785c36be3572de7909->enter($__internal_149245ebaa5d40398fc92cecc21ef160bafb6299a28b49785c36be3572de7909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_149245ebaa5d40398fc92cecc21ef160bafb6299a28b49785c36be3572de7909->leave($__internal_149245ebaa5d40398fc92cecc21ef160bafb6299a28b49785c36be3572de7909_prof);

        
        $__internal_06315a938c3ec1ec352c2d72c10dc8dec6b0e33b384ba1a351610c460dc18154->leave($__internal_06315a938c3ec1ec352c2d72c10dc8dec6b0e33b384ba1a351610c460dc18154_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69969c77baf3145f1e396670e5a1a2406d63884187c4ad725a15868fc4d17cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69969c77baf3145f1e396670e5a1a2406d63884187c4ad725a15868fc4d17cde->enter($__internal_69969c77baf3145f1e396670e5a1a2406d63884187c4ad725a15868fc4d17cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_42138e9b11b6f6538ec85c917206bd74d196a0f77f56f23113369f86f2d2ba6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42138e9b11b6f6538ec85c917206bd74d196a0f77f56f23113369f86f2d2ba6e->enter($__internal_42138e9b11b6f6538ec85c917206bd74d196a0f77f56f23113369f86f2d2ba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42138e9b11b6f6538ec85c917206bd74d196a0f77f56f23113369f86f2d2ba6e->leave($__internal_42138e9b11b6f6538ec85c917206bd74d196a0f77f56f23113369f86f2d2ba6e_prof);

        
        $__internal_69969c77baf3145f1e396670e5a1a2406d63884187c4ad725a15868fc4d17cde->leave($__internal_69969c77baf3145f1e396670e5a1a2406d63884187c4ad725a15868fc4d17cde_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_204866d59afdfebcb3bd37a4cdb6c661db310247fe9237231a7914f5b7982c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204866d59afdfebcb3bd37a4cdb6c661db310247fe9237231a7914f5b7982c37->enter($__internal_204866d59afdfebcb3bd37a4cdb6c661db310247fe9237231a7914f5b7982c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c79d5549d6e737094fa8fd8c7e7cc20a209fa79b434396232edce0ce3267d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c79d5549d6e737094fa8fd8c7e7cc20a209fa79b434396232edce0ce3267d1d->enter($__internal_2c79d5549d6e737094fa8fd8c7e7cc20a209fa79b434396232edce0ce3267d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2c79d5549d6e737094fa8fd8c7e7cc20a209fa79b434396232edce0ce3267d1d->leave($__internal_2c79d5549d6e737094fa8fd8c7e7cc20a209fa79b434396232edce0ce3267d1d_prof);

        
        $__internal_204866d59afdfebcb3bd37a4cdb6c661db310247fe9237231a7914f5b7982c37->leave($__internal_204866d59afdfebcb3bd37a4cdb6c661db310247fe9237231a7914f5b7982c37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
