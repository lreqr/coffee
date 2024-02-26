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

/* coffee/template/product/category.twig */
class __TwigTemplate_1d4437330ef3996b4db1a61ac000d7411eafd2540a5c718345604915a71964c5 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

<main class=\"main cart-page\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <h2>Checkout</h2>
                <!--            блок заполнения имени фамилии    -->
                <div class=\"contact-info-block\">
                    <img src=\"img/user1.svg\" alt=\"\">
                    <div class=\"user-info\">
                        <p class=\"name-info\">Антонов Владислав</p>
                        <p class=\"phone-info\">+38000000000</p>
                    </div>
                    <div class=\"edit-block\"><a data-bs-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                            <span class=\"icon-pencil\"></span>
                            <p>Edit</p>
                        </a>
                    </div>

                </div>
                <!--            блок что вылазит при изменении имени фамалии    -->
                <div class=\"collapse contact-info-edit\" id=\"collapseExample\">
                    <div class=\"card card-body\">
                        <form action=\"\">
                            <div class=\"row mb-3\">
                                <div class=\"col\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"First name\" aria-label=\"First name\">
                                </div>
                                <div class=\"col\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Last name\" aria-label=\"Last name\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Mobile phone\" aria-label=\"First name\">
                                </div>
                                <div class=\"col\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\" aria-label=\"Last name\">
                                </div>
                            </div>
                            <button class=\"btn btn-warning mt-3\">Save</button>
                        </form>
                    </div>
                </div>
                <h1>Order</h1>
                <!--            блок товара    -->
                <div class=\"cart-product\">
                    <img src=\"img/product1_1.png\" alt=\"product\">
                    <div class=\"cart-product-info\">
                        <p class=\"product-cart-name\">Lavazza Crema E Gusto</p>
                        <p class=\"product-cart-variation\">Xl</p>
                        <div class=\"product-cart-wrapper\">
                            <p class=\"product-qty\">
                                <input type=\"number\" value=\"1\" min=\"1\" max=\"100\">
                            </p>
                            <p class=\"cart-product-price\">\$19.99</p>
                        </div>
                    </div>
                    <a href=\"\" class=\"cart-delete\"><span class=\"icon-trash\"></span></a>
                    <a href=\"\" class=\"update-cart\">⭮</a>
                </div>
                <div class=\"cart-product\">
                    <img src=\"img/product2_1.png\" alt=\"product\">
                    <div class=\"cart-product-info\">
                        <p class=\"product-cart-name\">Lavazza Crema E Gusto</p>
                        <p class=\"product-cart-variation\">Xl</p>
                        <div class=\"product-cart-wrapper\">
                            <p class=\"product-qty\">
                                <input type=\"number\" value=\"1\" min=\"1\" max=\"100\">
                            </p>
                            <p class=\"cart-product-price\">\$19.99</p>
                        </div>
                    </div>
                    <a href=\"\" class=\"mini-cart-delete mini-cart-delete-cart\"><span class=\"icon-trash\"></span></a>
                    <a href=\"\" class=\"mini-cart-update mini-cart-update-cart\">⭮</a>
                </div>
            </div>
            <!--        секция справа TOTAL    -->
            <div class=\"col-lg-4\">

                <div class=\"price-block\">
                    <div class=\"price-block-total\">
                        <h2>Total</h2>
                        <div class=\"price-product-block\">
                            <p class=\"product-qty\">Price:</p>
                            <p class=\"product-qty-price\">\$40.00</p>
                        </div>
                        <div class=\"delivery-product-block\">
                            <p class=\"delivery-product\">Delivery:</p>
                            <p class=\"delivery-product-price\">\$10.00</p>
                        </div>
                        <div class=\"total-price-block\">
                            <p class=\"total-product\">Total price:</p>
                            <p class=\"total-product-price\">\$50.00</p>
                        </div>
                        <a href=\"#\" class=\"btn btn-warning add2cart-btn\">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

";
        // line 105
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 105,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/product/category.twig", "");
    }
}
