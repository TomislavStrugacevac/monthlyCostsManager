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
        $__internal_a2d1584138f98a95c78a36fd428f37f8d3bcba133862ddfaa9cceac89a733889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d1584138f98a95c78a36fd428f37f8d3bcba133862ddfaa9cceac89a733889->enter($__internal_a2d1584138f98a95c78a36fd428f37f8d3bcba133862ddfaa9cceac89a733889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b600e9601ba8cb5ba64eb73c7b2500f3e01f9061f9bff5a5ddf15c885e051f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b600e9601ba8cb5ba64eb73c7b2500f3e01f9061f9bff5a5ddf15c885e051f7d->enter($__internal_b600e9601ba8cb5ba64eb73c7b2500f3e01f9061f9bff5a5ddf15c885e051f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a2d1584138f98a95c78a36fd428f37f8d3bcba133862ddfaa9cceac89a733889->leave($__internal_a2d1584138f98a95c78a36fd428f37f8d3bcba133862ddfaa9cceac89a733889_prof);

        
        $__internal_b600e9601ba8cb5ba64eb73c7b2500f3e01f9061f9bff5a5ddf15c885e051f7d->leave($__internal_b600e9601ba8cb5ba64eb73c7b2500f3e01f9061f9bff5a5ddf15c885e051f7d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_113f63d3a0504a69b2a2ac3bbded9276e82b3713a2aa8539e8275b0264d6e826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113f63d3a0504a69b2a2ac3bbded9276e82b3713a2aa8539e8275b0264d6e826->enter($__internal_113f63d3a0504a69b2a2ac3bbded9276e82b3713a2aa8539e8275b0264d6e826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a357149426a740b2c151bc475126b4c55d81910646033a9acccd107181341127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a357149426a740b2c151bc475126b4c55d81910646033a9acccd107181341127->enter($__internal_a357149426a740b2c151bc475126b4c55d81910646033a9acccd107181341127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a357149426a740b2c151bc475126b4c55d81910646033a9acccd107181341127->leave($__internal_a357149426a740b2c151bc475126b4c55d81910646033a9acccd107181341127_prof);

        
        $__internal_113f63d3a0504a69b2a2ac3bbded9276e82b3713a2aa8539e8275b0264d6e826->leave($__internal_113f63d3a0504a69b2a2ac3bbded9276e82b3713a2aa8539e8275b0264d6e826_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43473aebedf2e84d997b82f3922b4c4c456a4371831b424f789984480eef10ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43473aebedf2e84d997b82f3922b4c4c456a4371831b424f789984480eef10ec->enter($__internal_43473aebedf2e84d997b82f3922b4c4c456a4371831b424f789984480eef10ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_500b84f02f20fc77d2f6fbc4289333ebbbaa524797799c0919804af5490708c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500b84f02f20fc77d2f6fbc4289333ebbbaa524797799c0919804af5490708c5->enter($__internal_500b84f02f20fc77d2f6fbc4289333ebbbaa524797799c0919804af5490708c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_500b84f02f20fc77d2f6fbc4289333ebbbaa524797799c0919804af5490708c5->leave($__internal_500b84f02f20fc77d2f6fbc4289333ebbbaa524797799c0919804af5490708c5_prof);

        
        $__internal_43473aebedf2e84d997b82f3922b4c4c456a4371831b424f789984480eef10ec->leave($__internal_43473aebedf2e84d997b82f3922b4c4c456a4371831b424f789984480eef10ec_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_328abdf7cd60f4ab86f76b9e22b5783c320e67c6c7c72c0cc749cb26c68183c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328abdf7cd60f4ab86f76b9e22b5783c320e67c6c7c72c0cc749cb26c68183c0->enter($__internal_328abdf7cd60f4ab86f76b9e22b5783c320e67c6c7c72c0cc749cb26c68183c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_637c98df782cf521973657326e453b6dbc80ef9356fbdde19550d8e3ad6acdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637c98df782cf521973657326e453b6dbc80ef9356fbdde19550d8e3ad6acdd5->enter($__internal_637c98df782cf521973657326e453b6dbc80ef9356fbdde19550d8e3ad6acdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_637c98df782cf521973657326e453b6dbc80ef9356fbdde19550d8e3ad6acdd5->leave($__internal_637c98df782cf521973657326e453b6dbc80ef9356fbdde19550d8e3ad6acdd5_prof);

        
        $__internal_328abdf7cd60f4ab86f76b9e22b5783c320e67c6c7c72c0cc749cb26c68183c0->leave($__internal_328abdf7cd60f4ab86f76b9e22b5783c320e67c6c7c72c0cc749cb26c68183c0_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d9c839f67c38086b1d5155f7aa4248dc7ef8adb7832783b08f1a232cfdf41b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9c839f67c38086b1d5155f7aa4248dc7ef8adb7832783b08f1a232cfdf41b6->enter($__internal_1d9c839f67c38086b1d5155f7aa4248dc7ef8adb7832783b08f1a232cfdf41b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90a78101dc1957f3b9e9533f7c234218560a813e271e95dfc6104c0442e97171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a78101dc1957f3b9e9533f7c234218560a813e271e95dfc6104c0442e97171->enter($__internal_90a78101dc1957f3b9e9533f7c234218560a813e271e95dfc6104c0442e97171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_90a78101dc1957f3b9e9533f7c234218560a813e271e95dfc6104c0442e97171->leave($__internal_90a78101dc1957f3b9e9533f7c234218560a813e271e95dfc6104c0442e97171_prof);

        
        $__internal_1d9c839f67c38086b1d5155f7aa4248dc7ef8adb7832783b08f1a232cfdf41b6->leave($__internal_1d9c839f67c38086b1d5155f7aa4248dc7ef8adb7832783b08f1a232cfdf41b6_prof);

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
", "::base.html.twig", "D:\\WebstormProjects\\rezije\\app/Resources\\views/base.html.twig");
    }
}
