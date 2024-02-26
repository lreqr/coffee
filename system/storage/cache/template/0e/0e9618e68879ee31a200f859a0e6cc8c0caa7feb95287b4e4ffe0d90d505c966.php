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
class __TwigTemplate_4d4cc4bdc45a6d59c806e7004898ce042d632f6d71231652becb2f644aa0c852 extends \Twig\Template
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
                // line 23
                $context["basePrice"] = ($context["price"] ?? null);
                // line 24
                echo "                            ";
            } else {
                // line 25
                echo "                                ";
                $context["basePrice"] = ($context["special"] ?? null);
                // line 26
                echo "                                <span>";
                echo ($context["special"] ?? null);
                echo "</span>
                                <small>";
                // line 27
                echo ($context["price"] ?? null);
                echo "</small>
                            ";
            }
            // line 29
            echo "                        ";
        }
        // line 30
        echo "

                    </div>
                    ";
        // line 33
        if (($context["options"] ?? null)) {
            // line 34
            echo "                    <div class=\"product-variations\">
";
            // line 40
            echo "
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 42
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 42) == "radio")) {
                    // line 43
                    echo "                            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 43)) {
                        echo " required ";
                    }
                    echo "\">
                                <label class=\"control-label\">";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 44);
                    echo "</label>
                                ";
                    // line 45
                    $context["radioInput"] = 0;
                    // line 46
                    echo "                                <div id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 46);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 46));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 47
                        echo "                                        ";
                        $context["radioInput"] = (($context["radioInput"] ?? null) + 1);
                        // line 48
                        echo "                                        <div class=\"radio\">
                                            <input id=\"radioInput";
                        // line 49
                        echo ($context["radioInput"] ?? null);
                        echo "\" type=\"radio\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 49);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 49);
                        echo "\" />
                                            ";
                        // line 50
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 50)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 50);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 50);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 50)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 50);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 50);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 51
                        echo "                                            <label class=\"product-variation-label\" for=\"radioInput";
                        echo ($context["radioInput"] ?? null);
                        echo "\">
                                                ";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 52);
                        echo "
                                                 </label>
                                            <span data-baseprice=\"";
                        // line 54
                        echo ($context["basePrice"] ?? null);
                        echo "\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 54)) {
                            // line 55
                            echo "                                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 55);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 55);
                            echo ")
                                                ";
                        }
                        // line 56
                        echo "</span>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo " </div>
                            </div>
                        ";
                }
                // line 61
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
                    </div>
                    ";
        }
        // line 65
        echo "                    <button href=\"#\" id=\"button-cart\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-warning add2cart-btn\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-description\">
                    <h2>";
        // line 72
        echo ($context["tab_description"] ?? null);
        echo "</h2>
                    <div class=\"product-description-content\">
                        <ul>
                            ";
        // line 75
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
        // line 154
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>


</main>

";
        // line 160
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
        return array (  332 => 160,  323 => 154,  241 => 75,  235 => 72,  222 => 65,  217 => 62,  211 => 61,  206 => 58,  198 => 56,  191 => 55,  187 => 54,  182 => 52,  177 => 51,  161 => 50,  153 => 49,  150 => 48,  147 => 47,  140 => 46,  138 => 45,  134 => 44,  127 => 43,  124 => 42,  120 => 41,  117 => 40,  114 => 34,  112 => 33,  107 => 30,  104 => 29,  99 => 27,  94 => 26,  91 => 25,  88 => 24,  86 => 23,  81 => 22,  78 => 21,  76 => 20,  69 => 15,  65 => 13,  57 => 11,  55 => 10,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<main class=\"main product-page\">
    <div class=\"container\">
        {{ content_top }}
        <h1>{{ heading_title }}</h1>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"product-img\">
                    {% if thumb %}
                    <img src=\"{{ thumb }}\" alt=\"{{ heading_title }}\">
                        {% else %}
                        <img src=\"catalog/view/theme/coffee/assets/img/no-image.png\">
                    {% endif %}
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"product-page-actions\">
                    <div class=\"product-page-price\">
                        {% if price %}
                            {% if not special %}
                                <span>{{ price }}</span>
                                {% set basePrice =  price  %}
                            {% else %}
                                {% set basePrice =  special  %}
                                <span>{{ special }}</span>
                                <small>{{ price }}</small>
                            {% endif %}
                        {% endif %}


                    </div>
                    {% if options %}
                    <div class=\"product-variations\">
{#                        <ul>#}
{#                            <li><a href=\"\">l</a></li>#}
{#                            <li><a href=\"\" class=\"active\">Xl</a></li>#}
{#                            <li><a href=\"\">Xxl</a></li>#}
{#                        </ul>#}

                        {% for option in options %}
                        {% if option.type == 'radio' %}
                            <div class=\"form-group{% if option.required %} required {% endif %}\">
                                <label class=\"control-label\">{{ option.name }}</label>
                                {% set radioInput = 0 %}
                                <div id=\"input-option{{ option.product_option_id }}\"> {% for option_value in option.product_option_value %}
                                        {% set radioInput = radioInput + 1 %}
                                        <div class=\"radio\">
                                            <input id=\"radioInput{{ radioInput }}\" type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" />
                                            {% if option_value.image %} <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\" /> {% endif %}
                                            <label class=\"product-variation-label\" for=\"radioInput{{ radioInput }}\">
                                                {{ option_value.name }}
                                                 </label>
                                            <span data-baseprice=\"{{ basePrice }}\">{% if option_value.price %}
                                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                                {% endif %}</span>
                                        </div>
                                    {% endfor %} </div>
                            </div>
                        {% endif %}
                        {% endfor %}

                    </div>
                    {% endif %}
                    <button href=\"#\" id=\"button-cart\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-warning add2cart-btn\">{{ button_cart }}</button>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-description\">
                    <h2>{{ tab_description }}</h2>
                    <div class=\"product-description-content\">
                        <ul>
                            {{ description }}
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
        {{ content_bottom }}
    </div>


</main>

{{ footer }}", "coffee/template/product/product.twig", "");
    }
}
