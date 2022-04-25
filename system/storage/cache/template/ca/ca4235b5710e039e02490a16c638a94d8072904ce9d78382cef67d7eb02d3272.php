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

/* default/template/extension/payment/omise.twig */
class __TwigTemplate_4cca0cc709589e0129f6830ac70a1ac36a4965ed203d2a68fe21f5e993aceb49 extends \Twig\Template
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
        echo "<!-- Include Omise's javascript -->
<script type=\"text/javascript\">
    \$.getScript(\"https://cdn.omise.co/omise.min.js.gz\", function() {
        Omise.setPublicKey(\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["omise"] ?? null), "pkey", [], "any", false, false, false, 4);
        echo "\");

        \$(\"#omise-form-checkout\").submit(function() {

            var form            = \$(this),
                alertSuccess    = form.find(\".alert-success\"),
                alertError      = form.find(\".alert-error\"),
                spinner         = form.find('.omise-submitting');

            // Show spinner icon.
            spinner.addClass('loading');

            // Hidden alert box
            alertError.removeClass('show');
            alertSuccess.removeClass('show');

            // Disable the submit button to avoid repeated click.
            form.find(\"input[type=submit]\").prop(\"disabled\", true);

            // Serialize the form fields into a valid card object.
            var card = {
                \"name\": form.find(\"[data-omise=holder_name]\").val(),
                \"number\": form.find(\"[data-omise=number]\").val(),
                \"expiration_month\": form.find(\"[data-omise=expiration_month]\").val(),
                \"expiration_year\": form.find(\"[data-omise=expiration_year]\").val(),
                \"security_code\": form.find(\"[data-omise=security_code]\").val()
            };

            // Send a request to create a token
            // then trigger the callback function once a response is received from Omise.
            // * Note that the response could be an error and this needs to be handled
            // * within the callback.
            Omise.createToken(\"card\", card, function (statusCode, response) {
                // If has an error (can not create a card's token).
                if (response.object == \"error\") {
                    // Display an error message.
                    alertError.html(\"Omise Response: \"+response.message).addClass('show');

                    // Re-enable the submit button.
                    form.find(\"input[type=submit]\").prop(\"disabled\", false);
                } else if (typeof response.card != 'undefined' && !response.card.security_code_check) {
                    // Display an error message.
                    alertError.html(\"Omise Response: Card authorization failure.\").addClass('show');

                    // Re-enable the submit button.
                    form.find(\"input[type=submit]\").prop(\"disabled\", false);
                } else {
                    \$(\"#input-omise-token\").val(response.id);

                    // Token was created. Then, charge a card with token.
                    var posting = \$.post(\"";
        // line 54
        echo ($context["checkout_url"] ?? null);
        echo "\", {
                        \"omise_token\": response.id,
                        \"description\": \"Charge a card from OpenCart that order id is ";
        // line 56
        echo ($context["orderid"] ?? null);
        echo " from ";
        echo ($context["billemail"] ?? null);
        echo "\"
                    });

                    posting
                        .done(function(resp) {
                            resp = JSON.parse(resp);

                            if (typeof resp === \"object\") {
                                if (typeof resp.error !== \"undefined\") {
                                    alertError.html(resp.error).addClass('show');
                                } else {
                                    if (typeof resp.redirect !== \"undefined\") {
                                        console.log('redirect');
                                        window.location = resp.redirect;
                                    } else {
                                        form.get(0).submit();
                                    }
                                }
                            }

                            form.find(\"input[type=submit]\").prop(\"disabled\", false);
                        })
                        .fail(function(jqXHR, textStatus, errorThrown) {
                            alertError.html(\"Omise \"+errorThrown).addClass('show');
                            form.find(\"input[type=submit]\").prop(\"disabled\", false);
                        });
                };

                spinner.removeClass('loading');
            });

            // Prevent the form from being submitted;
            return false;
        });
    });
</script>

<!-- Omise's checkout form -->
<form id=\"omise-form-checkout\" method=\"post\" action=\"";
        // line 94
        echo ($context["success_url"] ?? null);
        echo "\">
    <!-- Collect a customer's card -->
    <div class=\"omise-payment\" style=\"
       background: #FAFAFA;
       padding: 0px 30px;
       position: relative;
       margin-top: 54px;
       /* left: 50%; */
       \">
       <h3 style=\"/* FONT-VARIANT: JIS04; *//* FONT-VARIANT: JIS04; */text-align: center;/* padding: 30px; */padding-top: 42px;padding-bottom: 18.5px;border-bottom: 1px solid #DEDEDE;\"><img src=\"https://cdn.freelogovectors.net/wp-content/uploads/2020/10/omise-logo.png\" width=\"224\" height=\"97\" class=\"omise-logo-header\"></h3>
       <div class=\"alert alert-danger alert-box alert-error warning\"></div>
       <div class=\"alert alert-box alert-success success\"></div>
       <input type=\"hidden\" id=\"input-omise-token\" name=\"omise_token\" class=\"input-omise-token\">
       <!-- Card Holder Name -->
       <div style=\"
          position: relative;
          display: flex;
          flex-direction: column;
          align-items: center;
          padding-bottom: 54px;
          padding-top: 30.5px;
          \">
          <div class=\"row omise-body-form\" style=\"width: 449px;\">
             <!-- Card Number -->
             <div class=\"col-sm-6 col-md-3\" style=\"width: 100%;padding-bottom: 20px;\">
                <div class=\"form-group\" style=\"display: flex;flex-direction: column;\">
                   <label for=\"input-omise-cardnumber\" style=\"flex: 0.15;color: #C5C5C5;\">Card Number</label>
                   <input id=\"input-omise-cardnumber\" style=\"flex: 0.85;padding: 9px 12px;\" type=\"text\" data-omise=\"number\" value=\"\" class=\"form-control input-omise-collect-number\">
                </div>
             </div>
             <div class=\"col-md-6\" style=\"display: flex;width: 100%;padding-bottom: 20px;\">
                <div class=\"form-group\" style=\"flex: 1;flex-direction: column;\">
                   <label for=\"input-omise-cardname\" style=\"flex: 0.15;color: #C5C5C5;\">Card Holder</label>
                   <input id=\"input-omise-cardname\" style=\"flex: 0.85;margin-left: 0px;padding: 9px 12px;\" type=\"text\" data-omise=\"holder_name\" value=\"\" class=\"form-control input-omise-collect-holder-name\">
                </div>
             </div>
             <!-- Expiration date -->
             <div class=\"col-sm-6 col-md-3\" style=\"width: 100%;\">
                <div class=\"form-group\" style=\"display: flex; flex: 1;\">
                   <div class=\"row\" style=\"width: 100%;flex-direction: row;\">
                      <div class=\"col-sm-6 input-space\" style=\"/* display: flex; */width: 100%;flex: 0.27;padding-right: 20px;margin-bottom: 10px;\">
                         <label style=\"flex: 0.15;color: #C5C5C5;\">Exp. Month</label>
                         <select data-omise=\"expiration_month\" class=\"form-control input-omise-collect-expiration-month\" style=\"flex: 0.1;height: 42px;\">
                            &gt;
                            ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["loop_months"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 139
            echo "                            <option value=\"";
            echo $context["k"];
            echo "\">";
            echo $context["v"];
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                         </select>
                      </div>
                      <div class=\"col-sm-6 input-space\" style=\"/* display: flex; */width: 100%;padding-right: 20px;flex: 0.27;\">
                         <label style=\"flex: 0.15;color: #C5C5C5;\">Exp. Year</label>
                         <select data-omise=\"expiration_year\" class=\"form-control input-omise-collect-expiration-year\" style=\"flex: 0.1;height: 42px;\">
                            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["loop_years"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 147
            echo "                            <option value=\"";
            echo $context["k"];
            echo "\">";
            echo $context["v"];
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                         </select>
                      </div>
                      <div class=\"col-sm-6 input-space-none\" style=\"/* display: flex; */flex: 0.27;width: 100%;\">
                         <!-- Security Code -->
                      </div>
                      <div class=\"col-sm-6\" style=\"/* display: flex; */flex: 0.27;width: 100%;\">
                         <!-- Security Code -->
                         <div class=\"form-group\" style=\"flex: 1;flex-direction: column;\">
                            <label class=\"cvv-label\" style=\"flex: 0.15;color: #C5C5C5;\">CVV</label>
                            <input type=\"password\" data-omise=\"security_code\" size=\"8\" value=\"\" class=\"form-control input-omise-collect-security-code cvv-password\" style=\"flex: 0.85;padding: 9px 12px;\">
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>

    <!-- Button -->
    <div class=\"buttons button-confirm-order\">
        <div class=\"pull-right\">
            <i class=\"omise-submitting fa fa-spinner fa-spin\"></i>
            &nbsp;
            <input type=\"submit\" value=\"";
        // line 173
        echo ($context["button_confirm"] ?? null);
        echo "\" class=\"button btn btn-primary btn-checkout\" />
        </div>
    </div>

    <!-- OpenCart's hidden input -->
    <input type=\"hidden\" name=\"text_config_one\" value=\"";
        // line 178
        echo ($context["text_config_one"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"text_config_two\" value=\"";
        // line 179
        echo ($context["text_config_two"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"orderid\" value=\"";
        // line 180
        echo ($context["orderid"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"callbackurl\" value=\"";
        // line 181
        echo ($context["callbackurl"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"orderdate\" value=\"";
        // line 182
        echo ($context["orderdate"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"currency\" value=\"";
        // line 183
        echo ($context["currency"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"orderamount\" value=\"";
        // line 184
        echo ($context["orderamount"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"billemail\" value=\"";
        // line 185
        echo ($context["billemail"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"billphone\" value=\"";
        // line 186
        echo ($context["billphone"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"billaddress\" value=\"";
        // line 187
        echo ($context["billaddress"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"billcountry\" value=\"";
        // line 188
        echo ($context["billcountry"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"billprovince\" value=\"";
        // line 189
        echo ($context["billprovince"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"billcity\" value=\"";
        // line 190
        echo ($context["billcity"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"billpost\" value=\"";
        // line 191
        echo ($context["billpost"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"deliveryname\" value=\"";
        // line 192
        echo ($context["deliveryname"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"deliveryaddress\" value=\"";
        // line 193
        echo ($context["deliveryaddress"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"deliverycity\" value=\"";
        // line 194
        echo ($context["deliverycity"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"deliverycountry\" value=\"";
        // line 195
        echo ($context["deliverycountry"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"deliveryprovince\" value=\"";
        // line 196
        echo ($context["deliveryprovince"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"deliveryemail\" value=\"";
        // line 197
        echo ($context["deliveryemail"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"deliveryphone\" value=\"";
        // line 198
        echo ($context["deliveryphone"] ?? null);
        echo "\" />
    <input type=\"hidden\" name=\"deliverypost\" value=\"";
        // line 199
        echo ($context["deliverypost"] ?? null);
        echo "\" />
</form>


<style>
#collapse-checkout-confirm                 { position: relative; }
form#omise-form-checkout .alert-box        { display: none; }
form#omise-form-checkout .show             { display: block !important; }
form#omise-form-checkout .loading          { display: inline-block !important; }
form#omise-form-checkout .omise-submitting { display: none; }

@media only screen and (max-width: 428px) {
  .omise-body-form{
    width: 100% !important;
  }

  .button-confirm-order {
    margin: 0 auto !important;
  }

  .input-space {
    flex: 0.4 !important;
  }

  .input-space-none {
    flex: 0.1 !important;
  }

  .omise-logo-header {
    width: 110px !important;
  }

  .cvv-label {
    margin-bottom: 9px !important;
  }

  .cvv-password {
    padding: 8px 12px !important;
  }
}
</style>

";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/omise.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 199,  341 => 198,  337 => 197,  333 => 196,  329 => 195,  325 => 194,  321 => 193,  317 => 192,  313 => 191,  309 => 190,  305 => 189,  301 => 188,  297 => 187,  293 => 186,  289 => 185,  285 => 184,  281 => 183,  277 => 182,  273 => 181,  269 => 180,  265 => 179,  261 => 178,  253 => 173,  227 => 149,  216 => 147,  212 => 146,  205 => 141,  194 => 139,  190 => 138,  143 => 94,  100 => 56,  95 => 54,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/omise.twig", "");
    }
}
