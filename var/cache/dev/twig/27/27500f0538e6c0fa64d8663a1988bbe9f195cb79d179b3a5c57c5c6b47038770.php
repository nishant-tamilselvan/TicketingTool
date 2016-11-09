<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e519c47d300103e26566cb195673dd99e2088e1e44cdd1b6abc17556f474542b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2fe86fc7de8678a1b3ef63b54d1daac4c9e305ecdf89cf97719db7f4a471516d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe86fc7de8678a1b3ef63b54d1daac4c9e305ecdf89cf97719db7f4a471516d->enter($__internal_2fe86fc7de8678a1b3ef63b54d1daac4c9e305ecdf89cf97719db7f4a471516d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe86fc7de8678a1b3ef63b54d1daac4c9e305ecdf89cf97719db7f4a471516d->leave($__internal_2fe86fc7de8678a1b3ef63b54d1daac4c9e305ecdf89cf97719db7f4a471516d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e3688ac8f33207123209d8a96bfa7b4c3f8d83bbd240128f47a26ea5a003e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3688ac8f33207123209d8a96bfa7b4c3f8d83bbd240128f47a26ea5a003e39->enter($__internal_0e3688ac8f33207123209d8a96bfa7b4c3f8d83bbd240128f47a26ea5a003e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0e3688ac8f33207123209d8a96bfa7b4c3f8d83bbd240128f47a26ea5a003e39->leave($__internal_0e3688ac8f33207123209d8a96bfa7b4c3f8d83bbd240128f47a26ea5a003e39_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_63367f784b4f0949c28865e6cf4df425a38d74d0a61e4e5fe10378527ab7eb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63367f784b4f0949c28865e6cf4df425a38d74d0a61e4e5fe10378527ab7eb19->enter($__internal_63367f784b4f0949c28865e6cf4df425a38d74d0a61e4e5fe10378527ab7eb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63367f784b4f0949c28865e6cf4df425a38d74d0a61e4e5fe10378527ab7eb19->leave($__internal_63367f784b4f0949c28865e6cf4df425a38d74d0a61e4e5fe10378527ab7eb19_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47a14db30668c86b5c602d02268af65528cbd3c146e31774daba135c0a059f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a14db30668c86b5c602d02268af65528cbd3c146e31774daba135c0a059f53->enter($__internal_47a14db30668c86b5c602d02268af65528cbd3c146e31774daba135c0a059f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_47a14db30668c86b5c602d02268af65528cbd3c146e31774daba135c0a059f53->leave($__internal_47a14db30668c86b5c602d02268af65528cbd3c146e31774daba135c0a059f53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/event_management/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
