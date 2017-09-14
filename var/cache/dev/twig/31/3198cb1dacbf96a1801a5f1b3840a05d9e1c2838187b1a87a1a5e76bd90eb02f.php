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
        $__internal_56bb98b6dd5828bcfeec74289198e5f31587afb2293a3af605279c3db902b9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bb98b6dd5828bcfeec74289198e5f31587afb2293a3af605279c3db902b9af->enter($__internal_56bb98b6dd5828bcfeec74289198e5f31587afb2293a3af605279c3db902b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c3735888a4cea52576b2082787a5c31b3806d4581e16ba40d3254039d8cc133d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3735888a4cea52576b2082787a5c31b3806d4581e16ba40d3254039d8cc133d->enter($__internal_c3735888a4cea52576b2082787a5c31b3806d4581e16ba40d3254039d8cc133d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "                <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
                    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav\">
                            <a class=\"nav-item nav-link\" href=\"/form\">Novi unos</a>
                            <a class=\"nav-item nav-link\" href=\"/form/all\">Prikaži sve</a>
                            <a class=\"nav-item nav-link\" href=\"#\">Pricing</a>
                            <a class=\"nav-item nav-link disabled\" href=\"/logout\">Logout</a>
                        </div>
                    </div>
                </nav>
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "            <!-- Jquery-->
            <script
              src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
              integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
              crossorigin=\"anonymous\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javacss/jscript/jscript.js"), "html", null, true);
        echo "\"></script>

          </div>
    </body>
</html>
";
        
        $__internal_56bb98b6dd5828bcfeec74289198e5f31587afb2293a3af605279c3db902b9af->leave($__internal_56bb98b6dd5828bcfeec74289198e5f31587afb2293a3af605279c3db902b9af_prof);

        
        $__internal_c3735888a4cea52576b2082787a5c31b3806d4581e16ba40d3254039d8cc133d->leave($__internal_c3735888a4cea52576b2082787a5c31b3806d4581e16ba40d3254039d8cc133d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd2811d6e20ed01fd370540aff6c9da881de997fc0bf8dec74534aa83762078e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2811d6e20ed01fd370540aff6c9da881de997fc0bf8dec74534aa83762078e->enter($__internal_cd2811d6e20ed01fd370540aff6c9da881de997fc0bf8dec74534aa83762078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a56d72c27904221adca90ee13890c8f67e88855eb39e986867e0db4fa34bf50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a56d72c27904221adca90ee13890c8f67e88855eb39e986867e0db4fa34bf50->enter($__internal_2a56d72c27904221adca90ee13890c8f67e88855eb39e986867e0db4fa34bf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a56d72c27904221adca90ee13890c8f67e88855eb39e986867e0db4fa34bf50->leave($__internal_2a56d72c27904221adca90ee13890c8f67e88855eb39e986867e0db4fa34bf50_prof);

        
        $__internal_cd2811d6e20ed01fd370540aff6c9da881de997fc0bf8dec74534aa83762078e->leave($__internal_cd2811d6e20ed01fd370540aff6c9da881de997fc0bf8dec74534aa83762078e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4e4d1b263ca9a1f8ec0506a608fafea661727718101202edeff4059c679a85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e4d1b263ca9a1f8ec0506a608fafea661727718101202edeff4059c679a85a->enter($__internal_f4e4d1b263ca9a1f8ec0506a608fafea661727718101202edeff4059c679a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f361ca98b52ace65982798bfa0ef7a20074ac61600e500410c5918f58638099b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f361ca98b52ace65982798bfa0ef7a20074ac61600e500410c5918f58638099b->enter($__internal_f361ca98b52ace65982798bfa0ef7a20074ac61600e500410c5918f58638099b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f361ca98b52ace65982798bfa0ef7a20074ac61600e500410c5918f58638099b->leave($__internal_f361ca98b52ace65982798bfa0ef7a20074ac61600e500410c5918f58638099b_prof);

        
        $__internal_f4e4d1b263ca9a1f8ec0506a608fafea661727718101202edeff4059c679a85a->leave($__internal_f4e4d1b263ca9a1f8ec0506a608fafea661727718101202edeff4059c679a85a_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_19836ec19e216e1a568e3376d7b2c0b4d9d92d0fe32c5109df1beded442386df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19836ec19e216e1a568e3376d7b2c0b4d9d92d0fe32c5109df1beded442386df->enter($__internal_19836ec19e216e1a568e3376d7b2c0b4d9d92d0fe32c5109df1beded442386df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1aee6339771a5ff7f5761290de006e3fd6f9f063e66d5b341942048bb0838d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aee6339771a5ff7f5761290de006e3fd6f9f063e66d5b341942048bb0838d3c->enter($__internal_1aee6339771a5ff7f5761290de006e3fd6f9f063e66d5b341942048bb0838d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1aee6339771a5ff7f5761290de006e3fd6f9f063e66d5b341942048bb0838d3c->leave($__internal_1aee6339771a5ff7f5761290de006e3fd6f9f063e66d5b341942048bb0838d3c_prof);

        
        $__internal_19836ec19e216e1a568e3376d7b2c0b4d9d92d0fe32c5109df1beded442386df->leave($__internal_19836ec19e216e1a568e3376d7b2c0b4d9d92d0fe32c5109df1beded442386df_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bb70cd1da5563dff8769c482665c2804a51788a54b799c4a0e60429a31d5566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb70cd1da5563dff8769c482665c2804a51788a54b799c4a0e60429a31d5566->enter($__internal_7bb70cd1da5563dff8769c482665c2804a51788a54b799c4a0e60429a31d5566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c6a541cd3e1351c9a1b501d7bdb6cb29856ee195e2c6f51b61a534bf5db1b6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a541cd3e1351c9a1b501d7bdb6cb29856ee195e2c6f51b61a534bf5db1b6bd->enter($__internal_c6a541cd3e1351c9a1b501d7bdb6cb29856ee195e2c6f51b61a534bf5db1b6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c6a541cd3e1351c9a1b501d7bdb6cb29856ee195e2c6f51b61a534bf5db1b6bd->leave($__internal_c6a541cd3e1351c9a1b501d7bdb6cb29856ee195e2c6f51b61a534bf5db1b6bd_prof);

        
        $__internal_7bb70cd1da5563dff8769c482665c2804a51788a54b799c4a0e60429a31d5566->leave($__internal_7bb70cd1da5563dff8769c482665c2804a51788a54b799c4a0e60429a31d5566_prof);

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
        return array (  160 => 33,  143 => 32,  126 => 6,  108 => 5,  92 => 41,  83 => 34,  80 => 33,  78 => 32,  75 => 31,  58 => 16,  56 => 15,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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

            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
                    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav\">
                            <a class=\"nav-item nav-link\" href=\"/form\">Novi unos</a>
                            <a class=\"nav-item nav-link\" href=\"/form/all\">Prikaži sve</a>
                            <a class=\"nav-item nav-link\" href=\"#\">Pricing</a>
                            <a class=\"nav-item nav-link disabled\" href=\"/logout\">Logout</a>
                        </div>
                    </div>
                </nav>
            {% endif %}

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
