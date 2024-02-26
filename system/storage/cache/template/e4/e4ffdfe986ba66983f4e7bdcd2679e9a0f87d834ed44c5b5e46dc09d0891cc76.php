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

/* coffee/template/product/product.twig */
class __TwigTemplate_b2429c4dec7070a8f123ddeb9e04246da8e60b6743145dffcbd661a77d191113 extends \Twig\Template
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

<main class=\"main product-page\">
    <div class=\"container\">
        ";
        // line 5
        echo ($context["content_top"] ?? null);
        echo "
        <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"product-img\">
                    ";
        // line 10
        if (($context["thumb"] ?? null)) {
            // line 11
            echo "                    <img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\">
                        ";
        } else {
            // line 13
            echo "                        <img src=\"catalog/view/theme/coffee/assets/img/no-image.png\">
                    ";
        }
        // line 15
        echo "                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"product-page-actions\">
                    <div class=\"product-page-price\">
                        ";
        // line 20
        if (($context["price"] ?? null)) {
            // line 21
            echo "                            ";
            if ( !($context["special"] ?? null)) {
                // line 22
                echo "                                <span>";
                echo ($context["price"] ?? null);
                echo "</span>
                            ";
            } else {
                // line 24
                echo "                                <span>";
                echo ($context["special"] ?? null);
                echo "</span>
                                <small>";
                // line 25
                echo ($context["price"] ?? null);
                echo "</small>
                            ";
            }
            // line 27
            echo "                        ";
        }
        // line 28
        echo "

                    </div>
                    <div class=\"product-variations\">
";
        // line 37
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 37) == "radio")) {
            // line 38
            echo "                            <div class=\"form-group";
            if (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "required", [], "any", false, false, false, 38)) {
                echo " required ";
            }
            echo "\">
                                <label class=\"control-label\">";
            // line 39
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "name", [], "any", false, false, false, 39);
            echo "</label>
                                <div id=\"input-option";
            // line 40
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "product_option_id", [], "any", false, false, false, 40);
            echo "\"> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "product_option_value", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                // line 41
                echo "                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\" name=\"option[";
                // line 43
                echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "product_option_id", [], "any", false, false, false, 43);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 43);
                echo "\" />
                                                ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 44)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 44);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 44);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 44)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 44);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 44);
                        echo " ";
                    }
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                // line 45
                echo "                                                ";
                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 45);
                echo "
                                                ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "                                                    (";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 47);
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 47);
                    echo ")
                                                ";
                }
                // line 48
                echo " </label>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo " </div>
                            </div>
                        ";
        }
        // line 53
        echo "                    </div>
                    <a href=\"#\" class=\"btn btn-warning add2cart-btn\">Add to cart</a>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-description\">
                    <h2>Description</h2>
                    <div class=\"product-description-content\">
                        <ul>
                            <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </li>
                            <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</li>
                            <li>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </li>
                            <li>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"catalog-section\">
            <h2>Other Products</h2>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
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
                <div class=\"col-lg-4 col-md-6\">
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
                <div class=\"col-lg-4 col-md-6\">
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
        </section>
        ";
        // line 146
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>


</main>

";
        // line 152
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 152,  274 => 146,  179 => 53,  174 => 50,  166 => 48,  159 => 47,  157 => 46,  152 => 45,  136 => 44,  130 => 43,  126 => 41,  120 => 40,  116 => 39,  109 => 38,  106 => 37,  100 => 28,  97 => 27,  92 => 25,  87 => 24,  81 => 22,  78 => 21,  76 => 20,  69 => 15,  65 => 13,  57 => 11,  55 => 10,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/product/product.twig", "");
    }
}
