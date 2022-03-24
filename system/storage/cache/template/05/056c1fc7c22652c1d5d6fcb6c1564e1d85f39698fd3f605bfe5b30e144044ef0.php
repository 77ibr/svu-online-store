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

/* catalog/view/template/checkout/register.twig */
class __TwigTemplate_3b885ae0b4420d35a67d34ea4e4954af129a851490e451aa4b5bb143dda73c3f extends Template
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
        echo "<form id=\"form-register\">
  <p>";
        // line 2
        echo ($context["text_login"] ?? null);
        echo "</p>
  <fieldset>
    <legend>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</legend>
    <div class=\"row\">

      ";
        // line 7
        if (($context["config_checkout_guest"] ?? null)) {
            // line 8
            echo "        <div class=\"col mb-3 required\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"";
            // line 10
            if (($context["account"] ?? null)) {
                echo " checked";
            }
            echo "/> <label for=\"input-register\" class=\"form-check-label\">";
            echo ($context["text_register"] ?? null);
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"";
            // line 13
            if ( !($context["account"] ?? null)) {
                echo " checked";
            }
            echo "/> <label for=\"input-guest\" class=\"form-check-label\">";
            echo ($context["text_guest"] ?? null);
            echo "</label>
          </div>
        </div>
      ";
        }
        // line 17
        echo "
      <div class=\"col mb-3";
        // line 18
        echo (((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) <= 1)) ? (" d-none") : (""));
        echo "\">
        <label class=\"form-label\">";
        // line 19
        echo ($context["entry_customer_group"] ?? null);
        echo "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 21
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 21);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 21) == ($context["customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 21);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </select>
      </div>

    </div>

    <div class=\"row  row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3 required\">
        <label for=\"input-firstname\" class=\"form-label\">";
        // line 30
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-lastname\" class=\"form-label\">";
        // line 34
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-email\" class=\"form-label\">";
        // line 38
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>

      ";
        // line 42
        if (($context["config_telephone_display"] ?? null)) {
            // line 43
            echo "        <div class=\"col mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
          <label for=\"input-telephone\" class=\"form-label\">";
            // line 44
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"telephone\" value=\"";
            // line 45
            echo ($context["telephone"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 49
        echo "
      ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 51
            echo "
        ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 52) == "account")) {
                // line 53
                echo "
          ";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 54) == "select")) {
                    // line 55
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 55);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 56);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 56);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 56);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 56);
                    echo "]\" id=\"input-customer-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 56);
                    echo "\" class=\"form-select\">
                <option value=\"\">";
                    // line 57
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 58));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 59
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 59);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 59)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 59) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 59)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 59);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "              </select>
              <div id=\"error-custom-field-";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 62);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 65
                echo "
          ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 66) == "radio")) {
                    // line 67
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                    echo "\">
              <label class=\"form-label\">";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 68);
                    echo "</label>
              <div id=\"input-custom-field-";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                    echo "\">
                ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 71
                        echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 72);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 72);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "              </div>
              <div id=\"error-custom-field-";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 79
                echo "
          ";
                // line 80
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 80) == "checkbox")) {
                    // line 81
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                    echo "\">
              <label class=\"form-label\">";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 82);
                    echo "</label>
              <div id=\"input-custom-field-";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                    echo "\">
                ";
                    // line 84
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 84));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 85
                        echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 86);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "              </div>
              <div id=\"error-custom-field-";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 93
                echo "
          ";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 94) == "text")) {
                    // line 95
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 96);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    echo "]\" value=\"";
                    if ((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null)) {
                        echo (($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 96);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    echo "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 100
                echo "
          ";
                // line 101
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 101) == "textarea")) {
                    // line 102
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 103);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 103);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 103);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    echo "\" class=\"form-control\">";
                    if ((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103)] ?? null) : null)) {
                        echo (($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 103);
                    }
                    echo "</textarea>
              <div id=\"error-custom-field-";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 107
                echo "
          ";
                // line 108
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 108) == "file")) {
                    // line 109
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 110);
                    echo "</label>
              <div>
                <button type=\"button\" data-loading-text=\"";
                    // line 112
                    echo ($context["text_loading"] ?? null);
                    echo "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "]\" value=\"";
                    if ((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null)) {
                        echo (($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null);
                    }
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\"/>
              </div>
              <div id=\"error-custom-field-";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 118
                echo "
          ";
                // line 119
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 119) == "date")) {
                    // line 120
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 123);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    echo "]\" value=\"";
                    if ((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null)) {
                        echo (($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 129
                echo "
          ";
                // line 130
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "time")) {
                    // line 131
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 132);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 134);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    echo "]\" value=\"";
                    if ((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134)] ?? null) : null)) {
                        echo (($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 134);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 140
                echo "
          ";
                // line 141
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 141) == "datetime")) {
                    // line 142
                    echo "            <div class=\"col mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                    echo "\">
              <label for=\"input-custom-field-";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 143);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 145);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                    echo "]\" value=\"";
                    if ((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null)) {
                        echo (($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 145);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                    echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-custom-field-";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 151
                echo "
        ";
            }
            // line 153
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "    </div>
  </fieldset>

  ";
        // line 157
        if (($context["config_checkout_address"] ?? null)) {
            // line 158
            echo "    <fieldset>
      <legend>";
            // line 159
            echo ($context["text_payment_address"] ?? null);
            echo "</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
            // line 162
            echo ($context["entry_company"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_company\" value=\"";
            echo ($context["payment_company"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
            // line 165
            echo ($context["entry_address_1"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_address_1\" value=\"";
            echo ($context["payment_address_1"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
            // line 169
            echo ($context["entry_address_2"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_address_2\" value=\"";
            echo ($context["payment_address_2"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">";
            // line 172
            echo ($context["entry_city"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_city\" value=\"";
            echo ($context["payment_city"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
            // line 176
            echo ($context["entry_postcode"] ?? null);
            echo "</label> <input type=\"text\" name=\"payment_postcode\" value=\"";
            echo ($context["payment_postcode"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">";
            // line 180
            echo ($context["entry_country"] ?? null);
            echo "</label> <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"\">";
            // line 181
            echo ($context["text_select"] ?? null);
            echo "</option>
            ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 183
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 183);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 183) == ($context["payment_country_id"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 183);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
            // line 189
            echo ($context["entry_zone"] ?? null);
            echo "</label> <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\" data-oc-value=\"";
            echo ($context["payment_zone_id"] ?? null);
            echo "\"></select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 193
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 193) == "address")) {
                    // line 194
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 194) == "select")) {
                        // line 195
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 195)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 196
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                        echo "</label> <select name=\"payment_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 196);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                        echo "]\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                        echo "\" class=\"form-select\">
                  <option value=\"\">";
                        // line 197
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                  ";
                        // line 198
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 198));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 199
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 199);
                            echo "\"";
                            if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 199) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null)))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 199);
                            echo "</option>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 201
                        echo "                </select>
                <div id=\"error-payment-custom-field-";
                        // line 202
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 205
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 205) == "radio")) {
                        // line 206
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 206)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                        echo "\">
                <label class=\"form-label\">";
                        // line 207
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 207);
                        echo "</label>
                <div id=\"input-payment-custom-field-";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                        echo "\">
                  ";
                        // line 209
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 209));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 210
                            echo "                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[";
                            // line 211
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 211);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 211);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 211);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 211) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 211);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 211);
                            echo "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 214
                        echo "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 215
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 218
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 218) == "checkbox")) {
                        // line 219
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 219)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                        echo "\">
                <label class=\"form-label\">";
                        // line 220
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 220);
                        echo "</label>
                <div id=\"input-payment-custom-field-";
                        // line 221
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                        echo "\">
                  ";
                        // line 222
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 222));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 223
                            echo "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[";
                            // line 224
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 224);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 224);
                            echo "\" id=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 224);
                            echo "\" class=\"form-check-input\"";
                            if (((($__internal_compile_22 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 224), (($__internal_compile_23 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224)] ?? null) : null)))) {
                                echo " checked";
                            }
                            echo "/> <label for=\"input-payment-custom-value-";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 224);
                            echo "\" class=\"form-check-label\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 224);
                            echo "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 227
                        echo "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 228
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 231
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 231) == "text")) {
                        // line 232
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 232)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 233
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 233);
                        echo "</label> <input type=\"text\" name=\"payment_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 233);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                        echo "]\" value=\"";
                        if ((($__internal_compile_24 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null)) {
                            echo (($__internal_compile_25 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 233);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 233);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                        echo "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 234
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 237
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 237) == "textarea")) {
                        // line 238
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 238)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 239
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 239);
                        echo "</label> <textarea name=\"payment_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 239);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 239);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                        echo "\" class=\"form-control\">";
                        if ((($__internal_compile_26 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239)] ?? null) : null)) {
                            echo (($__internal_compile_27 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 239);
                        }
                        echo "</textarea>
                <div id=\"error-payment-custom-field-";
                        // line 240
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 243
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 243) == "file")) {
                        // line 244
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 244)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244);
                        echo "\">
                <label class=\"form-label\">";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 245);
                        echo "</label>
                <div>
                  <button type=\"button\" data-loading-text=\"";
                        // line 247
                        echo ($context["text_loading"] ?? null);
                        echo "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        echo ($context["upload"] ?? null);
                        echo "\" data-oc-size-max=\"";
                        echo ($context["config_file_max_size"] ?? null);
                        echo "\" data-oc-size-error=\"";
                        echo ($context["error_upload_size"] ?? null);
                        echo "\" data-oc-target=\"#input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                        echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                  <input type=\"hidden\" name=\"payment_custom_field[";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 248);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                        echo "]\" value=\"";
                        if ((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248)] ?? null) : null)) {
                            echo (($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248)] ?? null) : null);
                        }
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                        echo "\"/>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 250
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 253
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 253) == "date")) {
                        // line 254
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 254)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 255
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 255);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 255);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 257
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 257);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                        echo "]\" value=\"";
                        if ((($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257)] ?? null) : null)) {
                            echo (($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 257);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 257);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                        echo "\" class=\"form-control date\"/>
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 260
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 263
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 263) == "time")) {
                        // line 264
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 264)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 265
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 265);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 267
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 267);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267);
                        echo "]\" value=\"";
                        if ((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267)] ?? null) : null)) {
                            echo (($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 267);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 267);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267);
                        echo "\" class=\"form-control time\"/>
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 270
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 273
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 273) == "datetime")) {
                        // line 274
                        echo "              <div class=\"col mb-3";
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 274)) {
                            echo " required";
                        }
                        echo " custom-field custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                        echo "\">
                <label for=\"input-payment-custom-field-";
                        // line 275
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 275);
                        echo "\" class=\"form-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 275);
                        echo "</label>
                <div class=\"input-group\">
                  <input type=\"text\" name=\"payment_custom_field[";
                        // line 277
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 277);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277);
                        echo "]\" value=\"";
                        if ((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277)] ?? null) : null)) {
                            echo (($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277)] ?? null) : null);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 277);
                        }
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 277);
                        echo "\" id=\"input-payment-custom-field-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277);
                        echo "\" class=\"form-control datetime\"/>
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 280
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280);
                        echo "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 283
                    echo "          ";
                }
                // line 284
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "        ";
            if (($context["shipping_required"] ?? null)) {
                // line 286
                echo "          <div class=\"col mb-3\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"address_match\" value=\"1\" id=\"input-address-match\" class=\"form-check-input\" checked/> <label for=\"input-address-match\" class=\"form-check-label\">";
                // line 288
                echo ($context["entry_match"] ?? null);
                echo "</label>
            </div>
          </div>
        ";
            }
            // line 292
            echo "      </div>
    </fieldset>
  ";
        }
        // line 295
        echo "
  <fieldset id=\"shipping-address\" style=\"display: ";
        // line 296
        if ( !($context["config_checkout_address"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <legend>";
        // line 297
        echo ($context["text_shipping_address"] ?? null);
        echo "</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      ";
        // line 299
        if (($context["config_checkout_address"] ?? null)) {
            // line 300
            echo "        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
            // line 301
            echo ($context["entry_firstname"] ?? null);
            echo "</label> <input type=\"text\" name=\"shipping_firstname\" value=\"";
            echo ($context["shipping_firstname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
            // line 305
            echo ($context["entry_lastname"] ?? null);
            echo "</label> <input type=\"text\" name=\"shipping_lastname\" value=\"";
            echo ($context["shipping_lastname"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 309
        echo "      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 310
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_company\" value=\"";
        echo ($context["shipping_company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 313
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_address_1\" value=\"";
        echo ($context["shipping_address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 317
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_address_2\" value=\"";
        echo ($context["shipping_address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 320
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_city\" value=\"";
        echo ($context["shipping_city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 324
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"shipping_postcode\" value=\"";
        echo ($context["shipping_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 328
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
          <option value=\"\">";
        // line 329
        echo ($context["text_select"] ?? null);
        echo "</option>
          ";
        // line 330
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 331
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 331);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 331) == ($context["shipping_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 331);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "        </select>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 337
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\" data-oc-value=\"";
        echo ($context["shipping_zone_id"] ?? null);
        echo "\"></select>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 341
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 341) == "address")) {
                // line 342
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 342) == "select")) {
                    // line 343
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 343)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 343);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 344
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 344);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 344);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344);
                    echo "]\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344);
                    echo "\" class=\"form-select\">
                <option value=\"\">";
                    // line 345
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 346
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 346));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 347
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 347);
                        echo "\"";
                        if (((($__internal_compile_36 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 347)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 347) == (($__internal_compile_37 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 347)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 347);
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 349
                    echo "              </select>
              <div id=\"error-shipping-custom-field-";
                    // line 350
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 350);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 353
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 353) == "radio")) {
                    // line 354
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 354)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 354);
                    echo "\">
              <label class=\"form-label\">";
                    // line 355
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 355);
                    echo "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 356
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 356);
                    echo "\">
                ";
                    // line 357
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 357));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 358
                        echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 359
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 359);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 359);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 359);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 359);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 359)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 359), (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 359)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 359);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 359);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 362
                    echo "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 363
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 363);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 366
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 366) == "checkbox")) {
                    // line 367
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 367)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 367);
                    echo "\">
              <label class=\"form-label\">";
                    // line 368
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 368);
                    echo "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 369
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 369);
                    echo "\">
                ";
                    // line 370
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 370));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 371
                        echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 372
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 372);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 372);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 372);
                        echo "\" id=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 372);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 372)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 372), (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 372)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-shipping-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 372);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 372);
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 375
                    echo "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 376
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 376);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 379
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 379) == "text")) {
                    // line 380
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 380)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 381
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 381);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 381);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 381);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 381);
                    echo "]\" value=\"";
                    if ((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 381)] ?? null) : null)) {
                        echo (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 381)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 381);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 381);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 381);
                    echo "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 382
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 382);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 385
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 385) == "textarea")) {
                    // line 386
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 386)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 386);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 387
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 387);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 387);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387);
                    echo "]\" rows=\"5\" placeholder=\"";
                    if ((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387)] ?? null) : null)) {
                        echo (($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 387);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 387);
                    echo "</textarea>
              <div id=\"error-shipping-custom-field-";
                    // line 388
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 388);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 391
                echo "
          ";
                // line 392
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 392) == "file")) {
                    // line 393
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 393)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                    echo "\">
              <label class=\"form-label\">";
                    // line 394
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 394);
                    echo "</label>
              <div>
                <button type=\"button\" data-loading-text=\"";
                    // line 396
                    echo ($context["text_loading"] ?? null);
                    echo "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 397
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 397);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 397);
                    echo "]\" value=\"";
                    if ((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 397)] ?? null) : null)) {
                        echo (($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 397)] ?? null) : null);
                    }
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 397);
                    echo "\"/>
                <div id=\"error-shipping-custom-field-";
                    // line 398
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 398);
                    echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
                }
                // line 402
                echo "
          ";
                // line 403
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 403) == "date")) {
                    // line 404
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 404)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 405
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 405);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 405);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 407
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 407);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 407);
                    echo "]\" value=\"";
                    if ((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 407)] ?? null) : null)) {
                        echo (($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 407)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 407);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 407);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 407);
                    echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 410
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 410);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 413
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 413) == "time")) {
                    // line 414
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 414)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 414);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 415
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 415);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 417
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 417);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417);
                    echo "]\" value=\"";
                    if ((($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417)] ?? null) : null)) {
                        echo (($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 417);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 417);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417);
                    echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 420
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 420);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 423
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 423) == "datetime")) {
                    // line 424
                    echo "            <div class=\"col mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 424)) {
                        echo " required";
                    }
                    echo " custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 424);
                    echo "\">
              <label for=\"input-shipping-custom-field-";
                    // line 425
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 425);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 425);
                    echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                    // line 427
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 427);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 427);
                    echo "]\" value=\"";
                    if ((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 427)] ?? null) : null)) {
                        echo (($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 427)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 427);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 427);
                    echo "\" id=\"input-shipping-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 427);
                    echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 430);
                    echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 433
                echo "        ";
            }
            // line 434
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 435
        echo "    </div>
  </fieldset>
  <div id class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-3 required\">
      <fieldset>
        <legend>";
        // line 440
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
        <div class=\"row\">
          <div class=\"col mb-3 required\">
            <label for=\"input-password\" class=\"form-label\">";
        // line 443
        echo ($context["entry_password"] ?? null);
        echo "</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3 required\">";
        // line 449
        echo ($context["captcha"] ?? null);
        echo "</div>
    <div class=\"col mb-3\">
      <div class=\"form-check\">
        <label for=\"input-newsletter\" class=\"form-check-label\">";
        // line 452
        echo ($context["entry_newsletter"] ?? null);
        echo "</label> <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
      </div>
      ";
        // line 454
        if (($context["text_agree"] ?? null)) {
            // line 455
            echo "        <div id=\"agree\" class=\"form-check\">
          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"/> <label class=\"form-check-label\">";
            // line 456
            echo ($context["text_agree"] ?? null);
            echo "</label>
        </div>
      ";
        }
        // line 459
        echo "      <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
