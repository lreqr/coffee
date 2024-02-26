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
class __TwigTemplate_b28d615e3d265e2081c4fd805b3b737bee14a212e729806b6ddd54f1548e732e extends \Twig\Template
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
<main class=\"main special-page\">

  <div id=\"product-search\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"\">
        <h1 class=\"page-title\">";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        ";
        // line 8
        if (($context["products"] ?? null)) {
            // line 9
            echo "          <div class=\"row\">
            <div class=\"col-md-4 col-xs-6\">
              <div class=\"form-group input-group input-group-sm\">
                <label class=\"input-group-addon input-group-text sort-by\" for=\"input-sort\">";
            // line 12
            echo ($context["text_sort"] ?? null);
            echo "</label>
                <select id=\"input-sort\" class=\"form-control form-select sort-by\" onchange=\"location = this.value;\">
                  ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 15
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 15) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 16
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 16);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 16);
                    echo "</option>
                    ";
                } else {
                    // line 18
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 18);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 18);
                    echo "</option>
                    ";
                }
                // line 20
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </select>
              </div>
            </div>
          </div>
          <div class=\"row\"> ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                echo "              <div class=\"col-lg-4 col-md-6\">
                <div class=\"product-card\">
                  <div class=\"product-card-img\">
                    <a href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                echo "\"></a>
                  </div>
                  <div class=\"product-card-content\">
                    <h3><a href=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                echo "</a></h3>
                    <div class=\"product-bottom\">
                      ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "                        <div class=\"product-price\">
                          ";
                    // line 36
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "                            <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37);
                        echo "</span>
                          ";
                    } else {
                        // line 39
                        echo "                            <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 39);
                        echo "</span>
                            <small>";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40);
                        echo "</small>
                          ";
                    }
                    // line 42
                    echo "                        </div>
                      ";
                }
                // line 44
                echo "                      <div class=\"product-actions\">
                        <a href=\"#\" onclick=\"return wishlist.add('";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 45);
                echo "');\"><span class=\"icon-favorite\"></span></a>
                        <a href=\"\" onclick=\"return cart.add('";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 46);
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
            // line 53
            echo " </div>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
            // line 55
            echo ($context["pagination"] ?? null);
            echo "</div>
            <div class=\"col-sm-6 text-right\">";
            // line 56
            echo ($context["results"] ?? null);
            echo "</div>
          </div>
        ";
        } else {
            // line 59
            echo "          <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
          <div class=\"buttons\">
            <div class=\"pull-right\"><a href=\"";
            // line 61
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
          </div>
        ";
        }
        // line 64
        echo "        ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 65
        echo ($context["column_right"] ?? null);
        echo "</div>
  </div>

</main>

";
        // line 70
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
        return array (  212 => 70,  204 => 65,  199 => 64,  191 => 61,  185 => 59,  179 => 56,  175 => 55,  171 => 53,  157 => 46,  153 => 45,  150 => 44,  146 => 42,  141 => 40,  136 => 39,  130 => 37,  128 => 36,  125 => 35,  123 => 34,  116 => 32,  106 => 29,  101 => 26,  97 => 25,  91 => 21,  85 => 20,  77 => 18,  69 => 16,  66 => 15,  62 => 14,  57 => 12,  52 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main special-page\">

  <div id=\"product-search\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"\">
        <h1 class=\"page-title\">{{ heading_title }}</h1>
        {% if products %}
          <div class=\"row\">
            <div class=\"col-md-4 col-xs-6\">
              <div class=\"form-group input-group input-group-sm\">
                <label class=\"input-group-addon input-group-text sort-by\" for=\"input-sort\">{{ text_sort }}</label>
                <select id=\"input-sort\" class=\"form-control form-select sort-by\" onchange=\"location = this.value;\">
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

</main>

{{ footer }}
", "coffee/template/product/special.twig", "");
    }
}
