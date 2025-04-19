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

/* meta.twig */
class __TwigTemplate_03fc02584cb678be8b9ee139cc5015786a8a6a163c97d81d5f619ed2aeeffbbe extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meta.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meta.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1) == "product_detail")) {
            // line 2
            echo "    ";
            $context["meta_og_type"] = "og:product";
            // line 3
            echo "    ";
            $context["meta_description"] = _twig_default_filter(((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 3, $this->source); })()), "description_detail", [], "any", false, false, false, 3))) : (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 3, $this->source); })()), "description_detail", [], "any", false, false, false, 3))), twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 3, $this->source); })()), "description", [], "any", false, false, false, 3));
            // line 4
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]);
            // line 5
            echo "    <meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 6, $this->source); })()), "main_list_image", [], "any", false, false, false, 6)), "save_image")), "html", null, true);
            echo "\" />
    <meta property=\"product:price:amount\" content=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 7, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 7), "html", null, true);
            echo "\"/>
    <meta property=\"product:price:currency\" content=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 8, $this->source); })()), "currency", [], "any", false, false, false, 8), "html", null, true);
            echo "\"/>
    <meta property=\"product:product_link\" content=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\"/>
    <meta property=\"product:retailer_title\" content=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 10, $this->source); })()), "shop_name", [], "any", false, false, false, 10), "html", null, true);
            echo "\"/>
    ";
            // line 11
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 11, $this->source); })()), "stock_find", [], "any", false, false, false, 11)) {
                // line 12
                echo "        <meta name=\"robots\" content=\"noindex\">
    ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "product_list")) {
            // line 15
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list", ["category_id" => ((twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 15), null)) : (null))]);
            // line 16
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })())) == 0)) {
                // line 17
                echo "        <meta name=\"robots\" content=\"noindex\">
    ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19) == "homepage")) {
            // line 20
            echo "    ";
            $context["meta_og_type"] = "website";
            // line 21
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        }
        // line 23
        echo "
<meta property=\"og:type\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("meta_og_type", $context)) ? (_twig_default_filter((isset($context["meta_og_type"]) || array_key_exists("meta_og_type", $context) ? $context["meta_og_type"] : (function () { throw new RuntimeError('Variable "meta_og_type" does not exist.', 24, $this->source); })()), "article")) : ("article")), "html", null, true);
        echo "\"/>
<meta property=\"og:site_name\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 25, $this->source); })()), "shop_name", [], "any", false, false, false, 25), "html", null, true);
        echo "\"/>
";
        // line 26
        $context["meta_description"] = ((array_key_exists("meta_description", $context)) ? (_twig_default_filter((isset($context["meta_description"]) || array_key_exists("meta_description", $context) ? $context["meta_description"] : (function () { throw new RuntimeError('Variable "meta_description" does not exist.', 26, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26))) : (twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26)));
        // line 27
        if ((isset($context["meta_description"]) || array_key_exists("meta_description", $context) ? $context["meta_description"] : (function () { throw new RuntimeError('Variable "meta_description" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags((isset($context["meta_description"]) || array_key_exists("meta_description", $context) ? $context["meta_description"] : (function () { throw new RuntimeError('Variable "meta_description" does not exist.', 28, $this->source); })())), 0, 120), "html", null, true);
            echo "\">
    <meta property=\"og:description\" content=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags((isset($context["meta_description"]) || array_key_exists("meta_description", $context) ? $context["meta_description"] : (function () { throw new RuntimeError('Variable "meta_description" does not exist.', 29, $this->source); })())), 0, 120), "html", null, true);
            echo "\"/>
";
        }
        // line 31
        if (((array_key_exists("meta_canonical", $context)) ? (_twig_default_filter((isset($context["meta_canonical"]) || array_key_exists("meta_canonical", $context) ? $context["meta_canonical"] : (function () { throw new RuntimeError('Variable "meta_canonical" does not exist.', 31, $this->source); })()))) : (""))) {
            // line 32
            echo "    <meta property=\"og:url\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["meta_canonical"]) || array_key_exists("meta_canonical", $context) ? $context["meta_canonical"] : (function () { throw new RuntimeError('Variable "meta_canonical" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\"/>
    <link rel=\"canonical\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["meta_canonical"]) || array_key_exists("meta_canonical", $context) ? $context["meta_canonical"] : (function () { throw new RuntimeError('Variable "meta_canonical" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "\"/>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  133 => 32,  131 => 31,  126 => 29,  121 => 28,  119 => 27,  117 => 26,  113 => 25,  109 => 24,  106 => 23,  102 => 21,  99 => 20,  97 => 19,  93 => 17,  90 => 16,  87 => 15,  85 => 14,  81 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.request.get('_route') == 'product_detail' %}
    {% set meta_og_type = \"og:product\" %}
    {% set meta_description = Product.description_list | default(Product.description_detail) | default(Page.description) %}
    {% set meta_canonical = url('product_detail', {'id': Product.id}) %}
    <meta property=\"og:title\" content=\"{{ Product.name }}\" />
    <meta property=\"og:image\" content=\"{{ absolute_url(asset(Product.main_list_image|no_image_product, 'save_image')) }}\" />
    <meta property=\"product:price:amount\" content=\"{{ Product.getPrice02IncTaxMin }}\"/>
    <meta property=\"product:price:currency\" content=\"{{ eccube_config.currency }}\"/>
    <meta property=\"product:product_link\" content=\"{{ url('product_detail', {'id': Product.id}) }}\"/>
    <meta property=\"product:retailer_title\" content=\"{{ BaseInfo.shop_name }}\"/>
    {% if not Product.stock_find %}
        <meta name=\"robots\" content=\"noindex\">
    {% endif %}
{% elseif app.request.get('_route') == 'product_list' %}
    {% set meta_canonical = url('product_list', {'category_id': Category.id|default(null)}) %}
    {% if pagination|length == 0 %}
        <meta name=\"robots\" content=\"noindex\">
    {% endif %}
{% elseif app.request.get('_route') == 'homepage' %}
    {% set meta_og_type = 'website' %}
    {% set meta_canonical = url('homepage') %}
{% endif %}

<meta property=\"og:type\" content=\"{{ meta_og_type|default('article') }}\"/>
<meta property=\"og:site_name\" content=\"{{ BaseInfo.shop_name }}\"/>
{% set meta_description = meta_description | default(Page.description) %}
{% if meta_description %}
    <meta name=\"description\" content=\"{{ meta_description|striptags|slice(0,120) }}\">
    <meta property=\"og:description\" content=\"{{ meta_description|striptags|slice(0,120) }}\"/>
{% endif %}
{% if meta_canonical|default() %}
    <meta property=\"og:url\" content=\"{{ meta_canonical }}\"/>
    <link rel=\"canonical\" href=\"{{ meta_canonical }}\"/>
{% endif %}
", "meta.twig", "/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/src/Eccube/Resource/template/default/meta.twig");
    }
}
