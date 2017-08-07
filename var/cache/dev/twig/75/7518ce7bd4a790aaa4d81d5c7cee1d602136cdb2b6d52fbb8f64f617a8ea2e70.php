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
        $__internal_ccbafcf78ffc6a077c63bab52e28024072153a2626b9e9789b793d96d2c42118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbafcf78ffc6a077c63bab52e28024072153a2626b9e9789b793d96d2c42118->enter($__internal_ccbafcf78ffc6a077c63bab52e28024072153a2626b9e9789b793d96d2c42118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dd6143f031fe1afcfc41678aed749f24fb641b4692f6d1a2781603100b86cbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6143f031fe1afcfc41678aed749f24fb641b4692f6d1a2781603100b86cbe3->enter($__internal_dd6143f031fe1afcfc41678aed749f24fb641b4692f6d1a2781603100b86cbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ccbafcf78ffc6a077c63bab52e28024072153a2626b9e9789b793d96d2c42118->leave($__internal_ccbafcf78ffc6a077c63bab52e28024072153a2626b9e9789b793d96d2c42118_prof);

        
        $__internal_dd6143f031fe1afcfc41678aed749f24fb641b4692f6d1a2781603100b86cbe3->leave($__internal_dd6143f031fe1afcfc41678aed749f24fb641b4692f6d1a2781603100b86cbe3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c2293e4e1f631058ddc8ef7d57fe940b849d5caca23e6de9e21d86507b44835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2293e4e1f631058ddc8ef7d57fe940b849d5caca23e6de9e21d86507b44835->enter($__internal_5c2293e4e1f631058ddc8ef7d57fe940b849d5caca23e6de9e21d86507b44835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09bb0b493a2791317d8464aa60cb6c7999461c72b88f8bf9264c878db143ce28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bb0b493a2791317d8464aa60cb6c7999461c72b88f8bf9264c878db143ce28->enter($__internal_09bb0b493a2791317d8464aa60cb6c7999461c72b88f8bf9264c878db143ce28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_09bb0b493a2791317d8464aa60cb6c7999461c72b88f8bf9264c878db143ce28->leave($__internal_09bb0b493a2791317d8464aa60cb6c7999461c72b88f8bf9264c878db143ce28_prof);

        
        $__internal_5c2293e4e1f631058ddc8ef7d57fe940b849d5caca23e6de9e21d86507b44835->leave($__internal_5c2293e4e1f631058ddc8ef7d57fe940b849d5caca23e6de9e21d86507b44835_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_034590d83ba4cc2b8e398427839e24ff4679d37b1e74d0d0f1d6d896b7e417d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034590d83ba4cc2b8e398427839e24ff4679d37b1e74d0d0f1d6d896b7e417d1->enter($__internal_034590d83ba4cc2b8e398427839e24ff4679d37b1e74d0d0f1d6d896b7e417d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d222a870dfb27ed3952809025aa75d4a602423b738b697f8e0aa8d8da99cb9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d222a870dfb27ed3952809025aa75d4a602423b738b697f8e0aa8d8da99cb9cf->enter($__internal_d222a870dfb27ed3952809025aa75d4a602423b738b697f8e0aa8d8da99cb9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d222a870dfb27ed3952809025aa75d4a602423b738b697f8e0aa8d8da99cb9cf->leave($__internal_d222a870dfb27ed3952809025aa75d4a602423b738b697f8e0aa8d8da99cb9cf_prof);

        
        $__internal_034590d83ba4cc2b8e398427839e24ff4679d37b1e74d0d0f1d6d896b7e417d1->leave($__internal_034590d83ba4cc2b8e398427839e24ff4679d37b1e74d0d0f1d6d896b7e417d1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_da5eb4c82711cd078af69a6f91e60200cf5873978f5c7217eb40891896181f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5eb4c82711cd078af69a6f91e60200cf5873978f5c7217eb40891896181f16->enter($__internal_da5eb4c82711cd078af69a6f91e60200cf5873978f5c7217eb40891896181f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bbfa079e1dfd57623415536163c2d86bffd197fde0d37215a4e0cbbef79d68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbfa079e1dfd57623415536163c2d86bffd197fde0d37215a4e0cbbef79d68f->enter($__internal_6bbfa079e1dfd57623415536163c2d86bffd197fde0d37215a4e0cbbef79d68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6bbfa079e1dfd57623415536163c2d86bffd197fde0d37215a4e0cbbef79d68f->leave($__internal_6bbfa079e1dfd57623415536163c2d86bffd197fde0d37215a4e0cbbef79d68f_prof);

        
        $__internal_da5eb4c82711cd078af69a6f91e60200cf5873978f5c7217eb40891896181f16->leave($__internal_da5eb4c82711cd078af69a6f91e60200cf5873978f5c7217eb40891896181f16_prof);

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
