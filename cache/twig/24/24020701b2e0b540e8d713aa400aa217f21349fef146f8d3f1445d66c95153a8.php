<?php

/* partials/body.html.twig */
class __TwigTemplate_61be85a47c3a58f66920c62153deb33dd69e09e1093e17646000da8a302f1db5 extends Twig_Template
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
        echo "<section class=\"body\">
    <div class=\"row\">
        <div class=\"small-24 large-18 xlarge-12 column large-centered\">
            <div class=\"body__text\">
                ";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cesis", array()), "content", array()));
        echo "
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"body\">
    <div class=\"row\">
        <div class=\"small-24 large-18 xlarge-12 column large-centered\">
            <div class=\"body__text\">
                {{ page.header.cesis.content|markdown }}
            </div>
        </div>
    </div>
</section>", "partials/body.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\partials\\body.html.twig");
    }
}
