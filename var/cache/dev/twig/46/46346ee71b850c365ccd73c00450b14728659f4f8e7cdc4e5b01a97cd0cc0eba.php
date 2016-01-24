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
        $__internal_5b3062db6a26086ebbf8bbf499f37ce4ba1e41fae00b3e2cf021fe3c9a5d6dcb = $this->env->getExtension("native_profiler");
        $__internal_5b3062db6a26086ebbf8bbf499f37ce4ba1e41fae00b3e2cf021fe3c9a5d6dcb->enter($__internal_5b3062db6a26086ebbf8bbf499f37ce4ba1e41fae00b3e2cf021fe3c9a5d6dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b3062db6a26086ebbf8bbf499f37ce4ba1e41fae00b3e2cf021fe3c9a5d6dcb->leave($__internal_5b3062db6a26086ebbf8bbf499f37ce4ba1e41fae00b3e2cf021fe3c9a5d6dcb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3e10f83f2ce83e63287c7d7cdd92a21bc2ecc2f72ceef9dd6ce88dc78805065 = $this->env->getExtension("native_profiler");
        $__internal_c3e10f83f2ce83e63287c7d7cdd92a21bc2ecc2f72ceef9dd6ce88dc78805065->enter($__internal_c3e10f83f2ce83e63287c7d7cdd92a21bc2ecc2f72ceef9dd6ce88dc78805065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h2> Mes événements</h2>
\t\t<h4> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo " : le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startdate", array()), "Y-m-d"), "html", null, true);
        echo "</h4>
\t\t<h6>Administrateur: 
\t\t\t";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "owner", array()), "username", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))) {
            echo " 
\t\t\t\tVous
\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "owner", array()), "username", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "owner", array()), "firstname", array()), "html", null, true);
            echo " 
\t\t\t";
        }
        // line 13
        echo "\t\t\t</h6>
\t\t";
        // line 14
        if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "isDistributed", array()) == 1)) {
            // line 15
            echo "\t\t\tLa personne a qui vous devez faire un cadeau est : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gifted"]) ? $context["gifted"] : $this->getContext($context, "gifted")), "username", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gifted"]) ? $context["gifted"] : $this->getContext($context, "gifted")), "firstname", array()), "html", null, true);
            echo "
\t\t";
        }
        // line 16
        echo " 
\t\t<h5> Liste des participants : </h5>
\t\t<ul>
\t\t\t";
        // line 19
        if (twig_test_empty((isset($context["userEvents"]) ? $context["userEvents"] : $this->getContext($context, "userEvents")))) {
            // line 20
            echo "\t\t\t\tAucun participant n'a validé son invitation.
\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userEvents"]) ? $context["userEvents"] : $this->getContext($context, "userEvents")));
            foreach ($context['_seq'] as $context["_key"] => $context["userEvent"]) {
                // line 23
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["userEvent"], "user", array()), "username", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))) {
                    echo " 
\t\t\t\t\t\t<li>Vous</li>
\t\t\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t\t\t<li> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userEvent"], "user", array()), "username", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userEvent"], "user", array()), "firstname", array()), "html", null, true);
                    echo " </li>
\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userEvent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t";
        }
        // line 30
        echo "\t\t</ul>
\t\t<div>
\t\t\t";
        // line 32
        if ((($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "owner", array()), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())) && ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "isDistributed", array()) == false))) {
            // line 33
            echo "\t\t\t\t<a class=\"btn btn-success\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("gift_repartition", array("token" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "token", array()))), "html", null, true);
            echo "\">Lancer la répartition</a>
\t\t\t\t<a class=\"btn btn-success\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("gift_invitation", array("token" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "token", array()))), "html", null, true);
            echo "\">Inviter de nouvelles personnes</a>
\t\t\t";
        } elseif ((($this->getAttribute($this->getAttribute(        // line 35
(isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "owner", array()), "id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())) && ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "isDistributed", array()) == true))) {
            // line 36
            echo "\t\t\t\t<div class=\"alert alert-success\">La répartition a été faite. Bon échange de cadeaux ! </div>
\t\t\t";
        }
        // line 38
        echo "\t\t\t<a class=\"btn btn-primary\" href=\"";
        echo $this->env->getExtension('routing')->getPath("gift_myAccount");
        echo "\">Retour à tous les événements</a>
\t\t</div>
";
        
        $__internal_c3e10f83f2ce83e63287c7d7cdd92a21bc2ecc2f72ceef9dd6ce88dc78805065->leave($__internal_c3e10f83f2ce83e63287c7d7cdd92a21bc2ecc2f72ceef9dd6ce88dc78805065_prof);

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
        return array (  138 => 38,  134 => 36,  132 => 35,  128 => 34,  123 => 33,  121 => 32,  117 => 30,  114 => 29,  108 => 28,  100 => 26,  93 => 23,  88 => 22,  84 => 20,  82 => 19,  77 => 16,  69 => 15,  67 => 14,  64 => 13,  56 => 11,  50 => 8,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/giftBundle/Resources/views/Default/form.html.twig #}*/
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	<h2> Mes événements</h2>*/
/* 		<h4> {{ event.name }} : le {{ event.startdate|date('Y-m-d')  }}</h4>*/
/* 		<h6>Administrateur: */
/* 			{% if event.owner.username == user.username %} */
/* 				Vous*/
/* 			{% else %}*/
/* 				{{event.owner.username}} {{event.owner.firstname}} */
/* 			{% endif %}*/
/* 			</h6>*/
/* 		{% if event.isDistributed == 1 %}*/
/* 			La personne a qui vous devez faire un cadeau est : {{gifted.username}} {{gifted.firstname}}*/
/* 		{% endif %} */
/* 		<h5> Liste des participants : </h5>*/
/* 		<ul>*/
/* 			{% if userEvents is empty %}*/
/* 				Aucun participant n'a validé son invitation.*/
/* 			{% else %}*/
/* 				{% for userEvent in userEvents %}*/
/* 					{% if userEvent.user.username == user.username %} */
/* 						<li>Vous</li>*/
/* 					{% else %}*/
/* 						<li> {{ userEvent.user.username }} {{ userEvent.user.firstname }} </li>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		</ul>*/
/* 		<div>*/
/* 			{% if (event.owner.id == user.id) and (event.isDistributed == false) %}*/
/* 				<a class="btn btn-success" href="{{ url('gift_repartition',{'token':event.token} ) }}">Lancer la répartition</a>*/
/* 				<a class="btn btn-success" href="{{ url('gift_invitation',{'token':event.token} ) }}">Inviter de nouvelles personnes</a>*/
/* 			{% elseif (event.owner.id == user.id) and (event.isDistributed == true) %}*/
/* 				<div class="alert alert-success">La répartition a été faite. Bon échange de cadeaux ! </div>*/
/* 			{% endif %}*/
/* 			<a class="btn btn-primary" href="{{ path('gift_myAccount') }}">Retour à tous les événements</a>*/
/* 		</div>*/
/* {% endblock %}*/
