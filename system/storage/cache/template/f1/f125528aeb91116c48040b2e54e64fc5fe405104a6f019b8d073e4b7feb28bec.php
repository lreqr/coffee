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
class __TwigTemplate_7dc3bbb8204944ceb6a7841c5e82adec48555236f4f0329239452485801a28d1 extends \Twig\Template
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
            <label class=\"input-group-addon input-group-text sort-by\" for=\"input-sort\">";
            // line 10
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control sort-by\" onchange=\"location = this.value;\">
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
      </div>
      <div class=\"row\"> ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 24
                echo "          <div class=\"col-lg-4 col-md-6\">
            <div class=\"product-card\">
              <div class=\"product-card-img\">
                <a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                echo "\"></a>
              </div>
              <div class=\"product-card-content\">
                <h3><a href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "</a></h3>
                <div class=\"product-bottom\">
                  ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "                    <div class=\"product-price\">
                      ";
                    // line 34
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 34)) {
                        // line 35
                        echo "                        <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35);
                        echo "</span>
                      ";
                    } else {
                        // line 37
                        echo "                        <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 37);
                        echo "</span>
                        <small>";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38);
                        echo "</small>
                      ";
                    }
                    // line 40
                    echo "                    </div>
                  ";
                }
                // line 42
                echo "                  <div class=\"product-actions\">
                    <a href=\"#\" onclick=\"return wishlist.add('";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 43);
                echo "');\"><span class=\"icon-favorite\"></span></a>
                    <a href=\"\" onclick=\"return cart.add('";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 44);
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
            // line 51
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 53
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 54
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 57
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 59
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 62
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 63
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 65
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
        return array (  207 => 65,  202 => 63,  197 => 62,  189 => 59,  183 => 57,  177 => 54,  173 => 53,  169 => 51,  155 => 44,  151 => 43,  148 => 42,  144 => 40,  139 => 38,  134 => 37,  128 => 35,  126 => 34,  123 => 33,  121 => 32,  114 => 30,  104 => 27,  99 => 24,  95 => 23,  83 => 18,  75 => 16,  67 => 14,  64 => 13,  60 => 12,  55 => 10,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
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
            <label class=\"input-group-addon input-group-text sort-by\" for=\"input-sort\">{{ text_sort }}</label>
            <select id=\"input-sort\" class=\"form-control sort-by\" onchange=\"location = this.value;\">
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
