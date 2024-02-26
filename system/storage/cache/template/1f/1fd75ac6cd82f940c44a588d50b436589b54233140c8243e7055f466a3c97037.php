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

/* coffee/template/information/contact.twig */
class __TwigTemplate_112c17001917f55594777cf7c7417473a6c4a5393d08f5fc017912a1b7c54a96 extends \Twig\Template
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
<main class=\"main contact-page\">

  <div id=\"information-contact\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"container d-flex\">
        <div class=\"col-4\">
          <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <h3>";
        // line 9
        echo ($context["text_location"] ?? null);
        echo "</h3>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">
              <div class=\"row\">

                <div class=\"col-sm-6\"><strong>";
        // line 14
        echo ($context["store"] ?? null);
        echo "</strong><br />
                  <address>
                    ";
        // line 16
        echo ($context["address"] ?? null);
        echo "
                  </address>
                  ";
        // line 18
        if (($context["geocode"] ?? null)) {
            // line 19
            echo "                    <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
                  ";
        }
        // line 21
        echo "                </div>
                <div class=\"col-sm-6\"><strong>";
        // line 22
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
                  ";
        // line 23
        echo ($context["telephone"] ?? null);
        echo "<br />
                  <br />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-8\">
          <div class=\"contact-form-block\">
            <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
              <fieldset>
                <legend>";
        // line 34
        echo ($context["text_contact"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"name\" value=\"";
        // line 36
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                    ";
        // line 37
        if (($context["error_name"] ?? null)) {
            // line 38
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                    ";
        }
        // line 40
        echo "                </div>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 42
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                    ";
        // line 43
        if (($context["error_email"] ?? null)) {
            // line 44
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                    ";
        }
        // line 46
        echo "                </div>
                <div class=\"form-group required\">
                    <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 48
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
                    ";
        // line 49
        if (($context["error_enquiry"] ?? null)) {
            // line 50
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
                    ";
        }
        // line 52
        echo "                </div>
                ";
        // line 53
        echo ($context["captcha"] ?? null);
        echo "
              </fieldset>
              <div class=\"buttons\">
                <div class=\"pull-right mt-3\">
                  <input class=\"btn btn-warning\" type=\"submit\" value=\"";
        // line 57
        echo ($context["button_submit"] ?? null);
        echo "\" />
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
  </div>

</main>
";
        // line 68
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "coffee/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 68,  164 => 57,  157 => 53,  154 => 52,  148 => 50,  146 => 49,  142 => 48,  138 => 46,  132 => 44,  130 => 43,  126 => 42,  122 => 40,  116 => 38,  114 => 37,  110 => 36,  105 => 34,  100 => 32,  88 => 23,  84 => 22,  81 => 21,  71 => 19,  69 => 18,  64 => 16,  59 => 14,  51 => 9,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main contact-page\">

  <div id=\"information-contact\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"container d-flex\">
        <div class=\"col-4\">
          <h1>{{ heading_title }}</h1>
          <h3>{{ text_location }}</h3>
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">
              <div class=\"row\">

                <div class=\"col-sm-6\"><strong>{{ store }}</strong><br />
                  <address>
                    {{ address }}
                  </address>
                  {% if geocode %}
                    <a href=\"https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
                  {% endif %}
                </div>
                <div class=\"col-sm-6\"><strong>{{ text_telephone }}</strong><br>
                  {{ telephone }}<br />
                  <br />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-8\">
          <div class=\"contact-form-block\">
            <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
              <fieldset>
                <legend>{{ text_contact }}</legend>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"name\" value=\"{{ name }}\" id=\"input-name\" class=\"form-control\" />
                    {% if error_name %}
                      <div class=\"text-danger\">{{ error_name }}</div>
                    {% endif %}
                </div>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" class=\"form-control\" />
                    {% if error_email %}
                      <div class=\"text-danger\">{{ error_email }}</div>
                    {% endif %}
                </div>
                <div class=\"form-group required\">
                    <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">{{ enquiry }}</textarea>
                    {% if error_enquiry %}
                      <div class=\"text-danger\">{{ error_enquiry }}</div>
                    {% endif %}
                </div>
                {{ captcha }}
              </fieldset>
              <div class=\"buttons\">
                <div class=\"pull-right mt-3\">
                  <input class=\"btn btn-warning\" type=\"submit\" value=\"{{ button_submit }}\" />
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
  </div>

</main>
{{ footer }}
", "coffee/template/information/contact.twig", "");
    }
}
