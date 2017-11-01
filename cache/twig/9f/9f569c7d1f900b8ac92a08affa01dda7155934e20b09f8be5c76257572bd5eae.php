<?php

/* partials/base.html.twig */
class __TwigTemplate_ceedcf9f1f2edc148d36e0e41452e210cc68d87c9fbb0c1f79f89a5100afe09e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "</head>
<body class=\"";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\"/>
        <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\"/>
        <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://dist/css/app.min.css", 1 => 98), "method");
        // line 18
        echo "        ";
    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        // line 26
        echo "    <header class=\"header\">
        <div class=\"row\">
            <a class=\"header__logo\" href=\"";
        // line 28
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
                Esmeijer Taxatiebureau
            </a>

            ";
        // line 32
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 32)->display($context);
        // line 33
        echo "
            ";
        // line 35
        echo "                ";
        // line 36
        echo "                    ";
        // line 37
        echo "                        ";
        // line 38
        echo "                    ";
        // line 39
        echo "                    ";
        // line 40
        echo "                        ";
        // line 41
        echo "                    ";
        // line 42
        echo "                    ";
        // line 43
        echo "                        ";
        // line 44
        echo "                    ";
        // line 45
        echo "                    ";
        // line 46
        echo "                        ";
        // line 47
        echo "                    ";
        // line 48
        echo "                    ";
        // line 49
        echo "                        ";
        // line 50
        echo "                    ";
        // line 51
        echo "                    ";
        // line 52
        echo "                        ";
        // line 53
        echo "                    ";
        // line 54
        echo "                ";
        // line 55
        echo "            ";
        // line 56
        echo "            ";
        // line 57
        echo "            ";
        // line 58
        echo "                ";
        // line 59
        echo "            ";
        // line 60
        echo "            ";
        // line 61
        echo "        </div>
    </header>
";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "    <main>
        ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "    </main>
";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        // line 68
        echo "        ";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "    <footer class=\"footer\">
        <div class=\"row\">
            <div class=\"small-24 column\">
                <a class=\"footer__link\" title=\"Disclaimer\" href=\"\">
                    Disclaimer
                </a>
                <a class=\"footer__link\" title=\"Privacy Statement\" href=\"\">
                    Privacy Statement
                </a>

                <span class=\"footer__copyright\">© Copyright ";
        // line 83
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "</span>
            </div>
        </div>
    </footer>
";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 100), "method");
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 90,  244 => 89,  235 => 83,  223 => 73,  220 => 72,  216 => 68,  213 => 67,  208 => 69,  206 => 67,  203 => 66,  200 => 65,  194 => 61,  192 => 60,  190 => 59,  188 => 58,  186 => 57,  184 => 56,  182 => 55,  180 => 54,  178 => 53,  176 => 52,  174 => 51,  172 => 50,  170 => 49,  168 => 48,  166 => 47,  164 => 46,  162 => 45,  160 => 44,  158 => 43,  156 => 42,  154 => 41,  152 => 40,  150 => 39,  148 => 38,  146 => 37,  144 => 36,  142 => 35,  139 => 33,  137 => 32,  130 => 28,  126 => 26,  123 => 25,  119 => 18,  116 => 17,  113 => 16,  105 => 19,  103 => 16,  98 => 14,  94 => 13,  91 => 12,  89 => 11,  78 => 7,  75 => 6,  72 => 5,  63 => 92,  61 => 89,  58 => 88,  56 => 72,  53 => 71,  51 => 65,  48 => 64,  46 => 25,  41 => 23,  38 => 22,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\"/>
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% include 'partials/metadata.html.twig' %}

        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\"/>
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>

        {% block stylesheets %}
            {% do assets.addCss('theme://dist/css/app.min.css', 98) %}
        {% endblock %}
        {{ assets.css() }}

    {% endblock head %}
</head>
<body class=\"{{ page.header.body_classes }}\">

{% block header %}
    <header class=\"header\">
        <div class=\"row\">
            <a class=\"header__logo\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                Esmeijer Taxatiebureau
            </a>

            {% include 'partials/navigation.html.twig' %}

            {#<nav class=\"header__nav\">#}
                {#<ul class=\"header__navList\">#}
                    {#<li class=\"header__listItem\">#}
                        {#<a class=\"header__link\" href=\"#\" title=\"title\">Home</a>#}
                    {#</li>#}
                    {#<li class=\"header__listItem\">#}
                        {#<a class=\"header__link\" href=\"#\" title=\"title\">Vraag een Taxatie aan</a>#}
                    {#</li>#}
                    {#<li class=\"header__listItem\">#}
                        {#<a class=\"header__link\" href=\"#\" title=\"title\">Werkwijze</a>#}
                    {#</li>#}
                    {#<li class=\"header__listItem\">#}
                        {#<a class=\"header__link\" href=\"#\" title=\"title\">Hoe werk het?</a>#}
                    {#</li>#}
                    {#<li class=\"header__listItem\">#}
                        {#<a class=\"header__link\" href=\"#\" title=\"title\">Aankoopbegeleiding</a>#}
                    {#</li>#}
                    {#<li class=\"header__listItem\">#}
                        {#<a class=\"header__link\" href=\"#\" title=\"title\">Contact</a>#}
                    {#</li>#}
                {#</ul>#}
            {#</nav>#}
            {#{% block header_navigation %}#}
            {#<nav class=\"main-nav\">#}
                {#{% include 'partials/navigation.html.twig' %}#}
            {#</nav>#}
            {#{% endblock %}#}
        </div>
    </header>
{% endblock %}

{% block body %}
    <main>
        {% block content %}
        {% endblock %}
    </main>
{% endblock %}

{% block footer %}
    <footer class=\"footer\">
        <div class=\"row\">
            <div class=\"small-24 column\">
                <a class=\"footer__link\" title=\"Disclaimer\" href=\"\">
                    Disclaimer
                </a>
                <a class=\"footer__link\" title=\"Privacy Statement\" href=\"\">
                    Privacy Statement
                </a>

                <span class=\"footer__copyright\">© Copyright {{ \"now\"|date(\"Y\") }}</span>
            </div>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
{% endblock %}
{{ assets.js() }}

</body>
</html>
", "partials/base.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\partials\\base.html.twig");
    }
}
