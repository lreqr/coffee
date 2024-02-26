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
class __TwigTemplate_a38f89afaa388128fb05b66b4d8bdb6e6e4d178c9c547eaf5a5ecbb8e91b9ed5 extends \Twig\Template
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


    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 11
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 11);
            echo "
";
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
<hr>
<button id=\"button-filter\" class=\"btn btn-outline-secondary\">";
        // line 34
        echo ($context["button_filter"] ?? null);
        echo "</button>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 37
        echo ($context["heading_title"] ?? null);
        echo "</div>
    <div class=\"list-group\"> ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " <a class=\"list-group-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 38);
            echo "</a>
            <div class=\"list-group-item\">
                <div id=\"filter-group";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 40);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 41
                echo "                        <div class=\"checkbox\">
                            <label>";
                // line 42
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 42), ($context["filter_category"] ?? null))) {
                    // line 43
                    echo "                                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 43);
                    echo "\" checked=\"checked\" />
                                    ";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 44);
                    echo "
                                ";
                } else {
                    // line 46
                    echo "                                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 46);
                    echo "\" />
                                    ";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 47);
                    echo "
                                ";
                }
                // line 48
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
    <div class=\"panel-footer text-right\">
";
        // line 55
        echo "    </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function(element) {
            filter.push(this.value);
        });

        location = '";
        // line 65
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
    });
    //--></script>
";
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
        return array (  156 => 65,  144 => 55,  140 => 52,  132 => 50,  124 => 48,  119 => 47,  114 => 46,  109 => 44,  104 => 43,  102 => 42,  99 => 41,  93 => 40,  84 => 38,  80 => 37,  74 => 34,  70 => 32,  64 => 31,  59 => 11,  55 => 10,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"manufacturer-block\">


    <p class=\"filter-headline\">
        {% set parts = text_manufacturer|split('') %}
        {% set trimmedString = parts|slice(0, -1)|join %}
        {{ trimmedString }}</p>


    {% for filter_group in filter_groups %}
        {{ filter_group.name }}
{#            {% for child in category.children %}#}
{#                {% if child.category_id == child_id %}#}
{#                    <div class=\"form-check\">#}
{#                        <label for=\"flexCheckDefault\" class=\"form-check-link\">#}
{#                            <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"#}
{#                                   id=\"flexCheckDefault\" checked>#}
{#                            {{ child.name }}#}
{#                        </label>#}
{#                    </div>#}
{#                {% else %}#}
{#                    <div class=\"form-check\">#}
{#                        <label for=\"flexCheckDefault\" class=\"form-check-link\">#}
{#                            <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"#}
{#                                   id=\"flexCheckDefault\">#}
{#                            {{ child.name }}#}
{#                        </label>#}
{#                    </div>#}
{#                {% endif %}#}
{#            {% endfor %}#}
    {% endfor %}
</div>
<hr>
<button id=\"button-filter\" class=\"btn btn-outline-secondary\">{{ button_filter }}</button>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">{{ heading_title }}</div>
    <div class=\"list-group\"> {% for filter_group in filter_groups %} <a class=\"list-group-item\">{{ filter_group.name }}</a>
            <div class=\"list-group-item\">
                <div id=\"filter-group{{ filter_group.filter_group_id }}\">{% for filter in filter_group.filter %}
                        <div class=\"checkbox\">
                            <label>{% if filter.filter_id in filter_category %}
                                    <input type=\"checkbox\" name=\"filter[]\" value=\"{{ filter.filter_id }}\" checked=\"checked\" />
                                    {{ filter.name }}
                                {% else %}
                                    <input type=\"checkbox\" name=\"filter[]\" value=\"{{ filter.filter_id }}\" />
                                    {{ filter.name }}
                                {% endif %}</label>
                        </div>
                    {% endfor %}</div>
            </div>
        {% endfor %}</div>
    <div class=\"panel-footer text-right\">
{#        <button id=\"button-filter\" type=\"button\"  class=\"btn btn-primary\">{{ button_filter }}</button>#}
    </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function(element) {
            filter.push(this.value);
        });

        location = '{{ action }}&filter=' + filter.join(',');
    });
    //--></script>
", "coffee/template/extension/module/filter.twig", "");
    }
}
