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

/* coffee/template/product/product.twig */
class __TwigTemplate_69a79374de39889fad0bf34f132cc3993578cd53a189462f27058438fd1c40c6 extends \Twig\Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo "
<main class=\"main product-page\">
    <div class=\"container\">
        ";
        // line 5
        echo ($context["content_top"] ?? null);
        echo "
        <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"product-img\">
                    ";
        // line 10
        if (($context["thumb"] ?? null)) {
            // line 11
            echo "                    <img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\">
                        ";
        } else {
            // line 13
            echo "                        <img src=\"catalog/view/theme/coffee/assets/img/no-image.png\">
                    ";
        }
        // line 15
        echo "                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"product-page-actions\">
                    <div class=\"product-page-price\">
                        ";
        // line 20
        if (($context["price"] ?? null)) {
            // line 21
            echo "                            ";
            if ( !($context["special"] ?? null)) {
                // line 22
                echo "                                <span>";
                echo ($context["price"] ?? null);
                echo "</span>
                                ";
                // line 23
                $context["basePrice"] = ($context["price"] ?? null);
                // line 24
                echo "                            ";
            } else {
                // line 25
                echo "                                ";
                $context["basePrice"] = ($context["special"] ?? null);
                // line 26
                echo "                                <span>";
                echo ($context["special"] ?? null);
                echo "</span>
                                <small>";
                // line 27
                echo ($context["price"] ?? null);
                echo "</small>
                            ";
            }
            // line 29
            echo "                        ";
        }
        // line 30
        echo "

                    </div>
                    ";
        // line 33
        if (($context["options"] ?? null)) {
            // line 34
            echo "                    <div class=\"product-variations\">
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 36
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 36) == "radio")) {
                    // line 37
                    echo "                            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 37)) {
                        echo " required ";
                    }
                    echo "\">
                                <label class=\"control-label\">";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 38);
                    echo "</label>
                                ";
                    // line 39
                    $context["radioInput"] = 0;
                    // line 40
                    echo "                                <div class=\"d-flex\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 40);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 40));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 41
                        echo "                                        ";
                        $context["radioInput"] = (($context["radioInput"] ?? null) + 1);
                        // line 42
                        echo "                                        <div class=\"radio\">
                                            <input id=\"radioInput";
                        // line 43
                        echo ($context["radioInput"] ?? null);
                        echo "\" type=\"radio\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 43);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 43);
                        echo "\" />
                                            ";
                        // line 44
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 44)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 44);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 44);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 44)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 44);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 44);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 45
                        echo "                                            <label class=\"product-variation-label\" for=\"radioInput";
                        echo ($context["radioInput"] ?? null);
                        echo "\">
                                                ";
                        // line 46
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 46);
                        echo "
                                                 </label>
                                            <span class=\"d-none\" data-baseprice=\"";
                        // line 48
                        echo ($context["basePrice"] ?? null);
                        echo "\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 48)) {
                            // line 49
                            echo "                                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 49);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 49);
                            echo ")
                                                ";
                        }
                        // line 50
                        echo "</span>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo " </div>
                            </div>
                        ";
                }
                // line 55
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
                    </div>
                    ";
        }
        // line 59
        echo "                    <button id=\"button-cart\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-warning add2cart-btn\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-description\">
                    <h2>";
        // line 66
        echo ($context["tab_description"] ?? null);
        echo "</h2>
                    <div class=\"product-description-content\">
                        <ul>
                            ";
        // line 69
        echo ($context["description"] ?? null);
        echo "
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"catalog-section\">
            <h2>Other Products</h2>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"product-card\">
                        <div class=\"product-card-img\">
                            <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
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
                            <a href=\"product.html\"><img src=\"img/product2.png\" alt=\"\"></a>
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
                            <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
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
            </div>
        </section>
        ";
        // line 148
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>


