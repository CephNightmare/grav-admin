<?php

/* default.html.twig */
class __TwigTemplate_2d8fb7b088c22fb0b08ac730a3168f7a60f079cae5cdfbb0b9b8c35773a193b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'head_meta' => array($this, 'block_head_meta'),
            'head_title' => array($this, 'block_head_title'),
            'head_js' => array($this, 'block_head_js'),
            'head_css' => array($this, 'block_head_css'),
            'body' => array($this, 'block_body'),
            'body_header' => array($this, 'block_body_header'),
            'body_header_class' => array($this, 'block_body_header_class'),
            'body_title' => array($this, 'block_body_title'),
            'body_nav' => array($this, 'block_body_nav'),
            'body_content' => array($this, 'block_body_content'),
            'body_footer' => array($this, 'block_body_footer'),
            'body_copyright' => array($this, 'block_body_copyright'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 57
        echo "  </head>

  ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "    ";
        $this->displayBlock('body_header', $context, $blocks);
        // line 94
        echo "
    ";
        // line 95
        $this->displayBlock('body_content', $context, $blocks);
        // line 112
        echo "
    ";
        // line 113
        $this->displayBlock('body_footer', $context, $blocks);
        // line 132
        echo "  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "      ";
        $this->displayBlock('head_meta', $context, $blocks);
        // line 16
        echo "
      ";
        // line 17
        $this->displayBlock('head_title', $context, $blocks);
        // line 20
        echo "
      <link rel=\"canonical\" href=\"";
        // line 21
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\" />
      <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/images/favicon.ico");
        echo "\" />

      <script>
        var base_url = '";
        // line 25
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "',
            theme_url = '";
        // line 26
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "';
      </script>

      ";
        // line 29
        $this->displayBlock('head_js', $context, $blocks);
        // line 46
        echo "
      ";
        // line 47
        $this->displayBlock('head_css', $context, $blocks);
        // line 56
        echo "    ";
    }

    // line 5
    public function block_head_meta($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 10
            echo "          <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo "\" />
      ";
    }

    // line 17
    public function block_head_title($context, array $blocks = array())
    {
        // line 18
        echo "        <title>";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array()) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()) != (isset($context["base_url"]) ? $context["base_url"] : null)) || ("error" == $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array()))))) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
      ";
    }

    // line 29
    public function block_head_js($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/js/jquery.min.js", 1 => 100), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/js/jquery.dropotron.min.js"), "method");
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/js/jquery.scrollgress.min.js"), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/js/skel-layers.min.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/js/init.js"), "method");
        // line 36
        echo "
        ";
        // line 38
        echo "        ";
        // line 39
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 40
            echo "          ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "method");
            // line 41
            echo "          ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "method");
            // line 42
            echo "        ";
        }
        // line 43
        echo "
        ";
        // line 44
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
      ";
    }

    // line 47
    public function block_head_css($context, array $blocks = array())
    {
        // line 48
        echo "        <noscript>
          <link rel=\"stylesheet\" href=\"";
        // line 49
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/skel.css");
        echo "\" />
          <link rel=\"stylesheet\" href=\"";
        // line 50
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/style.css");
        echo "\" />
          <link rel=\"stylesheet\" href=\"";
        // line 51
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/style-wide.css");
        echo "\" />
        </noscript>

        ";
        // line 54
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
      ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        echo "<body>";
    }

    // line 60
    public function block_body_header($context, array $blocks = array())
    {
        // line 61
        echo "      <header id=\"header\" class=\"";
        $this->displayBlock('body_header_class', $context, $blocks);
        echo "\">
        ";
        // line 62
        $this->displayBlock('body_title', $context, $blocks);
        // line 65
        echo "
        <nav id=\"nav\">
          ";
        // line 67
        $this->displayBlock('body_nav', $context, $blocks);
        // line 91
        echo "        </nav>
      </header>
    ";
    }

    // line 61
    public function block_body_header_class($context, array $blocks = array())
    {
        echo "skel-layers-fixed";
    }

    // line 62
    public function block_body_title($context, array $blocks = array())
    {
        // line 63
        echo "          <h1><a href=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a> ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        }
        echo "</h1>
        ";
    }

    // line 67
    public function block_body_nav($context, array $blocks = array())
    {
        // line 68
        echo "            ";
        // line 86
        echo "
            <ul>
              ";
        // line 88
        echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        echo "
            </ul>
          ";
    }

    // line 95
    public function block_body_content($context, array $blocks = array())
    {
        // line 96
        echo "      <section id=\"main\" class=\"container\">
        <header>
          <h2>";
        // line 98
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
          ";
        // line 99
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitle", array())) {
            echo "<p>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitle", array());
            echo "</p>";
        }
        // line 100
        echo "        </header>

        <div class=\"box\">
          ";
        // line 103
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())) {
            // line 104
            echo "            ";
            $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
            // line 105
            echo "            <span class=\"image featured\"><img src=\"";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url", array());
            echo "\" alt=\"\" /></span>
          ";
        }
        // line 107
        echo "
          ";
        // line 108
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </div>
      </section>
    ";
    }

    // line 113
    public function block_body_footer($context, array $blocks = array())
    {
        // line 114
        echo "      <footer id=\"footer\">
        ";
        // line 115
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social_links", array()))) {
            // line 116
            echo "          <ul class=\"icons\">
            ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 118
                echo "              <li><a href=\"";
                echo $this->getAttribute($context["link"], "url", array());
                echo "\" class=\"icon fa-";
                echo $this->getAttribute($context["link"], "icon", array());
                echo "\"><span class=\"label\">";
                echo $this->getAttribute($context["link"], "title", array());
                echo "</span></a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "          </ul>
        ";
        }
        // line 122
        echo "
        <ul class=\"copyright\">
          ";
        // line 124
        $this->displayBlock('body_copyright', $context, $blocks);
        // line 129
        echo "        </ul>
      </footer>
    ";
    }

    // line 124
    public function block_body_copyright($context, array $blocks = array())
    {
        // line 125
        echo "            <li>&copy; ";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo " ";
        echo twig_date_format_filter($this->env, "NOW", "Y");
        echo ". All rights reserved.</li>
            <li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
            <li>Grav Theme: <a href=\"https://nunopress.com\">NunoPress LLC</a></li>
          ";
    }

    // line 68
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 69
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 70
                echo "                ";
                if ($this->getAttribute($context["p"], "visible", array())) {
                    // line 71
                    echo "                  ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 72
                    echo "                  ";
                    $context["menu_icon"] = (($this->getAttribute($this->getAttribute($context["p"], "header", array()), "menu_icon", array())) ? (("icon fa-" . $this->getAttribute($this->getAttribute($context["p"], "header", array()), "menu_icon", array()))) : (""));
                    // line 73
                    echo "                  <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                    <a href=\"";
                    // line 74
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"";
                    echo (isset($context["menu_icon"]) ? $context["menu_icon"] : null);
                    echo " ";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "menu_class", array());
                    echo "\">
                      ";
                    // line 75
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                    </a>
                    ";
                    // line 77
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                        // line 78
                        echo "                      <ul>
                        ";
                        // line 79
                        echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                        echo "
                      </ul>
                    ";
                    }
                    // line 82
                    echo "                  </li>
                ";
                }
                // line 84
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 85,  478 => 84,  474 => 82,  468 => 79,  465 => 78,  463 => 77,  458 => 75,  450 => 74,  445 => 73,  442 => 72,  439 => 71,  436 => 70,  431 => 69,  419 => 68,  408 => 125,  405 => 124,  399 => 129,  397 => 124,  393 => 122,  389 => 120,  376 => 118,  372 => 117,  369 => 116,  367 => 115,  364 => 114,  361 => 113,  353 => 108,  350 => 107,  344 => 105,  341 => 104,  339 => 103,  334 => 100,  328 => 99,  324 => 98,  320 => 96,  317 => 95,  310 => 88,  306 => 86,  304 => 68,  301 => 67,  288 => 63,  285 => 62,  279 => 61,  273 => 91,  271 => 67,  267 => 65,  265 => 62,  260 => 61,  257 => 60,  251 => 59,  245 => 54,  239 => 51,  235 => 50,  231 => 49,  228 => 48,  225 => 47,  219 => 44,  216 => 43,  213 => 42,  210 => 41,  207 => 40,  204 => 39,  202 => 38,  199 => 36,  196 => 35,  193 => 34,  190 => 33,  187 => 32,  184 => 31,  181 => 30,  178 => 29,  167 => 18,  164 => 17,  158 => 14,  154 => 12,  121 => 10,  117 => 9,  112 => 6,  109 => 5,  105 => 56,  103 => 47,  100 => 46,  98 => 29,  92 => 26,  88 => 25,  82 => 22,  78 => 21,  75 => 20,  73 => 17,  70 => 16,  67 => 5,  64 => 4,  58 => 132,  56 => 113,  53 => 112,  51 => 95,  48 => 94,  45 => 60,  43 => 59,  39 => 57,  37 => 4,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    {% block head %}
      {% block head_meta %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        {% for meta in page.metadata %}
          <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
        {% endfor %}

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"{{ site.metadata.description }}\" />
      {% endblock %}

      {% block head_title %}
        <title>{% if page.header.title and (page.url != base_url or 'error' == page.template) %}{{ page.header.title }} | {% endif %}{{ site.title }}</title>
      {% endblock %}

      <link rel=\"canonical\" href=\"{{ page.url(true) }}\" />
      <link rel=\"shortcut icon\" href=\"{{ url('theme://assets/images/favicon.ico') }}\" />

      <script>
        var base_url = '{{ base_url }}',
            theme_url = '{{ theme_url }}';
      </script>

      {% block head_js %}
        {% do assets.add('theme://assets/js/jquery.min.js', 100) %}
        {% do assets.add('theme://assets/js/jquery.dropotron.min.js') %}
        {% do assets.add('theme://assets/js/jquery.scrollgress.min.js') %}
        {% do assets.add('theme://assets/js/skel.min.js') %}
        {% do assets.add('theme://assets/js/skel-layers.min.js') %}
        {% do assets.add('theme://assets/js/init.js') %}

        {# HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries #}
        {# WARNING: Respond.js doesn't work if you view the page via file:// #}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
          {% do assets.add('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') %}
          {% do assets.add('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') %}
        {% endif %}

        {{ assets.js() }}
      {% endblock %}

      {% block head_css %}
        <noscript>
          <link rel=\"stylesheet\" href=\"{{ url('theme://assets/css/skel.css') }}\" />
          <link rel=\"stylesheet\" href=\"{{ url('theme://assets/css/style.css') }}\" />
          <link rel=\"stylesheet\" href=\"{{ url('theme://assets/css/style-wide.css') }}\" />
        </noscript>

        {{ assets.css() }}
      {% endblock %}
    {% endblock %}
  </head>

  {% block body %}<body>{% endblock %}
    {% block body_header %}
      <header id=\"header\" class=\"{% block body_header_class %}skel-layers-fixed{% endblock %}\">
        {% block body_title %}
          <h1><a href=\"{{ base_url }}\">{{ site.title }}</a> {% if site.metadata.description %}{{ site.metadata.description }}{% endif %}</h1>
        {% endblock %}

        <nav id=\"nav\">
          {% block body_nav %}
            {% macro loop(page) %}
              {% for p in page.children %}
                {% if p.visible %}
                  {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
                  {% set menu_icon = p.header.menu_icon ? \"icon fa-\" ~ p.header.menu_icon : '' %}
                  <li class=\"{{ current_page }}\">
                    <a href=\"{{ p.url }}\" class=\"{{ menu_icon }} {{ p.header.menu_class }}\">
                      {{ p.menu }}
                    </a>
                    {% if p.children.visible.count > 0 %}
                      <ul>
                        {{ _self.loop(p) }}
                      </ul>
                    {% endif %}
                  </li>
                {% endif %}
              {% endfor %}
            {% endmacro %}

            <ul>
              {{ _self.loop(pages) }}
            </ul>
          {% endblock %}
        </nav>
      </header>
    {% endblock %}

    {% block body_content %}
      <section id=\"main\" class=\"container\">
        <header>
          <h2>{{ page.title }}</h2>
          {% if page.header.subtitle %}<p>{{ page.header.subtitle }}</p>{% endif %}
        </header>

        <div class=\"box\">
          {% if page.media.images %}
            {% set image = page.media.images | first %}
            <span class=\"image featured\"><img src=\"{{ image.url }}\" alt=\"\" /></span>
          {% endif %}

          {{ page.content }}
        </div>
      </section>
    {% endblock %}

    {% block body_footer %}
      <footer id=\"footer\">
        {% if theme_config.social_links | length %}
          <ul class=\"icons\">
            {% for link in theme_config.social_links %}
              <li><a href=\"{{ link.url }}\" class=\"icon fa-{{ link.icon }}\"><span class=\"label\">{{ link.title }}</span></a></li>
            {% endfor %}
          </ul>
        {% endif %}

        <ul class=\"copyright\">
          {% block body_copyright %}
            <li>&copy; {{ site.title }} {{ \"NOW\" | date('Y') }}. All rights reserved.</li>
            <li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
            <li>Grav Theme: <a href=\"https://nunopress.com\">NunoPress LLC</a></li>
          {% endblock %}
        </ul>
      </footer>
    {% endblock %}
  </body>
</html>
", "default.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\alpha\\templates\\default.html.twig");
    }
}
