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
class __TwigTemplate_63da74867357752e559ee83e998dcb5ffae8dc47156c8631d74840a51338d792 extends \Twig\Template
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
                                <label class=\"input-group-text sort-by\" for=\"input-sort\">Sort by:</label>
                                <select class=\"form-select sort-by\" id=\"input-sort\">
                                    <option selected=\"\">By relevance</option>
                                    <option value=\"1\">Novelties</option>
                                    <option value=\"2\">From cheap to expensive</option>
                                    <option value=\"2\">From expensive to cheap</option>
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
        // line 272
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
        return array (  317 => 272,  59 => 17,  51 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/product/category.twig", "");
    }
}
