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
class __TwigTemplate_e77fed561509d6bdb199e2deb26ca2c14e78285d69be05e9b6ccda3ed7e606be extends \Twig\Template
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
<div id=\"checkout-cart\" class=\"container\">
  ";
        // line 3
        if (($context["attention"] ?? null)) {
            // line 4
            echo "    <div class=\"alert alert-info mt-3\" role=\"alert\">
      ";
            // line 5
            echo ($context["attention"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        // line 9
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 10
            echo "    <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
      ";
            // line 11
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        // line 15
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "    <div class=\"alert alert-warning mt-3\" role=\"alert\">
      ";
            // line 17
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        // line 21
        echo "  <div class=\"row\">
    <div id=\"content\" class=\"";
        // line 22
        echo ($context["class"] ?? null);
        echo "\">
      <h1>";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <form action=\"";
        // line 24
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-center\">";
        // line 29
        echo ($context["column_image"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 30
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 31
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 32
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 33
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "            <tr>
              <td class=\"text-center\">";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 40)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 40);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 40);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</td>
              <td class=\"text-left\"><a href=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 41);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 41)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 42
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 42)) {
                // line 43
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                <small>";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 44);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 44);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                ";
            }
            // line 46
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 46)) {
                echo " <br/>
                <small>";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 47);
                echo "</small> ";
            }
            // line 48
            echo "                ";
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
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 62
            echo "            <tr>
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
            echo "      <h2>";
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
                echo "        ";
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
            echo "            <tr>
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
        echo "          </table>
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
";
        // line 106
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
        return array (  358 => 106,  353 => 104,  349 => 103,  342 => 101,  336 => 100,  330 => 96,  321 => 93,  317 => 92,  314 => 91,  310 => 90,  304 => 86,  300 => 85,  291 => 84,  287 => 83,  283 => 82,  278 => 81,  276 => 80,  269 => 75,  260 => 72,  256 => 71,  249 => 69,  241 => 64,  237 => 62,  232 => 61,  223 => 58,  219 => 57,  212 => 55,  208 => 54,  201 => 52,  196 => 50,  188 => 49,  183 => 48,  179 => 47,  174 => 46,  171 => 45,  162 => 44,  155 => 43,  152 => 42,  144 => 41,  130 => 40,  127 => 39,  123 => 38,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  91 => 24,  87 => 23,  83 => 22,  80 => 21,  73 => 17,  70 => 16,  67 => 15,  60 => 11,  57 => 10,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"checkout-cart\" class=\"container\">
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
  <div class=\"row\">
    <div id=\"content\" class=\"{{ class }}\">
      <h1>{{ heading_title }}</h1>
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
                {% if product.reward %} <br/>
                <small>{{ product.reward }}</small> {% endif %}
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
{{ footer }} 
", "coffee/template/checkout/cart.twig", "");
    }
}
