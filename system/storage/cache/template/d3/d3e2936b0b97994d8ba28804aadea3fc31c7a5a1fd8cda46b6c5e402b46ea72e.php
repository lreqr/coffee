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

/* coffee/template/product/category.twig */
class __TwigTemplate_bf0e0c1c6e7661c8cb1f58e818b720b04d37588ab459d03540ab1e1511715944 extends \Twig\Template
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
<main class=\"main menu-page\">

    <section class=\"filter-product-section\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-12\">
                    <h1 class=\"page-title\">
                        ";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "
                    </h1>
                </div>
            </div>

            <div class=\"row\">

                <div class=\"col-lg-9 col-md-8\">
                    <div class=\"row\">

                        <div class=\"col-lg-4 col-md-8 col-sm-12\">
                            <div class=\"input-group mb-3\">
                                <label class=\"input-group-text sort-by\" for=\"input-sort\">";
        // line 23
        echo ($context["text_sort"] ?? null);
        echo "</label>
                                <select class=\"form-select sort-by\" id=\"input-sort\" onchange=\"location = this.value;\">
                                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 26
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 26) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                // line 27
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 27);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 27);
                echo "</option>
                                        ";
            } else {
                // line 29
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 29);
                echo "</option>
                                        ";
            }
            // line 31
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class=\"row\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 40
            echo "                        <div class=\"col-lg-4 col-sm-6 mb-3\">
                            <div class=\"product-card\">
                                <div class=\"product-card-img\">
                                    <a href=\"";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
            echo "\"></a>
                                </div>
                                <div class=\"product-card-content\">
                                    <h3><a href=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
            echo "</a></h3>
                                    <div class=\"product-bottom\">
                                        ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 48)) {
                // line 49
                echo "                                            <div class=\"product-price\">
                                                ";
                // line 50
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "                                                    <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                    echo "</span>
                                                ";
                } else {
                    // line 53
                    echo "                                                    <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 53);
                    echo "</span>
                                                    <small>";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54);
                    echo "</small>
                                                ";
                }
                // line 56
                echo "                                            </div>
                                        ";
            }
            // line 58
            echo "                                        <div class=\"product-actions\">
                                            <a href=\"#\" onclick=\"wishlist.add('";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
            echo "');\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" onclick=\"return cart.add('";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
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
        // line 68
        echo "                    </div>
                    ";
        // line 69
        echo ($context["pagination"] ?? null);
        echo "

                </div>

            </div>

        </div>

    </section>

</main>

";
        // line 81
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 81,  185 => 69,  182 => 68,  168 => 60,  164 => 59,  161 => 58,  157 => 56,  152 => 54,  147 => 53,  141 => 51,  139 => 50,  136 => 49,  134 => 48,  127 => 46,  117 => 43,  112 => 40,  108 => 39,  99 => 32,  93 => 31,  85 => 29,  77 => 27,  74 => 26,  70 => 25,  65 => 23,  50 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main menu-page\">

    <section class=\"filter-product-section\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-12\">
                    <h1 class=\"page-title\">
                        {{ heading_title }}
                    </h1>
                </div>
            </div>

            <div class=\"row\">

                <div class=\"col-lg-9 col-md-8\">
                    <div class=\"row\">

                        <div class=\"col-lg-4 col-md-8 col-sm-12\">
                            <div class=\"input-group mb-3\">
                                <label class=\"input-group-text sort-by\" for=\"input-sort\">{{ text_sort }}</label>
                                <select class=\"form-select sort-by\" id=\"input-sort\" onchange=\"location = this.value;\">
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
                    <div class=\"row\">
                        {% for product in products %}
                        <div class=\"col-lg-4 col-sm-6 mb-3\">
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
                                            <a href=\"#\" onclick=\"wishlist.add('{{ product.product_id }}');\"><span class=\"icon-favorite\"></span></a>
                                            <a href=\"\" onclick=\"return cart.add('{{ product.product_id }}');\" class=\"add-to-cart\"><span
                                                        class=\"icon-cart\"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    {{ pagination }}

                </div>

            </div>

        </div>

    </section>

</main>

{{ footer }}", "coffee/template/product/category.twig", "");
    }
}
