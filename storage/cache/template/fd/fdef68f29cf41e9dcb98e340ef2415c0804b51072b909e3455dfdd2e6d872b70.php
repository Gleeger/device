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

/* journal3/template/journal3/module/notification.twig */
class __TwigTemplate_5da5c18fa6e3c01f711a50e5b412fa595cc44af93215237e293d64fcdcd0aa09 extends \Twig\Template
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
        echo "<div class=\"notification-wrapper notification-wrapper-bottom\">
  <div class=\"";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 2);
        echo "\" data-options='";
        echo json_encode(($context["options"] ?? null));
        echo "'>
    <button class=\"btn notification-close\">";
        // line 3
        echo ($context["notificationCloseText"] ?? null);
        echo "</button>
    <div class=\"notification-content\">
      <div>
        <div class=\"notification-title\">";
        // line 6
        echo ($context["title"] ?? null);
        echo "</div>
        <div class=\"notification-text\">";
        // line 7
        echo ($context["text"] ?? null);
        echo "</div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/notification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  52 => 6,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/notification.twig", "");
    }
}
