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
class __TwigTemplate_6ea5a82f53d101c4123fac95d474b5f92902f26a7466351bc81c82daa5839c92 extends \Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 3
            echo "<div class=\"manufacturer-block\">


    <p class=\"filter-headline\">
        ";
            // line 7
            $context["parts"] = twig_split_filter($this->env, ($context["text_manufacturer"] ?? null), "");
            // line 8
            echo "        ";
            $context["trimmedString"] = twig_join_filter(twig_slice($this->env, ($context["parts"] ?? null), 0,  -1));
            // line 9
            echo "        ";
            echo ($context["trimmedString"] ?? null);
            echo "</p>



        ";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 13);
            echo "


                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 18);
            echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\" checked>
                            ";
            // line 20
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 20);
            echo "
                        </label>
                    </div>

                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 26);
            echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\">
                            ";
            // line 28
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 28);
            echo "
                        </label>
                    </div>



</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "<hr>
<button id=\"button-filter\" class=\"btn btn-outline-secondary\">";
        // line 37
        echo ($context["button_filter"] ?? null);
        echo "</button>

";
        // line 60
        echo "<script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function(element) {
            filter.push(this.value);
        });

        location = '";
        // line 68
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
        return array (  122 => 68,  112 => 60,  107 => 37,  104 => 36,  90 => 28,  85 => 26,  76 => 20,  71 => 18,  63 => 13,  55 => 9,  52 => 8,  50 => 7,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for filter_group in filter_groups %}
<div class=\"manufacturer-block\">


    <p class=\"filter-headline\">
        {% set parts = text_manufacturer|split('') %}
        {% set trimmedString = parts|slice(0, -1)|join %}
        {{ trimmedString }}</p>



        {{ filter_group.name }}


                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\" checked>
                            {{ child.name }}
                        </label>
                    </div>

                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"{{ child.href }}\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\">
                            {{ child.name }}
                        </label>
                    </div>



</div>
{% endfor %}
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
