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
class __TwigTemplate_b8bb26b382859700a449645107c1d72b2215bd8a0fb68e07e16b4210ff4954c1 extends \Twig\Template
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
  <!-- banner-section -->
  ";
        // line 7
        echo ($context["content_top"] ?? null);
        echo "

  <!-- Products -->
  ";
        // line 10
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
        // line 65
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
        return array (  110 => 65,  52 => 10,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<!-- main -->
<main class=\"main\">

  <!-- hero-section -->
  <!-- banner-section -->
  {{ content_top }}

  <!-- Products -->
  {{ content_bottom }}

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
{{ footer }}", "coffee/template/common/home.twig", "");
    }
}
