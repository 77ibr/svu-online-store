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

/* admin/view/template/setting/setting.twig */
class __TwigTemplate_db9f4c6faa8fdf55075fa6d926c24eff8d5347faa711c6fa8b7473ee53ef0998 extends Template
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
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 19
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"";
        // line 21
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 34
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 36
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  <div id=\"error-meta-title\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 43
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 47
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 49
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 53
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 56
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 58
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 59
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 69
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69) == ($context["config_theme"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 69);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 81
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 81);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 81) == ($context["config_layout_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 81);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 89
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 91
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 96
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 98
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 103
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 105
        echo ($context["entry_address"] ?? null);
        echo "\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 109
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 111
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 112
        echo ($context["help_geocode"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 116
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 118
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 123
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 125
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 130
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 133
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 135
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 136
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 142
        echo ($context["entry_open"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 144
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                  <div class=\"form-text\">";
        // line 145
        echo ($context["help_open"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 149
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 151
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                  <div class=\"form-text\">";
        // line 152
        echo ($context["help_comment"] ?? null);
        echo "</div>
                </div>
              </div>
              ";
        // line 155
        if (($context["locations"] ?? null)) {
            // line 156
            echo "                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 157
            echo ($context["entry_location"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 161
                echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" id=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-check-input\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162), ($context["config_location"] ?? null))) {
                    echo " checked";
                }
                echo "/> <label for=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 162);
                echo "</label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                    </div>
                    <div class=\"form-text\">";
            // line 166
            echo ($context["help_location"] ?? null);
            echo "</div>
                  </div>
                </div>
              ";
        }
        // line 170
        echo "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 173
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-select\">
                    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 177
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 177);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 177) == ($context["config_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 177);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 183
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-select\"></select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 189
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                    ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 193
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 193);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 193) == ($context["config_timezone"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 193);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 199
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-select\">
                    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 203
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203) == ($context["config_language"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 203);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">";
        // line 209
        echo ($context["entry_language_admin"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                    ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 213
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 213);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 213) == ($context["config_language_admin"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 213);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 219
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 223
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 223);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 223) == ($context["config_currency"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 223);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                  </select>
                  <div class=\"form-text\">";
        // line 226
        echo ($context["help_currency"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 230
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 234
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 234);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 234) == ($context["config_currency_engine"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 234);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 240
        echo ($context["entry_currency_auto"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" id=\"input-currency-auto-yes\" class=\"btn-check\"";
        // line 244
        if (($context["config_currency_auto"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-currency-auto-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" id=\"input-currency-auto-no\" class=\"btn-check\"";
        if ( !($context["config_currency_auto"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-currency-auto-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                  </div>
                  <div class=\"form-text\">";
        // line 247
        echo ($context["help_currency_auto"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 251
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                    ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 255
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 255);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 255) == ($context["config_length_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 255);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 261
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                    ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 265
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 265);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 265) == ($context["config_weight_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 265);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                  </select>
                </div>
              </div>
            </div>

            <div id=\"tab-option\" class=\"tab-pane\">

              <div class=\"accordion\" id=\"accordion-option\">

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">";
        // line 277
        echo ($context["text_product"] ?? null);
        echo "</button></h2>

                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 283
        echo ($context["entry_product_description_length"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 285
        echo ($context["config_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-product-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 286
        echo ($context["help_product_description_length"] ?? null);
        echo "</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 291
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 293
        echo ($context["config_pagination"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pagination"] ?? null);
        echo "\" id=\"input-pagination\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 294
        echo ($context["help_pagination"] ?? null);
        echo "</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 299
        echo ($context["entry_product_count"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_product_count\" value=\"1\" id=\"input-product-count-yes\" class=\"btn-check\"";
        // line 302
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
        // line 304
        echo ($context["help_product_count"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">";
        // line 308
        echo ($context["entry_pagination_admin"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"";
        // line 310
        echo ($context["config_pagination_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pagination_admin"] ?? null);
        echo "\" id=\"input-pagination-admin\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 311
        echo ($context["help_pagination"] ?? null);
        echo "</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>

                      <div class=\"row mb-3 required\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 317
        echo ($context["entry_product_report"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_product_report_status\" value=\"1\" id=\"input-product-report-yes\" class=\"btn-check\"";
        // line 320
        if (($context["config_product_report_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-product-report-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_product_report_status\" value=\"0\" id=\"input-product-report-no\" class=\"btn-check\"";
        if ( !($context["config_product_report_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-product-report-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 322
        echo ($context["help_product_report"] ?? null);
        echo "</div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">";
        // line 331
        echo ($context["text_review"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 335
        echo ($context["entry_review_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_review_status\" value=\"1\" id=\"input-review-status-yes\" class=\"btn-check\"";
        // line 338
        if (($context["config_review_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-review-status-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_review_status\" value=\"0\" id=\"input-review-status-no\" class=\"btn-check\"";
        if ( !($context["config_review_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-review-status-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 340
        echo ($context["help_review"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 344
        echo ($context["entry_review_guest"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_review_guest\" value=\"1\" id=\"input-review-guest-yes\" class=\"btn-check\"";
        // line 347
        if (($context["config_review_guest"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-review-guest-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_review_guest\" value=\"0\" id=\"input-review-guest-no\" class=\"btn-check\"";
        if ( !($context["config_review_guest"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-review-guest-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 349
        echo ($context["help_review_guest"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-voucher\">";
        // line 357
        echo ($context["text_voucher"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-voucher\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-voucher-min\" class=\"col-sm-2 col-form-label\">";
        // line 362
        echo ($context["entry_voucher_min"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 364
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 365
        echo ($context["help_voucher_min"] ?? null);
        echo "</div>
                          <div id=\"error-voucher-min\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>

                      <div class=\"row mb-3 required\">
                        <label for=\"input-voucher-max\" class=\"col-sm-2 col-form-label\">";
        // line 371
        echo ($context["entry_voucher_max"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 373
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 374
        echo ($context["help_voucher_max"] ?? null);
        echo "</div>
                          <div id=\"error-voucher-max\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">";
        // line 384
        echo ($context["text_legal"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 388
        echo ($context["entry_cookie"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">";
        // line 391
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 393
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 393);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 393) == ($context["config_cookie_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 393);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 396
        echo ($context["help_cookie"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 400
        echo ($context["entry_gdpr"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">";
        // line 403
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 405
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 405);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 405) == ($context["config_gdpr_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 405);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 408
        echo ($context["help_gdpr"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 412
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 414
        echo ($context["config_gdpr_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 415
        echo ($context["help_gdpr_limit"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">";
        // line 423
        echo ($context["text_tax"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 428
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_tax\" value=\"1\" id=\"input-tax-yes\" class=\"btn-check\"";
        // line 431
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
        // line 436
        echo ($context["entry_tax_default"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">";
        // line 439
        echo ($context["text_none"] ?? null);
        echo "</option>
                            <option value=\"shipping\"";
        // line 440
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                            <option value=\"payment\"";
        // line 441
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 443
        echo ($context["help_tax_default"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 447
        echo ($context["entry_tax_customer"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">";
        // line 450
        echo ($context["text_none"] ?? null);
        echo "</option>
                            <option value=\"shipping\"";
        // line 451
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                            <option value=\"payment\"";
        // line 452
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 454
        echo ($context["help_tax_customer"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">";
        // line 462
        echo ($context["text_account"] ?? null);
        echo "</button></h2>

                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">

                    <div class=\"accordion-body\">

                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 469
        echo ($context["entry_customer_online"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_customer_online\" value=\"1\" id=\"input-customer-online-yes\" class=\"btn-check\"";
        // line 472
        if (($context["config_customer_online"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-online-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_customer_online\" value=\"0\" id=\"input-customer-online-no\" class=\"btn-check\"";
        if ( !($context["config_customer_online"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-online-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 474
        echo ($context["help_customer_online"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">";
        // line 478
        echo ($context["entry_customer_online_expire"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"";
        // line 481
        echo ($context["config_customer_online_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer_online_expire"] ?? null);
        echo "\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">";
        echo ($context["text_hour"] ?? null);
        echo "</span>
                          </div>
                          <div class=\"form-text\">";
        // line 483
        echo ($context["help_customer_online_expire"] ?? null);
        echo "</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 488
        echo ($context["entry_customer_activity"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" id=\"input-customer-activity-yes\" class=\"btn-check\"";
        // line 491
        if (($context["config_customer_activity"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-activity-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" id=\"input-customer-activity-no\" class=\"btn-check\"";
        if ( !($context["config_customer_activity"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-activity-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 493
        echo ($context["help_customer_activity"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 497
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_customer_search\" value=\"1\" id=\"input-customer-search-yes\" class=\"btn-check\"";
        // line 500
        if (($context["config_customer_search"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-search-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_customer_search\" value=\"0\" id=\"input-customer-search-no\" class=\"btn-check\"";
        if ( !($context["config_customer_search"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-search-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 505
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            ";
        // line 508
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 509
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 509);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 509) == ($context["config_customer_group_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 509);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 511
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 512
        echo ($context["help_customer_group"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 516
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 519
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 520
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 521
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 521);
            echo "\" id=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 521);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 521), ($context["config_customer_group_display"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 521);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 521);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 524
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 525
        echo ($context["help_customer_group_display"] ?? null);
        echo "</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>



                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 533
        echo ($context["entry_customer_price"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_customer_price\" value=\"1\" id=\"input-customer-price-yes\" class=\"btn-check\"";
        // line 536
        if (($context["config_customer_price"] ?? null)) {
            echo " checked";
        }
        echo "/>
                            <label for=\"input-customer-price-yes\" class=\"btn btn-outline-secondary\">";
        // line 537
        echo ($context["text_yes"] ?? null);
        echo "</label>

                            <input type=\"radio\" name=\"config_customer_price\" value=\"0\" id=\"input-customer-price-no\" class=\"btn-check\"";
        // line 539
        if ( !($context["config_customer_price"] ?? null)) {
            echo " checked";
        }
        echo "/>
                            <label for=\"input-customer-price-no\" class=\"btn btn-outline-secondary\">";
        // line 540
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 542
        echo ($context["help_customer_price"] ?? null);
        echo "</div>
                        </div>
                      </div>


                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 548
        echo ($context["entry_telephone_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">

                            <input type=\"radio\" name=\"config_telephone_display\" value=\"1\" id=\"input-telephone-display-yes\" class=\"btn-check\"";
        // line 552
        if (($context["config_telephone_display"] ?? null)) {
            echo " checked";
        }
        echo "/>
                            <label for=\"input-telephone-display-yes\" class=\"btn btn-outline-secondary\">";
        // line 553
        echo ($context["text_yes"] ?? null);
        echo "</label>

                            <input type=\"radio\" name=\"config_telephone_display\" value=\"0\" id=\"input-telephone-display-no\" class=\"btn-check\"";
        // line 555
        if ( !($context["config_telephone_display"] ?? null)) {
            echo " checked";
        }
        echo "/>
                            <label for=\"input-telephone-display-no\" class=\"btn btn-outline-secondary\">";
        // line 556
        echo ($context["text_no"] ?? null);
        echo "</label>

                          </div>
                        </div>
                      </div>


                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 564
        echo ($context["entry_telephone_required"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_telephone_required\" value=\"1\" id=\"input-telephone-required-yes\" class=\"btn-check\"";
        // line 567
        if (($context["config_telephone_required"] ?? null)) {
            echo " checked";
        }
        echo "/>
                            <label for=\"input-telephone-required-yes\" class=\"btn btn-outline-secondary\">";
        // line 568
        echo ($context["text_yes"] ?? null);
        echo "</label>
                            <input type=\"radio\" name=\"config_telephone_required\" value=\"0\" id=\"input-telephone-required-no\" class=\"btn-check\"";
        // line 569
        if ( !($context["config_telephone_required"] ?? null)) {
            echo " checked";
        }
        echo "/>
                            <label for=\"input-telephone-required-no\" class=\"btn btn-outline-secondary\">";
        // line 570
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                        </div>
                      </div>




                      <div class=\"row mb-3\">
                        <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 579
        echo ($context["entry_login_attempts"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 581
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 582
        echo ($context["help_login_attempts"] ?? null);
        echo "</div>
                          <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 588
        echo ($context["entry_account"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">";
        // line 591
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 592
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 593
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 593);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 593) == ($context["config_account_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 593);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 595
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 596
        echo ($context["help_account"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class=\"accordion-item\">

                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">";
        // line 606
        echo ($context["text_checkout"] ?? null);
        echo "</button></h2>

                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 611
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 613
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 614
        echo ($context["help_invoice_prefix"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 618
        echo ($context["entry_cart_weight"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" id=\"input-cart-weight-yes\" class=\"btn-check\"";
        // line 621
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
                          <div class=\"form-text\">";
        // line 623
        echo ($context["help_cart_weight"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 627
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" id=\"input-checkout-guest-yes\" class=\"btn-check\"";
        // line 630
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
        // line 632
        echo ($context["help_checkout_guest"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 636
        echo ($context["entry_checkout_address"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_checkout_address\" value=\"1\" id=\"input-checkout-address-yes\" class=\"btn-check\"";
        // line 639
        if (($context["config_checkout_address"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-checkout-address-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_checkout_address\" value=\"0\" id=\"input-checkout-address-no\" class=\"btn-check\"";
        if ( !($context["config_checkout_address"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-checkout-address-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 641
        echo ($context["help_checkout_address"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 645
        echo ($context["entry_checkout"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">";
        // line 648
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 649
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 650
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 650);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 650) == ($context["config_checkout_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 650);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 652
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 653
        echo ($context["help_checkout"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 657
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            ";
        // line 660
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 661
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 661);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 661) == ($context["config_order_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 661);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 663
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 664
        echo ($context["help_order_status"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 668
        echo ($context["entry_processing_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 671
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 672
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
            // line 673
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 673);
            echo "\" id=\"input-processing-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 673);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 673), ($context["config_processing_status"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-processing-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 673);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 673);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 676
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 677
        echo ($context["help_processing_status"] ?? null);
        echo "</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 682
        echo ($context["entry_complete_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 685
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 686
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
            // line 687
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687);
            echo "\" id=\"input-complete-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687), ($context["config_complete_status"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-complete-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 687);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 690
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 691
        echo ($context["help_complete_status"] ?? null);
        echo "</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 696
        echo ($context["entry_fraud_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 700
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 700);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 700) == ($context["config_fraud_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 700);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 703
        echo ($context["help_fraud_status"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 707
        echo ($context["entry_api"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">";
        // line 710
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 711
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 712
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 712);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 712) == ($context["config_api_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 712);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 714
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 715
        echo ($context["help_api"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">";
        // line 722
        echo ($context["text_subscription"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">";
        // line 727
        echo ($context["entry_subscription_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            ";
        // line 730
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 731
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 731);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 731) == ($context["config_subscription_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 731);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 734
        echo ($context["help_subscription"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">";
        // line 738
        echo ($context["entry_subscription_active_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            ";
        // line 741
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 742
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 742);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 742) == ($context["config_subscription_active_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 742);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 744
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">";
        // line 748
        echo ($context["entry_subscription_expired_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            ";
        // line 751
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 752
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 752);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 752) == ($context["config_subscription_expired_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 752);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 754
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">";
        // line 758
        echo ($context["entry_subscription_canceled_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            ";
        // line 761
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 762
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 762);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 762) == ($context["config_subscription_canceled_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 762);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 764
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 768
        echo ($context["entry_subscription_failed_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            ";
        // line 771
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 772
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 772);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 772) == ($context["config_subscription_failed_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 772);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 774
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">";
        // line 778
        echo ($context["entry_subscription_denied_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            ";
        // line 781
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 782
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 782);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 782) == ($context["config_subscription_denied_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 782);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 784
        echo "                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">";
        // line 791
        echo ($context["text_stock"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 795
        echo ($context["entry_stock_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_stock_display\" value=\"1\" id=\"input-stock-display-yes\" class=\"btn-check\"";
        // line 798
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
        // line 800
        echo ($context["help_stock_display"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 804
        echo ($context["entry_stock_warning"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" id=\"input-stock-warning-yes\" class=\"btn-check\"";
        // line 807
        if (($context["config_stock_warning"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-warning-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" id=\"input-stock-warning-no\" class=\"btn-check\"";
        if ( !($context["config_stock_warning"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-warning-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 809
        echo ($context["help_stock_warning"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 813
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" id=\"input-stock-checkout-yes\" class=\"btn-check\"";
        // line 816
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
        // line 818
        echo ($context["help_stock_checkout"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">";
        // line 825
        echo ($context["text_affiliate"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 829
        echo ($context["entry_affiliate_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_affiliate_status\" value=\"1\" id=\"input-affiliate-status-yes\" class=\"btn-check\"";
        // line 832
        if (($context["config_affiliate_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-status-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_affiliate_status\" value=\"0\" id=\"input-affiliate-status-no\" class=\"btn-check\"";
        if ( !($context["config_affiliate_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-status-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 834
        echo ($context["help_affiliate_status"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 838
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            ";
        // line 841
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 842
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 842);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 842) == ($context["config_affiliate_group_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 842);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 844
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 848
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" id=\"input-affiliate-approval-yes\" class=\"btn-check\"";
        // line 851
        if (($context["config_affiliate_approval"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-approval-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" id=\"input-affiliate-approval-no\" class=\"btn-check\"";
        if ( !($context["config_affiliate_approval"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-approval-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 853
        echo ($context["help_affiliate_approval"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 857
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"btn-group\">
                            <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" id=\"input-affiliate-auto-yes\" class=\"btn-check\"";
        // line 860
        if (($context["config_affiliate_auto"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-auto-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" id=\"input-affiliate-auto-no\" class=\"btn-check\"";
        if ( !($context["config_affiliate_auto"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-auto-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                          </div>
                          <div class=\"form-text\">";
        // line 862
        echo ($context["help_affiliate_auto"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 866
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 868
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 869
        echo ($context["help_affiliate_commission"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">";
        // line 874
        echo ($context["entry_affiliate_expire"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"";
        // line 876
        echo ($context["config_affiliate_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_expire"] ?? null);
        echo "\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 877
        echo ($context["help_affiliate_expire"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 882
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">";
        // line 885
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 886
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 887
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 887);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 887) == ($context["config_affiliate_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 887);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 889
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 890
        echo ($context["help_affiliate"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">";
        // line 898
        echo ($context["text_return"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 903
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            ";
        // line 906
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 907
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 907);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 907) == ($context["config_return_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 907);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 909
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 910
        echo ($context["help_return_status"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 915
        echo ($context["entry_return"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">";
        // line 918
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 919
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 920
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 920);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 920) == ($context["config_return_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 920);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 923
        echo ($context["help_return"] ?? null);
        echo "</div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">";
        // line 932
        echo ($context["text_captcha"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 936
        echo ($context["entry_captcha"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">";
        // line 939
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 940
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 941
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 941);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 941) == ($context["config_captcha"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 941);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 943
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 944
        echo ($context["help_captcha"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 948
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 951
        $context["captcha_page_row"] = 0;
        // line 952
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 953
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
            // line 954
            echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 954);
            echo "\" id=\"input-captcha-";
            echo ($context["captcha_page_row"] ?? null);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 954), ($context["config_captcha_page"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-captcha-";
            echo ($context["captcha_page_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 954);
            echo "</label>
                              </div>
                              ";
            // line 956
            $context["captcha_page_row"] = (($context["captcha_page_row"] ?? null) + 1);
            // line 957
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 958
        echo "                          </div>
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
        // line 972
        echo ($context["text_image_size"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">";
        // line 974
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"";
        // line 978
        echo ($context["config_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"";
        // line 981
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
        // line 988
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 992
        echo ($context["config_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 995
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
        // line 1002
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 1006
        echo ($context["config_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 1009
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
        // line 1016
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"";
        // line 1020
        echo ($context["config_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"";
        // line 1023
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
        // line 1030
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"";
        // line 1034
        echo ($context["config_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"";
        // line 1037
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
                  <label for=\"input-image-related-width\" class=\"col-sm-2 col-form-label\">";
        // line 1044
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"";
        // line 1048
        echo ($context["config_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"";
        // line 1051
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
                  <label for=\"input-image-compare-width\" class=\"col-sm-2 col-form-label\">";
        // line 1058
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"";
        // line 1062
        echo ($context["config_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"";
        // line 1065
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
                  <label for=\"input-image-wishlist-width\" class=\"col-sm-2 col-form-label\">";
        // line 1072
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"";
        // line 1076
        echo ($context["config_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"";
        // line 1079
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
                  <label for=\"input-image-cart-width\" class=\"col-sm-2 col-form-label\">";
        // line 1086
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"";
        // line 1090
        echo ($context["config_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"";
        // line 1093
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
                  <label for=\"input-image-location-width\" class=\"col-sm-2 col-form-label\">";
        // line 1100
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"";
        // line 1104
        echo ($context["config_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"";
        // line 1107
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
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1117
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1119
        echo ($context["entry_mail_engine"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"mail\"";
        // line 1122
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_mail"] ?? null);
        echo "</option>
                      <option value=\"smtp\"";
        // line 1123
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_smtp"] ?? null);
        echo "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1125
        echo ($context["help_mail_engine"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1129
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1131
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1132
        echo ($context["help_mail_parameter"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 1138
        echo ($context["text_smtp"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1140
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1142
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1143
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1147
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1149
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1153
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1155
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1156
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1160
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1162
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1166
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1168
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1173
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1175
        echo ($context["entry_mail_alert"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1178
        $context["mail_alert_row"] = 0;
        // line 1179
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1180
            echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 1181
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1181);
            echo "\" id=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1181), ($context["config_mail_alert"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1181);
            echo "</label>
                        </div>
                        ";
            // line 1183
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 1184
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1185
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 1186
        echo ($context["help_mail_alert"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1190
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1192
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-mail-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1193
        echo ($context["help_mail_alert_email"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1200
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1202
        echo ($context["entry_maintenance"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" id=\"input-maintenance-yes\" class=\"btn-check\"";
        // line 1205
        if (($context["config_maintenance"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-maintenance-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_maintenance\" value=\"0\" id=\"input-maintenance-no\" class=\"btn-check\"";
        if ( !($context["config_maintenance"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-maintenance-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"form-text\">";
        // line 1207
        echo ($context["help_maintenance"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1211
        echo ($context["entry_session_expire"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"";
        // line 1213
        echo ($context["config_session_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_session_expire"] ?? null);
        echo "\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1214
        echo ($context["help_session_expire"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1218
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" id=\"input-seo-url-yes\" class=\"btn-check\"";
        // line 1221
        if (($context["config_seo_url"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-seo-url-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_seo_url\" value=\"0\" id=\"input-seo-url-no\" class=\"btn-check\"";
        if ( !($context["config_seo_url"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-seo-url-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"form-text\">";
        // line 1223
        echo ($context["help_seo_url"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-robots\" class=\"col-sm-2 col-form-label\">";
        // line 1227
        echo ($context["entry_robots"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1229
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1230
        echo ($context["help_robots"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1234
        echo ($context["entry_compression"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1236
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1237
        echo ($context["help_compression"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1242
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1244
        echo ($context["entry_shared"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_shared\" value=\"1\" id=\"input-shared-yes\" class=\"btn-check\"";
        // line 1247
        if (($context["config_shared"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shared-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_shared\" value=\"0\" id=\"input-shared-no\" class=\"btn-check\"";
        if ( !($context["config_shared"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shared-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"form-text\">";
        // line 1249
        echo ($context["help_shared"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-encryption\" class=\"col-sm-2 col-form-label\">";
        // line 1253
        echo ($context["entry_encryption"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1255
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1256
        echo ($context["help_encryption"] ?? null);
        echo "</div>
                    <div id=\"error-encryption\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1262
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1264
        echo ($context["entry_file_max_size"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1266
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1267
        echo ($context["help_file_max_size"] ?? null);
        echo "</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1272
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1274
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1275
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1280
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1282
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1283
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1289
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1291
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" id=\"input-error-display-yes\" class=\"btn-check\"";
        // line 1294
        if (($context["config_error_display"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-error-display-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_error_display\" value=\"0\" id=\"input-error-display-no\" class=\"btn-check\"";
        if ( !($context["config_error_display"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-error-display-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1299
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" id=\"input-error-log-yes\" class=\"btn-check\"";
        // line 1302
        if (($context["config_error_log"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-error-log-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_error_log\" value=\"0\" id=\"input-error-log-no\" class=\"btn-check\"";
        if ( !($context["config_error_log"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-error-log-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1307
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1309
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting|theme&user_token=";
        // line 1326
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

\$('#input-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country|country&user_token=";
        // line 1349
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
        // line 1358
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 1364
        echo ($context["config_zone_id"] ?? null);
        echo "') {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected=\"selected\">";
        // line 1371
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-zone').html(html);

            \$('#button-save').prop('disabled', false);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        // line 1386
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3503 => 1386,  3485 => 1371,  3475 => 1364,  3466 => 1358,  3454 => 1349,  3428 => 1326,  3406 => 1309,  3401 => 1307,  3383 => 1302,  3377 => 1299,  3359 => 1294,  3353 => 1291,  3348 => 1289,  3339 => 1283,  3333 => 1282,  3328 => 1280,  3320 => 1275,  3314 => 1274,  3309 => 1272,  3301 => 1267,  3295 => 1266,  3290 => 1264,  3285 => 1262,  3276 => 1256,  3270 => 1255,  3265 => 1253,  3258 => 1249,  3243 => 1247,  3237 => 1244,  3232 => 1242,  3224 => 1237,  3218 => 1236,  3213 => 1234,  3206 => 1230,  3200 => 1229,  3195 => 1227,  3188 => 1223,  3173 => 1221,  3167 => 1218,  3160 => 1214,  3154 => 1213,  3149 => 1211,  3142 => 1207,  3127 => 1205,  3121 => 1202,  3116 => 1200,  3106 => 1193,  3100 => 1192,  3095 => 1190,  3088 => 1186,  3085 => 1185,  3079 => 1184,  3077 => 1183,  3062 => 1181,  3059 => 1180,  3054 => 1179,  3052 => 1178,  3046 => 1175,  3041 => 1173,  3031 => 1168,  3026 => 1166,  3017 => 1162,  3012 => 1160,  3005 => 1156,  2999 => 1155,  2994 => 1153,  2985 => 1149,  2980 => 1147,  2973 => 1143,  2967 => 1142,  2962 => 1140,  2957 => 1138,  2948 => 1132,  2942 => 1131,  2937 => 1129,  2930 => 1125,  2921 => 1123,  2913 => 1122,  2907 => 1119,  2902 => 1117,  2887 => 1107,  2879 => 1104,  2872 => 1100,  2860 => 1093,  2852 => 1090,  2845 => 1086,  2833 => 1079,  2825 => 1076,  2818 => 1072,  2806 => 1065,  2798 => 1062,  2791 => 1058,  2779 => 1051,  2771 => 1048,  2764 => 1044,  2752 => 1037,  2744 => 1034,  2737 => 1030,  2725 => 1023,  2717 => 1020,  2710 => 1016,  2698 => 1009,  2690 => 1006,  2683 => 1002,  2671 => 995,  2663 => 992,  2656 => 988,  2644 => 981,  2636 => 978,  2629 => 974,  2624 => 972,  2608 => 958,  2602 => 957,  2600 => 956,  2585 => 954,  2582 => 953,  2577 => 952,  2575 => 951,  2569 => 948,  2562 => 944,  2559 => 943,  2544 => 941,  2540 => 940,  2536 => 939,  2530 => 936,  2523 => 932,  2511 => 923,  2508 => 922,  2493 => 920,  2489 => 919,  2485 => 918,  2479 => 915,  2471 => 910,  2468 => 909,  2453 => 907,  2449 => 906,  2443 => 903,  2435 => 898,  2424 => 890,  2421 => 889,  2406 => 887,  2402 => 886,  2398 => 885,  2392 => 882,  2384 => 877,  2378 => 876,  2373 => 874,  2365 => 869,  2359 => 868,  2354 => 866,  2347 => 862,  2332 => 860,  2326 => 857,  2319 => 853,  2304 => 851,  2298 => 848,  2292 => 844,  2277 => 842,  2273 => 841,  2267 => 838,  2260 => 834,  2245 => 832,  2239 => 829,  2232 => 825,  2222 => 818,  2207 => 816,  2201 => 813,  2194 => 809,  2179 => 807,  2173 => 804,  2166 => 800,  2151 => 798,  2145 => 795,  2138 => 791,  2129 => 784,  2114 => 782,  2110 => 781,  2104 => 778,  2098 => 774,  2083 => 772,  2079 => 771,  2073 => 768,  2067 => 764,  2052 => 762,  2048 => 761,  2042 => 758,  2036 => 754,  2021 => 752,  2017 => 751,  2011 => 748,  2005 => 744,  1990 => 742,  1986 => 741,  1980 => 738,  1973 => 734,  1970 => 733,  1955 => 731,  1951 => 730,  1945 => 727,  1937 => 722,  1927 => 715,  1924 => 714,  1909 => 712,  1905 => 711,  1901 => 710,  1895 => 707,  1888 => 703,  1885 => 702,  1870 => 700,  1866 => 699,  1860 => 696,  1852 => 691,  1849 => 690,  1830 => 687,  1827 => 686,  1823 => 685,  1817 => 682,  1809 => 677,  1806 => 676,  1787 => 673,  1784 => 672,  1780 => 671,  1774 => 668,  1767 => 664,  1764 => 663,  1749 => 661,  1745 => 660,  1739 => 657,  1732 => 653,  1729 => 652,  1714 => 650,  1710 => 649,  1706 => 648,  1700 => 645,  1693 => 641,  1678 => 639,  1672 => 636,  1665 => 632,  1650 => 630,  1644 => 627,  1637 => 623,  1622 => 621,  1616 => 618,  1609 => 614,  1603 => 613,  1598 => 611,  1590 => 606,  1577 => 596,  1574 => 595,  1559 => 593,  1555 => 592,  1551 => 591,  1545 => 588,  1536 => 582,  1530 => 581,  1525 => 579,  1513 => 570,  1507 => 569,  1503 => 568,  1497 => 567,  1491 => 564,  1480 => 556,  1474 => 555,  1469 => 553,  1463 => 552,  1456 => 548,  1447 => 542,  1442 => 540,  1436 => 539,  1431 => 537,  1425 => 536,  1419 => 533,  1408 => 525,  1405 => 524,  1386 => 521,  1383 => 520,  1379 => 519,  1373 => 516,  1366 => 512,  1363 => 511,  1348 => 509,  1344 => 508,  1338 => 505,  1320 => 500,  1314 => 497,  1307 => 493,  1292 => 491,  1286 => 488,  1278 => 483,  1269 => 481,  1263 => 478,  1256 => 474,  1241 => 472,  1235 => 469,  1225 => 462,  1214 => 454,  1205 => 452,  1197 => 451,  1193 => 450,  1187 => 447,  1180 => 443,  1171 => 441,  1163 => 440,  1159 => 439,  1153 => 436,  1135 => 431,  1129 => 428,  1121 => 423,  1110 => 415,  1104 => 414,  1099 => 412,  1092 => 408,  1089 => 407,  1074 => 405,  1070 => 404,  1066 => 403,  1060 => 400,  1053 => 396,  1050 => 395,  1035 => 393,  1031 => 392,  1027 => 391,  1021 => 388,  1014 => 384,  1001 => 374,  995 => 373,  990 => 371,  981 => 365,  975 => 364,  970 => 362,  962 => 357,  951 => 349,  936 => 347,  930 => 344,  923 => 340,  908 => 338,  902 => 335,  895 => 331,  883 => 322,  868 => 320,  862 => 317,  853 => 311,  847 => 310,  842 => 308,  835 => 304,  820 => 302,  814 => 299,  806 => 294,  800 => 293,  795 => 291,  787 => 286,  781 => 285,  776 => 283,  767 => 277,  755 => 267,  740 => 265,  736 => 264,  730 => 261,  724 => 257,  709 => 255,  705 => 254,  699 => 251,  692 => 247,  676 => 244,  669 => 240,  663 => 236,  648 => 234,  644 => 233,  638 => 230,  631 => 226,  628 => 225,  613 => 223,  609 => 222,  603 => 219,  597 => 215,  582 => 213,  578 => 212,  572 => 209,  566 => 205,  551 => 203,  547 => 202,  541 => 199,  535 => 195,  520 => 193,  516 => 192,  510 => 189,  501 => 183,  495 => 179,  480 => 177,  476 => 176,  470 => 173,  465 => 170,  458 => 166,  455 => 165,  436 => 162,  433 => 161,  429 => 160,  423 => 157,  420 => 156,  418 => 155,  412 => 152,  406 => 151,  401 => 149,  394 => 145,  388 => 144,  383 => 142,  374 => 136,  370 => 135,  361 => 133,  355 => 130,  345 => 125,  340 => 123,  330 => 118,  325 => 116,  318 => 112,  312 => 111,  307 => 109,  298 => 105,  293 => 103,  283 => 98,  278 => 96,  268 => 91,  263 => 89,  255 => 83,  240 => 81,  236 => 80,  230 => 77,  222 => 71,  207 => 69,  203 => 68,  197 => 65,  188 => 59,  184 => 58,  175 => 56,  169 => 53,  160 => 49,  155 => 47,  146 => 43,  141 => 41,  131 => 36,  126 => 34,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  89 => 21,  84 => 19,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/setting/setting.twig", "C:\\xampp\\htdocs\\opencart\\upload\\admin\\view\\template\\setting\\setting.twig");
    }
}
