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
class __TwigTemplate_3f930230490aa16942f76e3709771f80455e09866cbeca5ffef2bcf514cf590b extends \Twig\Template
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
        echo "\" />
    ";
        // line 11
        if (($context["description"] ?? null)) {
            // line 12
            echo "        <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 14
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 15
            echo "        <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 17
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;900&display=swap\" rel=\"stylesheet\">

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 23
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 23);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 23);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 23);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 26
            echo "        <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    <link rel=\"stylesheet\" href=\"catalog/view/theme/coffee/assets/img/icons/style.css\">
    <link rel=\"stylesheet\" href=\"catalog/view/theme/coffee/assets/css/style.css\">

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 33
            echo "        <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 33);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 33);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 36
            echo "        ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</head>

<body>

<div class=\"wrapper\">
    <!-- header -->
    <header class=\"header sticky-top\">
        <!-- header line -->
        <div class=\"container\">
            <div class=\"d-flex justify-content-between header-top\">
                <ul class=\"languages list-inline m-0\">
                    <li class=\"list-inline-item\"><a href=\"#\">Ua</a></li>
                    <li class=\"list-inline-item\"><a href=\"#\" class=\"active\">En</a></li>
                </ul>
                <a href=\"tel:+371000000\" class=\"header-tel\">+371000000</a>
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
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"about.html\">About</a>
                        </li>
                        <li class=\"nav-item nav-dropdown-menu\">
                            <a class=\"nav-link\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" href=\"\">Menu</a>
                            <ul class=\"dropdown-menu dropdown-menu-dark \">
                                <li><a class=\"dropdown-item\" href=\"menu.html\">Coffee</a></li>
                                <li><a class=\"dropdown-item\" href=\"menu.html\">Coffee machines</a></li>
                                <li><a class=\"dropdown-item\" href=\"menu.html\">Coffee makers</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"reservation.html\">Reservation</a>
                        </li>

                    </ul>

                </div>
                <a class=\"navbar-brand\" href=\"#\"><img src=\"catalog/view/theme/coffee/assets/img/logo.png\" alt=\"logo\"></a>
                <div id=\"nav-icons\"></div>
            </div>
        </nav>

        <!-- Иконки хедера -->
        <ul class=\"header-icons d-none\">
            <li><a href=\"user.html\"><span class=\"icon-user\"></span></a></li>
            <li><a href=\"favorite.html\"><span class=\"icon-favorite\"></span></a></li>
            <li><a href=\"#\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasWithBothOptionsCart\"
                   aria-controls=\"offcanvasWithBothOptions\"><span class=\"icon-cart\"
                                                                  type=\"button\"><span></span></span></a>
            </li>

        </ul>

        <!-- sidebar Иконок хедера -->
        <div class=\"offcanvas offcanvas-end mini-cart\" tabindex=\"-1\" id=\"offcanvasWithBothOptionsCart\"
             aria-labelledby=\"offcanvasWithBothOptionsLabel\" data-bs-theme=\"dark\">
            <div class=\"offcanvas-header\">
                <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabelCart\">Cart</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\"
                        aria-label=\"Close\"></button>
            </div>
            <div class=\"offcanvas-body\">
                <div class=\"mini-cart-product-row\">
                    <img src=\"catalog/view/theme/coffee/assets/img/product1_1.png\" alt=\"product1_1\">
                    <div class=\"mini-cart-product-info\">
                        <p class=\"product-name\"><a href=\"\">Lavazza Crema E Gusto</a></p>
                        <p class=\"product-variation\">Xl</p>
                        <p class=\"product-qty\"><input type=\"number\" value=\"1\" min=\"1\" max=\"100\"></input> &times; \$19.99
                        </p>
                    </div>
                    <a href=\"\" class=\"mini-cart-delete\"><span class=\"icon-trash\"></span></a>
                    <a href=\"\" class=\"mini-cart-update\">⭮</a>
                </div>
                <div class=\"mini-cart-product-row\">
                    <img src=\"catalog/view/theme/coffee/assets/img/product1_1.png\" alt=\"product1_1\">
                    <div class=\"mini-cart-product-info\">
                        <p class=\"product-name\"><a href=\"\">Lavazza Crema E Gusto</a></p>
                        <p class=\"product-variation\">Xl</p>
                        <p class=\"product-qty\"><input type=\"number\" value=\"1\" min=\"1\" max=\"100\"></input> &times; \$19.99
                        </p>
                    </div>
                    <a href=\"\" class=\"mini-cart-delete\"><span class=\"icon-trash\"></span></a>
                    <a href=\"\" class=\"mini-cart-update\">⭮</a>
                </div>
                <hr>
                <h5>Total price: \$40.00</h5>
                <hr>
                <div class=\"mini-cart-btn\">
                    <a href=\"cart.html\" class=\"btn btn-warning\">Cart</a>
                    <a href=\"cart.html\" class=\"btn btn-outline-secondary\">Checkout</a>
                </div>
            </div>
        </div> <!--   sidebar хедера   -->
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
        return array (  148 => 38,  139 => 36,  134 => 35,  123 => 33,  119 => 32,  113 => 28,  104 => 26,  99 => 25,  86 => 23,  82 => 22,  75 => 17,  69 => 15,  66 => 14,  60 => 12,  58 => 11,  54 => 10,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/header.twig", "");
    }
}
