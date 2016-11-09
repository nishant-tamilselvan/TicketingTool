<?php

/* events/create.html.twig */
class __TwigTemplate_c44eaef96f14af777b01b5df1a4461e37042d940639922535405350ed00de654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/create.html.twig", 1);
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
        $__internal_38f64f15fab442f443b89bf6d906d5fd1999beaf5f923624115782f5b9c0c4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f64f15fab442f443b89bf6d906d5fd1999beaf5f923624115782f5b9c0c4e3->enter($__internal_38f64f15fab442f443b89bf6d906d5fd1999beaf5f923624115782f5b9c0c4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f64f15fab442f443b89bf6d906d5fd1999beaf5f923624115782f5b9c0c4e3->leave($__internal_38f64f15fab442f443b89bf6d906d5fd1999beaf5f923624115782f5b9c0c4e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_840b26abb156fa608a79cb6a32c907aa7dec58c06f6bfa00d5295652c3e75db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840b26abb156fa608a79cb6a32c907aa7dec58c06f6bfa00d5295652c3e75db6->enter($__internal_840b26abb156fa608a79cb6a32c907aa7dec58c06f6bfa00d5295652c3e75db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "events/create.html.twig"));

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
\t\t<a href='/events'><button type=\"button\" class=\"btn btn-sm btn-default pull-right\"><i class=\"fa fa-home\"></i> Events Home</button></a>

      <div class=\"main-header\">
        <h2>Create Event / Ticket</h2>
        <em>create Event / ticket form</em>
      </div>

      <div class=\"main-content\">


        <div class=\"row\">

          <div class=\"col-md-8\">


\t\t\t\t\t";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t";
        // line 38
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
        
        $__internal_840b26abb156fa608a79cb6a32c907aa7dec58c06f6bfa00d5295652c3e75db6->leave($__internal_840b26abb156fa608a79cb6a32c907aa7dec58c06f6bfa00d5295652c3e75db6_prof);

    }

    public function getTemplateName()
    {
        return "events/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  78 => 37,  74 => 36,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t<a href='/events'><button type=\"button\" class=\"btn btn-sm btn-default pull-right\"><i class=\"fa fa-home\"></i> Events Home</button></a>

      <div class=\"main-header\">
        <h2>Create Event / Ticket</h2>
        <em>create Event / ticket form</em>
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
", "events/create.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/event_management/app/Resources/views/events/create.html.twig");
    }
}
