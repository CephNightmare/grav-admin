<?php

/* detailpagina.html.twig */
class __TwigTemplate_c23d84a190e01dbdfba4a9c166f99f5693c151de550e26aedece9e48b8af9cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "detailpagina.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("partials/heroSmall.html.twig", "detailpagina.html.twig", 5)->display($context);
        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("partials/body.html.twig", "detailpagina.html.twig", 7)->display($context);
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("partials/taxationForm.html.twig", "detailpagina.html.twig", 9)->display($context);
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("partials/footerCta.html.twig", "detailpagina.html.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "detailpagina.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}

    {% include \"partials/heroSmall.html.twig\" %}

    {% include \"partials/body.html.twig\" %}

    {% include \"partials/taxationForm.html.twig\" %}

    {% include \"partials/footerCta.html.twig\" %}

{% endblock %}
", "detailpagina.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\detailpagina.html.twig");
    }
}
