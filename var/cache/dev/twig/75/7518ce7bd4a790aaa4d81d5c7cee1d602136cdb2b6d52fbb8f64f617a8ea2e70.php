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
        $__internal_1cf807507a2876d32bfc00dbdeed8ebe401eac419b406d8c6be46256ca97b2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf807507a2876d32bfc00dbdeed8ebe401eac419b406d8c6be46256ca97b2c4->enter($__internal_1cf807507a2876d32bfc00dbdeed8ebe401eac419b406d8c6be46256ca97b2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ab721fec8e6d9d086654cdea2c76d2e03f949946117e9667aa6f5383cc856f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab721fec8e6d9d086654cdea2c76d2e03f949946117e9667aa6f5383cc856f97->enter($__internal_ab721fec8e6d9d086654cdea2c76d2e03f949946117e9667aa6f5383cc856f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1cf807507a2876d32bfc00dbdeed8ebe401eac419b406d8c6be46256ca97b2c4->leave($__internal_1cf807507a2876d32bfc00dbdeed8ebe401eac419b406d8c6be46256ca97b2c4_prof);

        
        $__internal_ab721fec8e6d9d086654cdea2c76d2e03f949946117e9667aa6f5383cc856f97->leave($__internal_ab721fec8e6d9d086654cdea2c76d2e03f949946117e9667aa6f5383cc856f97_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_049a556e61873ab059cd7debe1012f43eb93edb96c885d64910fd04876d35e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049a556e61873ab059cd7debe1012f43eb93edb96c885d64910fd04876d35e64->enter($__internal_049a556e61873ab059cd7debe1012f43eb93edb96c885d64910fd04876d35e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc450d2069754d5b3b09a92ff1c6679b7796fb37bf03421f4e810163afe3b8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc450d2069754d5b3b09a92ff1c6679b7796fb37bf03421f4e810163afe3b8de->enter($__internal_fc450d2069754d5b3b09a92ff1c6679b7796fb37bf03421f4e810163afe3b8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc450d2069754d5b3b09a92ff1c6679b7796fb37bf03421f4e810163afe3b8de->leave($__internal_fc450d2069754d5b3b09a92ff1c6679b7796fb37bf03421f4e810163afe3b8de_prof);

        
        $__internal_049a556e61873ab059cd7debe1012f43eb93edb96c885d64910fd04876d35e64->leave($__internal_049a556e61873ab059cd7debe1012f43eb93edb96c885d64910fd04876d35e64_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_079516e493c217eb84aae2a4bcb4275d69a6b2317f1c1d54862eb57ba0352460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079516e493c217eb84aae2a4bcb4275d69a6b2317f1c1d54862eb57ba0352460->enter($__internal_079516e493c217eb84aae2a4bcb4275d69a6b2317f1c1d54862eb57ba0352460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b8a95674dfdb8e48c5017c5e738122bdae09bfaf67b91cff6c0d7cd5a86878e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8a95674dfdb8e48c5017c5e738122bdae09bfaf67b91cff6c0d7cd5a86878e->enter($__internal_6b8a95674dfdb8e48c5017c5e738122bdae09bfaf67b91cff6c0d7cd5a86878e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6b8a95674dfdb8e48c5017c5e738122bdae09bfaf67b91cff6c0d7cd5a86878e->leave($__internal_6b8a95674dfdb8e48c5017c5e738122bdae09bfaf67b91cff6c0d7cd5a86878e_prof);

        
        $__internal_079516e493c217eb84aae2a4bcb4275d69a6b2317f1c1d54862eb57ba0352460->leave($__internal_079516e493c217eb84aae2a4bcb4275d69a6b2317f1c1d54862eb57ba0352460_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e159000d6d128a4c93c068f7ab005473a3dc511706ed1cb6ec60524b8672933c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e159000d6d128a4c93c068f7ab005473a3dc511706ed1cb6ec60524b8672933c->enter($__internal_e159000d6d128a4c93c068f7ab005473a3dc511706ed1cb6ec60524b8672933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_431d02ea415c9e31e8c574e5e205551795087d0fca24f17c07292f36cd1abf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431d02ea415c9e31e8c574e5e205551795087d0fca24f17c07292f36cd1abf47->enter($__internal_431d02ea415c9e31e8c574e5e205551795087d0fca24f17c07292f36cd1abf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_431d02ea415c9e31e8c574e5e205551795087d0fca24f17c07292f36cd1abf47->leave($__internal_431d02ea415c9e31e8c574e5e205551795087d0fca24f17c07292f36cd1abf47_prof);

        
        $__internal_e159000d6d128a4c93c068f7ab005473a3dc511706ed1cb6ec60524b8672933c->leave($__internal_e159000d6d128a4c93c068f7ab005473a3dc511706ed1cb6ec60524b8672933c_prof);

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
