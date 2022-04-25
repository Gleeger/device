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

/* extension/dashboard/d_seo_module_target_keyword_info.twig */
class __TwigTemplate_516b5da481bbe2a3c9f26307f7eac978ae3639c21a14ed80302c6721d73258f4 extends \Twig\Template
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
        echo "<div id=\"";
        echo ($context["codename"] ?? null);
        echo "\" class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\"><i class=\"fa fa-key\"></i> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t</div>
\t<div class=\"panel-body\"></div>\t
</div>
<script type=\"text/javascript\">

var ";
        // line 9
        echo ($context["codename"] ?? null);
        echo "_store_tab;

";
        // line 11
        echo ($context["codename"] ?? null);
        echo "_refresh();

function ";
        // line 13
        echo ($context["codename"] ?? null);
        echo "_update() {
\tif (";
        // line 14
        echo ($context["codename"] ?? null);
        echo "_store_tab) {
\t\t\$('#";
        // line 15
        echo ($context["codename"] ?? null);
        echo " .stores .nav-store[href=\"' + ";
        echo ($context["codename"] ?? null);
        echo "_store_tab + '\"]').tab('show');
\t} else {
\t\t\$('#";
        // line 17
        echo ($context["codename"] ?? null);
        echo " .stores .nav-store:first').tab('show');
\t}
}

function ";
        // line 21
        echo ($context["codename"] ?? null);
        echo "_refresh() {
\tvar url = 'index.php?route=";
        // line 22
        echo ($context["route"] ?? null);
        echo "/refresh&";
        echo ($context["url_token"] ?? null);
        echo "';
\t\t\t
\t\$('#";
        // line 24
        echo ($context["codename"] ?? null);
        echo "').load(url + ' #";
        echo ($context["codename"] ?? null);
        echo " >', function() {
\t\t";
        // line 25
        echo ($context["codename"] ?? null);
        echo "_update();
\t});
}

function ";
        // line 29
        echo ($context["codename"] ?? null);
        echo "_showAlert(json) {
