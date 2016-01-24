<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_179b092a0ff986a0d84cb0c7eae8df4b932b98e1373df181e0a60ba15a1ade8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_900343bd4c885012227ef41f15b5f991e66a3d1c1308f4c1092ac9bed166678a = $this->env->getExtension("native_profiler");
        $__internal_900343bd4c885012227ef41f15b5f991e66a3d1c1308f4c1092ac9bed166678a->enter($__internal_900343bd4c885012227ef41f15b5f991e66a3d1c1308f4c1092ac9bed166678a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_900343bd4c885012227ef41f15b5f991e66a3d1c1308f4c1092ac9bed166678a->leave($__internal_900343bd4c885012227ef41f15b5f991e66a3d1c1308f4c1092ac9bed166678a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e3a8b532656747a590ff3dc6946a2b1f9b9f7d596ac48bc0e06f8d36c35e60c = $this->env->getExtension("native_profiler");
        $__internal_7e3a8b532656747a590ff3dc6946a2b1f9b9f7d596ac48bc0e06f8d36c35e60c->enter($__internal_7e3a8b532656747a590ff3dc6946a2b1f9b9f7d596ac48bc0e06f8d36c35e60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e3a8b532656747a590ff3dc6946a2b1f9b9f7d596ac48bc0e06f8d36c35e60c->leave($__internal_7e3a8b532656747a590ff3dc6946a2b1f9b9f7d596ac48bc0e06f8d36c35e60c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00bfedaea4848ee5a8a9aaa3299fb515a8d654318e3661305ad2f776aec01cf7 = $this->env->getExtension("native_profiler");
        $__internal_00bfedaea4848ee5a8a9aaa3299fb515a8d654318e3661305ad2f776aec01cf7->enter($__internal_00bfedaea4848ee5a8a9aaa3299fb515a8d654318e3661305ad2f776aec01cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_00bfedaea4848ee5a8a9aaa3299fb515a8d654318e3661305ad2f776aec01cf7->leave($__internal_00bfedaea4848ee5a8a9aaa3299fb515a8d654318e3661305ad2f776aec01cf7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41b15d03fbf72fd701eb2151db222c3edc10ac5264259ce70b5ba5dddb37d0df = $this->env->getExtension("native_profiler");
        $__internal_41b15d03fbf72fd701eb2151db222c3edc10ac5264259ce70b5ba5dddb37d0df->enter($__internal_41b15d03fbf72fd701eb2151db222c3edc10ac5264259ce70b5ba5dddb37d0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_41b15d03fbf72fd701eb2151db222c3edc10ac5264259ce70b5ba5dddb37d0df->leave($__internal_41b15d03fbf72fd701eb2151db222c3edc10ac5264259ce70b5ba5dddb37d0df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
