<?php

/* partials/footerCta.html.twig */
class __TwigTemplate_76276aa92c8a0017b1fc9f277f7a82c82f4be5ad2057db9737d8957d562480b2 extends Twig_Template
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
        echo "<section class=\"footerCta\">
    <div class=\"row\">
        <div class=\"small-24 column\">
            <h3 class=\"footerCta__title\">";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "callToAction", array()), "title", array());
        echo "</h3>
            <a class=\"button footerCta__button button--ghost\" href=\"";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "callToAction", array()), "buttonLink", array());
        echo "\" title=\"\">";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "callToAction", array()), "buttonText", array());
        echo "</a>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/footerCta.html.twig";
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
        return new Twig_Source("<section class=\"footerCta\">
    <div class=\"row\">
        <div class=\"small-24 column\">
            <h3 class=\"footerCta__title\">{{ header.cesis.callToAction.title }}</h3>
            <a class=\"button footerCta__button button--ghost\" href=\"{{ header.cesis.callToAction.buttonLink }}\" title=\"\">{{ header.cesis.callToAction.buttonText }}</a>
        </div>
    </div>
</section>", "partials/footerCta.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\partials\\footerCta.html.twig");
    }
}
