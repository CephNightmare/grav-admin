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

<div class=\"container\">
    ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "
</div>

";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
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

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "        <header class=\"header\">
            <div class=\"row\">
                <a class=\"header__logo\" href=\"";
        // line 29
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
                    Esmeijer Taxatiebureau
                </a>

                ";
        // line 33
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 33)->display($context);
        // line 34
        echo "
                <button class=\"header__hamburger hamburger hamburger--squeeze hide-for-xlarge float-right\" type=\"button\">
                <span class=\"hamburger-box\">
                    <span class=\"hamburger-inner\"></span>
                </span>
                </button>
            </div>
        </header>
    ";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "        <main>
            ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "        </main>
    ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "            ";
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "        <footer class=\"footer\">
            <div class=\"row\">
                <div class=\"small-24 column\">
                    <a class=\"footer__link\" title=\"Disclaimer\" href=\"\">
                        Disclaimer
                    </a>
                    <a class=\"footer__link\" title=\"Privacy Statement\" href=\"\">
                        Privacy Statement
                    </a>

                    <span class=\"footer__copyright\">© Copyright ";
        // line 62
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "</span>
                </div>
            </div>
        </footer>
    ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
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
        return array (  201 => 71,  198 => 70,  189 => 62,  177 => 52,  174 => 51,  170 => 47,  167 => 46,  162 => 48,  160 => 46,  157 => 45,  154 => 44,  142 => 34,  140 => 33,  133 => 29,  129 => 27,  126 => 26,  122 => 18,  119 => 17,  116 => 16,  108 => 19,  106 => 16,  101 => 14,  97 => 13,  94 => 12,  92 => 11,  81 => 7,  78 => 6,  75 => 5,  66 => 73,  64 => 70,  59 => 67,  57 => 51,  54 => 50,  52 => 44,  49 => 43,  47 => 26,  41 => 23,  38 => 22,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
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

<div class=\"container\">
    {% block header %}
        <header class=\"header\">
            <div class=\"row\">
                <a class=\"header__logo\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                    Esmeijer Taxatiebureau
                </a>

                {% include 'partials/navigation.html.twig' %}

                <button class=\"header__hamburger hamburger hamburger--squeeze hide-for-xlarge float-right\" type=\"button\">
                <span class=\"hamburger-box\">
                    <span class=\"hamburger-inner\"></span>
                </span>
                </button>
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

</div>

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
{% endblock %}
{{ assets.js() }}

</body>
</html>
", "partials/base.html.twig", "F:\\wamp64\\www\\www.esmeijermakelaardij.nl\\user\\themes\\cesis\\templates\\partials\\base.html.twig");
    }
}
