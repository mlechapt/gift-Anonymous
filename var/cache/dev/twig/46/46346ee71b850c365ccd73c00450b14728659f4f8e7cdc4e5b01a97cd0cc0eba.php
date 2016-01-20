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
        $__internal_ac0d6a40b8a27623956c351f7d4a2b56e17b263bca88f1a06940677cb51470b7 = $this->env->getExtension("native_profiler");
        $__internal_ac0d6a40b8a27623956c351f7d4a2b56e17b263bca88f1a06940677cb51470b7->enter($__internal_ac0d6a40b8a27623956c351f7d4a2b56e17b263bca88f1a06940677cb51470b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac0d6a40b8a27623956c351f7d4a2b56e17b263bca88f1a06940677cb51470b7->leave($__internal_ac0d6a40b8a27623956c351f7d4a2b56e17b263bca88f1a06940677cb51470b7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_612827279dae5908eb00362725fcf3d3b38d16dc2e8d28e2947dccd22c2075a7 = $this->env->getExtension("native_profiler");
        $__internal_612827279dae5908eb00362725fcf3d3b38d16dc2e8d28e2947dccd22c2075a7->enter($__internal_612827279dae5908eb00362725fcf3d3b38d16dc2e8d28e2947dccd22c2075a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h2> Mes événements</h2>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["event"]);
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 7
            echo "\t\t<h4> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo " : le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startdate", array()), "Y-m-d"), "html", null, true);
            echo "</h4>
\t\t<h5> Liste des participants : </h5>
\t\t<ul>
\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userEvents"]) ? $context["userEvents"] : $this->getContext($context, "userEvents")));
            foreach ($context['_seq'] as $context["_key"] => $context["userEvent"]) {
                // line 11
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["userEvent"]);
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 12
                    echo "\t\t\t\t<li> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
                    echo " </li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userEvent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t</ul>
\t\t<div>
\t\t\t";
            // line 17
            if (($this->getAttribute($this->getAttribute($context["event"], "owner", array()), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
                // line 18
                echo "\t\t\t\t<a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("gift_invitation", array("token" => $this->getAttribute($context["event"], "token", array()))), "html", null, true);
                echo "\">Inviter de nouvelles personnes</a>
\t\t\t";
            }
            // line 20
            echo "\t\t\t<a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("gift_myAccount");
            echo "\">Retour à tous les événements</a>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_612827279dae5908eb00362725fcf3d3b38d16dc2e8d28e2947dccd22c2075a7->leave($__internal_612827279dae5908eb00362725fcf3d3b38d16dc2e8d28e2947dccd22c2075a7_prof);

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
        return array (  94 => 20,  88 => 18,  86 => 17,  82 => 15,  76 => 14,  65 => 12,  60 => 11,  56 => 10,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/giftBundle/Resources/views/Default/form.html.twig #}*/
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	<h2> Mes événements</h2>*/
/* 	{% for event in event %}*/
/* 		<h4> {{ event.name }} : le {{ event.startdate|date('Y-m-d')  }}</h4>*/
/* 		<h5> Liste des participants : </h5>*/
/* 		<ul>*/
/* 			{% for userEvent in userEvents %}*/
/* 				{% for user in userEvent %}*/
/* 				<li> {{ user.username }} {{ user.firstname }} </li>*/
/* 				{% endfor %}*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 		<div>*/
/* 			{% if event.owner.id == user.id %}*/
/* 				<a class="btn btn-success" href="{{ url('gift_invitation',{'token':event.token} ) }}">Inviter de nouvelles personnes</a>*/
/* 			{% endif %}*/
/* 			<a class="btn btn-primary" href="{{ path('gift_myAccount') }}">Retour à tous les événements</a>*/
/* 		</div>*/
/* 	{% endfor %}*/
/* {% endblock %}*/
