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
class __TwigTemplate_73cce1ecd42e25e65ccd47e710b031faf100e21f444e54c76fa1225a034f10a3 extends \Twig\Template
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
              <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
            </div>
            <div class=\"product-card-content\">
              <h3><a href=\"product.html\">Lavazza coffee</a></h3>
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
          </div>
        </div>
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
        // line 57
        if (($context["success"] ?? null)) {
            // line 58
            echo "    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
      ";
            // line 59
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
  ";
        }
        // line 63
        echo "  <main class=\"main favorite-page\">
    <section class=\"favorite-product\">
      <div class=\"row\">
        <div id=\"content\" class=\"";
        // line 66
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
          <h1>";
        // line 67
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          ";
        // line 68
        if (($context["products"] ?? null)) {
            // line 69
            echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <tbody>
                ";
            // line 72
            echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
            echo "
                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 74
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                    echo "\" /></a>";
                }
                echo "</td>
                    <td class=\"text-left\"><a href=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                echo "</a></td>
                    <td class=\"text-left\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 77);
                echo "</td>
                    <td class=\"text-right\">";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 78);
                echo "</td>
                    <td class=\"text-right\">";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "                        <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 80)) {
                        // line 81
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81);
                        echo "
                          ";
                    } else {
                        // line 82
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 82);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                        echo "</s> ";
                    }
                    echo " </div>
                      ";
                }
                // line 83
                echo "</td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 84);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                      <a href=\"";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 85);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                </tbody>

              </table>
            </div>
          ";
        } else {
            // line 93
            echo "            <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
          ";
        }
        // line 95
        echo "          <div class=\"buttons clearfix\">
            <div class=\"pull-right\"><a href=\"";
        // line 96
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
          ";
        // line 98
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 99
        echo ($context["column_right"] ?? null);
        echo "</div>
    </section>
  </main>
</div>
";
        // line 103
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
        return array (  244 => 103,  237 => 99,  233 => 98,  226 => 96,  223 => 95,  217 => 93,  210 => 88,  199 => 85,  193 => 84,  190 => 83,  180 => 82,  174 => 81,  171 => 80,  169 => 79,  165 => 78,  161 => 77,  155 => 76,  141 => 75,  138 => 74,  134 => 73,  130 => 72,  125 => 69,  123 => 68,  119 => 67,  113 => 66,  108 => 63,  101 => 59,  98 => 58,  96 => 57,  37 => 1,);
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
              <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
            </div>
            <div class=\"product-card-content\">
              <h3><a href=\"product.html\">Lavazza coffee</a></h3>
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
          </div>
        </div>
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
      <div class=\"row\">
        <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
          <h1>{{ heading_title }}</h1>
          {% if products %}
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <tbody>
                {{ dump(products) }}
                {% for product in products %}
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
                </tbody>

              </table>
            </div>
          {% else %}
            <p>{{ text_empty }}</p>
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
