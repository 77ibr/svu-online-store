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

/* install/view/template/install/step_4.twig */
class __TwigTemplate_0741faad06ae26c42205a7f71b517253eecb30a50cb45fa8172e45c06bff193e extends Template
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
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container\">
\t\t\t<h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 9
        echo ($context["error_warning"] ?? null);
        echo " <button type=\"button\" class=\"close\" data-bs-dismiss=\"alert\"></button></div>
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 11
        echo ($context["text_step_4"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body p-4\">
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-6 text-center\">
\t\t\t\t\t\t<a href=\"../\"><img src=\"view/image/catalog.jpg\" alt=\"OpenCart\" title=\"OpenCart\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<a href=\"../\" class=\"btn btn-outline-secondary mt-3\">";
        // line 17
        echo ($context["text_catalog"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 text-center\">
\t\t\t\t\t\t<a href=\"../admin/\" class=\"mb-3\"><img src=\"view/image/admin.jpg\" alt=\"OpenCart\" title=\"OpenCart\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<a href=\"../admin/\" class=\"btn btn-outline-secondary mt-3\">";
        // line 22
        echo ($context["text_admin"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-4\">";
        // line 25
        echo ($context["promotion"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"m-4 text-center\"><a href=\"https://www.opencart.com/index.php?route=marketplace/extension&utm_source=opencart_install&utm_medium=store_link&utm_campaign=opencart_install\" target=\"_blank\" class=\"btn btn-outline-secondary\">";
        // line 26
        echo ($context["text_extension"] ?? null);
        echo "</a></div>
\t\t\t\t<fieldset class=\"mb-5\">
\t\t\t\t\t<legend><i class=\"fa fa-envelope-o\"></i> ";
        // line 28
        echo ($context["text_mail"] ?? null);
        echo "</legend>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<p class=\"pb-2\">";
        // line 30
        echo ($context["text_mail_description"] ?? null);
        echo "</p>
\t\t\t\t\t\t<a href=\"http://newsletter.opencart.com/h/r/B660EBBE4980C85C\" target=\"_BLANK\" class=\"btn btn-primary\"><i class=\"fa fa-envelope-o\"></i> ";
        // line 31
        echo ($context["button_mail"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t<h3><a href=\"https://www.facebook.com/opencart/\" target=\"_blank\" class=\"icon transition\"><i class=\"fa fa-facebook\"></i></a> ";
        // line 36
        echo ($context["text_facebook"] ?? null);
        echo "</h3>
\t\t\t\t\t\t<p>";
        // line 37
        echo ($context["text_facebook_description"] ?? null);
        echo "</p>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/opencart/\" target=\"_blank\">";
        // line 38
        echo ($context["text_facebook_visit"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t<h3><a href=\"https://forum.opencart.com/?utm_source=opencart_install&utm_medium=forum_link&utm_campaign=opencart_install\" target=\"_blank\" class=\"icon transition\"><i class=\"fa fa-comments\"></i></a> ";
        // line 41
        echo ($context["text_forum"] ?? null);
        echo "</h3>
\t\t\t\t\t\t<p>";
        // line 42
        echo ($context["text_forum_description"] ?? null);
        echo "</p>
\t\t\t\t\t\t<a href=\"https://forum.opencart.com/?utm_source=opencart_install&utm_medium=forum_link&utm_campaign=opencart_install\" target=\"_blank\">";
        // line 43
        echo ($context["text_forum_visit"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t<h3><a href=\"https://www.opencart.com/index.php?route=support/partner&utm_source=opencart_install&utm_medium=partner_link&utm_campaign=opencart_install\" target=\"_blank\" class=\"icon transition\"><i class=\"fa fa-user\"></i></a> ";
        // line 46
        echo ($context["text_commercial"] ?? null);
        echo "</h3>
\t\t\t\t\t\t<p>";
        // line 47
        echo ($context["text_commercial_description"] ?? null);
        echo "</p>
\t\t\t\t\t\t<a href=\"https://www.opencart.com/index.php?route=support/partner&utm_source=opencart_install&utm_medium=partner_link&utm_campaign=opencart_install\" target=\"_blank\">";
        // line 48
        echo ($context["text_commercial_visit"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 55
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "install/view/template/install/step_4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 55,  141 => 48,  137 => 47,  133 => 46,  127 => 43,  123 => 42,  119 => 41,  113 => 38,  109 => 37,  105 => 36,  97 => 31,  93 => 30,  88 => 28,  83 => 26,  79 => 25,  73 => 22,  65 => 17,  56 => 11,  51 => 9,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/view/template/install/step_4.twig", "C:\\xampp\\htdocs\\opencart\\upload\\install\\view\\template\\install\\step_4.twig");
    }
}
