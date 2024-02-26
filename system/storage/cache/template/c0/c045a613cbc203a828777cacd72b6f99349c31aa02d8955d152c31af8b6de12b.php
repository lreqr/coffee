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
class __TwigTemplate_f12b44327066b0c14b9c2ef42e8acb993cd6ffab9eaf03db12ed9b597a73a970 extends \Twig\Template
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
      <div id=\"content\" class=\"";
        // line 23
        echo ($context["class"] ?? null);
        echo "\">
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
        // line 33
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 34
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 35
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
              </thead>
              <tbody>

              ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 41
            echo "                <tr>
                  <td class=\"text-center\">";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</td>
                  <td class=\"text-left\"><a href=\"";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 43)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 44
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 44)) {
                // line 45
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 45));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                        <small>";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 46);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 46);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    ";
            }
            // line 48
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 48)) {
                echo " <br/>
                      <span class=\"label label-info\">";
                // line 49
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 49);
                echo "</small> ";
            }
            echo "</td>
                  <td class=\"text-left\">";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 50);
            echo "</td>
                  <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                      <input type=\"text\" name=\"quantity[";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 52);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 52);
            echo "\" size=\"1\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 54
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 55
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 55);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
                  <td class=\"text-right\">";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
            echo "</td>
                  <td class=\"text-right\">";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 58);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 62
            echo "                <tr>
                  <td></td>
                  <td class=\"text-left\">";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 64);
            echo "</td>
                  <td class=\"text-left\"></td>
                  <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                      <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 69
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 69);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
                  <td class=\"text-right\">";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 71);
            echo "</td>
                  <td class=\"text-right\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 72);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "              </tbody>

            </table>
          </div>
        </form>
        ";
        // line 80
        if (($context["modules"] ?? null)) {
            // line 81
            echo "          <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
          <p>";
            // line 82
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
          <div class=\"panel-group\" id=\"accordion\"> ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 84
                echo "              ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo " </div>
        ";
        }
        // line 86
        echo " <br/>
        <div class=\"row\">
          <div class=\"col-sm-4 col-sm-offset-8\">
            <table class=\"table table-bordered\">
              ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 91
            echo "                <tr>
                  <td class=\"text-right\"><strong>";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 92);
            echo ":</strong></td>
                  <td class=\"text-right\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 93);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            </table>
          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 100
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\"><a href=\"";
        // line 101
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
        </div>
        ";
        // line 103
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 104
        echo ($context["column_right"] ?? null);
        echo "</div>
  </div>
</main>
";
        // line 107
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
        return array (  352 => 107,  346 => 104,  342 => 103,  335 => 101,  329 => 100,  323 => 96,  314 => 93,  310 => 92,  307 => 91,  303 => 90,  297 => 86,  293 => 85,  284 => 84,  280 => 83,  276 => 82,  271 => 81,  269 => 80,  262 => 75,  253 => 72,  249 => 71,  242 => 69,  234 => 64,  230 => 62,  225 => 61,  216 => 58,  212 => 57,  205 => 55,  201 => 54,  194 => 52,  189 => 50,  181 => 49,  176 => 48,  173 => 47,  164 => 46,  157 => 45,  154 => 44,  146 => 43,  132 => 42,  129 => 41,  125 => 40,  117 => 35,  113 => 34,  109 => 33,  104 => 31,  100 => 30,  92 => 25,  88 => 24,  84 => 23,  79 => 20,  72 => 16,  69 => 15,  66 => 14,  59 => 10,  56 => 9,  53 => 8,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
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
      <div id=\"content\" class=\"{{ class }}\">
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
                  <td class=\"text-left\"><a href=\"{{ product.href }}\">{{ product.name }}</a> {% if not product.stock %} <span class=\"text-danger\">***</span> {% endif %}
                    {% if product.option %}
                      {% for option in product.option %} <br/>
                        <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}
                    {% endif %}
                    {% if product.recurring %} <br/>
                      <span class=\"label label-info\">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>
                  <td class=\"text-left\">{{ product.model }}</td>
                  <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                      <input type=\"text\" name=\"quantity[{{ product.cart_id }}]\" value=\"{{ product.quantity }}\" size=\"1\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"{{ button_update }}\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\" onclick=\"cart.remove('{{ product.cart_id }}');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
                  <td class=\"text-right\">{{ product.price }}</td>
                  <td class=\"text-right\">{{ product.total }}</td>
                </tr>
              {% endfor %}
              {% for voucher in vouchers %}
                <tr>
                  <td></td>
                  <td class=\"text-left\">{{ voucher.description }}</td>
                  <td class=\"text-left\"></td>
                  <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                      <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\" onclick=\"voucher.remove('{{ voucher.key }}');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
                  <td class=\"text-right\">{{ voucher.amount }}</td>
                  <td class=\"text-right\">{{ voucher.amount }}</td>
                </tr>
              {% endfor %}
              </tbody>

            </table>
          </div>
        </form>
        {% if modules %}
          <h2>{{ text_next }}</h2>
          <p>{{ text_next_choice }}</p>
          <div class=\"panel-group\" id=\"accordion\"> {% for module in modules %}
              {{ module }}
            {% endfor %} </div>
        {% endif %} <br/>
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
        {{ content_bottom }}</div>
      {{ column_right }}</div>
  </div>
</main>
{{ footer }} 
", "coffee/template/checkout/cart.twig", "");
    }
}
