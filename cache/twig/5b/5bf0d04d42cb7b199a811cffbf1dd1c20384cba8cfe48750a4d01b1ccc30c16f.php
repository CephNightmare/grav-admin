<?php

/* partials/services.html.twig */
class __TwigTemplate_04fce0b46cb13340ca76e4da7fa1a5ef3b6bb274409dd66cb6f6b47233967cff extends Twig_Template
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
        echo "<section class=\"large-intro services\">
    <div class=\"row\">
        <div class=\"small-24 large-18 xlarge-12 column large-centered text-center\">
            <h2 class=\"services__title large-intro__title\">";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "servicesTitle", array());
        echo "</h2>
            <p class=\"services__text large-intro__text\">";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "servicesIntro", array());
        echo "</p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"small-24 large-20 xlarge-16 large-centered\">
            <div class=\"small-24 large-12 column\">
                <a href=\"";
        // line 12
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock1", array()), "buttonLink", array());
        echo "\" title=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock1", array()), "title", array());
        echo "\" class=\"contentBlock\">
                    <h3 class=\"h4 contentBlock__title\">";
        // line 13
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock1", array()), "title", array());
        echo "</h3>
                    <p class=\"contentBlock__text\">";
        // line 14
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock1", array()), "text", array());
        echo "</p>
                    <span class=\"contentBlock__readMore\">";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock1", array()), "buttonText", array());
        echo "</span>
                </a>
            </div>

            <div class=\"small-24 large-12 column\">
                <a href=\"";
        // line 20
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock2", array()), "buttonLink", array());
        echo "\" title=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock2", array()), "title", array());
        echo "\" class=\"contentBlock\">
                    <h3 class=\"h4 contentBlock__title\">";
        // line 21
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock2", array()), "title", array());
        echo "</h3>
                    <p class=\"contentBlock__text\">";
        // line 22
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock2", array()), "text", array());
        echo "</p>
                    <span class=\"contentBlock__readMore\">";
        // line 23
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "servicesBlock2", array()), "buttonText", array());
        echo "</span>
                </a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  70 => 22,  66 => 21,  60 => 20,  52 => 15,  48 => 14,  44 => 13,  38 => 12,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"large-intro services\">
    <div class=\"row\">
        <div class=\"small-24 large-18 xlarge-12 column large-centered text-center\">
            <h2 class=\"services__title large-intro__title\">{{ page.header.cesis.servicesTitle }}</h2>
            <p class=\"services__text large-intro__text\">{{ page.header.cesis.servicesIntro }}</p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"small-24 large-20 xlarge-16 large-centered\">
            <div class=\"small-24 large-12 column\">
                <a href=\"{{ header.cesis.servicesBlock1.buttonLink }}\" title=\"{{ header.cesis.servicesBlock1.title }}\" class=\"contentBlock\">
                    <h3 class=\"h4 contentBlock__title\">{{ header.cesis.servicesBlock1.title }}</h3>
                    <p class=\"contentBlock__text\">{{ header.cesis.servicesBlock1.text }}</p>
                    <span class=\"contentBlock__readMore\">{{ header.cesis.servicesBlock1.buttonText }}</span>
                </a>
            </div>

            <div class=\"small-24 large-12 column\">
                <a href=\"{{ header.cesis.servicesBlock2.buttonLink }}\" title=\"{{ header.cesis.servicesBlock2.title }}\" class=\"contentBlock\">
                    <h3 class=\"h4 contentBlock__title\">{{ header.cesis.servicesBlock2.title }}</h3>
                    <p class=\"contentBlock__text\">{{ header.cesis.servicesBlock2.text }}</p>
                    <span class=\"contentBlock__readMore\">{{ header.cesis.servicesBlock2.buttonText }}</span>
                </a>
            </div>
        </div>
    </div>
</section>", "partials/services.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\partials\\services.html.twig");
    }
}
