<?php

/* partials/steps.html.twig */
class __TwigTemplate_9b71e79b7c0fc8677bcc87ffee52786b336189f6bfa47ec3abc355252b9b8485 extends Twig_Template
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
        echo "<section class=\"steps\">
    <div class=\"row\">
        <div class=\"small-24 large-20 large-centered xlarge-18 xlarge-centered\">
            <div class=\"small-24 medium-12 column\">
                <div class=\"steps__step\">
                    <span class=\"steps__icon\">1</span>

                    <div class=\"steps__content\">
                        <h3 class=\"steps__title\">";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "step1", array()), "title", array());
        echo "</h3>
                        <p class=\"steps__text\">";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "step1", array()), "text", array());
        echo "</p>
                    </div>
                </div>
            </div>

            <div class=\"small-24 medium-12 column\">
                <div class=\"steps__step\">
                    <span class=\"steps__icon\">2</span>

                    <div class=\"steps__content\">
                        <h3 class=\"steps__title\">";
        // line 20
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "step2", array()), "title", array());
        echo "</h3>
                        <p class=\"steps__text\">";
        // line 21
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "step2", array()), "text", array());
        echo "</p>
                    </div>
                </div>
            </div>

            <div class=\"clearfix\"></div>

            <div class=\"small-24 medium-12 column\">
                <div class=\"steps__step\">
                    <span class=\"steps__icon\">3</span>

                    <div class=\"steps__content\">
                        <h3 class=\"steps__title\">";
        // line 33
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "step3", array()), "title", array());
        echo "</h3>
                        <p class=\"steps__text\">";
        // line 34
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "step3", array()), "text", array());
        echo "</p>
                    </div>
                </div>
            </div>

            <div class=\"small-24 medium-12 column\">
                <div class=\"steps__step\">
                    <span class=\"steps__icon\">4</span>

                    <div class=\"steps__content\">
                        <h3 class=\"steps__title\">";
        // line 44
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "step4", array()), "title", array());
        echo "</h3>
                        <p class=\"steps__text\">";
        // line 45
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "cesis", array()), "step4", array()), "text", array());
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 45,  82 => 44,  69 => 34,  65 => 33,  50 => 21,  46 => 20,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"steps\">
    <div class=\"row\">
        <div class=\"small-24 large-20 large-centered xlarge-18 xlarge-centered\">
            <div class=\"small-24 medium-12 column\">
                <div class=\"steps__step\">
                    <span class=\"steps__icon\">1</span>

                    <div class=\"steps__content\">
                        <h3 class=\"steps__title\">{{ header.cesis.step1.title }}</h3>
                        <p class=\"steps__text\">{{ header.cesis.step1.text }}</p>
                    </div>
                </div>
            </div>

            <div class=\"small-24 medium-12 column\">
                <div class=\"steps__step\">
                    <span class=\"steps__icon\">2</span>

                    <div class=\"steps__content\">
                        <h3 class=\"steps__title\">{{ header.cesis.step2.title }}</h3>
                        <p class=\"steps__text\">{{ header.cesis.step2.text }}</p>
                    </div>
                </div>
            </div>

            <div class=\"clearfix\"></div>

            <div class=\"small-24 medium-12 column\">
                <div class=\"steps__step\">
                    <span class=\"steps__icon\">3</span>

                    <div class=\"steps__content\">
                        <h3 class=\"steps__title\">{{ header.cesis.step3.title }}</h3>
                        <p class=\"steps__text\">{{ header.cesis.step3.text }}</p>
                    </div>
                </div>
            </div>

            <div class=\"small-24 medium-12 column\">
                <div class=\"steps__step\">
                    <span class=\"steps__icon\">4</span>

                    <div class=\"steps__content\">
                        <h3 class=\"steps__title\">{{ header.cesis.step4.title }}</h3>
                        <p class=\"steps__text\">{{ header.cesis.step4.text }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "partials/steps.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\themes\\cesis\\templates\\partials\\steps.html.twig");
    }
}
