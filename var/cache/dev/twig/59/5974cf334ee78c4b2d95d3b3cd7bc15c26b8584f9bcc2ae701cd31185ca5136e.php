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
        $__internal_cfc40bfcf7d08c13d8f25fd596930359306e55a1440447148f6f0f0c6ca15d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc40bfcf7d08c13d8f25fd596930359306e55a1440447148f6f0f0c6ca15d33->enter($__internal_cfc40bfcf7d08c13d8f25fd596930359306e55a1440447148f6f0f0c6ca15d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a00da9d51b6acf57ccfec1d7a47a57f73116c144fd791b5114e4d64c00a909cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00da9d51b6acf57ccfec1d7a47a57f73116c144fd791b5114e4d64c00a909cc->enter($__internal_a00da9d51b6acf57ccfec1d7a47a57f73116c144fd791b5114e4d64c00a909cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_cfc40bfcf7d08c13d8f25fd596930359306e55a1440447148f6f0f0c6ca15d33->leave($__internal_cfc40bfcf7d08c13d8f25fd596930359306e55a1440447148f6f0f0c6ca15d33_prof);

        
        $__internal_a00da9d51b6acf57ccfec1d7a47a57f73116c144fd791b5114e4d64c00a909cc->leave($__internal_a00da9d51b6acf57ccfec1d7a47a57f73116c144fd791b5114e4d64c00a909cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fa8d0df1c157fa86ec242b09a32e1d132f8748440941feada10f458fcece4eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa8d0df1c157fa86ec242b09a32e1d132f8748440941feada10f458fcece4eb->enter($__internal_0fa8d0df1c157fa86ec242b09a32e1d132f8748440941feada10f458fcece4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25811d7b48aa666d0f44b2a73423ae914db25d808cd6f5fe3fc9f3b52d8f67fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25811d7b48aa666d0f44b2a73423ae914db25d808cd6f5fe3fc9f3b52d8f67fc->enter($__internal_25811d7b48aa666d0f44b2a73423ae914db25d808cd6f5fe3fc9f3b52d8f67fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_25811d7b48aa666d0f44b2a73423ae914db25d808cd6f5fe3fc9f3b52d8f67fc->leave($__internal_25811d7b48aa666d0f44b2a73423ae914db25d808cd6f5fe3fc9f3b52d8f67fc_prof);

        
        $__internal_0fa8d0df1c157fa86ec242b09a32e1d132f8748440941feada10f458fcece4eb->leave($__internal_0fa8d0df1c157fa86ec242b09a32e1d132f8748440941feada10f458fcece4eb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efd3f6d5a73e9677c0816a00b0d9364afe71c727b8ffb0cc05986b4e6f81ff73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd3f6d5a73e9677c0816a00b0d9364afe71c727b8ffb0cc05986b4e6f81ff73->enter($__internal_efd3f6d5a73e9677c0816a00b0d9364afe71c727b8ffb0cc05986b4e6f81ff73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2bd793a9330dacaa3baf4cbad496704a925763bace00ee2878559e571f01e055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd793a9330dacaa3baf4cbad496704a925763bace00ee2878559e571f01e055->enter($__internal_2bd793a9330dacaa3baf4cbad496704a925763bace00ee2878559e571f01e055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2bd793a9330dacaa3baf4cbad496704a925763bace00ee2878559e571f01e055->leave($__internal_2bd793a9330dacaa3baf4cbad496704a925763bace00ee2878559e571f01e055_prof);

        
        $__internal_efd3f6d5a73e9677c0816a00b0d9364afe71c727b8ffb0cc05986b4e6f81ff73->leave($__internal_efd3f6d5a73e9677c0816a00b0d9364afe71c727b8ffb0cc05986b4e6f81ff73_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_af4de2c0ebf4c478226ff53589f52d41200f918204d5be90841e6bce828a507f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4de2c0ebf4c478226ff53589f52d41200f918204d5be90841e6bce828a507f->enter($__internal_af4de2c0ebf4c478226ff53589f52d41200f918204d5be90841e6bce828a507f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6387484e1b7af6654045b0c2ce75e248bc9e3ffb170858b9443d8f0dd456be06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6387484e1b7af6654045b0c2ce75e248bc9e3ffb170858b9443d8f0dd456be06->enter($__internal_6387484e1b7af6654045b0c2ce75e248bc9e3ffb170858b9443d8f0dd456be06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6387484e1b7af6654045b0c2ce75e248bc9e3ffb170858b9443d8f0dd456be06->leave($__internal_6387484e1b7af6654045b0c2ce75e248bc9e3ffb170858b9443d8f0dd456be06_prof);

        
        $__internal_af4de2c0ebf4c478226ff53589f52d41200f918204d5be90841e6bce828a507f->leave($__internal_af4de2c0ebf4c478226ff53589f52d41200f918204d5be90841e6bce828a507f_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_875d0344eab1e551f362541e6774aa575a35d3500898c6f3309dbcc76c067d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875d0344eab1e551f362541e6774aa575a35d3500898c6f3309dbcc76c067d62->enter($__internal_875d0344eab1e551f362541e6774aa575a35d3500898c6f3309dbcc76c067d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a7d8ed5754f081e96e4a512dc9e47fdf176a59fcadebcd1e2be277985cb5007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7d8ed5754f081e96e4a512dc9e47fdf176a59fcadebcd1e2be277985cb5007->enter($__internal_3a7d8ed5754f081e96e4a512dc9e47fdf176a59fcadebcd1e2be277985cb5007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a7d8ed5754f081e96e4a512dc9e47fdf176a59fcadebcd1e2be277985cb5007->leave($__internal_3a7d8ed5754f081e96e4a512dc9e47fdf176a59fcadebcd1e2be277985cb5007_prof);

        
        $__internal_875d0344eab1e551f362541e6774aa575a35d3500898c6f3309dbcc76c067d62->leave($__internal_875d0344eab1e551f362541e6774aa575a35d3500898c6f3309dbcc76c067d62_prof);

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
", "::base.html.twig", "D:\\WebstormProjects\\rezije\\app/Resources\\views/base.html.twig");
    }
}
