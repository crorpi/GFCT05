<?php

/* GFCTBundle:Empresa:msgExito.html.twig */
class __TwigTemplate_d85424007bc18b3c89148d00f2a3fb56c29e84c1f4bbf172a2c0f194a4904053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tiitle' => array($this, 'block_tiitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8edc4528c7b4bc39a4746fff3d6bbea2b3a8d58d0e7e8496b89fc4d076fb2cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edc4528c7b4bc39a4746fff3d6bbea2b3a8d58d0e7e8496b89fc4d076fb2cea->enter($__internal_8edc4528c7b4bc39a4746fff3d6bbea2b3a8d58d0e7e8496b89fc4d076fb2cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Empresa:msgExito.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
\t<title>";
        // line 6
        $this->displayBlock('tiitle', $context, $blocks);
        echo "</title>
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
  La base empresa ha sido añadida con exito a la base de datos.
</body>
</html>";
        
        $__internal_8edc4528c7b4bc39a4746fff3d6bbea2b3a8d58d0e7e8496b89fc4d076fb2cea->leave($__internal_8edc4528c7b4bc39a4746fff3d6bbea2b3a8d58d0e7e8496b89fc4d076fb2cea_prof);

    }

    // line 6
    public function block_tiitle($context, array $blocks = array())
    {
        $__internal_d28f0fe7b13e0aa5e1385bd2b086738d831af06e1ef4a41adf7c1501d8e2ddf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28f0fe7b13e0aa5e1385bd2b086738d831af06e1ef4a41adf7c1501d8e2ddf4->enter($__internal_d28f0fe7b13e0aa5e1385bd2b086738d831af06e1ef4a41adf7c1501d8e2ddf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Empresa:msgExito.html.twig"));

        echo "Base de datos ha sido creada";
        
        $__internal_d28f0fe7b13e0aa5e1385bd2b086738d831af06e1ef4a41adf7c1501d8e2ddf4->leave($__internal_d28f0fe7b13e0aa5e1385bd2b086738d831af06e1ef4a41adf7c1501d8e2ddf4_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a62d7741141576ef13a25354c1bd125b23a6fcf6cda8463e109a1e9f77a0fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a62d7741141576ef13a25354c1bd125b23a6fcf6cda8463e109a1e9f77a0fba->enter($__internal_7a62d7741141576ef13a25354c1bd125b23a6fcf6cda8463e109a1e9f77a0fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Empresa:msgExito.html.twig"));

        // line 8
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_7a62d7741141576ef13a25354c1bd125b23a6fcf6cda8463e109a1e9f77a0fba->leave($__internal_7a62d7741141576ef13a25354c1bd125b23a6fcf6cda8463e109a1e9f77a0fba_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Empresa:msgExito.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  60 => 7,  48 => 6,  37 => 10,  35 => 7,  31 => 6,  24 => 1,);
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
  <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
\t<title>{% block tiitle %}Base de datos ha sido creada{% endblock %}</title>
  {% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/style.css')}}\">
  {% endblock %}
</head>
<body>
  La base empresa ha sido añadida con exito a la base de datos.
</body>
</html>", "GFCTBundle:Empresa:msgExito.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Empresa/msgExito.html.twig");
    }
}
