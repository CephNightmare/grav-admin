<?php

/* partials/logo.html.twig */
class __TwigTemplate_babadfc9081576404d9b23fac67923307e20b4efddae8b711e6cd70c48f3fa6d extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "logo_text", array())) {
            // line 2
            echo "<h3>
\t<a href=\"";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "\">
\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "logo_text", array()), "html", null, true);
            echo "
\t</a>
\t<a class=\"front-end\" target=\"_blank\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "html", null, true);
            echo "\"> <i class=\"fa fa-arrow-circle-right\"></i></a>
</h3>
";
        } else {
            // line 9
            echo "<div class=\"admin-logo\">
\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "\">
        <svg id=\"grav-logo-small\" class=\"grav-logo\" width=\"100%\" height=\"100%\" viewBox=\"0 0 186 186\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\" x=\"0px\" y=\"0px\" width=\"186px\" height=\"186px\"><g id=\"Layer_1_1\"><g><path d=\"M 98.4134 69.506 C 99.4991 68.4215 99.4991 66.6638 98.4134 65.5802 C 97.3273 64.4957 95.5692 64.4957 94.4835 65.5802 C 93.3973 66.6638 93.3973 68.4215 94.4835 69.506 C 95.5692 70.5895 97.3273 70.5895 98.4134 69.506 Z\" fill=\"#221e1f\"/><path d=\"M 88.6113 71.4462 C 87.5251 72.5297 87.5251 74.2875 88.6113 75.372 C 89.6955 76.4555 91.4551 76.4555 92.5412 75.372 C 93.6254 74.2875 93.6254 72.5297 92.5412 71.4462 C 91.4551 70.3617 89.6955 70.3617 88.6113 71.4462 Z\" fill=\"#221e1f\"/><path d=\"M 105.6614 72.8903 C 103.9628 71.193 101.2094 71.1945 99.5118 72.8903 L 95.8949 76.5033 C 94.1958 78.2006 94.1958 80.9511 95.8949 82.6464 L 99.8659 86.6146 C 101.5644 88.3119 104.3179 88.3104 106.0155 86.6146 L 109.6324 83.0016 C 111.331 81.3043 111.331 78.5538 109.6324 76.857 L 105.6614 72.8903 Z\" fill=\"#221e1f\"/><path d=\"M 140.0328 59.4342 C 144.622 50.7036 138.1301 45.604 133.6678 41.4182 C 126.5199 34.7063 119.3906 31.8046 111.2479 41.0982 C 103.1106 50.3923 108.2806 61.171 115.7239 66.4911 C 123.1706 71.8111 135.4371 68.1624 140.0328 59.4342 ZM 127.7032 55.8539 C 124.8355 52.4203 130.1964 46.1865 133.5598 49.9089 C 139.7549 56.7671 130.5759 59.2874 127.7032 55.8539 Z\" fill=\"#221e1f\"/><path d=\"M 92.7791 0.6418 C 41.5387 0.6418 0 42.1363 0 93.3177 C 0 144.503 41.5387 186 92.7791 186 C 144.0164 186 185.5547 144.503 185.5547 93.3177 C 185.5547 42.1363 144.0164 0.6418 92.7791 0.6418 ZM 142.9489 108.5071 C 133.2741 102.1201 127.7457 96.7234 122.9299 87.0473 C 119.6367 93.6768 111.9473 103.5349 98.9765 111.2898 C 92.5012 131.4129 61.6979 169.9242 51.7287 164.4651 C 48.7769 162.8503 48.2163 160.7232 48.8829 158.5289 C 49.5979 153.0278 60.9897 140.3846 60.9897 140.3846 C 60.9897 140.3846 61.2305 143.0375 64.8748 148.6264 C 60.0613 133.699 72.828 115.2805 76.21 109.0106 C 81.5244 107.3187 81.9093 100.5024 81.9093 100.5024 C 82.2492 89.9662 77.5378 82.3381 72.972 77.7761 C 76.2524 81.7756 77.3142 87.8196 77.47 93.3548 C 77.47 93.3631 77.47 93.3743 77.47 93.3856 C 77.4866 94.011 77.4866 94.6247 77.4841 95.2365 C 77.3283 99.8184 75.9409 106.1478 72.972 106.1478 L 72.9808 106.1878 C 69.9285 106.0571 66.1602 106.7079 62.7933 107.7597 L 55.35 109.5365 C 55.35 109.5365 59.3195 109.355 61.463 111.205 C 59.0758 115.0883 53.7701 119.9073 47.8524 122.6451 C 39.2424 126.6339 36.7678 118.6974 41.1393 113.5359 C 42.2127 112.2743 43.2969 111.2108 44.322 110.3395 C 43.6622 109.6575 43.2461 108.7442 43.1367 107.5851 C 43.1357 107.5792 43.1313 107.5734 43.1299 107.5675 C 42.5297 104.9341 42.8608 101.5152 46.591 96.0814 C 47.3275 94.9311 48.2104 93.7519 49.2682 92.5542 C 49.302 92.5132 49.3303 92.4752 49.3645 92.4352 C 49.4099 92.3801 49.4607 92.3279 49.5076 92.2742 C 49.5344 92.2444 49.5598 92.2147 49.5881 92.1835 C 49.8543 91.881 50.1376 91.5854 50.4404 91.3 C 54.8855 86.7517 61.9074 82.0215 72.972 77.7761 C 85.8759 58.8293 90.6014 55.2753 90.6014 55.2753 C 92.0299 53.8161 94.5269 52.0018 95.4446 51.5393 C 88.706 39.8425 87.3454 23.3534 89.1109 18.91 C 88.9678 19.1506 88.8364 19.3964 88.727 19.6511 C 89.3814 18.1295 89.82 17.6402 90.4998 16.8396 C 92.34 14.6647 98.5775 13.5251 100.8172 18.1324 C 102.0103 20.5887 102.2355 23.7705 102.1959 26.1562 C 97.2565 25.899 92.7761 31.5328 92.7761 31.5328 C 92.7761 31.5328 96.8672 29.6043 101.9498 29.5702 C 101.9498 29.5702 103.3045 30.7469 104.9948 32.9569 C 102.7126 37.2378 98.9609 46.3065 101.6777 55.827 C 102.128 57.7033 102.8088 59.3157 103.6542 60.6875 C 103.6864 60.7466 103.7133 60.8061 103.746 60.8671 C 103.8139 60.9559 103.8749 61.0295 103.9384 61.1115 C 108.4305 67.8673 116.664 68.6576 116.664 68.6576 C 112.7878 66.7257 109.6309 63.6488 107.5753 59.9182 C 106.5068 57.9229 105.8524 56.2383 105.4504 54.9094 C 103.2703 46.4978 106.4799 41.5875 108.3172 38.2955 C 112.5446 31.745 120.2458 27.7797 128.5232 28.7242 C 140.1402 30.0483 148.4841 40.5298 147.1562 52.1315 C 146.3465 59.2196 142.1137 65.0826 136.2982 68.2732 C 137.6969 72.0546 136.202 76.6394 136.202 76.6394 C 139.7241 81.0652 139.8794 83.6167 139.7578 85.9867 C 135.2814 85.2345 130.9324 88.2523 130.9324 88.2523 C 130.9324 88.2523 139.5683 86.1931 144.5854 90.6633 C 147.8482 94.169 150.0244 97.3372 151.3211 99.6769 C 153.1784 103.0139 161.8026 103.2519 160.8204 109.2535 C 159.8378 115.2463 153.2604 115.3029 142.9489 108.5071 Z\" fill=\"#221e1f\"/></g></g></svg>
\t\t<svg id=\"grav-logo-large\" class=\"grav-logo\" width=\"100%\" height=\"100%\" viewBox=\"0 0 504 140\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\" style=\"fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;\"><path d=\"M235.832,71.564l-7.98,-0.001c-1.213,0.001 -2.197,0.987 -2.197,2.204l0,15.327l-0.158,0.132c-4.696,3.962 -10.634,6.14 -16.719,6.14c-14.356,0 -26.034,-11.68 -26.034,-26.037c0,-14.358 11.678,-26.035 26.034,-26.035c5.582,0 10.919,1.767 15.437,5.113c0.877,0.649 2.093,0.56 2.866,-0.211l5.69,-5.69c0.444,-0.442 0.675,-1.055 0.639,-1.681c-0.034,-0.627 -0.336,-1.206 -0.828,-1.597c-6.76,-5.363 -15.214,-8.314 -23.805,-8.314c-21.18,0 -38.414,17.233 -38.414,38.415c0,21.183 17.234,38.415 38.414,38.415c10.937,0 21.397,-4.705 28.698,-12.914c0.358,-0.403 0.556,-0.921 0.556,-1.46l0,-19.603c0,-1.217 -0.985,-2.203 -2.2,-2.203\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M502.794,34.445c-0.408,-0.616 -1.1,-0.989 -1.838,-0.989l-8.684,0c-0.879,0 -1.673,0.522 -2.022,1.329l-24.483,56.839l-24.92,-56.852c-0.352,-0.799 -1.142,-1.316 -2.012,-1.316l-8.713,0c-0.744,0 -1.44,0.373 -1.843,0.995c-0.408,0.623 -0.476,1.408 -0.174,2.09l30.186,68.858c0.352,0.799 1.143,1.317 2.017,1.317l10.992,0c0.879,0 1.673,-0.527 2.021,-1.329l29.655,-68.861c0.289,-0.68 0.222,-1.461 -0.182,-2.081\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M388.683,34.772c-0.353,-0.798 -1.142,-1.316 -2.017,-1.316l-10.988,0c-0.879,0 -1.673,0.522 -2.021,1.329l-29.655,68.861c-0.294,0.675 -0.226,1.46 0.182,2.077c0.407,0.619 1.096,0.993 1.838,0.993l8.684,0c0.879,0 1.673,-0.526 2.022,-1.329l24.478,-56.842l24.92,56.854c0.353,0.798 1.143,1.317 2.013,1.317l8.717,0c0.744,0 1.44,-0.374 1.843,-0.993c0.408,-0.624 0.471,-1.41 0.174,-2.094l-30.19,-68.857Z\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M309.196,81.525l0.476,-0.229c8.675,-4.191 14.279,-13.087 14.279,-22.667c0,-13.881 -11.295,-25.174 -25.176,-25.174l-31.863,0c-1.214,0 -2.199,0.988 -2.199,2.202l0,68.855c0,1.219 0.985,2.204 2.199,2.204l7.979,0c1.214,0 2.2,-0.985 2.2,-2.204l0,-58.679l21.684,0c7.059,0 12.799,5.739 12.799,12.796c0,5.885 -3.996,10.989 -9.728,12.408c-1.032,0.261 -2.064,0.393 -3.071,0.393l-7.977,0c-0.829,0 -1.585,0.467 -1.959,1.205c-0.378,0.74 -0.305,1.625 0.187,2.296l22.62,30.884c0.412,0.566 1.07,0.901 1.771,0.901l9.915,0c0.827,0 1.587,-0.467 1.96,-1.207c0.378,-0.742 0.302,-1.629 -0.186,-2.296l-15.91,-21.688Z\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M107.191,80.969c-7.255,-4.794 -11.4,-8.845 -15.011,-16.109c-2.47,4.977 -8.236,12.376 -17.962,18.198c-4.856,15.106 -27.954,44.015 -35.43,39.916c-2.213,-1.212 -2.633,-2.808 -2.133,-4.456c0.536,-4.129 9.078,-13.62 9.078,-13.62c0,0 0.18,1.992 2.913,6.187c-3.609,-11.205 5.965,-25.031 8.5,-29.738c3.985,-1.269 4.274,-6.387 4.274,-6.387c0.255,-7.909 -3.278,-13.635 -6.701,-17.059c2.459,3.002 3.255,7.539 3.372,11.694l0,0.023c0.012,0.469 0.012,0.93 0.011,1.39c-0.117,3.439 -1.157,8.19 -3.383,8.19l0.006,0.03c-2.289,-0.098 -5.115,0.391 -7.639,1.18l-5.582,1.334c0,0 2.977,-0.136 4.584,1.252c-1.79,2.915 -5.769,6.533 -10.206,8.588c-6.457,2.995 -8.312,-2.964 -5.034,-6.838c0.805,-0.946 1.618,-1.745 2.387,-2.399c-0.495,-0.513 -0.807,-1.198 -0.889,-2.068c-0.001,-0.005 -0.004,-0.009 -0.005,-0.013c-0.45,-1.977 -0.202,-4.543 2.596,-8.623c0.551,-0.863 1.214,-1.748 2.007,-2.647c0.025,-0.031 0.046,-0.059 0.072,-0.089c0.034,-0.042 0.072,-0.08 0.108,-0.121c0.02,-0.023 0.039,-0.045 0.059,-0.068c0.2,-0.228 0.413,-0.45 0.639,-0.663c3.334,-3.414 8.599,-6.966 16.897,-10.152c9.675,-14.223 13.219,-16.89 13.219,-16.89c1.071,-1.096 2.943,-2.458 3.632,-2.805c-5.053,-8.781 -6.074,-21.158 -4.75,-24.493c-0.107,0.18 -0.206,0.365 -0.287,0.556c0.49,-1.143 0.819,-1.509 1.328,-2.111c1.381,-1.632 6.058,-2.488 7.737,0.971c0.895,1.844 1.063,4.232 1.034,6.023c-3.704,-0.193 -7.063,4.036 -7.063,4.036c0,0 3.067,-1.448 6.879,-1.473c0,0 1.015,0.883 2.283,2.542c-1.712,3.213 -4.524,10.021 -2.488,17.168c0.338,1.408 0.849,2.619 1.483,3.648c0.024,0.045 0.044,0.089 0.069,0.135c0.051,0.066 0.096,0.122 0.144,0.183c3.368,5.072 9.542,5.665 9.542,5.665c-2.906,-1.45 -5.274,-3.76 -6.816,-6.56c-0.8,-1.498 -1.291,-2.762 -1.592,-3.761c-1.636,-6.313 0.771,-9.999 2.149,-12.471c3.17,-4.917 8.944,-7.893 15.151,-7.185c8.712,0.995 14.968,8.862 13.973,17.571c-0.608,5.321 -3.781,9.723 -8.142,12.117c1.049,2.839 -0.073,6.28 -0.073,6.28c2.642,3.323 2.758,5.238 2.667,7.017c-3.357,-0.565 -6.618,1.701 -6.618,1.701c0,0 6.476,-1.546 10.238,1.81c2.446,2.631 4.078,5.009 5.051,6.766c1.393,2.505 7.859,2.683 7.123,7.188c-0.737,4.499 -5.669,4.542 -13.401,-0.56M69.571,0c-38.424,0 -69.571,31.148 -69.571,69.567c0,38.422 31.147,69.573 69.571,69.573c38.42,0 69.568,-31.151 69.568,-69.573c0,-38.42 -31.148,-69.567 -69.568,-69.567\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M73.796,51.693c0.813,-0.814 0.813,-2.134 0,-2.947c-0.815,-0.814 -2.133,-0.814 -2.947,0c-0.815,0.813 -0.815,2.133 0,2.947c0.814,0.813 2.132,0.813 2.947,0\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M66.445,53.149c-0.814,0.813 -0.814,2.133 0,2.947c0.813,0.814 2.133,0.814 2.947,0c0.813,-0.814 0.813,-2.134 0,-2.947c-0.814,-0.813 -2.134,-0.813 -2.947,0\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M79.231,54.233c-1.274,-1.274 -3.339,-1.272 -4.611,0l-2.713,2.712c-1.274,1.275 -1.274,3.339 0,4.612l2.978,2.978c1.274,1.275 3.338,1.274 4.611,0l2.712,-2.712c1.274,-1.274 1.274,-3.339 0,-4.612l-2.977,-2.978Z\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M95.759,41.445c-2.151,-2.578 1.869,-7.257 4.391,-4.463c4.645,5.148 -2.237,7.041 -4.391,4.463M105.004,44.132c3.442,-6.553 -1.427,-10.381 -4.773,-13.523c-5.36,-5.039 -10.706,-7.217 -16.811,-0.241c-6.102,6.977 -2.226,15.068 3.356,19.061c5.584,3.994 14.782,1.255 18.228,-5.297\" style=\"fill:#000;fill-rule:nonzero;\"></path></svg>
\t</a>
\t<a class=\"front-end\" target=\"_blank\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "html", null, true);
            echo "\"> <i class=\"fa fa-arrow-circle-right\"></i></a>
</div>
";
        }
        // line 17
        echo "





