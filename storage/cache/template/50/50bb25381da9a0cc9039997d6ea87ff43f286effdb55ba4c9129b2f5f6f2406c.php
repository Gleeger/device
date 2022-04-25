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

/* journal3/template/journal3/product_card.twig */
class __TwigTemplate_53d33c38bebf90d649683336283ab5bcb0aa1d59ad395c55c3950ef780c24af0 extends \Twig\Template
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
        $context["prefix"] = (((($context["display"] ?? null) == "grid")) ? ("ProductGrid") : ("ProductList"));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "  ";
            $context["classes"] = twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (twig_get_attribute($this->env, $this->source,             // line 4
$context["product"], "quantity", [], "any", false, false, false, 4) <= 0), "has-countdown" => twig_get_attribute($this->env, $this->source,             // line 5
$context["product"], "date_end", [], "any", false, false, false, 5), "has-zero-price" =>  !twig_get_attribute($this->env, $this->source,             // line 6
$context["product"], "price_value", [], "any", false, false, false, 6), "has-extra-button" => twig_get_attribute($this->env, $this->source,             // line 7
$context["product"], "extra_buttons", [], "any", false, false, false, 7)]], "method", false, false, false, 3);
            // line 9
            echo "  <div class=\"product-layout ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 9)], "method", false, false, false, 9);
            echo " ";
            echo ($context["classes"] ?? null);
            echo "\">
    <div class=\"product-thumb\">
      ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 11) == "image")) {
                // line 12
                echo "        <div class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                echo "</a></div>
      ";
            }
            // line 14
            echo "      <div class=\"image\">
        ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 15), "get", [0 => "quickviewStatus"], "method", false, false, false, 15)) {
                // line 16
                echo "          <div class=\"quickview-button\">
            <a class=\"btn btn-quickview\" ";
                // line 17
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewDisplay"), 1 => $context], "method", false, false, false, 17) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipStatus"), 1 => $context], "method", false, false, false, 17))) {
                    echo "data-toggle=\"tooltip\" data-tooltip-class=\"";
                    echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    echo " quickview-tooltip\" data-placement=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "getIn", [0 => (($context["prefix"] ?? null) . "QuickviewTooltipPosition"), 1 => $context], "method", false, false, false, 17);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "quickviewText"], "method", false, false, false, 17);
                    echo "\"";
                }
                echo " onclick=\"quickview('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 17);
                echo "')\"><span class=\"btn-text\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "quickviewText"], "method", false, false, false, 17);
                echo "</span></a>
          </div>
        ";
            }
            // line 20
            echo "
        <a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
            echo "\" class=\"product-img ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 21)) {
                echo "has-second-image";
            }
            echo "\">
          <div>
            ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 23)) {
                // line 24
                echo "              <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 24)) {
                    echo "data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 24);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" class=\"img-responsive img-first lazyload\"/>
            ";
            } else {
                // line 26
                echo "              <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 26)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 26);
                    echo " 2x\" ";
                }
                echo " width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" class=\"img-responsive img-first\"/>
            ";
            }
            // line 28
            echo "
            ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 29)) {
                // line 30
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "performanceLazyLoadImagesStatus"], "method", false, false, false, 30)) {
                    // line 31
                    echo "                <img src=\"";
                    echo ($context["dummy_image"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 31);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 31)) {
                        echo "data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 31);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 31);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                    echo "\" class=\"img-responsive img-second lazyload\"/>
              ";
                } else {
                    // line 33
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 33);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 33)) {
                        echo "srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb", [], "any", false, false, false, 33);
                        echo " 1x, ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "second_thumb2x", [], "any", false, false, false, 33);
                        echo " 2x\" ";
                    }
                    echo " width=\"";
                    echo ($context["image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    echo "\" class=\"img-responsive img-second\"/>
              ";
                }
                // line 35
                echo "            ";
            }
            // line 36
            echo "
          </div>
        </a>

        ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 40)) {
                // line 41
                echo "          <div class=\"product-labels\">
            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 43
                    echo "              <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 43);
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 43);
                    echo "</b></span>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </div>
        ";
            }
            // line 47
            echo "
        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 48), "get", [0 => "countdownStatus"], "method", false, false, false, 48) && twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 48))) {
                // line 49
                echo "          <div class=\"countdown\" data-date=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 49);
                echo "\"></div>
        ";
            }
            // line 51
            echo "      </div>

      <div class=\"caption\">
        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 54) || twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 54))) {
                // line 55
                echo "          <div class=\"stats\">
            ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "              <span class=\"stat-1\"><span class=\"stats-label\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 57), "label", [], "any", false, false, false, 57);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat1", [], "any", false, false, false, 57), "text", [], "any", false, false, false, 57);
                    echo "</span></span>
            ";
                }
                // line 59
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 59)) {
                    // line 60
                    echo "              <span class=\"stat-2\"><span class=\"stats-label\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 60), "label", [], "any", false, false, false, 60);
                    echo ":</span> <span>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "stat2", [], "any", false, false, false, 60), "text", [], "any", false, false, false, 60);
                    echo "</span></span>
            ";
                }
                // line 62
                echo "          </div>
        ";
            }
            // line 64
            echo "
        ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 65), "getIn", [0 => (($context["prefix"] ?? null) . "NamePosition"), 1 => $context], "method", false, false, false, 65) == "default")) {
                // line 66
                echo "          <div class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                echo "</a></div>
        ";
            }
            // line 68
            echo "
        <div class=\"description\">";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 69);
            echo "</div>
        
        ";
            // line 72
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72)) {
                // line 73
                echo "            ";
                if (twig_in_filter("Clearance Sale", twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 73))) {
                    // line 74
                    echo "            <div class=\"price\">
                <div>
                  ";
                    // line 76
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 76)) {
                        // line 77
                        echo "                    <span class=\"price-new\">";
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "is_logged", [], "any", false, false, false, 77) == 1)) ? (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 77)) : ("-"));
                        echo "</span> <span class=\"price-old\">";
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "is_logged", [], "any", false, false, false, 77) == 1)) ? (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77)) : ("-"));
                        echo "</span>
                  ";
                    } else {
                        // line 79
                        echo "                    <span class=\"price-normal\">";
                        echo (((twig_get_attribute($this->env, $this->source, $context["product"], "is_logged", [], "any", false, false, false, 79) == 1)) ? (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79)) : ("S\$***"));
                        echo "</span>
                  ";
                    }
                    // line 81
                    echo "                </div>
    \t        ";
                    // line 82
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 82)) {
                        // line 83
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 83);
                        echo "</span>
                ";
                    }
                    // line 85
                    echo "            </div>
            ";
                } else {
                    // line 87
                    echo "            <div class=\"price\">
                <div>
                  ";
                    // line 89
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 89)) {
                        // line 90
                        echo "                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 90);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                        echo "</span>
                  ";
                    } else {
                        // line 92
                        echo "                    <span class=\"price-normal\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
                        echo "</span>
                  ";
                    }
                    // line 94
                    echo "                </div>
                ";
                    // line 95
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 95)) {
                        // line 96
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 96);
                        echo "</span>
                ";
                    }
                    // line 98
                    echo "             </div>
            ";
                }
                // line 100
                echo "        ";
            }
            // line 101
            echo "        ";
            // line 102
            echo "        
        ";
            // line 103
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 103)) {
                // line 104
                echo "          <div class=\"rating ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 104), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 104) == "hover")) {
                    echo "rating-hover";
                }
                echo "\">
            <div class=\"rating-stars\">
              ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 107
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 107) < $context["i"])) {
                        // line 108
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                    } else {
                        // line 110
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                    }
                    // line 112
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "            </div>
          </div>
        ";
            } else {
                // line 116
                echo "          <div class=\"rating no-rating ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 116), "getIn", [0 => (($context["prefix"] ?? null) . "RatingPosition"), 1 => $context], "method", false, false, false, 116) == "hover")) {
                    echo "rating-hover";
                }
                echo "\">
            <div class=\"rating-stars\">
              ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 119
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 119) < $context["i"])) {
                        // line 120
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                    } else {
                        // line 122
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                    }
                    // line 124
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "            </div>
          </div>
        ";
            }
            // line 128
            echo "        
        
        ";
            // line 130
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 130), "get", [0 => "catalogCartStatus"], "method", false, false, false, 130) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 130), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 130)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 130), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 130))) {
                // line 131
                echo "        ";
                // line 132
                echo "        
        ";
                // line 133
                if ((twig_in_filter("Clearance Sale", twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 133)) && (twig_get_attribute($this->env, $this->source, $context["product"], "is_logged", [], "any", false, false, false, 133) == 0))) {
                    // line 134
                    echo "        <div class=\"buttons-wrapper\">
            <div class=\"see_member_price\" style=\"margin-left:0 !important;font-size:13px;margin-bottom:10px\"><a href=\"";
                    // line 135
                    echo ($context["base_url"] ?? null);
                    echo "login\" style=\"color:#004495\">Log-in</a> to see clearance sale price</div>
        </div>
        ";
                } else {
                    // line 138
                    echo "        ";
                    // line 139
                    echo "        <div class=\"buttons-wrapper\">
            ";
                    // line 140
                    if (((twig_get_attribute($this->env, $this->source, $context["product"], "is_logged", [], "any", false, false, false, 140) == 0) && (twig_in_filter("Fluke Networks", twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 140)) == false))) {
                        // line 141
                        echo "              <div class=\"see_member_price\" style=\"margin-left:0 !important;font-size:13px;margin-bottom:10px\"><a href=\"";
                        echo ($context["base_url"] ?? null);
                        echo "login\" style=\"color:#004495\">Log-in</a> to see member price</div>
            ";
                    }
                    // line 143
                    echo "          <div class=\"button-group\">
            ";
                    // line 144
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 144), "get", [0 => "catalogCartStatus"], "method", false, false, false, 144)) {
                        // line 145
                        echo "            <div class=\"cart-group\">
              <div class=\"stepper\">
                <input type=\"text\" name=\"quantity\" value=\"";
                        // line 147
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 147);
                        echo "\" data-minimum=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 147);
                        echo "\" class=\"form-control\"/>
                <input type=\"hidden\" name=\"product_id\" value=\"";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
                        echo "\"/>
                <span>
                <i class=\"fa fa-angle-up\"></i>
                <i class=\"fa fa-angle-down\"></i>
              </span>
              </div>
              <a class=\"btn btn-cart\" ";
                        // line 154
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "getIn", [0 => (($context["prefix"] ?? null) . "CartDisplay"), 1 => $context], "method", false, false, false, 154) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipStatus"), 1 => $context], "method", false, false, false, 154))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                            echo " cart-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "getIn", [0 => (($context["prefix"] ?? null) . "CartTooltipPosition"), 1 => $context], "method", false, false, false, 154);
                            echo "\" title=\"";
                            echo ($context["button_cart"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 154);
                        echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>";
                        echo ($context["button_cart"] ?? null);
                        echo "</span>\"><span class=\"btn-text\">";
                        echo ($context["button_cart"] ?? null);
                        echo "</span></a>
            </div>
            ";
                    }
                    // line 157
                    echo "
            ";
                    // line 158
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 158), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 158) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 158), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 158))) {
                        // line 159
                        echo "            <div class=\"wish-group\">
              ";
                        // line 160
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 160), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 160)) {
                            // line 161
                            echo "              <a class=\"btn btn-wishlist\" ";
                            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 161), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistDisplay"), 1 => $context], "method", false, false, false, 161) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 161), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipStatus"), 1 => $context], "method", false, false, false, 161))) {
                                echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                                echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                                echo " wishlist-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 161), "getIn", [0 => (($context["prefix"] ?? null) . "WishlistTooltipPosition"), 1 => $context], "method", false, false, false, 161);
                                echo "\" title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" ";
                            }
                            echo " onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 161);
                            echo "')\"><span class=\"btn-text\">";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></a>
              ";
                        }
                        // line 163
                        echo "
              ";
                        // line 164
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 164), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 164)) {
                            // line 165
                            echo "              <a class=\"btn btn-compare\" ";
                            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 165), "getIn", [0 => (($context["prefix"] ?? null) . "CompareDisplay"), 1 => $context], "method", false, false, false, 165) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 165), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipStatus"), 1 => $context], "method", false, false, false, 165))) {
                                echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                                echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                                echo " compare-tooltip\" data-placement=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 165), "getIn", [0 => (($context["prefix"] ?? null) . "CompareTooltipPosition"), 1 => $context], "method", false, false, false, 165);
                                echo "\" title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" ";
                            }
                            echo " onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 165);
                            echo "')\"><span class=\"btn-text\">";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></a>
              ";
                        }
                        // line 167
                        echo "            </div>
            ";
                    }
                    // line 169
                    echo "          </div>
        </div>
        ";
                }
                // line 172
                echo "        ";
            }
            // line 173
            echo "        

        ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, $context["product"], "extra_buttons", [], "any", false, false, false, 175)) {
                // line 176
                echo "          <div class=\"extra-group\">
            <div>
              ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "extra_buttons", [], "any", false, false, false, 178));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 179
                    echo "                <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo "\"
                  ";
                    // line 180
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 180), "getIn", [0 => ((($context["prefix"] ?? null) . "ExtraButtonDisplay") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 180)), 1 => $context], "method", false, false, false, 180) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 180), "getIn", [0 => (($context["prefix"] ?? null) . "ExtraButtonTooltipStatus"), 1 => $context], "method", false, false, false, 180))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ((($context["module_id"] ?? null)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        echo " extra-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 180), "getIn", [0 => (($context["prefix"] ?? null) . "ExtraButtonTooltipPosition"), 1 => $context], "method", false, false, false, 180);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 180);
                        echo "\" ";
                    }
                    // line 181
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 181) == "quickbuy")) {
                        echo "onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 181);
                        echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\"";
                    }
                    // line 182
                    echo "                  ";
                    if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 182) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 182), "href", [], "any", false, false, false, 182))) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 182), "href", [], "any", false, false, false, 182);
                        echo "\" ";
                        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 182)], "method", false, false, false, 182);
                        echo " data-product_id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 182);
                        echo "\" data-product_url=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 182);
                        echo "\"";
                    }
                    // line 183
                    echo "                   data-loading-text=\"<span class='btn-text'>";
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 183);
                    echo "</span>\">
                  <span class=\"btn-text\">";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 184);
                    echo "</span>
                </a>
              ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "            </div>
          </div>
        ";
            }
            // line 190
            echo "      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/product_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 190,  692 => 187,  675 => 184,  670 => 183,  657 => 182,  650 => 181,  640 => 180,  635 => 179,  618 => 178,  614 => 176,  612 => 175,  608 => 173,  605 => 172,  600 => 169,  596 => 167,  578 => 165,  576 => 164,  573 => 163,  555 => 161,  553 => 160,  550 => 159,  548 => 158,  545 => 157,  525 => 154,  516 => 148,  510 => 147,  506 => 145,  504 => 144,  501 => 143,  495 => 141,  493 => 140,  490 => 139,  488 => 138,  482 => 135,  479 => 134,  477 => 133,  474 => 132,  472 => 131,  470 => 130,  466 => 128,  461 => 125,  455 => 124,  451 => 122,  447 => 120,  444 => 119,  440 => 118,  432 => 116,  427 => 113,  421 => 112,  417 => 110,  413 => 108,  410 => 107,  406 => 106,  398 => 104,  396 => 103,  393 => 102,  391 => 101,  388 => 100,  384 => 98,  377 => 96,  375 => 95,  372 => 94,  366 => 92,  358 => 90,  356 => 89,  352 => 87,  348 => 85,  341 => 83,  339 => 82,  336 => 81,  330 => 79,  322 => 77,  320 => 76,  316 => 74,  313 => 73,  310 => 72,  305 => 69,  302 => 68,  294 => 66,  292 => 65,  289 => 64,  285 => 62,  277 => 60,  274 => 59,  266 => 57,  264 => 56,  261 => 55,  259 => 54,  254 => 51,  248 => 49,  246 => 48,  243 => 47,  239 => 45,  226 => 43,  222 => 42,  219 => 41,  217 => 40,  211 => 36,  208 => 35,  186 => 33,  162 => 31,  159 => 30,  157 => 29,  154 => 28,  132 => 26,  108 => 24,  106 => 23,  97 => 21,  94 => 20,  76 => 17,  73 => 16,  71 => 15,  68 => 14,  60 => 12,  58 => 11,  50 => 9,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/product_card.twig", "/var/www/html/device_bu_live/catalog/view/theme/journal3/template/journal3/product_card.twig");
    }
}
