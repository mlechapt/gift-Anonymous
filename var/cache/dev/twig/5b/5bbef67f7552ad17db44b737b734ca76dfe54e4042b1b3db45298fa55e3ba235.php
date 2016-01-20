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
        $__internal_aa2e5a87f4f75d466fc73f895cbe4bf6826b8538e2f50322f3afa9ea55b26424 = $this->env->getExtension("native_profiler");
        $__internal_aa2e5a87f4f75d466fc73f895cbe4bf6826b8538e2f50322f3afa9ea55b26424->enter($__internal_aa2e5a87f4f75d466fc73f895cbe4bf6826b8538e2f50322f3afa9ea55b26424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:layout.html.twig"));

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
            <li> <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Créer un compte</a></li>
          ";
        }
        // line 35
        echo "        </ul>
      </div>
      <div id=\"content\" class=\"col-md-9\">

        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "      </div>
    </div>

    <hr>
    <footer>
      <p>Créé par Martin Lechaptois</p>
    </footer>
    
  </div>

  ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "


</body>
</html>";
        
        $__internal_aa2e5a87f4f75d466fc73f895cbe4bf6826b8538e2f50322f3afa9ea55b26424->leave($__internal_aa2e5a87f4f75d466fc73f895cbe4bf6826b8538e2f50322f3afa9ea55b26424_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_b04dd09d59e2e4bd63626f7e43f8ab54c1b5368c384c2688d51c85edcb61de1c = $this->env->getExtension("native_profiler");
        $__internal_b04dd09d59e2e4bd63626f7e43f8ab54c1b5368c384c2688d51c85edcb61de1c->enter($__internal_b04dd09d59e2e4bd63626f7e43f8ab54c1b5368c384c2688d51c85edcb61de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Anonymous Gift";
        
        $__internal_b04dd09d59e2e4bd63626f7e43f8ab54c1b5368c384c2688d51c85edcb61de1c->leave($__internal_b04dd09d59e2e4bd63626f7e43f8ab54c1b5368c384c2688d51c85edcb61de1c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73e21ab1ab14b223b54a0889598cdd1ac246f168f4db9c944dacf62b72362d19 = $this->env->getExtension("native_profiler");
        $__internal_73e21ab1ab14b223b54a0889598cdd1ac246f168f4db9c944dacf62b72362d19->enter($__internal_73e21ab1ab14b223b54a0889598cdd1ac246f168f4db9c944dacf62b72362d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_73e21ab1ab14b223b54a0889598cdd1ac246f168f4db9c944dacf62b72362d19->leave($__internal_73e21ab1ab14b223b54a0889598cdd1ac246f168f4db9c944dacf62b72362d19_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_122714fac910cfa20e8a78a6ca7a0d2a353116e4818667403be572be70c83171 = $this->env->getExtension("native_profiler");
        $__internal_122714fac910cfa20e8a78a6ca7a0d2a353116e4818667403be572be70c83171->enter($__internal_122714fac910cfa20e8a78a6ca7a0d2a353116e4818667403be572be70c83171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "        \t
        ";
        
        $__internal_122714fac910cfa20e8a78a6ca7a0d2a353116e4818667403be572be70c83171->leave($__internal_122714fac910cfa20e8a78a6ca7a0d2a353116e4818667403be572be70c83171_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09bc166ff7ece5fa473401bd1c101715935d792dee9ac0590a471dd6f4e2dca3 = $this->env->getExtension("native_profiler");
        $__internal_09bc166ff7ece5fa473401bd1c101715935d792dee9ac0590a471dd6f4e2dca3->enter($__internal_09bc166ff7ece5fa473401bd1c101715935d792dee9ac0590a471dd6f4e2dca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_09bc166ff7ece5fa473401bd1c101715935d792dee9ac0590a471dd6f4e2dca3->leave($__internal_09bc166ff7ece5fa473401bd1c101715935d792dee9ac0590a471dd6f4e2dca3_prof);

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
        return array (  172 => 53,  166 => 52,  158 => 40,  152 => 39,  144 => 11,  138 => 10,  126 => 8,  115 => 56,  113 => 52,  101 => 42,  99 => 39,  93 => 35,  88 => 33,  83 => 32,  78 => 30,  74 => 29,  69 => 28,  67 => 27,  63 => 26,  56 => 22,  49 => 18,  42 => 13,  40 => 10,  35 => 8,  26 => 1,);
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
