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

/* coffee/template/account/register.twig */
class __TwigTemplate_9166d37e4d3a0bb3508e1558a9e26092d9e59332faf1ae1fe6eb9ad375a6a613 extends \Twig\Template
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
<main id=\"account-register\" class=\"main register-page\">
    <div class=\"container\">
        <div class=\"row login-row\">
            <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                <div class=\"login-block-register\">
                    <p>";
        // line 7
        echo ($context["text_account_already"] ?? null);
        echo "<a href=\"\" class=\"register\">Login</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <form action=\"";
        // line 10
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset id=\"account\">
                            <div class=\"login-block-title\">
                                <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                                <p class=\"under-title\">Welcome to the world of flavor and pleasure!</p>
                            </div>
                            <div class=\"name-block\">
                                <input type=\"text\" class=\"form-control\" id=\"input-firstname\" placeholder=\"First name\"
                                       aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                                <input type=\"text\" class=\"form-control\" id=\"input-lastname\" placeholder=\"Last name\"
                                       aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                            </div>
                            <div class=\"email-block\">
                                <input type=\"text\" class=\"form-control\" id=\"input-email\" placeholder=\"Email\">
                            </div>
                            <div class=\"telephone-block\">
                                <input type=\"tel\" class=\"form-control\" id=\"input-telephone\" placeholder=\"Phone\">
                            </div>
                            <p>Your password</p>
                            <div class=\"password-block\">
                                <input type=\"password\" class=\"form-control\" id=\"input-password\" placeholder=\"Password\">
                                <input type=\"password\" class=\"form-control\" id=\"input-confirm\"
                                       placeholder=\"Password Confirm\">
                            </div>
                            <div class=\"newsletter-block\">
                                <p>Subscribe</p>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\">
                                    Yes</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\">
                                    No</label>
                                <div class=\"pull-right\">I have read and agree to the <a href=\"#\" class=\"agree\"><b>Privacy
                                            Policy</b></a>
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"agree\" value=\"1\">
                                    &nbsp;
                                    <input type=\"submit\" value=\"Continue\" class=\"btn btn-warning\">
                                </div>

                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
