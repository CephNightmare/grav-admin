<?php

/* taxatieaanvraag.html.twig */
class __TwigTemplate_deef0d203084408454adcb36f2d50546a10042e68c1bf5abe37c6fcba17273a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "taxatieaanvraag.html.twig", 1);
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
        $this->loadTemplate("partials/taxationForm.html.twig", "taxatieaanvraag.html.twig", 5)->display(array_merge($context, array("large" => true)));
        // line 6
        echo "
   ";
        // line 7
        $this->loadTemplate("partials/services.html.twig", "taxatieaanvraag.html.twig", 7)->display(array_merge($context, array("whiteBg" => true)));
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "taxatieaanvraag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

   {% include \"partials/taxationForm.html.twig\" with {'large': true} %}

   {% include \"partials/services.html.twig\" with {'whiteBg' : true } %}

{% endblock %}
", "taxatieaanvraag.html.twig", "F:\\wamp64\\www\\www.esmeijermakelaardij.nl\\user\\themes\\cesis\\templates\\taxatieaanvraag.html.twig");
    }
}
