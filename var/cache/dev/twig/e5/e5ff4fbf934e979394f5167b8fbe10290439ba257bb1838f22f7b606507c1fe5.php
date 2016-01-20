<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b6512a9f10aa337b18443613805ea459c426be249bb1d82d0b1d0a93efe78ab9 extends Twig_Template
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
        $__internal_e24ff5065f58ac67b52e8bc598cf8f4a4b6ba44756d70836cadec37636f93126 = $this->env->getExtension("native_profiler");
        $__internal_e24ff5065f58ac67b52e8bc598cf8f4a4b6ba44756d70836cadec37636f93126->enter($__internal_e24ff5065f58ac67b52e8bc598cf8f4a4b6ba44756d70836cadec37636f93126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e24ff5065f58ac67b52e8bc598cf8f4a4b6ba44756d70836cadec37636f93126->leave($__internal_e24ff5065f58ac67b52e8bc598cf8f4a4b6ba44756d70836cadec37636f93126_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_397cf45f3272256be451a2eb774c5b85f994be20653f40ec9c23bd8d8c6b5eb2 = $this->env->getExtension("native_profiler");
        $__internal_397cf45f3272256be451a2eb774c5b85f994be20653f40ec9c23bd8d8c6b5eb2->enter($__internal_397cf45f3272256be451a2eb774c5b85f994be20653f40ec9c23bd8d8c6b5eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "\t<form class=\"form-inline\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t    <div class=\"form group\">
\t\t    <label  for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t     <div >
\t\t    \t<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t    </div>
\t\t</div>

\t\t<div class=\"form group\">
\t\t    <label  for=\"password\">";
        // line 19
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
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t    \t</div>
\t    </div>
\t    <div class=\"form-group\">
        \t<div>
\t    \t\t<input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t    \t</div>
\t    </div>
\t</form>
\t<br/>
\t<div class=\"col-md-4 alert alert-info\">
\t\tSi vous navez pas encore de compte, vous pouvez en créer <a href='register'>en cliquant ici</a>
\t</div> 
";
        
        $__internal_397cf45f3272256be451a2eb774c5b85f994be20653f40ec9c23bd8d8c6b5eb2->leave($__internal_397cf45f3272256be451a2eb774c5b85f994be20653f40ec9c23bd8d8c6b5eb2_prof);

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
        return array (  91 => 33,  83 => 28,  71 => 19,  63 => 14,  58 => 12,  53 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div >{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
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
/* 	<br/>*/
/* 	<div class="col-md-4 alert alert-info">*/
/* 		Si vous navez pas encore de compte, vous pouvez en créer <a href='register'>en cliquant ici</a>*/
/* 	</div> */
/* {% endblock fos_user_content %}*/
/* */
