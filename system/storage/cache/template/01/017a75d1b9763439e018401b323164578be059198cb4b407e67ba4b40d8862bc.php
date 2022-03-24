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

/* admin/view/template/customer/customer_list.twig */
class __TwigTemplate_7546d56a88d8a80db0d51405b103ce8c636bf3284b4434bcf706663e0bf2b7b0 extends Template
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
        echo "<form id=\"form-customer\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#customer\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_email"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "c.email")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_email"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 9
        echo ($context["sort_customer_group"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "customer_group")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_customer_group"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 10
        echo ($context["sort_status"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "c.status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_status"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "c.date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\">";
        // line 12
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 16
        if (($context["customers"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 18
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 19);
                echo "\" class=\"form-check-input\"/></td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 20);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 21);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 22);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 23);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 24);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t<div class=\"btn-group dropdown\">

\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 28);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a>

\t\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"><span class=\"fas fa-caret-down\"></span></button>

\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t<li><h6 class=\"dropdown-header\">";
                // line 33
                echo ($context["text_option"] ?? null);
                echo "</h6></li>
\t\t\t\t\t\t\t\t\t\t";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 35);
                    echo "\" class=\"dropdown-item\"><i class=\"fas fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"dropdown-item disabled\"><i class=\"fas fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li><h6 class=\"dropdown-header\">";
                // line 40
                echo ($context["text_login"] ?? null);
                echo "</h6></li>
\t\t\t\t\t\t\t\t\t\t";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customer"], "store", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 42);
                    echo "\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fas fa-lock\"></i> ";
                    if ((twig_get_attribute($this->env, $this->source, $context["customer"], "store_id", [], "any", false, false, false, 42) == twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 42))) {
                        echo "<span class=\"text-primary\">";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 42);
                        echo "</span>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 42);
                    }
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"7\">";
            // line 51
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 54
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-start\">";
        // line 58
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t<div class=\"col-sm-6 text-end\">";
        // line 59
        echo ($context["results"] ?? null);
        echo "</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 59,  237 => 58,  231 => 54,  225 => 51,  222 => 50,  219 => 49,  209 => 44,  192 => 42,  188 => 41,  184 => 40,  181 => 39,  175 => 37,  167 => 35,  165 => 34,  161 => 33,  151 => 28,  144 => 24,  140 => 23,  136 => 22,  132 => 21,  128 => 20,  124 => 19,  121 => 18,  116 => 17,  114 => 16,  107 => 12,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/customer_list.twig", "C:\\xampp\\htdocs\\opencart\\upload\\admin\\view\\template\\customer\\customer_list.twig");
    }
}
