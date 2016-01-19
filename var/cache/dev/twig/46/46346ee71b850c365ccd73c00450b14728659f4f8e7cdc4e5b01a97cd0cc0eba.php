<?php

/* giftBundle:Default:event.html.twig */
class __TwigTemplate_42c51a978be122e6d3c40b175295c04746e7d4a8a8e3ebbf2d76da251b232d7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("giftBundle:Default:layout.html.twig", "giftBundle:Default:event.html.twig", 2);
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
        $__internal_d5a6378dd739c428104f44766eb19332dbf353f736619a9d76e28530c64ca20a = $this->env->getExtension("native_profiler");
        $__internal_d5a6378dd739c428104f44766eb19332dbf353f736619a9d76e28530c64ca20a->enter($__internal_d5a6378dd739c428104f44766eb19332dbf353f736619a9d76e28530c64ca20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a6378dd739c428104f44766eb19332dbf353f736619a9d76e28530c64ca20a->leave($__internal_d5a6378dd739c428104f44766eb19332dbf353f736619a9d76e28530c64ca20a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fa9ec5d1227459f54fe270edd8c4aa01c7c314a915295d86f8d740dab7bc714 = $this->env->getExtension("native_profiler");
        $__internal_3fa9ec5d1227459f54fe270edd8c4aa01c7c314a915295d86f8d740dab7bc714->enter($__internal_3fa9ec5d1227459f54fe270edd8c4aa01c7c314a915295d86f8d740dab7bc714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h2> Mes événements</h2>
\t";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["event"]);
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 8
                echo "\t\t\t<h4> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo " : le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startdate", array()), "Y-m-d"), "html", null, true);
                echo "</h4>
\t\t\t<h5> Liste des participants : </h5>
\t\t\t<ul>
\t\t\t";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["guests"]) ? $context["guests"] : $this->getContext($context, "guests")));
                foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
                    // line 12
                    echo "\t\t\t\t<li> ";
                    echo twig_escape_filter($this->env, $context["guest"], "html", null, true);
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guest'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t\t</ul>
\t\t\t<div>
\t\t\t\t<a class=\"btn btn-success\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("gift_invitation", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
                echo "\">Inviter de nouvelles personnes</a>
\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                // line 17
                echo $this->env->getExtension('routing')->getPath("gift_myAccount");
                echo "\">Retour à tous les événements</a>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t";
        }
        
        $__internal_3fa9ec5d1227459f54fe270edd8c4aa01c7c314a915295d86f8d740dab7bc714->leave($__internal_3fa9ec5d1227459f54fe270edd8c4aa01c7c314a915295d86f8d740dab7bc714_prof);

    }

    public function getTemplateName()
    {
        return "giftBundle:Default:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  80 => 17,  76 => 16,  72 => 14,  63 => 12,  59 => 11,  50 => 8,  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/giftBundle/Resources/views/Default/form.html.twig #}*/
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	<h2> Mes événements</h2>*/
/* 	{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/* 		{% for event in event %}*/
/* 			<h4> {{ event.name }} : le {{ event.startdate|date('Y-m-d')  }}</h4>*/
/* 			<h5> Liste des participants : </h5>*/
/* 			<ul>*/
/* 			{% for guest in guests%}*/
/* 				<li> {{guest}}*/
/* 			{% endfor %}*/
/* 			</ul>*/
/* 			<div>*/
/* 				<a class="btn btn-success" href="{{ url('gift_invitation',{'token':token} ) }}">Inviter de nouvelles personnes</a>*/
/* 				<a class="btn btn-primary" href="{{ path('gift_myAccount') }}">Retour à tous les événements</a>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* {% endblock %}*/
