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
class __TwigTemplate_71a711c7429d25475bd883786db523fdff711cc33bf6c202866abff8e8524bdb extends \Twig\Template
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
            ";
        // line 10
        if (($context["image"] ?? null)) {
            // line 11
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 13
        echo "            <div class=\"col-sm-3\"><strong>";
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
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 20
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 21
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 22
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 24
        if (($context["fax"] ?? null)) {
            // line 25
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 26
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 28
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 30
        if (($context["open"] ?? null)) {
            // line 31
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 32
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 35
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 36
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 37
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 39
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 43
        if (($context["locations"] ?? null)) {
            // line 44
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 47
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 49);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 49);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 51);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 54)) {
                    // line 55
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 55);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 55);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 55);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 57
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 57);
                echo "</strong><br/>
                  <address>
                  ";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 59);
                echo "
                  </address>
                  ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 62));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 64
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 65
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 66);
                echo "<br/>
                  <br/>
                  ";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 70);
                    echo "
                  ";
                }
                // line 72
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 76);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 79
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 81);
                    echo "
                  ";
                }
                // line 83
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
            // line 89
            echo "      </div>
      ";
        }
        // line 91
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 93
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 95
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 97
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 98
        if (($context["error_name"] ?? null)) {
            // line 99
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 101
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 104
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 106
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 107
        if (($context["error_email"] ?? null)) {
            // line 108
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 110
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 113
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 115
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 116
        if (($context["error_enquiry"] ?? null)) {
            // line 117
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 119
        echo "            </div>
          </div>
          ";
        // line 121
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 125
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 129
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 130
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 132
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
        return array (  387 => 132,  382 => 130,  378 => 129,  371 => 125,  364 => 121,  360 => 119,  354 => 117,  352 => 116,  348 => 115,  343 => 113,  338 => 110,  332 => 108,  330 => 107,  326 => 106,  321 => 104,  316 => 101,  310 => 99,  308 => 98,  304 => 97,  299 => 95,  294 => 93,  288 => 91,  284 => 89,  273 => 83,  268 => 81,  263 => 80,  260 => 79,  254 => 76,  249 => 75,  247 => 74,  243 => 72,  238 => 70,  233 => 69,  231 => 68,  226 => 66,  222 => 65,  219 => 64,  209 => 62,  207 => 61,  202 => 59,  196 => 57,  186 => 55,  184 => 54,  178 => 51,  171 => 49,  167 => 47,  163 => 46,  157 => 44,  155 => 43,  149 => 39,  144 => 37,  139 => 36,  136 => 35,  130 => 32,  125 => 31,  123 => 30,  119 => 28,  114 => 26,  109 => 25,  107 => 24,  102 => 22,  98 => 21,  95 => 20,  85 => 18,  83 => 17,  78 => 15,  72 => 13,  62 => 11,  60 => 10,  53 => 6,  49 => 5,  43 => 4,  37 => 1,);
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
            {% if image %}
            <div class=\"col-sm-3\"><img src=\"{{ image }}\" alt=\"{{ store }}\" title=\"{{ store }}\" class=\"img-thumbnail\" /></div>
            {% endif %}
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
