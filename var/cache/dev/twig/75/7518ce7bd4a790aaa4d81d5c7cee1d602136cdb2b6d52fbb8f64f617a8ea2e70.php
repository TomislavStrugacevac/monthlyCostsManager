<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_239d33d300abc6707f02b89ece7f9e920d827fd87fdba361fa1e2664a8dbcf29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c11f70d3859adacfc00dfc84918ed57a623452ebd9e4d88c10f24ccad85070a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11f70d3859adacfc00dfc84918ed57a623452ebd9e4d88c10f24ccad85070a0->enter($__internal_c11f70d3859adacfc00dfc84918ed57a623452ebd9e4d88c10f24ccad85070a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cc1a381aa67c50a2c23254b6d33adbf1207df98268fe15efe2c75574a9b80ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1a381aa67c50a2c23254b6d33adbf1207df98268fe15efe2c75574a9b80ede->enter($__internal_cc1a381aa67c50a2c23254b6d33adbf1207df98268fe15efe2c75574a9b80ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c11f70d3859adacfc00dfc84918ed57a623452ebd9e4d88c10f24ccad85070a0->leave($__internal_c11f70d3859adacfc00dfc84918ed57a623452ebd9e4d88c10f24ccad85070a0_prof);

        
        $__internal_cc1a381aa67c50a2c23254b6d33adbf1207df98268fe15efe2c75574a9b80ede->leave($__internal_cc1a381aa67c50a2c23254b6d33adbf1207df98268fe15efe2c75574a9b80ede_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d838b2b6ac9f5d0a9b4274d38ff5ca1124a47250ad064a82c9fcddf25d8682d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d838b2b6ac9f5d0a9b4274d38ff5ca1124a47250ad064a82c9fcddf25d8682d->enter($__internal_7d838b2b6ac9f5d0a9b4274d38ff5ca1124a47250ad064a82c9fcddf25d8682d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d5f675081270f8f327c43f27d1eb35c82bee315a7942dd1a4076e80f30c486c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5f675081270f8f327c43f27d1eb35c82bee315a7942dd1a4076e80f30c486c->enter($__internal_9d5f675081270f8f327c43f27d1eb35c82bee315a7942dd1a4076e80f30c486c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9d5f675081270f8f327c43f27d1eb35c82bee315a7942dd1a4076e80f30c486c->leave($__internal_9d5f675081270f8f327c43f27d1eb35c82bee315a7942dd1a4076e80f30c486c_prof);

        
        $__internal_7d838b2b6ac9f5d0a9b4274d38ff5ca1124a47250ad064a82c9fcddf25d8682d->leave($__internal_7d838b2b6ac9f5d0a9b4274d38ff5ca1124a47250ad064a82c9fcddf25d8682d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3cf9c59a400585065685ed3713c9db88735002ac4b391993180e905e4140c9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf9c59a400585065685ed3713c9db88735002ac4b391993180e905e4140c9c6->enter($__internal_3cf9c59a400585065685ed3713c9db88735002ac4b391993180e905e4140c9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_347249b3e913c6bd8cd4ac99113280a60f79fad73d46d363893c8fb9cbaca978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347249b3e913c6bd8cd4ac99113280a60f79fad73d46d363893c8fb9cbaca978->enter($__internal_347249b3e913c6bd8cd4ac99113280a60f79fad73d46d363893c8fb9cbaca978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_347249b3e913c6bd8cd4ac99113280a60f79fad73d46d363893c8fb9cbaca978->leave($__internal_347249b3e913c6bd8cd4ac99113280a60f79fad73d46d363893c8fb9cbaca978_prof);

        
        $__internal_3cf9c59a400585065685ed3713c9db88735002ac4b391993180e905e4140c9c6->leave($__internal_3cf9c59a400585065685ed3713c9db88735002ac4b391993180e905e4140c9c6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5307adda790916b77f9e64d80959fd5cf4dc46a433a1ec2b530a393e153cbc60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5307adda790916b77f9e64d80959fd5cf4dc46a433a1ec2b530a393e153cbc60->enter($__internal_5307adda790916b77f9e64d80959fd5cf4dc46a433a1ec2b530a393e153cbc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97c91049158248b005e3ddbf3b13b8e70b694508c92f692ddf5eb32bf452d146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c91049158248b005e3ddbf3b13b8e70b694508c92f692ddf5eb32bf452d146->enter($__internal_97c91049158248b005e3ddbf3b13b8e70b694508c92f692ddf5eb32bf452d146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97c91049158248b005e3ddbf3b13b8e70b694508c92f692ddf5eb32bf452d146->leave($__internal_97c91049158248b005e3ddbf3b13b8e70b694508c92f692ddf5eb32bf452d146_prof);

        
        $__internal_5307adda790916b77f9e64d80959fd5cf4dc46a433a1ec2b530a393e153cbc60->leave($__internal_5307adda790916b77f9e64d80959fd5cf4dc46a433a1ec2b530a393e153cbc60_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
