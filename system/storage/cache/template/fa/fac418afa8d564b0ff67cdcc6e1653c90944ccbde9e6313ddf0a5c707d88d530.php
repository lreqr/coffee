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

/* coffee/template/product/special.twig */
class __TwigTemplate_a76325e1c546105391a2fd5217d949cba6ad76a4d7656b1bdcc1fd1853cc13f2 extends \Twig\Template
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
<div id=\"product-search\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"\">
      <h2>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 6
        if (($context["products"] ?? null)) {
            // line 7
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 10
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 11
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 15
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 19
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 22
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 22) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 23
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 23);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 23);
                    echo "</option>
              ";
                } else {
                    // line 25
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 25);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 25);
                    echo "</option>
              ";
                }
                // line 27
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "            
            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 33
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 36
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 36) == ($context["limit"] ?? null))) {
                    // line 37
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 37);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 37);
                    echo "</option>
              ";
                } else {
                    // line 39
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 39);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 39);
                    echo "</option>
              ";
                }
                // line 41
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 47
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 49);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                echo "</a></h4>
                <p>";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 53);
                echo "</p>
                ";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54)) {
                    // line 55
                    echo "                <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55)) {
                        // line 56
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56);
                        echo "
                  ";
                    } else {
                        // line 57
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
                        echo "</span> ";
                    }
                    // line 58
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 58)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 58);
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 60
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                <div class=\"rating\">
                  ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 63
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 63) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 64
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                </div>
                ";
                }
                // line 66
                echo " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 68);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 69
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 69);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 70
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 70);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 77
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 78
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 81
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 83
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 86
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 87
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 89
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "coffee/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 89,  308 => 87,  303 => 86,  295 => 83,  289 => 81,  283 => 78,  279 => 77,  275 => 75,  261 => 70,  255 => 69,  247 => 68,  243 => 66,  239 => 65,  233 => 64,  226 => 63,  222 => 62,  219 => 61,  216 => 60,  204 => 58,  197 => 57,  191 => 56,  188 => 55,  186 => 54,  182 => 53,  176 => 52,  164 => 49,  160 => 47,  156 => 46,  144 => 41,  136 => 39,  128 => 37,  125 => 36,  121 => 35,  116 => 33,  103 => 27,  95 => 25,  87 => 23,  84 => 22,  80 => 21,  75 => 19,  66 => 15,  59 => 11,  55 => 10,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"product-search\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"\">
      <h2>{{ heading_title }}</h2>
      {% if products %}
      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"{{ button_list }}\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"{{ button_grid }}\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"{{ compare }}\" id=\"compare-total\" class=\"btn btn-link\">{{ text_compare }}</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">{{ text_sort }}</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              {% for sorts in sorts %}
              {% if sorts.value == '%s-%s'|format(sort, order) %}
              <option value=\"{{ sorts.href }}\" selected=\"selected\">{{ sorts.text }}</option>
              {% else %}
              <option value=\"{{ sorts.href }}\">{{ sorts.text }}</option>
              {% endif %}
              {% endfor %}            
            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">{{ text_limit }}</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              {% for limits in limits %}
              {% if limits.value == limit %}
              <option value=\"{{ limits.href }}\" selected=\"selected\">{{ limits.text }}</option>
              {% else %}
              <option value=\"{{ limits.href }}\">{{ limits.text }}</option>
              {% endif %}
              {% endfor %}            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> {% for product in products %}
        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"{{ product.href }}\">{{ product.name }}</a></h4>
                <p>{{ product.description }}</p>
                {% if product.price %}
                <p class=\"price\"> {% if not product.special %}
                  {{ product.price }}
                  {% else %} <span class=\"price-new\">{{ product.special }}</span> <span class=\"price-old\">{{ product.price }}</span> {% endif %}
                  {% if product.tax %} <span class=\"price-tax\">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>
                {% endif %}
                {% if product.rating %}
                <div class=\"rating\">
                  {% for i in 1..5 %}
                  {% if product.rating < i %} <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> {% else %} <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> {% endif %}
                  {% endfor %}
                </div>
                {% endif %} </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}', '{{ product.minimum }}');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">{{ button_cart }}</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_wishlist }}\" onclick=\"wishlist.add('{{ product.product_id }}');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_compare }}\" onclick=\"compare.add('{{ product.product_id }}');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        {% endfor %} </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
        <div class=\"col-sm-6 text-right\">{{ results }}</div>
      </div>
      {% else %}
      <p>{{ text_empty }}</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "coffee/template/product/special.twig", "");
    }
}
