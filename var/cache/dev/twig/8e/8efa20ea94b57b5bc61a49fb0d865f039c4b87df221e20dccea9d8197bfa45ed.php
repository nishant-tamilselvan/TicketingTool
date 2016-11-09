<?php

/* events/index.html.twig */
class __TwigTemplate_942e59087fcd2a2095976c2bf861f6f674eac19d813929140b538ad06c810417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/index.html.twig", 1);
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
        $__internal_e67a2222346974efb98a657a8d9feb143984850c4bfc4660d113cc54a3cea17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67a2222346974efb98a657a8d9feb143984850c4bfc4660d113cc54a3cea17c->enter($__internal_e67a2222346974efb98a657a8d9feb143984850c4bfc4660d113cc54a3cea17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67a2222346974efb98a657a8d9feb143984850c4bfc4660d113cc54a3cea17c->leave($__internal_e67a2222346974efb98a657a8d9feb143984850c4bfc4660d113cc54a3cea17c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6509feb5e3c29c9413d78b598739d9452ccee52f5a79a83c86dadd0b3c6bf934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6509feb5e3c29c9413d78b598739d9452ccee52f5a79a83c86dadd0b3c6bf934->enter($__internal_6509feb5e3c29c9413d78b598739d9452ccee52f5a79a83c86dadd0b3c6bf934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "events/index.html.twig"));

        // line 4
        echo "
\t<!-- MAIN CONTENT WRAPPER -->
\t<div id=\"main-content-wrapper\" class=\"content-wrapper \">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><i class=\"fa fa-home\"></i><a href=\"/events\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Dashboard</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>
\t\t<!-- main -->
\t\t<div class=\"content\">
\t\t\t<div class=\"main-header\">
\t\t\t\t<h2>DASHBOARD</h2>
\t\t\t\t<em>Events / Tickets</em>
\t\t\t</div>
\t\t\t<div class=\"main-content\">


\t\t\t\t<!-- WIDGET TICKET TABLE -->
\t\t\t\t<div class=\"widget widget-table\">
\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t<h3><i class=\"fa fa-group\"></i> Events / Tickets</h3> <em>- List of pending Events / Tickets</em>
\t\t\t\t\t\t<div class=\"btn-group widget-header-toolbar\">
\t\t\t\t\t\t\t<a href=\"#\" title=\"Focus\" class=\"btn-borderless btn-focus\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" title=\"Expand/Collapse\" class=\"btn-borderless btn-toggle-expand\"><i class=\"fa fa-chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" title=\"Remove\" class=\"btn-borderless btn-remove\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-header-toolbar\">






\t\t\t\t\t\t\t<div class=\"label label-danger\"><i class=\"fa fa-warning\"></i> ";
        // line 42
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["eventslist"]) ? $context["eventslist"] : $this->getContext($context, "eventslist"))), "html", null, true);
        echo " Pending Events</div>



\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t<table id=\"ticket-table\" class=\"table table-sorting\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Number</th>
\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t<th>Category</th>

\t\t\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventslist"]) ? $context["eventslist"] : $this->getContext($context, "eventslist")));
        foreach ($context['_seq'] as $context["_key"] => $context["events"]) {
            // line 63
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><a href=\"/events/details/";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "id", array()), "html", null, true);
            echo "\">[#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "id", array()), "html", null, true);
            echo "]</a></td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["events"], "date", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "category", array()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t<td><a href=\"/events/details/";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "subject", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t\t<td><span class=\"label label-";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "priority", array()), "html", null, true);
            echo "\"># - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "priority", array()), "html", null, true);
            echo "</span></td>
\t\t\t\t\t\t\t\t\t<td><a class=\"btn btn-danger btn-sm\" href=\"/events/delete/";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["events"], "id", array()), "html", null, true);
            echo "\">Delete</a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['events'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- END WIDGET TICKET TABLE -->
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
        
        $__internal_6509feb5e3c29c9413d78b598739d9452ccee52f5a79a83c86dadd0b3c6bf934->leave($__internal_6509feb5e3c29c9413d78b598739d9452ccee52f5a79a83c86dadd0b3c6bf934_prof);

    }

    public function getTemplateName()
    {
        return "events/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 73,  137 => 70,  131 => 69,  125 => 68,  120 => 66,  116 => 65,  110 => 64,  107 => 63,  103 => 62,  80 => 42,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t\t\t\t<li><i class=\"fa fa-home\"></i><a href=\"/events\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Dashboard</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>
\t\t<!-- main -->
\t\t<div class=\"content\">
\t\t\t<div class=\"main-header\">
\t\t\t\t<h2>DASHBOARD</h2>
\t\t\t\t<em>Events / Tickets</em>
\t\t\t</div>
\t\t\t<div class=\"main-content\">


\t\t\t\t<!-- WIDGET TICKET TABLE -->
\t\t\t\t<div class=\"widget widget-table\">
\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t<h3><i class=\"fa fa-group\"></i> Events / Tickets</h3> <em>- List of pending Events / Tickets</em>
\t\t\t\t\t\t<div class=\"btn-group widget-header-toolbar\">
\t\t\t\t\t\t\t<a href=\"#\" title=\"Focus\" class=\"btn-borderless btn-focus\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" title=\"Expand/Collapse\" class=\"btn-borderless btn-toggle-expand\"><i class=\"fa fa-chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" title=\"Remove\" class=\"btn-borderless btn-remove\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-header-toolbar\">






\t\t\t\t\t\t\t<div class=\"label label-danger\"><i class=\"fa fa-warning\"></i> {{eventslist|length}} Pending Events</div>



\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t<table id=\"ticket-table\" class=\"table table-sorting\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Number</th>
\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t<th>Category</th>

\t\t\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{%  for events in eventslist %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><a href=\"/events/details/{{events.id}}\">[#{{events.id}}]</a></td>
\t\t\t\t\t\t\t\t\t<td>{{events.date|date}}</td>
\t\t\t\t\t\t\t\t\t<td>{{events.category}}</td>

\t\t\t\t\t\t\t\t\t<td><a href=\"/events/details/{{events.id}}\">{{events.subject}}</a></td>
\t\t\t\t\t\t\t\t\t<td><span class=\"label label-{{events.priority}}\"># - {{events.priority}}</span></td>
\t\t\t\t\t\t\t\t\t<td><a class=\"btn btn-danger btn-sm\" href=\"/events/delete/{{events.id}}\">Delete</a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- END WIDGET TICKET TABLE -->
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
", "events/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/event_management/app/Resources/views/events/index.html.twig");
    }
}
