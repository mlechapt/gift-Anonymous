<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d8588c1623ac0876c60672ad140514ba4b194409a850db77e494f88898815ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("giftBundle:Default:layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "giftBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc51218faeec3f6582c0f6e3ffb7b02dc4cf390a38bebe6377ac667209dcedd8 = $this->env->getExtension("native_profiler");
        $__internal_fc51218faeec3f6582c0f6e3ffb7b02dc4cf390a38bebe6377ac667209dcedd8->enter($__internal_fc51218faeec3f6582c0f6e3ffb7b02dc4cf390a38bebe6377ac667209dcedd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc51218faeec3f6582c0f6e3ffb7b02dc4cf390a38bebe6377ac667209dcedd8->leave($__internal_fc51218faeec3f6582c0f6e3ffb7b02dc4cf390a38bebe6377ac667209dcedd8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d6bf194aab2247ea71fd679a7a2850c435925e065ee3dce7e309b3f9b7d8386 = $this->env->getExtension("native_profiler");
        $__internal_9d6bf194aab2247ea71fd679a7a2850c435925e065ee3dce7e309b3f9b7d8386->enter($__internal_9d6bf194aab2247ea71fd679a7a2850c435925e065ee3dce7e309b3f9b7d8386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "    \t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
      \t";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
    \t</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  ";
        // line 19
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_9d6bf194aab2247ea71fd679a7a2850c435925e065ee3dce7e309b3f9b7d8386->leave($__internal_9d6bf194aab2247ea71fd679a7a2850c435925e065ee3dce7e309b3f9b7d8386_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3562abab38c6a8be095f7e889423ba588434270cf2d7888509358e49a571dbc = $this->env->getExtension("native_profiler");
        $__internal_e3562abab38c6a8be095f7e889423ba588434270cf2d7888509358e49a571dbc->enter($__internal_e3562abab38c6a8be095f7e889423ba588434270cf2d7888509358e49a571dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "  ";
        
        $__internal_e3562abab38c6a8be095f7e889423ba588434270cf2d7888509358e49a571dbc->leave($__internal_e3562abab38c6a8be095f7e889423ba588434270cf2d7888509358e49a571dbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  88 => 19,  80 => 21,  77 => 19,  74 => 17,  68 => 16,  59 => 13,  54 => 12,  49 => 11,  44 => 10,  41 => 8,  35 => 7,  11 => 4,);
    }
}
/* {# src/userBundle/Resources/views/layout.html.twig #}*/
/* */
/* {# On étend notre layout #}*/
/* {% extends "giftBundle:Default:layout.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*   {% for key, messages in app.session.flashbag.all() %}*/
/*     {% for message in messages %}*/
/*     	<div class="alert alert-{{ key }}">*/
/*       	{{ message|trans({}, 'FOSUserBundle') }}*/
/*     	</div>*/
/*     {% endfor %}*/
/*   {% endfor %}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
