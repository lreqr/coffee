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
class __TwigTemplate_dd00014abf7d074d8a9fafe846aa18951f555701f2ac441205b2b7f3f9fbc371 extends \Twig\Template
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
                        <a href=\"product.html\"><img src=\"catalog/view/theme/coffee/assets/img/product1.png\" alt=\"\"></a>
                    </div>
                    <div class=\"product-card-content\">
                        <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                        <div class=\"product-bottom\">
                            <div class=\"product-price\">
                                <span>\$19.99</span>
                                <small>\$29.99</small>
                            </div>
                            <div class=\"product-actions\">
                                <a href=\"#\"><span class=\"icon-favorite\"></span></a>
                                <a href=\"\" data-bs-toggle=\"offcanvas\"
                                   data-bs-target=\"#offcanvasWithBothOptionsCart\"
                                   aria-controls=\"offcanvasWithBothOptions\" class=\"add-to-cart\"><span
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
        // line 31
        echo "        </div>
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
        return array (  80 => 31,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/featured.twig", "");
    }
}
