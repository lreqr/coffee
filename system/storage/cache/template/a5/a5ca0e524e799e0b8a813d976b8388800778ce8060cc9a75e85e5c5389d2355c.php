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

/* coffee/template/account/wishlist.twig */
class __TwigTemplate_c1aaee9b43f48a1ec601c762b03c3f5ff2ed7c3f1915862cd0efd7301217c7e9 extends \Twig\Template
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
<div id=\"account-wishlist\" class=\"container\">
  ";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            echo "    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
      ";
            // line 5
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        // line 9
        echo "  ";
        echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
        echo "
  <main class=\"main favorite-page\">
    <section class=\"favorite-product\">
        <div id=\"content\" class=\"";
        // line 12
        echo ($context["class"] ?? null);
        echo "\">
          <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          ";
        // line 14
        if (($context["products"] ?? null)) {
            // line 15
            echo "          <div class=\"row\">

                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "                  <div class=\"col-lg-4 col-md-6\">
                    <div class=\"product-card\">
                      <div class=\"product-card-img\">
                        ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                    echo "\"></a>
                      </div>
                      <div class=\"product-card-content\">
                        <h3><a href=\"product.html\">";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                    echo "</a></h3>
                        <div class=\"product-bottom\">
                          <div class=\"product-price\">
                            <span>\$19.99</span>
                            <small>\$29.99</small>
                          </div>
                          <div class=\"product-actions\">
                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                      class=\"icon-cart\"></span></a>
                          </div>
                        </div>
                      </div>
                      ";
                }
                // line 41
                echo "                    </div>
                  </div>
                  <tr>
                    <td class=\"text-center\">";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 44)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 44);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    echo "\" /></a>";
                }
                echo "</td>
                    <td class=\"text-left\"><a href=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 45);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
                echo "</a></td>
                    <td class=\"text-left\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 46);
                echo "</td>
                    <td class=\"text-right\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 47);
                echo "</td>
                    <td class=\"text-right\">";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                        <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 49)) {
                        // line 50
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                        echo "
                          ";
                    } else {
                        // line 51
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                        echo "</s> ";
                    }
                    echo " </div>
                      ";
                }
                // line 52
                echo "</td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 53);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                      <a href=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 54);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
          ";
        } else {
            // line 59
            echo "            <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            </div>
          ";
        }
        // line 62
        echo "          <div class=\"buttons clearfix\">
            <div class=\"pull-right\"><a href=\"";
        // line 63
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
          ";
        // line 65
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 66
        echo ($context["column_right"] ?? null);
        echo "</div>
    </section>
  </main>
</div>
";
        // line 70
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 70,  215 => 66,  211 => 65,  204 => 63,  201 => 62,  194 => 59,  190 => 57,  179 => 54,  173 => 53,  170 => 52,  160 => 51,  154 => 50,  151 => 49,  149 => 48,  145 => 47,  141 => 46,  135 => 45,  121 => 44,  116 => 41,  97 => 25,  86 => 22,  84 => 21,  79 => 18,  75 => 17,  71 => 15,  69 => 14,  65 => 13,  61 => 12,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-wishlist\" class=\"container\">
  {% if success %}
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
      {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  {% endif %}
  {{ dump(products) }}
  <main class=\"main favorite-page\">
    <section class=\"favorite-product\">
        <div id=\"content\" class=\"{{ class }}\">
          <h1>{{ heading_title }}</h1>
          {% if products %}
          <div class=\"row\">

                {% for product in products %}
                  <div class=\"col-lg-4 col-md-6\">
                    <div class=\"product-card\">
                      <div class=\"product-card-img\">
                        {% if product.thumb %}
                        <a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\"></a>
                      </div>
                      <div class=\"product-card-content\">
                        <h3><a href=\"product.html\">{{ product.name }}</a></h3>
                        <div class=\"product-bottom\">
                          <div class=\"product-price\">
                            <span>\$19.99</span>
                            <small>\$29.99</small>
                          </div>
                          <div class=\"product-actions\">
                            <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                            <a href=\"\" data-bs-toggle=\"offcanvas\"
                               data-bs-target=\"#offcanvasWithBothOptionsCart\"
                               aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
                                      class=\"icon-cart\"></span></a>
                          </div>
                        </div>
                      </div>
                      {% endif %}
                    </div>
                  </div>
                  <tr>
                    <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" /></a>{% endif %}</td>
                    <td class=\"text-left\"><a href=\"{{ product.href }}\">{{ product.name }}</a></td>
                    <td class=\"text-left\">{{ product.model }}</td>
                    <td class=\"text-right\">{{ product.stock }}</td>
                    <td class=\"text-right\">{% if product.price %}
                        <div class=\"price\"> {% if not product.special %}
                            {{ product.price }}
                          {% else %} <b>{{ product.special }}</b> <s>{{ product.price }}</s> {% endif %} </div>
                      {% endif %}</td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" data-toggle=\"tooltip\" title=\"{{ button_cart }}\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                      <a href=\"{{ product.remove }}\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
                  </tr>
                {% endfor %}

          {% else %}
            <p>{{ text_empty }}</p>
            </div>
          {% endif %}
          <div class=\"buttons clearfix\">
            <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
          </div>
          {{ content_bottom }}</div>
        {{ column_right }}</div>
    </section>
  </main>
</div>
{{ footer }}", "coffee/template/account/wishlist.twig", "");
    }
}
