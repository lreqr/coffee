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
class __TwigTemplate_42132456cfae7bc7ad37d7baf0be74b6bdc3ccf6934c547c0785ba8a6b174f9b extends \Twig\Template
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
      <div id=\"content\" class=\"container contact-container\">
        <div class=\"col-lg-4 contact-block\">
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
        <div class=\"col-lg-8\">
          <div class=\"contact-form-block\">
            <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
              <fieldset>
                <div class=\"contact-form-block-title\">
                  <h1>";
        // line 35
        echo ($context["text_contact"] ?? null);
        echo "</h1>
                </div>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"name\" value=\"";
        // line 38
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\"/>
                    ";
        // line 39
        if (($context["error_name"] ?? null)) {
            // line 40
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                    ";
        }
        // line 42
        echo "                </div>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 44
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"/>
                    ";
        // line 45
        if (($context["error_email"] ?? null)) {
            // line 46
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                    ";
        }
        // line 48
        echo "                </div>
                <div class=\"form-group required\">
                  <label class=\"control-label mb-2\" for=\"input-enquiry\">";
        // line 50
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
                    <textarea name=\"enquiry\" rows=\"2\" id=\"input-enquiry\" class=\"form-control\" >";
        // line 51
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
                    ";
        // line 52
        if (($context["error_enquiry"] ?? null)) {
            // line 53
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
                    ";
        }
        // line 55
        echo "                </div>
                ";
        // line 56
        echo ($context["captcha"] ?? null);
        echo "
              </fieldset>
              <div class=\"buttons\">
                <div class=\"pull-right\">
                  <input class=\"btn btn-warning\" type=\"submit\" value=\"";
        // line 60
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
        // line 71
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
        return array (  188 => 71,  174 => 60,  167 => 56,  164 => 55,  158 => 53,  156 => 52,  152 => 51,  148 => 50,  144 => 48,  138 => 46,  136 => 45,  130 => 44,  126 => 42,  120 => 40,  118 => 39,  112 => 38,  106 => 35,  100 => 32,  88 => 23,  84 => 22,  81 => 21,  71 => 19,  69 => 18,  64 => 16,  59 => 14,  51 => 9,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main contact-page\">

  <div id=\"information-contact\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"container contact-container\">
        <div class=\"col-lg-4 contact-block\">
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
        <div class=\"col-lg-8\">
          <div class=\"contact-form-block\">
            <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
              <fieldset>
                <div class=\"contact-form-block-title\">
                  <h1>{{ text_contact }}</h1>
                </div>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"name\" value=\"{{ name }}\" id=\"input-name\" class=\"form-control\" placeholder=\"{{ entry_name }}\"/>
                    {% if error_name %}
                      <div class=\"text-danger\">{{ error_name }}</div>
                    {% endif %}
                </div>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" class=\"form-control\" placeholder=\"{{ entry_email }}\"/>
                    {% if error_email %}
                      <div class=\"text-danger\">{{ error_email }}</div>
                    {% endif %}
                </div>
                <div class=\"form-group required\">
                  <label class=\"control-label mb-2\" for=\"input-enquiry\">{{ entry_enquiry }}</label>
                    <textarea name=\"enquiry\" rows=\"2\" id=\"input-enquiry\" class=\"form-control\" >{{ enquiry }}</textarea>
                    {% if error_enquiry %}
                      <div class=\"text-danger\">{{ error_enquiry }}</div>
                    {% endif %}
                </div>
                {{ captcha }}
              </fieldset>
              <div class=\"buttons\">
                <div class=\"pull-right\">
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
