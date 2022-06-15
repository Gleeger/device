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

/* setting/setting.twig */
class __TwigTemplate_dbbe3a0e8475f518834b75d290a5c2e8457e056a3bdf94ef0996eaf22652bfe5 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>

      <li><a href=\"#tab-custom-js\" data-toggle=\"tab\">Custom JavaScript</a></li>
      <li><a href=\"#tab-custom-css\" data-toggle=\"tab\">Custom CSS</a></li>

      
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">

        <div class=\"tab-pane\" id=\"tab-custom-js\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\"><span data-toggle=\"tooltip\" title=\"Note that JavaScript must be wrapped by script tag.\">Custom JavaScript</span></label>
            <div class=\"col-sm-10\">
              <textarea name=\"config_custom_js\" class=\"form-control\" style=\"height: 300px;\" placeholder=\"<script>alert('hello Dear User');</script>\">";
        // line 52
        echo ($context["config_custom_js"] ?? null);
        echo "</textarea>
            </div>
          </div>
        </div>
        <div class=\"tab-pane\" id=\"tab-custom-css\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">Custom CSS</label>
            <div class=\"col-sm-10\">
              <textarea name=\"config_custom_css\" class=\"form-control\" style=\"height: 300px;\">";
        // line 60
        echo ($context["config_custom_css"] ?? null);
        echo "</textarea>
            </div>
          </div>
        </div>
      
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 67
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 69
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 70
        if (($context["error_meta_title"] ?? null)) {
            // line 71
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 72
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 75
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 77
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 81
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 83
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 87
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 92
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 92) == ($context["config_theme"] ?? null))) {
                // line 93
                echo "                    
                    <option value=\"";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 94);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 94);
                echo "</option>
                    
                    ";
            } else {
                // line 97
                echo "                    
                    <option value=\"";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 98);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 98);
                echo "</option>
                    
                    ";
            }
            // line 101
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 108
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 113
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 113) == ($context["config_layout_id"] ?? null))) {
                // line 114
                echo "                    
                    <option value=\"";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 115);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 115);
                echo "</option>
                    
                    ";
            } else {
                // line 118
                echo "                    
                    <option value=\"";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 119);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 119);
                echo "</option>
                    
                    ";
            }
            // line 122
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 130
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 132
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 133
        if (($context["error_name"] ?? null)) {
            // line 134
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 135
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 138
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 140
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 141
        if (($context["error_owner"] ?? null)) {
            // line 142
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 143
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 146
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 148
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 149
        if (($context["error_address"] ?? null)) {
            // line 150
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 151
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 154
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 156
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 160
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 162
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 163
        if (($context["error_email"] ?? null)) {
            // line 164
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 165
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 168
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 170
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 171
        if (($context["error_telephone"] ?? null)) {
            // line 172
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 173
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 176
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 178
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 182
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 183
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 184
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 188
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 190
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 194
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 196
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 199
        if (($context["locations"] ?? null)) {
            // line 200
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 201
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 203
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 204
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 204), ($context["config_location"] ?? null))) {
                    // line 205
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 205);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 206);
                    echo "
                      ";
                } else {
                    // line 208
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 208);
                    echo "\" />
                      ";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 209);
                    echo "
                      ";
                }
                // line 210
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo " </div>
              </div>
              ";
        }
        // line 214
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 217
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 222
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 222) == ($context["config_country_id"] ?? null))) {
                // line 223
                echo "                    
                    <option value=\"";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 224);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 224);
                echo "</option>
                    
                    ";
            } else {
                // line 227
                echo "                    
                    <option value=\"";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 228);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 228);
                echo "</option>
                    
                    ";
            }
            // line 231
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 237
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 244
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 248
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 248) == ($context["config_timezone"] ?? null))) {
                // line 249
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 249);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 249);
                echo "</option>
                      ";
            } else {
                // line 251
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 251);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 251);
                echo "</option>
                      ";
            }
            // line 253
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 258
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 263
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 263) == ($context["config_language"] ?? null))) {
                // line 264
                echo "                    
                    <option value=\"";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 265);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 265);
                echo "</option>
                    
                    ";
            } else {
                // line 268
                echo "                    
                    <option value=\"";
                // line 269
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 269);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 269);
                echo "</option>
                    
                    ";
            }
            // line 272
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 278
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 283
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 283) == ($context["config_admin_language"] ?? null))) {
                // line 284
                echo "                    
                    <option value=\"";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 285);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 285);
                echo "</option>
                    
                    ";
            } else {
                // line 288
                echo "                    
                    <option value=\"";
                // line 289
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 289);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 289);
                echo "</option>
                    
                    ";
            }
            // line 292
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 298
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 303
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 303) == ($context["config_currency"] ?? null))) {
                // line 304
                echo "                    
                    <option value=\"";
                // line 305
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 305);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 305);
                echo "</option>
                    
                    ";
            } else {
                // line 308
                echo "                    
                    <option value=\"";
                // line 309
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 309);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 309);
                echo "</option>
                    
                    ";
            }
            // line 312
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 318
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 320
        if (($context["config_currency_auto"] ?? null)) {
            // line 321
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 322
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 324
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 325
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 326
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 327
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 328
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 329
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 331
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 332
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 333
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 337
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 342
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 342) == ($context["config_length_class_id"] ?? null))) {
                // line 343
                echo "                    
                    <option value=\"";
                // line 344
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 344);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 344);
                echo "</option>
                    
                    ";
            } else {
                // line 347
                echo "                    
                    <option value=\"";
                // line 348
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 348);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 348);
                echo "</option>
                    
                    ";
            }
            // line 351
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 357
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 362
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 362) == ($context["config_weight_class_id"] ?? null))) {
                // line 363
                echo "                    
                    <option value=\"";
                // line 364
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 364);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 364);
                echo "</option>
                    
                    ";
            } else {
                // line 367
                echo "                    
                    <option value=\"";
                // line 368
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 368);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 368);
                echo "</option>
                    
                    ";
            }
            // line 371
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 379
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 381
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 383
        if (($context["config_product_count"] ?? null)) {
            // line 384
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 385
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 387
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 388
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 389
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 390
        if ( !($context["config_product_count"] ?? null)) {
            // line 391
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 392
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 394
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 395
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 396
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 400
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 402
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 403
        if (($context["error_limit_admin"] ?? null)) {
            // line 404
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 405
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 409
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 411
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 413
        if (($context["config_review_status"] ?? null)) {
            // line 414
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 415
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 417
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 418
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 419
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 420
        if ( !($context["config_review_status"] ?? null)) {
            // line 421
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 422
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 424
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 425
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 426
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 430
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 432
        if (($context["config_review_guest"] ?? null)) {
            // line 433
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 434
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 436
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 437
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 438
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 439
        if ( !($context["config_review_guest"] ?? null)) {
            // line 440
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 441
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 443
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 444
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 445
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 450
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 452
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 454
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 455
        if (($context["error_voucher_min"] ?? null)) {
            // line 456
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 457
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 460
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 462
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 463
        if (($context["error_voucher_max"] ?? null)) {
            // line 464
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 465
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 469
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 471
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 473
        if (($context["config_tax"] ?? null)) {
            // line 474
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 475
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 477
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 478
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 479
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 480
        if ( !($context["config_tax"] ?? null)) {
            // line 481
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 482
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 484
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 485
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 486
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 490
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 493
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 495
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 496
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 497
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 500
            echo "                      
                      <option value=\"shipping\">";
            // line 501
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 504
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 505
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 506
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 509
            echo "                      
                      <option value=\"payment\">";
            // line 510
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 513
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 518
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 521
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 523
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 524
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 525
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 528
            echo "                      
                      <option value=\"shipping\">";
            // line 529
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 532
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 533
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 534
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 537
            echo "                      
                      <option value=\"payment\">";
            // line 538
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 541
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 547
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 549
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 551
        if (($context["config_customer_online"] ?? null)) {
            // line 552
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 553
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 555
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 556
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 557
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 558
        if ( !($context["config_customer_online"] ?? null)) {
            // line 559
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 560
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 562
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 563
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 564
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 568
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 570
        if (($context["config_customer_activity"] ?? null)) {
            // line 571
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 572
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 574
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 575
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 576
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 577
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 578
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 579
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 581
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 582
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 583
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 587
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 589
        if (($context["config_customer_search"] ?? null)) {
            // line 590
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 591
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 593
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 594
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 595
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 596
        if ( !($context["config_customer_search"] ?? null)) {
            // line 597
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 598
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 600
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 601
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 602
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 606
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 610
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 611
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 611) == ($context["config_customer_group_id"] ?? null))) {
                // line 612
                echo "                      
                      <option value=\"";
                // line 613
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 613);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 613);
                echo "</option>
                      
                      ";
            } else {
                // line 616
                echo "                      
                      <option value=\"";
                // line 617
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 617);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 617);
                echo "</option>
                      
                      ";
            }
            // line 620
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 621
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 626
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 627
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 628
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 629
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 629), ($context["config_customer_group_display"] ?? null))) {
                // line 630
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 630);
                echo "\" checked=\"checked\" />
                        ";
                // line 631
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 631);
                echo "
                        ";
            } else {
                // line 633
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 633);
                echo "\" />
                        ";
                // line 634
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 634);
                echo "
                        ";
            }
            // line 635
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 638
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 639
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 640
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 643
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 645
        if (($context["config_customer_price"] ?? null)) {
            // line 646
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 647
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 649
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 650
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 651
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 652
        if ( !($context["config_customer_price"] ?? null)) {
            // line 653
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 654
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 656
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 657
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 658
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 662
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 664
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 665
        if (($context["error_login_attempts"] ?? null)) {
            // line 666
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 667
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 670
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 673
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 676
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 676) == ($context["config_account_id"] ?? null))) {
                // line 677
                echo "                      
                      <option value=\"";
                // line 678
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 678);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 678);
                echo "</option>
                      
                      ";
            } else {
                // line 681
                echo "                      
                      <option value=\"";
                // line 682
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 682);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 682);
                echo "</option>
                      
                      ";
            }
            // line 685
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 686
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 692
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 694
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 696
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 700
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 702
        if (($context["config_cart_weight"] ?? null)) {
            // line 703
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 704
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 706
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 707
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 708
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 709
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 710
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 711
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 713
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 714
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 715
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 719
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 721
        if (($context["config_checkout_guest"] ?? null)) {
            // line 722
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 723
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 725
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 726
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 727
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 728
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 729
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 730
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 732
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 733
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 734
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 738
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 741
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 743
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 744
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 744) == ($context["config_checkout_id"] ?? null))) {
                // line 745
                echo "                      
                      <option value=\"";
                // line 746
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 746);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 746);
                echo "</option>
                      
                      ";
            } else {
                // line 749
                echo "                      
                      <option value=\"";
                // line 750
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 750);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 750);
                echo "</option>
                      
                      ";
            }
            // line 753
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 754
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 759
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 764
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 764) == ($context["config_order_status_id"] ?? null))) {
                // line 765
                echo "                      
                      <option value=\"";
                // line 766
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 766);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 766);
                echo "</option>
                      
                      ";
            } else {
                // line 769
                echo "                      
                      <option value=\"";
                // line 770
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 770);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 770);
                echo "</option>
                      
                      ";
            }
            // line 773
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 774
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 779
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 781
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 782
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 783
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 783), ($context["config_processing_status"] ?? null))) {
                // line 784
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 784);
                echo "\" checked=\"checked\" />
                          ";
                // line 785
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 785);
                echo "
                          ";
            } else {
                // line 787
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 787);
                echo "\" />
                          ";
                // line 788
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 788);
                echo "
                          ";
            }
            // line 789
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 791
        echo " </div>
                    ";
        // line 792
        if (($context["error_processing_status"] ?? null)) {
            // line 793
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 794
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 797
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 799
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 800
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 801
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 801), ($context["config_complete_status"] ?? null))) {
                // line 802
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 802);
                echo "\" checked=\"checked\" />
                          ";
                // line 803
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 803);
                echo "
                          ";
            } else {
                // line 805
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 805);
                echo "\" />
                          ";
                // line 806
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 806);
                echo "
                          ";
            }
            // line 807
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 809
        echo " </div>
                    ";
        // line 810
        if (($context["error_complete_status"] ?? null)) {
            // line 811
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 812
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 815
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 819
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 820
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 820) == ($context["config_fraud_status_id"] ?? null))) {
                // line 821
                echo "                      
                      <option value=\"";
                // line 822
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 822);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 822);
                echo "</option>
                      
                      ";
            } else {
                // line 825
                echo "                      
                      <option value=\"";
                // line 826
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 826);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 826);
                echo "</option>
                      
                      ";
            }
            // line 829
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 830
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 835
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 838
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 840
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 841
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 841) == ($context["config_api_id"] ?? null))) {
                // line 842
                echo "                      
                      <option value=\"";
                // line 843
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 843);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 843);
                echo "</option>
                      
                      ";
            } else {
                // line 846
                echo "                      
                      <option value=\"";
                // line 847
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 847);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 847);
                echo "</option>
                      
                      ";
            }
            // line 850
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 851
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 857
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 859
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 861
        if (($context["config_stock_display"] ?? null)) {
            // line 862
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 863
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 865
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 866
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 867
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 868
        if ( !($context["config_stock_display"] ?? null)) {
            // line 869
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 870
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 872
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 873
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 874
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 878
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 880
        if (($context["config_stock_warning"] ?? null)) {
            // line 881
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 882
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 884
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 885
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 886
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 887
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 888
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 889
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 891
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 892
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 893
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 897
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 899
        if (($context["config_stock_checkout"] ?? null)) {
            // line 900
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 901
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 903
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 904
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 905
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 906
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 907
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 908
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 910
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 911
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 912
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 917
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 919
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 923
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 924
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 924) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 925
                echo "                      
                      <option value=\"";
                // line 926
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 926);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 926);
                echo "</option>
                      
                      ";
            } else {
                // line 929
                echo "                      
                      <option value=\"";
                // line 930
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 930);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 930);
                echo "</option>
                      
                      ";
            }
            // line 933
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 934
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 939
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 941
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 942
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 943
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 945
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 946
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 947
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 948
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 949
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 950
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 952
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 953
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 954
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 958
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 960
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 961
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 962
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 964
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 965
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 966
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 967
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 968
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 969
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 971
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 972
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 973
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 977
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 979
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 983
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 986
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 988
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 989
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 989) == ($context["config_affiliate_id"] ?? null))) {
                // line 990
                echo "                      
                      <option value=\"";
                // line 991
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 991);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 991);
                echo "</option>
                      
                      ";
            } else {
                // line 994
                echo "                      
                      <option value=\"";
                // line 995
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 995);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 995);
                echo "</option>
                      
                      ";
            }
            // line 998
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 999
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1005
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1007
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1010
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1012
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1013
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1013) == ($context["config_return_id"] ?? null))) {
                // line 1014
                echo "                      
                      <option value=\"";
                // line 1015
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1015);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1015);
                echo "</option>
                      
                      ";
            } else {
                // line 1018
                echo "                      
                      <option value=\"";
                // line 1019
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1019);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1019);
                echo "</option>
                      
                      ";
            }
            // line 1022
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1023
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1028
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1032
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1033
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1033) == ($context["config_return_status_id"] ?? null))) {
                // line 1034
                echo "                      
                      <option value=\"";
                // line 1035
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1035);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1035);
                echo "</option>
                      
                      ";
            } else {
                // line 1038
                echo "                      
                      <option value=\"";
                // line 1039
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1039);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1039);
                echo "</option>
                      
                      ";
            }
            // line 1042
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1043
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1049
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1051
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1054
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1056
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1057
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1057) == ($context["config_captcha"] ?? null))) {
                // line 1058
                echo "                      
                      <option value=\"";
                // line 1059
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1059);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1059);
                echo "</option>
                      
                      ";
            } else {
                // line 1062
                echo "                      
                      <option value=\"";
                // line 1063
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1063);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1063);
                echo "</option>
                      
                      ";
            }
            // line 1066
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1067
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1072
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1074
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1075
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1076
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1076), ($context["config_captcha_page"] ?? null))) {
                // line 1077
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1077);
                echo "\" checked=\"checked\" />
                          ";
                // line 1078
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1078);
                echo "
                          ";
            } else {
                // line 1080
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1080);
                echo "\" />
                          ";
                // line 1081
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1081);
                echo "
                          ";
            }
            // line 1082
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1084
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1091
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1092
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1093
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1097
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1098
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1099
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1105
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1107
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1111
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1112
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1113
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1116
            echo "                      
                      <option value=\"mail\">";
            // line 1117
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1120
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1121
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1122
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1125
            echo "                      
                      <option value=\"smtp\">";
            // line 1126
            echo ($context["text_smtp"] ?? null);
            echo "</option>

                    ";
        }
        // line 1129
        echo "
                    ";
        // line 1130
        if ((($context["config_mail_engine"] ?? null) == "phpmailer")) {
            // line 1131
            echo "                        
                        <option value='phpmailer' selected='selected'>PHPMailer</option>
                        
                        ";
        } else {
            // line 1135
            echo "                        
                        <option value='phpmailer'>PHPMailer</option>
                
                      
                      ";
        }
        // line 1140
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1145
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1147
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1151
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1153
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1157
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1159
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1163
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1165
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1169
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1171
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1175
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1177
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1182
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1184
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1187
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1188
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1188), ($context["config_mail_alert"] ?? null))) {
                // line 1189
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1189);
                echo "\" checked=\"checked\" />
                          ";
                // line 1190
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1190);
                echo "
                          ";
            } else {
                // line 1192
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1192);
                echo "\" />
                          ";
                // line 1193
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1193);
                echo "
                          ";
            }
            // line 1194
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1196
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1200
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1202
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1209
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1211
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1213
        if (($context["config_maintenance"] ?? null)) {
            // line 1214
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1215
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1217
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1218
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1219
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1220
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1221
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1222
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1224
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1225
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1226
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1230
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1232
        if (($context["config_seo_url"] ?? null)) {
            // line 1233
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1234
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1236
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1237
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1238
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1239
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1240
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1241
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1243
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1244
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1245
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1249
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1251
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1255
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1257
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1262
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1264
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1266
        if (($context["config_secure"] ?? null)) {
            // line 1267
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1268
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1270
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1271
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1272
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1273
        if ( !($context["config_secure"] ?? null)) {
            // line 1274
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1275
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1277
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1278
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1279
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1283
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1285
        if (($context["config_password"] ?? null)) {
            // line 1286
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1287
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1289
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1290
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1291
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1292
        if ( !($context["config_password"] ?? null)) {
            // line 1293
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1294
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1296
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1297
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1298
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1302
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1304
        if (($context["config_shared"] ?? null)) {
            // line 1305
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1306
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1308
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1309
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1310
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1311
        if ( !($context["config_shared"] ?? null)) {
            // line 1312
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1313
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1315
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1316
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1317
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1321
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1323
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1324
        if (($context["error_encryption"] ?? null)) {
            // line 1325
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1326
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1330
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1332
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1334
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1338
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1340
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1344
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1346
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1351
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1353
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1355
        if (($context["config_error_display"] ?? null)) {
            // line 1356
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1357
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1359
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1360
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1361
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1362
        if ( !($context["config_error_display"] ?? null)) {
            // line 1363
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1364
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1366
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1367
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1368
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1372
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1374
        if (($context["config_error_log"] ?? null)) {
            // line 1375
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1376
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1378
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1379
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1380
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1381
        if ( !($context["config_error_log"] ?? null)) {
            // line 1382
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1383
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1385
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1386
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1387
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1391
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1393
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1394
        if (($context["error_log"] ?? null)) {
            // line 1395
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1396
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1408
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1430
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1439
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1445
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1452
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1467
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3771 => 1467,  3753 => 1452,  3743 => 1445,  3734 => 1439,  3722 => 1430,  3697 => 1408,  3683 => 1396,  3677 => 1395,  3675 => 1394,  3669 => 1393,  3664 => 1391,  3658 => 1387,  3653 => 1386,  3650 => 1385,  3645 => 1383,  3642 => 1382,  3640 => 1381,  3637 => 1380,  3632 => 1379,  3629 => 1378,  3624 => 1376,  3621 => 1375,  3619 => 1374,  3614 => 1372,  3608 => 1368,  3603 => 1367,  3600 => 1366,  3595 => 1364,  3592 => 1363,  3590 => 1362,  3587 => 1361,  3582 => 1360,  3579 => 1359,  3574 => 1357,  3571 => 1356,  3569 => 1355,  3564 => 1353,  3559 => 1351,  3549 => 1346,  3542 => 1344,  3533 => 1340,  3526 => 1338,  3517 => 1334,  3510 => 1332,  3505 => 1330,  3499 => 1326,  3493 => 1325,  3491 => 1324,  3485 => 1323,  3478 => 1321,  3472 => 1317,  3467 => 1316,  3464 => 1315,  3459 => 1313,  3456 => 1312,  3454 => 1311,  3451 => 1310,  3446 => 1309,  3443 => 1308,  3438 => 1306,  3435 => 1305,  3433 => 1304,  3426 => 1302,  3420 => 1298,  3415 => 1297,  3412 => 1296,  3407 => 1294,  3404 => 1293,  3402 => 1292,  3399 => 1291,  3394 => 1290,  3391 => 1289,  3386 => 1287,  3383 => 1286,  3381 => 1285,  3374 => 1283,  3368 => 1279,  3363 => 1278,  3360 => 1277,  3355 => 1275,  3352 => 1274,  3350 => 1273,  3347 => 1272,  3342 => 1271,  3339 => 1270,  3334 => 1268,  3331 => 1267,  3329 => 1266,  3322 => 1264,  3317 => 1262,  3307 => 1257,  3300 => 1255,  3291 => 1251,  3284 => 1249,  3278 => 1245,  3273 => 1244,  3270 => 1243,  3265 => 1241,  3262 => 1240,  3260 => 1239,  3257 => 1238,  3252 => 1237,  3249 => 1236,  3244 => 1234,  3241 => 1233,  3239 => 1232,  3232 => 1230,  3226 => 1226,  3221 => 1225,  3218 => 1224,  3213 => 1222,  3210 => 1221,  3208 => 1220,  3205 => 1219,  3200 => 1218,  3197 => 1217,  3192 => 1215,  3189 => 1214,  3187 => 1213,  3180 => 1211,  3175 => 1209,  3163 => 1202,  3156 => 1200,  3150 => 1196,  3142 => 1194,  3137 => 1193,  3132 => 1192,  3127 => 1190,  3122 => 1189,  3120 => 1188,  3117 => 1187,  3113 => 1186,  3106 => 1184,  3101 => 1182,  3091 => 1177,  3086 => 1175,  3077 => 1171,  3072 => 1169,  3063 => 1165,  3056 => 1163,  3047 => 1159,  3042 => 1157,  3033 => 1153,  3026 => 1151,  3017 => 1147,  3010 => 1145,  3003 => 1140,  2996 => 1135,  2990 => 1131,  2988 => 1130,  2985 => 1129,  2979 => 1126,  2976 => 1125,  2970 => 1122,  2967 => 1121,  2964 => 1120,  2958 => 1117,  2955 => 1116,  2949 => 1113,  2946 => 1112,  2944 => 1111,  2935 => 1107,  2930 => 1105,  2921 => 1099,  2915 => 1098,  2909 => 1097,  2902 => 1093,  2896 => 1092,  2892 => 1091,  2883 => 1084,  2875 => 1082,  2870 => 1081,  2865 => 1080,  2860 => 1078,  2855 => 1077,  2853 => 1076,  2850 => 1075,  2846 => 1074,  2841 => 1072,  2834 => 1067,  2828 => 1066,  2820 => 1063,  2817 => 1062,  2809 => 1059,  2806 => 1058,  2803 => 1057,  2799 => 1056,  2794 => 1054,  2786 => 1051,  2781 => 1049,  2773 => 1043,  2767 => 1042,  2759 => 1039,  2756 => 1038,  2748 => 1035,  2745 => 1034,  2742 => 1033,  2738 => 1032,  2729 => 1028,  2722 => 1023,  2716 => 1022,  2708 => 1019,  2705 => 1018,  2697 => 1015,  2694 => 1014,  2691 => 1013,  2687 => 1012,  2682 => 1010,  2674 => 1007,  2669 => 1005,  2661 => 999,  2655 => 998,  2647 => 995,  2644 => 994,  2636 => 991,  2633 => 990,  2630 => 989,  2626 => 988,  2621 => 986,  2613 => 983,  2604 => 979,  2597 => 977,  2591 => 973,  2586 => 972,  2583 => 971,  2578 => 969,  2575 => 968,  2573 => 967,  2570 => 966,  2565 => 965,  2562 => 964,  2557 => 962,  2554 => 961,  2552 => 960,  2545 => 958,  2539 => 954,  2534 => 953,  2531 => 952,  2526 => 950,  2523 => 949,  2521 => 948,  2518 => 947,  2513 => 946,  2510 => 945,  2505 => 943,  2502 => 942,  2500 => 941,  2493 => 939,  2486 => 934,  2480 => 933,  2472 => 930,  2469 => 929,  2461 => 926,  2458 => 925,  2455 => 924,  2451 => 923,  2444 => 919,  2439 => 917,  2432 => 912,  2427 => 911,  2424 => 910,  2419 => 908,  2416 => 907,  2414 => 906,  2411 => 905,  2406 => 904,  2403 => 903,  2398 => 901,  2395 => 900,  2393 => 899,  2386 => 897,  2380 => 893,  2375 => 892,  2372 => 891,  2367 => 889,  2364 => 888,  2362 => 887,  2359 => 886,  2354 => 885,  2351 => 884,  2346 => 882,  2343 => 881,  2341 => 880,  2334 => 878,  2328 => 874,  2323 => 873,  2320 => 872,  2315 => 870,  2312 => 869,  2310 => 868,  2307 => 867,  2302 => 866,  2299 => 865,  2294 => 863,  2291 => 862,  2289 => 861,  2282 => 859,  2277 => 857,  2269 => 851,  2263 => 850,  2255 => 847,  2252 => 846,  2244 => 843,  2241 => 842,  2238 => 841,  2234 => 840,  2229 => 838,  2221 => 835,  2214 => 830,  2208 => 829,  2200 => 826,  2197 => 825,  2189 => 822,  2186 => 821,  2183 => 820,  2179 => 819,  2170 => 815,  2165 => 812,  2159 => 811,  2157 => 810,  2154 => 809,  2146 => 807,  2141 => 806,  2136 => 805,  2131 => 803,  2126 => 802,  2124 => 801,  2121 => 800,  2117 => 799,  2110 => 797,  2105 => 794,  2099 => 793,  2097 => 792,  2094 => 791,  2086 => 789,  2081 => 788,  2076 => 787,  2071 => 785,  2066 => 784,  2064 => 783,  2061 => 782,  2057 => 781,  2050 => 779,  2043 => 774,  2037 => 773,  2029 => 770,  2026 => 769,  2018 => 766,  2015 => 765,  2012 => 764,  2008 => 763,  1999 => 759,  1992 => 754,  1986 => 753,  1978 => 750,  1975 => 749,  1967 => 746,  1964 => 745,  1961 => 744,  1957 => 743,  1952 => 741,  1944 => 738,  1938 => 734,  1933 => 733,  1930 => 732,  1925 => 730,  1922 => 729,  1920 => 728,  1917 => 727,  1912 => 726,  1909 => 725,  1904 => 723,  1901 => 722,  1899 => 721,  1892 => 719,  1886 => 715,  1881 => 714,  1878 => 713,  1873 => 711,  1870 => 710,  1868 => 709,  1865 => 708,  1860 => 707,  1857 => 706,  1852 => 704,  1849 => 703,  1847 => 702,  1840 => 700,  1831 => 696,  1824 => 694,  1819 => 692,  1811 => 686,  1805 => 685,  1797 => 682,  1794 => 681,  1786 => 678,  1783 => 677,  1780 => 676,  1776 => 675,  1771 => 673,  1763 => 670,  1758 => 667,  1752 => 666,  1750 => 665,  1744 => 664,  1737 => 662,  1731 => 658,  1726 => 657,  1723 => 656,  1718 => 654,  1715 => 653,  1713 => 652,  1710 => 651,  1705 => 650,  1702 => 649,  1697 => 647,  1694 => 646,  1692 => 645,  1685 => 643,  1680 => 640,  1674 => 639,  1671 => 638,  1663 => 635,  1658 => 634,  1653 => 633,  1648 => 631,  1643 => 630,  1641 => 629,  1638 => 628,  1634 => 627,  1628 => 626,  1621 => 621,  1615 => 620,  1607 => 617,  1604 => 616,  1596 => 613,  1593 => 612,  1590 => 611,  1586 => 610,  1577 => 606,  1571 => 602,  1566 => 601,  1563 => 600,  1558 => 598,  1555 => 597,  1553 => 596,  1550 => 595,  1545 => 594,  1542 => 593,  1537 => 591,  1534 => 590,  1532 => 589,  1527 => 587,  1521 => 583,  1516 => 582,  1513 => 581,  1508 => 579,  1505 => 578,  1503 => 577,  1500 => 576,  1495 => 575,  1492 => 574,  1487 => 572,  1484 => 571,  1482 => 570,  1475 => 568,  1469 => 564,  1464 => 563,  1461 => 562,  1456 => 560,  1453 => 559,  1451 => 558,  1448 => 557,  1443 => 556,  1440 => 555,  1435 => 553,  1432 => 552,  1430 => 551,  1423 => 549,  1418 => 547,  1410 => 541,  1404 => 538,  1401 => 537,  1395 => 534,  1392 => 533,  1389 => 532,  1383 => 529,  1380 => 528,  1374 => 525,  1371 => 524,  1369 => 523,  1364 => 521,  1356 => 518,  1349 => 513,  1343 => 510,  1340 => 509,  1334 => 506,  1331 => 505,  1328 => 504,  1322 => 501,  1319 => 500,  1313 => 497,  1310 => 496,  1308 => 495,  1303 => 493,  1295 => 490,  1289 => 486,  1284 => 485,  1281 => 484,  1276 => 482,  1273 => 481,  1271 => 480,  1268 => 479,  1263 => 478,  1260 => 477,  1255 => 475,  1252 => 474,  1250 => 473,  1245 => 471,  1240 => 469,  1234 => 465,  1228 => 464,  1226 => 463,  1220 => 462,  1213 => 460,  1208 => 457,  1202 => 456,  1200 => 455,  1194 => 454,  1187 => 452,  1182 => 450,  1175 => 445,  1170 => 444,  1167 => 443,  1162 => 441,  1159 => 440,  1157 => 439,  1154 => 438,  1149 => 437,  1146 => 436,  1141 => 434,  1138 => 433,  1136 => 432,  1129 => 430,  1123 => 426,  1118 => 425,  1115 => 424,  1110 => 422,  1107 => 421,  1105 => 420,  1102 => 419,  1097 => 418,  1094 => 417,  1089 => 415,  1086 => 414,  1084 => 413,  1077 => 411,  1072 => 409,  1066 => 405,  1060 => 404,  1058 => 403,  1052 => 402,  1045 => 400,  1039 => 396,  1034 => 395,  1031 => 394,  1026 => 392,  1023 => 391,  1021 => 390,  1018 => 389,  1013 => 388,  1010 => 387,  1005 => 385,  1002 => 384,  1000 => 383,  993 => 381,  988 => 379,  979 => 372,  973 => 371,  965 => 368,  962 => 367,  954 => 364,  951 => 363,  948 => 362,  944 => 361,  937 => 357,  930 => 352,  924 => 351,  916 => 348,  913 => 347,  905 => 344,  902 => 343,  899 => 342,  895 => 341,  888 => 337,  882 => 333,  877 => 332,  874 => 331,  869 => 329,  866 => 328,  864 => 327,  861 => 326,  856 => 325,  853 => 324,  848 => 322,  845 => 321,  843 => 320,  836 => 318,  829 => 313,  823 => 312,  815 => 309,  812 => 308,  804 => 305,  801 => 304,  798 => 303,  794 => 302,  785 => 298,  778 => 293,  772 => 292,  764 => 289,  761 => 288,  753 => 285,  750 => 284,  747 => 283,  743 => 282,  736 => 278,  729 => 273,  723 => 272,  715 => 269,  712 => 268,  704 => 265,  701 => 264,  698 => 263,  694 => 262,  687 => 258,  681 => 254,  675 => 253,  667 => 251,  659 => 249,  656 => 248,  652 => 247,  646 => 244,  636 => 237,  629 => 232,  623 => 231,  615 => 228,  612 => 227,  604 => 224,  601 => 223,  598 => 222,  594 => 221,  587 => 217,  582 => 214,  577 => 212,  569 => 210,  564 => 209,  559 => 208,  554 => 206,  549 => 205,  547 => 204,  544 => 203,  540 => 202,  534 => 201,  531 => 200,  529 => 199,  521 => 196,  514 => 194,  505 => 190,  498 => 188,  491 => 184,  485 => 183,  481 => 182,  472 => 178,  467 => 176,  462 => 173,  456 => 172,  454 => 171,  448 => 170,  443 => 168,  438 => 165,  432 => 164,  430 => 163,  424 => 162,  419 => 160,  410 => 156,  403 => 154,  398 => 151,  392 => 150,  390 => 149,  384 => 148,  379 => 146,  374 => 143,  368 => 142,  366 => 141,  360 => 140,  355 => 138,  350 => 135,  344 => 134,  342 => 133,  336 => 132,  331 => 130,  322 => 123,  316 => 122,  308 => 119,  305 => 118,  297 => 115,  294 => 114,  291 => 113,  287 => 112,  280 => 108,  272 => 102,  266 => 101,  258 => 98,  255 => 97,  247 => 94,  244 => 93,  241 => 92,  237 => 91,  230 => 87,  221 => 83,  216 => 81,  207 => 77,  202 => 75,  197 => 72,  191 => 71,  189 => 70,  183 => 69,  178 => 67,  168 => 60,  157 => 52,  146 => 44,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
