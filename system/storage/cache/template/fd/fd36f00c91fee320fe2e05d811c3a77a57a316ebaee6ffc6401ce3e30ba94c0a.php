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
class __TwigTemplate_9dd10d23390a3099af1a1df988cc43dd410e54720e6504b3aabed61e3f574cd1 extends \Twig\Template
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
                    ";
        // line 31
        if (($context["options"] ?? null)) {
            // line 32
            echo "                    <div class=\"product-variations\">
";
            // line 38
            echo "
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 40
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 40) == "radio")) {
                    // line 41
                    echo "                            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 41)) {
                        echo " required ";
                    }
                    echo "\">
                                <label class=\"control-label\">";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 42);
                    echo "</label>
                                ";
                    // line 43
                    $context["radioInput"] = 0;
                    // line 44
                    echo "                                <div id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 44);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 44));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 45
                        echo "                                        ";
                        $context["radioInput"] = (($context["radioInput"] ?? null) + 1);
                        // line 46
                        echo "                                        <div class=\"radio\">
                                            <input id=\"radioInput";
                        // line 47
                        echo ($context["radioInput"] ?? null);
                        echo "\" type=\"radio\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 47);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 47);
                        echo "\" />
                                            ";
                        // line 48
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 48)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 48);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 48);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 48)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 48);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 48);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 49
                        echo "                                            <label for=\"radioInput";
                        echo ($context["radioInput"] ?? null);
                        echo "\">
                                                ";
                        // line 50
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 50);
                        echo "
                                                 </label>
                                            <span id=\"\">";
                        // line 52
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 52)) {
                            // line 53
                            echo "                                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 53);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 53);
                            echo ")
                                                ";
                        }
                        // line 54
                        echo "</span>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo " </div>
                            </div>
                        ";
                }
                // line 59
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
                    </div>
                    ";
        }
        // line 63
        echo "                    <button href=\"#\" id=\"button-cart\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-warning add2cart-btn\">Add to cart</button>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-description\">
                    <h2>";
        // line 70
        echo ($context["tab_description"] ?? null);
        echo "</h2>
                    <div class=\"product-description-content\">
                        <ul>
                            ";
        // line 73
        echo ($context["description"] ?? null);
        echo "
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
        // line 152
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>


</main>

";
        // line 158
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
        return array (  321 => 158,  312 => 152,  230 => 73,  224 => 70,  213 => 63,  208 => 60,  202 => 59,  197 => 56,  189 => 54,  182 => 53,  180 => 52,  175 => 50,  170 => 49,  154 => 48,  146 => 47,  143 => 46,  140 => 45,  133 => 44,  131 => 43,  127 => 42,  120 => 41,  117 => 40,  113 => 39,  110 => 38,  107 => 32,  105 => 31,  100 => 28,  97 => 27,  92 => 25,  87 => 24,  81 => 22,  78 => 21,  76 => 20,  69 => 15,  65 => 13,  57 => 11,  55 => 10,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/product/product.twig", "");
    }
}
