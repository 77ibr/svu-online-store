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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_aa78b0423361705bd5e918fbc384738e2e6612a7c9e4f23057f22e1a82cf33a1 extends Template
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
        echo "<div class=\"product-thumb transition\">
  <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 2
        echo ($context["cart"] ?? null);
        echo "\" data-oc-target=\"#header-cart\">
    <div class=\"image\"><a href=\"";
        // line 3
        echo ($context["href"] ?? null);
        echo "\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-fluid\"/></a></div>
    <div class=\"caption\">
      <h4><a href=\"";
        // line 5
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a></h4>
      <p>";
        // line 6
        echo ($context["description"] ?? null);
        echo "</p>
      ";
        // line 7
        if (($context["price"] ?? null)) {
            // line 8
            echo "        <div class=\"price\">
          ";
            // line 9
            if ( !($context["special"] ?? null)) {
                // line 10
                echo "            ";
                echo ($context["price"] ?? null);
                echo "
          ";
            } else {
                // line 12
                echo "            <span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
          ";
            }
            // line 14
            echo "          ";
            if (($context["tax"] ?? null)) {
                // line 15
                echo "            <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</span>
          ";
            }
            // line 17
            echo "        </div>
      ";
        }
        // line 19
        echo "      ";
        if ((($context["review_status"] ?? null) && ($context["rating"] ?? null))) {
            // line 20
            echo "        <div class=\"rating\">
          ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "            ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 23
                    echo "              <span class=\"fas fa-stack\"><i class=\"far fa-star fa-stack-2x\"></i></span>
            ";
                } else {
                    // line 25
                    echo "              <span class=\"fas fa-stack\"><i class=\"fas fa-star fa-stack-2x\"></i><i class=\"far fa-star fa-stack-2x\"></i></span>
            ";
                }
                // line 27
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
      ";
        }
        // line 30
        echo "    </div>
    <div class=\"button-group\">
      <button type=\"submit\" formaction=\"";
        // line 32
        echo ($context["add_to_cart"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\"><i class=\"fas fa-shopping-cart\"></i> <span class=\"d-none d-lg-inline\">";
        echo ($context["button_cart"] ?? null);
        echo "</span></button>
      <button type=\"submit\" formaction=\"";
        // line 33
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\"><i class=\"fas fa-heart\"></i></button>
      <button type=\"submit\" formaction=\"";
        // line 34
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\"><i class=\"fas fa-exchange-alt\"></i></button>
    </div>
    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 36
        echo ($context["product_id"] ?? null);
        echo "\"/>
    <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 37
        echo ($context["minimum"] ?? null);
        echo "\"/>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 37,  157 => 36,  150 => 34,  144 => 33,  136 => 32,  132 => 30,  128 => 28,  122 => 27,  118 => 25,  114 => 23,  111 => 22,  107 => 21,  104 => 20,  101 => 19,  97 => 17,  89 => 15,  86 => 14,  78 => 12,  72 => 10,  70 => 9,  67 => 8,  65 => 7,  61 => 6,  55 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/thumb.twig", "C:\\xampp\\htdocs\\opencart\\upload\\catalog\\view\\template\\product\\thumb.twig");
    }
}
