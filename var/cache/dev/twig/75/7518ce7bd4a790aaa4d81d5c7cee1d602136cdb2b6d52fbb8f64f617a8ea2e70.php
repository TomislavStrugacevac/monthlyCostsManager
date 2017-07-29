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
        $__internal_fafc3ac4af99ab28fda47454147e1e2fe6b2c7693b8ab9b93cc27d3b8a24dd0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafc3ac4af99ab28fda47454147e1e2fe6b2c7693b8ab9b93cc27d3b8a24dd0d->enter($__internal_fafc3ac4af99ab28fda47454147e1e2fe6b2c7693b8ab9b93cc27d3b8a24dd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ae0da9ff05e200bafd447d12c22b31fd39a292397b9642c22f8aa739b3b5fae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0da9ff05e200bafd447d12c22b31fd39a292397b9642c22f8aa739b3b5fae2->enter($__internal_ae0da9ff05e200bafd447d12c22b31fd39a292397b9642c22f8aa739b3b5fae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fafc3ac4af99ab28fda47454147e1e2fe6b2c7693b8ab9b93cc27d3b8a24dd0d->leave($__internal_fafc3ac4af99ab28fda47454147e1e2fe6b2c7693b8ab9b93cc27d3b8a24dd0d_prof);

        
        $__internal_ae0da9ff05e200bafd447d12c22b31fd39a292397b9642c22f8aa739b3b5fae2->leave($__internal_ae0da9ff05e200bafd447d12c22b31fd39a292397b9642c22f8aa739b3b5fae2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_610e55d67fa93bfaab6ed9e0916cf28d27184397f175a61ecf4d9e5132a3b8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610e55d67fa93bfaab6ed9e0916cf28d27184397f175a61ecf4d9e5132a3b8e1->enter($__internal_610e55d67fa93bfaab6ed9e0916cf28d27184397f175a61ecf4d9e5132a3b8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_085f3fdbb9f2c54834c2e5d465bf32f543840527d8ab8ae2ca86e32c95194154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085f3fdbb9f2c54834c2e5d465bf32f543840527d8ab8ae2ca86e32c95194154->enter($__internal_085f3fdbb9f2c54834c2e5d465bf32f543840527d8ab8ae2ca86e32c95194154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_085f3fdbb9f2c54834c2e5d465bf32f543840527d8ab8ae2ca86e32c95194154->leave($__internal_085f3fdbb9f2c54834c2e5d465bf32f543840527d8ab8ae2ca86e32c95194154_prof);

        
        $__internal_610e55d67fa93bfaab6ed9e0916cf28d27184397f175a61ecf4d9e5132a3b8e1->leave($__internal_610e55d67fa93bfaab6ed9e0916cf28d27184397f175a61ecf4d9e5132a3b8e1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e792925e9e808b72d872daa8b1f6a85aa83ebe498d62a357b4b5a56a4cad6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e792925e9e808b72d872daa8b1f6a85aa83ebe498d62a357b4b5a56a4cad6c8->enter($__internal_2e792925e9e808b72d872daa8b1f6a85aa83ebe498d62a357b4b5a56a4cad6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd44391ddb60a41d8f4dde5db85e4533b8c0c4648a9348d46cb351d4939a2f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd44391ddb60a41d8f4dde5db85e4533b8c0c4648a9348d46cb351d4939a2f04->enter($__internal_cd44391ddb60a41d8f4dde5db85e4533b8c0c4648a9348d46cb351d4939a2f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cd44391ddb60a41d8f4dde5db85e4533b8c0c4648a9348d46cb351d4939a2f04->leave($__internal_cd44391ddb60a41d8f4dde5db85e4533b8c0c4648a9348d46cb351d4939a2f04_prof);

        
        $__internal_2e792925e9e808b72d872daa8b1f6a85aa83ebe498d62a357b4b5a56a4cad6c8->leave($__internal_2e792925e9e808b72d872daa8b1f6a85aa83ebe498d62a357b4b5a56a4cad6c8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2d0fe7605f8d4daa71371f77163f5668c4fde0dc6fee9391af07055bdec327b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d0fe7605f8d4daa71371f77163f5668c4fde0dc6fee9391af07055bdec327b->enter($__internal_f2d0fe7605f8d4daa71371f77163f5668c4fde0dc6fee9391af07055bdec327b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83e12fdd22febe6dbadeeb0866aec0a2882bd77e6280597b85f89d07cdd22140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e12fdd22febe6dbadeeb0866aec0a2882bd77e6280597b85f89d07cdd22140->enter($__internal_83e12fdd22febe6dbadeeb0866aec0a2882bd77e6280597b85f89d07cdd22140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83e12fdd22febe6dbadeeb0866aec0a2882bd77e6280597b85f89d07cdd22140->leave($__internal_83e12fdd22febe6dbadeeb0866aec0a2882bd77e6280597b85f89d07cdd22140_prof);

        
        $__internal_f2d0fe7605f8d4daa71371f77163f5668c4fde0dc6fee9391af07055bdec327b->leave($__internal_f2d0fe7605f8d4daa71371f77163f5668c4fde0dc6fee9391af07055bdec327b_prof);

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
