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
class __TwigTemplate_8b3f7e4da3dc7549e78d5e3992c2803991ce55a7da15d8bd8be53a7a623ef880 extends \Twig\Template
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
            echo "<span></span>";
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
        ";
        // line 16
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "                <div class=\"mini-cart-product-row\">
                    <img src=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19);
                echo "\" alt=\"product1_1\">
                    <div class=\"mini-cart-product-info\">
                        <p class=\"product-name\">
                            <a href=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                echo "</a>
                            ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 24));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
                                    - <small>";
                        // line 25
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 25);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 25);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "                            ";
                }
                // line 27
                echo "                        </p>
                        <p class=\"product-qty\"><input type=\"number\" value=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 28);
                echo "\" min=\"1\" max=\"100\"> &times; ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 28);
                echo "
                        </p>
                    </div>
                    <a href=\"\" class=\"mini-cart-delete\"><span class=\"icon-trash\"></span></a>
                    <a href=\"\" class=\"mini-cart-update\">⭮</a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            <hr>
            <table class=\"table table-bordered\">
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 38
                echo "                    <tr>
                        <td class=\"text-right\"><strong>";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 39);
                echo "</strong></td>
                        <td class=\"text-right\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 40);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </table>
            <hr>
            <div class=\"mini-cart-btn\">
                <a href=\"";
            // line 46
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-warning\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>
                <a href=\"";
            // line 47
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-outline-secondary\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
            </div>
        ";
        } else {
            // line 50
            echo "            <p class=\"text-start h3\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        ";
        }
        // line 52
        echo "    </div>
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
        return array (  169 => 52,  163 => 50,  155 => 47,  149 => 46,  144 => 43,  135 => 40,  131 => 39,  128 => 38,  124 => 37,  120 => 35,  105 => 28,  102 => 27,  99 => 26,  90 => 25,  83 => 24,  81 => 23,  75 => 22,  69 => 19,  66 => 18,  61 => 17,  59 => 16,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/cart.twig", "");
    }
}
