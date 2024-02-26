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
class __TwigTemplate_d28512cee9d8f43e2fc8370a3c9eada84c3cf65ad49c5b1836286d7c16febdc3 extends \Twig\Template
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
<main class=\"main favorite-page\">
  <section class=\"favorite-product\">
    <div class=\"container\">
      <h1>Favorite products</h1>
      <div class=\"row\">

        <div class=\"col-lg-4 col-md-6\">
          <div class=\"product-card\">
            <div class=\"product-card-img\">
              <a href=\"product.html\"><img src=\"img/product2.png\" alt=\"\"></a>
            </div>
            <div class=\"product-card-content\">
              <h3><a href=\"product.html\">Lavazza coffee</a></h3>
              <div class=\"product-bottom\">
                <div class=\"product-price\">
                  <span>\$19.99</span>
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
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<div id=\"account-wishlist\" class=\"container\">
  ";
        // line 35
        if (($context["success"] ?? null)) {
            // line 36
            echo "    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
      ";
            // line 37
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        // line 41
        echo "  <main class=\"main favorite-page\">
    <section class=\"favorite-product\">
        <div id=\"content\" class=\"";
        // line 43
        echo ($context["class"] ?? null);
        echo "\">
          <h1>";
        // line 44
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          ";
        // line 45
        echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
        echo "
          ";
        // line 46
        if (($context["products"] ?? null)) {
            // line 47
            echo "          <div class=\"row\">

                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 50
                echo "                  <div class=\"col-lg-4 col-md-6\">
                    <div class=\"product-card\">
                      <div class=\"product-card-img\">
                        ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                    echo "\"></a>
                      </div>
                      <div class=\"product-card-content\">
                        <h3><a href=\"product.html\">";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57);
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
                // line 73
                echo "                    </div>
                  </div>
                  <tr>
                    <td class=\"text-center\">";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 76)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 76);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 76);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                    echo "\" /></a>";
                }
                echo "</td>
                    <td class=\"text-left\"><a href=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77);
                echo "</a></td>
                    <td class=\"text-left\">";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 78);
                echo "</td>
                    <td class=\"text-right\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 79);
                echo "</td>
                    <td class=\"text-right\">";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                        <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81)) {
                        // line 82
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                        echo "
                          ";
                    } else {
                        // line 83
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 83);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 83);
                        echo "</s> ";
                    }
                    echo " </div>
                      ";
                }
                // line 84
                echo "</td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 85);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                      <a href=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 86);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
          ";
        } else {
            // line 91
            echo "            <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            </div>
          ";
        }
        // line 94
        echo "          <div class=\"buttons clearfix\">
            <div class=\"pull-right\"><a href=\"";
        // line 95
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
          ";
        // line 97
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 98
        echo ($context["column_right"] ?? null);
        echo "</div>
    </section>
  </main>
</div>
";
        // line 102
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
        return array (  255 => 102,  248 => 98,  244 => 97,  237 => 95,  234 => 94,  227 => 91,  223 => 89,  212 => 86,  206 => 85,  203 => 84,  193 => 83,  187 => 82,  184 => 81,  182 => 80,  178 => 79,  174 => 78,  168 => 77,  154 => 76,  149 => 73,  130 => 57,  119 => 54,  117 => 53,  112 => 50,  108 => 49,  104 => 47,  102 => 46,  98 => 45,  94 => 44,  90 => 43,  86 => 41,  79 => 37,  76 => 36,  74 => 35,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main favorite-page\">
  <section class=\"favorite-product\">
    <div class=\"container\">
      <h1>Favorite products</h1>
      <div class=\"row\">

        <div class=\"col-lg-4 col-md-6\">
          <div class=\"product-card\">
            <div class=\"product-card-img\">
              <a href=\"product.html\"><img src=\"img/product2.png\" alt=\"\"></a>
            </div>
            <div class=\"product-card-content\">
              <h3><a href=\"product.html\">Lavazza coffee</a></h3>
              <div class=\"product-bottom\">
                <div class=\"product-price\">
                  <span>\$19.99</span>
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
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<div id=\"account-wishlist\" class=\"container\">
  {% if success %}
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
      {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  {% endif %}
  <main class=\"main favorite-page\">
    <section class=\"favorite-product\">
        <div id=\"content\" class=\"{{ class }}\">
          <h1>{{ heading_title }}</h1>
          {{ dump(products) }}
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
