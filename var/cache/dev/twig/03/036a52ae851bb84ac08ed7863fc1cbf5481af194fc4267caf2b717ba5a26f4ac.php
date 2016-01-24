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
        $__internal_ef586beea911a95a1c0e6a0cc117a464553ab425e6c2ea40e379814ddfdc1828 = $this->env->getExtension("native_profiler");
        $__internal_ef586beea911a95a1c0e6a0cc117a464553ab425e6c2ea40e379814ddfdc1828->enter($__internal_ef586beea911a95a1c0e6a0cc117a464553ab425e6c2ea40e379814ddfdc1828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef586beea911a95a1c0e6a0cc117a464553ab425e6c2ea40e379814ddfdc1828->leave($__internal_ef586beea911a95a1c0e6a0cc117a464553ab425e6c2ea40e379814ddfdc1828_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_649f90caf320f13ebc62112743e7acfafe1fdbddcff431d680a195aefe7ba114 = $this->env->getExtension("native_profiler");
        $__internal_649f90caf320f13ebc62112743e7acfafe1fdbddcff431d680a195aefe7ba114->enter($__internal_649f90caf320f13ebc62112743e7acfafe1fdbddcff431d680a195aefe7ba114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_649f90caf320f13ebc62112743e7acfafe1fdbddcff431d680a195aefe7ba114->leave($__internal_649f90caf320f13ebc62112743e7acfafe1fdbddcff431d680a195aefe7ba114_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2597bc5d8010e8874a8771cae5c0cbe86177a11926c21d3ad1f137e28aecd790 = $this->env->getExtension("native_profiler");
        $__internal_2597bc5d8010e8874a8771cae5c0cbe86177a11926c21d3ad1f137e28aecd790->enter($__internal_2597bc5d8010e8874a8771cae5c0cbe86177a11926c21d3ad1f137e28aecd790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2597bc5d8010e8874a8771cae5c0cbe86177a11926c21d3ad1f137e28aecd790->leave($__internal_2597bc5d8010e8874a8771cae5c0cbe86177a11926c21d3ad1f137e28aecd790_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82438ed9d6de201f782088685903d2a20610a80e22ffeb9d038c91a3267a89cf = $this->env->getExtension("native_profiler");
        $__internal_82438ed9d6de201f782088685903d2a20610a80e22ffeb9d038c91a3267a89cf->enter($__internal_82438ed9d6de201f782088685903d2a20610a80e22ffeb9d038c91a3267a89cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_82438ed9d6de201f782088685903d2a20610a80e22ffeb9d038c91a3267a89cf->leave($__internal_82438ed9d6de201f782088685903d2a20610a80e22ffeb9d038c91a3267a89cf_prof);

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
