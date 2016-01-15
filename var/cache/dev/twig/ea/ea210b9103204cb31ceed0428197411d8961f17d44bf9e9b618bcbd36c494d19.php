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
        $__internal_807a6ca6b64e297502dfdfb613c4944673540d98095bbcde48066646b46874b4 = $this->env->getExtension("native_profiler");
        $__internal_807a6ca6b64e297502dfdfb613c4944673540d98095bbcde48066646b46874b4->enter($__internal_807a6ca6b64e297502dfdfb613c4944673540d98095bbcde48066646b46874b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807a6ca6b64e297502dfdfb613c4944673540d98095bbcde48066646b46874b4->leave($__internal_807a6ca6b64e297502dfdfb613c4944673540d98095bbcde48066646b46874b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_910cc14b3405d2b84f0c42a0ff78a48e78c2de55585e36ede5bf6a2927437406 = $this->env->getExtension("native_profiler");
        $__internal_910cc14b3405d2b84f0c42a0ff78a48e78c2de55585e36ede5bf6a2927437406->enter($__internal_910cc14b3405d2b84f0c42a0ff78a48e78c2de55585e36ede5bf6a2927437406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_910cc14b3405d2b84f0c42a0ff78a48e78c2de55585e36ede5bf6a2927437406->leave($__internal_910cc14b3405d2b84f0c42a0ff78a48e78c2de55585e36ede5bf6a2927437406_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddcc5434695923febfb316888d32b6529138df4cf0a2ee188023a51bfcf769ba = $this->env->getExtension("native_profiler");
        $__internal_ddcc5434695923febfb316888d32b6529138df4cf0a2ee188023a51bfcf769ba->enter($__internal_ddcc5434695923febfb316888d32b6529138df4cf0a2ee188023a51bfcf769ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ddcc5434695923febfb316888d32b6529138df4cf0a2ee188023a51bfcf769ba->leave($__internal_ddcc5434695923febfb316888d32b6529138df4cf0a2ee188023a51bfcf769ba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c33cc5156162ce67bcf60960e6b2a7f63faaf856625fcb99693f3be4ea0c8c = $this->env->getExtension("native_profiler");
        $__internal_b2c33cc5156162ce67bcf60960e6b2a7f63faaf856625fcb99693f3be4ea0c8c->enter($__internal_b2c33cc5156162ce67bcf60960e6b2a7f63faaf856625fcb99693f3be4ea0c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b2c33cc5156162ce67bcf60960e6b2a7f63faaf856625fcb99693f3be4ea0c8c->leave($__internal_b2c33cc5156162ce67bcf60960e6b2a7f63faaf856625fcb99693f3be4ea0c8c_prof);

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
