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
class __TwigTemplate_d22813db6d381da788bf88db45c51b2407192093dee5f2e17c89fef826b77307 extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"";
        // line 4
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h3>";
        // line 6
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">

            <div class=\"col-sm-3\"><strong>";
        // line 11
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 13
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 15
        if (($context["geocode"] ?? null)) {
            // line 16
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 18
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 19
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 20
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 22
        if (($context["fax"] ?? null)) {
            // line 23
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 24
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 26
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 28
        if (($context["open"] ?? null)) {
            // line 29
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 30
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 33
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 34
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 35
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 37
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 41
        if (($context["locations"] ?? null)) {
            // line 42
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 45
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 47);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 47);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 49);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 53);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 53);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 53);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 55
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 55);
                echo "</strong><br/>
                  <address>
                  ";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 57);
                echo "
                  </address>
                  ";
                // line 59
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 59)) {
                    // line 60
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 60));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 62
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 63
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 64);
                echo "<br/>
                  <br/>
                  ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 68);
                    echo "
                  ";
                }
                // line 70
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 72
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 74);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 77
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 79);
                    echo "
                  ";
                }
                // line 81
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "      </div>
      ";
        }
        // line 89
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 91
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 93
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 95
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 96
        if (($context["error_name"] ?? null)) {
            // line 97
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 99
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 102
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 104
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 105
        if (($context["error_email"] ?? null)) {
            // line 106
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 108
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 111
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 113
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 114
        if (($context["error_enquiry"] ?? null)) {
            // line 115
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 117
        echo "            </div>
          </div>
          ";
        // line 119
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 123
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 127
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 128
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 130
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
        return array (  375 => 130,  370 => 128,  366 => 127,  359 => 123,  352 => 119,  348 => 117,  342 => 115,  340 => 114,  336 => 113,  331 => 111,  326 => 108,  320 => 106,  318 => 105,  314 => 104,  309 => 102,  304 => 99,  298 => 97,  296 => 96,  292 => 95,  287 => 93,  282 => 91,  276 => 89,  272 => 87,  261 => 81,  256 => 79,  251 => 78,  248 => 77,  242 => 74,  237 => 73,  235 => 72,  231 => 70,  226 => 68,  221 => 67,  219 => 66,  214 => 64,  210 => 63,  207 => 62,  197 => 60,  195 => 59,  190 => 57,  184 => 55,  174 => 53,  172 => 52,  166 => 49,  159 => 47,  155 => 45,  151 => 44,  145 => 42,  143 => 41,  137 => 37,  132 => 35,  127 => 34,  124 => 33,  118 => 30,  113 => 29,  111 => 28,  107 => 26,  102 => 24,  97 => 23,  95 => 22,  90 => 20,  86 => 19,  83 => 18,  73 => 16,  71 => 15,  66 => 13,  61 => 11,  53 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
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
              <a href=\"https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
              {% endif %}
            </div>
            <div class=\"col-sm-3\"><strong>{{ text_telephone }}</strong><br>
              {{ telephone }}<br />
              <br />
              {% if fax %}
              <strong>{{ text_fax }}</strong><br>
              {{ fax }}
              {% endif %}
            </div>
            <div class=\"col-sm-3\">
              {% if open %}
              <strong>{{ text_open }}</strong><br />
              {{ open }}<br />
              <br />
              {% endif %}
              {% if comment %}
              <strong>{{ text_comment }}</strong><br />
              {{ comment }}
              {% endif %}
            </div>
          </div>
        </div>
      </div>
      {% if locations %}
      <h3>{{ text_store }}</h3>
      <div class=\"panel-group\" id=\"accordion\">
        {% for location in locations %}
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location{{ location.location_id }}\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">{{ location.name }} <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location{{ location.location_id }}\">
            <div class=\"panel-body\">
              <div class=\"row\">
                {% if location.image %}
                <div class=\"col-sm-3\"><img src=\"{{ location.image }}\" alt=\"{{ location.name }}\" title=\"{{ location.name }}\" class=\"img-thumbnail\" /></div>
                {% endif %}
                <div class=\"col-sm-3\"><strong>{{ location.name }}</strong><br/>
                  <address>
                  {{ location.address }}
                  </address>
                  {% if location.geocode %}
                  <a href=\"https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
                  {% endif %}
                </div>
                <div class=\"col-sm-3\"> <strong>{{ text_telephone }}</strong><br/>
                  {{ location.telephone }}<br/>
                  <br/>
                  {% if location.fax %}
                  <strong>{{ text_fax }}</strong><br/>
                  {{ location.fax }}
                  {% endif %}
                </div>
                <div class=\"col-sm-3\">
                  {% if location.open %}
                  <strong>{{ text_open }}</strong><br/>
                  {{ location.open }}<br/>
                  <br/>
                  {% endif %}
                  {% if location.comment %}
                  <strong>{{ text_comment }}</strong><br/>
                  {{ location.comment }}
                  {% endif %}
                </div>
              </div>
            </div>
          </div>
        </div>
        {% endfor %}
      </div>
      {% endif %}
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
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ button_submit }}\" />
          </div>
        </div>
      </form>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "coffee/template/information/contact.twig", "");
    }
}
