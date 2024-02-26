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
class __TwigTemplate_041dc586ca3bae13cf339384c8391321003762af4295b4df4b0c49aacfb9387e extends \Twig\Template
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
        echo ($context["column_model"] ?? null);
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
            echo "            <tr>
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
              <td class=\"text-left\"><a href=\"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 42)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 43
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 43)) {
                // line 44
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                <small>";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45);
                    echo ": </small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                ";
            }
            // line 47
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 47)) {
                echo " <br/>
                <small>";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 48);
                echo "</small> ";
            }
            // line 49
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 49)) {
                echo " <br/>
                <span class=\"label label-info\">";
                // line 50
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 50);
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-left\">";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 51);
            echo "</td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 53);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53);
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 55
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 56
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 56);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58);
            echo "</td>
              <td class=\"text-right\">";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 59);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 63
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 65);
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 70
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 70);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 72);
            echo "</td>
              <td class=\"text-right\">";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 73);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "              </tbody>
            
          </table>
        </div>
      </form>
      ";
        // line 81
        if (($context["modules"] ?? null)) {
            // line 82
            echo "      <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
      <p>";
            // line 83
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 85
                echo "        ";
                echo $context["module"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo " </div>
      ";
        }
        // line 87
        echo " <br/>
      <div class=\"row\">
        <div class=\"col-sm-4 col-sm-offset-8\">
          <table class=\"table table-bordered\">
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 92
            echo "            <tr>
              <td class=\"text-right\"><strong>";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 93);
            echo ":</strong></td>
              <td class=\"text-right\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 94);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "          </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 101
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 102
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 104
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 105
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
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
        return array (  360 => 107,  355 => 105,  351 => 104,  344 => 102,  338 => 101,  332 => 97,  323 => 94,  319 => 93,  316 => 92,  312 => 91,  306 => 87,  302 => 86,  293 => 85,  289 => 84,  285 => 83,  280 => 82,  278 => 81,  271 => 76,  262 => 73,  258 => 72,  251 => 70,  243 => 65,  239 => 63,  234 => 62,  225 => 59,  221 => 58,  214 => 56,  210 => 55,  203 => 53,  198 => 51,  190 => 50,  185 => 49,  181 => 48,  176 => 47,  173 => 46,  166 => 45,  159 => 44,  156 => 43,  148 => 42,  134 => 41,  131 => 40,  127 => 39,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  91 => 24,  87 => 23,  83 => 22,  80 => 21,  73 => 17,  70 => 16,  67 => 15,  60 => 11,  57 => 10,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
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
                <td class=\"text-left\">{{ column_model }}</td>
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
                <small>{{ option.name }}: </small> {% endfor %}
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
