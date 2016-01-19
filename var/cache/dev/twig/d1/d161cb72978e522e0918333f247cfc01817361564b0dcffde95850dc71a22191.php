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
        $__internal_3fcb534e1a99e06c225de0c1c1f134b8e1223f770d5e2e690dc7beb6747a0255 = $this->env->getExtension("native_profiler");
        $__internal_3fcb534e1a99e06c225de0c1c1f134b8e1223f770d5e2e690dc7beb6747a0255->enter($__internal_3fcb534e1a99e06c225de0c1c1f134b8e1223f770d5e2e690dc7beb6747a0255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/invitationEmail.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        
        $__internal_3fcb534e1a99e06c225de0c1c1f134b8e1223f770d5e2e690dc7beb6747a0255->leave($__internal_3fcb534e1a99e06c225de0c1c1f134b8e1223f770d5e2e690dc7beb6747a0255_prof);

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
