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
class __TwigTemplate_110cb44b18cf51c6a01c66c584f6e92e1efad25f11bf0719bf7a0e076e2eb6a3 extends \Twig\Template
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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 23) == ($context["category_id"] ?? null))) {
                // line 24
                echo "        <p class=\"filter-headline\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 24);
                echo "</p>
        ";
            } else {
                // line 26
                echo "            <p class=\"filter-headline\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 26);
                echo "</p>
        ";
            }
            // line 28
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 30)) {
                // line 31
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 32
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 32) == ($context["child_id"] ?? null))) {
                        // line 33
                        echo "                        <div class=\"form-check\">
                            <label for=\"flexCheckDefault\" class=\"form-check-link\">
                                <input href=\"";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 35);
                        echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                       id=\"flexCheckDefault\" checked>
                                ";
                        // line 37
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 37);
                        echo "
                            </label>
                        </div>
                    ";
                    } else {
                        // line 41
                        echo "                        <div class=\"form-check\">
                            <label for=\"flexCheckDefault\" class=\"form-check-link\">
                                <input href=\"";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 43);
                        echo "\" class=\"form-check-input\" type=\"checkbox\" value=\"\"
                                       id=\"flexCheckDefault\">
                                ";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 45);
                        echo "
                            </label>
                        </div>
                    ";
                    }
                    // line 49
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "            ";
            }
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return array (  175 => 52,  169 => 51,  166 => 50,  160 => 49,  153 => 45,  148 => 43,  144 => 41,  137 => 37,  132 => 35,  128 => 33,  125 => 32,  120 => 31,  117 => 30,  112 => 29,  106 => 28,  100 => 26,  94 => 24,  91 => 23,  87 => 22,  80 => 17,  78 => 16,  76 => 15,  74 => 14,  68 => 13,  60 => 11,  51 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/category.twig", "");
    }
}
