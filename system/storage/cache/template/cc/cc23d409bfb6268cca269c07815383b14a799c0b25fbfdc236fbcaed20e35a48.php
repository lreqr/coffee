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
class __TwigTemplate_dab2bcc1c8defec62e7273e45ca21e4c1ba183f7f7f14e1ade6d05c8388b84c1 extends \Twig\Template
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
";
        // line 22
        echo "
";
        // line 29
        echo "
";
        // line 54
        echo "

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
        return array (  95 => 54,  92 => 29,  89 => 22,  83 => 17,  81 => 16,  79 => 15,  77 => 14,  71 => 13,  63 => 11,  54 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
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
{#    <div class=\"manufacturer-block\">#}

{#      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  #}
{#        <p class=\"filter-headline\">#}
{#            {% set parts = text_manufacturer|split('') %}#}
{#            {% set trimmedString = parts|slice(0, -1)|join %}#}
{#            {{ trimmedString }}</p>#}
{#      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  #}

{#        {% for category in categories %}#}
{#            {% if category.children %}#}
{#                {% for child in category.children %}#}
{#                    {% if child.category_id == child_id %}#}
{#                        <div class=\"form-check\">#}
{#                            <label for=\"flexCheckDefault\" class=\"form-check-link\">#}
{#                                <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"#}
{#                                       id=\"flexCheckDefault\" checked>#}
{#                                {{ child.name }}#}
{#                            </label>#}
{#                        </div>#}
{#                    {% else %}#}
{#                        <div class=\"form-check\">#}
{#                            <label for=\"flexCheckDefault\" class=\"form-check-link\">#}
{#                                <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"#}
{#                                       id=\"flexCheckDefault\">#}
{#                                {{ child.name }}#}
{#                            </label>#}
{#                        </div>#}
{#                    {% endif %}#}
{#                {% endfor %}#}
{#            {% endif %}#}
{#        {% endfor %}#}
{#    </div>#}


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
