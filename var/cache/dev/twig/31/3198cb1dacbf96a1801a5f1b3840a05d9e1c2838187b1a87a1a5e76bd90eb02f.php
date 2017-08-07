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
        $__internal_c3e082ccf4710130cd2bb07b05047bf25f07ea19853b1f0dc1ab9bb7f1a97f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e082ccf4710130cd2bb07b05047bf25f07ea19853b1f0dc1ab9bb7f1a97f64->enter($__internal_c3e082ccf4710130cd2bb07b05047bf25f07ea19853b1f0dc1ab9bb7f1a97f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_43202e1b09aa5686d74569b2597124804a91a840a7da2ae6e8f5a67422555f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43202e1b09aa5686d74569b2597124804a91a840a7da2ae6e8f5a67422555f49->enter($__internal_43202e1b09aa5686d74569b2597124804a91a840a7da2ae6e8f5a67422555f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

    <div class=\"container\">
        <body>
            ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "            <!-- Jquery-->
            <script
              src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
              integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
              crossorigin=\"anonymous\"></script>    
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javacss/jscript/jscript.js"), "html", null, true);
        echo "\"></script>
        </body>
    </div>
    
</html>
";
        
        $__internal_c3e082ccf4710130cd2bb07b05047bf25f07ea19853b1f0dc1ab9bb7f1a97f64->leave($__internal_c3e082ccf4710130cd2bb07b05047bf25f07ea19853b1f0dc1ab9bb7f1a97f64_prof);

        
        $__internal_43202e1b09aa5686d74569b2597124804a91a840a7da2ae6e8f5a67422555f49->leave($__internal_43202e1b09aa5686d74569b2597124804a91a840a7da2ae6e8f5a67422555f49_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a71e8c84e9c32b6b906cb30ff742c36005295fc8be05992e83248e93a515caa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71e8c84e9c32b6b906cb30ff742c36005295fc8be05992e83248e93a515caa7->enter($__internal_a71e8c84e9c32b6b906cb30ff742c36005295fc8be05992e83248e93a515caa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79ca5716055ad645be20b68b9e00405bc352249e3e5b759632d2598bb2ea1aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ca5716055ad645be20b68b9e00405bc352249e3e5b759632d2598bb2ea1aff->enter($__internal_79ca5716055ad645be20b68b9e00405bc352249e3e5b759632d2598bb2ea1aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79ca5716055ad645be20b68b9e00405bc352249e3e5b759632d2598bb2ea1aff->leave($__internal_79ca5716055ad645be20b68b9e00405bc352249e3e5b759632d2598bb2ea1aff_prof);

        
        $__internal_a71e8c84e9c32b6b906cb30ff742c36005295fc8be05992e83248e93a515caa7->leave($__internal_a71e8c84e9c32b6b906cb30ff742c36005295fc8be05992e83248e93a515caa7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0aa6a2fcb94f502252c86793d8f3837a20cfcc99669601381b9070f2c01a0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0aa6a2fcb94f502252c86793d8f3837a20cfcc99669601381b9070f2c01a0e7->enter($__internal_e0aa6a2fcb94f502252c86793d8f3837a20cfcc99669601381b9070f2c01a0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_adb6653bf29afb760b31d51a7ed3023518b7f00736191c0700927c4629f3d294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb6653bf29afb760b31d51a7ed3023518b7f00736191c0700927c4629f3d294->enter($__internal_adb6653bf29afb760b31d51a7ed3023518b7f00736191c0700927c4629f3d294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_adb6653bf29afb760b31d51a7ed3023518b7f00736191c0700927c4629f3d294->leave($__internal_adb6653bf29afb760b31d51a7ed3023518b7f00736191c0700927c4629f3d294_prof);

        
        $__internal_e0aa6a2fcb94f502252c86793d8f3837a20cfcc99669601381b9070f2c01a0e7->leave($__internal_e0aa6a2fcb94f502252c86793d8f3837a20cfcc99669601381b9070f2c01a0e7_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_03523a0be0da0a84059176f32ecc2b4377b298b132eacea6c3b87ff863c92edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03523a0be0da0a84059176f32ecc2b4377b298b132eacea6c3b87ff863c92edd->enter($__internal_03523a0be0da0a84059176f32ecc2b4377b298b132eacea6c3b87ff863c92edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cedc10eb94d5e8beac4382908337899ce3addfa6905816ce7440063ed153dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cedc10eb94d5e8beac4382908337899ce3addfa6905816ce7440063ed153dd1->enter($__internal_1cedc10eb94d5e8beac4382908337899ce3addfa6905816ce7440063ed153dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1cedc10eb94d5e8beac4382908337899ce3addfa6905816ce7440063ed153dd1->leave($__internal_1cedc10eb94d5e8beac4382908337899ce3addfa6905816ce7440063ed153dd1_prof);

        
        $__internal_03523a0be0da0a84059176f32ecc2b4377b298b132eacea6c3b87ff863c92edd->leave($__internal_03523a0be0da0a84059176f32ecc2b4377b298b132eacea6c3b87ff863c92edd_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14ab19e58dd3da1df4534a6caa5ca15ffe2799b6d9dccffb2666dcf8fa87f1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ab19e58dd3da1df4534a6caa5ca15ffe2799b6d9dccffb2666dcf8fa87f1db->enter($__internal_14ab19e58dd3da1df4534a6caa5ca15ffe2799b6d9dccffb2666dcf8fa87f1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5eeab4060e8d1737f6aef08e8b374c7a9714d5f041678e1764b550177aa57a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eeab4060e8d1737f6aef08e8b374c7a9714d5f041678e1764b550177aa57a18->enter($__internal_5eeab4060e8d1737f6aef08e8b374c7a9714d5f041678e1764b550177aa57a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5eeab4060e8d1737f6aef08e8b374c7a9714d5f041678e1764b550177aa57a18->leave($__internal_5eeab4060e8d1737f6aef08e8b374c7a9714d5f041678e1764b550177aa57a18_prof);

        
        $__internal_14ab19e58dd3da1df4534a6caa5ca15ffe2799b6d9dccffb2666dcf8fa87f1db->leave($__internal_14ab19e58dd3da1df4534a6caa5ca15ffe2799b6d9dccffb2666dcf8fa87f1db_prof);

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
        return array (  138 => 16,  121 => 15,  104 => 6,  86 => 5,  70 => 24,  61 => 17,  58 => 16,  56 => 15,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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

    <div class=\"container\">
        <body>
            {% block body %}{% endblock %}
            {% block javascripts %}{% endblock %}
            <!-- Jquery-->
            <script
              src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
              integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
              crossorigin=\"anonymous\"></script>    
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script src=\"{{asset('javacss/jscript/jscript.js')}}\"></script>
        </body>
    </div>
    
</html>
", "base.html.twig", "D:\\WebstormProjects\\rezije\\app\\Resources\\views\\base.html.twig");
    }
}
