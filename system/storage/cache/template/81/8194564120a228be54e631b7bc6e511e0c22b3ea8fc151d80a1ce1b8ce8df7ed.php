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
class __TwigTemplate_6b2771c2a9523cf361db3e68b6d899f1e9af72123eba49a1404d26f226fa074f extends \Twig\Template
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
                <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo "
                    <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    <p>";
        // line 14
        echo ($context["text_account_already"] ?? null);
        echo "</p>
                    <form action=\"";
        // line 15
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                        <fieldset id=\"account\">
                            <legend>";
        // line 17
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
                            <div class=\"form-group required\"
                                 style=\"display: ";
        // line 19
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                                <label class=\"col-sm-2 control-label\">";
        // line 20
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 22
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22) == ($context["customer_group_id"] ?? null))) {
                // line 23
                echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 26);
                echo "\"
                                                           checked=\"checked\"/>
                                                    ";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 28);
                echo "</label>
                                            </div>
                                        ";
            } else {
                // line 31
                echo "                                            <div class=\"radio\">
                                                <label>
                                                    <input type=\"radio\" name=\"customer_group_id\"
                                                           value=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 34);
                echo "\"/>
                                                    ";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 35);
                echo "</label>
                                            </div>
                                        ";
            }
            // line 38
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
        // line 42
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 44
        echo ($context["firstname"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 45
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\"
                                           class=\"form-control\"/>
                                    ";
        // line 47
        if (($context["error_firstname"] ?? null)) {
            // line 48
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                                    ";
        }
        // line 49
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 52
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 54
        echo ($context["lastname"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 55
        echo ($context["entry_lastname"] ?? null);
        echo "\"
                                           id=\"input-lastname\" class=\"form-control\"/>
                                    ";
        // line 57
        if (($context["error_lastname"] ?? null)) {
            // line 58
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                                    ";
        }
        // line 59
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 62
        echo ($context["entry_email"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 64
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                           id=\"input-email\" class=\"form-control\"/>
                                    ";
        // line 66
        if (($context["error_email"] ?? null)) {
            // line 67
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                                    ";
        }
        // line 68
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-telephone\">";
        // line 72
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"tel\" name=\"telephone\" value=\"";
        // line 74
        echo ($context["telephone"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 75
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\"
                                           class=\"form-control\"/>
                                    ";
        // line 77
        if (($context["error_telephone"] ?? null)) {
            // line 78
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                                    ";
        }
        // line 79
        echo " </div>
                            </div>
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 82
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 82) == "select")) {
                // line 83
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 85);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 87);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"custom_field[";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 89);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                echo "]\"
                                                    id=\"input-custom-field";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                echo "\"
                                                    class=\"form-control\">
                                                <option value=\"\">";
                // line 92
                echo ($context["text_select"] ?? null);
                echo "</option>


                                                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 96
                    echo "                                                    ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 96)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 96) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null)))) {
                        // line 97
                        echo "



                                                        <option value=\"";
                        // line 101
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 101);
                        echo "\"
                                                                selected=\"selected\">";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 102);
                        echo "</option>





                                                    ";
                    } else {
                        // line 109
                        echo "




                                                        <option value=\"";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                        echo "</option>





                                                    ";
                    }
                    // line 121
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "

                                            </select>
                                            ";
                // line 125
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null)) {
                    // line 126
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 127
                echo "</div>
                                    </div>
                                ";
            }
            // line 130
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "radio")) {
                // line 131
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 133);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div> ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 136));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 137
                    echo "                                                    <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 137) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null)))) {
                        // line 138
                        echo "                                                            <label>
                                                                <input type=\"radio\"
                                                                       name=\"custom_field[";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 140);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                        echo "]\"
                                                                       value=\"";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 141);
                        echo "\"
                                                                       checked=\"checked\"/>
                                                                ";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 143);
                        echo "</label>
                                                        ";
                    } else {
                        // line 145
                        echo "                                                            <label>
                                                                <input type=\"radio\"
                                                                       name=\"custom_field[";
                        // line 147
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 147);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                        echo "]\"
                                                                       value=\"";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 148);
                        echo "\"/>
                                                                ";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 149);
                        echo "</label>
                                                        ";
                    }
                    // line 150
                    echo " </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "</div>
                                            ";
                // line 152
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null)) {
                    // line 153
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 154
                echo "</div>
                                    </div>
                                ";
            }
            // line 157
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 157) == "checkbox")) {
                // line 158
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 160);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div> ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 163));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 164
                    echo "                                                    <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 164), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null)))) {
                        // line 165
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 167
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 167);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                        echo "][]\"
                                                                       value=\"";
                        // line 168
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 168);
                        echo "\"
                                                                       checked=\"checked\"/>
                                                                ";
                        // line 170
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 170);
                        echo "</label>
                                                        ";
                    } else {
                        // line 172
                        echo "                                                            <label>
                                                                <input type=\"checkbox\"
                                                                       name=\"custom_field[";
                        // line 174
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 174);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                        echo "][]\"
                                                                       value=\"";
                        // line 175
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 175);
                        echo "\"/>
                                                                ";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 176);
                        echo "</label>
                                                        ";
                    }
                    // line 177
                    echo " </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo " </div>
                                            ";
                // line 179
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179)] ?? null) : null)) {
                    // line 180
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 181
                echo " </div>
                                    </div>
                                ";
            }
            // line 184
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 184) == "text")) {
                // line 185
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 187);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 189);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\"
                                                   name=\"custom_field[";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 192);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                echo "]\"
                                                   value=\"";
                // line 193
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 193);
                }
                echo "\"
                                                   placeholder=\"";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 194);
                echo "\"
                                                   id=\"input-custom-field";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\"
                                                   class=\"form-control\"/>
                                            ";
                // line 197
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null)) {
                    // line 198
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 199
                echo " </div>
                                    </div>
                                ";
            }
            // line 202
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 202) == "textarea")) {
                // line 203
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 205);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 207);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                    <textarea
                                            name=\"custom_field[";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 210);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                echo "]\"
                                            rows=\"5\" placeholder=\"";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 211);
                echo "\"
                                            id=\"input-custom-field";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                echo "\"
                                            class=\"form-control\">";
                // line 213
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 213);
                }
                echo "</textarea>
                                            ";
                // line 214
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null)) {
                    // line 215
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 216
                echo " </div>
                                    </div>
                                ";
            }
            // line 219
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 219) == "file")) {
                // line 220
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 222);
                echo "\">
                                        <label class=\"col-sm-2 control-label\">";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 223);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <button type=\"button\"
                                                    id=\"button-custom-field";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                echo "\"
                                                    data-loading-text=\"";
                // line 227
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i
                                                        class=\"fa fa-upload\"></i> ";
                // line 228
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                            <input type=\"hidden\"
                                                   name=\"custom_field[";
                // line 230
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 230);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                echo "]\"
                                                   value=\"";
                // line 231
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231)] ?? null) : null);
                    echo " ";
                }
                echo "\"/>
                                            ";
                // line 232
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232)] ?? null) : null)) {
                    // line 233
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 234
                echo "</div>
                                    </div>
                                ";
            }
            // line 237
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 237) == "date")) {
                // line 238
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 240
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 240);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 242);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group date\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 246);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246);
                echo "]\"
                                                       value=\"";
                // line 247
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 247);
                }
                echo "\"
                                                       placeholder=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 248);
                echo "\"
                                                       data-date-format=\"YYYY-MM-DD\"
                                                       id=\"input-custom-field";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 255
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 255)] ?? null) : null)) {
                    // line 256
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 257
                echo " </div>
                                    </div>
                                ";
            }
            // line 260
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 260) == "time")) {
                // line 261
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 263);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 265);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group time\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 269
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 269);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269);
                echo "]\"
                                                       value=\"";
                // line 270
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 270);
                }
                echo "\"
                                                       placeholder=\"";
                // line 271
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 271);
                echo "\" data-date-format=\"HH:mm\"
                                                       id=\"input-custom-field";
                // line 272
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 277
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277)] ?? null) : null)) {
                    // line 278
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 279
                echo " </div>
                                    </div>
                                ";
            }
            // line 282
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 282) == "datetime")) {
                // line 283
                echo "                                    <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 283);
                echo "\"
                                         class=\"form-group custom-field\"
                                         data-sort=\"";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 285);
                echo "\">
                                        <label class=\"col-sm-2 control-label\"
                                               for=\"input-custom-field";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 287);
                echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group datetime\">
                                                <input type=\"text\"
                                                       name=\"custom_field[";
                // line 291
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 291);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 291);
                echo "]\"
                                                       value=\"";
                // line 292
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 292)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 292)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 292);
                }
                echo "\"
                                                       placeholder=\"";
                // line 293
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 293);
                echo "\"
                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                       id=\"input-custom-field";
                // line 295
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 295);
                echo "\"
                                                       class=\"form-control\"/>
                                                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                            ";
                // line 300
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 300)] ?? null) : null)) {
                    // line 301
                    echo "                                                <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 301)] ?? null) : null);
                    echo "</div>
                                            ";
                }
                // line 302
                echo " </div>
                                    </div>
                                ";
            }
            // line 305
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "                        </fieldset>
                        <fieldset>
                            <legend>";
        // line 308
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 310
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"password\" value=\"";
        // line 312
        echo ($context["password"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 313
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                    ";
        // line 314
        if (($context["error_password"] ?? null)) {
            // line 315
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                                    ";
        }
        // line 316
        echo " </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 319
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 321
        echo ($context["confirm"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 322
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                                    ";
        // line 323
        if (($context["error_confirm"] ?? null)) {
            // line 324
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                                    ";
        }
        // line 325
        echo " </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>";
        // line 329
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 331
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\"> ";
        // line 332
        if (($context["newsletter"] ?? null)) {
            // line 333
            echo "                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                                            ";
            // line 335
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                                            ";
            // line 338
            echo ($context["text_no"] ?? null);
            echo "</label>
                                    ";
        } else {
            // line 340
            echo "                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                                            ";
            // line 342
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                                            ";
            // line 345
            echo ($context["text_no"] ?? null);
            echo "</label>
                                    ";
        }
        // line 346
        echo " </div>
                            </div>
                        </fieldset>
                        ";
        // line 349
        echo ($context["captcha"] ?? null);
        echo "
                        ";
        // line 350
        if (($context["text_agree"] ?? null)) {
            // line 351
            echo "                            <div class=\"buttons\">
                                <div class=\"pull-right\">";
            // line 352
            echo ($context["text_agree"] ?? null);
            echo "
                                    ";
            // line 353
            if (($context["agree"] ?? null)) {
                // line 354
                echo "                                        <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                                    ";
            } else {
                // line 356
                echo "                                        <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                                    ";
            }
            // line 358
            echo "                                    &nbsp;
                                    <input type=\"submit\" value=\"";
            // line 359
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                </div>
                            </div>
                        ";
        } else {
            // line 363
            echo "                            <div class=\"buttons\">
                                <div class=\"pull-right\">
                                    <input type=\"submit\" value=\"";
            // line 365
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\"/>
                                </div>
                            </div>
                        ";
        }
        // line 369
        echo "                    </form>
                    ";
        // line 370
        echo ($context["content_bottom"] ?? null);
        echo "</div>
            </div>
            ";
        // line 372
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
        return array (  1195 => 493,  1187 => 488,  1179 => 483,  1171 => 478,  1062 => 372,  1057 => 370,  1054 => 369,  1047 => 365,  1043 => 363,  1036 => 359,  1033 => 358,  1029 => 356,  1025 => 354,  1023 => 353,  1019 => 352,  1016 => 351,  1014 => 350,  1010 => 349,  1005 => 346,  1000 => 345,  994 => 342,  990 => 340,  985 => 338,  979 => 335,  975 => 333,  973 => 332,  969 => 331,  964 => 329,  958 => 325,  952 => 324,  950 => 323,  946 => 322,  942 => 321,  937 => 319,  932 => 316,  926 => 315,  924 => 314,  920 => 313,  916 => 312,  911 => 310,  906 => 308,  902 => 306,  896 => 305,  891 => 302,  885 => 301,  883 => 300,  875 => 295,  870 => 293,  862 => 292,  856 => 291,  847 => 287,  842 => 285,  836 => 283,  833 => 282,  828 => 279,  822 => 278,  820 => 277,  812 => 272,  808 => 271,  800 => 270,  794 => 269,  785 => 265,  780 => 263,  774 => 261,  771 => 260,  766 => 257,  760 => 256,  758 => 255,  750 => 250,  745 => 248,  737 => 247,  731 => 246,  722 => 242,  717 => 240,  711 => 238,  708 => 237,  703 => 234,  697 => 233,  695 => 232,  687 => 231,  681 => 230,  676 => 228,  672 => 227,  668 => 226,  662 => 223,  658 => 222,  652 => 220,  649 => 219,  644 => 216,  638 => 215,  636 => 214,  628 => 213,  624 => 212,  620 => 211,  614 => 210,  606 => 207,  601 => 205,  595 => 203,  592 => 202,  587 => 199,  581 => 198,  579 => 197,  574 => 195,  570 => 194,  562 => 193,  556 => 192,  548 => 189,  543 => 187,  537 => 185,  534 => 184,  529 => 181,  523 => 180,  521 => 179,  518 => 178,  511 => 177,  506 => 176,  502 => 175,  496 => 174,  492 => 172,  487 => 170,  482 => 168,  476 => 167,  472 => 165,  469 => 164,  465 => 163,  460 => 161,  456 => 160,  450 => 158,  447 => 157,  442 => 154,  436 => 153,  434 => 152,  431 => 151,  424 => 150,  419 => 149,  415 => 148,  409 => 147,  405 => 145,  400 => 143,  395 => 141,  389 => 140,  385 => 138,  382 => 137,  378 => 136,  373 => 134,  369 => 133,  363 => 131,  360 => 130,  355 => 127,  349 => 126,  347 => 125,  342 => 122,  336 => 121,  324 => 114,  317 => 109,  307 => 102,  303 => 101,  297 => 97,  294 => 96,  290 => 95,  284 => 92,  279 => 90,  273 => 89,  266 => 87,  261 => 85,  255 => 83,  252 => 82,  248 => 81,  244 => 79,  238 => 78,  236 => 77,  231 => 75,  227 => 74,  222 => 72,  216 => 68,  210 => 67,  208 => 66,  201 => 64,  196 => 62,  191 => 59,  185 => 58,  183 => 57,  178 => 55,  174 => 54,  169 => 52,  164 => 49,  158 => 48,  156 => 47,  151 => 45,  147 => 44,  142 => 42,  131 => 38,  125 => 35,  121 => 34,  116 => 31,  110 => 28,  105 => 26,  100 => 23,  97 => 22,  93 => 21,  89 => 20,  81 => 19,  76 => 17,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  54 => 9,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
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
                <div id=\"content\" class=\"col-lg-6 col-md-8 col-sm-10 login-block register-block\">{{ content_top }}
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
