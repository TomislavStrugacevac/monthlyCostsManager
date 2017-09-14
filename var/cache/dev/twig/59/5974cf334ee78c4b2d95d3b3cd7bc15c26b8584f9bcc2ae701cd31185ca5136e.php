<?php

/* ::base.html.twig */
class __TwigTemplate_19a6c2d8e9e40a9f9bffc2acae057fa40c6067b4ef68dbe4f7de40837e37f601 extends Twig_Template
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
        $__internal_e497643904d18d3bc877c49ad6b8c95883e094ee5891ebd0d636d3ccd0e38a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e497643904d18d3bc877c49ad6b8c95883e094ee5891ebd0d636d3ccd0e38a7a->enter($__internal_e497643904d18d3bc877c49ad6b8c95883e094ee5891ebd0d636d3ccd0e38a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b3388154dce0dcb041db23b14f408f6039cfbf572ffe38915a22810ea9d451e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3388154dce0dcb041db23b14f408f6039cfbf572ffe38915a22810ea9d451e7->enter($__internal_b3388154dce0dcb041db23b14f408f6039cfbf572ffe38915a22810ea9d451e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e497643904d18d3bc877c49ad6b8c95883e094ee5891ebd0d636d3ccd0e38a7a->leave($__internal_e497643904d18d3bc877c49ad6b8c95883e094ee5891ebd0d636d3ccd0e38a7a_prof);

        
        $__internal_b3388154dce0dcb041db23b14f408f6039cfbf572ffe38915a22810ea9d451e7->leave($__internal_b3388154dce0dcb041db23b14f408f6039cfbf572ffe38915a22810ea9d451e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_393b250a1a984f772cb91b09333ede7d654adc1fbeddd1dafd1cad2bc5660f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393b250a1a984f772cb91b09333ede7d654adc1fbeddd1dafd1cad2bc5660f32->enter($__internal_393b250a1a984f772cb91b09333ede7d654adc1fbeddd1dafd1cad2bc5660f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_210f7323ac2b71db1db818afc1d5e386fe50ee8067b9f6c747eaf48b95277fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210f7323ac2b71db1db818afc1d5e386fe50ee8067b9f6c747eaf48b95277fd9->enter($__internal_210f7323ac2b71db1db818afc1d5e386fe50ee8067b9f6c747eaf48b95277fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_210f7323ac2b71db1db818afc1d5e386fe50ee8067b9f6c747eaf48b95277fd9->leave($__internal_210f7323ac2b71db1db818afc1d5e386fe50ee8067b9f6c747eaf48b95277fd9_prof);

        
        $__internal_393b250a1a984f772cb91b09333ede7d654adc1fbeddd1dafd1cad2bc5660f32->leave($__internal_393b250a1a984f772cb91b09333ede7d654adc1fbeddd1dafd1cad2bc5660f32_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_201778f484ea1bd30c8739f0a43ac27cf402ba1655d6da22aec560568597361a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201778f484ea1bd30c8739f0a43ac27cf402ba1655d6da22aec560568597361a->enter($__internal_201778f484ea1bd30c8739f0a43ac27cf402ba1655d6da22aec560568597361a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f8aa73b96a80fcb670de31075df194037c654209905378fa7ec8a79ec1ae350f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8aa73b96a80fcb670de31075df194037c654209905378fa7ec8a79ec1ae350f->enter($__internal_f8aa73b96a80fcb670de31075df194037c654209905378fa7ec8a79ec1ae350f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f8aa73b96a80fcb670de31075df194037c654209905378fa7ec8a79ec1ae350f->leave($__internal_f8aa73b96a80fcb670de31075df194037c654209905378fa7ec8a79ec1ae350f_prof);

        
        $__internal_201778f484ea1bd30c8739f0a43ac27cf402ba1655d6da22aec560568597361a->leave($__internal_201778f484ea1bd30c8739f0a43ac27cf402ba1655d6da22aec560568597361a_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7bb7a2ffdec8c19eb90a7910fff11f181a57a6403649d73a2cf17463de5ed19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7bb7a2ffdec8c19eb90a7910fff11f181a57a6403649d73a2cf17463de5ed19->enter($__internal_a7bb7a2ffdec8c19eb90a7910fff11f181a57a6403649d73a2cf17463de5ed19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbad1c9570bd6a55a5c7a461cd22d449e7b18daa9079ad6752acb076dce92d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbad1c9570bd6a55a5c7a461cd22d449e7b18daa9079ad6752acb076dce92d96->enter($__internal_cbad1c9570bd6a55a5c7a461cd22d449e7b18daa9079ad6752acb076dce92d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cbad1c9570bd6a55a5c7a461cd22d449e7b18daa9079ad6752acb076dce92d96->leave($__internal_cbad1c9570bd6a55a5c7a461cd22d449e7b18daa9079ad6752acb076dce92d96_prof);

        
        $__internal_a7bb7a2ffdec8c19eb90a7910fff11f181a57a6403649d73a2cf17463de5ed19->leave($__internal_a7bb7a2ffdec8c19eb90a7910fff11f181a57a6403649d73a2cf17463de5ed19_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e57ba42b54e0b9da06d452bfdc922f88f357abb00e55ddc902b0517a05a5b98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57ba42b54e0b9da06d452bfdc922f88f357abb00e55ddc902b0517a05a5b98e->enter($__internal_e57ba42b54e0b9da06d452bfdc922f88f357abb00e55ddc902b0517a05a5b98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_089acc8034b73d13febebac75173c4fbf40e1e91088402aa046ab5cfd48c6ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089acc8034b73d13febebac75173c4fbf40e1e91088402aa046ab5cfd48c6ea8->enter($__internal_089acc8034b73d13febebac75173c4fbf40e1e91088402aa046ab5cfd48c6ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_089acc8034b73d13febebac75173c4fbf40e1e91088402aa046ab5cfd48c6ea8->leave($__internal_089acc8034b73d13febebac75173c4fbf40e1e91088402aa046ab5cfd48c6ea8_prof);

        
        $__internal_e57ba42b54e0b9da06d452bfdc922f88f357abb00e55ddc902b0517a05a5b98e->leave($__internal_e57ba42b54e0b9da06d452bfdc922f88f357abb00e55ddc902b0517a05a5b98e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "D:\\WebstormProjects\\rezije\\app/Resources\\views/base.html.twig");
    }
}
