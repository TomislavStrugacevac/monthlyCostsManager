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
        $__internal_051cdb6b9526a30e4804cb1c384bca24e1a3b628fb79332e13b34e00ff8f5da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051cdb6b9526a30e4804cb1c384bca24e1a3b628fb79332e13b34e00ff8f5da5->enter($__internal_051cdb6b9526a30e4804cb1c384bca24e1a3b628fb79332e13b34e00ff8f5da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_64c0524f161a548c45e233344d9596af05e4e4159a17486b68db733d49d01db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c0524f161a548c45e233344d9596af05e4e4159a17486b68db733d49d01db2->enter($__internal_64c0524f161a548c45e233344d9596af05e4e4159a17486b68db733d49d01db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
                    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Link</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                            </li>
                        </ul>
                        <form class=\"form-inline my-2 my-lg-0\">
                            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </nav>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "            <!-- Jquery-->
            <script
              src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
              integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
              crossorigin=\"anonymous\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javacss/jscript/jscript.js"), "html", null, true);
        echo "\"></script>

          </div>
    </body>
</html>
";
        
        $__internal_051cdb6b9526a30e4804cb1c384bca24e1a3b628fb79332e13b34e00ff8f5da5->leave($__internal_051cdb6b9526a30e4804cb1c384bca24e1a3b628fb79332e13b34e00ff8f5da5_prof);

        
        $__internal_64c0524f161a548c45e233344d9596af05e4e4159a17486b68db733d49d01db2->leave($__internal_64c0524f161a548c45e233344d9596af05e4e4159a17486b68db733d49d01db2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e48b214b974285727ad857fb5050e8aa13ac1b889a88f49e85e421cd6b2a979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e48b214b974285727ad857fb5050e8aa13ac1b889a88f49e85e421cd6b2a979->enter($__internal_2e48b214b974285727ad857fb5050e8aa13ac1b889a88f49e85e421cd6b2a979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0f127bfb157aa1bcf1ebb0511f3857552875b0347cb7833927ad10f355cc855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f127bfb157aa1bcf1ebb0511f3857552875b0347cb7833927ad10f355cc855->enter($__internal_b0f127bfb157aa1bcf1ebb0511f3857552875b0347cb7833927ad10f355cc855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0f127bfb157aa1bcf1ebb0511f3857552875b0347cb7833927ad10f355cc855->leave($__internal_b0f127bfb157aa1bcf1ebb0511f3857552875b0347cb7833927ad10f355cc855_prof);

        
        $__internal_2e48b214b974285727ad857fb5050e8aa13ac1b889a88f49e85e421cd6b2a979->leave($__internal_2e48b214b974285727ad857fb5050e8aa13ac1b889a88f49e85e421cd6b2a979_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_061e36d368e61c2eacc36dc4cf92fa0165d91a04c2a25658765d0158a5c33d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061e36d368e61c2eacc36dc4cf92fa0165d91a04c2a25658765d0158a5c33d3a->enter($__internal_061e36d368e61c2eacc36dc4cf92fa0165d91a04c2a25658765d0158a5c33d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d771fae24d09c326dd69037674da9ac1a63252c4530e1d747d544956aad001db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d771fae24d09c326dd69037674da9ac1a63252c4530e1d747d544956aad001db->enter($__internal_d771fae24d09c326dd69037674da9ac1a63252c4530e1d747d544956aad001db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d771fae24d09c326dd69037674da9ac1a63252c4530e1d747d544956aad001db->leave($__internal_d771fae24d09c326dd69037674da9ac1a63252c4530e1d747d544956aad001db_prof);

        
        $__internal_061e36d368e61c2eacc36dc4cf92fa0165d91a04c2a25658765d0158a5c33d3a->leave($__internal_061e36d368e61c2eacc36dc4cf92fa0165d91a04c2a25658765d0158a5c33d3a_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_98cc33fdc2c35a36ecbc356dfa6e06401528a21d7a82a711ffeaa25b6c1632c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cc33fdc2c35a36ecbc356dfa6e06401528a21d7a82a711ffeaa25b6c1632c2->enter($__internal_98cc33fdc2c35a36ecbc356dfa6e06401528a21d7a82a711ffeaa25b6c1632c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f349efdf5a1fdfc6813517312119edd4ab3cafa6b35d8b93d3df4284ec2ea783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f349efdf5a1fdfc6813517312119edd4ab3cafa6b35d8b93d3df4284ec2ea783->enter($__internal_f349efdf5a1fdfc6813517312119edd4ab3cafa6b35d8b93d3df4284ec2ea783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f349efdf5a1fdfc6813517312119edd4ab3cafa6b35d8b93d3df4284ec2ea783->leave($__internal_f349efdf5a1fdfc6813517312119edd4ab3cafa6b35d8b93d3df4284ec2ea783_prof);

        
        $__internal_98cc33fdc2c35a36ecbc356dfa6e06401528a21d7a82a711ffeaa25b6c1632c2->leave($__internal_98cc33fdc2c35a36ecbc356dfa6e06401528a21d7a82a711ffeaa25b6c1632c2_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2cf707eb542fc0af9de3743ca37b03df55d876e977aeb18fb03ce98eb75beefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf707eb542fc0af9de3743ca37b03df55d876e977aeb18fb03ce98eb75beefc->enter($__internal_2cf707eb542fc0af9de3743ca37b03df55d876e977aeb18fb03ce98eb75beefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e0aa8077a8eac2230ea15a2dd6434e491e3e724d8c059c6a757ed8f340590500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0aa8077a8eac2230ea15a2dd6434e491e3e724d8c059c6a757ed8f340590500->enter($__internal_e0aa8077a8eac2230ea15a2dd6434e491e3e724d8c059c6a757ed8f340590500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e0aa8077a8eac2230ea15a2dd6434e491e3e724d8c059c6a757ed8f340590500->leave($__internal_e0aa8077a8eac2230ea15a2dd6434e491e3e724d8c059c6a757ed8f340590500_prof);

        
        $__internal_2cf707eb542fc0af9de3743ca37b03df55d876e977aeb18fb03ce98eb75beefc->leave($__internal_2cf707eb542fc0af9de3743ca37b03df55d876e977aeb18fb03ce98eb75beefc_prof);

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
        return array (  170 => 43,  153 => 42,  136 => 6,  118 => 5,  102 => 51,  93 => 44,  90 => 43,  88 => 42,  85 => 41,  58 => 16,  56 => 15,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Link</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                            </li>
                        </ul>
                        <form class=\"form-inline my-2 my-lg-0\">
                            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
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
