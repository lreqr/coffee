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
class __TwigTemplate_6e34bc5e244e7698ba51ab851e15dac370a52032d743bf8110f2a98389ad24f1 extends \Twig\Template
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

                <div id=\"content\" class=\"col-md-9\">";
        // line 13
        echo ($context["content_top"] ?? null);
        echo "
                    <h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    <p>";
        // line 15
        echo ($context["text_account_already"] ?? null);
        echo "</p>
                    <form action=\"";
        // line 16
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset id=\"account\">
                            <legend>";
        // line 18
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
                            <div class=\"form-group required\"
                                 style=\"display: ";
        // line 20
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                                <label class=\"col-sm-2 control-label\">";
        // line 21
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 23
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 23) == ($context["customer_group_id"] ?? null))) {
                // line 24
                echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 27);
                echo "\"
                                                           checked=\"checked\"/>
                                                    ";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 29);
                echo "</label>
                                            </div>
                                        ";
            } else {
                // line 32
                echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 35);
                echo "\"/>
                                                    ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 36);
                echo "</label>
                                            </div>
                                        ";
            }
            // line 39
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-firstname\">";
        // line 43
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 45
        echo ($context["firstname"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 46
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\"
                                           class=\"form-control\"/>
                                    ";
        // line 48
        if (($context["error_firstname"] ?? null)) {
            // line 49
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                                    ";
        }
        // line 50
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 53
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 55
        echo ($context["lastname"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 56
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                           id=\"input-lastname\" class=\"form-control\"/>
                                    ";
        // line 58
        if (($context["error_lastname"] ?? null)) {
            // line 59
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                                    ";
        }
        // line 60
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 63
        echo ($context["entry_email"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 65
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                           id=\"input-email\" class=\"form-control\"/>
                                    ";
        // line 67
        if (($context["error_email"] ?? null)) {
            // line 68
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                                    ";
        }
        // line 69
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-telephone\">";
        // line 73
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"tel\" name=\"telephone\" value=\"";
        // line 75
        echo ($context["telephone"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 76
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\"
                                           class=\"form-control\"/>
                                    ";
        // line 78
        if (($context["error_telephone"] ?? null)) {
            // line 79
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                                    ";
        }
        // line 80
        echo " </div>
                            </div>
                            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 83
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 83) == "select")) {
                // line 84
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 86);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 88);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"custom_field[";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 90);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                echo "]\"
                                                    id=\"input-custom-field";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                echo "\"
                                                    class=\"form-control\">
                                                <option value=\"\">";
                // line 93
                echo ($context["text_select"] ?? null);
                echo "</option>


                                                ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 97
                    echo "                                                    ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 97)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 97) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null)))) {
                        // line 98
                        echo "



                                                        <option value=\"";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 102);
                        echo "\"
                                                                selected=\"selected\">";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 103);
                        echo "</option>





                                                    ";
                    } else {
                        // line 110
                        echo "




                                                        <option value=\"";
                        // line 115
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 115);
                        echo "</option>





                                                    ";
                    }
                    // line 122
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "

                                            </select>
                                            ";
                // line 126
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null)) {
                    // line 127
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 128
                echo "</div>
                                    </div>
                                ";
            }
            // line 131
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 131) == "radio")) {
                // line 132
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 134);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div> ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 137));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 138
                    echo "                                                    <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)))) {
                        // line 139
                        echo "                                                            <label>
                                                                <input type=\"radio\"
                                                                       name=\"custom_field[";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                        echo "]\"
                                                                       value=\"";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 142);
                        echo "\"
                                                                       checked=\"checked\"/>
                                                                ";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 144);
                        echo "</label>
                                                        ";
                    } else {
                        // line 146
                        echo "                                                            <label>
                                                                <input type=\"radio\"
                                                                       name=\"custom_field[";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 148);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                        echo "]\"
                                                                       value=\"";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 149);
                        echo "\"/>
                                                                ";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 150);
                        echo "</label>
                                                        ";
                    }
                    // line 151
                    echo " </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "</div>
                                            ";
                // line 153
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null)) {
                    // line 154
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 155
                echo "</div>
                                    </div>
                                ";
            }
            // line 158
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "checkbox")) {
                // line 159
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 161);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 162);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div> ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 164));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 165
                    echo "                                                    <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 165), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null)))) {
                        // line 166
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 168
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 168);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                        echo "][]\"
                                                                       value=\"";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 169);
                        echo "\"
                                                                       checked=\"checked\"/>
                                                                ";
                        // line 171
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 171);
                        echo "</label>
                                                        ";
                    } else {
                        // line 173
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 175
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 175);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                        echo "][]\"
                                                                       value=\"";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 176);
                        echo "\"/>
                                                                ";
                        // line 177
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 177);
                        echo "</label>
                                                        ";
                    }
                    // line 178
                    echo " </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo " </div>
                                            ";
                // line 180
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) {
                    // line 181
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 182
                echo " </div>
                                    </div>
                                ";
            }
            // line 185
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 185) == "text")) {
                // line 186
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 188);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 190);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\"
                                                   name=\"custom_field[";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 193);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                echo "]\"
                                                   value=\"";
                // line 194
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 194);
                }
                echo "\"
                                                   placeholder=\"";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                echo "\"
                                                   id=\"input-custom-field";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                echo "\"
                                                   class=\"form-control\"/>
                                            ";
                // line 198
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) {
                    // line 199
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 200
                echo " </div>
                                    </div>
                                ";
            }
            // line 203
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 203) == "textarea")) {
                // line 204
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 206);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 211);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 212);
                echo "\"
                                            id=\"input-custom-field";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                echo "\"
                                            class=\"form-control\">";
                // line 214
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 214);
                }
                echo "</textarea>
                                            ";
                // line 215
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null)) {
                    // line 216
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 217
                echo " </div>
                                    </div>
                                ";
            }
            // line 220
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 220) == "file")) {
                // line 221
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 223);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 224);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <button type=\"button\"
                                                    id=\"button-custom-field";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                echo "\"
                                                    data-loading-text=\"";
                // line 228
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                        class=\"fa fa-upload\"></i> ";
                // line 229
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                            <input type=\"hidden\"
                                                   name=\"custom_field[";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 231);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                echo "]\"
                                                   value=\"";
                // line 232
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                            ";
                // line 233
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null)) {
                    // line 234
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 235
                echo "</div>
                                    </div>
                                ";
            }
            // line 238
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 238) == "date")) {
                // line 239
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 241
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 241);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 243);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group date\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 247);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                echo "]\"
                                                       value=\"";
                // line 248
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 248);
                }
                echo "\"
                                                       placeholder=\"";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 249);
                echo "\"
                                                       data-date-format=\"YYYY-MM-DD\"
                                                       id=\"input-custom-field";
                // line 251
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 256
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null)) {
                    // line 257
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 258
                echo " </div>
                                    </div>
                                ";
            }
            // line 261
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 261) == "time")) {
                // line 262
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 264
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 264);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 266);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group time\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 270
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 270);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270);
                echo "]\"
                                                       value=\"";
                // line 271
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 271);
                }
                echo "\"
                                                       placeholder=\"";
                // line 272
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 272);
                echo "\" data-date-format=\"HH:mm\"
                                                       id=\"input-custom-field";
                // line 273
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 273);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 278
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278)] ?? null) : null)) {
                    // line 279
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 280
                echo " </div>
                                    </div>
                                ";
            }
            // line 283
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 283) == "datetime")) {
                // line 284
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 284);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 286
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 286);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 288
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 288);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 288);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group datetime\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 292
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 292);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 292);
                echo "]\"
                                                       value=\"";
                // line 293
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 293)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 293)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 293);
                }
                echo "\"
                                                       placeholder=\"";
                // line 294
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 294);
                echo "\"
                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                       id=\"input-custom-field";
                // line 296
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 296);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 301
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 301)] ?? null) : null)) {
                    // line 302
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 302)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 303
                echo " </div>
                                    </div>
                                ";
            }
            // line 306
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "                        </fieldset>
                        <fieldset>
                            <legend>";
        // line 309
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 311
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"password\" value=\"";
        // line 313
        echo ($context["password"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 314
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                    ";
        // line 315
        if (($context["error_password"] ?? null)) {
            // line 316
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                                    ";
        }
        // line 317
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 320
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 322
        echo ($context["confirm"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 323
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                                    ";
        // line 324
        if (($context["error_confirm"] ?? null)) {
            // line 325
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                                    ";
        }
        // line 326
        echo " </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>";
        // line 330
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 332
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\"> ";
        // line 333
        if (($context["newsletter"] ?? null)) {
            // line 334
            echo "                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                            ";
            // line 336
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                            ";
            // line 339
            echo ($context["text_no"] ?? null);
            echo "</label>
                                    ";
        } else {
            // line 341
            echo "                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                            ";
            // line 343
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                            ";
            // line 346
            echo ($context["text_no"] ?? null);
            echo "</label>
                                    ";
        }
        // line 347
        echo " </div>
                            </div>
                        </fieldset>
                        ";
        // line 350
        echo ($context["captcha"] ?? null);
        echo "
                        ";
        // line 351
        if (($context["text_agree"] ?? null)) {
            // line 352
            echo "                            <div class=\"buttons\">
                                <div class=\"pull-right\">";
            // line 353
            echo ($context["text_agree"] ?? null);
            echo "
                                    ";
            // line 354
            if (($context["agree"] ?? null)) {
                // line 355
                echo "                                        <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                                    ";
            } else {
                // line 357
                echo "                                        <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                                    ";
            }
            // line 359
            echo "                                    &nbsp;
                                    <input type=\"submit\" value=\"";
            // line 360
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                </div>
                            </div>
                        ";
        } else {
            // line 364
            echo "                            <div class=\"buttons\">
                                <div class=\"pull-right\">
                                    <input type=\"submit\" value=\"";
            // line 366
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                </div>
                            </div>
                        ";
        }
        // line 370
        echo "                    </form>
                    ";
        // line 371
        echo ($context["content_bottom"] ?? null);
        echo "</div>
                ";
        // line 372
        echo ($context["column_right"] ?? null);
        echo "</div>
        </div>

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
        // line 478
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.time').datetimepicker({
        language: '";
        // line 483
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 488
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });
    //--></script>
";
        // line 493
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
        return array (  1195 => 493,  1187 => 488,  1179 => 483,  1171 => 478,  1062 => 372,  1058 => 371,  1055 => 370,  1048 => 366,  1044 => 364,  1037 => 360,  1034 => 359,  1030 => 357,  1026 => 355,  1024 => 354,  1020 => 353,  1017 => 352,  1015 => 351,  1011 => 350,  1006 => 347,  1001 => 346,  995 => 343,  991 => 341,  986 => 339,  980 => 336,  976 => 334,  974 => 333,  970 => 332,  965 => 330,  959 => 326,  953 => 325,  951 => 324,  947 => 323,  943 => 322,  938 => 320,  933 => 317,  927 => 316,  925 => 315,  921 => 314,  917 => 313,  912 => 311,  907 => 309,  903 => 307,  897 => 306,  892 => 303,  886 => 302,  884 => 301,  876 => 296,  871 => 294,  863 => 293,  857 => 292,  848 => 288,  843 => 286,  837 => 284,  834 => 283,  829 => 280,  823 => 279,  821 => 278,  813 => 273,  809 => 272,  801 => 271,  795 => 270,  786 => 266,  781 => 264,  775 => 262,  772 => 261,  767 => 258,  761 => 257,  759 => 256,  751 => 251,  746 => 249,  738 => 248,  732 => 247,  723 => 243,  718 => 241,  712 => 239,  709 => 238,  704 => 235,  698 => 234,  696 => 233,  688 => 232,  682 => 231,  677 => 229,  673 => 228,  669 => 227,  663 => 224,  659 => 223,  653 => 221,  650 => 220,  645 => 217,  639 => 216,  637 => 215,  629 => 214,  625 => 213,  621 => 212,  615 => 211,  607 => 208,  602 => 206,  596 => 204,  593 => 203,  588 => 200,  582 => 199,  580 => 198,  575 => 196,  571 => 195,  563 => 194,  557 => 193,  549 => 190,  544 => 188,  538 => 186,  535 => 185,  530 => 182,  524 => 181,  522 => 180,  519 => 179,  512 => 178,  507 => 177,  503 => 176,  497 => 175,  493 => 173,  488 => 171,  483 => 169,  477 => 168,  473 => 166,  470 => 165,  466 => 164,  461 => 162,  457 => 161,  451 => 159,  448 => 158,  443 => 155,  437 => 154,  435 => 153,  432 => 152,  425 => 151,  420 => 150,  416 => 149,  410 => 148,  406 => 146,  401 => 144,  396 => 142,  390 => 141,  386 => 139,  383 => 138,  379 => 137,  374 => 135,  370 => 134,  364 => 132,  361 => 131,  356 => 128,  350 => 127,  348 => 126,  343 => 123,  337 => 122,  325 => 115,  318 => 110,  308 => 103,  304 => 102,  298 => 98,  295 => 97,  291 => 96,  285 => 93,  280 => 91,  274 => 90,  267 => 88,  262 => 86,  256 => 84,  253 => 83,  249 => 82,  245 => 80,  239 => 79,  237 => 78,  232 => 76,  228 => 75,  223 => 73,  217 => 69,  211 => 68,  209 => 67,  202 => 65,  197 => 63,  192 => 60,  186 => 59,  184 => 58,  179 => 56,  175 => 55,  170 => 53,  165 => 50,  159 => 49,  157 => 48,  152 => 46,  148 => 45,  143 => 43,  132 => 39,  126 => 36,  122 => 35,  117 => 32,  111 => 29,  106 => 27,  101 => 24,  98 => 23,  94 => 22,  90 => 21,  82 => 20,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
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
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-firstname\">{{ entry_firstname }}</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\"
                                           placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\"
                                           class=\"form-control\"/>
                                    {% if error_firstname %}
                                        <div class=\"text-danger\">{{ error_firstname }}</div>
                                    {% endif %} </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">{{ entry_lastname }}</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\"
                                           placeholder=\"{{ entry_lastname }}\"
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
