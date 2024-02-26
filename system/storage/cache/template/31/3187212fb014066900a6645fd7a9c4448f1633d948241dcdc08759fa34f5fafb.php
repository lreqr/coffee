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
class __TwigTemplate_fc2b4c60efacc2fbd8201f5070bf4a56446d1c5e3354b7fa38bb287b15715b82 extends \Twig\Template
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
        echo "<a href=\"#\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#minicart\"
   aria-controls=\"offcanvasWithBothOptions\"><span class=\"icon-cart\"
                                                  type=\"button\"><span></span></span></a>

<div class=\"offcanvas offcanvas-end mini-cart\" tabindex=\"-1\" id=\"minicart\"
     aria-labelledby=\"offcanvasWithBothOptionsLabel\" data-bs-theme=\"dark\">
  <div class=\"offcanvas-header\">
    <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabelCart\">Cart</h5>
    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\"
            aria-label=\"Close\"></button>
  </div>
  <div class=\"offcanvas-body\">
    ";
        // line 13
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 14
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 15
                echo "    <div class=\"mini-cart-product-row\">
      <img src=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16);
                echo "\" alt=\"product1_1\">
      <div class=\"mini-cart-product-info\">
        <p class=\"product-name\">
          <a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "</a>
          ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 21));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
              - <small>";
                        // line 22
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 22);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 22);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "          ";
                }
                // line 24
                echo "        </p>
        <p class=\"product-qty\"><input type=\"number\" value=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 25);
                echo "\" min=\"1\" max=\"100\"> &times; ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 25);
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
            // line 32
            echo "    <hr>
      <table class=\"table table-bordered\">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 35
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 36);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 37);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      </table>
    <hr>
    <div class=\"mini-cart-btn\">
      <a href=\"";
            // line 43
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-warning\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>
      <a href=\"";
            // line 44
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-outline-secondary\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
    </div>
      ";
        } else {
            // line 47
            echo "        <p class=\"text-center\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 49
        echo "  </div>
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
        return array (  161 => 49,  155 => 47,  147 => 44,  141 => 43,  136 => 40,  127 => 37,  123 => 36,  120 => 35,  116 => 34,  112 => 32,  97 => 25,  94 => 24,  91 => 23,  82 => 22,  75 => 21,  73 => 20,  67 => 19,  61 => 16,  58 => 15,  53 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/cart.twig", "");
    }
}
