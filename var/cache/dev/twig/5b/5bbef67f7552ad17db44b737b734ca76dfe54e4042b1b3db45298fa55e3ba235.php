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
        $__internal_a0c928620cb5cc1f11a4ec3ad5955c2ba9ce3988f6973dcf8d1a24c21d9cabcb = $this->env->getExtension("native_profiler");
        $__internal_a0c928620cb5cc1f11a4ec3ad5955c2ba9ce3988f6973dcf8d1a24c21d9cabcb->enter($__internal_a0c928620cb5cc1f11a4ec3ad5955c2ba9ce3988f6973dcf8d1a24c21d9cabcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:layout.html.twig"));

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
        ";
        // line 23
        echo "        <ul class=\"nav nav-pills nav-stacked\">
          ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "            <li>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo "</li>
            <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("gift_createEvent");
            echo "\">Créer un événement</a></li>
            <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("gift_myAccount");
            echo "\">Mes Événements</a></li>
            <li><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
          ";
        } else {
            // line 30
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("gift_createEvent");
            echo "\">Créer un événement</a></li>
            <li> <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
            <li> <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Créer un compte</a></li>
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
        
        $__internal_a0c928620cb5cc1f11a4ec3ad5955c2ba9ce3988f6973dcf8d1a24c21d9cabcb->leave($__internal_a0c928620cb5cc1f11a4ec3ad5955c2ba9ce3988f6973dcf8d1a24c21d9cabcb_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1eae551865d5a8fc7e57ea03465b3559e52799a717c6059efb2dec25af76d83 = $this->env->getExtension("native_profiler");
        $__internal_e1eae551865d5a8fc7e57ea03465b3559e52799a717c6059efb2dec25af76d83->enter($__internal_e1eae551865d5a8fc7e57ea03465b3559e52799a717c6059efb2dec25af76d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Anonymous Gift";
        
        $__internal_e1eae551865d5a8fc7e57ea03465b3559e52799a717c6059efb2dec25af76d83->leave($__internal_e1eae551865d5a8fc7e57ea03465b3559e52799a717c6059efb2dec25af76d83_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16d4679e55eb74ad06b98417f0a7c67f277a5e702bf6dae4b09ff3f4bbb1871d = $this->env->getExtension("native_profiler");
        $__internal_16d4679e55eb74ad06b98417f0a7c67f277a5e702bf6dae4b09ff3f4bbb1871d->enter($__internal_16d4679e55eb74ad06b98417f0a7c67f277a5e702bf6dae4b09ff3f4bbb1871d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_16d4679e55eb74ad06b98417f0a7c67f277a5e702bf6dae4b09ff3f4bbb1871d->leave($__internal_16d4679e55eb74ad06b98417f0a7c67f277a5e702bf6dae4b09ff3f4bbb1871d_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_a383df7d66a6bf1d226ab90f2f292142e98133d43695b671a85e718dcea34a3e = $this->env->getExtension("native_profiler");
        $__internal_a383df7d66a6bf1d226ab90f2f292142e98133d43695b671a85e718dcea34a3e->enter($__internal_a383df7d66a6bf1d226ab90f2f292142e98133d43695b671a85e718dcea34a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        \t
        ";
        
        $__internal_a383df7d66a6bf1d226ab90f2f292142e98133d43695b671a85e718dcea34a3e->leave($__internal_a383df7d66a6bf1d226ab90f2f292142e98133d43695b671a85e718dcea34a3e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b743298964cbb5aaada993a54cf49bc394a825801185b6de5fe852615b77e72 = $this->env->getExtension("native_profiler");
        $__internal_1b743298964cbb5aaada993a54cf49bc394a825801185b6de5fe852615b77e72->enter($__internal_1b743298964cbb5aaada993a54cf49bc394a825801185b6de5fe852615b77e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_1b743298964cbb5aaada993a54cf49bc394a825801185b6de5fe852615b77e72->leave($__internal_1b743298964cbb5aaada993a54cf49bc394a825801185b6de5fe852615b77e72_prof);

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
        return array (  174 => 52,  168 => 51,  160 => 39,  154 => 38,  146 => 11,  140 => 10,  128 => 8,  117 => 55,  115 => 51,  103 => 41,  101 => 38,  95 => 34,  90 => 32,  86 => 31,  81 => 30,  76 => 28,  72 => 27,  68 => 26,  61 => 25,  59 => 24,  56 => 23,  49 => 18,  42 => 13,  40 => 10,  35 => 8,  26 => 1,);
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
/*         {#<h3><a href="{{ path('gift_homepage') }}">Accueil</a></h3>#}*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             <li>Bienvenue {{ app.user.username }} {{ app.user.firstname }}</li>*/
/*             <li><a href="{{ path('gift_createEvent') }}">Créer un événement</a></li>*/
/*             <li><a href="{{ path('gift_myAccount') }}">Mes Événements</a></li>*/
/*             <li><a href="{{ path('fos_user_security_logout') }}">Déconnexion</a></li>*/
/*           {% else %}*/
/*             <li><a href="{{ path('gift_createEvent') }}">Créer un événement</a></li>*/
/*             <li> <a href="{{ path('fos_user_security_login') }}">Connexion</a></li>*/
/*             <li> <a href="{{ path('fos_user_registration_register') }}">Créer un compte</a></li>*/
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
