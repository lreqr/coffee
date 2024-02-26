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

/* coffee/template/common/cart.twig */
class __TwigTemplate_236abd4092de58e0efbdbbadddf9bc5782d09b649ede3b391c99a13b3c14fb81 extends \Twig\Template
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
        echo "<li><a href=\"#\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#minicart\"
       aria-controls=\"offcanvasWithBothOptions\"><span class=\"icon-cart\"
                                                      type=\"button\">";
        // line 3
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            echo "<span class=\"cart-dot\"></span>";
        }
        echo "</span></a>
         </li>
</ul>

";
        // line 7
        echo twig_var_dump($this->env, $context, ...[0 => twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["products"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "option", [], "any", false, false, false, 7)]);
        echo "

<div class=\"offcanvas offcanvas-end mini-cart\" tabindex=\"-1\" id=\"minicart\"
     aria-labelledby=\"offcanvasWithBothOptionsLabel\" data-bs-theme=\"dark\">
    <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabelCart\">Cart</h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\"
                aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">
        <div class=\"in-cart\">
            ";
        // line 18
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "                    <div class=\"mini-cart-product-row\">
                        <img src=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                echo "\" alt=\"product1_1\">
                        <div class=\"mini-cart-product-info\">
                            <p class=\"product-name\">
                                <a href=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 24);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "</a>
                                ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br/>
                                        - <small>";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 27);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 27);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "                                ";
                }
                // line 29
                echo "                            </p>
                            <p class=\"product-qty\"><input type=\"number\" value=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 30);
                echo "\" data-qty=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 30);
                echo "\"
                                                          data-id=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 31);
                echo "\" data-size=\"\" min=\"1\" max=\"100\"> &times; ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 31);
                echo "
                            </p>
                        </div>
                        <a href=\"\" class=\"mini-cart-delete\" onclick=\"return cart.remove('";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 34);
                echo "');\"><span class=\"icon-trash\"></span></a>
                        <a href=\"\" class=\"mini-cart-update\">⭮</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                <hr>
                <table class=\"table table-bordered\">
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 41
                echo "                        <tr>
                            <td class=\"text-right\"><strong>";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 42);
                echo "</strong></td>
                            <td class=\"text-right\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 43);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </table>
                <hr>
                <div class=\"mini-cart-btn\">
                    <a href=\"";
            // line 49
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-warning\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>
                    <a href=\"";
            // line 50
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-outline-secondary\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
                </div>
            ";
        } else {
            // line 53
            echo "                <p class=\"text-start h3\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            ";
        }
        // line 55
        echo "        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "coffee/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 55,  177 => 53,  169 => 50,  163 => 49,  158 => 46,  149 => 43,  145 => 42,  142 => 41,  138 => 40,  134 => 38,  124 => 34,  116 => 31,  110 => 30,  107 => 29,  104 => 28,  95 => 27,  88 => 26,  86 => 25,  80 => 24,  74 => 21,  71 => 20,  66 => 19,  64 => 18,  50 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li><a href=\"#\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#minicart\"
       aria-controls=\"offcanvasWithBothOptions\"><span class=\"icon-cart\"
                                                      type=\"button\">{% if products or vouchers %}<span class=\"cart-dot\"></span>{% endif %}</span></a>
         </li>
</ul>

{{ dump(products[0].option) }}

<div class=\"offcanvas offcanvas-end mini-cart\" tabindex=\"-1\" id=\"minicart\"
     aria-labelledby=\"offcanvasWithBothOptionsLabel\" data-bs-theme=\"dark\">
    <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabelCart\">Cart</h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\"
                aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">
        <div class=\"in-cart\">
            {% if products or vouchers %}
                {% for product in products %}
                    <div class=\"mini-cart-product-row\">
                        <img src=\"{{ product.thumb }}\" alt=\"product1_1\">
                        <div class=\"mini-cart-product-info\">
                            <p class=\"product-name\">
                                <a href=\"{{ product.href }}\">{{ product.name }}</a>
                                {% if product.option %}
                                    {% for option in product.option %} <br/>
                                        - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}
                                {% endif %}
                            </p>
                            <p class=\"product-qty\"><input type=\"number\" value=\"{{ product.quantity }}\" data-qty=\"{{ product.quantity }}\"
                                                          data-id=\"{{ product.product_id }}\" data-size=\"\" min=\"1\" max=\"100\"> &times; {{ product.total }}
                            </p>
                        </div>
                        <a href=\"\" class=\"mini-cart-delete\" onclick=\"return cart.remove('{{ product.cart_id }}');\"><span class=\"icon-trash\"></span></a>
                        <a href=\"\" class=\"mini-cart-update\">⭮</a>
                    </div>
                {% endfor %}
                <hr>
                <table class=\"table table-bordered\">
                    {% for total in totals %}
                        <tr>
                            <td class=\"text-right\"><strong>{{ total.title }}</strong></td>
                            <td class=\"text-right\">{{ total.text }}</td>
                        </tr>
                    {% endfor %}
                </table>
                <hr>
                <div class=\"mini-cart-btn\">
                    <a href=\"{{ cart }}\" class=\"btn btn-warning\">{{ text_cart }}</a>
                    <a href=\"{{ checkout }}\" class=\"btn btn-outline-secondary\">{{ text_checkout }}</a>
                </div>
            {% else %}
                <p class=\"text-start h3\">{{ text_empty }}</p>
            {% endif %}
        </div>
    </div>
</div>

", "coffee/template/common/cart.twig", "");
    }
}
