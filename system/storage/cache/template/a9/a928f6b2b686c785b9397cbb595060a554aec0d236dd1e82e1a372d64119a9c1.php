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
class __TwigTemplate_6f56d39de30e501a9262fdea6f6cf36f2ab7700d6c7a3fb29060d94e7e03f9b2 extends \Twig\Template
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

";
        // line 57
        echo "<script type=\"text/javascript\"><!--
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
        return array (  89 => 65,  79 => 57,  74 => 34,  70 => 32,  64 => 31,  59 => 11,  55 => 10,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
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

{#<div class=\"panel panel-default\">#}
{#    <div class=\"panel-heading\">{{ heading_title }}</div>#}
{#    <div class=\"list-group\"> {% for filter_group in filter_groups %} <a class=\"list-group-item\">{{ filter_group.name }}</a>#}
{#            <div class=\"list-group-item\">#}
{#                <div id=\"filter-group{{ filter_group.filter_group_id }}\">{% for filter in filter_group.filter %}#}
{#                        <div class=\"checkbox\">#}
{#                            <label>{% if filter.filter_id in filter_category %}#}
{#                                    <input type=\"checkbox\" name=\"filter[]\" value=\"{{ filter.filter_id }}\" checked=\"checked\" />#}
{#                                    {{ filter.name }}#}
{#                                {% else %}#}
{#                                    <input type=\"checkbox\" name=\"filter[]\" value=\"{{ filter.filter_id }}\" />#}
{#                                    {{ filter.name }}#}
{#                                {% endif %}</label>#}
{#                        </div>#}
{#                    {% endfor %}</div>#}
{#            </div>#}
{#        {% endfor %}</div>#}
{#    <div class=\"panel-footer text-right\">#}
{#        <button id=\"button-filter\" type=\"button\"  class=\"btn btn-primary\">{{ button_filter }}</button>#}
{#    </div>#}
{#</div>#}
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
