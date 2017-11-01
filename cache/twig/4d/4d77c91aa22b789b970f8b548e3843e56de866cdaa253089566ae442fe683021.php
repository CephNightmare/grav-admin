<?php

/* partials/posterContent.html.twig */
class __TwigTemplate_1502bda7b0a8b19350b9dce2f489e781ef55c8893d4a3da7a97ab72f7f7dc359 extends Twig_Template
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
        echo "<section class=\"posterContent\">

    <div class=\"posterContent__bg show-for-large\" style=\"background-image: url('";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "methodsImage", array())), "name", array()), array(), "array"), "cropResize", array(0 => 960, 1 => 10000), "method"), "url", array());
        echo "')\"></div>

    <div class=\"posterContent__content\">
        <div class=\"row\">
            <div class=\"small-24 large-8 large-push-13 column\">
                <h3 class=\"posterContent__title\">";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "methodsTitle", array());
        echo "</h3>
                <p class=\"posterContent__text\">
                    ";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "methodsText", array());
        echo "
                </p>

                <a class=\"posterContent__button button\" href=\"/werkwijze\" title=\"Werkwijze\">";
        // line 13
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "methodsButtonText", array());
        echo "</a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/posterContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  36 => 10,  31 => 8,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"posterContent\">

    <div class=\"posterContent__bg show-for-large\" style=\"background-image: url('{{ page.media[header.cesis.methodsImage|first.name].cropResize(960, 10000).url }}')\"></div>

    <div class=\"posterContent__content\">
        <div class=\"row\">
            <div class=\"small-24 large-8 large-push-13 column\">
                <h3 class=\"posterContent__title\">{{ page.header.cesis.methodsTitle }}</h3>
                <p class=\"posterContent__text\">
                    {{ page.header.cesis.methodsText }}
                </p>

                <a class=\"posterContent__button button\" href=\"/werkwijze\" title=\"Werkwijze\">{{ page.header.cesis.methodsButtonText }}</a>
            </div>
        </div>
    </div>
</section>", "partials/posterContent.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\partials\\posterContent.html.twig");
    }
}
