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
        $__internal_e1d0fa57c1e08c8570548a110cbb7e6758193bc79238d6d7c7b36e36829eb0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d0fa57c1e08c8570548a110cbb7e6758193bc79238d6d7c7b36e36829eb0c3->enter($__internal_e1d0fa57c1e08c8570548a110cbb7e6758193bc79238d6d7c7b36e36829eb0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ddf244f5f71a4b9d180231d3d8dad3c9433bb69d667e3f77a97d6583e507894d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf244f5f71a4b9d180231d3d8dad3c9433bb69d667e3f77a97d6583e507894d->enter($__internal_ddf244f5f71a4b9d180231d3d8dad3c9433bb69d667e3f77a97d6583e507894d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
      <div class=\"container\">

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

          </div>
    </body>
</html>
";
        
        $__internal_e1d0fa57c1e08c8570548a110cbb7e6758193bc79238d6d7c7b36e36829eb0c3->leave($__internal_e1d0fa57c1e08c8570548a110cbb7e6758193bc79238d6d7c7b36e36829eb0c3_prof);

        
        $__internal_ddf244f5f71a4b9d180231d3d8dad3c9433bb69d667e3f77a97d6583e507894d->leave($__internal_ddf244f5f71a4b9d180231d3d8dad3c9433bb69d667e3f77a97d6583e507894d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0bc576cce0f087a7937df4c7d5a1dad9f26b31fdc9fd4ac5852dd97a43d0972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0bc576cce0f087a7937df4c7d5a1dad9f26b31fdc9fd4ac5852dd97a43d0972->enter($__internal_b0bc576cce0f087a7937df4c7d5a1dad9f26b31fdc9fd4ac5852dd97a43d0972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52f09d651f53e06b75e6a8df9a76957d6c15a63121fea68029b58859bdaeb293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f09d651f53e06b75e6a8df9a76957d6c15a63121fea68029b58859bdaeb293->enter($__internal_52f09d651f53e06b75e6a8df9a76957d6c15a63121fea68029b58859bdaeb293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_52f09d651f53e06b75e6a8df9a76957d6c15a63121fea68029b58859bdaeb293->leave($__internal_52f09d651f53e06b75e6a8df9a76957d6c15a63121fea68029b58859bdaeb293_prof);

        
        $__internal_b0bc576cce0f087a7937df4c7d5a1dad9f26b31fdc9fd4ac5852dd97a43d0972->leave($__internal_b0bc576cce0f087a7937df4c7d5a1dad9f26b31fdc9fd4ac5852dd97a43d0972_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2949acfea156cc40bfe15860e41f7d2f6c4dcf16f367cc16e9a0b6ab7cfd11f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2949acfea156cc40bfe15860e41f7d2f6c4dcf16f367cc16e9a0b6ab7cfd11f9->enter($__internal_2949acfea156cc40bfe15860e41f7d2f6c4dcf16f367cc16e9a0b6ab7cfd11f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_52dc0c5eddea2ab295f28c0ae84f85de4e02d962cba81279c3ca3f1aca337316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dc0c5eddea2ab295f28c0ae84f85de4e02d962cba81279c3ca3f1aca337316->enter($__internal_52dc0c5eddea2ab295f28c0ae84f85de4e02d962cba81279c3ca3f1aca337316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_52dc0c5eddea2ab295f28c0ae84f85de4e02d962cba81279c3ca3f1aca337316->leave($__internal_52dc0c5eddea2ab295f28c0ae84f85de4e02d962cba81279c3ca3f1aca337316_prof);

        
        $__internal_2949acfea156cc40bfe15860e41f7d2f6c4dcf16f367cc16e9a0b6ab7cfd11f9->leave($__internal_2949acfea156cc40bfe15860e41f7d2f6c4dcf16f367cc16e9a0b6ab7cfd11f9_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_55b543d272665f2c7946d3eaddd54ad4c912549d86e95fc52937ff8af75934f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b543d272665f2c7946d3eaddd54ad4c912549d86e95fc52937ff8af75934f9->enter($__internal_55b543d272665f2c7946d3eaddd54ad4c912549d86e95fc52937ff8af75934f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1ac4a34064398cae2ffe9e0c82e80dff904e9f9103cec1d5cc656b166aa3a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ac4a34064398cae2ffe9e0c82e80dff904e9f9103cec1d5cc656b166aa3a38->enter($__internal_d1ac4a34064398cae2ffe9e0c82e80dff904e9f9103cec1d5cc656b166aa3a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d1ac4a34064398cae2ffe9e0c82e80dff904e9f9103cec1d5cc656b166aa3a38->leave($__internal_d1ac4a34064398cae2ffe9e0c82e80dff904e9f9103cec1d5cc656b166aa3a38_prof);

        
        $__internal_55b543d272665f2c7946d3eaddd54ad4c912549d86e95fc52937ff8af75934f9->leave($__internal_55b543d272665f2c7946d3eaddd54ad4c912549d86e95fc52937ff8af75934f9_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f842d490c7cea1db783299fc7e2120f45ad5427309666aa33db45181b92624cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f842d490c7cea1db783299fc7e2120f45ad5427309666aa33db45181b92624cd->enter($__internal_f842d490c7cea1db783299fc7e2120f45ad5427309666aa33db45181b92624cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fee18d16631dc95ee5cb08ab90e931e0f2827ce8665d4b6cb6f1549a33a12b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee18d16631dc95ee5cb08ab90e931e0f2827ce8665d4b6cb6f1549a33a12b10->enter($__internal_fee18d16631dc95ee5cb08ab90e931e0f2827ce8665d4b6cb6f1549a33a12b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fee18d16631dc95ee5cb08ab90e931e0f2827ce8665d4b6cb6f1549a33a12b10->leave($__internal_fee18d16631dc95ee5cb08ab90e931e0f2827ce8665d4b6cb6f1549a33a12b10_prof);

        
        $__internal_f842d490c7cea1db783299fc7e2120f45ad5427309666aa33db45181b92624cd->leave($__internal_f842d490c7cea1db783299fc7e2120f45ad5427309666aa33db45181b92624cd_prof);

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
    <body>
      <div class=\"container\">

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

          </div>
    </body>
</html>
", "base.html.twig", "D:\\WebstormProjects\\rezije\\app\\Resources\\views\\base.html.twig");
    }
}
