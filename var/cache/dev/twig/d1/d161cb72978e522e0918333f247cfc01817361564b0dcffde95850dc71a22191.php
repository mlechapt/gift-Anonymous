<?php

/* Emails/invitationEmail.html.twig */
class __TwigTemplate_7221b048f3b078028c1bc1c999acd9eca8f1384d04c67de16dff4f9d5b04c82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82fbb34ece7f3053ef7e79af3abec746cae40660d6040db27fb932153eb3abce = $this->env->getExtension("native_profiler");
        $__internal_82fbb34ece7f3053ef7e79af3abec746cae40660d6040db27fb932153eb3abce->enter($__internal_82fbb34ece7f3053ef7e79af3abec746cae40660d6040db27fb932153eb3abce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/invitationEmail.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        
        $__internal_82fbb34ece7f3053ef7e79af3abec746cae40660d6040db27fb932153eb3abce->leave($__internal_82fbb34ece7f3053ef7e79af3abec746cae40660d6040db27fb932153eb3abce_prof);

    }

    public function getTemplateName()
    {
        return "Emails/invitationEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ message }}*/
