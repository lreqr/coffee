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
class __TwigTemplate_90c035f7fe8551913aea695a0bf1aec75e102d9ef21bbc640e20d884fb2be518 extends \Twig\Template
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
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 12));
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
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
<hr>
<a href=\"#\" class=\"btn btn-outline-secondary\">Search</a>

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
        <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 54
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
        return array (  200 => 65,  186 => 54,  182 => 52,  174 => 50,  166 => 48,  161 => 47,  156 => 46,  151 => 44,  146 => 43,  144 => 42,  141 => 41,  135 => 40,  126 => 38,  122 => 37,  115 => 32,  109 => 31,  103 => 30,  96 => 26,  91 => 24,  87 => 22,  80 => 18,  75 => 16,  71 => 14,  68 => 13,  64 => 12,  59 => 11,  55 => 10,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
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
    {% endfor %}
</div>
<hr>
<a href=\"#\" class=\"btn btn-outline-secondary\">Search</a>

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
        <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">{{ button_filter }}</button>
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
