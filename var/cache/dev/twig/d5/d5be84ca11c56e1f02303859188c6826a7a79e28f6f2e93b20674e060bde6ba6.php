<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_1ec9da0e8b3e52b769d6fa34cf11390c3de0cd056569a6316c8d2f223426fd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec9da0e8b3e52b769d6fa34cf11390c3de0cd056569a6316c8d2f223426fd28->enter($__internal_1ec9da0e8b3e52b769d6fa34cf11390c3de0cd056569a6316c8d2f223426fd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_10b256616f2900a357939d69065b7d592e4f48ef1d74e3c4ab76e27cb1ba4385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b256616f2900a357939d69065b7d592e4f48ef1d74e3c4ab76e27cb1ba4385->enter($__internal_10b256616f2900a357939d69065b7d592e4f48ef1d74e3c4ab76e27cb1ba4385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec9da0e8b3e52b769d6fa34cf11390c3de0cd056569a6316c8d2f223426fd28->leave($__internal_1ec9da0e8b3e52b769d6fa34cf11390c3de0cd056569a6316c8d2f223426fd28_prof);

        
        $__internal_10b256616f2900a357939d69065b7d592e4f48ef1d74e3c4ab76e27cb1ba4385->leave($__internal_10b256616f2900a357939d69065b7d592e4f48ef1d74e3c4ab76e27cb1ba4385_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd8a4383130768f1c124c7def143285abb0f2aa0d3f28f9862186629ba85378b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8a4383130768f1c124c7def143285abb0f2aa0d3f28f9862186629ba85378b->enter($__internal_cd8a4383130768f1c124c7def143285abb0f2aa0d3f28f9862186629ba85378b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20298161834efb87bae2ee3c373e2a08e59c59c69927a335a6d93efdbf0cc247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20298161834efb87bae2ee3c373e2a08e59c59c69927a335a6d93efdbf0cc247->enter($__internal_20298161834efb87bae2ee3c373e2a08e59c59c69927a335a6d93efdbf0cc247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_20298161834efb87bae2ee3c373e2a08e59c59c69927a335a6d93efdbf0cc247->leave($__internal_20298161834efb87bae2ee3c373e2a08e59c59c69927a335a6d93efdbf0cc247_prof);

        
        $__internal_cd8a4383130768f1c124c7def143285abb0f2aa0d3f28f9862186629ba85378b->leave($__internal_cd8a4383130768f1c124c7def143285abb0f2aa0d3f28f9862186629ba85378b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10a4dcf5a42eed1d7deb4318b4af70e1cc285d54904e93c2f6efbd8906a6af83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a4dcf5a42eed1d7deb4318b4af70e1cc285d54904e93c2f6efbd8906a6af83->enter($__internal_10a4dcf5a42eed1d7deb4318b4af70e1cc285d54904e93c2f6efbd8906a6af83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c4f9ecff529ab8cdf63249589c7f6f99d59f0b90aec3d4d7f21262de3f0abf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4f9ecff529ab8cdf63249589c7f6f99d59f0b90aec3d4d7f21262de3f0abf4->enter($__internal_6c4f9ecff529ab8cdf63249589c7f6f99d59f0b90aec3d4d7f21262de3f0abf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6c4f9ecff529ab8cdf63249589c7f6f99d59f0b90aec3d4d7f21262de3f0abf4->leave($__internal_6c4f9ecff529ab8cdf63249589c7f6f99d59f0b90aec3d4d7f21262de3f0abf4_prof);

        
        $__internal_10a4dcf5a42eed1d7deb4318b4af70e1cc285d54904e93c2f6efbd8906a6af83->leave($__internal_10a4dcf5a42eed1d7deb4318b4af70e1cc285d54904e93c2f6efbd8906a6af83_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30c961cfd218c82b9f6afa7c155b4266cfdbedbc5fbf19e4acba9d14a1779dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c961cfd218c82b9f6afa7c155b4266cfdbedbc5fbf19e4acba9d14a1779dc2->enter($__internal_30c961cfd218c82b9f6afa7c155b4266cfdbedbc5fbf19e4acba9d14a1779dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bed021d1136b98f1b279b16582a18238850ee61ce4122b5bcee64b8a2d41fda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed021d1136b98f1b279b16582a18238850ee61ce4122b5bcee64b8a2d41fda8->enter($__internal_bed021d1136b98f1b279b16582a18238850ee61ce4122b5bcee64b8a2d41fda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bed021d1136b98f1b279b16582a18238850ee61ce4122b5bcee64b8a2d41fda8->leave($__internal_bed021d1136b98f1b279b16582a18238850ee61ce4122b5bcee64b8a2d41fda8_prof);

        
        $__internal_30c961cfd218c82b9f6afa7c155b4266cfdbedbc5fbf19e4acba9d14a1779dc2->leave($__internal_30c961cfd218c82b9f6afa7c155b4266cfdbedbc5fbf19e4acba9d14a1779dc2_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/graphql-symfony-php/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
