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
class __TwigTemplate_73fcd202c3f3fa1381f8673c508c3962c7a726d499c1ff4f9c9ae4dfe2c1c52b extends \Twig\Template
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
        echo "  <main class=\"main favorite-page\">
    <section class=\"favorite-product\">
        <div id=\"content\" class=\"";
        // line 11
        echo ($context["class"] ?? null);
        echo "\">
          <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          ";
        // line 13
        if (($context["products"] ?? null)) {
            // line 14
            echo "          <div class=\"row\">

                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "                  <div class=\"col-lg-4 col-md-6\">
                    <div class=\"product-card\">
                      <div class=\"product-card-img\">
                        ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "\"></a>
                      </div>
                      <div class=\"product-card-content\">
                        <h3><a href=\"product.html\">";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
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
                // line 40
                echo "                    </div>
                  </div>
                  <tr>
                    <td class=\"text-center\">";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                    echo "\" /></a>";
                }
                echo "</td>
                    <td class=\"text-left\"><a href=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                echo "</a></td>
                    <td class=\"text-left\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 45);
                echo "</td>
                    <td class=\"text-right\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 46);
                echo "</td>
                    <td class=\"text-right\">";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                        <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 48)) {
                        // line 49
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49);
                        echo "
                          ";
                    } else {
                        // line 50
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 50);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                        echo "</s> ";
                    }
                    echo " </div>
                      ";
                }
                // line 51
                echo "</td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 52);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                      <a href=\"";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 53);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
          ";
        } else {
            // line 58
            echo "            <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            </div>
          ";
        }
        // line 61
        echo "          <div class=\"buttons clearfix\">
            <div class=\"pull-right\"><a href=\"";
        // line 62
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
          ";
        // line 64
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 65
        echo ($context["column_right"] ?? null);
        echo "</div>
    </section>
  </main>
</div>
";
        // line 69
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
        return array (  219 => 69,  212 => 65,  208 => 64,  201 => 62,  198 => 61,  191 => 58,  187 => 56,  176 => 53,  170 => 52,  167 => 51,  157 => 50,  151 => 49,  148 => 48,  146 => 47,  142 => 46,  138 => 45,  132 => 44,  118 => 43,  113 => 40,  94 => 24,  83 => 21,  81 => 20,  76 => 17,  72 => 16,  68 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
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
