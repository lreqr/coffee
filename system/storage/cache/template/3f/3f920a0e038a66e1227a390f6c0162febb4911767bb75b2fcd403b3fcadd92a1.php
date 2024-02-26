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
class __TwigTemplate_b40be8c10a233aff8e7b2c8b0062a65543096480edbca51e38581e4bbcc8d32c extends \Twig\Template
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
        echo "<div class=\"col-lg-3 col-md-4 category-col\">

    <div class=\"category-block\">
        <p class=\"filter-headline\">Categories</p>
        <div class=\"coffee-category-block\">
            <ul class=\"coffee-category\">
                <li><a class=\"active\" href=\"#\">Coffee</a></li>
                <li><a href=\"#\">Tea</a></li>
                <li><a href=\"#\">Sweets</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class=\"manufacturer-block\">
        <p class=\"filter-headline\">Manufacturer</p>
        <div class=\"form-check\">
            <label for=\"flexCheckDefault\" class=\"form-check-link\">
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

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/extension/module/category.twig", "");
    }
}
