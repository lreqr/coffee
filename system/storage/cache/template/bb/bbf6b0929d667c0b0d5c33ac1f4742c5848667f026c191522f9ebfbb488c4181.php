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
class __TwigTemplate_4cf7e2736d7cf6aa238f8eb0b2dea6278714243a3424d4641a18a022add1e1fa extends \Twig\Template
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


    <p class=\"filter-headline\">";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 6);
            echo "</p>






                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 15);
            echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\" checked>
                            ";
            // line 17
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 17);
            echo "
                        </label>
                    </div>

                    <div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">
                            <input href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "href", [], "any", false, false, false, 23);
            echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                   id=\"flexCheckDefault\">
                            ";
            // line 25
            echo twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 25);
            echo "
                        </label>
                    </div>



</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "<hr>
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
        return array (  112 => 65,  102 => 57,  97 => 34,  94 => 33,  80 => 25,  75 => 23,  66 => 17,  61 => 15,  49 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for filter_group in filter_groups %}
<div class=\"manufacturer-block\">


    <p class=\"filter-headline\">{{ filter_group.name }}</p>






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
