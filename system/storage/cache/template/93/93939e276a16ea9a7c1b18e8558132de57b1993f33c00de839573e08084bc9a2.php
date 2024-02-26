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
class __TwigTemplate_2a16de2206d7b423d55d0ea56bec240d30b13b55e2abbd813223086f88ce600b extends \Twig\Template
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
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            ";
            // line 5
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 9
        echo "    ";
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
            echo "                <div class=\"row\">
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "                        <div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"product-card\">
                                    <div class=\"product-card-img\">
                                        ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
                    echo "\"
                                                                          alt=\"";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                    echo "\"></a>
                                    </div>
                                    <div class=\"product-card-content\">
                                        <h3><a href=\"product.html\">";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                    echo "</a></h3>
                                        <div class=\"product-bottom\">
                                            ";
                    // line 28
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "                                                <div class=\"product-price\">
                                                    ";
                        // line 30
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 30)) {
                            // line 31
                            echo "                                                        <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31);
                            echo "</span>
                                                    ";
                        } else {
                            // line 33
                            echo "                                                        <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 33);
                            echo "</span>
                                                        <small>";
                            // line 34
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34);
                            echo "</small>
                                                    ";
                        }
                        // line 36
                        echo "                                                </div>
                                            ";
                    }
                    // line 38
                    echo "                                            <div class=\"product-actions\">
                                                <a href=\"";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 39);
                    echo "\" data-toggle=\"tooltip\"
                                                   title=\"";
                    // line 40
                    echo ($context["button_remove"] ?? null);
                    echo "\"><span class=\"icon-favorite\"></span></a>
                                                <a type=\"button\" onclick=\"cart.add('";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 41);
                    echo "');\"
                                                   data-toggle=\"tooltip\" title=\"";
                    // line 42
                    echo ($context["button_cart"] ?? null);
                    echo "\"
                                                   class=\"add-to-cart\"><span
                                                            class=\"icon-cart\"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
                }
                // line 50
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </div>
                ";
        } else {
            // line 55
            echo "                <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            </div>
            ";
        }
        // line 58
        echo "            <div class=\"buttons clearfix\">
                <div class=\"pull-right\"><a href=\"";
        // line 59
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
            </div>
        </section>
    </main>
</div>
";
        // line 64
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
        return array (  189 => 64,  179 => 59,  176 => 58,  169 => 55,  165 => 53,  157 => 50,  146 => 42,  142 => 41,  138 => 40,  134 => 39,  131 => 38,  127 => 36,  122 => 34,  117 => 33,  111 => 31,  109 => 30,  106 => 29,  104 => 28,  99 => 26,  93 => 23,  86 => 22,  84 => 21,  78 => 17,  74 => 16,  71 => 15,  69 => 14,  65 => 13,  61 => 12,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
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
                        <div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"product-card\">
                                    <div class=\"product-card-img\">
                                        {% if product.thumb %}
                                        <a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\"
                                                                          alt=\"{{ product.name }}\"></a>
                                    </div>
                                    <div class=\"product-card-content\">
                                        <h3><a href=\"product.html\">{{ product.name }}</a></h3>
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
                                                <a href=\"{{ product.remove }}\" data-toggle=\"tooltip\"
                                                   title=\"{{ button_remove }}\"><span class=\"icon-favorite\"></span></a>
                                                <a type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\"
                                                   data-toggle=\"tooltip\" title=\"{{ button_cart }}\"
                                                   class=\"add-to-cart\"><span
                                                            class=\"icon-cart\"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
                {% else %}
                <p>{{ text_empty }}</p>
            </div>
            {% endif %}
            <div class=\"buttons clearfix\">
                <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
            </div>
        </section>
    </main>
</div>
{{ footer }}", "coffee/template/account/wishlist.twig", "");
    }
}
