<?php

/* base.html.twig */
class __TwigTemplate_9439ac3e7040d1ed75f26765e9baa91fa6a8125088fc56e95db019b75206971e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e86258f47fca8563b85661bfae811d3cf1ec82f8a5ba9ae0589af32acae5df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e86258f47fca8563b85661bfae811d3cf1ec82f8a5ba9ae0589af32acae5df9->enter($__internal_5e86258f47fca8563b85661bfae811d3cf1ec82f8a5ba9ae0589af32acae5df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 9 ]><html class=\"ie ie9\" lang=\"en\" class=\"no-js\"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->

    <head>
      <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
      <meta name=\"description\" content=\"Eventmngr - An Event Manager\">
      <meta name=\"author\" content=\"Nishant Tamilselvan\">

      ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"sidebar-fixed topnav-fixed dashboard forms-inplace-editing\">

      <div id=\"wrapper\" class=\"wrapper\">
      \t<!-- TOP BAR -->
      \t<div class=\"top-bar navbar-fixed-top\">
      \t\t<div class=\"container\">
      \t\t\t<div class=\"clearfix\">
      \t\t\t\t<a href=\"#\" class=\"pull-left toggle-sidebar-collapse\"><i class=\"fa fa-bars\"></i></a>
      \t\t\t\t<!-- logo -->
      \t\t\t\t<div class=\"pull-left left logo\">
      \t\t\t\t\t<a href=\"/events\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/img/Event_Manager_logo.png"), "html", null, true);
        echo "\" alt=\"KingAdmin - Admin Dashboard\" /></a>
      \t\t\t\t\t<h1 class=\"sr-only\">Event Manager Dashboard</h1>
      \t\t\t\t</div>
      \t\t\t\t<!-- end logo -->
      \t\t\t\t<div class=\"pull-right right\">
      \t\t\t\t\t<!-- search box -->
      \t\t\t\t\t<div class=\"searchbox\">
      \t\t\t\t\t\t<div id=\"tour-searchbox\" class=\"input-group\">
      \t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"enter keyword here...\">
      \t\t\t\t\t\t\t<span class=\"input-group-btn\">
      \t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button>
      \t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t</div>
      \t\t\t\t\t</div>
      \t\t\t\t\t<!-- end search box -->
      \t\t\t\t\t<!-- top-bar-right -->
      \t\t\t\t\t<div class=\"top-bar-right\">

      \t\t\t\t\t\t<!-- logged user and the menu -->
      \t\t\t\t\t\t<div class=\"logged-user\">
      \t\t\t\t\t\t\t<div class=\"btn-group\">
      \t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
      \t\t\t\t\t\t\t\t\t<!-- < img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/img/user-avatar.png"), "html", null, true);
        echo "\" alt=\"User Avatar\" /> -->
      \t\t\t\t\t\t\t\t\t<span class=\"name\">Welcome User</span> <span class=\"caret\"></span>
      \t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
      \t\t\t\t\t\t\t\t\t<li>
      \t\t\t\t\t\t\t\t\t\t<a href=\"#\">
      \t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
      \t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Profile</span>
      \t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t</li>
      \t\t\t\t\t\t\t\t\t<li>
      \t\t\t\t\t\t\t\t\t\t<a href=\"#\">
      \t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
      \t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Settings</span>
      \t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t</li>
      \t\t\t\t\t\t\t\t\t<li>
      \t\t\t\t\t\t\t\t\t\t<a href=\"#\">
      \t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-power-off\"></i>
      \t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Logout</span>
      \t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t</li>
      \t\t\t\t\t\t\t\t</ul>
      \t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t</div>
      \t\t\t\t\t\t<!-- end logged user and the menu -->
      \t\t\t\t\t</div>
      \t\t\t\t\t<!-- end top-bar-right -->
      \t\t\t\t</div>
      \t\t\t</div>
      \t\t</div>
      \t\t<!-- /container -->
      \t</div>
      \t<!-- END TOP BAR -->

      \t<!-- LEFT SIDEBAR -->
      \t<div id=\"left-sidebar\" class=\"left-sidebar \">
      \t\t<!-- main-nav -->
      \t\t<div class=\"sidebar-scroll\">
      \t\t\t<nav class=\"main-nav\">
      \t\t\t\t<ul class=\"main-menu\">
      \t\t\t\t\t<li class=\"active\"><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-dashboard fa-fw\"></i><span class=\"text\">My Account</span>
      \t\t\t\t\t\t<i class=\"toggle-icon fa fa-angle-down\"></i></a>
      \t\t\t\t\t\t<ul class=\"sub-menu open\">
      \t\t\t\t\t\t\t<li ><a href=\"#\"><span class=\"text\">View Profile</span></a></li>
      \t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"text\">Logout</span></a></li>
      \t\t\t\t\t\t</ul>
      \t\t\t\t\t</li>
      \t\t\t\t\t<li><a href=\"/events/create\"><i class=\"fa fa-edit\"></i><span class=\"text\" >Create New</a></li>

      \t\t\t\t</ul>
      \t\t\t</nav>
      \t\t\t<!-- /main-nav -->
      \t\t</div>
      \t</div>
      \t<!-- END LEFT SIDEBAR -->

        ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "
