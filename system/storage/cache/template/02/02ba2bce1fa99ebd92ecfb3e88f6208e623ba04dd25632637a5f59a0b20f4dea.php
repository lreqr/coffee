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
class __TwigTemplate_cbcd56c15a0a85127d09c751fb31d19a1c06ce9fd414c4da63ac1aa9b5ea4717 extends \Twig\Template
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
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                echo "<div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">";
                // line 8
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 8), ($context["filter_category"] ?? null))) {
                    // line 9
                    echo "                            <input class=\"form-check-input\" type=\"checkbox\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 9);
                    echo "\" id=\"flexCheckDefault\" checked=\"checked\">
                            ";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 10);
                    echo "
                            ";
                } else {
                    // line 12
                    echo "                            <input class=\"form-check-input\" type=\"checkbox\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 12);
                    echo "\" id=\"flexCheckDefault\">
                                ";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 13);
                    echo "
                            ";
                }
                // line 15
                echo "                        </label>
                    </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "



</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "<hr>
<button id=\"button-filter\" class=\"btn btn-outline-secondary\">";
        // line 24
        echo ($context["button_filter"] ?? null);
        echo "</button>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</div>
    <div class=\"list-group\"> ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " <a class=\"list-group-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 28);
            echo "</a>
            <div class=\"list-group-item\">
                <div id=\"filter-group";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 30);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 31
                echo "                        <div class=\"checkbox\">
                            <label>";
                // line 32
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 32), ($context["filter_category"] ?? null))) {
                    // line 33
                    echo "                                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 33);
                    echo "\" checked=\"checked\" />
                                    ";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 34);
                    echo "
                                ";
                } else {
                    // line 36
                    echo "                                    <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 36);
                    echo "\" />
                                    ";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 37);
                    echo "
                                ";
                }
                // line 38
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>
    <div class=\"panel-footer text-right\">
        <button id=\"button-filter\" type=\"button\"  class=\"btn btn-primary\">";
        // line 44
        echo ($context["button_filter"] ?? null);
        echo "</button>
    </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#button-filter').on('click', function() {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function(element) {
            filter.push(this.value);
        });

        location = '";
        // line 55
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
        return array (  186 => 55,  172 => 44,  168 => 42,  160 => 40,  152 => 38,  147 => 37,  142 => 36,  137 => 34,  132 => 33,  130 => 32,  127 => 31,  121 => 30,  112 => 28,  108 => 27,  102 => 24,  99 => 23,  88 => 17,  81 => 15,  76 => 13,  71 => 12,  66 => 10,  61 => 9,  59 => 8,  53 => 7,  49 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for filter_group in filter_groups %}
<div class=\"manufacturer-block\">


    <p class=\"filter-headline\">{{ filter_group.name }}</p>
    {% for filter in filter_group.filter %}<div class=\"form-check\">
                        <label for=\"flexCheckDefault\" class=\"form-check-link\">{% if filter.filter_id in filter_category %}
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"{{ filter.filter_id }}\" id=\"flexCheckDefault\" checked=\"checked\">
                            {{ filter.name }}
                            {% else %}
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"{{ filter.filter_id }}\" id=\"flexCheckDefault\">
                                {{ filter.name }}
                            {% endif %}
                        </label>
                    </div>{% endfor %}




</div>
{% endfor %}
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
        <button id=\"button-filter\" type=\"button\"  class=\"btn btn-primary\">{{ button_filter }}</button>
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
