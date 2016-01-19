<?php

/* giftBundle:Security:register.html.twig */
class __TwigTemplate_93e1e23a4890dd9d64c9807a46b34993b7969628891b5aed7a645a2d559093ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("giftBundle:Default:layout.html.twig", "giftBundle:Security:register.html.twig", 3);
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
        $__internal_87c2ed3e453ab7110c025c480cbdbcca6877af93bfd2a8b3e050c8ec5a2c048b = $this->env->getExtension("native_profiler");
        $__internal_87c2ed3e453ab7110c025c480cbdbcca6877af93bfd2a8b3e050c8ec5a2c048b->enter($__internal_87c2ed3e453ab7110c025c480cbdbcca6877af93bfd2a8b3e050c8ec5a2c048b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "giftBundle:Security:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87c2ed3e453ab7110c025c480cbdbcca6877af93bfd2a8b3e050c8ec5a2c048b->leave($__internal_87c2ed3e453ab7110c025c480cbdbcca6877af93bfd2a8b3e050c8ec5a2c048b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e344db97ecc4c5b882bb2aa590b20601565d632d466604290f7119effcde9a2b = $this->env->getExtension("native_profiler");
        $__internal_e344db97ecc4c5b882bb2aa590b20601565d632d466604290f7119effcde9a2b->enter($__internal_e344db97ecc4c5b882bb2aa590b20601565d632d466604290f7119effcde9a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "\t\t\t<p class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</div>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "
\t      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t      <div class=\"col-sm-8\">
\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t      </div>
\t    </div>
\t    ";
        // line 24
        echo "\t    <div class=\"form-group\">
\t      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prénom"));
        echo "
\t      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
\t      <div class=\"col-sm-8\">
\t        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t      </div>
\t    </div>
\t    ";
        // line 32
        echo "\t    <div class=\"form-group\">
\t      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mot de Passe"));
        echo "
\t      ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
\t      <div class=\"col-sm-8\">
\t        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t      </div>
\t    </div>
\t    ";
        // line 40
        echo "\t    <div class=\"form-group\">
\t      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Email"));
        echo "
\t      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t      <div class=\"col-sm-8\">
\t        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t      </div>
\t  \t</div>
\t  \t";
        // line 48
        echo "\t  \t<div class=\"col-sm-offset-3 col-sm-10\">
\t  \t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t  \t</div>
\t  \t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t  \t";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_e344db97ecc4c5b882bb2aa590b20601565d632d466604290f7119effcde9a2b->leave($__internal_e344db97ecc4c5b882bb2aa590b20601565d632d466604290f7119effcde9a2b_prof);

    }

    public function getTemplateName()
    {
        return "giftBundle:Security:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  148 => 51,  143 => 49,  140 => 48,  134 => 44,  129 => 42,  125 => 41,  122 => 40,  116 => 36,  111 => 34,  107 => 33,  104 => 32,  98 => 28,  93 => 26,  89 => 25,  86 => 24,  80 => 20,  75 => 18,  70 => 17,  64 => 14,  60 => 12,  56 => 10,  47 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/giftBundle/Resources/views/Default/form.html.twig #}*/
/* */
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	<div>*/
/* 		{% for message in app.session.flashbag.get('info')%}*/
/* 			<p class="alert alert-danger">{{ message }}</p>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* <div class="col-md-8">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* 	    <div class="form-group">*/
/* 	      {# Lastname#}*/
/* 	      {{ form_label(form.username, "Nom", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 	      {{ form_errors(form.username) }}*/
/* 	      <div class="col-sm-8">*/
/* 	        {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}*/
/* 	      </div>*/
/* 	    </div>*/
/* 	    {# Firstname#}*/
/* 	    <div class="form-group">*/
/* 	      {{ form_label(form.firstname, "Prénom", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 	      {{ form_errors(form.firstname) }}*/
/* 	      <div class="col-sm-8">*/
/* 	        {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}*/
/* 	      </div>*/
/* 	    </div>*/
/* 	    {# Password#}*/
/* 	    <div class="form-group">*/
/* 	      {{ form_label(form.password, "Mot de Passe", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 	      {{ form_errors(form.password) }}*/
/* 	      <div class="col-sm-8">*/
/* 	        {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}*/
/* 	      </div>*/
/* 	    </div>*/
/* 	    {# Email#}*/
/* 	    <div class="form-group">*/
/* 	      {{ form_label(form.email, "Email", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 	      {{ form_errors(form.email) }}*/
/* 	      <div class="col-sm-8">*/
/* 	        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/* 	      </div>*/
/* 	  	</div>*/
/* 	  	{# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/* 	  	<div class="col-sm-offset-3 col-sm-10">*/
/* 	  		{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* 	  	</div>*/
/* 	  	{{ form_rest(form) }}*/
/* 	  	{{ form_end(form) }}*/
/* </div>*/
/* {% endblock %}*/
