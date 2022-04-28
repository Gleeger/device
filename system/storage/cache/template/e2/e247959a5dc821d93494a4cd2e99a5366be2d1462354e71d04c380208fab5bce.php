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

/* journal3/template/extension/total/reward.twig */
class __TwigTemplate_bdf613977bd131f68c4ae65468a29889f55f79aacb528257322c4b5d13bb8e9c extends \Twig\Template
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
        echo "<div class=\"panel panel-default panel-reward\">
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\"><a href=\"#collapse-reward\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-reward\" class=\"panel-collapse collapse\">
    <div class=\"panel-body form-group\">
      <label class=\"control-label\" for=\"input-reward\">";
        // line 7
        echo ($context["entry_reward"] ?? null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" name=\"reward\" value=\"";
        // line 9
        echo ($context["reward"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reward"] ?? null);
        echo "\" id=\"input-reward\" class=\"form-control\" />
        <span class=\"input-group-btn\">
        <input type=\"submit\" value=\"";
        // line 11
        echo ($context["button_reward"] ?? null);
        echo "\" id=\"button-reward\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\"  class=\"btn btn-primary\" />
        </span></div>
      <script type=\"text/javascript\"><!--
\$('#button-reward').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/reward/reward',
\t\ttype: 'post',
\t\tdata: 'reward=' + encodeURIComponent(\$('input[name=\\'reward\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
        \$('.container').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/extension/total/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  53 => 9,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/extension/total/reward.twig", "");
    }
}
