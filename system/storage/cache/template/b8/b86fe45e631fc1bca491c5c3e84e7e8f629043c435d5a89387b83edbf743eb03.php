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
class __TwigTemplate_8ed6c17b54e3f4a96b39dd890de2d806ec6067f73017e6896ccffda557ad5337 extends \Twig\Template
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
        echo "    <main class=\"main favorite-page\">
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
            echo "                    <div class=\"row\">
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 16
                echo "                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"product-card\">
                                    <div class=\"product-card-img\">
                                        ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                                            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                    echo "\"><img class=\"product-card-img-img\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    echo "\"></a>
                                        ";
                } else {
                    // line 22
                    echo "                                            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                    echo "\"><img class=\"product-card-img-img\" src=\"catalog/view/theme/coffee/assets/img/no-image.png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                    echo "\"></a>
                                        ";
                }
                // line 24
                echo "                                    </div>
                                    <div class=\"product-card-content\">
                                        <h3><a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                echo "\">";
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
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\"><span class=\"icon-favorite\"></span></a>
                                                <a type=\"button\" onclick=\"cart.add('";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"add-to-cart\"><span class=\"icon-cart\"></span></a>
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
            // line 47
            echo "                    </div>
                ";
        } else {
            // line 49
            echo "                    <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                ";
        }
        // line 51
        echo "            </div>
        </section>
    </main>
</div>
";
        // line 55
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  178 => 55,  172 => 51,  166 => 49,  162 => 47,  147 => 40,  141 => 39,  138 => 38,  134 => 36,  129 => 34,  124 => 33,  118 => 31,  116 => 30,  113 => 29,  111 => 28,  104 => 26,  100 => 24,  92 => 22,  82 => 20,  80 => 19,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
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
                                            <a href=\"{{ product.href }}\"><img class=\"product-card-img-img\" src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\"></a>
                                        {% else %}
                                            <a href=\"{{ product.href }}\"><img class=\"product-card-img-img\" src=\"catalog/view/theme/coffee/assets/img/no-image.png\" alt=\"{{ product.name }}\"></a>
                                        {% endif %}
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
                                                <a href=\"{{ product.remove }}\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\"><span class=\"icon-favorite\"></span></a>
                                                <a type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" data-toggle=\"tooltip\" title=\"{{ button_cart }}\" class=\"add-to-cart\"><span class=\"icon-cart\"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                {% else %}
                    <p>{{ text_empty }}</p>
                {% endif %}
            </div>
        </section>
    </main>
</div>
{{ footer }}
", "coffee/template/account/wishlist.twig", "");
    }
}
