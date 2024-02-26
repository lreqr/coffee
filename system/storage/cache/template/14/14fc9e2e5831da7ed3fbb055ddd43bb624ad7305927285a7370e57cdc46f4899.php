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
class __TwigTemplate_6308b9ef670f18117e6618285bd5e08e743321c1cd348c35ab994e3122bc7683 extends \Twig\Template
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
    <div class=\"manufacturer-block\">
";
        // line 23
        echo "        <p class=\"filter-headline\">
            ";
        // line 24
        $context["parts"] = twig_split_filter($this->env, ($context["text_manufacturer"] ?? null), " ");
        // line 25
        echo "            ";
        $context["trimmedString"] = twig_join_filter(twig_slice($this->env, ($context["parts"] ?? null), 0,  -1), " ");
        // line 26
        echo "            ";
        echo ($context["trimmedString"] ?? null);
        echo "</p>
";
        // line 28
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 29)) {
                // line 30
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 31
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 31) == ($context["child_id"] ?? null))) {
                        // line 32
                        echo "                        <div class=\"form-check\">
                            <label for=\"flexCheckDefault\" class=\"form-check-link\">
                                <input href=\"";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 34);
                        echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                       id=\"flexCheckDefault\" checked>
                                ";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 36);
                        echo "
                            </label>
                        </div>
                    ";
                    } else {
                        // line 40
                        echo "                        <div class=\"form-check\">
                            <label for=\"flexCheckDefault\" class=\"form-check-link\">
                                <input href=\"";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 42);
                        echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                       id=\"flexCheckDefault\">
                                ";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 44);
                        echo "
                            </label>
                        </div>
                    ";
                    }
                    // line 48
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "            ";
            }
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>


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
        return array (  166 => 51,  160 => 50,  157 => 49,  151 => 48,  144 => 44,  139 => 42,  135 => 40,  128 => 36,  123 => 34,  119 => 32,  116 => 31,  111 => 30,  108 => 29,  103 => 28,  98 => 26,  95 => 25,  93 => 24,  90 => 23,  83 => 17,  81 => 16,  79 => 15,  77 => 14,  71 => 13,  63 => 11,  54 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/category.twig", "");
    }
}
