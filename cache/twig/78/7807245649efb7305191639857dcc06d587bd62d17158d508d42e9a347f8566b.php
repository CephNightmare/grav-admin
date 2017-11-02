<?php

/* werkwijze.html.twig */
class __TwigTemplate_82ae3706bed1a626b23125f6d4d0d5faaac264279e19cca4fdd30d5a91e7200d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "werkwijze.html.twig", 1);
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
        $this->loadTemplate("partials/hero.html.twig", "werkwijze.html.twig", 5)->display($context);
        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("partials/largeIntro.html.twig", "werkwijze.html.twig", 7)->display($context);
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("partials/steps.html.twig", "werkwijze.html.twig", 9)->display($context);
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("partials/taxationForm.html.twig", "werkwijze.html.twig", 11)->display($context);
        // line 12
        echo "
    ";
        // line 13
        $this->loadTemplate("partials/footerCta.html.twig", "werkwijze.html.twig", 13)->display($context);
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "werkwijze.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  54 => 13,  51 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

    {% include \"partials/hero.html.twig\" %}

    {% include \"partials/largeIntro.html.twig\" %}

    {% include \"partials/steps.html.twig\" %}

    {% include \"partials/taxationForm.html.twig\" %}

    {% include \"partials/footerCta.html.twig\" %}

{% endblock %}
", "werkwijze.html.twig", "F:\\wamp64\\www\\www.esmeijermakelaardij.nl\\user\\themes\\cesis\\templates\\werkwijze.html.twig");
    }
}
