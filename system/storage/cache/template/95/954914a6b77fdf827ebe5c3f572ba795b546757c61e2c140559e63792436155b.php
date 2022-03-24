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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_8f9edb5db0aa0818fcaf2b749976485284bdcdd96910d8247467bdc460540a63 extends Template
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
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">

        ";
        // line 12
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "        ";
        } else {
            // line 15
            echo "          ";
            $context["class"] = "col-sm-8";
            // line 16
            echo "        ";
        }
        // line 17
        echo "
        <div class=\"";
        // line 18
        echo ($context["class"] ?? null);
        echo "\">

          ";
        // line 20
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 21
            echo "            <ul class=\"thumbnails\">
              ";
            // line 22
            if (($context["thumb"] ?? null)) {
                // line 23
                echo "                <li class=\"text-center\"><a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid\"/></a></li>
              ";
            }
            // line 25
            echo "              ";
            if (($context["images"] ?? null)) {
                // line 26
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 27
                    echo "                  <li class=\"image-additional\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 27);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 27);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"img-fluid\"/></a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "              ";
            }
            // line 30
            echo "            </ul>
          ";
        }
        // line 32
        echo "
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-description\" id=\"description-tab\" class=\"nav-link active\" data-bs-toggle=\"tab\">";
        // line 34
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 35
        if (($context["attribute_groups"] ?? null)) {
            // line 36
            echo "              <li class=\"nav-item\"><a href=\"#tab-specification\" id=\"specification-tab\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 38
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 39
            echo "              <li class=\"nav-item\"><a href=\"#tab-review\" id=\"review-tab\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 41
        echo "          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\" role=\"tabpanel\" aria-labelledby=\"description-tab\">";
        // line 43
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 44
        if (($context["attribute_groups"] ?? null)) {
            // line 45
            echo "              <div id=\"tab-specification\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"specification-tab\">
                <div class=\"table-responsive\">
                  <table class=\"table table-bordered\">
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 49
                echo "                      <thead>
                        <tr>
                          <td colspan=\"2\"><strong>";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 51);
                echo "</strong></td>
                        </tr>
                      </thead>
                      <tbody>
                        ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 56
                    echo "                          <tr>
                            <td>";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 57);
                    echo "</td>
                            <td>";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 58);
                    echo "</td>
                          </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                      </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                  </table>
                </div>
              </div>
            ";
        }
        // line 67
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 68
            echo "              <div id=\"tab-review\" class=\"tab-pane fade\">
                <form id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 71
            echo ($context["text_write"] ?? null);
            echo "</h2>
                  ";
            // line 72
            if (($context["review_guest"] ?? null)) {
                // line 73
                echo "                    <div class=\"mb-3 required\">
                      <label for=\"input-name\" class=\"form-label\">";
                // line 74
                echo ($context["entry_name"] ?? null);
                echo "</label> <input type=\"text\" name=\"name\" value=\"";
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                      <div class=\"invalid-feedback\"></div>
                    </div>
                    <div class=\"mb-3 required\">
                      <label for=\"input-review\" class=\"form-label\">";
                // line 78
                echo ($context["entry_review"] ?? null);
                echo "</label> <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                      <div class=\"form-text text-danger\">";
                // line 79
                echo ($context["text_note"] ?? null);
                echo "</div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label class=\"form-label\">";
                // line 82
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                      <div id=\"input-rating\">
                        ";
                // line 84
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"1\" class=\"form-check-input\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"2\" class=\"form-check-input\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"3\" class=\"form-check-input\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"4\" class=\"form-check-input\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"5\" class=\"form-check-input\"/>
                        &nbsp;";
                // line 94
                echo ($context["entry_good"] ?? null);
                echo "</div>
                    </div>
                    ";
                // line 96
                echo ($context["captcha"] ?? null);
                echo "
                    <div class=\"d-inline-block pt-2 pd-2 w-100\">
                      <div class=\"float-end\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 99
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                      </div>
                    </div>
                  ";
            } else {
                // line 103
                echo "                    ";
                echo ($context["text_login"] ?? null);
                echo "
                  ";
            }
            // line 105
            echo "                </form>
              </div>
            ";
        }
        // line 107
        echo "</div>
        </div>

        ";
        // line 110
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 111
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 112
            echo "        ";
        } else {
            // line 113
            echo "          ";
            $context["class"] = "col-sm-4";
            // line 114
            echo "        ";
        }
        // line 115
        echo "
        <div class=\"";
        // line 116
        echo ($context["class"] ?? null);
        echo "\">

          <div class=\"btn-group\">
            <button type=\"button\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        // line 119
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-heart\"></i></button>
            <button type=\"button\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        // line 120
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-exchange-alt\"></i></button>
          </div>


          <h1>";
        // line 124
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 126
        if (($context["manufacturer"] ?? null)) {
            // line 127
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 129
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 130
        if (($context["reward"] ?? null)) {
            // line 131
            echo "              <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 133
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 135
        if (($context["price"] ?? null)) {
            // line 136
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 137
            if ( !($context["special"] ?? null)) {
                // line 138
                echo "                <li>
                  <h2>";
                // line 139
                echo ($context["price"] ?? null);
                echo "</h2>
                </li>
              ";
            } else {
                // line 142
                echo "                <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li>
                  <h2>";
                // line 144
                echo ($context["special"] ?? null);
                echo "</h2>
                </li>
              ";
            }
            // line 147
            echo "              ";
            if (($context["tax"] ?? null)) {
                // line 148
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
              ";
            }
            // line 150
            echo "              ";
            if (($context["points"] ?? null)) {
                // line 151
                echo "                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
              ";
            }
            // line 153
            echo "              ";
            if (($context["discounts"] ?? null)) {
                // line 154
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 158
                    echo "                  <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 158);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 158);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "              ";
            }
            // line 161
            echo "            </ul>
          ";
        }
        // line 163
        echo "          <div id=\"product\">
            <form id=\"form-product\">
              ";
        // line 165
        if (($context["options"] ?? null)) {
            // line 166
            echo "            <hr>
              <h3>";
            // line 167
            echo ($context["text_option"] ?? null);
            echo "</h3>
              <div>
                ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 170
                echo "
                  ";
                // line 171
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 171) == "select")) {
                    // line 172
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 172)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 173);
                    echo "</label> <select name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\" class=\"form-select\">
                        <option value=\"\">";
                    // line 174
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 175
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 175));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 176
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 176);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 176);
                        echo "
                            ";
                        // line 177
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 177)) {
                            // line 178
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 178);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 178);
                            echo ")
                            ";
                        }
                        // line 179
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                      </select>
                      <div id=\"error-option-";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 185
                echo "
                  ";
                // line 186
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 186) == "radio")) {
                    // line 187
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 187)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 188);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    echo "\">
                        ";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 190));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 191
                        echo "                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 192);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 192);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 192);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 192)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 192);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 192);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 192)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 192);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 192);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 193
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 193);
                        echo "
                              ";
                        // line 194
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194)) {
                            // line 195
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 195);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 195);
                            echo ")
                              ";
                        }
                        // line 197
                        echo "                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 200
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 204
                echo "
                  ";
                // line 205
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 205) == "checkbox")) {
                    // line 206
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 206)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 207);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\">

                        ";
                    // line 210
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 210));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 211
                        echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 212);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 212);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 212);
                        echo "\" class=\"form-check-label\">
                              ";
                        // line 213
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 213)) {
                            // line 214
                            echo "                                <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 214);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 214);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 214)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 214);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 214);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 215
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 215);
                        echo "
                              ";
                        // line 216
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 216)) {
                            // line 217
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 217);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 217);
                            echo ")
                              ";
                        }
                        // line 218
                        echo "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 221
                    echo "
                      </div>
                      <div id=\"error-option-";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 226
                echo "
                  ";
                // line 227
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 227) == "text")) {
                    // line 228
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 228)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 229);
                    echo "</label>
                      <input type=\"text\" name=\"option[";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 230);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 230);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "\" class=\"form-control\"/>
                      <div id=\"error-option-";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 234
                echo "
                  ";
                // line 235
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 235) == "textarea")) {
                    // line 236
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 236)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 237);
                    echo "</label>
                      <textarea name=\"option[";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 238);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 238);
                    echo "</textarea>
                      <div id=\"error-option-";
                    // line 239
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 242
                echo "
                  ";
                // line 243
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 243) == "file")) {
                    // line 244
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 244)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"button-upload-";
                    // line 245
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 245);
                    echo "</label>
                      <div>
                        <button type=\"button\" id=\"button-upload-";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" data-oc-toggle=\"upload\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"option[";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 248);
                    echo "]\" value=\"\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 248);
                    echo "\"/>
                      </div>
                      <div id=\"error-option-";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 253
                echo "
                  ";
                // line 254
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 254) == "date")) {
                    // line 255
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 255)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 256
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 256);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 258
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 258);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 258);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 258);
                    echo "\" class=\"form-control date\"/>
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 261
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 264
                echo "
                  ";
                // line 265
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 265) == "datetime")) {
                    // line 266
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 266)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 267
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 267);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 267);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 269);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 269);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 269);
                    echo "\" class=\"form-control datetime\"/>
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>

                      <div id=\"error-option-";
                    // line 273
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 273);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 276
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 276) == "time")) {
                    // line 277
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 277)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 278
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 278);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 278);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 280);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 280);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 280);
                    echo "\" class=\"form-control time\"/>
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 283
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 286
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "                ";
        }
        // line 288
        echo "
                ";
        // line 289
        if (($context["subscription_plans"] ?? null)) {
            // line 290
            echo "                  <hr/>
                  <h3>";
            // line 291
            echo ($context["text_subscription"] ?? null);
            echo "</h3>
                  <div class=\"mb-3 required\">
                    <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                      <option value=\"\">";
            // line 294
            echo ($context["text_select"] ?? null);
            echo "</option>
                      ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 296
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 296);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 296);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            echo "                    </select>
                    ";
            // line 299
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 300
                echo "                    <div id=\"subscription-description-";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 300);
                echo "\" class=\"form-text subscription d-none\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 300);
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "                    <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                  </div>
                ";
        }
        // line 305
        echo "
                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 307
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 308
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 309
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
                  <div id=\"error-quantity\" class=\"form-text\"></div>
                  <br/>
                  <button type=\"submit\" id=\"button-cart\" data-loading-text=\"";
        // line 312
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                </div>
                ";
        // line 314
        if ((($context["minimum"] ?? null) > 1)) {
            // line 315
            echo "                  <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 317
        echo "              </div>

              ";
        // line 319
        if (($context["review_status"] ?? null)) {
            // line 320
            echo "                <div class=\"rating\">
                  <p>";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fas fa-stack\"><i class=\"far fa-star fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fas fa-stack\"><i class=\"fas fa-star fa-stack-1x\"></i><i class=\"far fa-star fa-stack-1x\"></i></span>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
                </div>
              ";
        }
        // line 324
        echo "
            </form>
          </div>
        </div>

        ";
        // line 329
        if (($context["products"] ?? null)) {
            // line 330
            echo "          <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
          <div class=\"row\">
            ";
            // line 332
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 333
                echo "              <div class=\"product-layout product-module col-lg-3 col-md-3 col-sm-6 col-12\">";
                echo $context["product"];
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "          </div>
        ";
        }
        // line 337
        echo "
        ";
        // line 338
        if (($context["tags"] ?? null)) {
            // line 339
            echo "          <p>";
            echo ($context["text_tags"] ?? null);
            echo "
            ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 341
                echo "              ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 342
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 342);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 342);
                    echo "</a>,
              ";
                } else {
                    // line 344
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["tags"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 344);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["tags"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 344);
                    echo "</a>
              ";
                }
                // line 346
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            echo "          </p>
        ";
        }
        // line 349
        echo "
        ";
        // line 350
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 352
        echo ($context["column_right"] ?? null);
        echo "
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function(e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart|add&language=";
        // line 369
        echo ($context["language"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').parent().load('index.php?route=common/cart|info');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#review').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/review|review&product_id=";
        // line 415
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
    \$.ajax({
        url: 'index.php?route=product/review|write&product_id=";
        // line 419
        echo ($context["product_id"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: \$('#form-review').serialize(),
        beforeSend: function() {
            \$('#button-review').button('loading');
        },
        complete: function() {
            \$('#button-review').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-name').val('');
                \$('#input-text').val('');
                \$('input[name=\\'rating\\']:checked').prop('checked', false);
            }
        }
    });
});

\$(document).ready(function() {
    \$('.thumbnails').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 460
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1280 => 460,  1236 => 419,  1229 => 415,  1180 => 369,  1160 => 352,  1155 => 350,  1152 => 349,  1148 => 347,  1142 => 346,  1134 => 344,  1126 => 342,  1123 => 341,  1119 => 340,  1114 => 339,  1112 => 338,  1109 => 337,  1105 => 335,  1096 => 333,  1092 => 332,  1086 => 330,  1084 => 329,  1077 => 324,  1056 => 321,  1053 => 320,  1051 => 319,  1047 => 317,  1041 => 315,  1039 => 314,  1032 => 312,  1026 => 309,  1022 => 308,  1018 => 307,  1014 => 305,  1009 => 302,  998 => 300,  994 => 299,  991 => 298,  980 => 296,  976 => 295,  972 => 294,  966 => 291,  963 => 290,  961 => 289,  958 => 288,  955 => 287,  949 => 286,  943 => 283,  933 => 280,  926 => 278,  919 => 277,  916 => 276,  910 => 273,  899 => 269,  892 => 267,  885 => 266,  883 => 265,  880 => 264,  874 => 261,  864 => 258,  857 => 256,  850 => 255,  848 => 254,  845 => 253,  839 => 250,  832 => 248,  816 => 247,  809 => 245,  802 => 244,  800 => 243,  797 => 242,  791 => 239,  781 => 238,  775 => 237,  768 => 236,  766 => 235,  763 => 234,  757 => 231,  747 => 230,  741 => 229,  734 => 228,  732 => 227,  729 => 226,  723 => 223,  719 => 221,  711 => 218,  704 => 217,  702 => 216,  697 => 215,  684 => 214,  682 => 213,  672 => 212,  669 => 211,  665 => 210,  660 => 208,  656 => 207,  649 => 206,  647 => 205,  644 => 204,  638 => 201,  635 => 200,  627 => 197,  620 => 195,  618 => 194,  613 => 193,  591 => 192,  588 => 191,  584 => 190,  580 => 189,  576 => 188,  569 => 187,  567 => 186,  564 => 185,  558 => 182,  555 => 181,  548 => 179,  541 => 178,  539 => 177,  532 => 176,  528 => 175,  524 => 174,  514 => 173,  507 => 172,  505 => 171,  502 => 170,  498 => 169,  493 => 167,  490 => 166,  488 => 165,  484 => 163,  480 => 161,  477 => 160,  466 => 158,  462 => 157,  457 => 154,  454 => 153,  446 => 151,  443 => 150,  435 => 148,  432 => 147,  426 => 144,  420 => 142,  414 => 139,  411 => 138,  409 => 137,  406 => 136,  404 => 135,  396 => 133,  388 => 131,  386 => 130,  379 => 129,  369 => 127,  367 => 126,  362 => 124,  353 => 120,  347 => 119,  341 => 116,  338 => 115,  335 => 114,  332 => 113,  329 => 112,  326 => 111,  324 => 110,  319 => 107,  314 => 105,  308 => 103,  299 => 99,  293 => 96,  288 => 94,  275 => 84,  270 => 82,  264 => 79,  260 => 78,  251 => 74,  248 => 73,  246 => 72,  242 => 71,  237 => 68,  234 => 67,  228 => 63,  221 => 61,  212 => 58,  208 => 57,  205 => 56,  201 => 55,  194 => 51,  190 => 49,  186 => 48,  181 => 45,  179 => 44,  175 => 43,  171 => 41,  165 => 39,  162 => 38,  156 => 36,  154 => 35,  150 => 34,  146 => 32,  142 => 30,  139 => 29,  122 => 27,  117 => 26,  114 => 25,  100 => 23,  98 => 22,  95 => 21,  93 => 20,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  71 => 12,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "C:\\xampp\\htdocs\\opencart\\upload\\catalog\\view\\template\\product\\product.twig");
    }
}
