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
class __TwigTemplate_2406626d3eb6e8aafb97bbec93e1acc3b062e32045cf66f02d56d285cc8a1afd extends \Twig\Template
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
                                                      type=\"button\"><span></span></span></a>
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
        // line 17
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "                <div class=\"mini-cart-product-row\">
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
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
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
                    echo "                            ";
                }
                // line 28
                echo "                        </p>
                        <p class=\"product-qty\"><input type=\"number\" value=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 29);
                echo "\" min=\"1\" max=\"100\"> &times; ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 29);
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
            // line 36
            echo "            <hr>
            <table class=\"table table-bordered\">
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 39
                echo "                    <tr>
                        <td class=\"text-right\"><strong>";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 40);
                echo "</strong></td>
                        <td class=\"text-right\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 41);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
            <hr>
            <div class=\"mini-cart-btn\">
                <a href=\"";
            // line 47
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-warning\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>
                <a href=\"";
            // line 48
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-outline-secondary\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
            </div>
        ";
        } else {
            // line 51
            echo "            <p class=\"text-center\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        ";
        }
        // line 53
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
        return array (  165 => 53,  159 => 51,  151 => 48,  145 => 47,  140 => 44,  131 => 41,  127 => 40,  124 => 39,  120 => 38,  116 => 36,  101 => 29,  98 => 28,  95 => 27,  86 => 26,  79 => 25,  77 => 24,  71 => 23,  65 => 20,  62 => 19,  57 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/cart.twig", "");
    }
}
