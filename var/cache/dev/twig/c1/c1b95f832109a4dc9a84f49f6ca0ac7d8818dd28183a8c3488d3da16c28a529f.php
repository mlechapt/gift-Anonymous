<?php

/* giftBundle:Default:index.html.twig */
class __TwigTemplate_a5c526ba65b6da541fe568203eb97aa50903daf6b95402bf92eb43807905b3c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("giftBundle:Default:layout.html.twig", "giftBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "giftBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_215d136222d2d60d1561a3b1fb5f135bf3667880eb23817236f8db35cd7ec0f7 = $this->env->getExtension("native_profiler");
        $__internal_215d136222d2d60d1561a3b1fb5f135bf3667880eb23817236f8db35cd7ec0f7->enter($__internal_215d136222d2d60d1561a3b1fb5f135bf3667880eb23817236f8db35cd7ec0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_215d136222d2d60d1561a3b1fb5f135bf3667880eb23817236f8db35cd7ec0f7->leave($__internal_215d136222d2d60d1561a3b1fb5f135bf3667880eb23817236f8db35cd7ec0f7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0754737ef512bd6908f16eea1e856330812e9503adb01ec7a85275198bff3d4d = $this->env->getExtension("native_profiler");
        $__internal_0754737ef512bd6908f16eea1e856330812e9503adb01ec7a85275198bff3d4d->enter($__internal_0754737ef512bd6908f16eea1e856330812e9503adb01ec7a85275198bff3d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Gift Anonymous - Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
  
";
        
        $__internal_0754737ef512bd6908f16eea1e856330812e9503adb01ec7a85275198bff3d4d->leave($__internal_0754737ef512bd6908f16eea1e856330812e9503adb01ec7a85275198bff3d4d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ae62d687ffd181768b319685dd8274ef5137ff38f3d649384f0a1820a55c1c5 = $this->env->getExtension("native_profiler");
        $__internal_7ae62d687ffd181768b319685dd8274ef5137ff38f3d649384f0a1820a55c1c5->enter($__internal_7ae62d687ffd181768b319685dd8274ef5137ff38f3d649384f0a1820a55c1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"row\">
\t\t<div id=\"menu\" class=\"col-md-9\">
\t\t \t<h2>Bienvenue sur Anonymous Gift!</h2>\t\t \t
\t\t \t<p> Ici vous pouvez créer des noëls canadiens entre amis ou en famille !<p>
\t\t \t";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 15
            echo "\t\t\t\t";
            if (array_key_exists("listEvents", $context)) {
                // line 16
                echo "\t\t\t\t\t<h2> Mes événements</h2>
\t\t\t\t\t\t";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listevents"]) ? $context["listevents"] : $this->getContext($context, "listevents")));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 18
                    echo "\t\t\t\t\t\t\t <li>
\t\t\t\t\t\t\t \t<a>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                    echo " : le ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "date", array()), "html", null, true);
                    echo " </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t<p>Vous n'avez pas encore d'événements créés.</p>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t<a class=\"btn btn-primary\" href=\"new-event\">Créer un événement</a>
\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t<a class=\"btn btn-primary\" href=\"login\" role=\"button\">Se connecter </a>
\t\t \t\t<a class=\"btn btn-success\" href=\"register\" role=\"button\">S'inscrire </a>
\t\t\t";
        }
        // line 30
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_7ae62d687ffd181768b319685dd8274ef5137ff38f3d649384f0a1820a55c1c5->leave($__internal_7ae62d687ffd181768b319685dd8274ef5137ff38f3d649384f0a1820a55c1c5_prof);

    }

    public function getTemplateName()
    {
        return "giftBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  101 => 27,  97 => 25,  93 => 23,  90 => 22,  79 => 19,  76 => 18,  72 => 17,  69 => 16,  66 => 15,  64 => 14,  58 => 10,  52 => 9,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Gift Anonymous - Accueil - {{ parent() }}*/
/*   */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div class="row">*/
/* 		<div id="menu" class="col-md-9">*/
/* 		 	<h2>Bienvenue sur Anonymous Gift!</h2>		 	*/
/* 		 	<p> Ici vous pouvez créer des noëls canadiens entre amis ou en famille !<p>*/
/* 		 	{% if is_granted('ROLE_USER') %}*/
/* 				{% if listEvents is defined %}*/
/* 					<h2> Mes événements</h2>*/
/* 						{% for event in listevents %}*/
/* 							 <li>*/
/* 							 	<a>{{ event.name }} : le {{ event.date }} </a>*/
/* 							</li>*/
/* 						{% endfor %}*/
/* 				{% else %}*/
/* 					<p>Vous n'avez pas encore d'événements créés.</p>*/
/* 				{% endif %}*/
/* 				<a class="btn btn-primary" href="new-event">Créer un événement</a>*/
/* 			{% else %}*/
/* 				<a class="btn btn-primary" href="login" role="button">Se connecter </a>*/
/* 		 		<a class="btn btn-success" href="register" role="button">S'inscrire </a>*/
/* 			{% endif %}*/
/* */
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
