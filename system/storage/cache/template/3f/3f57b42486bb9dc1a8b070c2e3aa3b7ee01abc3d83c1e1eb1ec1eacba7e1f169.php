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

/* coffee/template/extension/module/category.twig */
class __TwigTemplate_ae5f17ddbeda45afe63c529417f033474f8293e79ca457362b50000b0225b6d0 extends \Twig\Template
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
        echo "<div class=\"category-col\">
    <div class=\"category-block\">
        <p class=\"filter-headline\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</p>
        <div class=\"coffee-category-block\">
            <ul class=\"coffee-category\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 7) == ($context["category_id"] ?? null))) {
                // line 8
                echo "                        <li><a class=\"active\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
                echo "</a></li>

                    ";
            } else {
                // line 11
                echo "                        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                echo "</a></li>
                    ";
            }
            // line 13
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                ";
        // line 15
        echo "                ";
        // line 16
        echo "                ";
        // line 17
        echo "            </ul>
        </div>
    </div>
    <hr>
    <div class=\"manufacturer-block\">

";
        // line 29
        echo "
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31)) {
                // line 32
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 33
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 33) == ($context["child_id"] ?? null))) {
                        // line 34
                        echo "                        <div class=\"form-check\">
                            <label for=\"flexCheckDefault\" class=\"form-check-link\">
                                <input href=\"";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 36);
                        echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                       id=\"flexCheckDefault\" checked>
                                ";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 38);
                        echo "
                            </label>
                        </div>
                    ";
                    } else {
                        // line 42
                        echo "                        <div class=\"form-check\">
                            <label for=\"flexCheckDefault\" class=\"form-check-link\">
                                <input href=\"";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 44);
                        echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                       id=\"flexCheckDefault\">
                                ";
                        // line 46
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 46);
                        echo "
                            </label>
                        </div>
                    ";
                    }
                    // line 50
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>


    <hr>
    <div class=\"size-block\">

        <p class=\"filter-headline\">Size</p>

        <div class=\"form-check\">
            <label class=\"form-check-link\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"sizeInnerContent\">
                L</label>
        </div>
        <div class=\"form-check\">

            <label class=\"form-check-link\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"sizeInnerContent1\"
                       checked>
                Xl</label>
        </div>
        <div class=\"form-check\">
            <label class=\"form-check-link\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"sizeInnerContent2\">
                Xxl</label>
        </div>

    </div>
    <hr>
    <a href=\"#\" class=\"btn btn-outline-secondary\">Search</a>
</div>";
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 53,  150 => 52,  147 => 51,  141 => 50,  134 => 46,  129 => 44,  125 => 42,  118 => 38,  113 => 36,  109 => 34,  106 => 33,  101 => 32,  98 => 31,  94 => 30,  91 => 29,  83 => 17,  81 => 16,  79 => 15,  77 => 14,  71 => 13,  63 => 11,  54 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"category-col\">
    <div class=\"category-block\">
        <p class=\"filter-headline\">{{ heading_title }}</p>
        <div class=\"coffee-category-block\">
            <ul class=\"coffee-category\">
                {% for category in categories %}
                    {% if category.category_id == category_id %}
                        <li><a class=\"active\" href=\"{{ category.href }}\">{{ category.name }}</a></li>

                    {% else %}
                        <li><a href=\"{{ category.href }}\">{{ category.name }}</a></li>
                    {% endif %}
                {% endfor %}
                {# <li><a class=\"active\" href=\"#\">Coffee</a></li> #}
                {# <li><a href=\"#\">Tea</a></li> #}
                {# <li><a href=\"#\">Sweets</a></li> #}
            </ul>
        </div>
    </div>
    <hr>
    <div class=\"manufacturer-block\">

{#      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  #}
{#        <p class=\"filter-headline\">#}
{#            {% set parts = text_manufacturer|split('') %}#}
{#            {% set trimmedString = parts|slice(0, -1)|join %}#}
{#            {{ trimmedString }}</p>#}
{#      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  #}

        {% for category in categories %}
            {% if category.children %}
                {% for child in category.children %}
                    {% if child.category_id == child_id %}
                        <div class=\"form-check\">
                            <label for=\"flexCheckDefault\" class=\"form-check-link\">
                                <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                       id=\"flexCheckDefault\" checked>
                                {{ child.name }}
                            </label>
                        </div>
                    {% else %}
                        <div class=\"form-check\">
                            <label for=\"flexCheckDefault\" class=\"form-check-link\">
                                <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                       id=\"flexCheckDefault\">
                                {{ child.name }}
                            </label>
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
    </div>


    <hr>
    <div class=\"size-block\">

        <p class=\"filter-headline\">Size</p>

        <div class=\"form-check\">
            <label class=\"form-check-link\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"sizeInnerContent\">
                L</label>
        </div>
        <div class=\"form-check\">

            <label class=\"form-check-link\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"sizeInnerContent1\"
                       checked>
                Xl</label>
        </div>
        <div class=\"form-check\">
            <label class=\"form-check-link\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"sizeInnerContent2\">
                Xxl</label>
        </div>

    </div>
    <hr>
    <a href=\"#\" class=\"btn btn-outline-secondary\">Search</a>
</div>", "coffee/template/extension/module/category.twig", "");
    }
}
