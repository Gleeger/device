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

/* journal3/template/journal3/admin_profiler.twig */
class __TwigTemplate_43f17453d78d074a4b6ed8080d2080af4f0a8e27ffde40e3e546e1fbdd5642a1 extends \Twig\Template
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
        echo "<script>
  console.table(";
        // line 2
        echo json_encode(($context["stats"] ?? null));
        echo ");
  console.info('TTFB: ', '";
        // line 3
        echo (($context["ttfb"] ?? null) . "ms");
        echo "');
</script>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/admin_profiler.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/admin_profiler.twig", "");
    }
}
