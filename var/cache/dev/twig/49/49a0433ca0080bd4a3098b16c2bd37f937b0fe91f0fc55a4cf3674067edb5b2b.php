<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_6f24b409d2a2a6c7bb543488586c56eb9e81738c2f54cfedf9f79eb8c708254b extends Twig_Template
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
        $__internal_67ea9ad6635fa05d2ca194434de13e6bf7c1478c399133edd34f92125c72c357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ea9ad6635fa05d2ca194434de13e6bf7c1478c399133edd34f92125c72c357->enter($__internal_67ea9ad6635fa05d2ca194434de13e6bf7c1478c399133edd34f92125c72c357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_d253ed3aacaf236f0f1662e492062686a25959d0f95a93272fd2b8e758ebb0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d253ed3aacaf236f0f1662e492062686a25959d0f95a93272fd2b8e758ebb0ba->enter($__internal_d253ed3aacaf236f0f1662e492062686a25959d0f95a93272fd2b8e758ebb0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_67ea9ad6635fa05d2ca194434de13e6bf7c1478c399133edd34f92125c72c357->leave($__internal_67ea9ad6635fa05d2ca194434de13e6bf7c1478c399133edd34f92125c72c357_prof);

        
        $__internal_d253ed3aacaf236f0f1662e492062686a25959d0f95a93272fd2b8e758ebb0ba->leave($__internal_d253ed3aacaf236f0f1662e492062686a25959d0f95a93272fd2b8e758ebb0ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa9ae2bb91bae49b405e59a0de230ce173e37e5b6cb82e6404aede1c24f8bf3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9ae2bb91bae49b405e59a0de230ce173e37e5b6cb82e6404aede1c24f8bf3c->enter($__internal_aa9ae2bb91bae49b405e59a0de230ce173e37e5b6cb82e6404aede1c24f8bf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a23953cae385967ac855b8ce6c4355a02e941c728b6858a11c77b9a085cd6f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23953cae385967ac855b8ce6c4355a02e941c728b6858a11c77b9a085cd6f63->enter($__internal_a23953cae385967ac855b8ce6c4355a02e941c728b6858a11c77b9a085cd6f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a23953cae385967ac855b8ce6c4355a02e941c728b6858a11c77b9a085cd6f63->leave($__internal_a23953cae385967ac855b8ce6c4355a02e941c728b6858a11c77b9a085cd6f63_prof);

        
        $__internal_aa9ae2bb91bae49b405e59a0de230ce173e37e5b6cb82e6404aede1c24f8bf3c->leave($__internal_aa9ae2bb91bae49b405e59a0de230ce173e37e5b6cb82e6404aede1c24f8bf3c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b784a5e0bdd0c5fb1b72eb5660ddd56ede3d354b8b795ec757f75eeea0623c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b784a5e0bdd0c5fb1b72eb5660ddd56ede3d354b8b795ec757f75eeea0623c2->enter($__internal_9b784a5e0bdd0c5fb1b72eb5660ddd56ede3d354b8b795ec757f75eeea0623c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5dd3b673d9d2948c593120844cb736a6ce9160d272d7d48804364090b48e0816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd3b673d9d2948c593120844cb736a6ce9160d272d7d48804364090b48e0816->enter($__internal_5dd3b673d9d2948c593120844cb736a6ce9160d272d7d48804364090b48e0816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5dd3b673d9d2948c593120844cb736a6ce9160d272d7d48804364090b48e0816->leave($__internal_5dd3b673d9d2948c593120844cb736a6ce9160d272d7d48804364090b48e0816_prof);

        
        $__internal_9b784a5e0bdd0c5fb1b72eb5660ddd56ede3d354b8b795ec757f75eeea0623c2->leave($__internal_9b784a5e0bdd0c5fb1b72eb5660ddd56ede3d354b8b795ec757f75eeea0623c2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a0a837fc4b62890798126623a9e91fc71484a122dd69df1b7017cc8058c8fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0a837fc4b62890798126623a9e91fc71484a122dd69df1b7017cc8058c8fe0->enter($__internal_0a0a837fc4b62890798126623a9e91fc71484a122dd69df1b7017cc8058c8fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee004d49de248f5fffa9af897dfc4a8a859a2e017fbe17ec166c6cfe41ab199a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee004d49de248f5fffa9af897dfc4a8a859a2e017fbe17ec166c6cfe41ab199a->enter($__internal_ee004d49de248f5fffa9af897dfc4a8a859a2e017fbe17ec166c6cfe41ab199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee004d49de248f5fffa9af897dfc4a8a859a2e017fbe17ec166c6cfe41ab199a->leave($__internal_ee004d49de248f5fffa9af897dfc4a8a859a2e017fbe17ec166c6cfe41ab199a_prof);

        
        $__internal_0a0a837fc4b62890798126623a9e91fc71484a122dd69df1b7017cc8058c8fe0->leave($__internal_0a0a837fc4b62890798126623a9e91fc71484a122dd69df1b7017cc8058c8fe0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
