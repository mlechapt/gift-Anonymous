<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e627489a288888c555925f151956f15f69522149fe0665e668889557544f0633 extends Twig_Template
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
        $__internal_cbbd21a91ab8feb74dd735440788c6943a6620973517180be74354a3a39ab129 = $this->env->getExtension("native_profiler");
        $__internal_cbbd21a91ab8feb74dd735440788c6943a6620973517180be74354a3a39ab129->enter($__internal_cbbd21a91ab8feb74dd735440788c6943a6620973517180be74354a3a39ab129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbbd21a91ab8feb74dd735440788c6943a6620973517180be74354a3a39ab129->leave($__internal_cbbd21a91ab8feb74dd735440788c6943a6620973517180be74354a3a39ab129_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57fddf7d89d0e92f7362126f0ae0962243c95e64c336d14abba852c00c61179f = $this->env->getExtension("native_profiler");
        $__internal_57fddf7d89d0e92f7362126f0ae0962243c95e64c336d14abba852c00c61179f->enter($__internal_57fddf7d89d0e92f7362126f0ae0962243c95e64c336d14abba852c00c61179f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_57fddf7d89d0e92f7362126f0ae0962243c95e64c336d14abba852c00c61179f->leave($__internal_57fddf7d89d0e92f7362126f0ae0962243c95e64c336d14abba852c00c61179f_prof);

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
