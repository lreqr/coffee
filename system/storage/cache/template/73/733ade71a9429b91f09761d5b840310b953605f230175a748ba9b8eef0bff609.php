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

/* coffee/template/checkout/cart.twig */
class __TwigTemplate_cc6dad4740d6d3d494ce013b81af0df2e1a70a6f9bf7b3d64ceb40f3279a849a extends \Twig\Template
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
";
        // line 2
        if (($context["attention"] ?? null)) {
            // line 3
            echo "  <div class=\"alert alert-info mt-3\" role=\"alert\">
    ";
            // line 4
            echo ($context["attention"] ?? null);
            echo "
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  </div>
";
        }
        // line 8
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
      ";
            // line 10
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        // line 14
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-warning mt-3\" role=\"alert\">
      ";
            // line 16
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        // line 20
        echo "<main class=\"main checkout-cart-page\">
  <div id=\"checkout-cart\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"col-lg-10\">
        <h1 class=\"page-title\">";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <form action=\"";
        // line 25
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
              <thead>
              <tr>
                <td class=\"text-center\">";
        // line 30
        echo ($context["column_image"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 31
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 32
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 33
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 34
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
              </thead>
              <tbody>

              ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 40
            echo "                <tr>
                  <td class=\"text-center\">";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 41)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 41);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 41);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</td>
                  <td class=\"text-left\"><a class=\"active\" href=\"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 42)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 43
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 43)) {
                // line 44
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                        <small>";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 45);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    ";
            }
            // line 47
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 47)) {
                echo " <br/>
                      <span class=\"label label-info\">";
                // line 48
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 48);
                echo "</small> ";
            }
            echo "</td>
                  <td class=\"text-left\"><div class=\"input-group btn-block product-qty\">
                      <input type=\"number\" name=\"quantity[";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 50);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 50);
            echo "\" min=\"1\" max=\"100\" class=\"form-control\">
                      <span class=\"input-group-btn\">
                  <button class=\"btn-update\" type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 52
            echo ($context["button_update"] ?? null);
            echo "\">⭮</button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 53
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn-update\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 53);
            echo "');\"><span class=\"icon-trash\"></span></button>
                  </span></div></td>
                  <td class=\"text-right\">";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
            echo "</td>
                  <td class=\"text-right\">";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 56);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-4 col-sm-offset-8\">
            <table class=\"table table-bordered\">
              ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 67
            echo "                <tr>
                  <td class=\"text-right\"><strong>";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 68);
            echo ":</strong></td>
                  <td class=\"text-right\">";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 69);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </table>
          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 76
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\"><a href=\"";
        // line 77
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
        </div>
      </div>
    </div>
  </div>
</main>
";
        // line 83
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "coffee/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 83,  258 => 77,  252 => 76,  246 => 72,  237 => 69,  233 => 68,  230 => 67,  226 => 66,  217 => 59,  208 => 56,  204 => 55,  197 => 53,  193 => 52,  186 => 50,  177 => 48,  172 => 47,  169 => 46,  160 => 45,  153 => 44,  150 => 43,  142 => 42,  128 => 41,  125 => 40,  121 => 39,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  97 => 30,  89 => 25,  85 => 24,  79 => 20,  72 => 16,  69 => 15,  66 => 14,  59 => 10,  56 => 9,  53 => 8,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
{% if attention %}
  <div class=\"alert alert-info mt-3\" role=\"alert\">
    {{ attention }}
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  </div>
{% endif %}
  {% if success %}
    <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
      {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  {% endif %}
  {% if error_warning %}
    <div class=\"alert alert-warning mt-3\" role=\"alert\">
      {{ error_warning }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  {% endif %}
<main class=\"main checkout-cart-page\">
  <div id=\"checkout-cart\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"col-lg-10\">
        <h1 class=\"page-title\">{{ heading_title }}</h1>
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
              <thead>
              <tr>
                <td class=\"text-center\">{{ column_image }}</td>
                <td class=\"text-left\">{{ column_name }}</td>
                <td class=\"text-left\">{{ column_quantity }}</td>
                <td class=\"text-right\">{{ column_price }}</td>
                <td class=\"text-right\">{{ column_total }}</td>
              </tr>
              </thead>
              <tbody>

              {% for product in products %}
                <tr>
                  <td class=\"text-center\">{% if product.thumb %} <a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\" /></a> {% endif %}</td>
                  <td class=\"text-left\"><a class=\"active\" href=\"{{ product.href }}\">{{ product.name }}</a> {% if not product.stock %} <span class=\"text-danger\">***</span> {% endif %}
                    {% if product.option %}
                      {% for option in product.option %} <br/>
                        <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}
                    {% endif %}
                    {% if product.recurring %} <br/>
                      <span class=\"label label-info\">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>
                  <td class=\"text-left\"><div class=\"input-group btn-block product-qty\">
                      <input type=\"number\" name=\"quantity[{{ product.cart_id }}]\" value=\"{{ product.quantity }}\" min=\"1\" max=\"100\" class=\"form-control\">
                      <span class=\"input-group-btn\">
                  <button class=\"btn-update\" type=\"submit\" data-toggle=\"tooltip\" title=\"{{ button_update }}\">⭮</button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn-update\" onclick=\"cart.remove('{{ product.cart_id }}');\"><span class=\"icon-trash\"></span></button>
                  </span></div></td>
                  <td class=\"text-right\">{{ product.price }}</td>
                  <td class=\"text-right\">{{ product.total }}</td>
                </tr>
              {% endfor %}
              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-4 col-sm-offset-8\">
            <table class=\"table table-bordered\">
              {% for total in totals %}
                <tr>
                  <td class=\"text-right\"><strong>{{ total.title }}:</strong></td>
                  <td class=\"text-right\">{{ total.text }}</td>
                </tr>
              {% endfor %}
            </table>
          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"{{ continue }}\" class=\"btn btn-default\">{{ button_shopping }}</a></div>
          <div class=\"pull-right\"><a href=\"{{ checkout }}\" class=\"btn btn-primary\">{{ button_checkout }}</a></div>
        </div>
      </div>
    </div>
  </div>
</main>
{{ footer }} 
", "coffee/template/checkout/cart.twig", "");
    }
}
