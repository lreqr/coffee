<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* coffee/template/common/header.twig */
class __TwigTemplate_df6366507cc1e7c9af40e99d64b6f3e0a2cefc9a4007c5566226945503bab8a6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo ($context["lang"] ?? null);
        echo "\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 9
        echo ($context["title"] ?? null);
        echo "</title>
    <base href=\"";
        // line 10
        echo ($context["base"] ?? null);
        echo "\"/>
    ";
        // line 11
        if (($context["description"] ?? null)) {
            // line 12
            echo "        <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
    ";
        }
        // line 14
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 15
            echo "        <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
    ";
        }
        // line 17
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;900&display=swap\" rel=\"stylesheet\">
    <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 24
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 24);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 24);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 24);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 27
            echo "        <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    <link rel=\"stylesheet\" href=\"catalog/view/theme/coffee/assets/img/icons/style.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/coffee/assets/css/style.css\">

    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 34);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 34);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 37
            echo "        ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</head>

<body>

<div class=\"wrapper\">
    <!-- header -->
    <header class=\"header sticky-top\">

        <!-- header line -->
        <div class=\"container\">
            <div class=\"d-flex justify-content-between header-top\">
                ";
        // line 50
        echo ($context["language"] ?? null);
        echo "
                <a href=\"tel:";
        // line 51
        echo ($context["telephone"] ?? null);
        echo "\" class=\"header-tel\">";
        echo ($context["telephone"] ?? null);
        echo "</a>
            </div>

        </div>

        <!-- header -->
        <nav class=\"navbar navbar-expand-lg\" data-bs-theme=\"dark\">
            <div class=\"container\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\"
                        data-bs-target=\"#navbarOffcanvas\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"offcanvas offcanvas-start\" id=\"navbarOffcanvas\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Menu</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\"
                                aria-label=\"Close\"></button>
                    </div>
                    <ul class=\"navbar-nav mb-2 mb-lg-0 \">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 72
        echo ($context["home"] ?? null);
        echo "\">";
        echo ($context["home_locale"] ?? null);
        echo "</a>
                        </li>

                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 76
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 77);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 77);
            echo "</a>
                                </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                        <li class=\"nav-item nav-dropdown-menu\">
                            <a class=\"nav-link\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" href=\"\">";
        // line 82
        echo ($context["menu_locale"] ?? null);
        echo "</a>
                            ";
        // line 83
        echo ($context["menu"] ?? null);
        echo "
                        </li>

                    </ul>

                </div>
                ";
        // line 89
        if (($context["logo"] ?? null)) {
            // line 90
            echo "                <a class=\"navbar-brand\" href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\"/></a>
                ";
        } else {
            // line 92
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
                ";
        }
        // line 94
        echo "                <div id=\"nav-icons\"></div>
            </div>
        </nav>

        <!-- Иконки хедера -->
        <ul class=\"header-icons d-none\">
            <li><a href=\"";
        // line 100
        echo ($context["login"] ?? null);
        echo "\"><span class=\"icon-user\"></span></a></li>
            <li><a href=\"favorite.html\"><span class=\"icon-favorite\"></span></a></li>

            ";
        // line 103
        echo ($context["cart"] ?? null);
        echo "
            <!-- sidebar Иконок хедера -->




    </header>";
    }

    public function getTemplateName()
    {
        return "coffee/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 103,  265 => 100,  257 => 94,  249 => 92,  237 => 90,  235 => 89,  226 => 83,  222 => 82,  218 => 80,  207 => 77,  204 => 76,  200 => 75,  192 => 72,  166 => 51,  162 => 50,  149 => 39,  140 => 37,  135 => 36,  124 => 34,  120 => 33,  114 => 29,  105 => 27,  100 => 26,  87 => 24,  83 => 23,  75 => 17,  69 => 15,  66 => 14,  60 => 12,  58 => 11,  54 => 10,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"{{ lang }}\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{{ title }}</title>
    <base href=\"{{ base }}\"/>
    {% if description %}
        <meta name=\"description\" content=\"{{ description }}\"/>
    {% endif %}
    {% if keywords %}
        <meta name=\"keywords\" content=\"{{ keywords }}\"/>
    {% endif %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;900&display=swap\" rel=\"stylesheet\">
    <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>

    {% for style in styles %}
        <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
    {% endfor %}
    {% for script in scripts %}
        <script src=\"{{ script }}\" type=\"text/javascript\"></script>
    {% endfor %}

    <link rel=\"stylesheet\" href=\"catalog/view/theme/coffee/assets/img/icons/style.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/coffee/assets/css/style.css\">

    {% for link in links %}
        <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
    {% endfor %}
    {% for analytic in analytics %}
        {{ analytic }}
    {% endfor %}
</head>

<body>

<div class=\"wrapper\">
    <!-- header -->
    <header class=\"header sticky-top\">

        <!-- header line -->
        <div class=\"container\">
            <div class=\"d-flex justify-content-between header-top\">
                {{ language }}
                <a href=\"tel:{{ telephone }}\" class=\"header-tel\">{{ telephone }}</a>
            </div>

        </div>

        <!-- header -->
        <nav class=\"navbar navbar-expand-lg\" data-bs-theme=\"dark\">
            <div class=\"container\">
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\"
                        data-bs-target=\"#navbarOffcanvas\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"offcanvas offcanvas-start\" id=\"navbarOffcanvas\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Menu</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\"
                                aria-label=\"Close\"></button>
                    </div>
                    <ul class=\"navbar-nav mb-2 mb-lg-0 \">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"{{ home }}\">{{ home_locale }}</a>
                        </li>

                        {% for information in informations %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ information.href }}\">{{ information.title }}</a>
                                </li>
                        {% endfor %}

                        <li class=\"nav-item nav-dropdown-menu\">
                            <a class=\"nav-link\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" href=\"\">{{ menu_locale }}</a>
                            {{ menu }}
                        </li>

                    </ul>

                </div>
                {% if logo %}
                <a class=\"navbar-brand\" href=\"{{ home }}\"><img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\"/></a>
                {% else %}
                    <a class=\"navbar-brand\" href=\"{{ home }}\">{{ name }}</a>
                {% endif %}
                <div id=\"nav-icons\"></div>
            </div>
        </nav>

        <!-- Иконки хедера -->
        <ul class=\"header-icons d-none\">
            <li><a href=\"{{ login }}\"><span class=\"icon-user\"></span></a></li>
            <li><a href=\"favorite.html\"><span class=\"icon-favorite\"></span></a></li>

            {{ cart }}
            <!-- sidebar Иконок хедера -->




    </header>", "coffee/template/common/header.twig", "");
    }
}
