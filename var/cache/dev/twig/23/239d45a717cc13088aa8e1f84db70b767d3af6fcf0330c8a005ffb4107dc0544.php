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
        $__internal_b6cc9c0f0ad2986277c6e53fa7431c8db94fa66671b19ad6e8638d725086633c = $this->env->getExtension("native_profiler");
        $__internal_b6cc9c0f0ad2986277c6e53fa7431c8db94fa66671b19ad6e8638d725086633c->enter($__internal_b6cc9c0f0ad2986277c6e53fa7431c8db94fa66671b19ad6e8638d725086633c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6cc9c0f0ad2986277c6e53fa7431c8db94fa66671b19ad6e8638d725086633c->leave($__internal_b6cc9c0f0ad2986277c6e53fa7431c8db94fa66671b19ad6e8638d725086633c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91c99f71a9352f981355900c1ec289da0831f66b8047700ce8c0d935e55cdc1e = $this->env->getExtension("native_profiler");
        $__internal_91c99f71a9352f981355900c1ec289da0831f66b8047700ce8c0d935e55cdc1e->enter($__internal_91c99f71a9352f981355900c1ec289da0831f66b8047700ce8c0d935e55cdc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_91c99f71a9352f981355900c1ec289da0831f66b8047700ce8c0d935e55cdc1e->leave($__internal_91c99f71a9352f981355900c1ec289da0831f66b8047700ce8c0d935e55cdc1e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0395b73b023bd6e0a21fd2e720d9cca2d2a8e619e35e97e9a6f430add91b3b81 = $this->env->getExtension("native_profiler");
        $__internal_0395b73b023bd6e0a21fd2e720d9cca2d2a8e619e35e97e9a6f430add91b3b81->enter($__internal_0395b73b023bd6e0a21fd2e720d9cca2d2a8e619e35e97e9a6f430add91b3b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0395b73b023bd6e0a21fd2e720d9cca2d2a8e619e35e97e9a6f430add91b3b81->leave($__internal_0395b73b023bd6e0a21fd2e720d9cca2d2a8e619e35e97e9a6f430add91b3b81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8171cbb914a96fd8c817b929bcd7c449459e79142a9dfa8e5f3acb5ee650ac7 = $this->env->getExtension("native_profiler");
        $__internal_a8171cbb914a96fd8c817b929bcd7c449459e79142a9dfa8e5f3acb5ee650ac7->enter($__internal_a8171cbb914a96fd8c817b929bcd7c449459e79142a9dfa8e5f3acb5ee650ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a8171cbb914a96fd8c817b929bcd7c449459e79142a9dfa8e5f3acb5ee650ac7->leave($__internal_a8171cbb914a96fd8c817b929bcd7c449459e79142a9dfa8e5f3acb5ee650ac7_prof);

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
