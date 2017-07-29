<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_45491dec442d3cd38ca54e618116e4503bda3b7204917248377e2fbfc0a7dea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04f048a995409eefe9bb0299695fabd89b1f7ca44f7c185bdd8377133438dd44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f048a995409eefe9bb0299695fabd89b1f7ca44f7c185bdd8377133438dd44->enter($__internal_04f048a995409eefe9bb0299695fabd89b1f7ca44f7c185bdd8377133438dd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_051d6c7854be7a6e037512393dca4f110c8225cc65c9a99cfa820463a80038fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051d6c7854be7a6e037512393dca4f110c8225cc65c9a99cfa820463a80038fd->enter($__internal_051d6c7854be7a6e037512393dca4f110c8225cc65c9a99cfa820463a80038fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_04f048a995409eefe9bb0299695fabd89b1f7ca44f7c185bdd8377133438dd44->leave($__internal_04f048a995409eefe9bb0299695fabd89b1f7ca44f7c185bdd8377133438dd44_prof);

        
        $__internal_051d6c7854be7a6e037512393dca4f110c8225cc65c9a99cfa820463a80038fd->leave($__internal_051d6c7854be7a6e037512393dca4f110c8225cc65c9a99cfa820463a80038fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
