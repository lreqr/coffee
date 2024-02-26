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
class __TwigTemplate_1dbc84617c89c54634275c64b4321d1f2529dd5f218ae494908d1fc6ff267e7f extends \Twig\Template
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
                echo "                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                    echo "\"
                                                                      alt=\"";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                    echo "\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"product.html\">";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                    echo "</a></h3>
                                    <div class=\"product-bottom\">
                                        ";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "                                            <div class=\"product-price\">
                                                ";
                        // line 29
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29)) {
                            // line 30
                            echo "                                                    <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                            echo "</span>
                                                ";
                        } else {
                            // line 32
                            echo "                                                    <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32);
                            echo "</span>
                                                    <small>";
                            // line 33
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33);
                            echo "</small>
                                                ";
                        }
                        // line 35
                        echo "                                            </div>
                                        ";
                    }
                    // line 37
                    echo "                                        <div class=\"product-actions\">
                                            <a href=\"";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 38);
                    echo "\" data-toggle=\"tooltip\"
                                               title=\"";
                    // line 39
                    echo ($context["button_remove"] ?? null);
                    echo "\"><span class=\"icon-favorite\"></span></a>
                                            <a type=\"button\" onclick=\"cart.add('";
                    // line 40
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
                    echo "');\"
                                               data-toggle=\"tooltip\" title=\"";
                    // line 41
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
                // line 49
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </div>
                ";
        } else {
            // line 53
            echo "                <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            </div>
            ";
        }
        // line 56
        echo "            <div class=\"buttons clearfix\">
                <div class=\"pull-right\"><a href=\"";
        // line 57
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
            </div>
        </section>
    </main>
</div>
";
        // line 62
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
        return array (  187 => 62,  177 => 57,  174 => 56,  167 => 53,  163 => 51,  156 => 49,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  130 => 37,  126 => 35,  121 => 33,  116 => 32,  110 => 30,  108 => 29,  105 => 28,  103 => 27,  98 => 25,  92 => 22,  85 => 21,  83 => 20,  78 => 17,  74 => 16,  71 => 15,  69 => 14,  65 => 13,  61 => 12,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
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
