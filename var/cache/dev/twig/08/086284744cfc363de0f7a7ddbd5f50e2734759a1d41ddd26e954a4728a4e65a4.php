<?php

/* base.html.twig */
class __TwigTemplate_10596d6719ccc77706a1912c94e6b2f09c63bed14af325308c8779989dff93d7 extends Twig_Template
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
        $__internal_872cf22f5d05d1a1dfb9be13bb6de8316cd3a3c5ffa4cc192f9cb191123f6f9e = $this->env->getExtension("native_profiler");
        $__internal_872cf22f5d05d1a1dfb9be13bb6de8316cd3a3c5ffa4cc192f9cb191123f6f9e->enter($__internal_872cf22f5d05d1a1dfb9be13bb6de8316cd3a3c5ffa4cc192f9cb191123f6f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_872cf22f5d05d1a1dfb9be13bb6de8316cd3a3c5ffa4cc192f9cb191123f6f9e->leave($__internal_872cf22f5d05d1a1dfb9be13bb6de8316cd3a3c5ffa4cc192f9cb191123f6f9e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_909a5afa6790aa86a727566732596b1f73894800180f0c472f93f9d72e1928a5 = $this->env->getExtension("native_profiler");
        $__internal_909a5afa6790aa86a727566732596b1f73894800180f0c472f93f9d72e1928a5->enter($__internal_909a5afa6790aa86a727566732596b1f73894800180f0c472f93f9d72e1928a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_909a5afa6790aa86a727566732596b1f73894800180f0c472f93f9d72e1928a5->leave($__internal_909a5afa6790aa86a727566732596b1f73894800180f0c472f93f9d72e1928a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddfe3d3525a2501e2bbcf6205691c01a82d1bda43e6295065874f292514460d2 = $this->env->getExtension("native_profiler");
        $__internal_ddfe3d3525a2501e2bbcf6205691c01a82d1bda43e6295065874f292514460d2->enter($__internal_ddfe3d3525a2501e2bbcf6205691c01a82d1bda43e6295065874f292514460d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ddfe3d3525a2501e2bbcf6205691c01a82d1bda43e6295065874f292514460d2->leave($__internal_ddfe3d3525a2501e2bbcf6205691c01a82d1bda43e6295065874f292514460d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcaabc2aef256d5347df8a3c137d07df816d2db3691c4a042fd3e3ed3a8c975c = $this->env->getExtension("native_profiler");
        $__internal_dcaabc2aef256d5347df8a3c137d07df816d2db3691c4a042fd3e3ed3a8c975c->enter($__internal_dcaabc2aef256d5347df8a3c137d07df816d2db3691c4a042fd3e3ed3a8c975c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dcaabc2aef256d5347df8a3c137d07df816d2db3691c4a042fd3e3ed3a8c975c->leave($__internal_dcaabc2aef256d5347df8a3c137d07df816d2db3691c4a042fd3e3ed3a8c975c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8beb105cd972786074ec5a2e37d801c5bdbb67f7271448000e0cb56f7c09d33 = $this->env->getExtension("native_profiler");
        $__internal_d8beb105cd972786074ec5a2e37d801c5bdbb67f7271448000e0cb56f7c09d33->enter($__internal_d8beb105cd972786074ec5a2e37d801c5bdbb67f7271448000e0cb56f7c09d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d8beb105cd972786074ec5a2e37d801c5bdbb67f7271448000e0cb56f7c09d33->leave($__internal_d8beb105cd972786074ec5a2e37d801c5bdbb67f7271448000e0cb56f7c09d33_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
