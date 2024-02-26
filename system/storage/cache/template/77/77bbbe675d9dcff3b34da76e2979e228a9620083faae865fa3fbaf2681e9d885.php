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
class __TwigTemplate_821990e9e9df96a4bcc6fcc0028f07aeb8afb29c4fee3a6b0544d1bebdb47ce6 extends \Twig\Template
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
<div id=\"account-register\" class=\"container my-3\">
    ";
        // line 3
        if (($context["error_warning"] ?? null)) {
            // line 4
            echo "        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            ";
            // line 5
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 9
        echo "    <main class=\"main register-page\">
        <div class=\"container\">
            <div class=\"row login-row\">
                <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                    <div class=\"login-block-register\">
                        <p>";
        // line 14
        echo ($context["text_account_already"] ?? null);
        echo "</p>
                    </div>
                    <div class=\"login-block-wrapper\">
                        <div class=\"login-block-title\">
                            <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                            <p class=\"under-title\">";
        // line 19
        echo ($context["text_your_details"] ?? null);
        echo "</p>
                        </div>
                        <form action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                            <fieldset id=\"account\">
                                <div class=\"form-group required\" style=\"display: ";
        // line 23
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 24
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 26
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 26) == ($context["customer_group_id"] ?? null))) {
                // line 27
                echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\" name=\"customer_group_id\"
                                                               value=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 30);
                echo "\"
                                                               checked=\"checked\"/>
                                                        ";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 32);
                echo "</label>
                                                </div>
                                            ";
            } else {
                // line 35
                echo "                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\" name=\"customer_group_id\"
                                                               value=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 38);
                echo "\"/>
                                                        ";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 39);
                echo "</label>
                                                </div>
                                            ";
            }
            // line 42
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        ";
        // line 46
        if (($context["error_firstname"] ?? null)) {
            // line 47
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                                        ";
        }
        // line 49
        echo "                                        ";
        if (($context["error_lastname"] ?? null)) {
            // line 50
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                                        ";
        }
        // line 52
        echo "                                    </div>
                                </div>
                                <div class=\"name-block form-group required\">
                                        <input type=\"text\" name=\"firstname\" value=\"";
        // line 55
        echo ($context["firstname"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 56
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\"
                                               class=\"form-control\"/>
                                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 58
        echo ($context["lastname"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 59
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                           id=\"input-lastname\" class=\"form-control\"/>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-lastname\">";
        // line 64
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"lastname\" value=\"";
        // line 66
        echo ($context["lastname"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 67
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                               id=\"input-lastname\" class=\"form-control\"/>
                                         </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 72
        echo ($context["entry_email"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" name=\"email\" value=\"";
        // line 74
        echo ($context["email"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 75
        echo ($context["entry_email"] ?? null);
        echo "\"
                                               id=\"input-email\" class=\"form-control\"/>
                                        ";
        // line 77
        if (($context["error_email"] ?? null)) {
            // line 78
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                                        ";
        }
        // line 79
        echo " </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-telephone\">";
        // line 83
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"tel\" name=\"telephone\" value=\"";
        // line 85
        echo ($context["telephone"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 86
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\"
                                               class=\"form-control\"/>
                                        ";
        // line 88
        if (($context["error_telephone"] ?? null)) {
            // line 89
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                                        ";
        }
        // line 90
        echo " </div>
                                </div>
                                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 93
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "select")) {
                // line 94
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 96);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 98);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"custom_field[";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 100);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                echo "]\"
                                                        id=\"input-custom-field";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                echo "\"
                                                        class=\"form-control\">
                                                    <option value=\"\">";
                // line 103
                echo ($context["text_select"] ?? null);
                echo "</option>


                                                    ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 106));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 107
                    echo "                                                        ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 107)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 107) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null)))) {
                        // line 108
                        echo "



                                                            <option value=\"";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112);
                        echo "\"
                                                                    selected=\"selected\">";
                        // line 113
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 113);
                        echo "</option>





                                                        ";
                    } else {
                        // line 120
                        echo "




                                                            <option value=\"";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 125);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 125);
                        echo "</option>





                                                        ";
                    }
                    // line 132
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "

                                                </select>
                                                ";
                // line 136
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null)) {
                    // line 137
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 138
                echo "</div>
                                        </div>
                                    ";
            }
            // line 141
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 141) == "radio")) {
                // line 142
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 144);
                echo "\">
                                            <label class=\"col-sm-2 control-label\">";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <div> ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 148
                    echo "                                                        <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 148) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)))) {
                        // line 149
                        echo "                                                                <label>
                                                                    <input type=\"radio\"
                                                                           name=\"custom_field[";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 151);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                        echo "]\"
                                                                           value=\"";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 152);
                        echo "\"
                                                                           checked=\"checked\"/>
                                                                    ";
                        // line 154
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 154);
                        echo "</label>
                                                            ";
                    } else {
                        // line 156
                        echo "                                                                <label>
                                                                    <input type=\"radio\"
                                                                           name=\"custom_field[";
                        // line 158
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 158);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                        echo "]\"
                                                                           value=\"";
                        // line 159
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 159);
                        echo "\"/>
                                                                    ";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 160);
                        echo "</label>
                                                            ";
                    }
                    // line 161
                    echo " </div>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "</div>
                                                ";
                // line 163
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) {
                    // line 164
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 165
                echo "</div>
                                        </div>
                                    ";
            }
            // line 168
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 168) == "checkbox")) {
                // line 169
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 171);
                echo "\">
                                            <label class=\"col-sm-2 control-label\">";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 172);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <div> ";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 174));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 175
                    echo "                                                        <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 175), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)))) {
                        // line 176
                        echo "                                                                <label>
                                                                    <input type=\"checkbox\"
                                                                           name=\"custom_field[";
                        // line 178
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 178);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                        echo "][]\"
                                                                           value=\"";
                        // line 179
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 179);
                        echo "\"
                                                                           checked=\"checked\"/>
                                                                    ";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 181);
                        echo "</label>
                                                            ";
                    } else {
                        // line 183
                        echo "                                                                <label>
                                                                    <input type=\"checkbox\"
                                                                           name=\"custom_field[";
                        // line 185
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 185);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                        echo "][]\"
                                                                           value=\"";
                        // line 186
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 186);
                        echo "\"/>
                                                                    ";
                        // line 187
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 187);
                        echo "</label>
                                                            ";
                    }
                    // line 188
                    echo " </div>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo " </div>
                                                ";
                // line 190
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null)) {
                    // line 191
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 192
                echo " </div>
                                        </div>
                                    ";
            }
            // line 195
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 195) == "text")) {
                // line 196
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 198
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 198);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 200
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 200);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 203
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 203);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                echo "]\"
                                                       value=\"";
                // line 204
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 204);
                }
                echo "\"
                                                       placeholder=\"";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 205);
                echo "\"
                                                       id=\"input-custom-field";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "\"
                                                       class=\"form-control\"/>
                                                ";
                // line 208
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null)) {
                    // line 209
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 210
                echo " </div>
                                        </div>
                                    ";
            }
            // line 213
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 213) == "textarea")) {
                // line 214
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 216
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 216);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 218);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 221
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 221);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 222);
                echo "\"
                                            id=\"input-custom-field";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                echo "\"
                                            class=\"form-control\">";
                // line 224
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 224);
                }
                echo "</textarea>
                                                ";
                // line 225
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225)] ?? null) : null)) {
                    // line 226
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 227
                echo " </div>
                                        </div>
                                    ";
            }
            // line 230
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 230) == "file")) {
                // line 231
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 233);
                echo "\">
                                            <label class=\"col-sm-2 control-label\">";
                // line 234
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <button type=\"button\"
                                                        id=\"button-custom-field";
                // line 237
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                echo "\"
                                                        data-loading-text=\"";
                // line 238
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\">
                                                    <i
                                                            class=\"fa fa-upload\"></i> ";
                // line 240
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                                <input type=\"hidden\"
                                                       name=\"custom_field[";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 242);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                echo "]\"
                                                       value=\"";
                // line 243
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                                ";
                // line 244
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244)] ?? null) : null)) {
                    // line 245
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 246
                echo "</div>
                                        </div>
                                    ";
            }
            // line 249
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 249) == "date")) {
                // line 250
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 252);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 254);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 258);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258);
                echo "]\"
                                                           value=\"";
                // line 259
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 259);
                }
                echo "\"
                                                           placeholder=\"";
                // line 260
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 260);
                echo "\"
                                                           data-date-format=\"YYYY-MM-DD\"
                                                           id=\"input-custom-field";
                // line 262
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262);
                echo "\"
                                                           class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                                ";
                // line 267
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267)] ?? null) : null)) {
                    // line 268
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 269
                echo " </div>
                                        </div>
                                    ";
            }
            // line 272
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 272) == "time")) {
                // line 273
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 273);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 275
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 275);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 277
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 277);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group time\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[";
                // line 281
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 281);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281);
                echo "]\"
                                                           value=\"";
                // line 282
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 282)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 282)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 282);
                }
                echo "\"
                                                           placeholder=\"";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 283);
                echo "\"
                                                           data-date-format=\"HH:mm\"
                                                           id=\"input-custom-field";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285);
                echo "\"
                                                           class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                                ";
                // line 290
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 290)] ?? null) : null)) {
                    // line 291
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 291)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 292
                echo " </div>
                                        </div>
                                    ";
            }
            // line 295
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 295) == "datetime")) {
                // line 296
                echo "                                        <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 296);
                echo "\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"";
                // line 298
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 298);
                echo "\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field";
                // line 300
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 300);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 300);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group datetime\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[";
                // line 304
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 304);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 304);
                echo "]\"
                                                           value=\"";
                // line 305
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 305)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 305)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 305);
                }
                echo "\"
                                                           placeholder=\"";
                // line 306
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 306);
                echo "\"
                                                           data-date-format=\"YYYY-MM-DD HH:mm\"
                                                           id=\"input-custom-field";
                // line 308
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 308);
                echo "\"
                                                           class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                                ";
                // line 313
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 313)] ?? null) : null)) {
                    // line 314
                    echo "                                                    <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 314)] ?? null) : null);
                    echo "</div>
                                                ";
                }
                // line 315
                echo " </div>
                                        </div>
                                    ";
            }
            // line 318
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 321
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-password\">";
        // line 324
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" name=\"password\" value=\"";
        // line 326
        echo ($context["password"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 327
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\"
                                               class=\"form-control\"/>
                                        ";
        // line 329
        if (($context["error_password"] ?? null)) {
            // line 330
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                                        ";
        }
        // line 331
        echo " </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-confirm\">";
        // line 335
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" name=\"confirm\" value=\"";
        // line 337
        echo ($context["confirm"] ?? null);
        echo "\"
                                               placeholder=\"";
        // line 338
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\"
                                               class=\"form-control\"/>
                                        ";
        // line 340
        if (($context["error_confirm"] ?? null)) {
            // line 341
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                                        ";
        }
        // line 342
        echo " </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 346
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 348
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\"> ";
        // line 349
        if (($context["newsletter"] ?? null)) {
            // line 350
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                                ";
            // line 352
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                                ";
            // line 355
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        ";
        } else {
            // line 357
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                                ";
            // line 359
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                                ";
            // line 362
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        ";
        }
        // line 363
        echo " </div>
                                </div>
                            </fieldset>
                            ";
        // line 366
        echo ($context["captcha"] ?? null);
        echo "
                            ";
        // line 367
        if (($context["text_agree"] ?? null)) {
            // line 368
            echo "                                <div class=\"buttons\">
                                    <div class=\"pull-right\">";
            // line 369
            echo ($context["text_agree"] ?? null);
            echo "
                                        ";
            // line 370
            if (($context["agree"] ?? null)) {
                // line 371
                echo "                                            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                                        ";
            } else {
                // line 373
                echo "                                            <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                                        ";
            }
            // line 375
            echo "                                        &nbsp;
                                        <input type=\"submit\" value=\"";
            // line 376
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                    </div>
                                </div>
                            ";
        } else {
            // line 380
            echo "                                <div class=\"buttons\">
                                    <div class=\"pull-right\">
                                        <input type=\"submit\" value=\"";
            // line 382
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                    </div>
                                </div>
                            ";
        }
        // line 386
        echo "                        </form>
                    </div>
                </div>
            </div>
            ";
        // line 390
        echo ($context["column_right"] ?? null);
        echo "</div>


    </main>
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
        // line 496
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 501
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 506
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 511
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
        return array (  1208 => 511,  1200 => 506,  1192 => 501,  1184 => 496,  1075 => 390,  1069 => 386,  1062 => 382,  1058 => 380,  1051 => 376,  1048 => 375,  1044 => 373,  1040 => 371,  1038 => 370,  1034 => 369,  1031 => 368,  1029 => 367,  1025 => 366,  1020 => 363,  1015 => 362,  1009 => 359,  1005 => 357,  1000 => 355,  994 => 352,  990 => 350,  988 => 349,  984 => 348,  979 => 346,  973 => 342,  967 => 341,  965 => 340,  960 => 338,  956 => 337,  951 => 335,  945 => 331,  939 => 330,  937 => 329,  932 => 327,  928 => 326,  923 => 324,  917 => 321,  913 => 319,  907 => 318,  902 => 315,  896 => 314,  894 => 313,  886 => 308,  881 => 306,  873 => 305,  867 => 304,  858 => 300,  853 => 298,  847 => 296,  844 => 295,  839 => 292,  833 => 291,  831 => 290,  823 => 285,  818 => 283,  810 => 282,  804 => 281,  795 => 277,  790 => 275,  784 => 273,  781 => 272,  776 => 269,  770 => 268,  768 => 267,  760 => 262,  755 => 260,  747 => 259,  741 => 258,  732 => 254,  727 => 252,  721 => 250,  718 => 249,  713 => 246,  707 => 245,  705 => 244,  697 => 243,  691 => 242,  686 => 240,  681 => 238,  677 => 237,  671 => 234,  667 => 233,  661 => 231,  658 => 230,  653 => 227,  647 => 226,  645 => 225,  637 => 224,  633 => 223,  629 => 222,  623 => 221,  615 => 218,  610 => 216,  604 => 214,  601 => 213,  596 => 210,  590 => 209,  588 => 208,  583 => 206,  579 => 205,  571 => 204,  565 => 203,  557 => 200,  552 => 198,  546 => 196,  543 => 195,  538 => 192,  532 => 191,  530 => 190,  527 => 189,  520 => 188,  515 => 187,  511 => 186,  505 => 185,  501 => 183,  496 => 181,  491 => 179,  485 => 178,  481 => 176,  478 => 175,  474 => 174,  469 => 172,  465 => 171,  459 => 169,  456 => 168,  451 => 165,  445 => 164,  443 => 163,  440 => 162,  433 => 161,  428 => 160,  424 => 159,  418 => 158,  414 => 156,  409 => 154,  404 => 152,  398 => 151,  394 => 149,  391 => 148,  387 => 147,  382 => 145,  378 => 144,  372 => 142,  369 => 141,  364 => 138,  358 => 137,  356 => 136,  351 => 133,  345 => 132,  333 => 125,  326 => 120,  316 => 113,  312 => 112,  306 => 108,  303 => 107,  299 => 106,  293 => 103,  288 => 101,  282 => 100,  275 => 98,  270 => 96,  264 => 94,  261 => 93,  257 => 92,  253 => 90,  247 => 89,  245 => 88,  240 => 86,  236 => 85,  231 => 83,  225 => 79,  219 => 78,  217 => 77,  212 => 75,  208 => 74,  203 => 72,  195 => 67,  191 => 66,  186 => 64,  178 => 59,  174 => 58,  169 => 56,  165 => 55,  160 => 52,  154 => 50,  151 => 49,  145 => 47,  143 => 46,  132 => 42,  126 => 39,  122 => 38,  117 => 35,  111 => 32,  106 => 30,  101 => 27,  98 => 26,  94 => 25,  90 => 24,  82 => 23,  77 => 21,  72 => 19,  68 => 18,  61 => 14,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-register\" class=\"container my-3\">
    {% if error_warning %}
        <div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\">
            {{ error_warning }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endif %}
    <main class=\"main register-page\">
        <div class=\"container\">
            <div class=\"row login-row\">
                <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">
                    <div class=\"login-block-register\">
                        <p>{{ text_account_already }}</p>
                    </div>
                    <div class=\"login-block-wrapper\">
                        <div class=\"login-block-title\">
                            <h1>{{ heading_title }}</h1>
                            <p class=\"under-title\">{{ text_your_details }}</p>
                        </div>
                        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                            <fieldset id=\"account\">
                                <div class=\"form-group required\" style=\"display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};\">
                                    <label class=\"col-sm-2 control-label\">{{ entry_customer_group }}</label>
                                    <div class=\"col-sm-10\">{% for customer_group in customer_groups %}
                                            {% if customer_group.customer_group_id == customer_group_id %}
                                                <div class=\"radio\">
                                                    <label>
                                                        <input type=\"radio\" name=\"customer_group_id\"
                                                               value=\"{{ customer_group.customer_group_id }}\"
                                                               checked=\"checked\"/>
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
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        {% if error_firstname %}
                                            <div class=\"text-danger\">{{ error_firstname }}</div>
                                        {% endif %}
                                        {% if error_lastname %}
                                            <div class=\"text-danger\">{{ error_lastname }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"name-block form-group required\">
                                        <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\"
                                               placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\"
                                               class=\"form-control\"/>
                                    <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\"
                                           placeholder=\"{{ entry_lastname }}\"
                                           id=\"input-lastname\" class=\"form-control\"/>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-lastname\">{{ entry_lastname }}</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\"
                                               placeholder=\"{{ entry_lastname }}\"
                                               id=\"input-lastname\" class=\"form-control\"/>
                                         </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"email\" name=\"email\" value=\"{{ email }}\"
                                               placeholder=\"{{ entry_email }}\"
                                               id=\"input-email\" class=\"form-control\"/>
                                        {% if error_email %}
                                            <div class=\"text-danger\">{{ error_email }}</div>
                                        {% endif %} </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-telephone\">{{ entry_telephone }}</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\"
                                               placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\"
                                               class=\"form-control\"/>
                                        {% if error_telephone %}
                                            <div class=\"text-danger\">{{ error_telephone }}</div>
                                        {% endif %} </div>
                                </div>
                                {% for custom_field in custom_fields %}
                                    {% if custom_field.type == 'select' %}
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"{{ custom_field.sort_order }}\">
                                            <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                            <div class=\"col-sm-10\">
                                                <button type=\"button\"
                                                        id=\"button-custom-field{{ custom_field.custom_field_id }}\"
                                                        data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\">
                                                    <i
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"{{ custom_field.sort_order }}\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                           placeholder=\"{{ custom_field.name }}\"
                                                           data-date-format=\"YYYY-MM-DD\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"{{ custom_field.sort_order }}\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group time\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                           placeholder=\"{{ custom_field.name }}\"
                                                           data-date-format=\"HH:mm\"
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
                                        <div id=\"custom-field{{ custom_field.custom_field_id }}\"
                                             class=\"form-group custom-field\"
                                             data-sort=\"{{ custom_field.sort_order }}\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                            <div class=\"col-sm-10\">
                                                <div class=\"input-group datetime\">
                                                    <input type=\"text\"
                                                           name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\"
                                                           value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\"
                                                           placeholder=\"{{ custom_field.name }}\"
                                                           data-date-format=\"YYYY-MM-DD HH:mm\"
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
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-password\">{{ entry_password }}</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" name=\"password\" value=\"{{ password }}\"
                                               placeholder=\"{{ entry_password }}\" id=\"input-password\"
                                               class=\"form-control\"/>
                                        {% if error_password %}
                                            <div class=\"text-danger\">{{ error_password }}</div>
                                        {% endif %} </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-confirm\">{{ entry_confirm }}</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\"
                                               placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\"
                                               class=\"form-control\"/>
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
                    </div>
                </div>
            </div>
            {{ column_right }}</div>


    </main>
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
