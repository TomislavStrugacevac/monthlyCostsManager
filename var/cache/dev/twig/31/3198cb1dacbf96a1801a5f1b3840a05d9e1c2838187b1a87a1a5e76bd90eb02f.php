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
        $__internal_900f85c853d0a2bc6fe895c3b3ce60ecc6ad14ea71fc6bce924c8591c9b7b3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900f85c853d0a2bc6fe895c3b3ce60ecc6ad14ea71fc6bce924c8591c9b7b3a5->enter($__internal_900f85c853d0a2bc6fe895c3b3ce60ecc6ad14ea71fc6bce924c8591c9b7b3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8d8e9ed771e98ed7fa960192649de475adb7e053b3cbef8239185832166cab40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8e9ed771e98ed7fa960192649de475adb7e053b3cbef8239185832166cab40->enter($__internal_8d8e9ed771e98ed7fa960192649de475adb7e053b3cbef8239185832166cab40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_900f85c853d0a2bc6fe895c3b3ce60ecc6ad14ea71fc6bce924c8591c9b7b3a5->leave($__internal_900f85c853d0a2bc6fe895c3b3ce60ecc6ad14ea71fc6bce924c8591c9b7b3a5_prof);

        
        $__internal_8d8e9ed771e98ed7fa960192649de475adb7e053b3cbef8239185832166cab40->leave($__internal_8d8e9ed771e98ed7fa960192649de475adb7e053b3cbef8239185832166cab40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e099a1c75bab5152746962f6b59e95daf9bc8af4f9f4e0a48c6eaf06fd127ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e099a1c75bab5152746962f6b59e95daf9bc8af4f9f4e0a48c6eaf06fd127ccb->enter($__internal_e099a1c75bab5152746962f6b59e95daf9bc8af4f9f4e0a48c6eaf06fd127ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_326670337a5a3a639345d43668d4ed68bf32a557917a957fb761fdcfa1559306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326670337a5a3a639345d43668d4ed68bf32a557917a957fb761fdcfa1559306->enter($__internal_326670337a5a3a639345d43668d4ed68bf32a557917a957fb761fdcfa1559306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_326670337a5a3a639345d43668d4ed68bf32a557917a957fb761fdcfa1559306->leave($__internal_326670337a5a3a639345d43668d4ed68bf32a557917a957fb761fdcfa1559306_prof);

        
        $__internal_e099a1c75bab5152746962f6b59e95daf9bc8af4f9f4e0a48c6eaf06fd127ccb->leave($__internal_e099a1c75bab5152746962f6b59e95daf9bc8af4f9f4e0a48c6eaf06fd127ccb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9350a2619257db5ca44119c774ff2f94a79906720b23137e9ff8a82ca4def920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9350a2619257db5ca44119c774ff2f94a79906720b23137e9ff8a82ca4def920->enter($__internal_9350a2619257db5ca44119c774ff2f94a79906720b23137e9ff8a82ca4def920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f736d40b94e75bbef1429fbaa392898023f778a5fcb9b26db5a9772fefa9e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f736d40b94e75bbef1429fbaa392898023f778a5fcb9b26db5a9772fefa9e1b->enter($__internal_8f736d40b94e75bbef1429fbaa392898023f778a5fcb9b26db5a9772fefa9e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f736d40b94e75bbef1429fbaa392898023f778a5fcb9b26db5a9772fefa9e1b->leave($__internal_8f736d40b94e75bbef1429fbaa392898023f778a5fcb9b26db5a9772fefa9e1b_prof);

        
        $__internal_9350a2619257db5ca44119c774ff2f94a79906720b23137e9ff8a82ca4def920->leave($__internal_9350a2619257db5ca44119c774ff2f94a79906720b23137e9ff8a82ca4def920_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bb1b875dabb5e19e3aefa80d4e94f955fe8c0e4cd445d6ec8fae2a47a65b13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb1b875dabb5e19e3aefa80d4e94f955fe8c0e4cd445d6ec8fae2a47a65b13a->enter($__internal_5bb1b875dabb5e19e3aefa80d4e94f955fe8c0e4cd445d6ec8fae2a47a65b13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6072b51fc54bf29f6b2fcbbfe4009dc5eb0dd834fb5696545284f1488b1fa585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6072b51fc54bf29f6b2fcbbfe4009dc5eb0dd834fb5696545284f1488b1fa585->enter($__internal_6072b51fc54bf29f6b2fcbbfe4009dc5eb0dd834fb5696545284f1488b1fa585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6072b51fc54bf29f6b2fcbbfe4009dc5eb0dd834fb5696545284f1488b1fa585->leave($__internal_6072b51fc54bf29f6b2fcbbfe4009dc5eb0dd834fb5696545284f1488b1fa585_prof);

        
        $__internal_5bb1b875dabb5e19e3aefa80d4e94f955fe8c0e4cd445d6ec8fae2a47a65b13a->leave($__internal_5bb1b875dabb5e19e3aefa80d4e94f955fe8c0e4cd445d6ec8fae2a47a65b13a_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_366c822317d42a4ccb65cf4ecbc5409bfcf2bdbcc58475a9d09f02f5088b0294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366c822317d42a4ccb65cf4ecbc5409bfcf2bdbcc58475a9d09f02f5088b0294->enter($__internal_366c822317d42a4ccb65cf4ecbc5409bfcf2bdbcc58475a9d09f02f5088b0294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f658239a4dd14364a69fa9905b2058fbd2f6defb58a382359527469c4320cd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f658239a4dd14364a69fa9905b2058fbd2f6defb58a382359527469c4320cd93->enter($__internal_f658239a4dd14364a69fa9905b2058fbd2f6defb58a382359527469c4320cd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f658239a4dd14364a69fa9905b2058fbd2f6defb58a382359527469c4320cd93->leave($__internal_f658239a4dd14364a69fa9905b2058fbd2f6defb58a382359527469c4320cd93_prof);

        
        $__internal_366c822317d42a4ccb65cf4ecbc5409bfcf2bdbcc58475a9d09f02f5088b0294->leave($__internal_366c822317d42a4ccb65cf4ecbc5409bfcf2bdbcc58475a9d09f02f5088b0294_prof);

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
