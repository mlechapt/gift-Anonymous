<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_32802a4da52082970d7a26adca37246f641b196aa71eaf697e3db52aa5110dcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1de4e41052589a712f454aedf081c88f44eb07fda3d6ed91db032ab59663446c = $this->env->getExtension("native_profiler");
        $__internal_1de4e41052589a712f454aedf081c88f44eb07fda3d6ed91db032ab59663446c->enter($__internal_1de4e41052589a712f454aedf081c88f44eb07fda3d6ed91db032ab59663446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1de4e41052589a712f454aedf081c88f44eb07fda3d6ed91db032ab59663446c->leave($__internal_1de4e41052589a712f454aedf081c88f44eb07fda3d6ed91db032ab59663446c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a1dd11289dafe634cee32e1cd472c0581474339b593646350fb696a35049f90 = $this->env->getExtension("native_profiler");
        $__internal_3a1dd11289dafe634cee32e1cd472c0581474339b593646350fb696a35049f90->enter($__internal_3a1dd11289dafe634cee32e1cd472c0581474339b593646350fb696a35049f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3a1dd11289dafe634cee32e1cd472c0581474339b593646350fb696a35049f90->leave($__internal_3a1dd11289dafe634cee32e1cd472c0581474339b593646350fb696a35049f90_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e384884b3371a71a53173a5bca55efb34d19b83477394b0b27b2a1c6dbba290c = $this->env->getExtension("native_profiler");
        $__internal_e384884b3371a71a53173a5bca55efb34d19b83477394b0b27b2a1c6dbba290c->enter($__internal_e384884b3371a71a53173a5bca55efb34d19b83477394b0b27b2a1c6dbba290c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e384884b3371a71a53173a5bca55efb34d19b83477394b0b27b2a1c6dbba290c->leave($__internal_e384884b3371a71a53173a5bca55efb34d19b83477394b0b27b2a1c6dbba290c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed721dda15a94959fbbf68c98fc15a9dd9a0f1b804c163699e043d84d739679a = $this->env->getExtension("native_profiler");
        $__internal_ed721dda15a94959fbbf68c98fc15a9dd9a0f1b804c163699e043d84d739679a->enter($__internal_ed721dda15a94959fbbf68c98fc15a9dd9a0f1b804c163699e043d84d739679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ed721dda15a94959fbbf68c98fc15a9dd9a0f1b804c163699e043d84d739679a->leave($__internal_ed721dda15a94959fbbf68c98fc15a9dd9a0f1b804c163699e043d84d739679a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
