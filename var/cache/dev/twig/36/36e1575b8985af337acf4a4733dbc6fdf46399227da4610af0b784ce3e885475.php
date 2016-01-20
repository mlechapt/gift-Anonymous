<?php

/* giftBundle:Default:myAccount.html.twig */
class __TwigTemplate_52800d4fffe332f3918fe982751d6d637315afa7c58e2c929aeb91a2c191eb1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("giftBundle:Default:layout.html.twig", "giftBundle:Default:myAccount.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "giftBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_859298dfac814600846059314fbe511f64bdee4d7365b3068933ec5d2d0d1207 = $this->env->getExtension("native_profiler");
        $__internal_859298dfac814600846059314fbe511f64bdee4d7365b3068933ec5d2d0d1207->enter($__internal_859298dfac814600846059314fbe511f64bdee4d7365b3068933ec5d2d0d1207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:myAccount.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_859298dfac814600846059314fbe511f64bdee4d7365b3068933ec5d2d0d1207->leave($__internal_859298dfac814600846059314fbe511f64bdee4d7365b3068933ec5d2d0d1207_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d9218ada476294a8125a8db30e4ee6383cbee9d8e0c5757e5f01ff001cf91ba = $this->env->getExtension("native_profiler");
        $__internal_8d9218ada476294a8125a8db30e4ee6383cbee9d8e0c5757e5f01ff001cf91ba->enter($__internal_8d9218ada476294a8125a8db30e4ee6383cbee9d8e0c5757e5f01ff001cf91ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h4> Mes événements créés </h4>\t
\t";
        // line 6
        if (twig_test_empty((isset($context["listEvents"]) ? $context["listEvents"] : $this->getContext($context, "listEvents")))) {
            // line 7
            echo "\t\tVous n'avez créé aucun événement
\t";
        }
        // line 9
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEvents"]) ? $context["listEvents"] : $this->getContext($context, "listEvents")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 10
            echo "\t\t<li><a href=\"event-detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "token", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</a> : le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startdate", array()), "Y-m-d"), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t<a class=\"btn btn-primary\" href=\"new-event\">Créer un événement</a>

\t<h4> Les événements auxquels je participe </h4>
\t";
        // line 15
        if (twig_test_empty((isset($context["listInvitedEvents"]) ? $context["listInvitedEvents"] : $this->getContext($context, "listInvitedEvents")))) {
            // line 16
            echo "\t\tVous êtes invité à aucun d'événement
\t";
        }
        // line 18
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listInvitedEvents"]) ? $context["listInvitedEvents"] : $this->getContext($context, "listInvitedEvents")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 19
            echo "\t\t<li><a href=\"event-detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "event", array()), "token", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "event", array()), "name", array()), "html", null, true);
            echo "</a> : le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "event", array()), "startdate", array()), "Y-m-d"), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8d9218ada476294a8125a8db30e4ee6383cbee9d8e0c5757e5f01ff001cf91ba->leave($__internal_8d9218ada476294a8125a8db30e4ee6383cbee9d8e0c5757e5f01ff001cf91ba_prof);

    }

    public function getTemplateName()
    {
        return "giftBundle:Default:myAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  78 => 18,  74 => 16,  72 => 15,  67 => 12,  54 => 10,  49 => 9,  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/giftBundle/Resources/views/Default/form.html.twig #}*/
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	<h4> Mes événements créés </h4>	*/
/* 	{% if listEvents is empty %}*/
/* 		Vous n'avez créé aucun événement*/
/* 	{% endif %}*/
/* 	{% for event in listEvents %}*/
/* 		<li><a href="event-detail/{{ event.token }}">{{ event.name }}</a> : le {{ event.startdate|date('Y-m-d')  }}</li>*/
/* 	{% endfor %}*/
/* 	<a class="btn btn-primary" href="new-event">Créer un événement</a>*/
/* */
/* 	<h4> Les événements auxquels je participe </h4>*/
/* 	{% if listInvitedEvents is empty %}*/
/* 		Vous êtes invité à aucun d'événement*/
/* 	{% endif %}*/
/* 	{% for event in listInvitedEvents %}*/
/* 		<li><a href="event-detail/{{ event.event.token }}">{{ event.event.name }}</a> : le {{ event.event.startdate|date('Y-m-d')  }}</li>*/
/* 	{% endfor %}*/
/* {% endblock %}*/
