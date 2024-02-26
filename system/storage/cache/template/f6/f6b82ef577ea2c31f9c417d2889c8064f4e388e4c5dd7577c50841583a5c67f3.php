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

/* coffee/template/product/category.twig */
class __TwigTemplate_f69f79bbfa144df82b3b9e4328ae2bf1095b3de839603f3cb27936b3aa88c235 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

<main class=\"main menu-page\">

    <section class=\"filter-product-section\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-12\">
                    <h1 class=\"page-title\">
                        ";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "
                    </h1>
                </div>
            </div>

            <div class=\"row\">";
        // line 17
        echo ($context["column_left"] ?? null);
        echo "

                <div class=\"col-lg-9 col-md-8\">
                    <div class=\"row\">

                        <div class=\"col-sm-4\">
                            <div class=\"input-group mb-3\">
                                <div class=\"form-group input-group input-group-sm\">
                                    <label class=\"input-group-addon\" for=\"input-sort\">";
        // line 25
        echo ($context["text_sort"] ?? null);
        echo "</label>
                                    <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 28
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 28) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                // line 29
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 29);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 29);
                echo "</option>
                                            ";
            } else {
                // line 31
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 31);
                echo "</option>
                                            ";
            }
            // line 33
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                                    </select>
                                </div>
                                <label class=\"input-group-text sort-by\" for=\"input-sort\">";
        // line 36
        echo ($context["text_sort"] ?? null);
        echo "</label>
                                <select class=\"form-select sort-by\" id=\"input-sort\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 39
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 39) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                // line 40
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 40);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 40);
                echo "</option>
                                        ";
            } else {
                // line 42
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 42);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 42);
                echo "</option>
                                        ";
            }
            // line 44
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                    
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                                    <div class=\"product-bottom\">
                                        <div class=\"product-price\">
                                            <span>\$19.99</span>
                                            <small>\$29.99</small>
                                        </div>
                                        <div class=\"product-actions\">
                                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"product.html\"><img src=\"img/product2.png\" alt=\"\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                                    <div class=\"product-bottom\">
                                        <div class=\"product-price\">
                                            <span>\$19.99</span>
                                        </div>
                                        <div class=\"product-actions\">
                                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                                    <div class=\"product-bottom\">
                                        <div class=\"product-price\">
                                            <span>\$19.99</span>
                                            <small>\$29.99</small>
                                        </div>
                                        <div class=\"product-actions\">
                                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                                    <div class=\"product-bottom\">
                                        <div class=\"product-price\">
                                            <span>\$19.99</span>
                                            <small>\$29.99</small>
                                        </div>
                                        <div class=\"product-actions\">
                                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"product.html\"><img src=\"img/product2.png\" alt=\"\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                                    <div class=\"product-bottom\">
                                        <div class=\"product-price\">
                                            <span>\$19.99</span>
                                        </div>
                                        <div class=\"product-actions\">
                                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                                    <div class=\"product-bottom\">
                                        <div class=\"product-price\">
                                            <span>\$19.99</span>
                                            <small>\$29.99</small>
                                        </div>
                                        <div class=\"product-actions\">
                                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                                    <div class=\"product-bottom\">
                                        <div class=\"product-price\">
                                            <span>\$19.99</span>
                                            <small>\$29.99</small>
                                        </div>
                                        <div class=\"product-actions\">
                                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"product.html\"><img src=\"img/product2.png\" alt=\"\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                                    <div class=\"product-bottom\">
                                        <div class=\"product-price\">
                                            <span>\$19.99</span>
                                        </div>
                                        <div class=\"product-actions\">
                                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                                    <div class=\"product-bottom\">
                                        <div class=\"product-price\">
                                            <span>\$19.99</span>
                                            <small>\$29.99</small>
                                        </div>
                                        <div class=\"product-actions\">
                                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"nav-pagination\">
                        <nav aria-label=\"Page navigation example\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                        <span aria-hidden=\"true\">⇽</span>
                                    </a>
                                </li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                        <span aria-hidden=\"true\">⇾</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>

        </div>

    </section>

</main>

";
        // line 286
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 286,  142 => 45,  136 => 44,  128 => 42,  120 => 40,  117 => 39,  113 => 38,  108 => 36,  104 => 34,  98 => 33,  90 => 31,  82 => 29,  79 => 28,  75 => 27,  70 => 25,  59 => 17,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/product/category.twig", "");
    }
}
