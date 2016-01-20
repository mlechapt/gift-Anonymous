<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7fa7329c232c2496c4578a31b88587ecdd3dcef7a94541c84d7a72d092a41c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_826828429d07ae8bf5893b80cef919cd1eb40a7c74d0a476620c42ca26be58fd = $this->env->getExtension("native_profiler");
        $__internal_826828429d07ae8bf5893b80cef919cd1eb40a7c74d0a476620c42ca26be58fd->enter($__internal_826828429d07ae8bf5893b80cef919cd1eb40a7c74d0a476620c42ca26be58fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_826828429d07ae8bf5893b80cef919cd1eb40a7c74d0a476620c42ca26be58fd->leave($__internal_826828429d07ae8bf5893b80cef919cd1eb40a7c74d0a476620c42ca26be58fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bf599a2d70c3387f58aea94b6397b3a1927b1abae734577c7fac844325bfa63 = $this->env->getExtension("native_profiler");
        $__internal_7bf599a2d70c3387f58aea94b6397b3a1927b1abae734577c7fac844325bfa63->enter($__internal_7bf599a2d70c3387f58aea94b6397b3a1927b1abae734577c7fac844325bfa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7bf599a2d70c3387f58aea94b6397b3a1927b1abae734577c7fac844325bfa63->leave($__internal_7bf599a2d70c3387f58aea94b6397b3a1927b1abae734577c7fac844325bfa63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
