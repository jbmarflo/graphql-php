<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_02ab95058e427beca06f612abdcd31295d30f9479c7f78922de40c32dc67e9c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ab95058e427beca06f612abdcd31295d30f9479c7f78922de40c32dc67e9c1->enter($__internal_02ab95058e427beca06f612abdcd31295d30f9479c7f78922de40c32dc67e9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_840caa9a16395777a51a3fb4cefcdd6f8d4b4f9965cc4ea67aebfcaf8ac399ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840caa9a16395777a51a3fb4cefcdd6f8d4b4f9965cc4ea67aebfcaf8ac399ee->enter($__internal_840caa9a16395777a51a3fb4cefcdd6f8d4b4f9965cc4ea67aebfcaf8ac399ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02ab95058e427beca06f612abdcd31295d30f9479c7f78922de40c32dc67e9c1->leave($__internal_02ab95058e427beca06f612abdcd31295d30f9479c7f78922de40c32dc67e9c1_prof);

        
        $__internal_840caa9a16395777a51a3fb4cefcdd6f8d4b4f9965cc4ea67aebfcaf8ac399ee->leave($__internal_840caa9a16395777a51a3fb4cefcdd6f8d4b4f9965cc4ea67aebfcaf8ac399ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3568a6fa55b106668aaa0592b69e156c13c4342020924eecd244cbd596ab12e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3568a6fa55b106668aaa0592b69e156c13c4342020924eecd244cbd596ab12e5->enter($__internal_3568a6fa55b106668aaa0592b69e156c13c4342020924eecd244cbd596ab12e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c3cfb1ec966e08a5bcfcd4c78c15ef86c190e6fb378c1243aeea5c931730180e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cfb1ec966e08a5bcfcd4c78c15ef86c190e6fb378c1243aeea5c931730180e->enter($__internal_c3cfb1ec966e08a5bcfcd4c78c15ef86c190e6fb378c1243aeea5c931730180e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3cfb1ec966e08a5bcfcd4c78c15ef86c190e6fb378c1243aeea5c931730180e->leave($__internal_c3cfb1ec966e08a5bcfcd4c78c15ef86c190e6fb378c1243aeea5c931730180e_prof);

        
        $__internal_3568a6fa55b106668aaa0592b69e156c13c4342020924eecd244cbd596ab12e5->leave($__internal_3568a6fa55b106668aaa0592b69e156c13c4342020924eecd244cbd596ab12e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7286873069ab9717c1899ba54ebdddae6a47eec524f0532f508d813be4a8aca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7286873069ab9717c1899ba54ebdddae6a47eec524f0532f508d813be4a8aca3->enter($__internal_7286873069ab9717c1899ba54ebdddae6a47eec524f0532f508d813be4a8aca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ce35e262fb00471b3f6d83f0bf231568a5e265f7cac56fa00f5d17eb4ee5db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce35e262fb00471b3f6d83f0bf231568a5e265f7cac56fa00f5d17eb4ee5db6->enter($__internal_0ce35e262fb00471b3f6d83f0bf231568a5e265f7cac56fa00f5d17eb4ee5db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ce35e262fb00471b3f6d83f0bf231568a5e265f7cac56fa00f5d17eb4ee5db6->leave($__internal_0ce35e262fb00471b3f6d83f0bf231568a5e265f7cac56fa00f5d17eb4ee5db6_prof);

        
        $__internal_7286873069ab9717c1899ba54ebdddae6a47eec524f0532f508d813be4a8aca3->leave($__internal_7286873069ab9717c1899ba54ebdddae6a47eec524f0532f508d813be4a8aca3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a3cce77da1b1418d3246b21e30fc3e6cea11a431fae119aedeb14d4e8c8af36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3cce77da1b1418d3246b21e30fc3e6cea11a431fae119aedeb14d4e8c8af36->enter($__internal_6a3cce77da1b1418d3246b21e30fc3e6cea11a431fae119aedeb14d4e8c8af36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83c9e37b1c3188e711030e526a92478fba7875495bc7662fa74fca1c9846ab6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c9e37b1c3188e711030e526a92478fba7875495bc7662fa74fca1c9846ab6a->enter($__internal_83c9e37b1c3188e711030e526a92478fba7875495bc7662fa74fca1c9846ab6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_83c9e37b1c3188e711030e526a92478fba7875495bc7662fa74fca1c9846ab6a->leave($__internal_83c9e37b1c3188e711030e526a92478fba7875495bc7662fa74fca1c9846ab6a_prof);

        
        $__internal_6a3cce77da1b1418d3246b21e30fc3e6cea11a431fae119aedeb14d4e8c8af36->leave($__internal_6a3cce77da1b1418d3246b21e30fc3e6cea11a431fae119aedeb14d4e8c8af36_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/graphql-symfony-php/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
