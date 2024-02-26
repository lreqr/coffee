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
class __TwigTemplate_2f6348512abd1bc545f421eecb3fc7747c7a1f3fae2a5460a55ac01a8331501e extends \Twig\Template
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
      <div id=\"content\" class=\"container\">
        <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <h3>";
        // line 8
        echo ($context["text_location"] ?? null);
        echo "</h3>
        <div class=\"panel panel-default\">
          <div class=\"panel-body\">
            <div class=\"row\">

              <div class=\"col-sm-3\"><strong>";
        // line 13
        echo ($context["store"] ?? null);
        echo "</strong><br />
                <address>
                  ";
        // line 15
        echo ($context["address"] ?? null);
        echo "
                </address>
                ";
        // line 17
        if (($context["geocode"] ?? null)) {
            // line 18
            echo "                  <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
                ";
        }
        // line 20
        echo "              </div>
              <div class=\"col-sm-3\"><strong>";
        // line 21
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
                ";
        // line 22
        echo ($context["telephone"] ?? null);
        echo "<br />
                <br />
              </div>
            </div>
          </div>
        </div>
        
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 31
        echo ($context["text_contact"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 33
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 35
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 36
        if (($context["error_name"] ?? null)) {
            // line 37
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 39
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 42
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"";
        // line 44
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                ";
        // line 45
        if (($context["error_email"] ?? null)) {
            // line 46
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                ";
        }
        // line 48
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 51
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 53
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
                ";
        // line 54
        if (($context["error_enquiry"] ?? null)) {
            // line 55
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
                ";
        }
        // line 57
        echo "              </div>
            </div>
            ";
        // line 59
        echo ($context["captcha"] ?? null);
        echo "
          </fieldset>
          <div class=\"buttons\">
            <div class=\"pull-right mt-3\">
              <input class=\"btn btn-warning\" type=\"submit\" value=\"";
        // line 63
        echo ($context["button_submit"] ?? null);
        echo "\" />
            </div>
          </div>
        </form>
        </div>
      </div>
  </div>

</main>
";
        // line 72
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
        return array (  191 => 72,  179 => 63,  172 => 59,  168 => 57,  162 => 55,  160 => 54,  156 => 53,  151 => 51,  146 => 48,  140 => 46,  138 => 45,  134 => 44,  129 => 42,  124 => 39,  118 => 37,  116 => 36,  112 => 35,  107 => 33,  102 => 31,  97 => 29,  87 => 22,  83 => 21,  80 => 20,  70 => 18,  68 => 17,  63 => 15,  58 => 13,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main class=\"main contact-page\">

  <div id=\"information-contact\" class=\"container\">
    <div class=\"row\">
      <div id=\"content\" class=\"container\">
        <h1>{{ heading_title }}</h1>
        <h3>{{ text_location }}</h3>
        <div class=\"panel panel-default\">
          <div class=\"panel-body\">
            <div class=\"row\">

              <div class=\"col-sm-3\"><strong>{{ store }}</strong><br />
                <address>
                  {{ address }}
                </address>
                {% if geocode %}
                  <a href=\"https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
                {% endif %}
              </div>
              <div class=\"col-sm-3\"><strong>{{ text_telephone }}</strong><br>
                {{ telephone }}<br />
                <br />
              </div>
            </div>
          </div>
        </div>
        
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <legend>{{ text_contact }}</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_name }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"{{ name }}\" id=\"input-name\" class=\"form-control\" />
                {% if error_name %}
                  <div class=\"text-danger\">{{ error_name }}</div>
                {% endif %}
              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" class=\"form-control\" />
                {% if error_email %}
                  <div class=\"text-danger\">{{ error_email }}</div>
                {% endif %}
              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">{{ entry_enquiry }}</label>
              <div class=\"col-sm-10\">
                <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">{{ enquiry }}</textarea>
                {% if error_enquiry %}
                  <div class=\"text-danger\">{{ error_enquiry }}</div>
                {% endif %}
              </div>
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

</main>
{{ footer }}
", "coffee/template/information/contact.twig", "");
    }
}
