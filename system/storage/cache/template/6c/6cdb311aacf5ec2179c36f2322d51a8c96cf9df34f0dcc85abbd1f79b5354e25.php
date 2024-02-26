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
class __TwigTemplate_60ec73eef15c2b6e50b7b1db549b65cd08eaeec2df2e38e1acdc2029e89b378e extends \Twig\Template
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
                    echo "                                ";
                }
                // line 28
                echo "                            </p>
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
            echo "                <hr>
                <table class=\"table table-bordered\">
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 39
                echo "                        <tr>
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
            echo "                </table>
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
            echo "                <p class=\"text-start h3\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            ";
        }
        // line 53
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
        return array (  170 => 53,  164 => 51,  156 => 48,  150 => 47,  145 => 44,  136 => 41,  132 => 40,  129 => 39,  125 => 38,  121 => 36,  106 => 29,  103 => 28,  100 => 27,  91 => 26,  84 => 25,  82 => 24,  76 => 23,  70 => 20,  67 => 19,  62 => 18,  60 => 17,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/cart.twig", "");
    }
}
