<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4c6bcb25bc64029199b697338b5611ac0863b002411388b69b61549bc56dcd9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_201a8f779a9489d64a77d91b34be1c5378b7d7bdb874d2fe65c2b77c75daac85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201a8f779a9489d64a77d91b34be1c5378b7d7bdb874d2fe65c2b77c75daac85->enter($__internal_201a8f779a9489d64a77d91b34be1c5378b7d7bdb874d2fe65c2b77c75daac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2dc09c41a917f0c1eb2a35460c2e2c612e8fb7a0d43d0cd5572c98dc05e0c30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc09c41a917f0c1eb2a35460c2e2c612e8fb7a0d43d0cd5572c98dc05e0c30e->enter($__internal_2dc09c41a917f0c1eb2a35460c2e2c612e8fb7a0d43d0cd5572c98dc05e0c30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_201a8f779a9489d64a77d91b34be1c5378b7d7bdb874d2fe65c2b77c75daac85->leave($__internal_201a8f779a9489d64a77d91b34be1c5378b7d7bdb874d2fe65c2b77c75daac85_prof);

        
        $__internal_2dc09c41a917f0c1eb2a35460c2e2c612e8fb7a0d43d0cd5572c98dc05e0c30e->leave($__internal_2dc09c41a917f0c1eb2a35460c2e2c612e8fb7a0d43d0cd5572c98dc05e0c30e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e994d69f2d4c1b8705b2f62023a7381311a4f46965d74e905603088bdb684a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e994d69f2d4c1b8705b2f62023a7381311a4f46965d74e905603088bdb684a26->enter($__internal_e994d69f2d4c1b8705b2f62023a7381311a4f46965d74e905603088bdb684a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ddc3ffcc12ac6f89cf38b4320fd1ac0637fe71032e7a782876fc5b047713d64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc3ffcc12ac6f89cf38b4320fd1ac0637fe71032e7a782876fc5b047713d64b->enter($__internal_ddc3ffcc12ac6f89cf38b4320fd1ac0637fe71032e7a782876fc5b047713d64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ddc3ffcc12ac6f89cf38b4320fd1ac0637fe71032e7a782876fc5b047713d64b->leave($__internal_ddc3ffcc12ac6f89cf38b4320fd1ac0637fe71032e7a782876fc5b047713d64b_prof);

        
        $__internal_e994d69f2d4c1b8705b2f62023a7381311a4f46965d74e905603088bdb684a26->leave($__internal_e994d69f2d4c1b8705b2f62023a7381311a4f46965d74e905603088bdb684a26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
