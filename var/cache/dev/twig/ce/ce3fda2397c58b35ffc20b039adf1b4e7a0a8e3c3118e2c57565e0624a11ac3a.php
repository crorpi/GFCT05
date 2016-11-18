<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3ad28a99a80950a34cb10efb8b9cd9e3695fe5e52d4f2dec21757f77d6349e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9642865a8b5f3fbc38cbb54e0dfae8dad03fdcdba0b643cdbec155cf85441481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9642865a8b5f3fbc38cbb54e0dfae8dad03fdcdba0b643cdbec155cf85441481->enter($__internal_9642865a8b5f3fbc38cbb54e0dfae8dad03fdcdba0b643cdbec155cf85441481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9642865a8b5f3fbc38cbb54e0dfae8dad03fdcdba0b643cdbec155cf85441481->leave($__internal_9642865a8b5f3fbc38cbb54e0dfae8dad03fdcdba0b643cdbec155cf85441481_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28ce75de53001f9a76fb31b1c18efb55e3d9c2b63985773e64a2237518b27497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ce75de53001f9a76fb31b1c18efb55e3d9c2b63985773e64a2237518b27497->enter($__internal_28ce75de53001f9a76fb31b1c18efb55e3d9c2b63985773e64a2237518b27497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_28ce75de53001f9a76fb31b1c18efb55e3d9c2b63985773e64a2237518b27497->leave($__internal_28ce75de53001f9a76fb31b1c18efb55e3d9c2b63985773e64a2237518b27497_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_760e7d33a77fc5eba685973f39f09fbd70eabfb98a58e7d52658285c673b970d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760e7d33a77fc5eba685973f39f09fbd70eabfb98a58e7d52658285c673b970d->enter($__internal_760e7d33a77fc5eba685973f39f09fbd70eabfb98a58e7d52658285c673b970d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_760e7d33a77fc5eba685973f39f09fbd70eabfb98a58e7d52658285c673b970d->leave($__internal_760e7d33a77fc5eba685973f39f09fbd70eabfb98a58e7d52658285c673b970d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b0496afcef2858124f01897bb5ae8ea28081bf6b576715fed599bea10477ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0496afcef2858124f01897bb5ae8ea28081bf6b576715fed599bea10477ff1->enter($__internal_2b0496afcef2858124f01897bb5ae8ea28081bf6b576715fed599bea10477ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b0496afcef2858124f01897bb5ae8ea28081bf6b576715fed599bea10477ff1->leave($__internal_2b0496afcef2858124f01897bb5ae8ea28081bf6b576715fed599bea10477ff1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