<div id=\"account-register\" class=\"container my-3\">
    ";
        // line 59
        if (($context["error_warning"] ?? null)) {
            // line 60
            echo "        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            ";
            // line 61
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 65
        echo "    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">";
        // line 66
        echo ($context["content_top"] ?? null);
        echo "
            <h1>";
        // line 67
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <p>";
        // line 68
        echo ($context["text_account_already"] ?? null);
        echo "</p>
            <form action=\"";
        // line 69
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset id=\"account\">
                    <legend>";
        // line 71
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\"
                         style=\"display: ";
        // line 73
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                        <label class=\"col-sm-2 control-label\">";
        // line 74
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 76
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 76) == ($context["customer_group_id"] ?? null))) {
                // line 77
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 80);
                echo "\" checked=\"checked\"/>
                                            ";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 81);
                echo "</label>
                                    </div>
                                ";
            } else {
                // line 84
                echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 87);
                echo "\"/>
                                            ";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 88);
                echo "</label>
                                    </div>
                                ";
            }
            // line 91
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 94
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 96
        echo ($context["firstname"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 97
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                            ";
        // line 98
        if (($context["error_firstname"] ?? null)) {
            // line 99
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 100
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 103
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 105
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                   id=\"input-lastname\" class=\"form-control\"/>
                            ";
        // line 107
        if (($context["error_lastname"] ?? null)) {
            // line 108
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 109
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 112
        echo ($context["entry_email"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"email\" name=\"email\" value=\"";
        // line 114
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                   id=\"input-email\" class=\"form-control\"/>
                            ";
        // line 116
        if (($context["error_email"] ?? null)) {
            // line 117
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 118
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 121
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"tel\" name=\"telephone\" value=\"";
        // line 123
        echo ($context["telephone"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 124
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                            ";
        // line 125
        if (($context["error_telephone"] ?? null)) {
            // line 126
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 127
        echo " </div>
                    </div>
                    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 130
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "select")) {
                // line 131
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 132);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"custom_field[";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 136);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                echo "]\"
                                            id=\"input-custom-field";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                echo "\"
                                            class=\"form-control\">
                                        <option value=\"\">";
                // line 139
                echo ($context["text_select"] ?? null);
                echo "</option>


                                        ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 142));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 143
                    echo "                                            ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 143)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 143) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null)))) {
                        // line 144
                        echo "



                                                <option value=\"";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 148);
                        echo "\"
                                                        selected=\"selected\">";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 149);
                        echo "</option>





                                            ";
                    } else {
                        // line 156
                        echo "




                                                <option value=\"";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 161);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 161);
                        echo "</option>





                                            ";
                    }
                    // line 168
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "

                                    </select>
                                    ";
                // line 172
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172)] ?? null) : null)) {
                    // line 173
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 174
                echo "</div>
                            </div>
                        ";
            }
            // line 177
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 177) == "radio")) {
                // line 178
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 179);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 182));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 183
                    echo "                                            <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 183) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183)] ?? null) : null)))) {
                        // line 184
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 186
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 186);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                        echo "]\"
                                                               value=\"";
                        // line 187
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 187);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 189
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 189);
                        echo "</label>
                                                ";
                    } else {
                        // line 191
                        echo "                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[";
                        // line 193
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 193);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                        echo "]\"
                                                               value=\"";
                        // line 194
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 194);
                        echo "\"/>
                                                        ";
                        // line 195
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 195);
                        echo "</label>
                                                ";
                    }
                    // line 196
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                echo "</div>
                                    ";
                // line 198
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) {
                    // line 199
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 200
                echo "</div>
                            </div>
                        ";
            }
            // line 203
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 203) == "checkbox")) {
                // line 204
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 205);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div> ";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 208));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 209
                    echo "                                            <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 209), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209)] ?? null) : null)))) {
                        // line 210
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 212);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                        echo "][]\"
                                                               value=\"";
                        // line 213
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 213);
                        echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                        // line 215
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 215);
                        echo "</label>
                                                ";
                    } else {
                        // line 217
                        echo "                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[";
                        // line 219
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 219);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                        echo "][]\"
                                                               value=\"";
                        // line 220
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 220);
                        echo "\"/>
                                                        ";
                        // line 221
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 221);
                        echo "</label>
                                                ";
                    }
                    // line 222
                    echo " </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo " </div>
                                    ";
                // line 224
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224)] ?? null) : null)) {
                    // line 225
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 226
                echo " </div>
                            </div>
                        ";
            }
            // line 229
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 229) == "text")) {
                // line 230
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 231);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 233);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\"
                                           name=\"custom_field[";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 236);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236);
                echo "]\"
                                           value=\"";
                // line 237
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 237);
                }
                echo "\"
                                           placeholder=\"";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 238);
                echo "\"
                                           id=\"input-custom-field";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                echo "\"
                                           class=\"form-control\"/>
                                    ";
                // line 241
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241)] ?? null) : null)) {
                    // line 242
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 243
                echo " </div>
                            </div>
                        ";
            }
            // line 246
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 246) == "textarea")) {
                // line 247
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 248);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 250);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 253);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 254);
                echo "\"
                                            id=\"input-custom-field";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 255);
                echo "\"
                                            class=\"form-control\">";
                // line 256
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 256);
                }
                echo "</textarea>
                                    ";
                // line 257
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257)] ?? null) : null)) {
                    // line 258
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 259
                echo " </div>
                            </div>
                        ";
            }
            // line 262
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 262) == "file")) {
                // line 263
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 263);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 264
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 264);
                echo "\">
                                <label class=\"col-sm-2 control-label\">";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 265);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" id=\"button-custom-field";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267);
                echo "\"
                                            data-loading-text=\"";
                // line 268
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                class=\"fa fa-upload\"></i> ";
                // line 269
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                    <input type=\"hidden\"
                                           name=\"custom_field[";
                // line 271
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 271);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                echo "]\"
                                           value=\"";
                // line 272
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                    ";
                // line 273
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 273)] ?? null) : null)) {
                    // line 274
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 275
                echo "</div>
                            </div>
                        ";
            }
            // line 278
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 278) == "date")) {
                // line 279
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 280
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 280);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 282
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 282);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 282);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 286
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 286);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 286);
                echo "]\"
                                               value=\"";
                // line 287
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 287);
                }
                echo "\"
                                               placeholder=\"";
                // line 288
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 288);
                echo "\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-custom-field";
                // line 289
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 289);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 294
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 294)] ?? null) : null)) {
                    // line 295
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 295)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 296
                echo " </div>
                            </div>
                        ";
            }
            // line 299
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 299) == "time")) {
                // line 300
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 300);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 301
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 301);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 303
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 303);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 303);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group time\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 307
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 307);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307);
                echo "]\"
                                               value=\"";
                // line 308
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 308)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 308)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 308);
                }
                echo "\"
                                               placeholder=\"";
                // line 309
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 309);
                echo "\" data-date-format=\"HH:mm\"
                                               id=\"input-custom-field";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 310);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 315
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 315)] ?? null) : null)) {
                    // line 316
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 316)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 317
                echo " </div>
                            </div>
                        ";
            }
            // line 320
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 320) == "datetime")) {
                // line 321
                echo "                            <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 321);
                echo "\" class=\"form-group custom-field\"
                                 data-sort=\"";
                // line 322
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 322);
                echo "\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field";
                // line 324
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 324);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 324);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group datetime\">
                                        <input type=\"text\"
                                               name=\"custom_field[";
                // line 328
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 328);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 328);
                echo "]\"
                                               value=\"";
                // line 329
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 329)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 329)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 329);
                }
                echo "\"
                                               placeholder=\"";
                // line 330
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 330);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                               id=\"input-custom-field";
                // line 331
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 331);
                echo "\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    ";
                // line 336
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 336)] ?? null) : null)) {
                    // line 337
                    echo "                                        <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 337)] ?? null) : null);
                    echo "</div>
                                    ";
                }
                // line 338
                echo " </div>
                            </div>
                        ";
            }
            // line 341
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "                </fieldset>
                <fieldset>
                    <legend>";
        // line 344
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 346
        echo ($context["entry_password"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 348
        echo ($context["password"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 349
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                            ";
        // line 350
        if (($context["error_password"] ?? null)) {
            // line 351
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                            ";
        }
        // line 352
        echo " </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 355
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 357
        echo ($context["confirm"] ?? null);
        echo "\"
                                   placeholder=\"";
        // line 358
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                            ";
        // line 359
        if (($context["error_confirm"] ?? null)) {
            // line 360
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                            ";
        }
        // line 361
        echo " </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>";
        // line 365
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 367
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\"> ";
        // line 368
        if (($context["newsletter"] ?? null)) {
            // line 369
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                    ";
            // line 371
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                    ";
            // line 374
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        } else {
            // line 376
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                    ";
            // line 378
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                    ";
            // line 381
            echo ($context["text_no"] ?? null);
            echo "</label>
                            ";
        }
        // line 382
        echo " </div>
                    </div>
                </fieldset>
                ";
        // line 385
        echo ($context["captcha"] ?? null);
        echo "
                ";
        // line 386
        if (($context["text_agree"] ?? null)) {
            // line 387
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">";
            // line 388
            echo ($context["text_agree"] ?? null);
            echo "
                            ";
            // line 389
            if (($context["agree"] ?? null)) {
                // line 390
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                            ";
            } else {
                // line 392
                echo "                                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                            ";
            }
            // line 394
            echo "                            &nbsp;
                            <input type=\"submit\" value=\"";
            // line 395
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        } else {
            // line 399
            echo "                    <div class=\"buttons\">
                        <div class=\"pull-right\">
                            <input type=\"submit\" value=\"";
            // line 401
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                ";
        }
        // line 405
        echo "            </form>
            ";
        // line 406
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 407
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
    // Sort the custom fields
    \$('#account .form-group[data-sort]').detach().each(function () {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
            \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
            \$('#account .form-group:first').before(this);
        }
    });

    \$('input[name=\\'customer_group_id\\']').on('change', function () {
        \$.ajax({
            url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
            dataType: 'json',
            success: function (json) {
                \$('.custom-field').hide();
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('#custom-field' + custom_field['custom_field_id']).show();

                    if (custom_field['required']) {
                        \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('input[name=\\'customer_group_id\\']:checked').trigger('change');
    //--></script>
<script type=\"text/javascript\"><!--
    \$('button[id^=\\'button-custom-field\\']').on('click', function () {
        var element = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
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
                    beforeSend: function () {
                        \$(element).button('loading');
                    },
                    complete: function () {
                        \$(element).button('reset');
                    },
                    success: function (json) {
                        \$(element).parent().find('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(element).parent().find('input').val(json['code']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 510
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 515
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 520
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 525
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "coffee/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1235 => 525,  1227 => 520,  1219 => 515,  1211 => 510,  1105 => 407,  1101 => 406,  1098 => 405,  1091 => 401,  1087 => 399,  1080 => 395,  1077 => 394,  1073 => 392,  1069 => 390,  1067 => 389,  1063 => 388,  1060 => 387,  1058 => 386,  1054 => 385,  1049 => 382,  1044 => 381,  1038 => 378,  1034 => 376,  1029 => 374,  1023 => 371,  1019 => 369,  1017 => 368,  1013 => 367,  1008 => 365,  1002 => 361,  996 => 360,  994 => 359,  990 => 358,  986 => 357,  981 => 355,  976 => 352,  970 => 351,  968 => 350,  964 => 349,  960 => 348,  955 => 346,  950 => 344,  946 => 342,  940 => 341,  935 => 338,  929 => 337,  927 => 336,  919 => 331,  915 => 330,  907 => 329,  901 => 328,  892 => 324,  887 => 322,  882 => 321,  879 => 320,  874 => 317,  868 => 316,  866 => 315,  858 => 310,  854 => 309,  846 => 308,  840 => 307,  831 => 303,  826 => 301,  821 => 300,  818 => 299,  813 => 296,  807 => 295,  805 => 294,  797 => 289,  793 => 288,  785 => 287,  779 => 286,  770 => 282,  765 => 280,  760 => 279,  757 => 278,  752 => 275,  746 => 274,  744 => 273,  736 => 272,  730 => 271,  725 => 269,  721 => 268,  717 => 267,  712 => 265,  708 => 264,  703 => 263,  700 => 262,  695 => 259,  689 => 258,  687 => 257,  679 => 256,  675 => 255,  671 => 254,  665 => 253,  657 => 250,  652 => 248,  647 => 247,  644 => 246,  639 => 243,  633 => 242,  631 => 241,  626 => 239,  622 => 238,  614 => 237,  608 => 236,  600 => 233,  595 => 231,  590 => 230,  587 => 229,  582 => 226,  576 => 225,  574 => 224,  571 => 223,  564 => 222,  559 => 221,  555 => 220,  549 => 219,  545 => 217,  540 => 215,  535 => 213,  529 => 212,  525 => 210,  522 => 209,  518 => 208,  513 => 206,  509 => 205,  504 => 204,  501 => 203,  496 => 200,  490 => 199,  488 => 198,  485 => 197,  478 => 196,  473 => 195,  469 => 194,  463 => 193,  459 => 191,  454 => 189,  449 => 187,  443 => 186,  439 => 184,  436 => 183,  432 => 182,  427 => 180,  423 => 179,  418 => 178,  415 => 177,  410 => 174,  404 => 173,  402 => 172,  397 => 169,  391 => 168,  379 => 161,  372 => 156,  362 => 149,  358 => 148,  352 => 144,  349 => 143,  345 => 142,  339 => 139,  334 => 137,  328 => 136,  321 => 134,  316 => 132,  311 => 131,  308 => 130,  304 => 129,  300 => 127,  294 => 126,  292 => 125,  288 => 124,  284 => 123,  279 => 121,  274 => 118,  268 => 117,  266 => 116,  259 => 114,  254 => 112,  249 => 109,  243 => 108,  241 => 107,  234 => 105,  229 => 103,  224 => 100,  218 => 99,  216 => 98,  212 => 97,  208 => 96,  203 => 94,  193 => 91,  187 => 88,  183 => 87,  178 => 84,  172 => 81,  168 => 80,  163 => 77,  160 => 76,  156 => 75,  152 => 74,  144 => 73,  139 => 71,  134 => 69,  130 => 68,  126 => 67,  122 => 66,  119 => 65,  112 => 61,  109 => 60,  107 => 59,  58 => 13,  52 => 10,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<main id=\"account-register\" class=\"main register-page\">
    <div class=\"container\">
        <div class=\"row login-row\">
            <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                <div class=\"login-block-register\">
                    <p>{{ text_account_already }}<a href=\"\" class=\"register\">Login</a></p>
                </div>
                <div class=\"login-block-wrapper\">
                    <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset id=\"account\">
                            <div class=\"login-block-title\">
                                <h1>{{ heading_title }}</h1>
                                <p class=\"under-title\">Welcome to the world of flavor and pleasure!</p>
                            </div>
                            <div class=\"name-block\">
                                <input type=\"text\" class=\"form-control\" id=\"input-firstname\" placeholder=\"First name\"
                                       aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                                <input type=\"text\" class=\"form-control\" id=\"input-lastname\" placeholder=\"Last name\"
                                       aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                            </div>
                            <div class=\"email-block\">
                                <input type=\"text\" class=\"form-control\" id=\"input-email\" placeholder=\"Email\">
                            </div>
                            <div class=\"telephone-block\">
                                <input type=\"tel\" class=\"form-control\" id=\"input-telephone\" placeholder=\"Phone\">
                            </div>
                            <p>Your password</p>
                            <div class=\"password-block\">
                                <input type=\"password\" class=\"form-control\" id=\"input-password\" placeholder=\"Password\">
                                <input type=\"password\" class=\"form-control\" id=\"input-confirm\"
                                       placeholder=\"Password Confirm\">
                            </div>
                            <div class=\"newsletter-block\">
                                <p>Subscribe</p>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\">
                                    Yes</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\">
                                    No</label>
                                <div class=\"pull-right\">I have read and agree to the <a href=\"#\" class=\"agree\"><b>Privacy
                                            Policy</b></a>
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"agree\" value=\"1\">
                                    &nbsp;
                                    <input type=\"submit\" value=\"Continue\" class=\"btn btn-warning\">
                                </div>

                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
<div id=\"account-register\" class=\"container my-3\">
    {% if error_warning %}
        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            {{ error_warning }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endif %}
    <div class=\"row\">
        <div id=\"content\" class=\"col-md-9\">{{ content_top }}
            <h1>{{ heading_title }}</h1>
            <p>{{ text_account_already }}</p>
            <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset id=\"account\">
                    <legend>{{ text_your_details }}</legend>
                    <div class=\"form-group required\"
                         style=\"display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};\">
                        <label class=\"col-sm-2 control-label\">{{ entry_customer_group }}</label>
                        <div class=\"col-sm-10\">{% for customer_group in customer_groups %}
                                {% if customer_group.customer_group_id == customer_group_id %}
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\"/>
                                            {{ customer_group.name }}</label>
                                    </div>
                                {% else %}
                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"customer_group_id\"
                                                   value=\"{{ customer_group.customer_group_id }}\"/>
                                            {{ customer_group.name }}</label>
                                    </div>
                                {% endif %}
                            {% endfor %}</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname\">{{ entry_firstname }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\"
                                   placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                            {% if error_firstname %}
                                <div class=\"text-danger\">{{ error_firstname }}</div>
                            {% endif %} </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname\">{{ entry_lastname }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\"
                                   id=\"input-lastname\" class=\"form-control\"/>
                            {% if error_lastname %}
                                <div class=\"text-danger\">{{ error_lastname }}</div>
                            {% endif %} </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\"
                                   id=\"input-email\" class=\"form-control\"/>
                            {% if error_email %}
                                <div class=\"text-danger\">{{ error_email }}</div>
                            {% endif %} </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-telephone\">{{ entry_telephone }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\"
                                   placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                            {% if error_telephone %}
                                <div class=\"text-danger\">{{ error_telephone }}</div>
                            {% endif %} </div>
                    </div>
                    {% for custom_field in custom_fields %}
                        {% if custom_field.type == 'select' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                            id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                            class=\"form-control\">
                                        <option value=\"\">{{ text_select }}</option>


                                        {% for custom_field_value in custom_field.custom_field_value %}
                                            {% if register_custom_field[custom_field.location][custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}




                                                <option value=\"{{ custom_field_value.custom_field_value_id }}\"
                                                        selected=\"selected\">{{ custom_field_value.name }}</option>





                                            {% else %}





                                                <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>





                                            {% endif %}
                                        {% endfor %}


                                    </select>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %}</div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'radio' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div> {% for custom_field_value in custom_field.custom_field_value %}
                                            <div class=\"radio\">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                               value=\"{{ custom_field_value.custom_field_value_id }}\"
                                                               checked=\"checked\"/>
                                                        {{ custom_field_value.name }}</label>
                                                {% else %}
                                                    <label>
                                                        <input type=\"radio\"
                                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                               value=\"{{ custom_field_value.custom_field_value_id }}\"/>
                                                        {{ custom_field_value.name }}</label>
                                                {% endif %} </div>
                                        {% endfor %}</div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %}</div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'checkbox' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div> {% for custom_field_value in custom_field.custom_field_value %}
                                            <div class=\"checkbox\">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}
                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\"
                                                               value=\"{{ custom_field_value.custom_field_value_id }}\"
                                                               checked=\"checked\"/>
                                                        {{ custom_field_value.name }}</label>
                                                {% else %}
                                                    <label>
                                                        <input type=\"checkbox\"
                                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\"
                                                               value=\"{{ custom_field_value.custom_field_value_id }}\"/>
                                                        {{ custom_field_value.name }}</label>
                                                {% endif %} </div>
                                        {% endfor %} </div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'text' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\"
                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                           placeholder=\"{{ custom_field.name }}\"
                                           id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                           class=\"form-control\"/>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'textarea' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                            rows=\"5\" placeholder=\"{{ custom_field.name }}\"
                                            id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                            class=\"form-control\">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'file' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" id=\"button-custom-field{{ custom_field.custom_field_id }}\"
                                            data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i
                                                class=\"fa fa-upload\"></i> {{ button_upload }}</button>
                                    <input type=\"hidden\"
                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}\"/>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %}</div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'date' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\"
                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                               value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                               placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'time' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group time\">
                                        <input type=\"text\"
                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                               value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                               placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\"
                                               id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                        {% if custom_field.type == 'datetime' %}
                            <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\"
                                 data-sort=\"{{ custom_field.sort_order }}\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group datetime\">
                                        <input type=\"text\"
                                               name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                               value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                               placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                               id=\"input-custom-field{{ custom_field.custom_field_id }}\"
                                               class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                    {% if error_custom_field[custom_field.custom_field_id] %}
                                        <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                    {% endif %} </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </fieldset>
                <fieldset>
                    <legend>{{ text_your_password }}</legend>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-password\">{{ entry_password }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"{{ password }}\"
                                   placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
                            {% if error_password %}
                                <div class=\"text-danger\">{{ error_password }}</div>
                            {% endif %} </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-confirm\">{{ entry_confirm }}</label>
                        <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\"
                                   placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                            {% if error_confirm %}
                                <div class=\"text-danger\">{{ error_confirm }}</div>
                            {% endif %} </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>{{ text_newsletter }}</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">{{ entry_newsletter }}</label>
                        <div class=\"col-sm-10\"> {% if newsletter %}
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                    {{ text_yes }}</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                    {{ text_no }}</label>
                            {% else %}
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                    {{ text_yes }}</label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                    {{ text_no }}</label>
                            {% endif %} </div>
                    </div>
                </fieldset>
                {{ captcha }}
                {% if text_agree %}
                    <div class=\"buttons\">
                        <div class=\"pull-right\">{{ text_agree }}
                            {% if agree %}
                                <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                            {% else %}
                                <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                            {% endif %}
                            &nbsp;
                            <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                {% else %}
                    <div class=\"buttons\">
                        <div class=\"pull-right\">
                            <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\"/>
                        </div>
                    </div>
                {% endif %}
            </form>
            {{ content_bottom }}</div>
        {{ column_right }}</div>
</div>
<script type=\"text/javascript\"><!--
    // Sort the custom fields
    \$('#account .form-group[data-sort]').detach().each(function () {
        if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
            \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
        }

        if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
        }

        if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
            \$('#account .form-group:first').before(this);
        }
    });

    \$('input[name=\\'customer_group_id\\']').on('change', function () {
        \$.ajax({
            url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
            dataType: 'json',
            success: function (json) {
                \$('.custom-field').hide();
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('#custom-field' + custom_field['custom_field_id']).show();

                    if (custom_field['required']) {
                        \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$('input[name=\\'customer_group_id\\']:checked').trigger('change');
    //--></script>
<script type=\"text/javascript\"><!--
    \$('button[id^=\\'button-custom-field\\']').on('click', function () {
        var element = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
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
                    beforeSend: function () {
                        \$(element).button('loading');
                    },
                    complete: function () {
                        \$(element).button('reset');
                    },
                    success: function (json) {
                        \$(element).parent().find('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(element).parent().find('input').val(json['code']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '{{ datepicker }}',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: true,
        pickTime: true
    });
    //--></script>
{{ footer }} ", "coffee/template/account/register.twig", "");
    }
}
