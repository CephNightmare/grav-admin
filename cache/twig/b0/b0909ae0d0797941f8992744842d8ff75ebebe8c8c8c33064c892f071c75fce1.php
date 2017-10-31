<?php

/* partials/taxationForm.html.twig */
class __TwigTemplate_3f0789e443c5db169cc26e6bb29530207b8c5ea8ffb109ec152791e85b965624 extends Twig_Template
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
        echo "<section class=\"large-intro formSection\">
    <div class=\"row\">
        <div class=\"small-24 medium-20 large-16 medium-centered column text-center\">

            <h2 class=\"formSection__title large-intro__title\">";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "formTitle", array());
        echo "</h2>
            <p class=\"formSection__text large-intro__text\">";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "formIntro", array());
        echo "</p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"small-24 medium-18 large-12 xxlarge-8 medium-centered column text-center\">
            <div id=\"taxationForm\" class=\"formSection__form\">
                ";
        // line 13
        $this->loadTemplate("forms/form.html.twig", "partials/taxationForm.html.twig", 13)->display($context);
        // line 14
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/taxationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 14,  39 => 13,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"large-intro formSection\">
    <div class=\"row\">
        <div class=\"small-24 medium-20 large-16 medium-centered column text-center\">

            <h2 class=\"formSection__title large-intro__title\">{{ page.header.cesis.formTitle }}</h2>
            <p class=\"formSection__text large-intro__text\">{{ page.header.cesis.formIntro }}</p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"small-24 medium-18 large-12 xxlarge-8 medium-centered column text-center\">
            <div id=\"taxationForm\" class=\"formSection__form\">
                {% include \"forms/form.html.twig\" %}
            </div>
        </div>
    </div>
</section>
", "partials/taxationForm.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\partials\\taxationForm.html.twig");
    }
}
