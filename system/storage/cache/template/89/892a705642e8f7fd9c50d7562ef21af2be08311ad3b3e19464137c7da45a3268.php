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

/* coffee/template/common/home.twig */
class __TwigTemplate_0eb125839186d9159bf54db80a9040179b06132f6af36d632b83b5d6b60feb0e extends \Twig\Template
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
        echo "  <!-- main -->
  <main class=\"main\">

    <!-- hero-section -->
    <section class=\"hero-section\">
      <div class=\"container\">
        <div class=\"hero-section-content\">
          <h1>Roasted coffee best choice</h1>
          <p>The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier.
            given
            an opportunity to sample.</p>
          <a class=\"btn btn-warning\" href=\"menu.html\">Buy now</a>
          <a class=\"btn btn-outline-secondary\" href=\"#targetNews\">Read more</a>
        </div>
      </div>
    </section>

    <!-- banner-section -->
    <section class=\"banner-section\">
      <div class=\"container\">
        <div class=\"banner-section-inner\">
          <div class=\"banner-section-img\">
            <img src=\"catalog/view/theme/coffee/assets/img/banner.jpg\" alt=\"banner\">
          </div>
          <div class=\"banner-section-content\">
            <h2>Roasted Coffee</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
              suffered
              alteration in some form, by injected humour, or randomised words which don't look even
              slightly
              believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
              isn't
              anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
              the Internet
              tend to repeat predefined chunks as necessary, making this the first true generator on
              the
              Internet.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Products -->
    <section class=\"catalog-section\">
      <div class=\"container\">
        <h2>Catalog</h2>
        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6\">
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
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"product-card\">
              <div class=\"product-card-img\">
                <a href=\"product.html\"><img src=\"catalog/view/theme/coffee/assets/img/product2.png\" alt=\"\"></a>
              </div>
              <div class=\"product-card-content\">
                <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                <div class=\"product-bottom\">
                  <div class=\"product-price\">
                    <span>\$19.99</span>
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
          <div class=\"col-lg-4 col-md-6\">
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
          <div class=\"col-lg-4 col-md-6\">
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
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"product-card\">
              <div class=\"product-card-img\">
                <a href=\"product.html\"><img src=\"catalog/view/theme/coffee/assets/img/product2.png\" alt=\"\"></a>
              </div>
              <div class=\"product-card-content\">
                <h3><a href=\"product.html\">Lavazza coffee</a></h3>
                <div class=\"product-bottom\">
                  <div class=\"product-price\">
                    <span>\$19.99</span>
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
          <div class=\"col-lg-4 col-md-6\">
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
                              class=\"icon-cart\" id=\"targetNews\"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- news-section -->
    <section class=\"news-section\" >
      <div class=\"container\">
        <h2>News</h2>
        <div class=\"row\">
          <!-- Element -->
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"news-card\">
              <div class=\"news-card-img\">
                <img src=\"catalog/view/theme/coffee/assets/img/news1.png\" alt=\"\">
              </div>
              <div class=\"news-card-content\">
                <h3>Lavazza coffee</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words
                  which don't look even slightly believable.</p>
              </div>
            </div>
          </div>
          <!-- Element -->
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"news-card\">
              <div class=\"news-card-img\">
                <img src=\"catalog/view/theme/coffee/assets/img/news2.png\" alt=\"\">
              </div>
              <div class=\"news-card-content\">
                <h3>Lavazza coffee</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words
                  which don't look even slightly believable. words which don't look even slightly
                  believable. or randomised words which don't look even slightly believable. words
                  which don't look even slightly believable.</p>
              </div>
            </div>
          </div>
          <!-- Element -->
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"news-card\">
              <div class=\"news-card-img\">
                <img src=\"catalog/view/theme/coffee/assets/img/news3.png\" alt=\"\">
              </div>
              <div class=\"news-card-content\">
                <h3>Lavazza coffee</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words
                  which don't look even slightly believable.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
";
    }

    public function getTemplateName()
    {
        return "coffee/template/common/home.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/home.twig", "");
    }
}
