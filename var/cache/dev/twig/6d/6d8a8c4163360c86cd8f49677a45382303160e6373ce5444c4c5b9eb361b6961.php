<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e3b4f609f365dea7f633f0cd8623fa4b7572f2dcc032990f05109db0c26edb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3b4f609f365dea7f633f0cd8623fa4b7572f2dcc032990f05109db0c26edb2->enter($__internal_5e3b4f609f365dea7f633f0cd8623fa4b7572f2dcc032990f05109db0c26edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ce4621446367d1c2d6a7cebea1934f572676e19804f492a97e20a431067f9872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4621446367d1c2d6a7cebea1934f572676e19804f492a97e20a431067f9872->enter($__internal_ce4621446367d1c2d6a7cebea1934f572676e19804f492a97e20a431067f9872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5e3b4f609f365dea7f633f0cd8623fa4b7572f2dcc032990f05109db0c26edb2->leave($__internal_5e3b4f609f365dea7f633f0cd8623fa4b7572f2dcc032990f05109db0c26edb2_prof);

        
        $__internal_ce4621446367d1c2d6a7cebea1934f572676e19804f492a97e20a431067f9872->leave($__internal_ce4621446367d1c2d6a7cebea1934f572676e19804f492a97e20a431067f9872_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_407f9d3f201f13b7c4d700aed40c9377ecc748a81e3d0233c8e122f55086175e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407f9d3f201f13b7c4d700aed40c9377ecc748a81e3d0233c8e122f55086175e->enter($__internal_407f9d3f201f13b7c4d700aed40c9377ecc748a81e3d0233c8e122f55086175e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e04b9a88c2cfea014e3ca8c2261160dec02e5cc8fda8e917759c91f904f51d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e04b9a88c2cfea014e3ca8c2261160dec02e5cc8fda8e917759c91f904f51d2->enter($__internal_9e04b9a88c2cfea014e3ca8c2261160dec02e5cc8fda8e917759c91f904f51d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e04b9a88c2cfea014e3ca8c2261160dec02e5cc8fda8e917759c91f904f51d2->leave($__internal_9e04b9a88c2cfea014e3ca8c2261160dec02e5cc8fda8e917759c91f904f51d2_prof);

        
        $__internal_407f9d3f201f13b7c4d700aed40c9377ecc748a81e3d0233c8e122f55086175e->leave($__internal_407f9d3f201f13b7c4d700aed40c9377ecc748a81e3d0233c8e122f55086175e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e096282ae571d3b014fa721fa70a04449a849d45b249ed15738e9e98258d86e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e096282ae571d3b014fa721fa70a04449a849d45b249ed15738e9e98258d86e0->enter($__internal_e096282ae571d3b014fa721fa70a04449a849d45b249ed15738e9e98258d86e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ebaa3eb630eb978c1bb3482e5ce2646be9a24530c8eb05d96e5d4402407d7155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebaa3eb630eb978c1bb3482e5ce2646be9a24530c8eb05d96e5d4402407d7155->enter($__internal_ebaa3eb630eb978c1bb3482e5ce2646be9a24530c8eb05d96e5d4402407d7155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ebaa3eb630eb978c1bb3482e5ce2646be9a24530c8eb05d96e5d4402407d7155->leave($__internal_ebaa3eb630eb978c1bb3482e5ce2646be9a24530c8eb05d96e5d4402407d7155_prof);

        
        $__internal_e096282ae571d3b014fa721fa70a04449a849d45b249ed15738e9e98258d86e0->leave($__internal_e096282ae571d3b014fa721fa70a04449a849d45b249ed15738e9e98258d86e0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b03b342819e8d73e7db47a2442966b3511ecbc171dbe7e2cf1d74f5d3bf39edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03b342819e8d73e7db47a2442966b3511ecbc171dbe7e2cf1d74f5d3bf39edf->enter($__internal_b03b342819e8d73e7db47a2442966b3511ecbc171dbe7e2cf1d74f5d3bf39edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f21e9f6cdb66d9637b0f61f4e97fd4079701a52ed1fc0f38d29acf95f5deb90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21e9f6cdb66d9637b0f61f4e97fd4079701a52ed1fc0f38d29acf95f5deb90c->enter($__internal_f21e9f6cdb66d9637b0f61f4e97fd4079701a52ed1fc0f38d29acf95f5deb90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f21e9f6cdb66d9637b0f61f4e97fd4079701a52ed1fc0f38d29acf95f5deb90c->leave($__internal_f21e9f6cdb66d9637b0f61f4e97fd4079701a52ed1fc0f38d29acf95f5deb90c_prof);

        
        $__internal_b03b342819e8d73e7db47a2442966b3511ecbc171dbe7e2cf1d74f5d3bf39edf->leave($__internal_b03b342819e8d73e7db47a2442966b3511ecbc171dbe7e2cf1d74f5d3bf39edf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15f4d1eae9b48981f3fac2b67c1ae8ddc2e1995386c43e47653e71673f3c78f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f4d1eae9b48981f3fac2b67c1ae8ddc2e1995386c43e47653e71673f3c78f4->enter($__internal_15f4d1eae9b48981f3fac2b67c1ae8ddc2e1995386c43e47653e71673f3c78f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_352c61d4dc2e0d1293232285ed2eef02f3a9c32fc76a0a097d53790807e498cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352c61d4dc2e0d1293232285ed2eef02f3a9c32fc76a0a097d53790807e498cb->enter($__internal_352c61d4dc2e0d1293232285ed2eef02f3a9c32fc76a0a097d53790807e498cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_352c61d4dc2e0d1293232285ed2eef02f3a9c32fc76a0a097d53790807e498cb->leave($__internal_352c61d4dc2e0d1293232285ed2eef02f3a9c32fc76a0a097d53790807e498cb_prof);

        
        $__internal_15f4d1eae9b48981f3fac2b67c1ae8ddc2e1995386c43e47653e71673f3c78f4->leave($__internal_15f4d1eae9b48981f3fac2b67c1ae8ddc2e1995386c43e47653e71673f3c78f4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/graphql-symfony-php/app/Resources/views/base.html.twig");
    }
}
