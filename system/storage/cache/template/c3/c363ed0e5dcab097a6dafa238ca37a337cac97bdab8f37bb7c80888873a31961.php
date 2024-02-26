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

/* coffee/template/extension/module/featured.twig */
class __TwigTemplate_11298fe0d06964b316b180745a4bdcec7fb2e75fe713e1ea9c906fe67452f30f extends \Twig\Template
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
        echo "<!-- Products -->
<section class=\"catalog-section\">
    <div class=\"container\">
        <h2>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h2>
        <div class=\"row\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "            <div class=\"col-lg-4 col-md-6\">
                <div class=\"product-card\">
                    <div class=\"product-card-img\">
                        <a href=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo "\"></a>
                    </div>
                    <div class=\"product-card-content\">
                        <h3><a href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
            echo "</a></h3>
                        <div class=\"product-bottom\">
                            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 15)) {
                // line 16
                echo "                            <div class=\"product-price\">
                                ";
                // line 17
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "                                    <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 18);
                    echo "</span>
                                ";
                } else {
                    // line 20
                    echo "                                    <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 20);
                    echo "</span>
                                    <small>";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21);
                    echo "</small>
                                ";
                }
                // line 23
                echo "                            </div>
                            ";
            }
            // line 25
            echo "                            <div class=\"product-actions\">
                                <a href=\"#\" onclick=\"wishlist.add('";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 26);
            echo "');\"><span class=\"icon-favorite\"></span></a>
                                <a href=\"\" onclick=\"return cart.add('";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 27);
            echo "');\" class=\"add-to-cart\"><span
                                            class=\"icon-cart\"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div id=\"targetNews\"></div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "coffee/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  107 => 27,  103 => 26,  100 => 25,  96 => 23,  91 => 21,  86 => 20,  80 => 18,  78 => 17,  75 => 16,  73 => 15,  66 => 13,  56 => 10,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/featured.twig", "");
    }
}