";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  49 => 14,  42 => 10,  39 => 9,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.plugins.admin.logo_text %}
<h3>
\t<a href=\"{{ base_url_relative }}\">
\t\t{{ config.plugins.admin.logo_text }}
\t</a>
\t<a class=\"front-end\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-arrow-circle-right\"></i></a>
</h3>
{% else %}
<div class=\"admin-logo\">
\t<a href=\"{{ base_url_relative }}\">
        <svg id=\"grav-logo-small\" class=\"grav-logo\" width=\"100%\" height=\"100%\" viewBox=\"0 0 186 186\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\" x=\"0px\" y=\"0px\" width=\"186px\" height=\"186px\"><g id=\"Layer_1_1\"><g><path d=\"M 98.4134 69.506 C 99.4991 68.4215 99.4991 66.6638 98.4134 65.5802 C 97.3273 64.4957 95.5692 64.4957 94.4835 65.5802 C 93.3973 66.6638 93.3973 68.4215 94.4835 69.506 C 95.5692 70.5895 97.3273 70.5895 98.4134 69.506 Z\" fill=\"#221e1f\"/><path d=\"M 88.6113 71.4462 C 87.5251 72.5297 87.5251 74.2875 88.6113 75.372 C 89.6955 76.4555 91.4551 76.4555 92.5412 75.372 C 93.6254 74.2875 93.6254 72.5297 92.5412 71.4462 C 91.4551 70.3617 89.6955 70.3617 88.6113 71.4462 Z\" fill=\"#221e1f\"/><path d=\"M 105.6614 72.8903 C 103.9628 71.193 101.2094 71.1945 99.5118 72.8903 L 95.8949 76.5033 C 94.1958 78.2006 94.1958 80.9511 95.8949 82.6464 L 99.8659 86.6146 C 101.5644 88.3119 104.3179 88.3104 106.0155 86.6146 L 109.6324 83.0016 C 111.331 81.3043 111.331 78.5538 109.6324 76.857 L 105.6614 72.8903 Z\" fill=\"#221e1f\"/><path d=\"M 140.0328 59.4342 C 144.622 50.7036 138.1301 45.604 133.6678 41.4182 C 126.5199 34.7063 119.3906 31.8046 111.2479 41.0982 C 103.1106 50.3923 108.2806 61.171 115.7239 66.4911 C 123.1706 71.8111 135.4371 68.1624 140.0328 59.4342 ZM 127.7032 55.8539 C 124.8355 52.4203 130.1964 46.1865 133.5598 49.9089 C 139.7549 56.7671 130.5759 59.2874 127.7032 55.8539 Z\" fill=\"#221e1f\"/><path d=\"M 92.7791 0.6418 C 41.5387 0.6418 0 42.1363 0 93.3177 C 0 144.503 41.5387 186 92.7791 186 C 144.0164 186 185.5547 144.503 185.5547 93.3177 C 185.5547 42.1363 144.0164 0.6418 92.7791 0.6418 ZM 142.9489 108.5071 C 133.2741 102.1201 127.7457 96.7234 122.9299 87.0473 C 119.6367 93.6768 111.9473 103.5349 98.9765 111.2898 C 92.5012 131.4129 61.6979 169.9242 51.7287 164.4651 C 48.7769 162.8503 48.2163 160.7232 48.8829 158.5289 C 49.5979 153.0278 60.9897 140.3846 60.9897 140.3846 C 60.9897 140.3846 61.2305 143.0375 64.8748 148.6264 C 60.0613 133.699 72.828 115.2805 76.21 109.0106 C 81.5244 107.3187 81.9093 100.5024 81.9093 100.5024 C 82.2492 89.9662 77.5378 82.3381 72.972 77.7761 C 76.2524 81.7756 77.3142 87.8196 77.47 93.3548 C 77.47 93.3631 77.47 93.3743 77.47 93.3856 C 77.4866 94.011 77.4866 94.6247 77.4841 95.2365 C 77.3283 99.8184 75.9409 106.1478 72.972 106.1478 L 72.9808 106.1878 C 69.9285 106.0571 66.1602 106.7079 62.7933 107.7597 L 55.35 109.5365 C 55.35 109.5365 59.3195 109.355 61.463 111.205 C 59.0758 115.0883 53.7701 119.9073 47.8524 122.6451 C 39.2424 126.6339 36.7678 118.6974 41.1393 113.5359 C 42.2127 112.2743 43.2969 111.2108 44.322 110.3395 C 43.6622 109.6575 43.2461 108.7442 43.1367 107.5851 C 43.1357 107.5792 43.1313 107.5734 43.1299 107.5675 C 42.5297 104.9341 42.8608 101.5152 46.591 96.0814 C 47.3275 94.9311 48.2104 93.7519 49.2682 92.5542 C 49.302 92.5132 49.3303 92.4752 49.3645 92.4352 C 49.4099 92.3801 49.4607 92.3279 49.5076 92.2742 C 49.5344 92.2444 49.5598 92.2147 49.5881 92.1835 C 49.8543 91.881 50.1376 91.5854 50.4404 91.3 C 54.8855 86.7517 61.9074 82.0215 72.972 77.7761 C 85.8759 58.8293 90.6014 55.2753 90.6014 55.2753 C 92.0299 53.8161 94.5269 52.0018 95.4446 51.5393 C 88.706 39.8425 87.3454 23.3534 89.1109 18.91 C 88.9678 19.1506 88.8364 19.3964 88.727 19.6511 C 89.3814 18.1295 89.82 17.6402 90.4998 16.8396 C 92.34 14.6647 98.5775 13.5251 100.8172 18.1324 C 102.0103 20.5887 102.2355 23.7705 102.1959 26.1562 C 97.2565 25.899 92.7761 31.5328 92.7761 31.5328 C 92.7761 31.5328 96.8672 29.6043 101.9498 29.5702 C 101.9498 29.5702 103.3045 30.7469 104.9948 32.9569 C 102.7126 37.2378 98.9609 46.3065 101.6777 55.827 C 102.128 57.7033 102.8088 59.3157 103.6542 60.6875 C 103.6864 60.7466 103.7133 60.8061 103.746 60.8671 C 103.8139 60.9559 103.8749 61.0295 103.9384 61.1115 C 108.4305 67.8673 116.664 68.6576 116.664 68.6576 C 112.7878 66.7257 109.6309 63.6488 107.5753 59.9182 C 106.5068 57.9229 105.8524 56.2383 105.4504 54.9094 C 103.2703 46.4978 106.4799 41.5875 108.3172 38.2955 C 112.5446 31.745 120.2458 27.7797 128.5232 28.7242 C 140.1402 30.0483 148.4841 40.5298 147.1562 52.1315 C 146.3465 59.2196 142.1137 65.0826 136.2982 68.2732 C 137.6969 72.0546 136.202 76.6394 136.202 76.6394 C 139.7241 81.0652 139.8794 83.6167 139.7578 85.9867 C 135.2814 85.2345 130.9324 88.2523 130.9324 88.2523 C 130.9324 88.2523 139.5683 86.1931 144.5854 90.6633 C 147.8482 94.169 150.0244 97.3372 151.3211 99.6769 C 153.1784 103.0139 161.8026 103.2519 160.8204 109.2535 C 159.8378 115.2463 153.2604 115.3029 142.9489 108.5071 Z\" fill=\"#221e1f\"/></g></g></svg>
