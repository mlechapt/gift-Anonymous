<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bafb396ebaa18ac842a9c93f2721ce3ec4671cf8b906ec4d0638d427257bbbfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_3d06ccad4400cdf1113d7909cb4808a704790b8e0e789c139088f87b4730e10e = $this->env->getExtension("native_profiler");
        $__internal_3d06ccad4400cdf1113d7909cb4808a704790b8e0e789c139088f87b4730e10e->enter($__internal_3d06ccad4400cdf1113d7909cb4808a704790b8e0e789c139088f87b4730e10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d06ccad4400cdf1113d7909cb4808a704790b8e0e789c139088f87b4730e10e->leave($__internal_3d06ccad4400cdf1113d7909cb4808a704790b8e0e789c139088f87b4730e10e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9602cda1b05a4c90b9773a49ea5478832f7a025fdde7d9b5918f8bf0b5add416 = $this->env->getExtension("native_profiler");
        $__internal_9602cda1b05a4c90b9773a49ea5478832f7a025fdde7d9b5918f8bf0b5add416->enter($__internal_9602cda1b05a4c90b9773a49ea5478832f7a025fdde7d9b5918f8bf0b5add416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
\t<form class=\"form-inline\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t    <div class=\"form group\">
\t\t    <label  for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t     <div >
\t\t    \t<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t    </div>
\t\t</div>

\t\t<div class=\"form group\">
\t\t    <label  for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t     <div>
\t\t    \t<input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t    </div>
\t\t</div>

\t\t<div class=\"form group\">
\t\t\t<div >
\t    \t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t    \t\t<label for=\"remember_me\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t    \t</div>
\t    </div>
\t    <div class=\"form-group\">
        \t<div>
\t    \t\t<input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t    \t</div>
\t    </div>
\t</form>
";
        
        $__internal_9602cda1b05a4c90b9773a49ea5478832f7a025fdde7d9b5918f8bf0b5add416->leave($__internal_9602cda1b05a4c90b9773a49ea5478832f7a025fdde7d9b5918f8bf0b5add416_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  85 => 29,  73 => 20,  65 => 15,  60 => 13,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* 	<form class="form-inline" action="{{ path("fos_user_security_check") }}" method="post">*/
/* 	    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 	    <div class="form group">*/
/* 		    <label  for="username">{{ 'security.login.username'|trans }}</label>*/
/* 		     <div >*/
/* 		    	<input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="form group">*/
/* 		    <label  for="password">{{ 'security.login.password'|trans }}</label>*/
/* 		     <div>*/
/* 		    	<input class="form-control" type="password" id="password" name="_password" required="required" />*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="form group">*/
/* 			<div >*/
/* 	    		<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 	    		<label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* 	    	</div>*/
/* 	    </div>*/
/* 	    <div class="form-group">*/
/*         	<div>*/
/* 	    		<input class="btn btn-primary" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 	    	</div>*/
/* 	    </div>*/
/* 	</form>*/
/* {% endblock fos_user_content %}*/
/* */
