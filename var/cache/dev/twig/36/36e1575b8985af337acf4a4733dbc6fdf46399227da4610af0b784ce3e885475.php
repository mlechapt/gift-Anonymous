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
        $__internal_633c87bf3a1695cfaae3662b3388491d847c2947fe0f1579a8da628ab77eaa11 = $this->env->getExtension("native_profiler");
        $__internal_633c87bf3a1695cfaae3662b3388491d847c2947fe0f1579a8da628ab77eaa11->enter($__internal_633c87bf3a1695cfaae3662b3388491d847c2947fe0f1579a8da628ab77eaa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:myAccount.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_633c87bf3a1695cfaae3662b3388491d847c2947fe0f1579a8da628ab77eaa11->leave($__internal_633c87bf3a1695cfaae3662b3388491d847c2947fe0f1579a8da628ab77eaa11_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a7b30cd954693498c562c7c9a7eedf985dd7d2bfce77a0e97f7f253bc6589aa = $this->env->getExtension("native_profiler");
        $__internal_9a7b30cd954693498c562c7c9a7eedf985dd7d2bfce77a0e97f7f253bc6589aa->enter($__internal_9a7b30cd954693498c562c7c9a7eedf985dd7d2bfce77a0e97f7f253bc6589aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h2> Mes événements</h2>
\t";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listEvents"]) ? $context["listEvents"] : $this->getContext($context, "listEvents")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 8
                echo "\t\t\t\t\t <li>
\t\t\t\t\t \t<a href=\"event-detail/";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "token", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo "</a> : le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startdate", array()), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
\t\t<a class=\"btn btn-primary\" href=\"new-event\">Créer un événement</a>
\t";
        }
        
        $__internal_9a7b30cd954693498c562c7c9a7eedf985dd7d2bfce77a0e97f7f253bc6589aa->leave($__internal_9a7b30cd954693498c562c7c9a7eedf985dd7d2bfce77a0e97f7f253bc6589aa_prof);

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
        return array (  66 => 12,  53 => 9,  50 => 8,  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/giftBundle/Resources/views/Default/form.html.twig #}*/
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	<h2> Mes événements</h2>*/
/* 	{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/* 		{% for event in listEvents %}*/
/* 					 <li>*/
/* 					 	<a href="event-detail/{{ event.token }}">{{ event.name }}</a> : le {{ event.startdate|date('Y-m-d')  }}*/
/* 					</li>*/
/* 				{% endfor %}*/
/* */
/* 		<a class="btn btn-primary" href="new-event">Créer un événement</a>*/
/* 	{% endif %}*/
/* {% endblock %}*/
