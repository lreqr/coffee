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
class __TwigTemplate_afe0442f6587d9b591c744da121c8c1b6b12c05e405b52d211e059252e0dd2ae extends \Twig\Template
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
        return array (  83 => 17,  81 => 16,  79 => 15,  77 => 14,  71 => 13,  63 => 11,  54 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
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
</div>", "coffee/template/extension/module/category.twig", "");
    }
}
