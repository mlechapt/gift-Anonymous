<?php

/* giftBundle:Default:invitation.html.twig */
class __TwigTemplate_522575525c86d9c2571124d0789deeed152187199725011a07a6ec4fca1b88d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("giftBundle:Default:layout.html.twig", "giftBundle:Default:invitation.html.twig", 2);
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
        $__internal_8d326acdc7a2732b0d44ce0f3756009641a0ac577a1a994881ef03877cd84640 = $this->env->getExtension("native_profiler");
        $__internal_8d326acdc7a2732b0d44ce0f3756009641a0ac577a1a994881ef03877cd84640->enter($__internal_8d326acdc7a2732b0d44ce0f3756009641a0ac577a1a994881ef03877cd84640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:invitation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d326acdc7a2732b0d44ce0f3756009641a0ac577a1a994881ef03877cd84640->leave($__internal_8d326acdc7a2732b0d44ce0f3756009641a0ac577a1a994881ef03877cd84640_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c04ce00cce4f63fd57d78f4436cb77e16881d97ac7f1c409403560d7832ac19 = $this->env->getExtension("native_profiler");
        $__internal_9c04ce00cce4f63fd57d78f4436cb77e16881d97ac7f1c409403560d7832ac19->enter($__internal_9c04ce00cce4f63fd57d78f4436cb77e16881d97ac7f1c409403560d7832ac19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
\t<h2> Mes événements</h2>
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "\t\t<p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t<div class=\"col-md-11\">
\t\t<h4> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo " : le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startdate", array()), "Y-m-d"), "html", null, true);
        echo "</h4>
\t\t\t<div class=\"alert alert-info\">
\t\t\t    ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
\t\t\t</div>
\t\t  \t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t    ";
        // line 17
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t    ";
        // line 20
        echo "\t\t      \t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Email du participant"));
        echo "
\t\t      \t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t      \t<div class=\"col-sm-6\">
\t\t        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t      </div>
\t\t    </div>
\t\t    <div class=\"form-group\">
\t\t      ";
        // line 28
        echo "\t\t      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Votre message"));
        echo "
\t\t      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
\t\t      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("class" => "col-sm-8 control-label")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), 'widget', array("attr" => array("class" => "btn btn-success", "rows" => "6")));
        echo "
\t\t \t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t  \t\t";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t  \t\t<a class=\"btn btn-primary\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("gift_myAccount");
        echo "\">Retour à tous les événements</a>
\t\t  \t</div>
\t\t</div>
";
        
        $__internal_9c04ce00cce4f63fd57d78f4436cb77e16881d97ac7f1c409403560d7832ac19->leave($__internal_9c04ce00cce4f63fd57d78f4436cb77e16881d97ac7f1c409403560d7832ac19_prof);

    }

    public function getTemplateName()
    {
        return "giftBundle:Default:invitation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  122 => 35,  118 => 34,  114 => 33,  108 => 30,  104 => 29,  99 => 28,  92 => 23,  87 => 21,  82 => 20,  76 => 17,  72 => 15,  67 => 13,  60 => 11,  57 => 10,  48 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/giftBundle/Resources/views/Default/form.html.twig #}*/
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h2> Mes événements</h2>*/
/* 	{% for message in app.session.flashbag.get('notice')%}*/
/* 		<p class="alert alert-success">{{ message }}</p>*/
/* 	{% endfor %}*/
/* 		<div class="col-md-11">*/
/* 		<h4> {{ event.name }} : le {{ event.startdate|date('Y-m-d')  }}</h4>*/
/* 			<div class="alert alert-info">*/
/* 			    {{ message }}*/
/* 			</div>*/
/* 		  	{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* 		    {# Les erreurs générales du formulaire. #}*/
/* 		    {{ form_errors(form) }}*/
/* 			<div class="form-group">*/
/* 			    {# Email du participant#}*/
/* 		      	{{ form_label(form.email, "Email du participant", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* 		      	{{ form_errors(form.email) }}*/
/* 		      	<div class="col-sm-6">*/
/* 		        {{ form_widget(form.email) }}*/
/* 		      </div>*/
/* 		    </div>*/
/* 		    <div class="form-group">*/
/* 		      {# Email du participant#}*/
/* 		      {{ form_label(form.message, "Votre message", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* 		      {{ form_errors(form.message) }}*/
/* 		      {{ form_widget(form.message, {'attr': {'class': 'col-sm-8 control-label'}})  }}*/
/* 			</div>*/
/* 			<div class="col-sm-10">*/
/* 				{{ form_widget(form.send, {'attr': {'class': 'btn btn-success','rows': '6'}}) }}*/
/* 		 		{{ form_rest(form) }}*/
/* 		  		{{ form_end(form) }}*/
/* 		  		<a class="btn btn-primary" href="{{ path('gift_myAccount') }}">Retour à tous les événements</a>*/
/* 		  	</div>*/
/* 		</div>*/
/* {% endblock %}*/
