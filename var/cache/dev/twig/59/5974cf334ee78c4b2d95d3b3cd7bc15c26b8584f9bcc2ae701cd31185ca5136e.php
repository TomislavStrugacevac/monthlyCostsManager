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
        $__internal_b560028ee9291829400b8a1f7a4817efb04344d28b074e8df67ffefe007ce446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b560028ee9291829400b8a1f7a4817efb04344d28b074e8df67ffefe007ce446->enter($__internal_b560028ee9291829400b8a1f7a4817efb04344d28b074e8df67ffefe007ce446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bd3a7755827dc73ef572076a42db35b56e7bdfd92de1446d3f36f18b58310b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3a7755827dc73ef572076a42db35b56e7bdfd92de1446d3f36f18b58310b85->enter($__internal_bd3a7755827dc73ef572076a42db35b56e7bdfd92de1446d3f36f18b58310b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b560028ee9291829400b8a1f7a4817efb04344d28b074e8df67ffefe007ce446->leave($__internal_b560028ee9291829400b8a1f7a4817efb04344d28b074e8df67ffefe007ce446_prof);

        
        $__internal_bd3a7755827dc73ef572076a42db35b56e7bdfd92de1446d3f36f18b58310b85->leave($__internal_bd3a7755827dc73ef572076a42db35b56e7bdfd92de1446d3f36f18b58310b85_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55ca5e2c6b024c31733933763886a0290cf4bbb45642c5c70fec81103121bd83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ca5e2c6b024c31733933763886a0290cf4bbb45642c5c70fec81103121bd83->enter($__internal_55ca5e2c6b024c31733933763886a0290cf4bbb45642c5c70fec81103121bd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ba0f746fbc0d72a3fb06939b687eefb52c45ba023a5226dbd359db8364ecd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba0f746fbc0d72a3fb06939b687eefb52c45ba023a5226dbd359db8364ecd30->enter($__internal_9ba0f746fbc0d72a3fb06939b687eefb52c45ba023a5226dbd359db8364ecd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9ba0f746fbc0d72a3fb06939b687eefb52c45ba023a5226dbd359db8364ecd30->leave($__internal_9ba0f746fbc0d72a3fb06939b687eefb52c45ba023a5226dbd359db8364ecd30_prof);

        
        $__internal_55ca5e2c6b024c31733933763886a0290cf4bbb45642c5c70fec81103121bd83->leave($__internal_55ca5e2c6b024c31733933763886a0290cf4bbb45642c5c70fec81103121bd83_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac3d54f9e4760f60325f8d874612a84f6d9738337963344f4ce2433e6ba78b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3d54f9e4760f60325f8d874612a84f6d9738337963344f4ce2433e6ba78b46->enter($__internal_ac3d54f9e4760f60325f8d874612a84f6d9738337963344f4ce2433e6ba78b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8ddf0609630ed326ea798e8628d0e49df72110e0d833249f868726d229c3133f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddf0609630ed326ea798e8628d0e49df72110e0d833249f868726d229c3133f->enter($__internal_8ddf0609630ed326ea798e8628d0e49df72110e0d833249f868726d229c3133f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8ddf0609630ed326ea798e8628d0e49df72110e0d833249f868726d229c3133f->leave($__internal_8ddf0609630ed326ea798e8628d0e49df72110e0d833249f868726d229c3133f_prof);

        
        $__internal_ac3d54f9e4760f60325f8d874612a84f6d9738337963344f4ce2433e6ba78b46->leave($__internal_ac3d54f9e4760f60325f8d874612a84f6d9738337963344f4ce2433e6ba78b46_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_97eab85a6c1be26d4ba8f46951699d7fa021996f0848915c6692d7f58bbfe12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97eab85a6c1be26d4ba8f46951699d7fa021996f0848915c6692d7f58bbfe12e->enter($__internal_97eab85a6c1be26d4ba8f46951699d7fa021996f0848915c6692d7f58bbfe12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_373eee90d1528724348c2046e83f72c0a21c5c3eccbd5391ccb2cbe4aa122d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373eee90d1528724348c2046e83f72c0a21c5c3eccbd5391ccb2cbe4aa122d8e->enter($__internal_373eee90d1528724348c2046e83f72c0a21c5c3eccbd5391ccb2cbe4aa122d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_373eee90d1528724348c2046e83f72c0a21c5c3eccbd5391ccb2cbe4aa122d8e->leave($__internal_373eee90d1528724348c2046e83f72c0a21c5c3eccbd5391ccb2cbe4aa122d8e_prof);

        
        $__internal_97eab85a6c1be26d4ba8f46951699d7fa021996f0848915c6692d7f58bbfe12e->leave($__internal_97eab85a6c1be26d4ba8f46951699d7fa021996f0848915c6692d7f58bbfe12e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d07123179ec256df945e9d234307e9b07b854db6d1ef4729743f41f6ffd04851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07123179ec256df945e9d234307e9b07b854db6d1ef4729743f41f6ffd04851->enter($__internal_d07123179ec256df945e9d234307e9b07b854db6d1ef4729743f41f6ffd04851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ebca55c72ca951c6c9ff5d1ee7dff0074eae4d0318252749f61da1843b8138b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebca55c72ca951c6c9ff5d1ee7dff0074eae4d0318252749f61da1843b8138b6->enter($__internal_ebca55c72ca951c6c9ff5d1ee7dff0074eae4d0318252749f61da1843b8138b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ebca55c72ca951c6c9ff5d1ee7dff0074eae4d0318252749f61da1843b8138b6->leave($__internal_ebca55c72ca951c6c9ff5d1ee7dff0074eae4d0318252749f61da1843b8138b6_prof);

        
        $__internal_d07123179ec256df945e9d234307e9b07b854db6d1ef4729743f41f6ffd04851->leave($__internal_d07123179ec256df945e9d234307e9b07b854db6d1ef4729743f41f6ffd04851_prof);

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
", "::base.html.twig", "D:\\WebstormProjects\\rezije\\app/Resources\\views/base.html.twig");
    }
}
