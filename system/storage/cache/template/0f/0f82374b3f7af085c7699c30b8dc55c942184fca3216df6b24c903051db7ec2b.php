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

/* coffee/template/extension/module/featured.twig */
class __TwigTemplate_e738ffaf5a2a44eeb416c63f74d926eb95a4a5bae024b997b877b75a99f64d69 extends \Twig\Template
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
        echo "<!-- Products -->
<section class=\"catalog-section\">
    <div class=\"container\">
        <h2>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h2>
        <div class=\"row\">
            ";
        // line 6
        echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
        echo "
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "            <div class=\"col-lg-4 col-md-6\">
                <div class=\"product-card\">
                    <div class=\"product-card-img\">
                        <a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "\"></a>
                    </div>
                    <div class=\"product-card-content\">
                        <h3><a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "</a></h3>
                        <div class=\"product-bottom\">
                            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 16)) {
                // line 17
                echo "                            <div class=\"product-price\">
                                ";
                // line 18
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "                                    <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19);
                    echo "</span>
                                ";
                } else {
                    // line 21
                    echo "                                    <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 21);
                    echo "</span>
                                    <small>";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22);
                    echo "</small>
                                ";
                }
                // line 24
                echo "                            </div>
                            ";
            }
            // line 26
            echo "                            <div class=\"product-actions\">
                                <a href=\"#\" onclick=\"wishlist.add('";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 27);
            echo "');\"><span class=\"icon-favorite\"></span></a>
                                <a href=\"\" onclick=\"return cart.add('";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 28);
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
        // line 36
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  111 => 28,  107 => 27,  104 => 26,  100 => 24,  95 => 22,  90 => 21,  84 => 19,  82 => 18,  79 => 17,  77 => 16,  70 => 14,  60 => 11,  55 => 8,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Products -->
<section class=\"catalog-section\">
    <div class=\"container\">
        <h2>{{ heading_title }}</h2>
        <div class=\"row\">
            {{ dump(products) }}
            {% for product in products %}
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
    </div>
</section>", "coffee/template/extension/module/featured.twig", "");
    }
}
