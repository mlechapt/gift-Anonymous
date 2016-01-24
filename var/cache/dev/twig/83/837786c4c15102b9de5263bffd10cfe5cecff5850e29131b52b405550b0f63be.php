<?php

/* Emails/repartitionEmail.html.twig */
class __TwigTemplate_7b6bc6f35dafee35570387342d54c7bf51a190202bdd5dd4349eff90443a5697 extends Twig_Template
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
        $__internal_c7e836674d1f62ee0141ffceb9233bd21ccecddfa3d2d70f01f06ffdba1378b4 = $this->env->getExtension("native_profiler");
        $__internal_c7e836674d1f62ee0141ffceb9233bd21ccecddfa3d2d70f01f06ffdba1378b4->enter($__internal_c7e836674d1f62ee0141ffceb9233bd21ccecddfa3d2d70f01f06ffdba1378b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/repartitionEmail.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        
        $__internal_c7e836674d1f62ee0141ffceb9233bd21ccecddfa3d2d70f01f06ffdba1378b4->leave($__internal_c7e836674d1f62ee0141ffceb9233bd21ccecddfa3d2d70f01f06ffdba1378b4_prof);

    }

    public function getTemplateName()
    {
        return "Emails/repartitionEmail.html.twig";
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
