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

/* journal3/template/product/product.twig */
class __TwigTemplate_79df0423d493d2011d4b4a2090ef538e38bb8ab5ed94200d83db4eb7803f609a extends \Twig\Template
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
        $context["stylePrefix"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1), "isPopup", [0 => "quickview"], "method", false, false, false, 1)) ? ("quickviewPageStyle") : ("productPageStyle"));
        // line 2
        $context["optionPrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionPrice")], "method", false, false, false, 2);
        // line 3
        $context["direction"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 3) == "left") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 3) == "right"))) ? ("vertical") : ("horizontal"));
        // line 4
        $context["carousel"] = ((($context["direction"] ?? null) == "vertical") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesCarousel")], "method", false, false, false, 4));
        // line 5
        $context["carouselOptions"] = ["slidesPerView" => "auto", "spaceBetween" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["j3"] ?? null), "settings", [], "any", false, true, false, 7), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, true, false, 7), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesSpacing")], "method", false, false, false, 7), 0)) : (0)), "direction" =>         // line 8
($context["direction"] ?? null)];
        // line 10
        $context["galleryOptions"] = ["thumbWidth" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "get", [0 => "image_dimensions_popup_thumb.width"], "method", false, false, false, 11), "thumbConHeight" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["j3"] ?? null), "settings", [], "any", false, false, false, 12), "get", [0 => "image_dimensions_popup_thumb.height"], "method", false, false, false, 12), "addClass" => "lg-product-images", "mode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryMode")], "method", false, false, false, 14), "download" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["j3"] ?? null), "settings", [], "any", false, false, false, 15), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryDownload")], "method", false, false, false, 15), "fullScreen" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["j3"] ?? null), "settings", [], "any", false, false, false, 16), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryFullScreen")], "method", false, false, false, 16)];
        // line 18
        $context["quickviewExpand"] = ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 18) || (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 18) > 0) && ($context["description"] ?? null)) && (twig_length_filter($this->env, ($context["description"] ?? null)) <= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "globalExpandCharactersLimit"], "method", false, false, false, 18))))) ? ("no-expand") : (""));
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isDescriptionEmpty", [0 => ($context["description"] ?? null)], "method", false, false, false, 19)) {
            // line 20
            $context["description"] = "";
        }
        // line 22
        echo ($context["header"] ?? null);
        echo "
";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 23), "isPopup", [], "method", false, false, false, 23)) {
            // line 24
            echo "<ul class=\"breadcrumb\">
  ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 26
                echo "  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 26);
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "</ul>
";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "pageTitlePosition"], "method", false, false, false, 29) == "top")) {
                // line 30
                echo "  <h1 class=\"title page-title\"><span>";
                echo ($context["heading_title"] ?? null);
                echo "</span></h1>
