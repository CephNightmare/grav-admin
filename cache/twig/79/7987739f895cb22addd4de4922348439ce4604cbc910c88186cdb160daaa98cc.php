<?php

/* @Var:Thank you for your feedback! */
class __TwigTemplate_14ff5375a235c7590c9c7de0e33cb17fa6ea098fdf32f1c5331c63f135fad186 extends Twig_Template
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
        echo "Thank you for your feedback!";
    }

    public function getTemplateName()
    {
        return "@Var:Thank you for your feedback!";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Thank you for your feedback!", "@Var:Thank you for your feedback!", "");
    }
}