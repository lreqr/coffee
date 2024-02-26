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
class __TwigTemplate_d1b9039b025dba209f70f77c933ed98c9b0757f1ceaf68311d743728dede5604 extends \Twig\Template
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
<!-- main -->
<main class=\"main\">

  <!-- hero-section -->
  ";
        // line 6
        echo ($context["content_top"] ?? null);
        echo "

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
  ";
        // line 34
        echo ($context["content_bottom"] ?? null);
        echo "

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
        // line 89
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 89,  76 => 34,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coffee/template/common/home.twig", "");
    }
}
