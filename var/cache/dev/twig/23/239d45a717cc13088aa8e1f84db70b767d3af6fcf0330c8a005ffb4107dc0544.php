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
        $__internal_011b259d75c51aec9fcca4c5388b635997213498d5c815667530b1c465c4715c = $this->env->getExtension("native_profiler");
        $__internal_011b259d75c51aec9fcca4c5388b635997213498d5c815667530b1c465c4715c->enter($__internal_011b259d75c51aec9fcca4c5388b635997213498d5c815667530b1c465c4715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011b259d75c51aec9fcca4c5388b635997213498d5c815667530b1c465c4715c->leave($__internal_011b259d75c51aec9fcca4c5388b635997213498d5c815667530b1c465c4715c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ffa2987761865f4bfecf99e4533d5fb4fb776099f6dea402fffd51bb995a08da = $this->env->getExtension("native_profiler");
        $__internal_ffa2987761865f4bfecf99e4533d5fb4fb776099f6dea402fffd51bb995a08da->enter($__internal_ffa2987761865f4bfecf99e4533d5fb4fb776099f6dea402fffd51bb995a08da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ffa2987761865f4bfecf99e4533d5fb4fb776099f6dea402fffd51bb995a08da->leave($__internal_ffa2987761865f4bfecf99e4533d5fb4fb776099f6dea402fffd51bb995a08da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d83eb9e9246f55cc7044cd4eea04d1bf367d1e4a44b8d62c85a1cfa23e60ca41 = $this->env->getExtension("native_profiler");
        $__internal_d83eb9e9246f55cc7044cd4eea04d1bf367d1e4a44b8d62c85a1cfa23e60ca41->enter($__internal_d83eb9e9246f55cc7044cd4eea04d1bf367d1e4a44b8d62c85a1cfa23e60ca41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d83eb9e9246f55cc7044cd4eea04d1bf367d1e4a44b8d62c85a1cfa23e60ca41->leave($__internal_d83eb9e9246f55cc7044cd4eea04d1bf367d1e4a44b8d62c85a1cfa23e60ca41_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2177c8283b51701e8ea4c2df86a44f91a5c7438bc4820f4fb5174d2d6965cd6c = $this->env->getExtension("native_profiler");
        $__internal_2177c8283b51701e8ea4c2df86a44f91a5c7438bc4820f4fb5174d2d6965cd6c->enter($__internal_2177c8283b51701e8ea4c2df86a44f91a5c7438bc4820f4fb5174d2d6965cd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2177c8283b51701e8ea4c2df86a44f91a5c7438bc4820f4fb5174d2d6965cd6c->leave($__internal_2177c8283b51701e8ea4c2df86a44f91a5c7438bc4820f4fb5174d2d6965cd6c_prof);

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
