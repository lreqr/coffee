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
class __TwigTemplate_38b89225d92c7f85468f1352df798df32979000bc7658ff8305513179fcb3854 extends \Twig\Template
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
        <p class=\"filter-headline\">Categories</p>
        <div class=\"coffee-category-block\">
            <ul class=\"coffee-category\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 7) == ($context["category_id"] ?? null))) {
                // line 8
                echo "                ";
            }
            // line 9
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 11) == ($context["category_id"] ?? null))) {
                // line 12
                echo "                        <li><a class=\"active\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                echo "</a></li>
                    ";
            } else {
                // line 13
                echo " <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                echo "</a></li>
                    ";
            }
            // line 15
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
        </div>
    </div>
    <hr>
    <div class=\"manufacturer-block\">
        <p class=\"filter-headline\">Manufacturer</p>
        <div class=\"form-check\">
            ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 26)) {
            // line 27
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 28
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 28) == ($context["child_id"] ?? null))) {
                    // line 29
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 29);
                    echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 29);
                    echo "</a>
                ";
                } else {
                    // line 31
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 31);
                    echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 31);
                    echo "</a>
                ";
                }
                // line 33
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            ";
        }
        // line 35
        echo "            <label for=\"flexCheckDefault\" class=\"form-check-link\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                Lavazza</label>

        </div>
        <div class=\"form-check\">
            <label class=\"form-check-link\"><input class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                                  id=\"flexCheckChecked\" checked>
                Trevi
            </label>
        </div>

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
        return array (  134 => 35,  131 => 34,  125 => 33,  117 => 31,  109 => 29,  106 => 28,  101 => 27,  99 => 26,  90 => 19,  84 => 15,  76 => 13,  68 => 12,  65 => 11,  60 => 10,  54 => 9,  51 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/category.twig", "");
    }
}
