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
class __TwigTemplate_15a41dad2532996e7a980414eaeeb35092ea942a877080b42215abf2400e5e32 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <a href=\"#\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasWithBothOptionsCart\"
     aria-controls=\"offcanvasWithBothOptions\"><span class=\"icon-cart\"
                                                    type=\"button\"><span></span></span></a>
";
        // line 6
        echo "  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 7
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 8
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "        <tr>
          <td class=\"text-center\">";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 14));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 15);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 15);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "            ";
                }
                // line 17
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 17)) {
                    echo " <br />
            - <small>";
                    // line 18
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 18);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 19);
                echo "</td>
          <td class=\"text-right\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 20);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 21);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 25
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 27);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 29);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 30);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 39
                echo "          <tr>
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
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 45
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 49
            echo "    <li>
      <p class=\"text-center\">";
            // line 50
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 53
        echo "  </ul>
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
        return array (  211 => 53,  205 => 50,  202 => 49,  189 => 45,  186 => 44,  177 => 41,  173 => 40,  170 => 39,  166 => 38,  159 => 33,  148 => 30,  144 => 29,  139 => 27,  135 => 25,  130 => 24,  119 => 21,  115 => 20,  111 => 19,  103 => 18,  98 => 17,  95 => 16,  86 => 15,  79 => 14,  73 => 13,  59 => 12,  56 => 11,  52 => 10,  48 => 8,  46 => 7,  43 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/cart.twig", "");
    }
}
