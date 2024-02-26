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
class __TwigTemplate_da55728ddb307eb80201fa8b7917bbac629050c0b097ed4969d3a6de3bb40e57 extends \Twig\Template
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
                echo "          <div class=\"col-lg-4 col-md-6\">
            <div class=\"product-card\">
              <div class=\"product-card-img\">
                <a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 41);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 41);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                echo "\"></a>
              </div>
              <div class=\"product-card-content\">
                <h3><a href=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                echo "</a></h3>
                <div class=\"product-bottom\">
                  ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "                    <div class=\"product-price\">
                      ";
                    // line 48
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 48)) {
                        // line 49
                        echo "                        <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49);
                        echo "</span>
                      ";
                    } else {
                        // line 51
                        echo "                        <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51);
                        echo "</span>
                        <small>";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52);
                        echo "</small>
                      ";
                    }
                    // line 54
                    echo "                    </div>
                  ";
                }
                // line 56
                echo "                  <div class=\"product-actions\">
                    <a href=\"#\" onclick=\"return wishlist.add('";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
                echo "');\"><span class=\"icon-favorite\"></span></a>
                    <a href=\"\" onclick=\"return cart.add('";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
                echo "');\" class=\"add-to-cart\"><span
                              class=\"icon-cart\"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 67
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 68
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 71
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 73
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 76
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 77
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 79
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
        return array (  248 => 79,  243 => 77,  238 => 76,  230 => 73,  224 => 71,  218 => 68,  214 => 67,  210 => 65,  196 => 58,  192 => 57,  189 => 56,  185 => 54,  180 => 52,  175 => 51,  169 => 49,  167 => 48,  164 => 47,  162 => 46,  155 => 44,  145 => 41,  140 => 38,  136 => 37,  124 => 32,  116 => 30,  108 => 28,  105 => 27,  101 => 26,  96 => 24,  83 => 18,  75 => 16,  67 => 14,  64 => 13,  60 => 12,  55 => 10,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
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
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"product-card\">
              <div class=\"product-card-img\">
                <a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\"></a>
              </div>
              <div class=\"product-card-content\">
                <h3><a href=\"{{ product.href }}\">{{ product.name }}</a></h3>
                <div class=\"product-bottom\">
                  {% if product.price %}
                    <div class=\"product-price\">
                      {% if not product.special %}
                        <span>{{ product.price }}</span>
                      {% else %}
                        <span>{{ product.special }}</span>
                        <small>{{ product.price }}</small>
                      {% endif %}
                    </div>
                  {% endif %}
                  <div class=\"product-actions\">
                    <a href=\"#\" onclick=\"return wishlist.add('{{ product.product_id }}');\"><span class=\"icon-favorite\"></span></a>
                    <a href=\"\" onclick=\"return cart.add('{{ product.product_id }}');\" class=\"add-to-cart\"><span
                              class=\"icon-cart\"></span></a>
                  </div>
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