// Account
\$('input[name=\\'account\\']').on('click', function () {
    if (\$(this).val() == 1) {
        \$('#password').removeClass('d-none');
    } else {
        // If guest hide password field
        \$('#password').addClass('d-none');
    }

    if (\$(this).val() == 1) {
        \$('#agree').removeClass('d-none');
    } else {
        // If guest hide register agree field
        \$('#agree').addClass('d-none');
    }
});

\$('input[name=\\'account\\']:checked').trigger('click');

// Customer Group
\$('#input-customer-group').on('change', function () {
    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=account/custom_field&language=";
        // line 489
        echo ($context["language"] ?? null);
        echo "&customer_group_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                \$('.custom-field').addClass('d-none');
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('.custom-field-' + custom_field['custom_field_id']).removeClass('d-none');

                    if (custom_field['required']) {
                        \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-address-match').on('change', function () {
    if (\$(this).prop('checked')) {
        \$('#shipping-address').hide();
    } else {
        \$('#shipping-address').show();
    }
});

\$('#form-register').on('submit', function (e) {
    e.preventDefault();

    var element = this;

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=checkout/register|save&language=";
        // line 535
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$('#form-register').serialize(),
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function () {
                \$(element).button('loading');
            },
            complete: function () {
                \$(element).button('reset');
            },
            success: function (json) {
                \$('#form-register').find('.is-invalid').removeClass('is-invalid');
                \$('#form-register').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    if (\$('#input-register').prop('checked')) {
                        \$('input[name=\\'account\\']').prop('disabled', true);
                        \$('#input-customer-group').prop('disabled', true);
                        \$('#input-password').prop('disabled', true);
                        \$('#input-captcha').prop('disabled', true);
                        \$('#input-register-agree').prop('disabled', true);
                    }

                  ";
        // line 576
        if (($context["shipping_required"] ?? null)) {
            // line 577
            echo "                    \$('#button-shipping-method').trigger('click');
                  ";
        } else {
            // line 579
            echo "                    \$('#button-payment-method').trigger('click');
                  ";
        }
        // line 581
        echo "                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').on('change', function () {
    var element = this;
    var type = \$(this).attr('name').slice(0, -11);

    console.log(type);

    chain.attach(function () {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 598
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-' + type + '-country').val(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).prop('disabled', true);
            },
            complete: function () {
                \$(element).prop('disabled', false);
            },
            success: function (json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-' + type + '-postcode').parent().addClass('required');
                } else {
                    \$('#input-' + type + '-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 613
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$('#input-' + type + '-zone').attr('data-oc-value')) {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 626
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#input-' + type + '-zone').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').trigger('change');
//--></script>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2006 => 626,  1990 => 613,  1972 => 598,  1953 => 581,  1949 => 579,  1945 => 577,  1943 => 576,  1899 => 535,  1850 => 489,  1816 => 459,  1810 => 456,  1807 => 455,  1805 => 454,  1800 => 452,  1794 => 449,  1783 => 443,  1777 => 440,  1770 => 435,  1764 => 434,  1761 => 433,  1755 => 430,  1737 => 427,  1730 => 425,  1721 => 424,  1718 => 423,  1712 => 420,  1694 => 417,  1687 => 415,  1678 => 414,  1675 => 413,  1669 => 410,  1651 => 407,  1644 => 405,  1635 => 404,  1633 => 403,  1630 => 402,  1623 => 398,  1611 => 397,  1597 => 396,  1592 => 394,  1583 => 393,  1581 => 392,  1578 => 391,  1572 => 388,  1552 => 387,  1543 => 386,  1540 => 385,  1534 => 382,  1514 => 381,  1505 => 380,  1502 => 379,  1496 => 376,  1493 => 375,  1470 => 372,  1467 => 371,  1463 => 370,  1459 => 369,  1455 => 368,  1446 => 367,  1443 => 366,  1437 => 363,  1434 => 362,  1411 => 359,  1408 => 358,  1404 => 357,  1400 => 356,  1396 => 355,  1387 => 354,  1384 => 353,  1378 => 350,  1375 => 349,  1360 => 347,  1356 => 346,  1352 => 345,  1340 => 344,  1331 => 343,  1328 => 342,  1325 => 341,  1321 => 340,  1313 => 337,  1307 => 333,  1292 => 331,  1288 => 330,  1284 => 329,  1280 => 328,  1269 => 324,  1258 => 320,  1248 => 317,  1237 => 313,  1227 => 310,  1224 => 309,  1213 => 305,  1202 => 301,  1199 => 300,  1197 => 299,  1192 => 297,  1184 => 296,  1181 => 295,  1176 => 292,  1169 => 288,  1165 => 286,  1162 => 285,  1156 => 284,  1153 => 283,  1147 => 280,  1129 => 277,  1122 => 275,  1113 => 274,  1110 => 273,  1104 => 270,  1086 => 267,  1079 => 265,  1070 => 264,  1067 => 263,  1061 => 260,  1043 => 257,  1036 => 255,  1027 => 254,  1024 => 253,  1018 => 250,  1005 => 248,  991 => 247,  986 => 245,  977 => 244,  974 => 243,  968 => 240,  948 => 239,  939 => 238,  936 => 237,  930 => 234,  910 => 233,  901 => 232,  898 => 231,  892 => 228,  889 => 227,  866 => 224,  863 => 223,  859 => 222,  855 => 221,  851 => 220,  842 => 219,  839 => 218,  833 => 215,  830 => 214,  807 => 211,  804 => 210,  800 => 209,  796 => 208,  792 => 207,  783 => 206,  780 => 205,  774 => 202,  771 => 201,  756 => 199,  752 => 198,  748 => 197,  736 => 196,  727 => 195,  724 => 194,  721 => 193,  717 => 192,  709 => 189,  703 => 185,  688 => 183,  684 => 182,  680 => 181,  676 => 180,  665 => 176,  654 => 172,  644 => 169,  633 => 165,  623 => 162,  617 => 159,  614 => 158,  612 => 157,  607 => 154,  601 => 153,  597 => 151,  591 => 148,  573 => 145,  566 => 143,  561 => 142,  559 => 141,  556 => 140,  550 => 137,  532 => 134,  525 => 132,  520 => 131,  518 => 130,  515 => 129,  509 => 126,  491 => 123,  484 => 121,  479 => 120,  477 => 119,  474 => 118,  468 => 115,  455 => 113,  441 => 112,  434 => 110,  429 => 109,  427 => 108,  424 => 107,  418 => 104,  398 => 103,  393 => 102,  391 => 101,  388 => 100,  382 => 97,  362 => 96,  357 => 95,  355 => 94,  352 => 93,  346 => 90,  343 => 89,  320 => 86,  317 => 85,  313 => 84,  309 => 83,  305 => 82,  300 => 81,  298 => 80,  295 => 79,  289 => 76,  286 => 75,  263 => 72,  260 => 71,  256 => 70,  252 => 69,  248 => 68,  243 => 67,  241 => 66,  238 => 65,  232 => 62,  229 => 61,  214 => 59,  210 => 58,  206 => 57,  194 => 56,  189 => 55,  187 => 54,  184 => 53,  182 => 52,  179 => 51,  175 => 50,  172 => 49,  163 => 45,  159 => 44,  152 => 43,  150 => 42,  139 => 38,  128 => 34,  117 => 30,  108 => 23,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  78 => 17,  67 => 13,  57 => 10,  53 => 8,  51 => 7,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/register.twig", "C:\\xampp\\htdocs\\opencart\\upload\\catalog\\view\\template\\checkout\\register.twig");
    }
}
