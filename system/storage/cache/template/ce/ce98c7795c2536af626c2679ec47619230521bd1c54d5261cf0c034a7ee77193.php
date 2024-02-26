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
class __TwigTemplate_f8844d5aa3efe7770b65efa2ab309c723672ac30b9f33da217ac85ca3b03fb40 extends \Twig\Template
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
<main class=\"main product-page\">
    <div class=\"container\">
        ";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "
        <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"product-img\">
                    ";
        // line 9
        if (($context["thumb"] ?? null)) {
            // line 10
            echo "                    <img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\">
                        ";
        } else {
            // line 12
            echo "                        <img src=\"catalog/view/theme/coffee/assets/img/no-image.png\">
                    ";
        }
        // line 14
        echo "                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"product-page-actions\">
                    <div class=\"product-page-price\">
                        ";
        // line 19
        if (($context["price"] ?? null)) {
            // line 20
            echo "                            ";
            if ( !($context["special"] ?? null)) {
                // line 21
                echo "                                <span>";
                echo ($context["price"] ?? null);
                echo "</span>
                                ";
                // line 22
                $context["basePrice"] = ($context["price"] ?? null);
                // line 23
                echo "                            ";
            } else {
                // line 24
                echo "                                ";
                $context["basePrice"] = ($context["special"] ?? null);
                // line 25
                echo "                                <span>";
                echo ($context["special"] ?? null);
                echo "</span>
                                <small>";
                // line 26
                echo ($context["price"] ?? null);
                echo "</small>
                            ";
            }
            // line 28
            echo "                        ";
        }
        // line 29
        echo "

                    </div>
                    ";
        // line 32
        if (($context["options"] ?? null)) {
            // line 33
            echo "                    <div class=\"product-variations\">
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 35
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 35) == "radio")) {
                    // line 36
                    echo "                            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 36)) {
                        echo " required ";
                    }
                    echo "\">
                                <label class=\"control-label\">";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 37);
                    echo "</label>
                                ";
                    // line 38
                    $context["radioInput"] = 0;
                    // line 39
                    echo "                                <div class=\"d-flex\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 39);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 39));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 40
                        echo "                                        ";
                        $context["radioInput"] = (($context["radioInput"] ?? null) + 1);
                        // line 41
                        echo "                                        <div class=\"radio\">
                                            <input id=\"radioInput";
                        // line 42
                        echo ($context["radioInput"] ?? null);
                        echo "\" type=\"radio\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 42);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 42);
                        echo "\" />
                                            ";
                        // line 43
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 43)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 43);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 43);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 43)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 43);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 43);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 44
                        echo "                                            <label class=\"product-variation-label\" for=\"radioInput";
                        echo ($context["radioInput"] ?? null);
                        echo "\">
                                                ";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 45);
                        echo "
                                                 </label>
                                            <span class=\"d-none\" data-baseprice=\"";
                        // line 47
                        echo ($context["basePrice"] ?? null);
                        echo "\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 47)) {
                            // line 48
                            echo "                                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 48);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 48);
                            echo ")
                                                ";
                        }
                        // line 49
                        echo "</span>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo " </div>
                            </div>
                        ";
                }
                // line 54
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
                    </div>
                    ";
        }
        // line 58
        echo "                    <a  onclick=\"return cart.add('";
        echo ($context["product_id"] ?? null);
        echo "');\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-warning add2cart-btn\">";
        echo ($context["button_cart"] ?? null);
        echo "</a>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-description\">
                    <h2>";
        // line 65
        echo ($context["tab_description"] ?? null);
        echo "</h2>
                    <div class=\"product-description-content\">
                        <ul>
                            ";
        // line 68
        echo ($context["description"] ?? null);
        echo "
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class=\"catalog-section\">
            ";
        // line 75
        echo ($context["content_bottom"] ?? null);
        echo "
        </section>
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
        // line 157
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 162
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 168
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
        // line 235
        echo ($context["product_id"] ?? null);
        echo "');

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 239
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
        // line 278
        echo ($context["footer"] ?? null);
        echo "
";
        // line 279
        echo twig_var_dump($this->env, $context, ...[0 => ($context["products"] ?? null)]);
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
        return array (  474 => 279,  470 => 278,  428 => 239,  421 => 235,  351 => 168,  342 => 162,  334 => 157,  249 => 75,  239 => 68,  233 => 65,  218 => 58,  213 => 55,  207 => 54,  202 => 51,  194 => 49,  187 => 48,  183 => 47,  178 => 45,  173 => 44,  157 => 43,  149 => 42,  146 => 41,  143 => 40,  136 => 39,  134 => 38,  130 => 37,  123 => 36,  120 => 35,  116 => 34,  113 => 33,  111 => 32,  106 => 29,  103 => 28,  98 => 26,  93 => 25,  90 => 24,  87 => 23,  85 => 22,  80 => 21,  77 => 20,  75 => 19,  68 => 14,  64 => 12,  56 => 10,  54 => 9,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
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
                    <a  onclick=\"return cart.add('{{ product_id }}');\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-warning add2cart-btn\">{{ button_cart }}</a>
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
            {{ content_bottom }}
        </section>
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

{{ footer }}
{{ dump(products) }}", "coffee/template/product/product.twig", "");
    }
}
