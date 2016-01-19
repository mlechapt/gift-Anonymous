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
        $__internal_612b8411dc44453bc523c9b530d047947b13cc4375617ad454eabf54d97b90cf = $this->env->getExtension("native_profiler");
        $__internal_612b8411dc44453bc523c9b530d047947b13cc4375617ad454eabf54d97b90cf->enter($__internal_612b8411dc44453bc523c9b530d047947b13cc4375617ad454eabf54d97b90cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_612b8411dc44453bc523c9b530d047947b13cc4375617ad454eabf54d97b90cf->leave($__internal_612b8411dc44453bc523c9b530d047947b13cc4375617ad454eabf54d97b90cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e25035c45e8d920eb15927dd69ce00f287555298983e70dd3edc6de7828716b = $this->env->getExtension("native_profiler");
        $__internal_2e25035c45e8d920eb15927dd69ce00f287555298983e70dd3edc6de7828716b->enter($__internal_2e25035c45e8d920eb15927dd69ce00f287555298983e70dd3edc6de7828716b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2e25035c45e8d920eb15927dd69ce00f287555298983e70dd3edc6de7828716b->leave($__internal_2e25035c45e8d920eb15927dd69ce00f287555298983e70dd3edc6de7828716b_prof);

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
