<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c3881a6fa7557b791aa1babc7bc910e31dfc70ab8e11957f533b906e774406c4 extends Twig_Template
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
        $__internal_6eef698fc26b5ee492543f6174d83b68935cb1aa5c207336c238c1a9a0a1f8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eef698fc26b5ee492543f6174d83b68935cb1aa5c207336c238c1a9a0a1f8c8->enter($__internal_6eef698fc26b5ee492543f6174d83b68935cb1aa5c207336c238c1a9a0a1f8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_86d41f4eb6594f14cef111d2e8adf6ddd1768b6fcb66159500f0eba7fa3f1fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d41f4eb6594f14cef111d2e8adf6ddd1768b6fcb66159500f0eba7fa3f1fbd->enter($__internal_86d41f4eb6594f14cef111d2e8adf6ddd1768b6fcb66159500f0eba7fa3f1fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6eef698fc26b5ee492543f6174d83b68935cb1aa5c207336c238c1a9a0a1f8c8->leave($__internal_6eef698fc26b5ee492543f6174d83b68935cb1aa5c207336c238c1a9a0a1f8c8_prof);

        
        $__internal_86d41f4eb6594f14cef111d2e8adf6ddd1768b6fcb66159500f0eba7fa3f1fbd->leave($__internal_86d41f4eb6594f14cef111d2e8adf6ddd1768b6fcb66159500f0eba7fa3f1fbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
