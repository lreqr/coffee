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
class __TwigTemplate_35acc6f4fe7eeb9cabfaeb376fb40517576fac459570ce75f5a3579f831b5200 extends \Twig\Template
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
        echo "  <div class=\"row\">
    <div id=\"content\" class=\"";
        // line 64
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 65
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 66
        if (($context["products"] ?? null)) {
            // line 67
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <tbody>
          ";
            // line 70
            echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
            echo "
          ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 72
                echo "            <tr>
              <td class=\"text-center\">";
                // line 73
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 73)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 73);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 73);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                    echo "\" /></a>";
                }
                echo "</td>
              <td class=\"text-left\"><a href=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                echo "</a></td>
              <td class=\"text-left\">";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 75);
                echo "</td>
              <td class=\"text-right\">";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 76);
                echo "</td>
              <td class=\"text-right\">";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                  <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78)) {
                        // line 79
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79);
                        echo "
                    ";
                    } else {
                        // line 80
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 80);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                        echo "</s> ";
                    }
                    echo " </div>
                ";
                }
                // line 81
                echo "</td>
              <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 82);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                <a href=\"";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 83);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 91
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 93
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 94
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 96
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 97
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 99
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
        return array (  240 => 99,  235 => 97,  231 => 96,  224 => 94,  221 => 93,  215 => 91,  208 => 86,  197 => 83,  191 => 82,  188 => 81,  178 => 80,  172 => 79,  169 => 78,  167 => 77,  163 => 76,  159 => 75,  153 => 74,  139 => 73,  136 => 72,  132 => 71,  128 => 70,  123 => 67,  121 => 66,  117 => 65,  111 => 64,  108 => 63,  101 => 59,  98 => 58,  96 => 57,  37 => 1,);
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
  <div class=\"row\">
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h2>{{ heading_title }}</h2>
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
</div>
{{ footer }}", "coffee/template/account/wishlist.twig", "");
    }
}