\t\$('#";
        // line 30
        echo ($context["codename"] ?? null);
        echo " .alert').remove();
\t\$('#";
        // line 31
        echo ($context["codename"] ?? null);
        echo " .form-group').removeClass('has-error');
\t\t\t\t\t\t
\tif (json['error']) {
\t\tif (json['error']['warning']) {
\t\t\t\$('#";
        // line 35
        echo ($context["codename"] ?? null);
        echo " .panel-body').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['error']['warning'] + '</div>');
\t\t}\t\t\t\t
\t\t\t\t
\t\tfor (i in json['error']) {
\t\t\tvar element = \$('#";
        // line 39
        echo ($context["codename"] ?? null);
        echo " #input_' + i);
\t\t\t\t\t
\t\t\tif (element.parent().hasClass('input-group')) {
                \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t} else {
\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t}
\t\t}\t\t\t\t
\t\t\t\t
\t\t\$('#";
        // line 48
        echo ($context["codename"] ?? null);
        echo " .text-danger').parents('.form-group').addClass('has-error');
\t}
\t\t\t
\tif (json['success']) {
\t\t\$('#";
        // line 52
        echo ($context["codename"] ?? null);
        echo " .panel-body').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['success'] + '</div>');
\t}
}
</script>
<script type=\"text/javascript\">

\$('#";
        // line 58
        echo ($context["codename"] ?? null);
        echo "').on('shown.bs.tab', '.nav-store[data-toggle=\"tab\"]', function (e) {
    ";
        // line 59
        echo ($context["codename"] ?? null);
        echo "_store_tab = \$(this).attr('href');
});

\$('#";
        // line 62
        echo ($context["codename"] ?? null);
        echo "').on('click', '.target-element-cell', function() {
\tvar target_element = \$(this).children('.target-element-field');
\t\t
\tif (\$(target_element).children('.input-field').hasClass('hide') && (\$(target_element).children('.input-field').attr('type') != 'hidden')) {
\t\t\$('.popover').popover('hide', function() {
\t\t\t\$('.popover').remove();
\t\t});
\t
\t\t\$('.text-field').removeClass('hide');
\t\t\$('.input-field').addClass('hide');

\t\t\$(target_element).popover({
\t\t\thtml: true,
\t\t\tplacement: 'top',
\t\t\ttrigger: 'manual',
\t\t\tcontent: function() {
\t\t\t\treturn '<button type=\"button\" id=\"button_save\" class=\"btn btn-primary\" target_element_field_id=\"' + target_element.attr('id') + '\"><i class=\"fa fa-save\"></i></button> <button type=\"button\" id=\"button_cancel\" class=\"btn btn-danger\" target_element_field_id=\"' + target_element.attr('id') + '\"><i class=\"fa fa-remove\"></i></button>';
\t\t\t}
\t\t});

\t\t\$(target_element).popover('show');
\t
\t\t\$(target_element).children('.text-field').addClass('hide');
\t\t\$(target_element).children('.input-field').removeClass('hide');
\t}
});

\$('#";
        // line 89
        echo ($context["codename"] ?? null);
        echo "').on('click', '#button_save', function() {
\tvar target_element = \$('#' + \$(this).attr('target_element_field_id'));
\tvar route = \$(target_element).attr('route');
\tvar store_id = \$(target_element).attr('store_id');
\tvar language_id = \$(target_element).attr('language_id');
\tvar target_keyword = \$(target_element).children('.input-field').val();
\t\t
\t\$.ajax({
\t\turl: 'index.php?route=";
        // line 97
        echo ($context["route"] ?? null);
        echo "/editTargetElement&";
        echo ($context["url_token"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: 'route=' + route + '&store_id=' + store_id + '&language_id=' + language_id + '&target_keyword=' + encodeURIComponent(target_keyword),
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t";
        // line 102
        echo ($context["codename"] ?? null);
        echo "_showAlert(json);
\t\t\t\t\t\t
\t\t\t\$(target_element).popover('hide', function() {
\t\t\t\t\$('.popover').remove();
\t\t\t});
\t\t\t
\t\t\tsetTimeout(function() {
\t\t\t\tif (json['error'].length == 0) {
\t\t\t\t\t\$(target_element).children('.text-field').text(\$(target_element).children('.input-field').val());
\t\t\t\t\t";
        // line 111
        echo ($context["codename"] ?? null);
        echo "_refresh();
\t\t\t\t} else {
\t\t\t\t\t\$(target_element).children('.input-field').val(\$(target_element).children('.text-field').text().replace(/<.*?>/g, ''));
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$(target_element).children('.text-field').removeClass('hide');
\t\t\t\t\$(target_element).children('.input-field').addClass('hide');
\t\t\t}, 200);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
\t\t
\$('#";
        // line 126
        echo ($context["codename"] ?? null);
        echo "').on('click', '#button_cancel', function() {
\tvar target_element = \$('#' + \$(this).attr('target_element_field_id'));
\t\t
\t\$(target_element).popover('hide', function() {
\t\t\$('.popover').remove();
\t});
\t\t\t
\tsetTimeout(function() {
\t\t\$(target_element).children('.input-field').val(\$(target_element).children('.text-field').text().replace(/<.*?>/g, ''));
\t\t\$(target_element).children('.text-field').removeClass('hide');
\t\t\$(target_element).children('.input-field').addClass('hide');
\t}, 200);
});

</script>";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/d_seo_module_target_keyword_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 126,  231 => 111,  219 => 102,  209 => 97,  198 => 89,  168 => 62,  162 => 59,  158 => 58,  149 => 52,  142 => 48,  130 => 39,  123 => 35,  116 => 31,  112 => 30,  108 => 29,  101 => 25,  95 => 24,  88 => 22,  84 => 21,  77 => 17,  70 => 15,  66 => 14,  62 => 13,  57 => 11,  52 => 9,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/d_seo_module_target_keyword_info.twig", "");
    }
}
