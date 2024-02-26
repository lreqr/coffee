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

/* coffee/template/account/edit.twig */
class __TwigTemplate_ef1961f37f450f8591ed1b8e59cbd1dece87f8a2176494bb1910db772b43e04b extends \Twig\Template
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

<main>

    <div id=\"account-edit\" class=\"container\">
        ";
        // line 6
        if (($context["error_warning"] ?? null)) {
            // line 7
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
        ";
        }
        // line 9
        echo "        <div class=\"row login-row\">
            <div class=\"login-block-register\">
                <a href=\"";
        // line 11
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a>
            </div>
            <div id=\"content\" class=\"";
        // line 13
        echo ($context["class"] ?? null);
        echo " col-lg-6 col-md-8 col-sm-10 login-block register-block\">";
        echo ($context["content_top"] ?? null);
        echo "
                <h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                <form action=\"";
        // line 15
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                    <fieldset>
                        <legend>";
        // line 17
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 19
        echo ($context["entry_firstname"] ?? null);
        echo " </label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"firstname\" value=\"";
        // line 21
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                                ";
        // line 22
        if (($context["error_firstname"] ?? null)) {
            // line 23
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                                ";
        }
        // line 25
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 28
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"lastname\" value=\"";
        // line 30
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                                ";
        // line 31
        if (($context["error_lastname"] ?? null)) {
            // line 32
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                                ";
        }
        // line 34
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 37
        echo ($context["entry_email"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" name=\"email\" value=\"";
        // line 39
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                                ";
        // line 40
        if (($context["error_email"] ?? null)) {
            // line 41
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                                ";
        }
        // line 43
        echo "                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 46
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 48
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                                ";
        // line 49
        if (($context["error_telephone"] ?? null)) {
            // line 50
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                                ";
        }
        // line 52
        echo "                            </div>
                        </div>
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 55
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 55) == "select")) {
                // line 56
                echo "                                <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 56)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 56);
                echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 57);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"custom_field[";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 59);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 59);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 59);
                echo "\" class=\"form-control\">
                                            <option value=\"\">";
                // line 60
                echo ($context["text_select"] ?? null);
                echo "</option>
                                            ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 62
                    echo "                                                ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 62)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 62) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["account_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 62)] ?? null) : null)))) {
                        // line 63
                        echo "                                                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 63);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 63);
                        echo "</option>
                                                ";
                    } else {
                        // line 65
                        echo "                                                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 65);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 65);
                        echo "</option>
                                                ";
                    }
                    // line 67
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                                        </select>
                                        ";
                // line 69
                if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69)] ?? null) : null)) {
                    // line 70
                    echo "                                            <div class=\"text-danger\">";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null);
                    echo "</div>
                                        ";
                }
                // line 72
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 75
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 75) == "radio")) {
                // line 76
                echo "                                <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 76)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 76);
                echo "\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 77);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div>
                                            ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 81
                    echo "                                                <div class=\"radio\">
                                                    ";
                    // line 82
                    if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 82) == (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["account_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82)] ?? null) : null)))) {
                        // line 83
                        echo "                                                        <label>
                                                            <input type=\"radio\" name=\"custom_field[";
                        // line 84
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 84);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                        echo "\" checked=\"checked\" />
                                                            ";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 85);
                        echo "</label>
                                                    ";
                    } else {
                        // line 87
                        echo "                                                        <label>
                                                            <input type=\"radio\" name=\"custom_field[";
                        // line 88
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 88);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 88);
                        echo "\" />
                                                            ";
                        // line 89
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 89);
                        echo "</label>
                                                    ";
                    }
                    // line 91
                    echo "                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                                        </div>
                                        ";
                // line 94
                if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["error_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null)) {
                    // line 95
                    echo "                                            <div class=\"text-danger\">";
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95)] ?? null) : null);
                    echo "</div>
                                        ";
                }
                // line 97
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 100
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 100) == "checkbox")) {
                // line 101
                echo "                                <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 101)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 101);
                echo "\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 102);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div>
                                            ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 105));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 106
                    echo "                                                <div class=\"checkbox\">
                                                    ";
                    // line 107
                    if (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 107), (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["account_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null)))) {
                        // line 108
                        echo "                                                        <label>
                                                            <input type=\"checkbox\" name=\"custom_field[";
                        // line 109
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 109);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                        echo "\" checked=\"checked\" />
                                                            ";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 110);
                        echo "</label>
                                                    ";
                    } else {
                        // line 112
                        echo "                                                        <label>
                                                            <input type=\"checkbox\" name=\"custom_field[";
                        // line 113
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113);
                        echo "\" />
                                                            ";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                        echo "</label>
                                                    ";
                    }
                    // line 116
                    echo "                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "                                        </div>
                                        ";
                // line 119
                if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null)) {
                    // line 120
                    echo "                                            <div class=\"text-danger\">";
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120)] ?? null) : null);
                    echo "</div>
                                        ";
                }
                // line 122
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 125
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 125) == "text")) {
                // line 126
                echo "                                <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 126)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 126);
                echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 127);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"custom_field[";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 129);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                echo "]\" value=\"";
                if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["account_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null)) {
                    echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 129);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                echo "\" class=\"form-control\" />
                                        ";
                // line 130
                if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["error_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130)] ?? null) : null)) {
                    // line 131
                    echo "                                            <div class=\"text-danger\">";
                    echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null);
                    echo "</div>
                                        ";
                }
                // line 133
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 136
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 136) == "textarea")) {
                // line 137
                echo "                                <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 137)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 137);
                echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 138);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <textarea name=\"custom_field[";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 140);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 140);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                echo "\" class=\"form-control\">";
                if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["account_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null)) {
                    echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["account_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 140);
                }
                echo "</textarea>
                                        ";
                // line 141
                if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["error_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141)] ?? null) : null)) {
                    // line 142
                    echo "                                            <div class=\"text-danger\">";
                    echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142)] ?? null) : null);
                    echo "</div>
                                        ";
                }
                // line 144
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 147
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 147) == "file")) {
                // line 148
                echo "                                <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 148)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 148);
                echo "\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <button type=\"button\" id=\"button-custom-field";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                                        <input type=\"hidden\" name=\"custom_field[";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 152);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "]\" value=\"";
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["code"] ?? null) : null)) {
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["account_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["code"] ?? null) : null);
                    echo " ";
                }
                echo "\" />
                                        <span>";
                // line 153
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["account_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["name"] ?? null) : null);
                echo "</span>
                                        ";
                // line 154
                if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["error_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null)) {
                    // line 155
                    echo "                                            <div class=\"text-danger\">";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null);
                    echo "</div>
                                        ";
                }
                // line 157
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 160
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 160) == "date")) {
                // line 161
                echo "                                <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 161)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 161);
                echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 162);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group date\">
                                            <input type=\"text\" name=\"custom_field[";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 165);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "]\" value=\"";
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["account_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null)) {
                    echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["account_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 165);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 165);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "\" class=\"form-control\" />
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                        ";
                // line 169
                if ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["error_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169)] ?? null) : null)) {
                    // line 170
                    echo "                                            <div class=\"text-danger\">";
                    echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170)] ?? null) : null);
                    echo "</div>
                                        ";
                }
                // line 172
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 175
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 175) == "time")) {
                // line 176
                echo "                                <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 176)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 176);
                echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 177);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group time\">
                                            <input type=\"text\" name=\"custom_field[";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 180);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                echo "]\" value=\"";
                if ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["account_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) {
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["account_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 180);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                echo "\" class=\"form-control\" />
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                        ";
                // line 184
                if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["error_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184)] ?? null) : null)) {
                    // line 185
                    echo "                                            <div class=\"text-danger\">";
                    echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null);
                    echo "</div>
                                        ";
                }
                // line 187
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 190
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 190) == "datetime")) {
                // line 191
                echo "                                <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 191)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 191);
                echo "\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 192);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group datetime\">
                                            <input type=\"text\" name=\"custom_field[";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 195);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "]\" value=\"";
                if ((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["account_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) {
                    echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["account_custom_field"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 195);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\" class=\"form-control\" />
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                        ";
                // line 199
                if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["error_custom_field"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null)) {
                    // line 200
                    echo "                                            <div class=\"text-danger\">";
                    echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["error_custom_field"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null);
                    echo "</div>
                                        ";
                }
                // line 202
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 205
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                    </fieldset>
                    <div class=\"buttons clearfix\">
                        <div class=\"pull-left\"><a href=\"";
        // line 208
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
                        <div class=\"pull-right\">
                            <input type=\"submit\" value=\"";
        // line 210
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('.form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
\t\t\$('.form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('.form-group').length) {
\t\t\$('.form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 295
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 300
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 306
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});
//--></script>
";
        // line 310
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "coffee/template/account/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 310,  850 => 306,  841 => 300,  833 => 295,  745 => 210,  738 => 208,  734 => 206,  728 => 205,  723 => 202,  717 => 200,  715 => 199,  696 => 195,  688 => 192,  679 => 191,  676 => 190,  671 => 187,  665 => 185,  663 => 184,  644 => 180,  636 => 177,  627 => 176,  624 => 175,  619 => 172,  613 => 170,  611 => 169,  592 => 165,  584 => 162,  575 => 161,  572 => 160,  567 => 157,  561 => 155,  559 => 154,  555 => 153,  544 => 152,  536 => 151,  531 => 149,  522 => 148,  519 => 147,  514 => 144,  508 => 142,  506 => 141,  490 => 140,  483 => 138,  474 => 137,  471 => 136,  466 => 133,  460 => 131,  458 => 130,  442 => 129,  435 => 127,  426 => 126,  423 => 125,  418 => 122,  412 => 120,  410 => 119,  407 => 118,  400 => 116,  395 => 114,  387 => 113,  384 => 112,  379 => 110,  371 => 109,  368 => 108,  366 => 107,  363 => 106,  359 => 105,  353 => 102,  344 => 101,  341 => 100,  336 => 97,  330 => 95,  328 => 94,  325 => 93,  318 => 91,  313 => 89,  305 => 88,  302 => 87,  297 => 85,  289 => 84,  286 => 83,  284 => 82,  281 => 81,  277 => 80,  271 => 77,  262 => 76,  259 => 75,  254 => 72,  248 => 70,  246 => 69,  243 => 68,  237 => 67,  229 => 65,  221 => 63,  218 => 62,  214 => 61,  210 => 60,  202 => 59,  195 => 57,  186 => 56,  183 => 55,  179 => 54,  175 => 52,  169 => 50,  167 => 49,  161 => 48,  156 => 46,  151 => 43,  145 => 41,  143 => 40,  137 => 39,  132 => 37,  127 => 34,  121 => 32,  119 => 31,  113 => 30,  108 => 28,  103 => 25,  97 => 23,  95 => 22,  89 => 21,  84 => 19,  79 => 17,  74 => 15,  70 => 14,  64 => 13,  57 => 11,  53 => 9,  47 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<main>

    <div id=\"account-edit\" class=\"container\">
        {% if error_warning %}
            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
        {% endif %}
        <div class=\"row login-row\">
            <div class=\"login-block-register\">
                <a href=\"{{ back }}\" class=\"btn btn-default\">{{ button_back }}</a>
            </div>
            <div id=\"content\" class=\"{{ class }} col-lg-6 col-md-8 col-sm-10 login-block register-block\">{{ content_top }}
                <h1>{{ heading_title }}</h1>
                <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                    <fieldset>
                        <legend>{{ text_your_details }}</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">{{ entry_firstname }} </label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\" />
                                {% if error_firstname %}
                                    <div class=\"text-danger\">{{ error_firstname }}</div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">{{ entry_lastname }}</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\" />
                                {% if error_lastname %}
                                    <div class=\"text-danger\">{{ error_lastname }}</div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
                                {% if error_email %}
                                    <div class=\"text-danger\">{{ error_email }}</div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">{{ entry_telephone }}</label>
                            <div class=\"col-sm-10\">
                                <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\" />
                                {% if error_telephone %}
                                    <div class=\"text-danger\">{{ error_telephone }}</div>
                                {% endif %}
                            </div>
                        </div>
                        {% for custom_field in custom_fields %}
                            {% if custom_field.type == 'select' %}
                                <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">
                                            <option value=\"\">{{ text_select }}</option>
                                            {% for custom_field_value in custom_field.custom_field_value %}
                                                {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}
                                                    <option value=\"{{ custom_field_value.custom_field_value_id }}\" selected=\"selected\">{{ custom_field_value.name }}</option>
                                                {% else %}
                                                    <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                                                {% endif %}
                                            {% endfor %}
                                        </select>
                                        {% if error_custom_field[custom_field.custom_field_id] %}
                                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            {% if custom_field.type == 'radio' %}
                                <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
                                    <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                    <div class=\"col-sm-10\">
                                        <div>
                                            {% for custom_field_value in custom_field.custom_field_value %}
                                                <div class=\"radio\">
                                                    {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}
                                                        <label>
                                                            <input type=\"radio\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                                                            {{ custom_field_value.name }}</label>
                                                    {% else %}
                                                        <label>
                                                            <input type=\"radio\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                                                            {{ custom_field_value.name }}</label>
                                                    {% endif %}
                                                </div>
                                            {% endfor %}
                                        </div>
                                        {% if error_custom_field[custom_field.custom_field_id] %}
                                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            {% if custom_field.type == 'checkbox' %}
                                <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
                                    <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                    <div class=\"col-sm-10\">
                                        <div>
                                            {% for custom_field_value in custom_field.custom_field_value %}
                                                <div class=\"checkbox\">
                                                    {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}
                                                        <label>
                                                            <input type=\"checkbox\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                                                            {{ custom_field_value.name }}</label>
                                                    {% else %}
                                                        <label>
                                                            <input type=\"checkbox\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                                                            {{ custom_field_value.name }}</label>
                                                    {% endif %}
                                                </div>
                                            {% endfor %}
                                        </div>
                                        {% if error_custom_field[custom_field.custom_field_id] %}
                                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            {% if custom_field.type == 'text' %}
                                <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                                        {% if error_custom_field[custom_field.custom_field_id] %}
                                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            {% if custom_field.type == 'textarea' %}
                                <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                    <div class=\"col-sm-10\">
                                        <textarea name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                                        {% if error_custom_field[custom_field.custom_field_id] %}
                                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            {% if custom_field.type == 'file' %}
                                <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
                                    <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                                    <div class=\"col-sm-10\">
                                        <button type=\"button\" id=\"button-custom-field{{ custom_field.custom_field_id }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>
                                        <input type=\"hidden\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id]['code'] %}{{ account_custom_field[custom_field.custom_field_id]['code'] }} {% endif %}\" />
                                        <span>{{ account_custom_field[custom_field.custom_field_id]['name'] }}</span>
                                        {% if error_custom_field[custom_field.custom_field_id] %}
                                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            {% if custom_field.type == 'date' %}
                                <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group date\">
                                            <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                        {% if error_custom_field[custom_field.custom_field_id] %}
                                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            {% if custom_field.type == 'time' %}
                                <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group time\">
                                            <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                        {% if error_custom_field[custom_field.custom_field_id] %}
                                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                            {% if custom_field.type == 'datetime' %}
                                <div class=\"form-group{% if custom_field.required %} required {% endif %} custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group datetime\">
                                            <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                                            <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                                        {% if error_custom_field[custom_field.custom_field_id] %}
                                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </fieldset>
                    <div class=\"buttons clearfix\">
                        <div class=\"pull-left\"><a href=\"{{ back }}\" class=\"btn btn-default\">{{ button_back }}</a></div>
                        <div class=\"pull-right\">
                            <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('.form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
\t\t\$('.form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('.form-group').length) {
\t\t\$('.form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: false
});
//--></script>
{{ footer }}
", "coffee/template/account/edit.twig", "");
    }
}
