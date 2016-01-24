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
        $__internal_9e0300761bf3ce13b6d5e7e164ac0a4254192227527e162937b064ba1a45caf9 = $this->env->getExtension("native_profiler");
        $__internal_9e0300761bf3ce13b6d5e7e164ac0a4254192227527e162937b064ba1a45caf9->enter($__internal_9e0300761bf3ce13b6d5e7e164ac0a4254192227527e162937b064ba1a45caf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:myAccount.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e0300761bf3ce13b6d5e7e164ac0a4254192227527e162937b064ba1a45caf9->leave($__internal_9e0300761bf3ce13b6d5e7e164ac0a4254192227527e162937b064ba1a45caf9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_76177953187a6fd8df9ac00c0f067a1f9597ec2aba1a23adcfede1472872c242 = $this->env->getExtension("native_profiler");
        $__internal_76177953187a6fd8df9ac00c0f067a1f9597ec2aba1a23adcfede1472872c242->enter($__internal_76177953187a6fd8df9ac00c0f067a1f9597ec2aba1a23adcfede1472872c242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h4> Mes événements créés </h4>\t
\t";
        // line 6
        if (twig_test_empty((isset($context["listEvents"]) ? $context["listEvents"] : $this->getContext($context, "listEvents")))) {
            // line 7
            echo "\t\tVous n'avez créé aucun événement
\t";
        } else {
            // line 9
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listEvents"]) ? $context["listEvents"] : $this->getContext($context, "listEvents")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 10
                echo "\t\t\t<li><a href=\"event-detail/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "token", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo "</a> : le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startdate", array()), "Y-m-d"), "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t";
        }
        // line 13
        echo "
\t<h4> Les événements auxquels je participe </h4>
\t";
        // line 15
        if (twig_test_empty((isset($context["listInvitedEvents"]) ? $context["listInvitedEvents"] : $this->getContext($context, "listInvitedEvents")))) {
            // line 16
            echo "\t\tVous êtes invité à aucun d'événement
\t";
        } else {
            // line 18
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listInvitedEvents"]) ? $context["listInvitedEvents"] : $this->getContext($context, "listInvitedEvents")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 19
                echo "\t\t\t<li><a href=\"event-detail/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "event", array()), "token", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "event", array()), "name", array()), "html", null, true);
                echo "</a> : le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "event", array()), "startdate", array()), "Y-m-d"), "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t";
        }
        // line 22
        echo "
\t";
        // line 23
        if (twig_test_empty((isset($context["listInvitedEvents"]) ? $context["listInvitedEvents"] : $this->getContext($context, "listInvitedEvents")))) {
            // line 24
            echo "\t";
        } else {
            // line 25
            echo "\t<h4> Événements clôturés </h4>
\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listClosedEvents"]) ? $context["listClosedEvents"] : $this->getContext($context, "listClosedEvents")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 27
                echo "\t\t\t
\t\t\t<li><a href=\"event-detail/";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "token", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo "</a> : le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startdate", array()), "Y-m-d"), "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t";
        }
        // line 31
        echo "
\t<br/>
\t<a class=\"btn btn-success\" href=\"new-event\">Créer un événement</a>
";
        
        $__internal_76177953187a6fd8df9ac00c0f067a1f9597ec2aba1a23adcfede1472872c242->leave($__internal_76177953187a6fd8df9ac00c0f067a1f9597ec2aba1a23adcfede1472872c242_prof);

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
        return array (  134 => 31,  131 => 30,  119 => 28,  116 => 27,  112 => 26,  109 => 25,  106 => 24,  104 => 23,  101 => 22,  98 => 21,  85 => 19,  80 => 18,  76 => 16,  74 => 15,  70 => 13,  67 => 12,  54 => 10,  49 => 9,  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/giftBundle/Resources/views/Default/form.html.twig #}*/
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	<h4> Mes événements créés </h4>	*/
/* 	{% if listEvents is empty %}*/
/* 		Vous n'avez créé aucun événement*/
/* 	{% else %}*/
/* 		{% for event in listEvents %}*/
/* 			<li><a href="event-detail/{{ event.token }}">{{ event.name }}</a> : le {{ event.startdate|date('Y-m-d')  }}</li>*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* */
/* 	<h4> Les événements auxquels je participe </h4>*/
/* 	{% if listInvitedEvents is empty %}*/
/* 		Vous êtes invité à aucun d'événement*/
/* 	{% else %}*/
/* 		{% for event in listInvitedEvents %}*/
/* 			<li><a href="event-detail/{{ event.event.token }}">{{ event.event.name }}</a> : le {{ event.event.startdate|date('Y-m-d')  }}</li>*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* */
/* 	{% if listInvitedEvents is empty %}*/
/* 	{% else %}*/
/* 	<h4> Événements clôturés </h4>*/
/* 		{% for event in listClosedEvents %}*/
/* 			*/
/* 			<li><a href="event-detail/{{ event.token }}">{{ event.name }}</a> : le {{ event.startdate|date('Y-m-d')  }}</li>*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* */
/* 	<br/>*/
/* 	<a class="btn btn-success" href="new-event">Créer un événement</a>*/
/* {% endblock %}*/
