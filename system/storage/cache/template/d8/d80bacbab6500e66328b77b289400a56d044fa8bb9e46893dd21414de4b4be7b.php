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
class __TwigTemplate_1bfd7a29af866fa03efd875e54e5e720002ebae00490458aa668102e480e9a5d extends \Twig\Template
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
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 8
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "
        ";
        // line 28
        if (($context["weight"] ?? null)) {
            // line 29
            echo "        &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
        ";
        }
        // line 30
        echo " </h1>
      <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-center\">";
        // line 36
        echo ($context["column_image"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 37
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 38
        echo ($context["column_model"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 39
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 40
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 41
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 47
            echo "            <tr>
              <td class=\"text-center\">";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 48)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 48);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</td>
              <td class=\"text-left\"><a href=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 49);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 49)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 50
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 50)) {
                // line 51
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                <small>";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 52);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 52);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                ";
            }
            // line 54
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 54)) {
                echo " <br/>
                <small>";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 55);
                echo "</small> ";
            }
            // line 56
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 56)) {
                echo " <br/>
                <span class=\"label label-info\">";
                // line 57
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 57);
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-left\">";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 58);
            echo "</td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 60);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 60);
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 62
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 63
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 63);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 65);
            echo "</td>
              <td class=\"text-right\">";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 66);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 70
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 72);
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 77
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 77);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 79);
            echo "</td>
              <td class=\"text-right\">";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 80);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "              </tbody>
            
          </table>
        </div>
      </form>
      ";
        // line 88
        if (($context["modules"] ?? null)) {
            // line 89
            echo "      <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
      <p>";
            // line 90
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 92
                echo "        ";
                echo $context["module"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo " </div>
      ";
        }
        // line 94
        echo " <br/>
      <div class=\"row\">
        <div class=\"col-sm-4 col-sm-offset-8\">
          <table class=\"table table-bordered\">
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 99
            echo "            <tr>
              <td class=\"text-right\"><strong>";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 100);
            echo ":</strong></td>
              <td class=\"text-right\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 101);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "          </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 108
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 109
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 111
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 112
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 114
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
        return array (  392 => 114,  387 => 112,  383 => 111,  376 => 109,  370 => 108,  364 => 104,  355 => 101,  351 => 100,  348 => 99,  344 => 98,  338 => 94,  334 => 93,  325 => 92,  321 => 91,  317 => 90,  312 => 89,  310 => 88,  303 => 83,  294 => 80,  290 => 79,  283 => 77,  275 => 72,  271 => 70,  266 => 69,  257 => 66,  253 => 65,  246 => 63,  242 => 62,  235 => 60,  230 => 58,  222 => 57,  217 => 56,  213 => 55,  208 => 54,  205 => 53,  196 => 52,  189 => 51,  186 => 50,  178 => 49,  164 => 48,  161 => 47,  157 => 46,  149 => 41,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  121 => 31,  118 => 30,  112 => 29,  110 => 28,  106 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  81 => 20,  79 => 19,  74 => 18,  66 => 14,  63 => 13,  55 => 9,  52 => 8,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"checkout-cart\" class=\"container\">
  {% if attention %}
  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> {{ attention }}
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  {% endif %}
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  {% endif %}
  {% if error_warning %}
  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h1>{{ heading_title }}
        {% if weight %}
        &nbsp;({{ weight }})
        {% endif %} </h1>
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
