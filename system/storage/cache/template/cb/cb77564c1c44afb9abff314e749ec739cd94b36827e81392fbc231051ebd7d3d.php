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

/* catalog/view/template/checkout/cart.twig */
class __TwigTemplate_7c45b9c14dbe822e3aada1d723df4471f4b9a891a8d5f4c49074af373f921f86 extends Template
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
<div id=\"checkout-cart\" class=\"container\">
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
        if (($context["attention"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 11
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 14
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 17
        echo "  <div class=\"row\">
    ";
        // line 18
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 21
        echo ($context["heading_title"] ?? null);
        if (($context["weight"] ?? null)) {
            echo " (";
            echo ($context["weight"] ?? null);
            echo ")";
        }
        echo "</h1>
      <div id=\"shopping-cart\">";
        // line 22
        echo ($context["list"] ?? null);
        echo "</div>
      ";
        // line 23
        if (($context["modules"] ?? null)) {
            // line 24
            echo "        <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
        <p>";
            // line 25
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
        <div id=\"accordion\" class=\"accordion\">
          ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 28
                echo "            ";
                echo $context["module"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </div>
      ";
        }
        // line 32
        echo "      <br/>
      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-start\"><a href=\"";
        // line 34
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"float-end\"><a href=\"";
        // line 35
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 37
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 39
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 42
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 42,  163 => 39,  158 => 37,  151 => 35,  145 => 34,  141 => 32,  137 => 30,  128 => 28,  124 => 27,  119 => 25,  114 => 24,  112 => 23,  108 => 22,  99 => 21,  95 => 20,  90 => 18,  87 => 17,  81 => 15,  78 => 14,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart.twig", "C:\\xampp\\htdocs\\opencart\\upload\\catalog\\view\\template\\checkout\\cart.twig");
    }
}
