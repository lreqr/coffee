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

/* coffee/template/extension/module/filter.twig */
class __TwigTemplate_3efafd80a24fcf24aa3f937cfe01d95a6c41b6f09f5f41b2d662fb71717612e9 extends \Twig\Template
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
        echo "<div class=\"manufacturer-block\">

    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    <p class=\"filter-headline\">
        ";
        // line 5
        $context["parts"] = twig_split_filter($this->env, ($context["text_manufacturer"] ?? null), "");
        // line 6
        echo "        ";
        $context["trimmedString"] = twig_join_filter(twig_slice($this->env, ($context["parts"] ?? null), 0,  -1));
        // line 7
        echo "        ";
        echo ($context["trimmedString"] ?? null);
        echo "</p>
    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11)) {
                // line 12
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 13
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 13) == ($context["child_id"] ?? null))) {
                        // line 14
                        echo "                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 16);
                        echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\" checked>
                            ";
                        // line 18
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                        echo "
                        </label>
                    </div>
                ";
                    } else {
                        // line 22
                        echo "                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"";
                        // line 24
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 24);
                        echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\">
                            ";
                        // line 26
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 26);
                        echo "
                        </label>
                    </div>
                ";
                    }
                    // line 30
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "        ";
            }
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
<hr>
<a href=\"#\" class=\"btn btn-outline-secondary\">Search</a>";
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  111 => 32,  108 => 31,  102 => 30,  95 => 26,  90 => 24,  86 => 22,  79 => 18,  74 => 16,  70 => 14,  67 => 13,  62 => 12,  59 => 11,  55 => 10,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"manufacturer-block\">

    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    <p class=\"filter-headline\">
        {% set parts = text_manufacturer|split('') %}
        {% set trimmedString = parts|slice(0, -1)|join %}
        {{ trimmedString }}</p>
    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

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
<a href=\"#\" class=\"btn btn-outline-secondary\">Search</a>", "coffee/template/extension/module/filter.twig", "");
    }
}