\t\t<svg id=\"grav-logo-large\" class=\"grav-logo\" width=\"100%\" height=\"100%\" viewBox=\"0 0 504 140\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\" style=\"fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;\"><path d=\"M235.832,71.564l-7.98,-0.001c-1.213,0.001 -2.197,0.987 -2.197,2.204l0,15.327l-0.158,0.132c-4.696,3.962 -10.634,6.14 -16.719,6.14c-14.356,0 -26.034,-11.68 -26.034,-26.037c0,-14.358 11.678,-26.035 26.034,-26.035c5.582,0 10.919,1.767 15.437,5.113c0.877,0.649 2.093,0.56 2.866,-0.211l5.69,-5.69c0.444,-0.442 0.675,-1.055 0.639,-1.681c-0.034,-0.627 -0.336,-1.206 -0.828,-1.597c-6.76,-5.363 -15.214,-8.314 -23.805,-8.314c-21.18,0 -38.414,17.233 -38.414,38.415c0,21.183 17.234,38.415 38.414,38.415c10.937,0 21.397,-4.705 28.698,-12.914c0.358,-0.403 0.556,-0.921 0.556,-1.46l0,-19.603c0,-1.217 -0.985,-2.203 -2.2,-2.203\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M502.794,34.445c-0.408,-0.616 -1.1,-0.989 -1.838,-0.989l-8.684,0c-0.879,0 -1.673,0.522 -2.022,1.329l-24.483,56.839l-24.92,-56.852c-0.352,-0.799 -1.142,-1.316 -2.012,-1.316l-8.713,0c-0.744,0 -1.44,0.373 -1.843,0.995c-0.408,0.623 -0.476,1.408 -0.174,2.09l30.186,68.858c0.352,0.799 1.143,1.317 2.017,1.317l10.992,0c0.879,0 1.673,-0.527 2.021,-1.329l29.655,-68.861c0.289,-0.68 0.222,-1.461 -0.182,-2.081\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M388.683,34.772c-0.353,-0.798 -1.142,-1.316 -2.017,-1.316l-10.988,0c-0.879,0 -1.673,0.522 -2.021,1.329l-29.655,68.861c-0.294,0.675 -0.226,1.46 0.182,2.077c0.407,0.619 1.096,0.993 1.838,0.993l8.684,0c0.879,0 1.673,-0.526 2.022,-1.329l24.478,-56.842l24.92,56.854c0.353,0.798 1.143,1.317 2.013,1.317l8.717,0c0.744,0 1.44,-0.374 1.843,-0.993c0.408,-0.624 0.471,-1.41 0.174,-2.094l-30.19,-68.857Z\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M309.196,81.525l0.476,-0.229c8.675,-4.191 14.279,-13.087 14.279,-22.667c0,-13.881 -11.295,-25.174 -25.176,-25.174l-31.863,0c-1.214,0 -2.199,0.988 -2.199,2.202l0,68.855c0,1.219 0.985,2.204 2.199,2.204l7.979,0c1.214,0 2.2,-0.985 2.2,-2.204l0,-58.679l21.684,0c7.059,0 12.799,5.739 12.799,12.796c0,5.885 -3.996,10.989 -9.728,12.408c-1.032,0.261 -2.064,0.393 -3.071,0.393l-7.977,0c-0.829,0 -1.585,0.467 -1.959,1.205c-0.378,0.74 -0.305,1.625 0.187,2.296l22.62,30.884c0.412,0.566 1.07,0.901 1.771,0.901l9.915,0c0.827,0 1.587,-0.467 1.96,-1.207c0.378,-0.742 0.302,-1.629 -0.186,-2.296l-15.91,-21.688Z\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M107.191,80.969c-7.255,-4.794 -11.4,-8.845 -15.011,-16.109c-2.47,4.977 -8.236,12.376 -17.962,18.198c-4.856,15.106 -27.954,44.015 -35.43,39.916c-2.213,-1.212 -2.633,-2.808 -2.133,-4.456c0.536,-4.129 9.078,-13.62 9.078,-13.62c0,0 0.18,1.992 2.913,6.187c-3.609,-11.205 5.965,-25.031 8.5,-29.738c3.985,-1.269 4.274,-6.387 4.274,-6.387c0.255,-7.909 -3.278,-13.635 -6.701,-17.059c2.459,3.002 3.255,7.539 3.372,11.694l0,0.023c0.012,0.469 0.012,0.93 0.011,1.39c-0.117,3.439 -1.157,8.19 -3.383,8.19l0.006,0.03c-2.289,-0.098 -5.115,0.391 -7.639,1.18l-5.582,1.334c0,0 2.977,-0.136 4.584,1.252c-1.79,2.915 -5.769,6.533 -10.206,8.588c-6.457,2.995 -8.312,-2.964 -5.034,-6.838c0.805,-0.946 1.618,-1.745 2.387,-2.399c-0.495,-0.513 -0.807,-1.198 -0.889,-2.068c-0.001,-0.005 -0.004,-0.009 -0.005,-0.013c-0.45,-1.977 -0.202,-4.543 2.596,-8.623c0.551,-0.863 1.214,-1.748 2.007,-2.647c0.025,-0.031 0.046,-0.059 0.072,-0.089c0.034,-0.042 0.072,-0.08 0.108,-0.121c0.02,-0.023 0.039,-0.045 0.059,-0.068c0.2,-0.228 0.413,-0.45 0.639,-0.663c3.334,-3.414 8.599,-6.966 16.897,-10.152c9.675,-14.223 13.219,-16.89 13.219,-16.89c1.071,-1.096 2.943,-2.458 3.632,-2.805c-5.053,-8.781 -6.074,-21.158 -4.75,-24.493c-0.107,0.18 -0.206,0.365 -0.287,0.556c0.49,-1.143 0.819,-1.509 1.328,-2.111c1.381,-1.632 6.058,-2.488 7.737,0.971c0.895,1.844 1.063,4.232 1.034,6.023c-3.704,-0.193 -7.063,4.036 -7.063,4.036c0,0 3.067,-1.448 6.879,-1.473c0,0 1.015,0.883 2.283,2.542c-1.712,3.213 -4.524,10.021 -2.488,17.168c0.338,1.408 0.849,2.619 1.483,3.648c0.024,0.045 0.044,0.089 0.069,0.135c0.051,0.066 0.096,0.122 0.144,0.183c3.368,5.072 9.542,5.665 9.542,5.665c-2.906,-1.45 -5.274,-3.76 -6.816,-6.56c-0.8,-1.498 -1.291,-2.762 -1.592,-3.761c-1.636,-6.313 0.771,-9.999 2.149,-12.471c3.17,-4.917 8.944,-7.893 15.151,-7.185c8.712,0.995 14.968,8.862 13.973,17.571c-0.608,5.321 -3.781,9.723 -8.142,12.117c1.049,2.839 -0.073,6.28 -0.073,6.28c2.642,3.323 2.758,5.238 2.667,7.017c-3.357,-0.565 -6.618,1.701 -6.618,1.701c0,0 6.476,-1.546 10.238,1.81c2.446,2.631 4.078,5.009 5.051,6.766c1.393,2.505 7.859,2.683 7.123,7.188c-0.737,4.499 -5.669,4.542 -13.401,-0.56M69.571,0c-38.424,0 -69.571,31.148 -69.571,69.567c0,38.422 31.147,69.573 69.571,69.573c38.42,0 69.568,-31.151 69.568,-69.573c0,-38.42 -31.148,-69.567 -69.568,-69.567\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M73.796,51.693c0.813,-0.814 0.813,-2.134 0,-2.947c-0.815,-0.814 -2.133,-0.814 -2.947,0c-0.815,0.813 -0.815,2.133 0,2.947c0.814,0.813 2.132,0.813 2.947,0\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M66.445,53.149c-0.814,0.813 -0.814,2.133 0,2.947c0.813,0.814 2.133,0.814 2.947,0c0.813,-0.814 0.813,-2.134 0,-2.947c-0.814,-0.813 -2.134,-0.813 -2.947,0\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M79.231,54.233c-1.274,-1.274 -3.339,-1.272 -4.611,0l-2.713,2.712c-1.274,1.275 -1.274,3.339 0,4.612l2.978,2.978c1.274,1.275 3.338,1.274 4.611,0l2.712,-2.712c1.274,-1.274 1.274,-3.339 0,-4.612l-2.977,-2.978Z\" style=\"fill:#000;fill-rule:nonzero;\"></path><path d=\"M95.759,41.445c-2.151,-2.578 1.869,-7.257 4.391,-4.463c4.645,5.148 -2.237,7.041 -4.391,4.463M105.004,44.132c3.442,-6.553 -1.427,-10.381 -4.773,-13.523c-5.36,-5.039 -10.706,-7.217 -16.811,-0.241c-6.102,6.977 -2.226,15.068 3.356,19.061c5.584,3.994 14.782,1.255 18.228,-5.297\" style=\"fill:#000;fill-rule:nonzero;\"></path></svg>
\t</a>
\t<a class=\"front-end\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-arrow-circle-right\"></i></a>
</div>
{% endif %}






", "partials/logo.html.twig", "F:\\wamp64\\www\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\logo.html.twig");
    }
}
