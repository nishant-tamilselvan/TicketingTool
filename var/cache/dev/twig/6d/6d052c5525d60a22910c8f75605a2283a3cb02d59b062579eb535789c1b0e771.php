<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d68a911892aba532dbf03ccaf7e58044f6caa3cc41491bc66ad5c56e0553b736 extends Twig_Template
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
        $__internal_f2f9f90b30c468239771cb494e2eb0bcd9fd1d179833a6b3258feb11716d590a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f9f90b30c468239771cb494e2eb0bcd9fd1d179833a6b3258feb11716d590a->enter($__internal_f2f9f90b30c468239771cb494e2eb0bcd9fd1d179833a6b3258feb11716d590a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f9f90b30c468239771cb494e2eb0bcd9fd1d179833a6b3258feb11716d590a->leave($__internal_f2f9f90b30c468239771cb494e2eb0bcd9fd1d179833a6b3258feb11716d590a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8390350b1df4db0cfb565bff8f5d5d4ba257749277612ba06e813e6e2f53058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8390350b1df4db0cfb565bff8f5d5d4ba257749277612ba06e813e6e2f53058->enter($__internal_d8390350b1df4db0cfb565bff8f5d5d4ba257749277612ba06e813e6e2f53058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_d8390350b1df4db0cfb565bff8f5d5d4ba257749277612ba06e813e6e2f53058->leave($__internal_d8390350b1df4db0cfb565bff8f5d5d4ba257749277612ba06e813e6e2f53058_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c88d8eb9802708ceb95659975269540aa91f4c71d9b9f71f4b925ee43f7e151f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88d8eb9802708ceb95659975269540aa91f4c71d9b9f71f4b925ee43f7e151f->enter($__internal_c88d8eb9802708ceb95659975269540aa91f4c71d9b9f71f4b925ee43f7e151f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c88d8eb9802708ceb95659975269540aa91f4c71d9b9f71f4b925ee43f7e151f->leave($__internal_c88d8eb9802708ceb95659975269540aa91f4c71d9b9f71f4b925ee43f7e151f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a9ae84cc6ba1628617794b79031616edf0dc2e9e5bc51373ca3ddcef48af758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9ae84cc6ba1628617794b79031616edf0dc2e9e5bc51373ca3ddcef48af758->enter($__internal_7a9ae84cc6ba1628617794b79031616edf0dc2e9e5bc51373ca3ddcef48af758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7a9ae84cc6ba1628617794b79031616edf0dc2e9e5bc51373ca3ddcef48af758->leave($__internal_7a9ae84cc6ba1628617794b79031616edf0dc2e9e5bc51373ca3ddcef48af758_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/event_management/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