</main>
<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('#recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                \$('#button-cart').button('loading');
            },
            complete: function() {
                \$('#button-cart').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    \$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

                    \$('html, body').animate({ scrollTop: 0 }, 'slow');

                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 229
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 234
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 240
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 307
        echo ($context["product_id"] ?? null);
        echo "');

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 311
        echo ($context["product_id"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    \$(document).ready(function() {
        \$('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    //--></script>

";
        // line 350
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "coffee/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 350,  500 => 311,  493 => 307,  423 => 240,  414 => 234,  406 => 229,  322 => 148,  240 => 69,  234 => 66,  221 => 59,  216 => 56,  210 => 55,  205 => 52,  197 => 50,  190 => 49,  186 => 48,  181 => 46,  176 => 45,  160 => 44,  152 => 43,  149 => 42,  146 => 41,  139 => 40,  137 => 39,  133 => 38,  126 => 37,  123 => 36,  119 => 35,  116 => 34,  114 => 33,  109 => 30,  106 => 29,  101 => 27,  96 => 26,  93 => 25,  90 => 24,  88 => 23,  83 => 22,  80 => 21,  78 => 20,  71 => 15,  67 => 13,  59 => 11,  57 => 10,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ header }}
<main class=\"main product-page\">
    <div class=\"container\">
        {{ content_top }}
        <h1>{{ heading_title }}</h1>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"product-img\">
                    {% if thumb %}
                    <img src=\"{{ thumb }}\" alt=\"{{ heading_title }}\">
                        {% else %}
                        <img src=\"catalog/view/theme/coffee/assets/img/no-image.png\">
                    {% endif %}
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"product-page-actions\">
                    <div class=\"product-page-price\">
                        {% if price %}
                            {% if not special %}
                                <span>{{ price }}</span>
                                {% set basePrice =  price  %}
                            {% else %}
                                {% set basePrice =  special  %}
                                <span>{{ special }}</span>
                                <small>{{ price }}</small>
                            {% endif %}
                        {% endif %}


                    </div>
                    {% if options %}
                    <div class=\"product-variations\">
                        {% for option in options %}
                        {% if option.type == 'radio' %}
                            <div class=\"form-group{% if option.required %} required {% endif %}\">
                                <label class=\"control-label\">{{ option.name }}</label>
                                {% set radioInput = 0 %}
                                <div class=\"d-flex\" id=\"input-option{{ option.product_option_id }}\"> {% for option_value in option.product_option_value %}
                                        {% set radioInput = radioInput + 1 %}
                                        <div class=\"radio\">
                                            <input id=\"radioInput{{ radioInput }}\" type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" />
                                            {% if option_value.image %} <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\" /> {% endif %}
                                            <label class=\"product-variation-label\" for=\"radioInput{{ radioInput }}\">
                                                {{ option_value.name }}
                                                 </label>
                                            <span class=\"d-none\" data-baseprice=\"{{ basePrice }}\">{% if option_value.price %}
                                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                                {% endif %}</span>
                                        </div>
                                    {% endfor %} </div>
                            </div>
                        {% endif %}
                        {% endfor %}

                    </div>
                    {% endif %}
                    <button id=\"button-cart\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-warning add2cart-btn\">{{ button_cart }}</button>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-description\">
                    <h2>{{ tab_description }}</h2>
                    <div class=\"product-description-content\">
                        <ul>
                            {{ description }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"catalog-section\">
            <h2>Other Products</h2>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"product-card\">
                        <div class=\"product-card-img\">
                            <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
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
                            <a href=\"product.html\"><img src=\"img/product2.png\" alt=\"\"></a>
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
                            <a href=\"product.html\"><img src=\"img/product1.png\" alt=\"\"></a>
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
            </div>
        </section>
        {{ content_bottom }}
    </div>


</main>
<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('#recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                \$('#button-cart').button('loading');
            },
            complete: function() {
                \$('#button-cart').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    \$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

                    \$('html, body').animate({ scrollTop: 0 }, 'slow');

                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '{{ datepicker }}',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id={{ product_id }}',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    \$(document).ready(function() {
        \$('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    //--></script>

{{ footer }}", "coffee/template/product/product.twig", "");
    }
}
