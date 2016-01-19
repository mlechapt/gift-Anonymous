<?php

/* giftBundle:Default:layout.html.twig */
class __TwigTemplate_ca6eecfe4fc0207055929fd080437e550128e0f731518cba5b72cf080057017a extends Twig_Template
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
        $__internal_bc751802c39fe3db94a1167dfb923195e605e1339d38aa1526eb25449cdf49cb = $this->env->getExtension("native_profiler");
        $__internal_bc751802c39fe3db94a1167dfb923195e605e1339d38aa1526eb25449cdf49cb->enter($__internal_bc751802c39fe3db94a1167dfb923195e605e1339d38aa1526eb25449cdf49cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("gift_homepage");
        echo "\">Cadeaux Anonymes</a></h1>
    </div>
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("gift_homepage");
        echo "\">Accueil</a></h3>

        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("gift_createEvent");
        echo "\">Créer un événement</a></li>
          ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("gift_myAccount");
            echo "\">Mon Compte</a></li>
            <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            <li>Connecté en tant que ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</li>
          ";
        } else {
            // line 32
            echo "            <li> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
          ";
        }
        // line 34
        echo "        </ul>
      </div>
      <div id=\"content\" class=\"col-md-9\">

        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "      </div>
    </div>

    <hr>
    <footer>
      <p>Créé par Martin Lechaptois</p>
    </footer>
    
  </div>

  ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "


</body>
</html>";
        
        $__internal_bc751802c39fe3db94a1167dfb923195e605e1339d38aa1526eb25449cdf49cb->leave($__internal_bc751802c39fe3db94a1167dfb923195e605e1339d38aa1526eb25449cdf49cb_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f305cfde39ca277798724a9066f522740bd6102d1ed71a010fe01f881c3d95d6 = $this->env->getExtension("native_profiler");
        $__internal_f305cfde39ca277798724a9066f522740bd6102d1ed71a010fe01f881c3d95d6->enter($__internal_f305cfde39ca277798724a9066f522740bd6102d1ed71a010fe01f881c3d95d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Anonymous Gift";
        
        $__internal_f305cfde39ca277798724a9066f522740bd6102d1ed71a010fe01f881c3d95d6->leave($__internal_f305cfde39ca277798724a9066f522740bd6102d1ed71a010fe01f881c3d95d6_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_955401f7ef041ad64b1d926781b58110ef0396047114e1e87e25bbdff6e04a5e = $this->env->getExtension("native_profiler");
        $__internal_955401f7ef041ad64b1d926781b58110ef0396047114e1e87e25bbdff6e04a5e->enter($__internal_955401f7ef041ad64b1d926781b58110ef0396047114e1e87e25bbdff6e04a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_955401f7ef041ad64b1d926781b58110ef0396047114e1e87e25bbdff6e04a5e->leave($__internal_955401f7ef041ad64b1d926781b58110ef0396047114e1e87e25bbdff6e04a5e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d57f229b4498526083661f491cf386f07b5b628092c350bfb4cd7308e92de50 = $this->env->getExtension("native_profiler");
        $__internal_0d57f229b4498526083661f491cf386f07b5b628092c350bfb4cd7308e92de50->enter($__internal_0d57f229b4498526083661f491cf386f07b5b628092c350bfb4cd7308e92de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        \t
        ";
        
        $__internal_0d57f229b4498526083661f491cf386f07b5b628092c350bfb4cd7308e92de50->leave($__internal_0d57f229b4498526083661f491cf386f07b5b628092c350bfb4cd7308e92de50_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_944f2ace24608d040397ad27046bea15d3ccf54cd02a5a8f85cc86441e27c935 = $this->env->getExtension("native_profiler");
        $__internal_944f2ace24608d040397ad27046bea15d3ccf54cd02a5a8f85cc86441e27c935->enter($__internal_944f2ace24608d040397ad27046bea15d3ccf54cd02a5a8f85cc86441e27c935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_944f2ace24608d040397ad27046bea15d3ccf54cd02a5a8f85cc86441e27c935->leave($__internal_944f2ace24608d040397ad27046bea15d3ccf54cd02a5a8f85cc86441e27c935_prof);

    }

    public function getTemplateName()
    {
        return "giftBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 52,  162 => 51,  154 => 39,  148 => 38,  140 => 11,  134 => 10,  122 => 8,  111 => 55,  109 => 51,  97 => 41,  95 => 38,  89 => 34,  83 => 32,  78 => 30,  74 => 29,  69 => 28,  67 => 27,  63 => 26,  56 => 22,  49 => 18,  42 => 13,  40 => 10,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   */
/* */
/*   <title>{% block title %}Anonymous Gift{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1><a href="{{ path('gift_homepage') }}">Cadeaux Anonymes</a></h1>*/
/*     </div>*/
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3><a href="{{ path('gift_homepage') }}">Accueil</a></h3>*/
/* */
/*         <h3>Menu</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('gift_createEvent') }}">Créer un événement</a></li>*/
/*           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             <li><a href="{{ path('gift_myAccount') }}">Mon Compte</a></li>*/
/*             <li><a href="{{ path('fos_user_security_logout') }}">Déconnexion</a></li>*/
/*             <li>Connecté en tant que {{ app.user.username }}</li>*/
/*           {% else %}*/
/*             <li> <a href="{{ path('fos_user_security_login') }}">Connexion</a></li>*/
/*           {% endif %}*/
/*         </ul>*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/* */
/*         {% block body %}*/
/*         	*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/*     <footer>*/
/*       <p>Créé par Martin Lechaptois</p>*/
/*     </footer>*/
/*     */
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* */
/* */
/* </body>*/
/* </html>*/
