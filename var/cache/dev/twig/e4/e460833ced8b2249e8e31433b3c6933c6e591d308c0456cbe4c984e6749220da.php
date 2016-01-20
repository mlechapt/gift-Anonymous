<?php

/* giftBundle:Default:createEvent.html.twig */
class __TwigTemplate_5956f137363b8efd978f5812a7ea235fc75483f6caca3d33e279e2d6b431c67f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("giftBundle:Default:layout.html.twig", "giftBundle:Default:createEvent.html.twig", 3);
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
        $__internal_6aa7ee47122c590e3e8ade4fbcb61322962d7fcebe575a081d3fae5dece5077e = $this->env->getExtension("native_profiler");
        $__internal_6aa7ee47122c590e3e8ade4fbcb61322962d7fcebe575a081d3fae5dece5077e->enter($__internal_6aa7ee47122c590e3e8ade4fbcb61322962d7fcebe575a081d3fae5dece5077e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Default:createEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aa7ee47122c590e3e8ade4fbcb61322962d7fcebe575a081d3fae5dece5077e->leave($__internal_6aa7ee47122c590e3e8ade4fbcb61322962d7fcebe575a081d3fae5dece5077e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_641aa2be6fedf29cdade468fa8fee2455c0c03e181cdeca450ee65b9618cd7aa = $this->env->getExtension("native_profiler");
        $__internal_641aa2be6fedf29cdade468fa8fee2455c0c03e181cdeca450ee65b9618cd7aa->enter($__internal_641aa2be6fedf29cdade468fa8fee2455c0c03e181cdeca450ee65b9618cd7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div>
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "\t\t<p class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
<div class=\"col-md-8\">
  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    ";
        // line 14
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t    <div class=\"form-group\">
\t      ";
        // line 17
        echo "\t      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Date de l'événement"));
        echo "
\t      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'errors');
        echo "
\t      <div class=\"col-sm-6\">
\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget');
        echo "
\t      </div>
\t    </div>
\t    ";
        // line 24
        echo "\t    <div class=\"form-group\">
\t      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-5 control-label"), "label" => "Nom de l'événement"));
        echo "
\t      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t      <div class=\"col-sm-6\">
\t        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t      </div>
\t    </div>
\t  \t";
        // line 32
        echo "\t  \t<div class=\"col-sm-offset-5 col-sm-6\">
\t  \t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t  \t</div>
\t  \t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t  \t";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_641aa2be6fedf29cdade468fa8fee2455c0c03e181cdeca450ee65b9618cd7aa->leave($__internal_641aa2be6fedf29cdade468fa8fee2455c0c03e181cdeca450ee65b9618cd7aa_prof);

    }

    public function getTemplateName()
    {
        return "giftBundle:Default:createEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  112 => 35,  107 => 33,  104 => 32,  98 => 28,  93 => 26,  89 => 25,  86 => 24,  80 => 20,  75 => 18,  70 => 17,  64 => 14,  60 => 12,  56 => 10,  47 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/giftBundle/Resources/views/Default/form.html.twig #}*/
/* */
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div>*/
/* 	{% for message in app.session.flashbag.get('info')%}*/
/* 		<p class="alert alert-danger">{{ message }}</p>*/
/* 	{% endfor %}*/
/* </div>*/
/* <div class="col-md-8">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* 	    <div class="form-group">*/
/* 	      {# Date de l'envent#}*/
/* 	      {{ form_label(form.startdate, "Date de l'événement", {'label_attr': {'class': 'col-sm-5 control-label'}}) }}*/
/* 	      {{ form_errors(form.startdate) }}*/
/* 	      <div class="col-sm-6">*/
/* 	        {{ form_widget(form.startdate) }}*/
/* 	      </div>*/
/* 	    </div>*/
/* 	    {# Nom de l'event#}*/
/* 	    <div class="form-group">*/
/* 	      {{ form_label(form.name, "Nom de l'événement", {'label_attr': {'class': 'col-sm-5 control-label'}}) }}*/
/* 	      {{ form_errors(form.name) }}*/
/* 	      <div class="col-sm-6">*/
/* 	        {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}*/
/* 	      </div>*/
/* 	    </div>*/
/* 	  	{# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/* 	  	<div class="col-sm-offset-5 col-sm-6">*/
/* 	  		{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* 	  	</div>*/
/* 	  	{{ form_rest(form) }}*/
/* 	  	{{ form_end(form) }}*/
/* </div>*/
/* {% endblock %}*/
