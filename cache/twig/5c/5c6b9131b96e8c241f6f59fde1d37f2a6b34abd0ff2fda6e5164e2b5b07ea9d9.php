<?php

/* partials/largeIntro.html.twig */
class __TwigTemplate_b6861cd2a204165527f6055f5aef9bea436fb0adb8ee60352fc840b7201e01f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"large-intro\">
    <div class=\"row\">
        <div class=\"small-24 large-18 xlarge-12 column large-centered text-center\">
            <h2 class=\"large-intro__title\">";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "introTitle", array());
        echo "</h2>
            <p class=\"large-intro__text\">";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "introText", array());
        echo "</p>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/largeIntro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"large-intro\">
    <div class=\"row\">
        <div class=\"small-24 large-18 xlarge-12 column large-centered text-center\">
            <h2 class=\"large-intro__title\">{{ page.header.cesis.introTitle }}</h2>
            <p class=\"large-intro__text\">{{ page.header.cesis.introText }}</p>
        </div>
    </div>
</section>", "partials/largeIntro.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\partials\\largeIntro.html.twig");
    }
}
