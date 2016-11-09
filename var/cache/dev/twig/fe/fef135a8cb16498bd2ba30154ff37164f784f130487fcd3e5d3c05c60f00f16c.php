<?php

/* events/details.html.twig */
class __TwigTemplate_e5d20d560880848b1393b736372d7cff92f3f3ba12a1f4397381b41b8bee103b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f068798d31fbe82d120c4b49fada341b4d78e156ec20b8db16cd1853ddbff9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f068798d31fbe82d120c4b49fada341b4d78e156ec20b8db16cd1853ddbff9a7->enter($__internal_f068798d31fbe82d120c4b49fada341b4d78e156ec20b8db16cd1853ddbff9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f068798d31fbe82d120c4b49fada341b4d78e156ec20b8db16cd1853ddbff9a7->leave($__internal_f068798d31fbe82d120c4b49fada341b4d78e156ec20b8db16cd1853ddbff9a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58fbc4434c0d44300db368fd45b473715f862aceb073c0d1bd4d8a74d2212784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fbc4434c0d44300db368fd45b473715f862aceb073c0d1bd4d8a74d2212784->enter($__internal_58fbc4434c0d44300db368fd45b473715f862aceb073c0d1bd4d8a74d2212784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "events/details.html.twig"));

        // line 4
        echo "
\t<!-- MAIN CONTENT WRAPPER -->
\t<div id=\"main-content-wrapper\" class=\"content-wrapper \">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><i class=\"fa fa-home\"></i><a href=\"#\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Dashboard</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>
\t\t<!-- main -->
\t\t<div class=\"content\">
\t\t\t<div class=\"main-header\">
\t\t\t\t<h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eventlist"]) ? $context["eventlist"] : $this->getContext($context, "eventlist")), "subject", array()), "html", null, true);
        echo "</h2>
\t\t\t\t<em>Subject / Name</em>
\t\t\t</div>
\t\t\t<div class=\"main-content\">

\t\t\t\t<div class=\"project-section general-info\">
\t\t\t\t\t\t\t\t<h3>General Info | Description</h3>
\t\t\t\t\t\t\t\t<a href='/events'><button type=\"button\" class=\"btn btn-sm btn-default pull-right\"><i class=\"fa fa-home\"></i> Events Home</button></a>
\t\t\t\t\t\t\t\t<a href='/events/edit/";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eventlist"]) ? $context["eventlist"] : $this->getContext($context, "eventlist")), "id", array()), "html", null, true);
        echo "'><button type=\"button\" class=\"btn btn-sm btn-primary pull-right\"><i class=\"fa fa-edit\"></i> Edit Project</button></a>

\t\t\t\t\t\t\t\t<p> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eventlist"]) ? $context["eventlist"] : $this->getContext($context, "eventlist")), "message", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t\t\t\t\t\t\t\t<dt>Date:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["eventlist"]) ? $context["eventlist"] : $this->getContext($context, "eventlist")), "date", array())), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t\t\t<dt>category:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eventlist"]) ? $context["eventlist"] : $this->getContext($context, "eventlist")), "category", array()), "html", null, true);
        echo "</dd>

\t\t\t\t\t\t\t\t\t\t\t<dt>Priority:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd><span class=\"label label-danger\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eventlist"]) ? $context["eventlist"] : $this->getContext($context, "eventlist")), "priority", array()), "html", null, true);
        echo "</span></dd>
\t\t\t\t\t\t\t\t\t\t\t<dt>Status:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd><span class=\"label label-success\">ACTIVE</span></dd>

\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<!-- /main -->
\t\t<!-- FOOTER -->
\t\t<footer class=\"footer\">
\t\t\t&copy; 2016 Nishant Tamilselvan
\t\t</footer>
\t\t<!-- END FOOTER -->
\t</div>
\t<!-- END CONTENT WRAPPER -->

";
        
        $__internal_58fbc4434c0d44300db368fd45b473715f862aceb073c0d1bd4d8a74d2212784->leave($__internal_58fbc4434c0d44300db368fd45b473715f862aceb073c0d1bd4d8a74d2212784_prof);

    }

    public function getTemplateName()
    {
        return "events/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  87 => 37,  82 => 35,  74 => 30,  69 => 28,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

\t<!-- MAIN CONTENT WRAPPER -->
\t<div id=\"main-content-wrapper\" class=\"content-wrapper \">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><i class=\"fa fa-home\"></i><a href=\"#\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Dashboard</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>
\t\t<!-- main -->
\t\t<div class=\"content\">
\t\t\t<div class=\"main-header\">
\t\t\t\t<h2>{{eventlist.subject}}</h2>
\t\t\t\t<em>Subject / Name</em>
\t\t\t</div>
\t\t\t<div class=\"main-content\">

\t\t\t\t<div class=\"project-section general-info\">
\t\t\t\t\t\t\t\t<h3>General Info | Description</h3>
\t\t\t\t\t\t\t\t<a href='/events'><button type=\"button\" class=\"btn btn-sm btn-default pull-right\"><i class=\"fa fa-home\"></i> Events Home</button></a>
\t\t\t\t\t\t\t\t<a href='/events/edit/{{eventlist.id}}'><button type=\"button\" class=\"btn btn-sm btn-primary pull-right\"><i class=\"fa fa-edit\"></i> Edit Project</button></a>

\t\t\t\t\t\t\t\t<p> {{eventlist.message}}</p>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t\t\t\t\t\t\t\t<dt>Date:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>{{eventlist.date|date}}</dd>
\t\t\t\t\t\t\t\t\t\t\t<dt>category:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>{{eventlist.category}}</dd>

\t\t\t\t\t\t\t\t\t\t\t<dt>Priority:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd><span class=\"label label-danger\">{{eventlist.priority}}</span></dd>
\t\t\t\t\t\t\t\t\t\t\t<dt>Status:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd><span class=\"label label-success\">ACTIVE</span></dd>

\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<!-- /main -->
\t\t<!-- FOOTER -->
\t\t<footer class=\"footer\">
\t\t\t&copy; 2016 Nishant Tamilselvan
\t\t</footer>
\t\t<!-- END FOOTER -->
\t</div>
\t<!-- END CONTENT WRAPPER -->

{% endblock %}
", "events/details.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/event_management/app/Resources/views/events/details.html.twig");
    }
}
