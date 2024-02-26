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

/* coffee/template/product/product.twig */
class __TwigTemplate_964b39e3937afee85c0c9bdd191c6c72367a174659b3a182a0073c581378d61f extends \Twig\Template
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
<main class=\"main product-page\">
    <div class=\"container\">
        ";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "
        <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"product-img\">
                    ";
        // line 9
        if (($context["thumb"] ?? null)) {
            // line 10
            echo "                    <img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\">
                        ";
        } else {
            // line 12
            echo "                        <img src=\"catalog/view/theme/coffee/assets/img/no-image.png\">
                    ";
        }
        // line 14
        echo "                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"product-page-actions\">
                    <div class=\"product-page-price\">
                        ";
        // line 19
        if (($context["price"] ?? null)) {
            // line 20
            echo "                            ";
            if ( !($context["special"] ?? null)) {
                // line 21
                echo "                                <span>";
                echo ($context["price"] ?? null);
                echo "</span>
                                ";
                // line 22
                $context["basePrice"] = ($context["price"] ?? null);
                // line 23
                echo "                            ";
            } else {
                // line 24
                echo "                                ";
                $context["basePrice"] = ($context["special"] ?? null);
                // line 25
                echo "                                <span>";
                echo ($context["special"] ?? null);
                echo "</span>
                                <small>";
                // line 26
                echo ($context["price"] ?? null);
                echo "</small>
                            ";
            }
            // line 28
            echo "                        ";
        }
        // line 29
        echo "

                    </div>
                    ";
        // line 32
        if (($context["options"] ?? null)) {
            // line 33
            echo "                    <div class=\"product-variations\">
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 35
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 35) == "radio")) {
                    // line 36
                    echo "                            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 36)) {
                        echo " required ";
                    }
                    echo "\">
                                <label class=\"control-label\">";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 37);
                    echo "</label>
                                ";
                    // line 38
                    $context["radioInput"] = 0;
                    // line 39
                    echo "                                <div class=\"d-flex\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 39);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 39));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 40
                        echo "                                        ";
                        $context["radioInput"] = (($context["radioInput"] ?? null) + 1);
                        // line 41
                        echo "                                        <div class=\"radio\">
                                            <input id=\"radioInput";
                        // line 42
                        echo ($context["radioInput"] ?? null);
                        echo "\" type=\"radio\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 42);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 42);
                        echo "\" />
                                            ";
                        // line 43
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 43)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 43);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 43);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 43)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 43);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 43);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 44
                        echo "                                            <label class=\"product-variation-label\" for=\"radioInput";
                        echo ($context["radioInput"] ?? null);
                        echo "\">
                                                ";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 45);
                        echo "
                                                 </label>
                                            <span class=\"d-none\" data-baseprice=\"";
                        // line 47
                        echo ($context["basePrice"] ?? null);
                        echo "\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 47)) {
                            // line 48
                            echo "                                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 48);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 48);
                            echo ")
                                                ";
                        }
                        // line 49
                        echo "</span>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo " </div>
                            </div>
                        ";
                }
                // line 54
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
                    </div>
                    ";
        }
        // line 58
        echo "                    <button id=\"button-cart\" onclick=\"return cart.add('";
        echo ($context["product_id"] ?? null);
        echo "');\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-warning add2cart-btn\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-description\">
                    <h2>";
        // line 65
        echo ($context["tab_description"] ?? null);
        echo "</h2>
                    <div class=\"product-description-content\">
                        <ul>
                            ";
        // line 68
        echo ($context["description"] ?? null);
        echo "
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"catalog-section\">
            ";
        // line 75
        echo ($context["content_bottom"] ?? null);
        echo "
        </section>
    </div>


</main>
";
        // line 81
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 81,  249 => 75,  239 => 68,  233 => 65,  218 => 58,  213 => 55,  207 => 54,  202 => 51,  194 => 49,  187 => 48,  183 => 47,  178 => 45,  173 => 44,  157 => 43,  149 => 42,  146 => 41,  143 => 40,  136 => 39,  134 => 38,  130 => 37,  123 => 36,  120 => 35,  116 => 34,  113 => 33,  111 => 32,  106 => 29,  103 => 28,  98 => 26,  93 => 25,  90 => 24,  87 => 23,  85 => 22,  80 => 21,  77 => 20,  75 => 19,  68 => 14,  64 => 12,  56 => 10,  54 => 9,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main product-page\">
    <div class=\"container\">
        {{ content_top }}
        <h1>{{ heading_title }}</h1>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"product-img\">
                    {% if thumb %}
                    <img src=\"{{ thumb }}\" alt=\"{{ heading_title }}\">
                        {% else %}
                        <img src=\"catalog/view/theme/coffee/assets/img/no-image.png\">
                    {% endif %}
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"product-page-actions\">
                    <div class=\"product-page-price\">
                        {% if price %}
                            {% if not special %}
                                <span>{{ price }}</span>
                                {% set basePrice =  price  %}
                            {% else %}
                                {% set basePrice =  special  %}
                                <span>{{ special }}</span>
                                <small>{{ price }}</small>
                            {% endif %}
                        {% endif %}


                    </div>
                    {% if options %}
                    <div class=\"product-variations\">
                        {% for option in options %}
                        {% if option.type == 'radio' %}
                            <div class=\"form-group{% if option.required %} required {% endif %}\">
                                <label class=\"control-label\">{{ option.name }}</label>
                                {% set radioInput = 0 %}
                                <div class=\"d-flex\" id=\"input-option{{ option.product_option_id }}\"> {% for option_value in option.product_option_value %}
                                        {% set radioInput = radioInput + 1 %}
                                        <div class=\"radio\">
                                            <input id=\"radioInput{{ radioInput }}\" type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" />
                                            {% if option_value.image %} <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\" /> {% endif %}
                                            <label class=\"product-variation-label\" for=\"radioInput{{ radioInput }}\">
                                                {{ option_value.name }}
                                                 </label>
                                            <span class=\"d-none\" data-baseprice=\"{{ basePrice }}\">{% if option_value.price %}
                                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                                {% endif %}</span>
                                        </div>
                                    {% endfor %} </div>
                            </div>
                        {% endif %}
                        {% endfor %}

                    </div>
                    {% endif %}
                    <button id=\"button-cart\" onclick=\"return cart.add('{{ product_id }}');\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-warning add2cart-btn\">{{ button_cart }}</button>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-description\">
                    <h2>{{ tab_description }}</h2>
                    <div class=\"product-description-content\">
                        <ul>
                            {{ description }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"catalog-section\">
            {{ content_bottom }}
        </section>
    </div>


</main>
{{ footer }}", "coffee/template/product/product.twig", "");
    }
}
