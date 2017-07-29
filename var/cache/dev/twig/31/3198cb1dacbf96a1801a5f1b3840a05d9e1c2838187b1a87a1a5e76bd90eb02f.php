<?php

/* base.html.twig */
class __TwigTemplate_79edc3f4c1d0bf2b285c68f8d99e793c8175003b3194091f5cbe331b26eb8c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2ad748e7fc18ffbfcbaf64665f78c53818f9ba693b7b72f08e96e1cba82a20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ad748e7fc18ffbfcbaf64665f78c53818f9ba693b7b72f08e96e1cba82a20d->enter($__internal_b2ad748e7fc18ffbfcbaf64665f78c53818f9ba693b7b72f08e96e1cba82a20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_deaa3911eda316b808166d85145eba0dd94a75f68c409d95627202d3511be145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deaa3911eda316b808166d85145eba0dd94a75f68c409d95627202d3511be145->enter($__internal_deaa3911eda316b808166d85145eba0dd94a75f68c409d95627202d3511be145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javacss/style.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_b2ad748e7fc18ffbfcbaf64665f78c53818f9ba693b7b72f08e96e1cba82a20d->leave($__internal_b2ad748e7fc18ffbfcbaf64665f78c53818f9ba693b7b72f08e96e1cba82a20d_prof);

        
        $__internal_deaa3911eda316b808166d85145eba0dd94a75f68c409d95627202d3511be145->leave($__internal_deaa3911eda316b808166d85145eba0dd94a75f68c409d95627202d3511be145_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6d77d92a86a0ba585a90573e62f6985f2d68a3d1a27c9d5dcca2057544b1e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d77d92a86a0ba585a90573e62f6985f2d68a3d1a27c9d5dcca2057544b1e85->enter($__internal_c6d77d92a86a0ba585a90573e62f6985f2d68a3d1a27c9d5dcca2057544b1e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_756a6dc49ba01bdbbaa421c534a574092359e53302258a650c7cf0e85c8f6693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756a6dc49ba01bdbbaa421c534a574092359e53302258a650c7cf0e85c8f6693->enter($__internal_756a6dc49ba01bdbbaa421c534a574092359e53302258a650c7cf0e85c8f6693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_756a6dc49ba01bdbbaa421c534a574092359e53302258a650c7cf0e85c8f6693->leave($__internal_756a6dc49ba01bdbbaa421c534a574092359e53302258a650c7cf0e85c8f6693_prof);

        
        $__internal_c6d77d92a86a0ba585a90573e62f6985f2d68a3d1a27c9d5dcca2057544b1e85->leave($__internal_c6d77d92a86a0ba585a90573e62f6985f2d68a3d1a27c9d5dcca2057544b1e85_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba7236881dee937d272b07ee7883403f30bed716072071fd97b01ac72f5b1b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7236881dee937d272b07ee7883403f30bed716072071fd97b01ac72f5b1b2c->enter($__internal_ba7236881dee937d272b07ee7883403f30bed716072071fd97b01ac72f5b1b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_16a629baea83a812a856540a8aa87a2d797b7e31dda413caed4f6e1ba0092a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a629baea83a812a856540a8aa87a2d797b7e31dda413caed4f6e1ba0092a5b->enter($__internal_16a629baea83a812a856540a8aa87a2d797b7e31dda413caed4f6e1ba0092a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_16a629baea83a812a856540a8aa87a2d797b7e31dda413caed4f6e1ba0092a5b->leave($__internal_16a629baea83a812a856540a8aa87a2d797b7e31dda413caed4f6e1ba0092a5b_prof);

        
        $__internal_ba7236881dee937d272b07ee7883403f30bed716072071fd97b01ac72f5b1b2c->leave($__internal_ba7236881dee937d272b07ee7883403f30bed716072071fd97b01ac72f5b1b2c_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f54e4efd119ccc6d14f94302e95232885d9c525c31bfe8c077bf9bbd3bc5d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f54e4efd119ccc6d14f94302e95232885d9c525c31bfe8c077bf9bbd3bc5d31->enter($__internal_1f54e4efd119ccc6d14f94302e95232885d9c525c31bfe8c077bf9bbd3bc5d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94830e92e46deb620e2c890cc824354e54499eec5b677d452531c67f95185352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94830e92e46deb620e2c890cc824354e54499eec5b677d452531c67f95185352->enter($__internal_94830e92e46deb620e2c890cc824354e54499eec5b677d452531c67f95185352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_94830e92e46deb620e2c890cc824354e54499eec5b677d452531c67f95185352->leave($__internal_94830e92e46deb620e2c890cc824354e54499eec5b677d452531c67f95185352_prof);

        
        $__internal_1f54e4efd119ccc6d14f94302e95232885d9c525c31bfe8c077bf9bbd3bc5d31->leave($__internal_1f54e4efd119ccc6d14f94302e95232885d9c525c31bfe8c077bf9bbd3bc5d31_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a61fb7238fabae8b07abbff683357f82d031e85e4b9373e443497f70f11cfae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a61fb7238fabae8b07abbff683357f82d031e85e4b9373e443497f70f11cfae->enter($__internal_4a61fb7238fabae8b07abbff683357f82d031e85e4b9373e443497f70f11cfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4b487218352776fd909d05709f4e4005e0a3efb3950618ecaf8ef734ed9bf3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b487218352776fd909d05709f4e4005e0a3efb3950618ecaf8ef734ed9bf3dc->enter($__internal_4b487218352776fd909d05709f4e4005e0a3efb3950618ecaf8ef734ed9bf3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4b487218352776fd909d05709f4e4005e0a3efb3950618ecaf8ef734ed9bf3dc->leave($__internal_4b487218352776fd909d05709f4e4005e0a3efb3950618ecaf8ef734ed9bf3dc_prof);

        
        $__internal_4a61fb7238fabae8b07abbff683357f82d031e85e4b9373e443497f70f11cfae->leave($__internal_4a61fb7238fabae8b07abbff683357f82d031e85e4b9373e443497f70f11cfae_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 14,  108 => 13,  91 => 6,  73 => 5,  59 => 15,  56 => 14,  54 => 13,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{asset('javacss/style.css')}}\">
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "D:\\WebstormProjects\\rezije\\app\\Resources\\views\\base.html.twig");
    }
}
