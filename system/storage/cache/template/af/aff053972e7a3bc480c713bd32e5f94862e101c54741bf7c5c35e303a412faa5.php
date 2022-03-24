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

/* admin/view/template/setting/store_form.twig */
class __TwigTemplate_09b0b894e976c871b86d1155e1cd3e733b11d17c2a4b9728c7910cd3980e9868 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-store\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 18
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-store\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 23
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-url\" class=\"col-sm-2 col-form-label\">";
        // line 31
        echo ($context["entry_url"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_url\" value=\"";
        // line 33
        echo ($context["config_url"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_url"] ?? null);
        echo "\" id=\"input-url\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 34
        echo ($context["help_url"] ?? null);
        echo "</div>
                  <div id=\"error-url\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 39
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 41
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  <div id=\"error-meta-title\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 48
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 52
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 54
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 58
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 61
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 63
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 64
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 70
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 74
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 74);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 74) == ($context["config_theme"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 74);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\"/></div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 81
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 85
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 85);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 85) == ($context["config_layout_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 85);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 93
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 95
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 100
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 102
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 107
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 109
        echo ($context["entry_address"] ?? null);
        echo "\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  <div id=\"error-address\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 114
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 116
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 117
        echo ($context["help_geocode"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 121
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 123
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 128
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 130
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 135
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 138
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 140
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 141
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 147
        echo ($context["entry_open"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 149
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                  <div class=\"form-text\">";
        // line 150
        echo ($context["help_open"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 154
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 156
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                  <div class=\"form-text\">";
        // line 157
        echo ($context["help_comment"] ?? null);
        echo "</div>
                </div>
              </div>
              ";
        // line 160
        if (($context["locations"] ?? null)) {
            // line 161
            echo "                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 162
            echo ($context["entry_location"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 166
                echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 167);
                echo "\" id=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 167);
                echo "\" class=\"form-check-input\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 167), ($context["config_location"] ?? null))) {
                    echo " checked";
                }
                echo "/> <label for=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 167);
                echo "\" class=\"form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 167);
                echo "</label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                    </div>
                    <div class=\"form-text\">";
            // line 171
            echo ($context["help_location"] ?? null);
            echo "</div>
                  </div>
                </div>
              ";
        }
        // line 175
        echo "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 178
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-select\">
                    ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 182
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 182);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 182) == ($context["config_country_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 182);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 188
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-select\"></select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 194
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-select\">
                    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 198
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 198);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 198) == ($context["config_language"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 198);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 204
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                    ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 208
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 208);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 208) == ($context["config_currency"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 208);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  </select>
                  <div class=\"form-text\">";
        // line 211
        echo ($context["help_currency"] ?? null);
        echo "</div>
                </div>
              </div>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">


              <div class=\"accordion\" id=\"accordion-option\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">";
        // line 220
        echo ($context["text_product"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3 required\">
                        <label for=\"input-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 224
        echo ($context["entry_product_description_length"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 226
        echo ($context["config_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-product-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 227
        echo ($context["help_product_description_length"] ?? null);
        echo "</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 232
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 234
        echo ($context["config_pagination"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pagination"] ?? null);
        echo "\" id=\"input-pagination\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 235
        echo ($context["help_pagination"] ?? null);
        echo "</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 240
        echo ($context["entry_product_count"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_product_count\" value=\"1\" id=\"input-product-count-yes\" class=\"btn-check\"";
        // line 243
        if (($context["config_product_count"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-product-count-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_product_count\" value=\"0\" id=\"input-product-count-no\" class=\"btn-check\"";
        if ( !($context["config_product_count"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-product-count-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 245
        echo ($context["help_product_count"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">";
        // line 253
        echo ($context["text_legal"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 258
        echo ($context["entry_gdpr"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">";
        // line 261
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 263
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 263);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 263) == ($context["config_gdpr_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 263);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 266
        echo ($context["help_gdpr"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>


                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">";
        // line 276
        echo ($context["text_tax"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 281
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_tax\" value=\"1\" id=\"input-tax-yes\" class=\"btn-check\"";
        // line 284
        if (($context["config_tax"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-tax-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_tax\" value=\"0\" id=\"input-tax-no\" class=\"btn-check\"";
        if ( !($context["config_tax"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-tax-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 289
        echo ($context["entry_tax_default"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">";
        // line 292
        echo ($context["text_none"] ?? null);
        echo "</option>
                            <option value=\"shipping\"";
        // line 293
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                            <option value=\"payment\"";
        // line 294
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 296
        echo ($context["help_tax_default"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 300
        echo ($context["entry_tax_customer"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">";
        // line 303
        echo ($context["text_none"] ?? null);
        echo "</option>
                            <option value=\"shipping\"";
        // line 304
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                            <option value=\"payment\"";
        // line 305
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 307
        echo ($context["help_tax_customer"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">";
        // line 316
        echo ($context["text_account"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 321
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 325
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 325);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 325) == ($context["config_customer_group_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 325);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 328
        echo ($context["help_customer_group"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 332
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 336
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 337
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 337);
            echo "\" id=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 337);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 337), ($context["config_customer_group_display"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 337);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 337);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 341
        echo ($context["help_customer_group_display"] ?? null);
        echo "</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 346
        echo ($context["entry_customer_price"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">

                            <input type=\"radio\" name=\"config_customer_price\" value=\"1\" id=\"input-customer-price-yes\" class=\"btn-check\"";
        // line 350
        if (($context["config_customer_price"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-price-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label>

                            <input type=\"radio\" name=\"config_customer_price\" value=\"0\" id=\"input-customer-price-no\" class=\"btn-check\"";
        // line 352
        if ( !($context["config_customer_price"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-price-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>

                          </div>
                          <div class=\"form-text\">";
        // line 355
        echo ($context["help_customer_price"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 359
        echo ($context["entry_account"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">";
        // line 362
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 364
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 364);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 364) == ($context["config_account_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 364);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 367
        echo ($context["help_account"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">";
        // line 375
        echo ($context["text_checkout"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 379
        echo ($context["entry_cart_weight"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" id=\"input-cart-weight-yes\" class=\"btn-check\"";
        // line 382
        if (($context["config_cart_weight"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-cart-weight-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" id=\"input-cart-weight-no\" class=\"btn-check\"";
        if ( !($context["config_cart_weight"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-cart-weight-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 387
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" id=\"input-checkout-guest-yes\" class=\"btn-check\"";
        // line 390
        if (($context["config_checkout_guest"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-checkout-guest-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" id=\"input-checkout-guest-no\" class=\"btn-check\"";
        if ( !($context["config_checkout_guest"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-checkout-guest-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 392
        echo ($context["help_checkout_guest"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 396
        echo ($context["entry_checkout"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">";
        // line 399
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 401
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 401);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 401) == ($context["config_checkout_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 401);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 404
        echo ($context["help_checkout"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">";
        // line 413
        echo ($context["text_stock"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 417
        echo ($context["entry_stock_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_stock_display\" value=\"1\" id=\"input-stock-display-yes\" class=\"btn-check\"";
        // line 420
        if (($context["config_stock_display"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-display-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_stock_display\" value=\"0\" id=\"input-stock-display-no\" class=\"btn-check\"";
        if ( !($context["config_stock_display"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-display-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 422
        echo ($context["help_stock_display"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 426
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" id=\"input-stock-checkout-yes\" class=\"btn-check\"";
        // line 429
        if (($context["config_stock_checkout"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-checkout-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" id=\"input-stock-checkout-no\" class=\"btn-check\"";
        if ( !($context["config_stock_checkout"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-checkout-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 431
        echo ($context["help_stock_checkout"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 443
        echo ($context["text_image"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">";
        // line 445
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"";
        // line 449
        echo ($context["config_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"";
        // line 452
        echo ($context["config_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-category-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">";
        // line 459
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 463
        echo ($context["config_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 466
        echo ($context["config_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-thumb-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">";
        // line 473
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 477
        echo ($context["config_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 480
        echo ($context["config_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-popup-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">";
        // line 487
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"";
        // line 491
        echo ($context["config_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"";
        // line 494
        echo ($context["config_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-product-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">";
        // line 501
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"";
        // line 505
        echo ($context["config_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"";
        // line 508
        echo ($context["config_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-additional-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-related\" class=\"col-sm-2 col-form-label\">";
        // line 515
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"";
        // line 519
        echo ($context["config_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"";
        // line 522
        echo ($context["config_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-related-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-compare\" class=\"col-sm-2 col-form-label\">";
        // line 529
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"";
        // line 533
        echo ($context["config_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"";
        // line 536
        echo ($context["config_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-compare-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-wishlist\" class=\"col-sm-2 col-form-label\">";
        // line 543
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"";
        // line 547
        echo ($context["config_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"";
        // line 550
        echo ($context["config_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-wishlist-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-cart\" class=\"col-sm-2 col-form-label\">";
        // line 557
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"";
        // line 561
        echo ($context["config_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"";
        // line 564
        echo ($context["config_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-cart-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-location\" class=\"col-sm-2 col-form-label\">";
        // line 571
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"";
        // line 575
        echo ($context["config_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"";
        // line 578
        echo ($context["config_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-location-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"store_id\" value=\"";
        // line 587
        echo ($context["store_id"] ?? null);
        echo "\" id=\"input-store-id\"/></form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function () {
    \$.ajax({
        url: 'index.php?route=setting/setting|theme&user_token=";
        // line 595
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function () {
            \$('#input-theme').prop('disabled', true);
        },
        complete: function () {
            \$('#input-theme').prop('disabled', false);
        },
        success: function (html) {
            \$('#theme').attr('src', html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('#input-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country|country&user_token=";
        // line 619
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            html = '<option value=\"\">";
        // line 628
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 634
        echo ($context["config_zone_id"] ?? null);
        echo "') {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected=\"selected\">";
        // line 641
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-zone').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        // line 654
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "admin/view/template/setting/store_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1524 => 654,  1508 => 641,  1498 => 634,  1489 => 628,  1477 => 619,  1450 => 595,  1439 => 587,  1425 => 578,  1417 => 575,  1410 => 571,  1398 => 564,  1390 => 561,  1383 => 557,  1371 => 550,  1363 => 547,  1356 => 543,  1344 => 536,  1336 => 533,  1329 => 529,  1317 => 522,  1309 => 519,  1302 => 515,  1290 => 508,  1282 => 505,  1275 => 501,  1263 => 494,  1255 => 491,  1248 => 487,  1236 => 480,  1228 => 477,  1221 => 473,  1209 => 466,  1201 => 463,  1194 => 459,  1182 => 452,  1174 => 449,  1167 => 445,  1162 => 443,  1147 => 431,  1132 => 429,  1126 => 426,  1119 => 422,  1104 => 420,  1098 => 417,  1091 => 413,  1079 => 404,  1076 => 403,  1061 => 401,  1057 => 400,  1053 => 399,  1047 => 396,  1040 => 392,  1025 => 390,  1019 => 387,  1001 => 382,  995 => 379,  988 => 375,  977 => 367,  974 => 366,  959 => 364,  955 => 363,  951 => 362,  945 => 359,  938 => 355,  928 => 352,  919 => 350,  912 => 346,  904 => 341,  901 => 340,  882 => 337,  879 => 336,  875 => 335,  869 => 332,  862 => 328,  859 => 327,  844 => 325,  840 => 324,  834 => 321,  826 => 316,  814 => 307,  805 => 305,  797 => 304,  793 => 303,  787 => 300,  780 => 296,  771 => 294,  763 => 293,  759 => 292,  753 => 289,  735 => 284,  729 => 281,  721 => 276,  708 => 266,  705 => 265,  690 => 263,  686 => 262,  682 => 261,  676 => 258,  668 => 253,  657 => 245,  642 => 243,  636 => 240,  628 => 235,  622 => 234,  617 => 232,  609 => 227,  603 => 226,  598 => 224,  591 => 220,  579 => 211,  576 => 210,  561 => 208,  557 => 207,  551 => 204,  545 => 200,  530 => 198,  526 => 197,  520 => 194,  511 => 188,  505 => 184,  490 => 182,  486 => 181,  480 => 178,  475 => 175,  468 => 171,  465 => 170,  446 => 167,  443 => 166,  439 => 165,  433 => 162,  430 => 161,  428 => 160,  422 => 157,  416 => 156,  411 => 154,  404 => 150,  398 => 149,  393 => 147,  384 => 141,  380 => 140,  371 => 138,  365 => 135,  355 => 130,  350 => 128,  340 => 123,  335 => 121,  328 => 117,  322 => 116,  317 => 114,  307 => 109,  302 => 107,  292 => 102,  287 => 100,  277 => 95,  272 => 93,  264 => 87,  249 => 85,  245 => 84,  239 => 81,  232 => 76,  217 => 74,  213 => 73,  207 => 70,  198 => 64,  194 => 63,  185 => 61,  179 => 58,  170 => 54,  165 => 52,  156 => 48,  151 => 46,  141 => 41,  136 => 39,  128 => 34,  122 => 33,  117 => 31,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/setting/store_form.twig", "C:\\xampp\\htdocs\\opencart\\upload\\admin\\view\\template\\setting\\store_form.twig");
    }
}
