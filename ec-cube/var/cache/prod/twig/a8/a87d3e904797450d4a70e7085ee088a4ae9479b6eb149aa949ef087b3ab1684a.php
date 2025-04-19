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

/* Block/category_nav_sp.twig */
class __TwigTemplate_4822c6ef7feecad724945702a09185aa1203edc1f8f18b5606e8322d598d60ce extends \Eccube\Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category_nav_sp.twig"));

        // line 11
        $context["Categories"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "getList", [], "method", false, false, false, 11);
        // line 12
        echo "
";
        // line 28
        echo "
";
        // line 30
        $macros["__internal_1804ae1386bbbdbf90306824da0cf1058775e4cc7afb53432a40571615e6928e"] = $this->macros["__internal_1804ae1386bbbdbf90306824da0cf1058775e4cc7afb53432a40571615e6928e"] = $this;
        // line 31
        echo "<!--
<div class=\"ec-headerCategoryArea\">
    <div class=\"ec-headerCategoryArea__heading\">
        <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カテゴリ一覧"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 39
            echo "                <li>
                    ";
            // line 40
            echo twig_call_macro($macros["__internal_1804ae1386bbbdbf90306824da0cf1058775e4cc7afb53432a40571615e6928e"], "macro_tree", [$context["Category"]], 40, $context, $this->getSourceContext());
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </ul>
    </div>
</div>
-->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function macro_tree($__Category__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 14
            echo "    ";
            $macros["__internal_210a0f39c7a11a036dc0d44266afbee8ded3e21b12d7cfde6c2ca6556c1236d2"] = $this;
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
    </a>
    ";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 18, $this->source); })()), "children", [], "any", false, false, false, 18)) > 0)) {
                // line 19
                echo "        <ul>
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 20, $this->source); })()), "children", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 21
                    echo "                <li>
                    ";
                    // line 22
                    echo twig_call_macro($macros["__internal_210a0f39c7a11a036dc0d44266afbee8ded3e21b12d7cfde6c2ca6556c1236d2"], "macro_tree", [$context["ChildCategory"]], 22, $context, $this->getSourceContext());
                    echo "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </ul>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Block/category_nav_sp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  131 => 22,  128 => 21,  124 => 20,  121 => 19,  119 => 18,  114 => 16,  107 => 15,  104 => 14,  88 => 13,  78 => 43,  69 => 40,  66 => 39,  62 => 38,  55 => 34,  50 => 31,  48 => 30,  45 => 28,  42 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% set Categories = repository('Eccube\\\\Entity\\\\Category').getList() %}

{% macro tree(Category) %}
    {% from _self import tree %}
    <a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">
        {{ Category.name }}
    </a>
    {% if Category.children|length > 0 %}
        <ul>
            {% for ChildCategory in Category.children %}
                <li>
                    {{ tree(ChildCategory) }}
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endmacro %}

{# @see https://github.com/bolt/bolt/pull/2388 #}
{% from _self import tree %}
<!--
<div class=\"ec-headerCategoryArea\">
    <div class=\"ec-headerCategoryArea__heading\">
        <p>{{ 'カテゴリ一覧'|trans }}</p>
    </div>
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            {% for Category in Categories %}
                <li>
                    {{ tree(Category) }}
                </li>
            {% endfor %}
        </ul>
    </div>
</div>
-->", "Block/category_nav_sp.twig", "/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/src/Eccube/Resource/template/default/Block/category_nav_sp.twig");
    }
}