</div>

        ";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 155
        echo "    </body>
</html>
";
        
        $__internal_5e86258f47fca8563b85661bfae811d3cf1ec82f8a5ba9ae0589af32acae5df9->leave($__internal_5e86258f47fca8563b85661bfae811d3cf1ec82f8a5ba9ae0589af32acae5df9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a58d5be91286dc20b052a50bb67b0545e4f08b786765bd6b40886fb7ff235dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a58d5be91286dc20b052a50bb67b0545e4f08b786765bd6b40886fb7ff235dc->enter($__internal_7a58d5be91286dc20b052a50bb67b0545e4f08b786765bd6b40886fb7ff235dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Event Manager!";
        
        $__internal_7a58d5be91286dc20b052a50bb67b0545e4f08b786765bd6b40886fb7ff235dc->leave($__internal_7a58d5be91286dc20b052a50bb67b0545e4f08b786765bd6b40886fb7ff235dc_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07182f394cca647c784a8bec4184a00b1a2979075786ca5217a774aecaa943dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07182f394cca647c784a8bec4184a00b1a2979075786ca5217a774aecaa943dc->enter($__internal_07182f394cca647c784a8bec4184a00b1a2979075786ca5217a774aecaa943dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 16
        echo "      <!-- CSS -->

      <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/my-custom-styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">



      ";
        
        $__internal_07182f394cca647c784a8bec4184a00b1a2979075786ca5217a774aecaa943dc->leave($__internal_07182f394cca647c784a8bec4184a00b1a2979075786ca5217a774aecaa943dc_prof);

    }

    // line 117
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c7d468aa45e70281addb55017bd7f6adfb00cb08e0c655ae8ee369dd5218d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7d468aa45e70281addb55017bd7f6adfb00cb08e0c655ae8ee369dd5218d90->enter($__internal_3c7d468aa45e70281addb55017bd7f6adfb00cb08e0c655ae8ee369dd5218d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3c7d468aa45e70281addb55017bd7f6adfb00cb08e0c655ae8ee369dd5218d90->leave($__internal_3c7d468aa45e70281addb55017bd7f6adfb00cb08e0c655ae8ee369dd5218d90_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d5cfcc76403374705c52f90fbc6a13f8bcb9c093e2307239f6cab6c5e40f2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5cfcc76403374705c52f90fbc6a13f8bcb9c093e2307239f6cab6c5e40f2e8->enter($__internal_8d5cfcc76403374705c52f90fbc6a13f8bcb9c093e2307239f6cab6c5e40f2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 122
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/jquery/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/king-common.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/stat/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/raphael/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/stat/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/stat/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/stat/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/stat/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/datatable/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/datatable/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/jquery-mapael/jquery.mapael.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/raphael/maps/usa_states.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/king-chart-stat.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/king-table.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/king-components.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/bootstrap-editable/jquery.mockjax.min.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/bootstrap-editable/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/typeahead/typeahead.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/typeahead/typeaheadjs.1.5.1.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/bootstrap-editable/address.custom.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/plugins/bootstrap-editable/demo-mock.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/king-elements.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_8d5cfcc76403374705c52f90fbc6a13f8bcb9c093e2307239f6cab6c5e40f2e8->leave($__internal_8d5cfcc76403374705c52f90fbc6a13f8bcb9c093e2307239f6cab6c5e40f2e8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 152,  346 => 151,  342 => 150,  338 => 149,  334 => 148,  330 => 147,  326 => 146,  322 => 145,  318 => 144,  314 => 143,  310 => 142,  306 => 141,  302 => 140,  298 => 139,  294 => 138,  290 => 137,  286 => 136,  282 => 135,  278 => 134,  274 => 133,  270 => 132,  266 => 131,  262 => 130,  258 => 129,  254 => 128,  250 => 127,  246 => 126,  242 => 125,  238 => 124,  234 => 123,  229 => 122,  223 => 121,  212 => 117,  200 => 21,  196 => 20,  192 => 19,  188 => 18,  184 => 16,  178 => 15,  166 => 8,  157 => 155,  155 => 121,  150 => 118,  148 => 117,  88 => 60,  63 => 38,  47 => 26,  45 => 15,  35 => 8,  26 => 1,);
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
<!--[if IE 9 ]><html class=\"ie ie9\" lang=\"en\" class=\"no-js\"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->

    <head>
      <title>{% block title %}Event Manager!{% endblock %}</title>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
      <meta name=\"description\" content=\"Eventmngr - An Event Manager\">
      <meta name=\"author\" content=\"Nishant Tamilselvan\">

      {% block stylesheets %}
      <!-- CSS -->

      <link href=\"{{ asset('bundles/assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"{{ asset('bundles/assets/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"{{ asset('bundles/assets/css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"{{ asset('bundles/assets/css/my-custom-styles.css') }}\" rel=\"stylesheet\" type=\"text/css\">



      {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"sidebar-fixed topnav-fixed dashboard forms-inplace-editing\">

      <div id=\"wrapper\" class=\"wrapper\">
      \t<!-- TOP BAR -->
      \t<div class=\"top-bar navbar-fixed-top\">
      \t\t<div class=\"container\">
      \t\t\t<div class=\"clearfix\">
      \t\t\t\t<a href=\"#\" class=\"pull-left toggle-sidebar-collapse\"><i class=\"fa fa-bars\"></i></a>
      \t\t\t\t<!-- logo -->
      \t\t\t\t<div class=\"pull-left left logo\">
      \t\t\t\t\t<a href=\"/events\"><img src=\"{{ asset('bundles/assets/img/Event_Manager_logo.png') }}\" alt=\"KingAdmin - Admin Dashboard\" /></a>
      \t\t\t\t\t<h1 class=\"sr-only\">Event Manager Dashboard</h1>
      \t\t\t\t</div>
      \t\t\t\t<!-- end logo -->
      \t\t\t\t<div class=\"pull-right right\">
      \t\t\t\t\t<!-- search box -->
      \t\t\t\t\t<div class=\"searchbox\">
      \t\t\t\t\t\t<div id=\"tour-searchbox\" class=\"input-group\">
      \t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"enter keyword here...\">
      \t\t\t\t\t\t\t<span class=\"input-group-btn\">
      \t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button>
      \t\t\t\t\t\t\t</span>
      \t\t\t\t\t\t</div>
      \t\t\t\t\t</div>
      \t\t\t\t\t<!-- end search box -->
      \t\t\t\t\t<!-- top-bar-right -->
      \t\t\t\t\t<div class=\"top-bar-right\">

      \t\t\t\t\t\t<!-- logged user and the menu -->
      \t\t\t\t\t\t<div class=\"logged-user\">
      \t\t\t\t\t\t\t<div class=\"btn-group\">
      \t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
      \t\t\t\t\t\t\t\t\t<!-- < img src=\"{{ asset(\"bundles/assets/img/user-avatar.png\")}}\" alt=\"User Avatar\" /> -->
      \t\t\t\t\t\t\t\t\t<span class=\"name\">Welcome User</span> <span class=\"caret\"></span>
      \t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
      \t\t\t\t\t\t\t\t\t<li>
      \t\t\t\t\t\t\t\t\t\t<a href=\"#\">
      \t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
      \t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Profile</span>
      \t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t</li>
      \t\t\t\t\t\t\t\t\t<li>
      \t\t\t\t\t\t\t\t\t\t<a href=\"#\">
      \t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
      \t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Settings</span>
      \t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t</li>
      \t\t\t\t\t\t\t\t\t<li>
      \t\t\t\t\t\t\t\t\t\t<a href=\"#\">
      \t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-power-off\"></i>
      \t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Logout</span>
      \t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t</li>
      \t\t\t\t\t\t\t\t</ul>
      \t\t\t\t\t\t\t</div>
      \t\t\t\t\t\t</div>
      \t\t\t\t\t\t<!-- end logged user and the menu -->
      \t\t\t\t\t</div>
      \t\t\t\t\t<!-- end top-bar-right -->
      \t\t\t\t</div>
      \t\t\t</div>
      \t\t</div>
      \t\t<!-- /container -->
      \t</div>
      \t<!-- END TOP BAR -->

      \t<!-- LEFT SIDEBAR -->
      \t<div id=\"left-sidebar\" class=\"left-sidebar \">
      \t\t<!-- main-nav -->
      \t\t<div class=\"sidebar-scroll\">
      \t\t\t<nav class=\"main-nav\">
      \t\t\t\t<ul class=\"main-menu\">
      \t\t\t\t\t<li class=\"active\"><a href=\"#\" class=\"js-sub-menu-toggle\"><i class=\"fa fa-dashboard fa-fw\"></i><span class=\"text\">My Account</span>
      \t\t\t\t\t\t<i class=\"toggle-icon fa fa-angle-down\"></i></a>
      \t\t\t\t\t\t<ul class=\"sub-menu open\">
      \t\t\t\t\t\t\t<li ><a href=\"#\"><span class=\"text\">View Profile</span></a></li>
      \t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"text\">Logout</span></a></li>
      \t\t\t\t\t\t</ul>
      \t\t\t\t\t</li>
      \t\t\t\t\t<li><a href=\"/events/create\"><i class=\"fa fa-edit\"></i><span class=\"text\" >Create New</a></li>

      \t\t\t\t</ul>
      \t\t\t</nav>
      \t\t\t<!-- /main-nav -->
      \t\t</div>
      \t</div>
      \t<!-- END LEFT SIDEBAR -->

        {% block body %}{% endblock %}

</div>

        {% block javascripts %}
        <script src=\"{{ asset('bundles/assets/js/jquery/jquery-2.1.0.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/bootstrap/bootstrap.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/modernizr/modernizr.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/king-common.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/stat/jquery.easypiechart.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/raphael/raphael-2.1.0.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/stat/flot/jquery.flot.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/stat/flot/jquery.flot.resize.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/stat/flot/jquery.flot.time.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/stat/flot/jquery.flot.pie.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/datatable/jquery.dataTables.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/datatable/dataTables.bootstrap.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/jquery-mapael/jquery.mapael.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/plugins/raphael/maps/usa_states.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/king-chart-stat.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/king-table.js') }}\"></script>
        <script src=\"{{ asset('bundles/assets/js/king-components.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/plugins/bootstrap-editable/jquery.mockjax.min.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/plugins/moment/moment.min.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/plugins/bootstrap-editable/bootstrap-editable.min.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/plugins/typeahead/typeahead.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/plugins/typeahead/typeaheadjs.1.5.1.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/plugins/select2/select2.min.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/plugins/bootstrap-editable/address.custom.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/plugins/bootstrap-editable/demo-mock.js') }}\"></script>
      \t<script src=\"{{ asset('bundles/assets/js/king-elements.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/event_management/app/Resources/views/base.html.twig");
    }
}
