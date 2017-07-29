<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5dc4fa9c0d9f981e7d355d75f82d9a8258f8735362b4f39c0cf722608947d32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b21800c101c85fbdbd184a11f567a27863cff535c6c2713c34ede7d4e6b1245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b21800c101c85fbdbd184a11f567a27863cff535c6c2713c34ede7d4e6b1245->enter($__internal_0b21800c101c85fbdbd184a11f567a27863cff535c6c2713c34ede7d4e6b1245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_2d170ab2c3428c744da0a5afcb664c00cb52c699e43aa9bdc0e6f12d87fc527f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d170ab2c3428c744da0a5afcb664c00cb52c699e43aa9bdc0e6f12d87fc527f->enter($__internal_2d170ab2c3428c744da0a5afcb664c00cb52c699e43aa9bdc0e6f12d87fc527f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b21800c101c85fbdbd184a11f567a27863cff535c6c2713c34ede7d4e6b1245->leave($__internal_0b21800c101c85fbdbd184a11f567a27863cff535c6c2713c34ede7d4e6b1245_prof);

        
        $__internal_2d170ab2c3428c744da0a5afcb664c00cb52c699e43aa9bdc0e6f12d87fc527f->leave($__internal_2d170ab2c3428c744da0a5afcb664c00cb52c699e43aa9bdc0e6f12d87fc527f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_887c827d9ce7f4f66b5cbd82a69d4e25c0d5350646f65f96d5bc20ddea314e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887c827d9ce7f4f66b5cbd82a69d4e25c0d5350646f65f96d5bc20ddea314e7d->enter($__internal_887c827d9ce7f4f66b5cbd82a69d4e25c0d5350646f65f96d5bc20ddea314e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7d177b1da729e482e5c6e48283b0206a8402bc57b0ee3fa7bdb114b597300ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d177b1da729e482e5c6e48283b0206a8402bc57b0ee3fa7bdb114b597300ac->enter($__internal_e7d177b1da729e482e5c6e48283b0206a8402bc57b0ee3fa7bdb114b597300ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e7d177b1da729e482e5c6e48283b0206a8402bc57b0ee3fa7bdb114b597300ac->leave($__internal_e7d177b1da729e482e5c6e48283b0206a8402bc57b0ee3fa7bdb114b597300ac_prof);

        
        $__internal_887c827d9ce7f4f66b5cbd82a69d4e25c0d5350646f65f96d5bc20ddea314e7d->leave($__internal_887c827d9ce7f4f66b5cbd82a69d4e25c0d5350646f65f96d5bc20ddea314e7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ba306c0703ab08964346a48adb2f234f315f1678ba3dfdf0eaacda8249a7d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba306c0703ab08964346a48adb2f234f315f1678ba3dfdf0eaacda8249a7d7b->enter($__internal_5ba306c0703ab08964346a48adb2f234f315f1678ba3dfdf0eaacda8249a7d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_727f0790c432c8dd5c0ce17f0f6b2c95c5dd33c68d603a91a4558826619b188e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727f0790c432c8dd5c0ce17f0f6b2c95c5dd33c68d603a91a4558826619b188e->enter($__internal_727f0790c432c8dd5c0ce17f0f6b2c95c5dd33c68d603a91a4558826619b188e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_727f0790c432c8dd5c0ce17f0f6b2c95c5dd33c68d603a91a4558826619b188e->leave($__internal_727f0790c432c8dd5c0ce17f0f6b2c95c5dd33c68d603a91a4558826619b188e_prof);

        
        $__internal_5ba306c0703ab08964346a48adb2f234f315f1678ba3dfdf0eaacda8249a7d7b->leave($__internal_5ba306c0703ab08964346a48adb2f234f315f1678ba3dfdf0eaacda8249a7d7b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
