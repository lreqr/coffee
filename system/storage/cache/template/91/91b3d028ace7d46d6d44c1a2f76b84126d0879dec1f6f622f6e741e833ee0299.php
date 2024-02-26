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
class __TwigTemplate_bb9a77f472f3b97c9fe8dbd164ff5376156b7c5d95441a37c7798718e3516e3f extends \Twig\Template
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
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 10
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 13
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 13) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 14
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 14);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 14);
                    echo "</option>
              ";
                } else {
                    // line 16
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 16);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 16);
                    echo "</option>
              ";
                }
                // line 18
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
            // line 24
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 27
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 27) == ($context["limit"] ?? null))) {
                    // line 28
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 28);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 28);
                    echo "</option>
              ";
                } else {
                    // line 30
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 30);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 30);
                    echo "</option>
              ";
                }
                // line 32
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
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 38
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 40);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 40);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                echo "</a></h4>
                <p>";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 44);
                echo "</p>
                ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "                <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 46)) {
                        // line 47
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47);
                        echo "
                  ";
                    } else {
                        // line 48
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 48);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 48);
                        echo "</span> ";
                    }
                    // line 49
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 49)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 49);
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 51
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                <div class=\"rating\">
                  ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 54
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 54) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 55
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                </div>
                ";
                }
                // line 57
                echo " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 59);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 60
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 61
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 61);
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
            // line 66
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 68
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 69
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 72
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 74
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 77
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 78
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 80
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
        return array (  293 => 80,  288 => 78,  283 => 77,  275 => 74,  269 => 72,  263 => 69,  259 => 68,  255 => 66,  241 => 61,  235 => 60,  227 => 59,  223 => 57,  219 => 56,  213 => 55,  206 => 54,  202 => 53,  199 => 52,  196 => 51,  184 => 49,  177 => 48,  171 => 47,  168 => 46,  166 => 45,  162 => 44,  156 => 43,  144 => 40,  140 => 38,  136 => 37,  124 => 32,  116 => 30,  108 => 28,  105 => 27,  101 => 26,  96 => 24,  83 => 18,  75 => 16,  67 => 14,  64 => 13,  60 => 12,  55 => 10,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
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
