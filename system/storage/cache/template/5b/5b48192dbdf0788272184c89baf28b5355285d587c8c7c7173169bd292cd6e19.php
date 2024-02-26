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

/* coffee/template/common/cart.twig */
class __TwigTemplate_983345524bfa8e59c473366bc7723010d6f17b2edc4df818bd94a29c4452bd36 extends \Twig\Template
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
        echo "<!-- sidebar Иконок хедера -->
<div class=\"offcanvas offcanvas-end mini-cart\" tabindex=\"-1\" id=\"offcanvasWithBothOptionsCart\"
     aria-labelledby=\"offcanvasWithBothOptionsLabel\" data-bs-theme=\"dark\">
  <div class=\"offcanvas-header\">
    <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabelCart\">Cart</h5>
    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\"
            aria-label=\"Close\"></button>
  </div>
  <div class=\"offcanvas-body\">
    <div class=\"mini-cart-product-row\">
      <img src=\"img/product1_1.png\" alt=\"product1_1\">
      <div class=\"mini-cart-product-info\">
        <p class=\"product-name\"><a href=\"\">Lavazza Crema E Gusto</a></p>
        <p class=\"product-variation\">Xl</p>
        <p class=\"product-qty\"><input class=\"mini-cart-input\" type=\"number\" value=\"1\" min=\"1\" max=\"100\"> &times; \$19.99
        </p>
      </div>
      <a href=\"\" class=\"mini-cart-delete\"><span class=\"icon-trash\"></span></a>
      <a href=\"\" class=\"mini-cart-update\">⭮</a>
    </div>
    <div class=\"mini-cart-product-row\">
      <img src=\"img/product1_1.png\" alt=\"product1_1\">
      <div class=\"mini-cart-product-info\">
        <p class=\"product-name\"><a href=\"\">Lavazza Crema E Gusto</a></p>
        <p class=\"product-variation\">Xl</p>
        <p class=\"product-qty\"><input type=\"number\" value=\"1\" min=\"1\" max=\"100\"> &times; \$19.99
        </p>
      </div>
      <a href=\"\" class=\"mini-cart-delete\"><span class=\"icon-trash\"></span></a>
      <a href=\"\" class=\"mini-cart-update\">⭮</a>
    </div>
    <hr>
    <h5>Total price: \$40.00</h5>
    <hr>
    <div class=\"mini-cart-btn\">
      <a href=\"cart.html\" class=\"btn btn-warning\">Cart</a>
      <a href=\"cart.html\" class=\"btn btn-outline-secondary\">Checkout</a>
    </div>
  </div>
</div> <!--   sidebar хедера   -->

";
    }

    public function getTemplateName()
    {
        return "coffee/template/common/cart.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/cart.twig", "");
    }
}
