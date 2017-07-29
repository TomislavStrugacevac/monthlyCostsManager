<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cc4566b22a94cdb61bcf886d5a9c1e4a9352ed39bf8fd66e89a9cab28636bc6e extends Twig_Template
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
        $__internal_d2bc053f0de97c76e642d2a67c11b877384e02d0c5dc0122acc38bbdf8889780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bc053f0de97c76e642d2a67c11b877384e02d0c5dc0122acc38bbdf8889780->enter($__internal_d2bc053f0de97c76e642d2a67c11b877384e02d0c5dc0122acc38bbdf8889780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_371c886b68f652a1921f955b95fcd409a6081a9f8964fdb5dc7c05d11f1dc198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371c886b68f652a1921f955b95fcd409a6081a9f8964fdb5dc7c05d11f1dc198->enter($__internal_371c886b68f652a1921f955b95fcd409a6081a9f8964fdb5dc7c05d11f1dc198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d2bc053f0de97c76e642d2a67c11b877384e02d0c5dc0122acc38bbdf8889780->leave($__internal_d2bc053f0de97c76e642d2a67c11b877384e02d0c5dc0122acc38bbdf8889780_prof);

        
        $__internal_371c886b68f652a1921f955b95fcd409a6081a9f8964fdb5dc7c05d11f1dc198->leave($__internal_371c886b68f652a1921f955b95fcd409a6081a9f8964fdb5dc7c05d11f1dc198_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae649194c51ebc01d02b6685daa5a4061741d06427bca6386e3d61832288c537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae649194c51ebc01d02b6685daa5a4061741d06427bca6386e3d61832288c537->enter($__internal_ae649194c51ebc01d02b6685daa5a4061741d06427bca6386e3d61832288c537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb1edfc6fba9f571dabe68361e51bd4c296080470e32aba1edde9f4455b9641c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1edfc6fba9f571dabe68361e51bd4c296080470e32aba1edde9f4455b9641c->enter($__internal_eb1edfc6fba9f571dabe68361e51bd4c296080470e32aba1edde9f4455b9641c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eb1edfc6fba9f571dabe68361e51bd4c296080470e32aba1edde9f4455b9641c->leave($__internal_eb1edfc6fba9f571dabe68361e51bd4c296080470e32aba1edde9f4455b9641c_prof);

        
        $__internal_ae649194c51ebc01d02b6685daa5a4061741d06427bca6386e3d61832288c537->leave($__internal_ae649194c51ebc01d02b6685daa5a4061741d06427bca6386e3d61832288c537_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