";
            }
            // line 32
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 32);
            echo "
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
            // line 34
            echo ($context["column_left"] ?? null);
            echo "
    <div id=\"content\" class=\"";
            // line 35
            echo ($context["class"] ?? null);
            echo "\">
      ";
        }
        // line 37
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 38
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 38), "isPopup", [0 => "options"], "method", false, false, false, 38)) {
            // line 39
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => "pageTitlePosition"], "method", false, false, false, 39) == "default") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 39), "isPopup", [0 => "quickview"], "method", false, false, false, 39))) {
                // line 40
                echo "          <h1 class=\"title page-title\">";
                echo ($context["heading_title"] ?? null);
                echo "</h1>
        ";
            }
            // line 42
            echo "      ";
        }
        // line 43
        echo "      ";
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ["out-of-stock" => (        // line 44
($context["product_quantity"] ?? null) <= 0), "has-countdown" =>         // line 45
($context["date_end"] ?? null), "has-zero-price" =>  !        // line 46
($context["product_price_value"] ?? null), "has-extra-button" =>         // line 47
($context["product_extra_buttons"] ?? null)]], "method", false, false, false, 43) . " ") .         // line 48
($context["product_exclude_classes"] ?? null));
        // line 49
        echo "      <div class=\"product-info ";
        echo ($context["classes"] ?? null);
        echo "\">
        ";
        // line 50
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 50), "isPopup", [0 => "options"], "method", false, false, false, 50)) {
            // line 51
            echo "        <div class=\"product-left\">
          <div class=\"product-image direction-";
            // line 52
            echo ($context["direction"] ?? null);
            echo " position-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 52), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesPosition")], "method", false, false, false, 52);
            echo "\">
            <div class=\"swiper main-image\" data-options='";
            // line 53
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 53), "getJs", [], "method", false, false, false, 53), 1 => (($context["stylePrefix"] ?? null) . "ImageCarouselStyle")], "method", false, false, false, 53), twig_constant("JSON_FORCE_OBJECT"));
            echo "' ";
            if (((((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 53)) && ($context["carousel"] ?? null)) && (($context["direction"] ?? null) == "vertical"))) {
                echo "style=\"width: calc(100% - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 53);
                echo "px)\"";
            }
            echo ">
              <div class=\"swiper-container\" ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 54)) {
                echo "dir=\"rtl\"";
            }
            echo ">
                <div class=\"swiper-wrapper\">
                  ";
            // line 56
            $context["gallery"] = [];
            // line 57
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 58
                echo "                    ";
                $context["gallery"] = twig_array_merge(($context["gallery"] ?? null), [0 => ["src" => twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 58), "thumb" => twig_get_attribute($this->env, $this->source, $context["image"], "galleryThumb", [], "any", false, false, false, 58), "subHtml" => ($context["heading_title"] ?? null)]]);
                // line 59
                echo "                    <div class=\"swiper-slide\" ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 59), "isPopup", [], "method", false, false, false, 59) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 59))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 59);
                    echo "\" ";
                }
                echo ">
                      <img src=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 60);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 60)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 60);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "image2x", [], "any", false, false, false, 60);
                    echo " 2x\"";
                }
                echo " data-largeimg=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 60);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 60), "get", [0 => "image_dimensions_thumb.width"], "method", false, false, false, 60);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 60), "get", [0 => "image_dimensions_thumb.height"], "method", false, false, false, 60);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 60)) {
                    echo "loading=\"lazy\"";
                }
                echo "/>
                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </div>
              </div>
              <div class=\"swiper-controls\">
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>
              ";
            // line 72
            if (($context["product_labels"] ?? null)) {
                // line 73
                echo "                <div class=\"product-labels\">
                  ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_labels"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 75
                    echo "                    <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 75);
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 75);
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                </div>
              ";
            }
            // line 79
            echo "            </div>
            ";
            // line 80
            if (((twig_length_filter($this->env, ($context["images"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 80), "get", [0 => (($context["stylePrefix"] ?? null) . "AdditionalImagesStatus")], "method", false, false, false, 80))) {
                // line 81
                echo "              ";
                if (($context["carousel"] ?? null)) {
                    // line 82
                    echo "                <div class=\"swiper additional-images\" data-options='";
                    echo json_encode(($context["carouselOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' ";
                    if ((($context["direction"] ?? null) == "vertical")) {
                        echo "style=\"width: ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 82), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 82);
                        echo "px\"";
                    }
                    echo ">
                  <div class=\"swiper-container\" ";
                    // line 83
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 83)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">
                      ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 86
                        echo "                        <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 86);
                        echo "\">
                          <img src=\"";
                        // line 87
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 87);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 87)) {
                            echo "srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 87);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 87);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 87), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 87);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 87), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 87);
                        echo "\" ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 87)) {
                            echo "loading=\"lazy\"";
                        }
                        echo "/>
                        </div>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
              ";
                } else {
                    // line 99
                    echo "                <div class=\"additional-images\">
                  ";
                    // line 100
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 101
                        echo "                    <div class=\"additional-image\" data-index=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 101);
                        echo "\">
                      <img src=\"";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 102);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "image_dimensions_additional.width"], "method", false, false, false, 102);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "image_dimensions_additional.height"], "method", false, false, false, 102);
                        echo "\"/>
                    </div>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 105
                    echo "                </div>
              ";
                }
                // line 107
                echo "            ";
            }
            // line 108
            echo "          </div>
          ";
            // line 109
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 109), "isPopup", [], "method", false, false, false, 109) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 109), "get", [0 => (($context["stylePrefix"] ?? null) . "GalleryStatus")], "method", false, false, false, 109))) {
                // line 110
                echo "          <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, json_encode(($context["gallery"] ?? null)));
                echo "' data-options='";
                echo json_encode(($context["galleryOptions"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>
          ";
            }
            // line 112
            echo "          ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 112), "isPopup", [0 => "options"], "method", false, false, false, 112)) {
                // line 113
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "            <div class=\"product-blocks blocks-image\">
              ";
                    // line 115
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "image", [], "any", false, false, false, 115));
                    echo "
            </div>
            ";
                }
                // line 118
                echo "          ";
            }
            // line 119
            echo "          ";
            if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 119), "isPopup", [0 => "quickview"], "method", false, false, false, 119)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 119), "get", [0 => "quickviewDescription"], "method", false, false, false, 119)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 119), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 119) == "image"))) {
                // line 120
                echo "            <div class=\"description ";
                echo ($context["quickviewExpand"] ?? null);
                echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
                // line 123
                echo ($context["description"] ?? null);
                echo "
                </div>
                ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 125), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 125)) {
                    // line 126
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
                }
                // line 128
                echo "              </div>
            </div>
          ";
            }
            // line 131
            echo "          ";
            if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 131), "isPopup", [], "method", false, false, false, 131)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 131), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 131) == "image"))) {
                // line 132
                echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
                // line 133
                echo ($context["text_tags"] ?? null);
                echo "</span>
              ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 135
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 135);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 135);
                    echo "</a>
                ";
                    // line 136
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 136)) {
                        echo "<b>,</b>";
                    }
                    // line 137
                    echo "              ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "            </div>
          ";
            }
            // line 140
            echo "        </div>
        ";
        }
        // line 142
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">
          ";
        // line 144
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 144), "isPopup", [0 => "options"], "method", false, false, false, 144)) {
            // line 145
            echo "          <div class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</div>
          ";
            // line 146
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 146)) {
                // line 147
                echo "          <div class=\"product-blocks blocks-top\">
          ";
                // line 148
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "top", [], "any", false, false, false, 148));
                echo "
          </div>
          ";
            }
            // line 151
            echo "          ";
        }
        // line 152
        echo "
          ";
        // line 153
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 153), "isPopup", [0 => "quickview"], "method", false, false, false, 153)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 153), "get", [0 => "quickviewDescription"], "method", false, false, false, 153)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 153), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 153) == "top"))) {
            // line 154
            echo "            <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">
                  ";
            // line 157
            echo ($context["description"] ?? null);
            echo "
                </div>
                ";
            // line 159
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 159), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 159)) {
                // line 160
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
                ";
            }
            // line 162
            echo "              </div>
            </div>
          ";
        }
        // line 165
        echo "
          ";
        // line 166
        if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 166), "isPopup", [0 => "options"], "method", false, false, false, 166) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 166), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 166)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 166), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 166) == "default"))) {
            // line 167
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">
                ";
            // line 169
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 169), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 169)) {
                // line 170
                echo "                  <li class=\"product-stock ";
                if ((($context["product_quantity"] ?? null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 170), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 170);
                echo ":</b> <span>";
                echo ($context["stock"] ?? null);
                echo "</span></li>
                ";
            }
            // line 172
            echo "                ";
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 172), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 172)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 172), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 172) == "list"))) {
                // line 173
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 173), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 173);
                echo ":</b> <a href=\"";
                echo ($context["manufacturers"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a></li>
                ";
            }
            // line 175
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 175), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 175) && ($context["reward"] ?? null))) {
                // line 176
                echo "                  <li class=\"product-reward\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 176), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 176);
                echo ":</b> <span>";
                echo ($context["reward"] ?? null);
                echo "</span></li>
                ";
            }
            // line 178
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 178), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 178) && ($context["model"] ?? null))) {
                // line 179
                echo "                  <li class=\"product-model\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 179), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 179);
                echo ":</b> <span>";
                echo ($context["model"] ?? null);
                echo "</span></li>
                ";
            }
            // line 181
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 181), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 181) && ($context["product_weight"] ?? null))) {
                // line 182
                echo "                  <li class=\"product-weight\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 182), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 182);
                echo ":</b> <span>";
                echo ($context["product_weight"] ?? null);
                echo "</span></li>
                ";
            }
            // line 184
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 184), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 184) && ($context["product_dimension"] ?? null))) {
                // line 185
                echo "                  <li class=\"product-dimension\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 185), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 185);
                echo ":</b> <span>";
                echo ($context["product_length"] ?? null);
                echo " x ";
                echo ($context["product_width"] ?? null);
                echo " x ";
                echo ($context["product_height"] ?? null);
                echo "</span></li>
                ";
            }
            // line 187
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 187), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 187) && ($context["product_sku"] ?? null))) {
                // line 188
                echo "                  <li class=\"product-sku\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 188), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 188);
                echo ":</b> <span> ";
                echo ($context["product_sku"] ?? null);
                echo "</span></li>
                ";
            }
            // line 190
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 190), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 190) && ($context["product_upc"] ?? null))) {
                // line 191
                echo "                  <li class=\"product-upc\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 191), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 191);
                echo ":</b> <span>";
                echo ($context["product_upc"] ?? null);
                echo "</span></li>
                ";
            }
            // line 193
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 193), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 193) && ($context["product_ean"] ?? null))) {
                // line 194
                echo "                  <li class=\"product-ean\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 194), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 194);
                echo ":</b> <span>";
                echo ($context["product_ean"] ?? null);
                echo "</span></li>
                ";
            }
            // line 196
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 196), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 196) && ($context["product_jan"] ?? null))) {
                // line 197
                echo "                  <li class=\"product-jan\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 197), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 197);
                echo ":</b> <span>";
                echo ($context["product_jan"] ?? null);
                echo "</span></li>
                ";
            }
            // line 199
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 199), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 199) && ($context["product_isbn"] ?? null))) {
                // line 200
                echo "                  <li class=\"product-isbn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 200), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 200);
                echo ":</b> <span>";
                echo ($context["product_isbn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 202
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 202), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 202) && ($context["product_mpn"] ?? null))) {
                // line 203
                echo "                  <li class=\"product-mpn\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 203), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 203);
                echo ":</b> <span>";
                echo ($context["product_mpn"] ?? null);
                echo "</span></li>
                ";
            }
            // line 205
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 205), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 205) && ($context["product_location"] ?? null))) {
                // line 206
                echo "                  <li class=\"product-location\"><b>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 206), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 206);
                echo ":</b> <span>";
                echo ($context["product_location"] ?? null);
                echo "</span></li>
                ";
            }
            // line 208
            echo "              </ul>
              ";
            // line 209
            if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 209), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 209)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 209), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 209) == "image"))) {
                // line 210
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 211
                echo ($context["manufacturers"] ?? null);
                echo "\">
                    ";
                // line 212
                if (($context["manufacturer_image"] ?? null)) {
                    // line 213
                    echo "                      <img src=\"";
                    echo ($context["manufacturer_image"] ?? null);
                    echo "\" ";
                    if (($context["manufacturer_image2x"] ?? null)) {
                        echo "srcset=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo " 1x, ";
                        echo ($context["manufacturer_image2x"] ?? null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo ($context["manufacturer"] ?? null);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 213), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 213);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 213), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 213);
                    echo "\"/>
                    ";
                }
                // line 215
                echo "                    <span>";
                echo ($context["manufacturer"] ?? null);
                echo "</span>
                  </a>
                </div>
              ";
            }
            // line 219
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 219), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 219)) {
                // line 220
                echo "                <div class=\"custom-stats\">
                  ";
                // line 221
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 221), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 221)) {
                    // line 222
                    echo "                    <div class=\"product-sold\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 222), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 222);
                    echo "</b></div>
                  ";
                }
                // line 224
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 224), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 224)) {
                    // line 225
                    echo "                    <div class=\"product-views\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 225), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 225);
                    echo "</b></div>
                  ";
                }
                // line 227
                echo "                </div>
              ";
            }
            // line 229
            echo "            </div>
          ";
        }
        // line 231
        echo "
          ";
        // line 232
        if ((($context["review_status"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 232), "isPopup", [], "method", false, false, false, 232))) {
            // line 233
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">
                ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 236
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 237
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 240
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>
                  ";
                }
                // line 245
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 248
            echo ($context["reviews"] ?? null);
            echo "</a>
                <b>";
            // line 249
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 249), "get", [0 => (($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 249);
            echo "</b>
                <a>";
            // line 250
            echo ($context["text_write"] ?? null);
            echo "</a>
              </div>
            </div>
          ";
        }
        // line 254
        echo "
          ";
        // line 255
        if ((($context["date_end"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 255), "get", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 255), "isPopup", [], "method", false, false, false, 255)) ? ("quickviewCountdown") : ("countdownStatus"))], "method", false, false, false, 255))) {
            // line 256
            echo "            <div class=\"countdown-wrapper\">
              ";
            // line 257
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 257), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 257)) {
                // line 258
                echo "              <h5 class=\"countdown-title title\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 258), "get", [0 => (($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 258);
                echo "</h5>
              ";
            }
            // line 260
            echo "              <div class=\"countdown\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 261
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 261), "get", [0 => "countdownDay"], "method", false, false, false, 261);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 262
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 262), "get", [0 => "countdownHour"], "method", false, false, false, 262);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 263
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 263), "get", [0 => "countdownMin"], "method", false, false, false, 263);
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 264
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 264), "get", [0 => "countdownSec"], "method", false, false, false, 264);
            echo "</span></div>
              </div>
            </div>
          ";
        }
        // line 268
        echo "
          ";
        // line 269
        if ((($context["price"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 269), "isPopup", [0 => "options"], "method", false, false, false, 269))) {
            // line 270
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
            ";
            // line 272
            if ((twig_in_filter("Clearance Sale", ($context["category"] ?? null)) && (($context["customer_name"] ?? null) == ""))) {
                // line 273
                echo "             <div class=\"price-group\">
               <div class=\"product-price\" style=\"color:#004495\">S\$***</div>
             </div>
             ";
            } else {
                // line 277
                echo "             <div class=\"price-group\">
               ";
                // line 278
                if ( !($context["special"] ?? null)) {
                    // line 279
                    echo "                 <div class=\"product-price\">";
                    echo ($context["price"] ?? null);
                    echo "</div>
               ";
                } else {
                    // line 281
                    echo "                 <div class=\"product-price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</div>
                 <div class=\"product-price-old\">";
                    // line 282
                    echo ($context["price"] ?? null);
                    echo "</div>
               ";
                }
                // line 284
                echo "             </div>
             ";
            }
            // line 286
            echo "             ";
            if (($context["tax"] ?? null)) {
                // line 287
                echo "               <div class=\"product-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</div>
             ";
            }
            // line 289
            echo "             ";
            if (($context["points"] ?? null)) {
                // line 290
                echo "               <div class=\"product-points\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</div>
             ";
            }
            // line 292
            echo "
             ";
            // line 293
            if (($context["discounts"] ?? null)) {
                // line 294
                echo "               <div class=\"discounts\">
                 ";
                // line 295
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 296
                    echo "                   <div class=\"product-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 296);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 296);
                    echo "</div>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 298
                echo "               </div>
             ";
            }
            // line 300
            echo "           </div>
            ";
            // line 301
            if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 301), "isPopup", [0 => "options"], "method", false, false, false, 301) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 301), "get", [0 => (($context["stylePrefix"] ?? null) . "Stats")], "method", false, false, false, 301)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 301), "get", [0 => (($context["stylePrefix"] ?? null) . "StatsPosition")], "method", false, false, false, 301) == "price"))) {
                // line 302
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">
                  ";
                // line 304
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 304), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStock")], "method", false, false, false, 304)) {
                    // line 305
                    echo "                    <li class=\"product-stock ";
                    if ((($context["product_quantity"] ?? null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 305), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductStockText")], "method", false, false, false, 305);
                    echo ":</b> <span>";
                    echo ($context["stock"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 307
                echo "                  ";
                if ((($context["product_quantity"] ?? null) <= 0)) {
                    echo ($context["customtext"] ?? null);
                }
                // line 308
                echo "
                  ";
                // line 309
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 309), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 309)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 309), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 309) == "list"))) {
                    // line 310
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 310), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerText")], "method", false, false, false, 310);
                    echo ":</b> <a href=\"";
                    echo ($context["manufacturers"] ?? null);
                    echo "\">";
                    echo ($context["manufacturer"] ?? null);
                    echo "</a></li>
                  ";
                }
                // line 312
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 312), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductReward")], "method", false, false, false, 312) && ($context["reward"] ?? null))) {
                    // line 313
                    echo "                    <li class=\"product-reward\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 313), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductRewardText")], "method", false, false, false, 313);
                    echo ":</b> <span>";
                    echo ($context["reward"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 315
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 315), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModel")], "method", false, false, false, 315) && ($context["model"] ?? null))) {
                    // line 316
                    echo "                    <li class=\"product-model\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 316), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductModelText")], "method", false, false, false, 316);
                    echo ":</b> <span>";
                    echo ($context["model"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 318
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 318), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeight")], "method", false, false, false, 318) && ($context["product_weight"] ?? null))) {
                    // line 319
                    echo "                    <li class=\"product-weight\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 319), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductWeightText")], "method", false, false, false, 319);
                    echo ":</b> <span>";
                    echo ($context["product_weight"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 321
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 321), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimension")], "method", false, false, false, 321) && ($context["product_dimension"] ?? null))) {
                    // line 322
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 322), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductDimensionText")], "method", false, false, false, 322);
                    echo ":</b> <span>";
                    echo ($context["product_length"] ?? null);
                    echo " x ";
                    echo ($context["product_width"] ?? null);
                    echo " x ";
                    echo ($context["product_height"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 324
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 324), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKU")], "method", false, false, false, 324) && ($context["product_sku"] ?? null))) {
                    // line 325
                    echo "                    <li class=\"product-sku\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 325), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSKUText")], "method", false, false, false, 325);
                    echo ":</b> <span> ";
                    echo ($context["product_sku"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 327
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 327), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPC")], "method", false, false, false, 327) && ($context["product_upc"] ?? null))) {
                    // line 328
                    echo "                    <li class=\"product-upc\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 328), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductUPCText")], "method", false, false, false, 328);
                    echo ":</b> <span>";
                    echo ($context["product_upc"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 330
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 330), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEAN")], "method", false, false, false, 330) && ($context["product_ean"] ?? null))) {
                    // line 331
                    echo "                    <li class=\"product-ean\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 331), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductEANText")], "method", false, false, false, 331);
                    echo ":</b> <span>";
                    echo ($context["product_ean"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 333
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 333), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJAN")], "method", false, false, false, 333) && ($context["product_jan"] ?? null))) {
                    // line 334
                    echo "                    <li class=\"product-jan\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 334), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductJANText")], "method", false, false, false, 334);
                    echo ":</b> <span>";
                    echo ($context["product_jan"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 336
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 336), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBN")], "method", false, false, false, 336) && ($context["product_isbn"] ?? null))) {
                    // line 337
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 337), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductISBNText")], "method", false, false, false, 337);
                    echo ":</b> <span>";
                    echo ($context["product_isbn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 339
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 339), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPN")], "method", false, false, false, 339) && ($context["product_mpn"] ?? null))) {
                    // line 340
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 340), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductMPNText")], "method", false, false, false, 340);
                    echo ":</b> <span>";
                    echo ($context["product_mpn"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 342
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 342), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocation")], "method", false, false, false, 342) && ($context["product_location"] ?? null))) {
                    // line 343
                    echo "                    <li class=\"product-location\"><b>";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 343), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductLocationText")], "method", false, false, false, 343);
                    echo ":</b> <span>";
                    echo ($context["product_location"] ?? null);
                    echo "</span></li>
                  ";
                }
                // line 345
                echo "                </ul>
                ";
                // line 346
                if (((($context["manufacturer"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 346), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturer")], "method", false, false, false, 346)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 346), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductManufacturerDisplay")], "method", false, false, false, 346) == "image"))) {
                    // line 347
                    echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                    // line 348
                    echo ($context["manufacturers"] ?? null);
                    echo "\">
                      ";
                    // line 349
                    if (($context["manufacturer_image"] ?? null)) {
                        // line 350
                        echo "                        <img src=\"";
                        echo ($context["manufacturer_image"] ?? null);
                        echo "\" ";
                        if (($context["manufacturer_image2x"] ?? null)) {
                            echo "srcset=\"";
                            echo ($context["manufacturer_image"] ?? null);
                            echo " 1x, ";
                            echo ($context["manufacturer_image2x"] ?? null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo ($context["manufacturer"] ?? null);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 350), "get", [0 => "image_dimensions_manufacturer_logo.width"], "method", false, false, false, 350);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 350), "get", [0 => "image_dimensions_manufacturer_logo.height"], "method", false, false, false, 350);
                        echo "\"/>
                      ";
                    }
                    // line 352
                    echo "                      <span>";
                    echo ($context["manufacturer"] ?? null);
                    echo "</span>
                    </a>
                  </div>
                ";
                }
                // line 356
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 356), "get", [0 => (($context["stylePrefix"] ?? null) . "CustomStats")], "method", false, false, false, 356)) {
                    // line 357
                    echo "                  <div class=\"custom-stats\">
                    ";
                    // line 358
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 358), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductSold")], "method", false, false, false, 358)) {
                        // line 359
                        echo "                      <div class=\"product-sold\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 359), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "SoldText"), 1 => ($context["products_sold"] ?? null)], "method", false, false, false, 359);
                        echo "</b></div>
                    ";
                    }
                    // line 361
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 361), "get", [0 => (($context["stylePrefix"] ?? null) . "ProductViews")], "method", false, false, false, 361)) {
                        // line 362
                        echo "                      <div class=\"product-views\"><b>";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 362), "getWithValue", [0 => (($context["stylePrefix"] ?? null) . "ViewsText"), 1 => ($context["product_views"] ?? null)], "method", false, false, false, 362);
                        echo "</b></div>
                    ";
                    }
                    // line 364
                    echo "                  </div>
                ";
                }
                // line 366
                echo "              </div>
            ";
            }
            // line 368
            echo "          </div>
          ";
        }
        // line 370
        echo "            
          ";
        // line 372
        echo "\t\t  ";
        if ((twig_in_filter("Clearance Sale", ($context["category"] ?? null)) && (($context["customer_name"] ?? null) == ""))) {
            echo "  
            <div class=\"see_member_price\"><a href=\"";
            // line 373
            echo ($context["base_url"] ?? null);
            echo "login\" style=\"color:#004495\">Log-in</a> to see clearance sale price</div>
\t      ";
        } elseif (((        // line 374
($context["customer_name"] ?? null) == "") && (($context["category"] ?? null) != "Fluke Networks"))) {
            // line 375
            echo "          \t<div class=\"see_member_price\"><a href=\"";
            echo ($context["base_url"] ?? null);
            echo "login\" style=\"color:#004495\">Log-in</a> to see member prices</div>
          ";
        }
        // line 377
        echo "          ";
        // line 378
        echo "            
          ";
        // line 379
        if (($context["options"] ?? null)) {
            // line 380
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 381
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 382
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 383
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 383) == "select")) {
                    // line 384
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 384)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 384);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 384), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 384)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 385
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 385);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 385);
                    echo "</label>
              <select name=\"option[";
                    // line 386
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 386);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 386);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 387
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 388
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 388));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 389
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 389);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 389);
                        echo "
                ";
                        // line 390
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 390) && ($context["optionPrice"] ?? null))) {
                            // line 391
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 391);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 391);
                            echo ")
                ";
                        }
                        // line 392
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 394
                    echo "              </select>
            </div>
            ";
                }
                // line 397
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 397) == "radio")) {
                    // line 398
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 398)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 398);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 398), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 398)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 399
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 399);
                    echo "</label>
              <div id=\"input-option";
                    // line 400
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 400);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 400));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 401
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 403
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 403);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 403);
                        echo "\" />
                    ";
                        // line 404
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 404)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 404), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 404);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 404), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 404);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 404);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 404);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 404) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 404);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 404);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 404), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 404);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 404);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 404) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 404);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 404);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 405
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 406
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 406);
                        echo "
                      ";
                        // line 407
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 407) && ($context["optionPrice"] ?? null))) {
                            // line 408
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 409
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 409);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 409);
                            echo ")
                        </span>
                      ";
                        }
                        // line 412
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 415
                    echo " </div>
            </div>
            ";
                }
                // line 418
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 418) == "checkbox")) {
                    // line 419
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 419)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 419);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 419), "get", [0 => (($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 419)) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 420
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 420);
                    echo "</label>
              <div id=\"input-option";
                    // line 421
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 421);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 421));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 422
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 424
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 424);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 424);
                        echo "\" />
                    ";
                        // line 425
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 425)) {
                            echo " <img width=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 425), "get", [0 => "image_dimensions_options.width"], "method", false, false, false, 425);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 425), "get", [0 => "image_dimensions_options.height"], "method", false, false, false, 425);
                            echo "\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 425);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 425);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 425) && ($context["optionPrice"] ?? null))) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 425);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 425);
                                echo " ";
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 425), "get", [0 => (($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 425);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 425);
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 425) && ($context["optionPrice"] ?? null))) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 425);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 425);
                                echo ") ";
                            }
                            echo "\"/> ";
                        }
                        // line 426
                        echo "                    <span class=\"option-value\">
                      ";
                        // line 427
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 427);
                        echo "
                      ";
                        // line 428
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 428) && ($context["optionPrice"] ?? null))) {
                            // line 429
                            echo "                        <span class=\"option-price\">(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 429);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 429);
                            echo ")</span>
                      ";
                        }
                        // line 431
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 434
                    echo " </div>
            </div>
            ";
                }
                // line 437
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 437) == "text")) {
                    // line 438
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 438)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 438);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 439
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 439);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 439);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 440
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 440);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 440);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 440);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 440);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 443
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 443) == "textarea")) {
                    // line 444
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 444)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 444);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 445
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 445);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 445);
                    echo "</label>
              <textarea name=\"option[";
                    // line 446
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 446);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 446);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 446);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 446);
                    echo "</textarea>
            </div>
            ";
                }
                // line 449
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 449) == "file")) {
                    // line 450
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 450)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 450);
                    echo "\">
              <label class=\"control-label\">";
                    // line 451
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 451);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 452
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 452);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 453
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 453);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 453);
                    echo "\" />
            </div>
            ";
                }
                // line 456
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 456) == "date")) {
                    // line 457
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 457)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 457);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 458
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 458);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 458);
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 460
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 460);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 460);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 460);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 466
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 466) == "datetime")) {
                    // line 467
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 467)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 467);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 468
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 468);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 468);
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 470
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 470);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 470);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 470);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 476
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 476) == "time")) {
                    // line 477
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 477)) {
                        echo " required ";
                    }
                    echo " product-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 477);
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 478
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 478);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 478);
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 480
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 480);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 480);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 480);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 486
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            echo "          </div>
          ";
        }
        // line 489
        echo "
          ";
        // line 490
        if (($context["recurrings"] ?? null)) {
            // line 491
            echo "            <h3 class=\"title recurring-title\">";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 494
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 495
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 496
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 496);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 496);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 502
        echo "
          ";
        // line 503
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 503), "get", [0 => "catalogCartStatus"], "method", false, false, false, 503) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 503), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 503)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 503), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 503)) || (($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 503), "isPopup", [], "method", false, false, false, 503)))) {
            // line 504
            echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              ";
            // line 506
            if ((twig_in_filter("Clearance Sale", ($context["category"] ?? null)) && (($context["customer_name"] ?? null) == ""))) {
                // line 507
                echo "              ";
                // line 508
                echo "              ";
            } else {
                // line 509
                echo "              <div class=\"stepper-group cart-group\">
                ";
                // line 510
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 510), "get", [0 => "catalogCartStatus"], "method", false, false, false, 510)) {
                    // line 511
                    echo "                <div class=\"stepper\">
                  <label class=\"control-label\" for=\"product-quantity\">";
                    // line 512
                    echo ($context["entry_qty"] ?? null);
                    echo "</label>
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                    // line 513
                    echo (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                    echo "\" data-minimum=\"";
                    echo ($context["minimum"] ?? null);
                    echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                    // line 514
                    echo ($context["product_id"] ?? null);
                    echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                </div>
                <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                    // line 520
                    echo ($context["button_cart"] ?? null);
                    echo "</span>\" class=\"btn btn-cart\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => (($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 520) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 520))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 520), "get", [0 => (($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 520);
                        echo "\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></a>
                ";
                }
                // line 522
                echo "                ";
                if ((($context["product_extra_buttons"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 522), "isPopup", [], "method", false, false, false, 522))) {
                    // line 523
                    echo "                  <div class=\"extra-group\">
                    ";
                    // line 524
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["product_extra_buttons"] ?? null));
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
                        // line 525
                        echo "                      <a class=\"btn btn-extra btn-extra-";
                        echo $context["id"];
                        echo " btn-";
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 525);
                        echo "-extra\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 525), "get", [0 => (((($context["stylePrefix"] ?? null) . "Extra") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 525)) . "ButtonDisplay")], "method", false, false, false, 525) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 525), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 525))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 525), "get", [0 => (($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 525);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 525);
                            echo "\" ";
                        }
                        echo " ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 525) == "quickbuy")) {
                            echo "data-quick-buy";
                        }
                        echo " ";
                        if (((twig_get_attribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 525) == "link") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 525), "href", [], "any", false, false, false, 525))) {
                            echo "href=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 525), "href", [], "any", false, false, false, 525);
                            echo "\" ";
                            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 525)], "method", false, false, false, 525);
                            echo " data-product_id=\"";
                            echo ($context["product_id"] ?? null);
                            echo "\"";
                        }
                        echo " data-loading-text=\"<span class='btn-text'>";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 525);
                        echo "</span>\"><span class=\"btn-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 525);
                        echo "</span></a>
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
                    // line 527
                    echo "                  </div>
                ";
                }
                // line 529
                echo "              </div>
              ";
            }
            // line 531
            echo "
              ";
            // line 532
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 532), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 532) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 532), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 532)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 532), "isPopup", [0 => "quickview"], "method", false, false, false, 532))) {
                // line 533
                echo "              <div class=\"wishlist-compare\">
                ";
                // line 534
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 534), "isPopup", [0 => "options"], "method", false, false, false, 534)) {
                    // line 535
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 535), "get", [0 => "catalogWishlistStatus"], "method", false, false, false, 535)) {
                        // line 536
                        echo "                  <a class=\"btn btn-wishlist\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 536), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 536) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 536), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 536))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 536), "get", [0 => (($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 536);
                            echo "\" title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 538
                    echo "
                  ";
                    // line 539
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 539), "get", [0 => "catalogCompareStatus"], "method", false, false, false, 539)) {
                        // line 540
                        echo "                  <a class=\"btn btn-compare\" ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 540), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 540) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 540), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 540))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 540), "get", [0 => (($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 540);
                            echo "\" title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" ";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo ($context["product_id"] ?? null);
                        echo ");\"><span class=\"btn-text\">";
                        echo ($context["button_compare"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 542
                    echo "                ";
                }
                // line 543
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 543), "isPopup", [0 => "quickview"], "method", false, false, false, 543)) {
                    // line 544
                    echo "                  <a class=\"btn btn-more-details\" href=\"";
                    echo ($context["view_more_url"] ?? null);
                    echo "\" target=\"_top\" ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 544), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 544) == "icon") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 544), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 544))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 544), "get", [0 => (($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 544);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 544), "get", [0 => "quickviewExtraText"], "method", false, false, false, 544);
                        echo "\" ";
                    }
                    echo "><span class=\"btn-text\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 544), "get", [0 => "quickviewExtraText"], "method", false, false, false, 544);
                    echo "</span></a>
                ";
                }
                // line 546
                echo "              </div>
              ";
            }
            // line 548
            echo "            </div>
          </div>
          ";
        }
        // line 551
        echo "
          ";
        // line 552
        if ((($context["minimum"] ?? null) > 1)) {
            // line 553
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
          ";
        }
        // line 555
        echo "
          ";
        // line 556
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 556), "isPopup", [0 => "options"], "method", false, false, false, 556)) {
            // line 557
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 557)) {
                // line 558
                echo "                ";
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "details", [], "any", false, false, false, 558));
                echo "
            ";
            }
            // line 560
            echo "          ";
        }
        // line 561
        echo "          </div>
          ";
        // line 562
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 562), "isPopup", [0 => "options"], "method", false, false, false, 562)) {
            // line 563
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 563)) {
                // line 564
                echo "          <div class=\"product-blocks blocks-bottom\">
            ";
                // line 565
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "bottom", [], "any", false, false, false, 565));
                echo "
          </div>
          ";
            }
            // line 568
            echo "          ";
        }
        // line 569
        echo "          ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 569), "isPopup", [], "method", false, false, false, 569)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 569), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 569) == "details"))) {
            // line 570
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 571
            echo ($context["text_tags"] ?? null);
            echo "</span>
              ";
            // line 572
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 573
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 573);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 573);
                echo "</a>
                ";
                // line 574
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 574)) {
                    echo "<b>,</b>";
                }
                // line 575
                echo "              ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 576
            echo "            </div>
          ";
        }
        // line 578
        echo "        </div>
      </div>
      ";
        // line 580
        if ((((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 580), "isPopup", [0 => "quickview"], "method", false, false, false, 580)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 580), "get", [0 => "quickviewDescription"], "method", false, false, false, 580)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 580), "get", [0 => "quickviewDescriptionPosition"], "method", false, false, false, 580) == "default"))) {
            // line 581
            echo "        <div class=\"description ";
            echo ($context["quickviewExpand"] ?? null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">
              ";
            // line 584
            echo ($context["description"] ?? null);
            echo "
            </div>
            ";
            // line 586
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 586), "get", [0 => "quickviewExpandButton"], "method", false, false, false, 586)) {
                // line 587
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>
            ";
            }
            // line 589
            echo "          </div>
        </div>
      ";
        }
        // line 592
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 592), "isPopup", [0 => "options"], "method", false, false, false, 592)) {
            // line 593
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 593)) {
                // line 594
                echo "        <div class=\"product-blocks blocks-default\">
          ";
                // line 595
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["product_blocks"] ?? null), "default", [], "any", false, false, false, 595));
                echo "
        </div>
        ";
            }
            // line 598
            echo "      ";
        }
        // line 599
        echo "      ";
        if (((($context["tags"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 599), "isPopup", [], "method", false, false, false, 599)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 599), "get", [0 => (($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 599) == "default"))) {
            // line 600
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 601
            echo ($context["text_tags"] ?? null);
            echo "</span>
          ";
            // line 602
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 603
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 603);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 603);
                echo "</a>
            ";
                // line 604
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 604)) {
                    echo "<b>,</b>";
                }
                // line 605
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 606
            echo "        </div>
      ";
        }
        // line 608
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 608), "isPopup", [], "method", false, false, false, 608)) {
            // line 609
            echo "      ";
            echo ($context["content_bottom"] ?? null);
            echo "</div>
    ";
            // line 610
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 613
        echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product select[name=\"recurring_id\"]'
    ),
    dataType: 'json',
    beforeSend: function () {
      \$('#button-cart').button('loading');
    },
    complete: function () {
      \$('#button-cart').button('reset');
    },
    success: function (json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');

        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - 50 }, 'slow');
        } catch (e) {
        }
      }

      if (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items,.cart-badge').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items,.cart-badge').removeClass('count-zero');
        } else {
          parent.\$('#cart-items,.cart-badge').addClass('count-zero');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }

        if (json['redirect']) {
          parent.location.href = json['redirect'];
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 732
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 737
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 743
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 811
        echo ($context["product_id"] ?? null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 815
        echo ($context["product_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');
      \$review.closest('.expand-block').find('.block-expand.btn').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - 100
      }, 200);
    }
  });
});
//--></script>
";
        // line 870
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 870), "isPopup", [], "method", false, false, false, 870)) {
            // line 871
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 871);
            echo "
