<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_29e58439d252abcb5a1660fe82bd75b295120e8824cadf15ea279f1a5484bb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a2d670ec3e554abd2c66dea86ed26466c0cac78af484a6ee82b644d51bfdec1 = $this->env->getExtension("native_profiler");
        $__internal_7a2d670ec3e554abd2c66dea86ed26466c0cac78af484a6ee82b644d51bfdec1->enter($__internal_7a2d670ec3e554abd2c66dea86ed26466c0cac78af484a6ee82b644d51bfdec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a2d670ec3e554abd2c66dea86ed26466c0cac78af484a6ee82b644d51bfdec1->leave($__internal_7a2d670ec3e554abd2c66dea86ed26466c0cac78af484a6ee82b644d51bfdec1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba0c05acab6485665a377275a345b97514cecb21e7dc32f7997778651da08385 = $this->env->getExtension("native_profiler");
        $__internal_ba0c05acab6485665a377275a345b97514cecb21e7dc32f7997778651da08385->enter($__internal_ba0c05acab6485665a377275a345b97514cecb21e7dc32f7997778651da08385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba0c05acab6485665a377275a345b97514cecb21e7dc32f7997778651da08385->leave($__internal_ba0c05acab6485665a377275a345b97514cecb21e7dc32f7997778651da08385_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_28898509be41b1b5499db4b55ecd8a7b033bf34ce143290508f670cf232ba79c = $this->env->getExtension("native_profiler");
        $__internal_28898509be41b1b5499db4b55ecd8a7b033bf34ce143290508f670cf232ba79c->enter($__internal_28898509be41b1b5499db4b55ecd8a7b033bf34ce143290508f670cf232ba79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_28898509be41b1b5499db4b55ecd8a7b033bf34ce143290508f670cf232ba79c->leave($__internal_28898509be41b1b5499db4b55ecd8a7b033bf34ce143290508f670cf232ba79c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6de02f3009a825023de304dcf8e4e715ef5c757327b41a9b954f50e58e57d032 = $this->env->getExtension("native_profiler");
        $__internal_6de02f3009a825023de304dcf8e4e715ef5c757327b41a9b954f50e58e57d032->enter($__internal_6de02f3009a825023de304dcf8e4e715ef5c757327b41a9b954f50e58e57d032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6de02f3009a825023de304dcf8e4e715ef5c757327b41a9b954f50e58e57d032->leave($__internal_6de02f3009a825023de304dcf8e4e715ef5c757327b41a9b954f50e58e57d032_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
