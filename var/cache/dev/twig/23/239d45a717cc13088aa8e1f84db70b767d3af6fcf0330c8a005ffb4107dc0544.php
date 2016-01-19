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
        $__internal_2de466f6d84eaef8e97aee7b02debddbdc6eac8707d0f9f5a4068910046e8741 = $this->env->getExtension("native_profiler");
        $__internal_2de466f6d84eaef8e97aee7b02debddbdc6eac8707d0f9f5a4068910046e8741->enter($__internal_2de466f6d84eaef8e97aee7b02debddbdc6eac8707d0f9f5a4068910046e8741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de466f6d84eaef8e97aee7b02debddbdc6eac8707d0f9f5a4068910046e8741->leave($__internal_2de466f6d84eaef8e97aee7b02debddbdc6eac8707d0f9f5a4068910046e8741_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6004e9ce4b18f4eb48fee2f07bcb91b2e4bdafc2ff1b15fd4eea305419566a94 = $this->env->getExtension("native_profiler");
        $__internal_6004e9ce4b18f4eb48fee2f07bcb91b2e4bdafc2ff1b15fd4eea305419566a94->enter($__internal_6004e9ce4b18f4eb48fee2f07bcb91b2e4bdafc2ff1b15fd4eea305419566a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6004e9ce4b18f4eb48fee2f07bcb91b2e4bdafc2ff1b15fd4eea305419566a94->leave($__internal_6004e9ce4b18f4eb48fee2f07bcb91b2e4bdafc2ff1b15fd4eea305419566a94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15a9bbd22440cb6b4d4df44b26fe35a72ce09387d03b420afe1986b0ccc78fab = $this->env->getExtension("native_profiler");
        $__internal_15a9bbd22440cb6b4d4df44b26fe35a72ce09387d03b420afe1986b0ccc78fab->enter($__internal_15a9bbd22440cb6b4d4df44b26fe35a72ce09387d03b420afe1986b0ccc78fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_15a9bbd22440cb6b4d4df44b26fe35a72ce09387d03b420afe1986b0ccc78fab->leave($__internal_15a9bbd22440cb6b4d4df44b26fe35a72ce09387d03b420afe1986b0ccc78fab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57d489cf8bbe238b869fc1f7b5074f9fd7f1095911fc86c1b0a5dd58db07e3fb = $this->env->getExtension("native_profiler");
        $__internal_57d489cf8bbe238b869fc1f7b5074f9fd7f1095911fc86c1b0a5dd58db07e3fb->enter($__internal_57d489cf8bbe238b869fc1f7b5074f9fd7f1095911fc86c1b0a5dd58db07e3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57d489cf8bbe238b869fc1f7b5074f9fd7f1095911fc86c1b0a5dd58db07e3fb->leave($__internal_57d489cf8bbe238b869fc1f7b5074f9fd7f1095911fc86c1b0a5dd58db07e3fb_prof);

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
