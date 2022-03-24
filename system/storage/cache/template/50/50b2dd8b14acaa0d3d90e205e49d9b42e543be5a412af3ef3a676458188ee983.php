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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_5a57d18361ca98e96cc58f8d2d33acd9637a968412d5ff9bc7cca0ea266e90ce extends Template
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
<div id=\"account-account\" class=\"container\">
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
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">
    ";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 14
        echo ($context["content_top"] ?? null);
        echo "
      <h2>
        ";
        // line 16
        echo ($context["text_my_account"] ?? null);
        echo "
      </h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 19
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 20
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 21
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 22
        echo ($context["payment_method"] ?? null);
        echo "\">";
        echo ($context["text_payment_method"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 23
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      <h2>
        ";
        // line 26
        echo ($context["text_my_orders"] ?? null);
        echo "
      </h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 29
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 30
        echo ($context["subscription"] ?? null);
        echo "\">";
        echo ($context["text_subscription"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 31
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
        ";
        // line 32
        if (($context["reward"] ?? null)) {
            // line 33
            echo "          <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 35
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 36
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 38
        if (($context["affiliate"] ?? null)) {
            // line 39
            echo "        <h2>
          ";
            // line 40
            echo ($context["text_my_affiliate"] ?? null);
            echo "
        </h2>
        <ul class=\"list-unstyled\">
          ";
            // line 43
            if ( !($context["tracking"] ?? null)) {
                // line 44
                echo "            <li><a href=\"";
                echo ($context["affiliate"] ?? null);
                echo "\">";
                echo ($context["text_affiliate_add"] ?? null);
                echo "</a></li>
          ";
            } else {
                // line 46
                echo "            <li><a href=\"";
                echo ($context["affiliate"] ?? null);
                echo "\">";
                echo ($context["text_affiliate_edit"] ?? null);
                echo "</a></li>
            <li><a href=\"";
                // line 47
                echo ($context["tracking"] ?? null);
                echo "\">";
                echo ($context["text_tracking"] ?? null);
                echo "</a></li>
          ";
            }
            // line 49
            echo "        </ul>
      ";
        }
        // line 51
        echo "      <h2>
        ";
        // line 52
        echo ($context["text_my_newsletter"] ?? null);
        echo "
      </h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 55
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 57
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 59
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 62
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 62,  228 => 59,  223 => 57,  216 => 55,  210 => 52,  207 => 51,  203 => 49,  196 => 47,  189 => 46,  181 => 44,  179 => 43,  173 => 40,  170 => 39,  168 => 38,  161 => 36,  154 => 35,  146 => 33,  144 => 32,  138 => 31,  132 => 30,  126 => 29,  120 => 26,  112 => 23,  106 => 22,  100 => 21,  94 => 20,  88 => 19,  82 => 16,  77 => 14,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/account.twig", "C:\\xampp\\htdocs\\opencart\\upload\\catalog\\view\\template\\account\\account.twig");
    }
}
