<?php

/* home.html.twig */
class __TwigTemplate_af2d3ea6741891e3ca922f3e3a9a9ef16f3fc4fdff09361ad562d0e7c0214fc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        $this->loadTemplate("partials/hero.html.twig", "home.html.twig", 5)->display($context);
        // line 6
        echo "
    <section class=\"large-intro\">
        <div class=\"row\">
            <div class=\"small-24 large-18 xlarge-12 column large-centered text-center\">
                <h2 class=\"large-intro__title\">";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "introTitle", array());
        echo "</h2>
                <p class=\"large-intro__text\">";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "introText", array());
        echo "</p>
            </div>
        </div>
    </section>

    ";
        // line 16
        $this->loadTemplate("partials/taxationForm.html.twig", "home.html.twig", 16)->display($context);
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("partials/posterContent.html.twig", "home.html.twig", 18)->display($context);
        // line 19
        echo "
    ";
        // line 20
        $this->loadTemplate("partials/services.html.twig", "home.html.twig", 20)->display($context);
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  64 => 20,  61 => 19,  59 => 18,  56 => 17,  54 => 16,  46 => 11,  42 => 10,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

    <section class=\"large-intro\">
        <div class=\"row\">
            <div class=\"small-24 large-18 xlarge-12 column large-centered text-center\">
                <h2 class=\"large-intro__title\">{{ page.header.cesis.introTitle }}</h2>
                <p class=\"large-intro__text\">{{ page.header.cesis.introText }}</p>
            </div>
        </div>
    </section>

    {% include \"partials/taxationForm.html.twig\" %}

    {% include \"partials/posterContent.html.twig\" %}

    {% include \"partials/services.html.twig\" %}

{% endblock %}
", "home.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\home.html.twig");
    }
}