";
        }
        // line 873
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2521 => 873,  2516 => 871,  2514 => 870,  2456 => 815,  2449 => 811,  2378 => 743,  2369 => 737,  2361 => 732,  2240 => 613,  2234 => 610,  2229 => 609,  2226 => 608,  2222 => 606,  2208 => 605,  2204 => 604,  2197 => 603,  2180 => 602,  2176 => 601,  2173 => 600,  2170 => 599,  2167 => 598,  2161 => 595,  2158 => 594,  2155 => 593,  2152 => 592,  2147 => 589,  2143 => 587,  2141 => 586,  2136 => 584,  2129 => 581,  2127 => 580,  2123 => 578,  2119 => 576,  2105 => 575,  2101 => 574,  2094 => 573,  2077 => 572,  2073 => 571,  2070 => 570,  2067 => 569,  2064 => 568,  2058 => 565,  2055 => 564,  2052 => 563,  2050 => 562,  2047 => 561,  2044 => 560,  2038 => 558,  2035 => 557,  2033 => 556,  2030 => 555,  2024 => 553,  2022 => 552,  2019 => 551,  2014 => 548,  2010 => 546,  1994 => 544,  1991 => 543,  1988 => 542,  1972 => 540,  1970 => 539,  1967 => 538,  1951 => 536,  1948 => 535,  1946 => 534,  1943 => 533,  1941 => 532,  1938 => 531,  1934 => 529,  1930 => 527,  1885 => 525,  1868 => 524,  1865 => 523,  1862 => 522,  1847 => 520,  1838 => 514,  1832 => 513,  1828 => 512,  1825 => 511,  1823 => 510,  1820 => 509,  1817 => 508,  1815 => 507,  1813 => 506,  1809 => 504,  1807 => 503,  1804 => 502,  1798 => 498,  1787 => 496,  1783 => 495,  1779 => 494,  1772 => 491,  1770 => 490,  1767 => 489,  1763 => 487,  1757 => 486,  1744 => 480,  1737 => 478,  1728 => 477,  1725 => 476,  1712 => 470,  1705 => 468,  1696 => 467,  1693 => 466,  1680 => 460,  1673 => 458,  1664 => 457,  1661 => 456,  1653 => 453,  1645 => 452,  1641 => 451,  1632 => 450,  1629 => 449,  1617 => 446,  1611 => 445,  1602 => 444,  1599 => 443,  1587 => 440,  1581 => 439,  1572 => 438,  1569 => 437,  1564 => 434,  1555 => 431,  1548 => 429,  1546 => 428,  1542 => 427,  1539 => 426,  1508 => 425,  1502 => 424,  1498 => 422,  1492 => 421,  1488 => 420,  1475 => 419,  1472 => 418,  1467 => 415,  1458 => 412,  1451 => 409,  1448 => 408,  1446 => 407,  1442 => 406,  1439 => 405,  1408 => 404,  1402 => 403,  1398 => 401,  1392 => 400,  1388 => 399,  1375 => 398,  1372 => 397,  1367 => 394,  1360 => 392,  1353 => 391,  1351 => 390,  1344 => 389,  1340 => 388,  1336 => 387,  1330 => 386,  1324 => 385,  1311 => 384,  1308 => 383,  1304 => 382,  1300 => 381,  1297 => 380,  1295 => 379,  1292 => 378,  1290 => 377,  1284 => 375,  1282 => 374,  1278 => 373,  1273 => 372,  1270 => 370,  1266 => 368,  1262 => 366,  1258 => 364,  1252 => 362,  1249 => 361,  1243 => 359,  1241 => 358,  1238 => 357,  1235 => 356,  1227 => 352,  1207 => 350,  1205 => 349,  1201 => 348,  1198 => 347,  1196 => 346,  1193 => 345,  1185 => 343,  1182 => 342,  1174 => 340,  1171 => 339,  1163 => 337,  1160 => 336,  1152 => 334,  1149 => 333,  1141 => 331,  1138 => 330,  1130 => 328,  1127 => 327,  1119 => 325,  1116 => 324,  1104 => 322,  1101 => 321,  1093 => 319,  1090 => 318,  1082 => 316,  1079 => 315,  1071 => 313,  1068 => 312,  1058 => 310,  1056 => 309,  1053 => 308,  1048 => 307,  1034 => 305,  1032 => 304,  1028 => 302,  1026 => 301,  1023 => 300,  1019 => 298,  1008 => 296,  1004 => 295,  1001 => 294,  999 => 293,  996 => 292,  988 => 290,  985 => 289,  977 => 287,  974 => 286,  970 => 284,  965 => 282,  960 => 281,  954 => 279,  952 => 278,  949 => 277,  943 => 273,  941 => 272,  937 => 270,  935 => 269,  932 => 268,  925 => 264,  921 => 263,  917 => 262,  913 => 261,  908 => 260,  902 => 258,  900 => 257,  897 => 256,  895 => 255,  892 => 254,  885 => 250,  881 => 249,  877 => 248,  873 => 246,  867 => 245,  860 => 240,  855 => 237,  852 => 236,  848 => 235,  844 => 233,  842 => 232,  839 => 231,  835 => 229,  831 => 227,  825 => 225,  822 => 224,  816 => 222,  814 => 221,  811 => 220,  808 => 219,  800 => 215,  780 => 213,  778 => 212,  774 => 211,  771 => 210,  769 => 209,  766 => 208,  758 => 206,  755 => 205,  747 => 203,  744 => 202,  736 => 200,  733 => 199,  725 => 197,  722 => 196,  714 => 194,  711 => 193,  703 => 191,  700 => 190,  692 => 188,  689 => 187,  677 => 185,  674 => 184,  666 => 182,  663 => 181,  655 => 179,  652 => 178,  644 => 176,  641 => 175,  631 => 173,  628 => 172,  614 => 170,  612 => 169,  608 => 167,  606 => 166,  603 => 165,  598 => 162,  594 => 160,  592 => 159,  587 => 157,  580 => 154,  578 => 153,  575 => 152,  572 => 151,  566 => 148,  563 => 147,  561 => 146,  556 => 145,  554 => 144,  550 => 142,  546 => 140,  542 => 138,  528 => 137,  524 => 136,  517 => 135,  500 => 134,  496 => 133,  493 => 132,  490 => 131,  485 => 128,  481 => 126,  479 => 125,  474 => 123,  467 => 120,  464 => 119,  461 => 118,  455 => 115,  452 => 114,  449 => 113,  446 => 112,  438 => 110,  436 => 109,  433 => 108,  430 => 107,  426 => 105,  401 => 102,  396 => 101,  379 => 100,  376 => 99,  365 => 90,  328 => 87,  323 => 86,  306 => 85,  299 => 83,  288 => 82,  285 => 81,  283 => 80,  280 => 79,  276 => 77,  263 => 75,  259 => 74,  256 => 73,  254 => 72,  243 => 63,  204 => 60,  195 => 59,  192 => 58,  174 => 57,  172 => 56,  165 => 54,  155 => 53,  149 => 52,  146 => 51,  144 => 50,  139 => 49,  137 => 48,  136 => 47,  135 => 46,  134 => 45,  133 => 44,  131 => 43,  128 => 42,  122 => 40,  119 => 39,  117 => 38,  112 => 37,  107 => 35,  103 => 34,  98 => 32,  92 => 30,  90 => 29,  87 => 28,  76 => 26,  72 => 25,  69 => 24,  67 => 23,  63 => 22,  60 => 20,  58 => 19,  56 => 18,  54 => 16,  53 => 15,  52 => 14,  51 => 12,  50 => 11,  49 => 10,  47 => 8,  46 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/product.twig", "");
    }
}
