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
        $__internal_ace0aad07e352b097e565e9460a0adfe1694618c3febfd821bb917b4009f5259 = $this->env->getExtension("native_profiler");
        $__internal_ace0aad07e352b097e565e9460a0adfe1694618c3febfd821bb917b4009f5259->enter($__internal_ace0aad07e352b097e565e9460a0adfe1694618c3febfd821bb917b4009f5259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace0aad07e352b097e565e9460a0adfe1694618c3febfd821bb917b4009f5259->leave($__internal_ace0aad07e352b097e565e9460a0adfe1694618c3febfd821bb917b4009f5259_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_186e2e4c88fb5aa28b8f420b30e4bcc3defbc131df13076d39030966eebdaa5d = $this->env->getExtension("native_profiler");
        $__internal_186e2e4c88fb5aa28b8f420b30e4bcc3defbc131df13076d39030966eebdaa5d->enter($__internal_186e2e4c88fb5aa28b8f420b30e4bcc3defbc131df13076d39030966eebdaa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_186e2e4c88fb5aa28b8f420b30e4bcc3defbc131df13076d39030966eebdaa5d->leave($__internal_186e2e4c88fb5aa28b8f420b30e4bcc3defbc131df13076d39030966eebdaa5d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e347b72f8dd8e0dd8bf2eb045a3580e0849cba3e70d39ba6141fb0140d353d1f = $this->env->getExtension("native_profiler");
        $__internal_e347b72f8dd8e0dd8bf2eb045a3580e0849cba3e70d39ba6141fb0140d353d1f->enter($__internal_e347b72f8dd8e0dd8bf2eb045a3580e0849cba3e70d39ba6141fb0140d353d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e347b72f8dd8e0dd8bf2eb045a3580e0849cba3e70d39ba6141fb0140d353d1f->leave($__internal_e347b72f8dd8e0dd8bf2eb045a3580e0849cba3e70d39ba6141fb0140d353d1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee0bbddeb67a078675d38b22f7f3e0bd506cc85e81a1c77d89e4937248218225 = $this->env->getExtension("native_profiler");
        $__internal_ee0bbddeb67a078675d38b22f7f3e0bd506cc85e81a1c77d89e4937248218225->enter($__internal_ee0bbddeb67a078675d38b22f7f3e0bd506cc85e81a1c77d89e4937248218225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ee0bbddeb67a078675d38b22f7f3e0bd506cc85e81a1c77d89e4937248218225->leave($__internal_ee0bbddeb67a078675d38b22f7f3e0bd506cc85e81a1c77d89e4937248218225_prof);

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
