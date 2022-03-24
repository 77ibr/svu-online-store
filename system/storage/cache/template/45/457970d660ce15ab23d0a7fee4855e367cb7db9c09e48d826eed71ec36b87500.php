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

/* catalog/view/template/checkout/shipping_address.twig */
class __TwigTemplate_97bbe83054a068c5b340d4d88f9bb9744102362ad60a4b8dc3580de40b8ae96c extends Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  <div id=\"shipping-addresses\" style=\"display: ";
        // line 3
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"1\" id=\"input-shipping-existing\" class=\"form-check-input\"";
        // line 5
        if (($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shipping-existing\" class=\"form-check-label\">";
        echo ($context["text_address_existing"] ?? null);
        echo "</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"0\" id=\"input-shipping-new\" class=\"form-check-input\"";
        // line 8
        if ( !($context["addresses"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shipping-new\" class=\"form-check-label\">";
        echo ($context["text_address_new"] ?? null);
        echo "</label>
    </div>
  </div>
  <div id=\"shipping-existing\" style=\"display: ";
        // line 11
        if (($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <select name=\"address_id\" id=\"input-shipping-address\" class=\"form-select\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 14
            echo "        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 14);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 14) == ($context["address_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 14);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 14);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 14);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 14);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 14);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 14);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </select>
  </div>
  <br/>
  <div id=\"shipping-new\" style=\"display: ";
        // line 19
        if ( !($context["addresses"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
    <form id=\"form-shipping-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 24
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 29
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3\">
          <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 34
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\"/>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 38
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
          <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3\">
          <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 43
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 47
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\"/>
          <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 52
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
          <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 57
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-select\">
            <option value=\"\">";
        // line 58
        echo ($context["text_select"] ?? null);
        echo "</option>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 60
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 60);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 60) == ($context["country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 60);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "          </select>
          <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
        </div>

        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 67
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-select\"></select>
          <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
        </div>

        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 72
            echo "
          ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 73) == "select")) {
                // line 74
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 74)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 75);
                echo "</label> <select name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 75);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                echo "]\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                echo "\" class=\"form-select\">
                <option value=\"\">";
                // line 76
                echo ($context["text_select"] ?? null);
                echo "</option>
                ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 78
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 78);
                    echo "\"";
                    if (((($__internal_compile_0 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 78) == (($__internal_compile_1 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78)] ?? null) : null)))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 78);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "              </select>
              <div id=\"error-shipping-custom-field-";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 84
            echo "
          ";
            // line 85
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 85) == "radio")) {
                // line 86
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 86)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                echo "\">
              <label class=\"form-label\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 87);
                echo "</label>
              <div id=\"input-shipping-custom-field-";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                echo "\">
                ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 89));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 90
                    echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 91);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91);
                    echo "\" id=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_2 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91), (($__internal_compile_3 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 91);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 98
            echo "
          ";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 99) == "checkbox")) {
                // line 100
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 100)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                echo "\">
              <label class=\"form-label\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                echo "</label>
              <div id=\"input-shipping-custom-field-";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                echo "\">
                ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 103));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 104
                    echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 105);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 105);
                    echo "\" id=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 105);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_4 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 105), (($__internal_compile_5 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-shipping-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 105);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 105);
                    echo "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 112
            echo "
          ";
            // line 113
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 113) == "text")) {
                // line 114
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 114)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 115);
                echo "</label> <input type=\"text\" name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 115);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                echo "]\" value=\"";
                if ((($__internal_compile_6 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115)] ?? null) : null)) {
                    echo (($__internal_compile_7 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 115);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 115);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                echo "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 119
            echo "
          ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 120) == "textarea")) {
                // line 121
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 121)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                echo "</label> <textarea name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 122);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "]\" rows=\"5\" placeholder=\"";
                if ((($__internal_compile_8 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)) {
                    echo (($__internal_compile_9 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 122);
                }
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 122);
                echo "</textarea>
              <div id=\"error-shipping-custom-field-";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 126
            echo "
          ";
            // line 127
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "file")) {
                // line 128
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 128)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                echo "\">
              <label class=\"form-label\">";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                echo "</label>
              <div>
                <button type=\"button\" data-loading-text=\"";
                // line 131
                echo ($context["text_loading"] ?? null);
                echo "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                <input type=\"hidden\" name=\"custom_field[";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 132);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "]\" value=\"";
                if ((($__internal_compile_10 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null)) {
                    echo (($__internal_compile_11 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null);
                }
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "\"/>
                <div id=\"error-shipping-custom-field-";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 137
            echo "
          ";
            // line 138
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 138) == "date")) {
                // line 139
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 139)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 140);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 142);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "]\" value=\"";
                if ((($__internal_compile_12 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142)] ?? null) : null)) {
                    echo (($__internal_compile_13 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 142);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 148
            echo "
          ";
            // line 149
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 149) == "time")) {
                // line 150
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 150)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 153);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                echo "]\" value=\"";
                if ((($__internal_compile_14 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null)) {
                    echo (($__internal_compile_15 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 153);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                echo "\" class=\"form-control time\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 159
            echo "
          ";
            // line 160
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 160) == "datetime")) {
                // line 161
                echo "            <div class=\"col mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 161)) {
                    echo " required";
                }
                echo " custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                echo "\">
              <label for=\"input-shipping-custom-field-";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 162);
                echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"custom_field[";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 164);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                echo "]\" value=\"";
                if ((($__internal_compile_16 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null)) {
                    echo (($__internal_compile_17 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 164);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                echo "\" id=\"input-shipping-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                echo "\" class=\"form-control datetime\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
              <div id=\"error-shipping-custom-field-";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 170
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "
      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\">";
        // line 175
        echo ($context["button_continue"] ?? null);
        echo "</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_existing\\']').on('change', function() {
    if (\$(this).val() == 1) {
        \$('#shipping-existing').show();
        \$('#shipping-new').hide();
    } else {
        \$('#shipping-existing').hide();
        \$('#shipping-new').show();
    }
});

// Existing Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address|address&language=";
        // line 197
        echo ($context["language"] ?? null);
        echo "&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-warning alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-shipping-method').trigger('click');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// New Shipping Address
\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address|save&language=";
        // line 233
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#form-shipping-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-shipping-address').button('loading');
            },
            complete: function() {
                \$('#button-shipping-address').button('reset');
            },
            success: function(json) {
                \$('#form-shipping-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-shipping-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-warning alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    var addresses = [];

                    // Shipping addresses
                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            addresses[i] = {
                                text: json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'],
                                value: json['addresses'][i]['address_id']
                            };
                        }
                    }

                  ";
        // line 280
        if (($context["config_checkout_address"] ?? null)) {
            // line 281
            echo "                    html = '';

                    for (i in addresses) {
                        if (addresses[i]['value'] == \$('#input-payment-address').val()) {
                            html += '<option value=\"' + addresses[i]['value'] + '\" selected>' + addresses[i]['text'] + '</option>';
                        } else {
                            html += '<option value=\"' + addresses[i]['value'] + '\">' + addresses[i]['text'] + '</option>';
                        }
                    }

                    \$('#input-payment-address').html(html);

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');
                  ";
        }
        // line 297
        echo "
                    // Shipping method
                    html = '';

                    for (i in addresses) {
                        if (addresses[i]['value'] == json['address_id']) {
                            html += '<option value=\"' + addresses[i]['value'] + '\" selected>' + addresses[i]['text'] + '</option>';
                        } else {
                            html += '<option value=\"' + addresses[i]['value'] + '\">' + addresses[i]['text'] + '</option>';
                        }
                    }

                    \$('#input-shipping-address').html(html);

                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    \$('#form-shipping-address')[0].reset();

                    \$('#button-shipping-method').trigger('click');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-shipping-country').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 332
        echo ($context["language"] ?? null);
        echo "&country_id=' + \$('#input-shipping-country').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-shipping-postcode').parent().addClass('required');
                } else {
                    \$('#input-shipping-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 347
        echo ($context["text_select"] ?? null);
        echo "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == '";
        // line 353
        echo ($context["zone_id"] ?? null);
        echo "') {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 360
        echo ($context["text_none"] ?? null);
        echo "</option>';
                }

                \$('#input-shipping-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-shipping-country').trigger('change');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  922 => 360,  912 => 353,  903 => 347,  885 => 332,  848 => 297,  830 => 281,  828 => 280,  778 => 233,  739 => 197,  714 => 175,  709 => 172,  702 => 170,  696 => 167,  678 => 164,  671 => 162,  662 => 161,  660 => 160,  657 => 159,  651 => 156,  633 => 153,  626 => 151,  617 => 150,  615 => 149,  612 => 148,  606 => 145,  588 => 142,  581 => 140,  572 => 139,  570 => 138,  567 => 137,  560 => 133,  548 => 132,  534 => 131,  529 => 129,  520 => 128,  518 => 127,  515 => 126,  509 => 123,  489 => 122,  480 => 121,  478 => 120,  475 => 119,  469 => 116,  449 => 115,  440 => 114,  438 => 113,  435 => 112,  429 => 109,  426 => 108,  403 => 105,  400 => 104,  396 => 103,  392 => 102,  388 => 101,  379 => 100,  377 => 99,  374 => 98,  368 => 95,  365 => 94,  342 => 91,  339 => 90,  335 => 89,  331 => 88,  327 => 87,  318 => 86,  316 => 85,  313 => 84,  307 => 81,  304 => 80,  289 => 78,  285 => 77,  281 => 76,  269 => 75,  260 => 74,  258 => 73,  255 => 72,  251 => 71,  244 => 67,  237 => 62,  222 => 60,  218 => 59,  214 => 58,  210 => 57,  198 => 52,  186 => 47,  175 => 43,  163 => 38,  152 => 34,  140 => 29,  128 => 24,  116 => 19,  111 => 16,  86 => 14,  82 => 13,  73 => 11,  63 => 8,  53 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/shipping_address.twig", "C:\\xampp\\htdocs\\opencart\\upload\\catalog\\view\\template\\checkout\\shipping_address.twig");
    }
}
