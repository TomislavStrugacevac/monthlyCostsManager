<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5ddba719c9c84dc2f1630e2c3acede31e8f782f793cd37e0132f1ab76dae1f2a extends Twig_Template
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
        $__internal_61aa63c6197cfd9165b833d7db791ac08c552ecb8cdda6551e5238a6c3007f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61aa63c6197cfd9165b833d7db791ac08c552ecb8cdda6551e5238a6c3007f13->enter($__internal_61aa63c6197cfd9165b833d7db791ac08c552ecb8cdda6551e5238a6c3007f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_10d08f4db781fcbb69cadec9474ba536441b361423dbec0ce7dab0ad35f311ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d08f4db781fcbb69cadec9474ba536441b361423dbec0ce7dab0ad35f311ed->enter($__internal_10d08f4db781fcbb69cadec9474ba536441b361423dbec0ce7dab0ad35f311ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_61aa63c6197cfd9165b833d7db791ac08c552ecb8cdda6551e5238a6c3007f13->leave($__internal_61aa63c6197cfd9165b833d7db791ac08c552ecb8cdda6551e5238a6c3007f13_prof);

        
        $__internal_10d08f4db781fcbb69cadec9474ba536441b361423dbec0ce7dab0ad35f311ed->leave($__internal_10d08f4db781fcbb69cadec9474ba536441b361423dbec0ce7dab0ad35f311ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\WebstormProjects\\rezije\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
