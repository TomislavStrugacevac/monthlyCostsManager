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
        $__internal_2d78ddc3ee85ab35ba9d75b07e4bbff02efe18cbaa6b41df40df9c4c35eb8ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d78ddc3ee85ab35ba9d75b07e4bbff02efe18cbaa6b41df40df9c4c35eb8ef0->enter($__internal_2d78ddc3ee85ab35ba9d75b07e4bbff02efe18cbaa6b41df40df9c4c35eb8ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3ef42a7754421812cdb4ab8dd512e4da870c9c8d4b91e19cb7bcff7cf46d6269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef42a7754421812cdb4ab8dd512e4da870c9c8d4b91e19cb7bcff7cf46d6269->enter($__internal_3ef42a7754421812cdb4ab8dd512e4da870c9c8d4b91e19cb7bcff7cf46d6269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d78ddc3ee85ab35ba9d75b07e4bbff02efe18cbaa6b41df40df9c4c35eb8ef0->leave($__internal_2d78ddc3ee85ab35ba9d75b07e4bbff02efe18cbaa6b41df40df9c4c35eb8ef0_prof);

        
        $__internal_3ef42a7754421812cdb4ab8dd512e4da870c9c8d4b91e19cb7bcff7cf46d6269->leave($__internal_3ef42a7754421812cdb4ab8dd512e4da870c9c8d4b91e19cb7bcff7cf46d6269_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3dea43d4549d7e57c5da1dd328acfccf026c34f5583c2d7067c8086b1f8813a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dea43d4549d7e57c5da1dd328acfccf026c34f5583c2d7067c8086b1f8813a5->enter($__internal_3dea43d4549d7e57c5da1dd328acfccf026c34f5583c2d7067c8086b1f8813a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_37badd688de42e4b0a727c4fa06f00c46e5497351453d2e612b62e61aa9f416e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37badd688de42e4b0a727c4fa06f00c46e5497351453d2e612b62e61aa9f416e->enter($__internal_37badd688de42e4b0a727c4fa06f00c46e5497351453d2e612b62e61aa9f416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37badd688de42e4b0a727c4fa06f00c46e5497351453d2e612b62e61aa9f416e->leave($__internal_37badd688de42e4b0a727c4fa06f00c46e5497351453d2e612b62e61aa9f416e_prof);

        
        $__internal_3dea43d4549d7e57c5da1dd328acfccf026c34f5583c2d7067c8086b1f8813a5->leave($__internal_3dea43d4549d7e57c5da1dd328acfccf026c34f5583c2d7067c8086b1f8813a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d8970b1a2a682a05c225f31c70340dea9791f1292746ab0ed11753d9ada7fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8970b1a2a682a05c225f31c70340dea9791f1292746ab0ed11753d9ada7fbb->enter($__internal_5d8970b1a2a682a05c225f31c70340dea9791f1292746ab0ed11753d9ada7fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a770c18755cf0f5f40c65abaffe4a0eb29fc2da7eaa9511702c8badf2c7a235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a770c18755cf0f5f40c65abaffe4a0eb29fc2da7eaa9511702c8badf2c7a235->enter($__internal_4a770c18755cf0f5f40c65abaffe4a0eb29fc2da7eaa9511702c8badf2c7a235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a770c18755cf0f5f40c65abaffe4a0eb29fc2da7eaa9511702c8badf2c7a235->leave($__internal_4a770c18755cf0f5f40c65abaffe4a0eb29fc2da7eaa9511702c8badf2c7a235_prof);

        
        $__internal_5d8970b1a2a682a05c225f31c70340dea9791f1292746ab0ed11753d9ada7fbb->leave($__internal_5d8970b1a2a682a05c225f31c70340dea9791f1292746ab0ed11753d9ada7fbb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38901deba2a8f6b4787207b0fd5718f7c8b790872176a809f45aab30309edd96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38901deba2a8f6b4787207b0fd5718f7c8b790872176a809f45aab30309edd96->enter($__internal_38901deba2a8f6b4787207b0fd5718f7c8b790872176a809f45aab30309edd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7cfe0b80db687567f6eded1dff79b4cd36cca6313a88895888dbdfa2c13489e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cfe0b80db687567f6eded1dff79b4cd36cca6313a88895888dbdfa2c13489e->enter($__internal_f7cfe0b80db687567f6eded1dff79b4cd36cca6313a88895888dbdfa2c13489e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7cfe0b80db687567f6eded1dff79b4cd36cca6313a88895888dbdfa2c13489e->leave($__internal_f7cfe0b80db687567f6eded1dff79b4cd36cca6313a88895888dbdfa2c13489e_prof);

        
        $__internal_38901deba2a8f6b4787207b0fd5718f7c8b790872176a809f45aab30309edd96->leave($__internal_38901deba2a8f6b4787207b0fd5718f7c8b790872176a809f45aab30309edd96_prof);

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
