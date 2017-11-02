<?php

/* partials/heroSmall.html.twig */
class __TwigTemplate_e00f661d77ba6710f6b467228984ab7f3a78d8b03a508739e62c90cc90224f9a extends Twig_Template
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
        echo "<section class=\"hero hero--small text-center\" style=\"background-image: url('";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "backgroundImage", array())), "name", array()), array(), "array"), "cropResize", array(0 => 1920, 1 => 10000), "method"), "url", array());
        echo "')\">
    <div class=\"hero__content\">
        <div class=\"row\">
            <div class=\"small-24 column\">
                <hgroup>
                    <h1 class=\"hero__title\">";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "headerTitle", array());
        echo "</h1>
                    <h2 class=\"hero__subTitle\">";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "headerSubTitle", array());
        echo "</h2>
                </hgroup>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/heroSmall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  28 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"hero hero--small text-center\" style=\"background-image: url('{{ page.media[header.cesis.backgroundImage|first.name].cropResize(1920, 10000).url }}')\">
    <div class=\"hero__content\">
        <div class=\"row\">
            <div class=\"small-24 column\">
                <hgroup>
                    <h1 class=\"hero__title\">{{ page.header.cesis.headerTitle }}</h1>
                    <h2 class=\"hero__subTitle\">{{ page.header.cesis.headerSubTitle }}</h2>
                </hgroup>
            </div>
        </div>
    </div>
</section>", "partials/heroSmall.html.twig", "F:\\wamp64\\www\\www.esmeijermakelaardij.nl\\user\\themes\\cesis\\templates\\partials\\heroSmall.html.twig");
    }
}
