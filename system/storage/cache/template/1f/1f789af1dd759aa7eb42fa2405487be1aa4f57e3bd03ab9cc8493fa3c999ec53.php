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

/* journal3/template/checkout/login.twig */
class __TwigTemplate_abb8e38dfdb2e15429097b28f52fab2c8026b1b818b381447faca10cc839f3b8 extends \Twig\Template
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
        echo "<div class=\"row login-box\">
  <div class=\"col-sm-6\">
    <div class=\"well\">
      <h2 class=\"title\">";
        // line 4
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
      <p>";
        // line 5
        echo ($context["text_checkout"] ?? null);
        echo "</p>
      <div class=\"radio\">
        <label> ";
        // line 7
        if ((($context["account"] ?? null) == "register")) {
            // line 8
            echo "            <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
          ";
        } else {
            // line 10
            echo "            <input type=\"radio\" name=\"account\" value=\"register\" />
          ";
        }
        // line 12
        echo "          ";
        echo ($context["text_register"] ?? null);
        echo "</label>
      </div>
      ";
        // line 14
        if (($context["checkout_guest"] ?? null)) {
            // line 15
            echo "        <div class=\"radio\">
          <label> ";
            // line 16
            if ((($context["account"] ?? null) == "guest")) {
                // line 17
                echo "              <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
            ";
            } else {
                // line 19
                echo "              <input type=\"radio\" name=\"account\" value=\"guest\" />
            ";
            }
            // line 21
            echo "            ";
            echo ($context["text_guest"] ?? null);
            echo "</label>
        </div>
      ";
        }
        // line 24
        echo "      <p>";
        echo ($context["text_register_account"] ?? null);
        echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\">
          <button type=\"button\" id=\"button-account\" data-loading-text=\"";
        // line 27
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_continue"] ?? null);
        echo "</span></button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-sm-6\">
    <div class=\"well\">
      <h2 class=\"title\">";
        // line 34
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
      <p>";
        // line 35
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</p>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-email\">";
        // line 37
        echo ($context["entry_email"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-password\">";
        // line 41
        echo ($context["entry_password"] ?? null);
        echo "</label>
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 42
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
        <a href=\"";
        // line 43
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
      <div class=\"buttons\">
        <div class=\"pull-right\">
          <button type=\"button\" id=\"button-login\" data-loading-text=\"";
        // line 46
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_login"] ?? null);
        echo "</span></button>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  135 => 43,  131 => 42,  127 => 41,  121 => 38,  117 => 37,  112 => 35,  108 => 34,  96 => 27,  89 => 24,  82 => 21,  78 => 19,  74 => 17,  72 => 16,  69 => 15,  67 => 14,  61 => 12,  57 => 10,  53 => 8,  51 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/checkout/login.twig", "");
    }
}
