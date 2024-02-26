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
class __TwigTemplate_480eaba2f6a5f472db2de8b9277fde167e1ba98b96c430ab485a562acf4574fc extends \Twig\Template
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
        // line 17
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 18
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "                    <div class=\"mini-cart-product-row\">
                        <img src=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20);
                echo "\" alt=\"product1_1\">
                        <div class=\"mini-cart-product-info\">
                            <p class=\"product-name\">
                                <a href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "</a>
                                ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br/>
                                        - <small>";
                        // line 26
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 26);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 26);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                                ";
                }
                // line 28
                echo "                            </p>
                            <p class=\"product-qty\"><input type=\"number\" value=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 29);
                echo "\" data-qty=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 29);
                echo "\"
                                                          min=\"1\" max=\"100\"> &times; ";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 30);
                echo "
                            </p>
                        </div>
                        <a href=\"\" class=\"mini-cart-delete\" onclick=\"return cart.remove('";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
                echo "');\"><span class=\"icon-trash\"></span></a>
                        <a href=\"\" class=\"mini-cart-update\">⭮</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                <hr>
                <table class=\"table table-bordered\">
                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 40
                echo "                        <tr>
                            <td class=\"text-right\"><strong>";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 41);
                echo "</strong></td>
                            <td class=\"text-right\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 42);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </table>
                <hr>
                <div class=\"mini-cart-btn\">
                    <a href=\"";
            // line 48
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-warning\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>
                    <a href=\"";
            // line 49
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-outline-secondary\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
                </div>
            ";
        } else {
            // line 52
            echo "                <p class=\"text-start h3\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            ";
        }
        // line 54
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
        return array (  177 => 54,  171 => 52,  163 => 49,  157 => 48,  152 => 45,  143 => 42,  139 => 41,  136 => 40,  132 => 39,  128 => 37,  118 => 33,  112 => 30,  106 => 29,  103 => 28,  100 => 27,  91 => 26,  84 => 25,  82 => 24,  76 => 23,  70 => 20,  67 => 19,  62 => 18,  60 => 17,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li><a href=\"#\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#minicart\"
       aria-controls=\"offcanvasWithBothOptions\"><span class=\"icon-cart\"
                                                      type=\"button\">{% if products or vouchers %}<span class=\"cart-dot\"></span>{% endif %}</span></a>
         </li>
</ul>


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
                                                          min=\"1\" max=\"100\"> &times; {{ product.total }}
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
