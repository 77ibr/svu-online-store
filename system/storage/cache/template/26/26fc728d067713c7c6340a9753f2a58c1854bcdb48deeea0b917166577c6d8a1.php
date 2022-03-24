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

/* admin/view/template/customer/customer.twig */
class __TwigTemplate_fa9bfe5ef8809330191cb3a7c21920eb7040566fa03f12effa6bc1043845f401 extends Template
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
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-customer').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fas fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-customer\" formaction=\"";
        // line 8
        echo ($context["delete"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-customer').submit() : false;\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-customer\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 22
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 25
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 26
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" list=\"list-name\" class=\"form-control\"/>
              <datalist id=\"list-name\"></datalist>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 30
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_email\" value=\"";
        // line 31
        echo ($context["filter_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" list=\"list-email\" class=\"form-control\"/>
              <datalist id=\"list-email\"></datalist>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-customer-group\" class=\"form-label\">";
        // line 35
        echo ($context["entry_customer_group"] ?? null);
        echo "</label> <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                <option value=\"\"></option>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 38
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 38);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 38) == ($context["filter_customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 38);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-status\" class=\"form-label\">";
        // line 43
        echo ($context["entry_status"] ?? null);
        echo "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                <option value=\"\"></option>
                <option value=\"1\"";
        // line 45
        if ((($context["filter_status"] ?? null) == "1")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                <option value=\"0\" ";
        // line 46
        if ((($context["filter_status"] ?? null) == "0")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-ip\" class=\"form-label\">";
        // line 50
        echo ($context["entry_ip"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 51
        echo ($context["filter_ip"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ip"] ?? null);
        echo "\" id=\"input-ip\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-added\" class=\"form-label\">";
        // line 54
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 56
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" id=\"input-date-added\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 61
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 68
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div id=\"customer\" class=\"card-body\">";
        // line 69
        echo ($context["list"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#customer').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#customer').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_email = \$('#input-email').val();

    if (filter_email) {
        url += '&filter_email=' + encodeURIComponent(filter_email);
    }

    var filter_customer_group_id = \$('#input-customer-group').val();

    if (filter_customer_group_id !== '') {
        url += '&filter_customer_group_id=' + filter_customer_group_id;
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    var filter_date_added = \$('#input-date-added').val();

    if (filter_date_added) {
        url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }

    \$('#customer').load('index.php?route=customer/customer|list&user_token=";
        // line 121
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 127
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {}
});

\$('#input-email').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer|autocomplete&user_token=";
        // line 145
        echo ($context["user_token"] ?? null);
        echo "&filter_email=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['email'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {}
});
//--></script>
";
        // line 160
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/customer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 160,  305 => 145,  284 => 127,  275 => 121,  220 => 69,  216 => 68,  206 => 61,  196 => 56,  191 => 54,  183 => 51,  179 => 50,  168 => 46,  160 => 45,  155 => 43,  150 => 40,  135 => 38,  131 => 37,  126 => 35,  117 => 31,  113 => 30,  104 => 26,  100 => 25,  94 => 22,  85 => 15,  74 => 13,  70 => 12,  65 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/customer.twig", "C:\\xampp\\htdocs\\opencart\\upload\\admin\\view\\template\\customer\\customer.twig");
    }
}
