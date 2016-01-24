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
        $__internal_d9ea9329e22527d32aa441230b354cf50eabc4b22d2b4f0dec36b8d4f2f53681 = $this->env->getExtension("native_profiler");
        $__internal_d9ea9329e22527d32aa441230b354cf50eabc4b22d2b4f0dec36b8d4f2f53681->enter($__internal_d9ea9329e22527d32aa441230b354cf50eabc4b22d2b4f0dec36b8d4f2f53681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/invitationEmail.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        
        $__internal_d9ea9329e22527d32aa441230b354cf50eabc4b22d2b4f0dec36b8d4f2f53681->leave($__internal_d9ea9329e22527d32aa441230b354cf50eabc4b22d2b4f0dec36b8d4f2f53681_prof);

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
