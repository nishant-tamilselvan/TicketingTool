<?php

/* events/edit.html.twig */
class __TwigTemplate_6394e9d962f6eb38a60cfa48fb608c356ee489e0608781f8ca4160bdf8534941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/edit.html.twig", 1);
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
        $__internal_a89cd3a0958f998c647866d2da282c55009a8dd8e6a06f49d2575e9e66498be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89cd3a0958f998c647866d2da282c55009a8dd8e6a06f49d2575e9e66498be9->enter($__internal_a89cd3a0958f998c647866d2da282c55009a8dd8e6a06f49d2575e9e66498be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89cd3a0958f998c647866d2da282c55009a8dd8e6a06f49d2575e9e66498be9->leave($__internal_a89cd3a0958f998c647866d2da282c55009a8dd8e6a06f49d2575e9e66498be9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f2dd6a94685e68ae78fef5ec789736b00d514e0e78f6c139a8338ffe1ab451c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2dd6a94685e68ae78fef5ec789736b00d514e0e78f6c139a8338ffe1ab451c->enter($__internal_0f2dd6a94685e68ae78fef5ec789736b00d514e0e78f6c139a8338ffe1ab451c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "events/edit.html.twig"));

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
    <!-- main -->
    <div class=\"content\">
    <a href='/events'><button type=\"button\" class=\"btn btn-sm btn-default pull-right\"><i class=\"fa fa-home\"></i> Events Home</button></a>
    <a href='/events/details/";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eventlist"]) ? $context["eventlist"] : $this->getContext($context, "eventlist")), "id", array()), "html", null, true);
        echo "'><button type=\"button\" class=\"btn btn-sm btn-primary pull-right\"><i class=\"fa fa-external-link\"></i> Back to Event</button></a>

      <div class=\"main-header\">
        <h2>Update Event / Ticket</h2>
        <em>Update and Save Events</em>
      </div>
      <div class=\"main-content\">


        <div class=\"row\">

          <div class=\"col-md-8\">


\t\t\t\t\t";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


          </div>
        </div>
      </div>
    </div>
    <!-- /main -->
\t\t<!-- /main -->
\t\t<!-- FOOTER -->
\t\t<footer class=\"footer\">
\t\t\t&copy; 2016 Nishant Tamilselvan
\t\t</footer>
\t\t<!-- END FOOTER -->
\t</div>
\t<!-- END CONTENT WRAPPER -->


";
        
        $__internal_0f2dd6a94685e68ae78fef5ec789736b00d514e0e78f6c139a8338ffe1ab451c->leave($__internal_0f2dd6a94685e68ae78fef5ec789736b00d514e0e78f6c139a8338ffe1ab451c_prof);

    }

    public function getTemplateName()
    {
        return "events/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  80 => 36,  76 => 35,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
    <!-- main -->
    <div class=\"content\">
    <a href='/events'><button type=\"button\" class=\"btn btn-sm btn-default pull-right\"><i class=\"fa fa-home\"></i> Events Home</button></a>
    <a href='/events/details/{{eventlist.id}}'><button type=\"button\" class=\"btn btn-sm btn-primary pull-right\"><i class=\"fa fa-external-link\"></i> Back to Event</button></a>

      <div class=\"main-header\">
        <h2>Update Event / Ticket</h2>
        <em>Update and Save Events</em>
      </div>
      <div class=\"main-content\">


        <div class=\"row\">

          <div class=\"col-md-8\">


\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t{{form_widget(form)}}
\t\t\t\t\t{{form_end(form)}}


          </div>
        </div>
      </div>
    </div>
    <!-- /main -->
\t\t<!-- /main -->
\t\t<!-- FOOTER -->
\t\t<footer class=\"footer\">
\t\t\t&copy; 2016 Nishant Tamilselvan
\t\t</footer>
\t\t<!-- END FOOTER -->
\t</div>
\t<!-- END CONTENT WRAPPER -->


{% endblock %}
", "events/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/event_management/app/Resources/views/events/edit.html.twig");
    }
}
