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
class __TwigTemplate_fdea5414b5004c16dbf48924af4c599e876bba531fec4c88538e0e613114817c extends \Twig\Template
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
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 9
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 13
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 16
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 16) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 17
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 17);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 17);
                    echo "</option>
              ";
                } else {
                    // line 19
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 19);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 19);
                    echo "</option>
              ";
                }
                // line 21
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
            // line 27
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 30
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 30) == ($context["limit"] ?? null))) {
                    // line 31
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 31);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 31);
                    echo "</option>
              ";
                } else {
                    // line 33
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 33);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 33);
                    echo "</option>
              ";
                }
                // line 35
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
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 41
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
                echo "</a></h4>
                <p>";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 47);
                echo "</p>
                ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 49)) {
                        // line 50
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                        echo "
                  ";
                    } else {
                        // line 51
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                        echo "</span> ";
                    }
                    // line 52
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 52)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 52);
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 54
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 54)) {
                    // line 55
                    echo "                <div class=\"rating\">
                  ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 57
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 57) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 58
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                </div>
                ";
                }
                // line 60
                echo " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 62);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 62);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 63
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 63);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 64
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 64);
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
            // line 69
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 71
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 72
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 75
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 77
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 80
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 81
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 83
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
        return array (  301 => 83,  296 => 81,  291 => 80,  283 => 77,  277 => 75,  271 => 72,  267 => 71,  263 => 69,  249 => 64,  243 => 63,  235 => 62,  231 => 60,  227 => 59,  221 => 58,  214 => 57,  210 => 56,  207 => 55,  204 => 54,  192 => 52,  185 => 51,  179 => 50,  176 => 49,  174 => 48,  170 => 47,  164 => 46,  152 => 43,  148 => 41,  144 => 40,  132 => 35,  124 => 33,  116 => 31,  113 => 30,  109 => 29,  104 => 27,  91 => 21,  83 => 19,  75 => 17,  72 => 16,  68 => 15,  63 => 13,  54 => 9,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
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
