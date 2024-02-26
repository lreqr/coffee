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
class __TwigTemplate_0bf57c490a520fbb021d32b03644e3c34f73a73603b16b98ef565515f55b6cbd extends \Twig\Template
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
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 30
        echo ($context["text_contact"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 32
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 35
        if (($context["error_name"] ?? null)) {
            // line 36
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 38
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 41
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"";
        // line 43
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                ";
        // line 44
        if (($context["error_email"] ?? null)) {
            // line 45
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                ";
        }
        // line 47
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 50
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 52
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
                ";
        // line 53
        if (($context["error_enquiry"] ?? null)) {
            // line 54
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
                ";
        }
        // line 56
        echo "              </div>
            </div>
            ";
        // line 58
        echo ($context["captcha"] ?? null);
        echo "
          </fieldset>
          <div class=\"buttons\">
            <div class=\"pull-right mt-3\">
              <input class=\"btn btn-warning\" type=\"submit\" value=\"";
        // line 62
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
        return array (  190 => 71,  178 => 62,  171 => 58,  167 => 56,  161 => 54,  159 => 53,  155 => 52,  150 => 50,  145 => 47,  139 => 45,  137 => 44,  133 => 43,  128 => 41,  123 => 38,  117 => 36,  115 => 35,  111 => 34,  106 => 32,  101 => 30,  96 => 28,  87 => 22,  83 => 21,  80 => 20,  70 => 18,  68 => 17,  63 => 15,  58 => 13,  50 => 8,  46 => 7,  37 => 1,);
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
