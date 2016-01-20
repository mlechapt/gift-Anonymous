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
        $__internal_b7075b375e6d569f30e09ee02139f677394827556f57a3c1ac660a20405dcbce = $this->env->getExtension("native_profiler");
        $__internal_b7075b375e6d569f30e09ee02139f677394827556f57a3c1ac660a20405dcbce->enter($__internal_b7075b375e6d569f30e09ee02139f677394827556f57a3c1ac660a20405dcbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7075b375e6d569f30e09ee02139f677394827556f57a3c1ac660a20405dcbce->leave($__internal_b7075b375e6d569f30e09ee02139f677394827556f57a3c1ac660a20405dcbce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5a6586a4b687ef448a8c3130ed61bb40c2d5b0ef4f7ffe0efe420e32dee26b2 = $this->env->getExtension("native_profiler");
        $__internal_f5a6586a4b687ef448a8c3130ed61bb40c2d5b0ef4f7ffe0efe420e32dee26b2->enter($__internal_f5a6586a4b687ef448a8c3130ed61bb40c2d5b0ef4f7ffe0efe420e32dee26b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f5a6586a4b687ef448a8c3130ed61bb40c2d5b0ef4f7ffe0efe420e32dee26b2->leave($__internal_f5a6586a4b687ef448a8c3130ed61bb40c2d5b0ef4f7ffe0efe420e32dee26b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f6acef175ddd01d6ccb8bacd28d6a4add7c3c7738da395fc352fbd04aa5dfae = $this->env->getExtension("native_profiler");
        $__internal_3f6acef175ddd01d6ccb8bacd28d6a4add7c3c7738da395fc352fbd04aa5dfae->enter($__internal_3f6acef175ddd01d6ccb8bacd28d6a4add7c3c7738da395fc352fbd04aa5dfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3f6acef175ddd01d6ccb8bacd28d6a4add7c3c7738da395fc352fbd04aa5dfae->leave($__internal_3f6acef175ddd01d6ccb8bacd28d6a4add7c3c7738da395fc352fbd04aa5dfae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc81f0e6ccd93c64fd0075690ea36ff06be0219ca5081e4b7bf3839cdf573b12 = $this->env->getExtension("native_profiler");
        $__internal_cc81f0e6ccd93c64fd0075690ea36ff06be0219ca5081e4b7bf3839cdf573b12->enter($__internal_cc81f0e6ccd93c64fd0075690ea36ff06be0219ca5081e4b7bf3839cdf573b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cc81f0e6ccd93c64fd0075690ea36ff06be0219ca5081e4b7bf3839cdf573b12->leave($__internal_cc81f0e6ccd93c64fd0075690ea36ff06be0219ca5081e4b7bf3839cdf573b12_prof);

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
