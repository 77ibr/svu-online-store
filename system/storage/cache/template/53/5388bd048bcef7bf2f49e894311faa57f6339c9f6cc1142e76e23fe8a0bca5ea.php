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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_3b1c8188508178532e4e29976d10de77f14c500dbaa9a263fba5c30e58bbced1 extends Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-center\">";
        // line 5
        echo ($context["column_image"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 6
        echo ($context["column_name"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 7
        echo ($context["column_model"] ?? null);
        echo "</td>
        <td class=\"text-start\">";
        // line 8
        echo ($context["column_quantity"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 9
        echo ($context["column_price"] ?? null);
        echo "</td>
        <td class=\"text-end\">";
        // line 10
        echo ($context["column_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "        <tr>
          <td class=\"text-center\">";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
          <td class=\"text-start\"><a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 17)) {
                echo " <span class=\"text-danger\">***</span>";
            }
            // line 18
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18)) {
                // line 19
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 20
                    echo "                <br/>
                <small> - ";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 21);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 21);
                    echo "</small>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 24)) {
                // line 25
                echo "              <br/>
              <small>";
                // line 26
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 26);
                echo "</small>
            ";
            }
            // line 28
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 28)) {
                // line 29
                echo "              <br/>
              <small>";
                // line 30
                echo ($context["text_subscription"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 30);
                echo "</small>
            ";
            }
            // line 32
            echo "          </td>
          <td class=\"text-start\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 33);
            echo "</td>
          <td class=\"text-start\">

            <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
            // line 36
            echo ($context["list"] ?? null);
            echo "\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38);
            echo "\" size=\"1\" class=\"form-control\"> <input type=\"hidden\" name=\"key\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 38);
            echo "\">
                <button type=\"submit\" formaction=\"";
            // line 39
            echo ($context["product_edit"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fas fa-sync-alt\"></i></button>
                <button type=\"submit\" formaction=\"";
            // line 40
            echo ($context["product_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-times-circle\"></i></button>
              </div>
            </form>

          </td>
          <td class=\"text-end\">";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 45);
            echo "</td>
          <td class=\"text-end\">";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 46);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 50
            echo "        <tr>
          <td></td>
          <td class=\"text-start\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 52);
            echo "</td>
          <td class=\"text-start\"></td>
          <td class=\"text-start\">

            <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
            // line 56
            echo ($context["list"] ?? null);
            echo "\" data-oc-target=\"#shopping-cart\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"quantity\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
                <button type=\"submit\" formaction=\"";
            // line 59
            echo ($context["voucher_remove"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-times-circle\"></i></button>
              </div>
              <input type=\"hidden\" name=\"key\" value=\"";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 61);
            echo "\"/>
            </form>

          </td>
          <td class=\"text-end\">";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 65);
            echo "</td>
          <td class=\"text-end\">";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 66);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </tbody>
    <tfoot id=\"checkout-total\">
      ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 72
            echo "        <tr>
          <td colspan=\"5\" class=\"text-end\"><strong>";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 73);
            echo "</strong></td>
          <td class=\"text-end\">";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 74);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </tfoot>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 77,  262 => 74,  258 => 73,  255 => 72,  251 => 71,  247 => 69,  238 => 66,  234 => 65,  227 => 61,  220 => 59,  214 => 56,  207 => 52,  203 => 50,  198 => 49,  189 => 46,  185 => 45,  175 => 40,  169 => 39,  163 => 38,  158 => 36,  152 => 33,  149 => 32,  142 => 30,  139 => 29,  136 => 28,  129 => 26,  126 => 25,  123 => 24,  120 => 23,  110 => 21,  107 => 20,  102 => 19,  99 => 18,  91 => 17,  77 => 16,  74 => 15,  70 => 14,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart_list.twig", "C:\\xampp\\htdocs\\opencart\\upload\\catalog\\view\\template\\checkout\\cart_list.twig");
    }
}
