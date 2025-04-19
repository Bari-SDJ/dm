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

/* Mypage/navi.twig */
class __TwigTemplate_aaa70b2a3f13f7f1b53076484fb0e36be3ddd0b3a37a7414f5b478df199e9376 extends \Eccube\Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/navi.twig"));

        // line 11
        echo "
<div class=\"ec-navlistRole\">
    <ul class=\"ec-navlistRole__navlist\">
        <li class=\"ec-navlistRole__item ";
        // line 14
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 14, $this->source); })()), "")) : ("")) == "quotation")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_quotation");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("見積書一覧"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 17
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 17, $this->source); })()), "")) : ("")) == "invoice")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_invoice");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("インボイス一覧"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 20
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 20, $this->source); })()), "")) : ("")) == "contract")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_contract");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("契約書一覧"), "html", null, true);
        echo "</a>
        </li>

        <li class=\"ec-navlistRole__item ";
        // line 24
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 24, $this->source); })()), "")) : ("")) == "priceboard")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_priceboard_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("プライスボード"), "html", null, true);
        echo "</a>
        </li>

        <li class=\"ec-navlistRole__item ";
        // line 28
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 28, $this->source); })()), "")) : ("")) == "dmtemplate")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_dmtemplate");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("テンプレート"), "html", null, true);
        echo "</a>
        </li>
        
        ";
        // line 41
        echo "        <li class=\"ec-navlistRole__item ";
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 41, $this->source); })()), "")) : ("")) == "change")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_change");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員情報編集"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 44
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 44, $this->source); })()), "")) : ("")) == "index")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("支払い履歴"), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 55
        echo "    </ul>
</div>
<!--
<div class=\"ec-welcomeMsg\">
    <p>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ようこそ%last_name% %first_name%さん", ["%last_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "name01", [], "any", false, false, false, 59), "%first_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "name02", [], "any", false, false, false, 59)]), "html", null, true);
        echo "</p>
    ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 60, $this->source); })()), "option_point", [], "any", false, false, false, 60)) {
            // line 61
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在の所持ポイントは %point%pt です。", ["%point%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "point", [], "any", false, false, false, 61))]), "html", null, true);
            echo "</p>
    ";
        }
        // line 63
        echo "</div>
-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/navi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  152 => 61,  150 => 60,  146 => 59,  140 => 55,  133 => 45,  127 => 44,  120 => 42,  113 => 41,  105 => 29,  99 => 28,  91 => 25,  85 => 24,  77 => 21,  71 => 20,  64 => 18,  58 => 17,  51 => 15,  45 => 14,  40 => 11,);
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

<div class=\"ec-navlistRole\">
    <ul class=\"ec-navlistRole__navlist\">
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'quotation' %}active{% endif %}\">
            <a href=\"{{ url('mypage_quotation') }}\">{{ '見積書一覧'|trans }}</a>
        </li>
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'invoice' %}active{% endif %}\">
            <a href=\"{{ url('mypage_invoice') }}\">{{ 'インボイス一覧'|trans }}</a>
        </li>
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'contract' %}active{% endif %}\">
            <a href=\"{{ url('mypage_contract') }}\">{{ '契約書一覧'|trans }}</a>
        </li>

        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'priceboard' %}active{% endif %}\">
            <a href=\"{{ url('mypage_priceboard_new') }}\">{{ 'プライスボード'|trans }}</a>
        </li>

        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'dmtemplate' %}active{% endif %}\">
            <a href=\"{{ url('mypage_dmtemplate') }}\">{{ 'テンプレート'|trans }}</a>
        </li>
        
        {#
               {% if (CustomerId == \"20002\") or (CustomerId == \"11\") or (CustomerId == \"1\") %}
               {% endif %}
        {% if BaseInfo.option_favorite_product %}
            <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'favorite' %}active{% endif %}\">
                <a href=\"{{ url('mypage_favorite') }}\">{{ 'お気に入り一覧'|trans }}</a>
            </li>
        {% endif %}
        #}
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'change' %}active{% endif %}\">
            <a href=\"{{ url('mypage_change') }}\">{{ '会員情報編集'|trans }}</a>
        </li>
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'index' %}active{% endif %}\">
            <a href=\"{{ url('mypage') }}\">{{ '支払い履歴'|trans }}</a>
        </li>
        {#
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'delivery' %}active{% endif %}\">
            <a href=\"{{ url('mypage_delivery') }}\">{{ 'お届け先一覧'|trans }}</a>
        </li>
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'withdraw' %}active{% endif %}\">
            <a href=\"{{ url('mypage_withdraw') }}\">{{ '退会手続き'|trans }}</a>
        </li>
        #}
    </ul>
</div>
<!--
<div class=\"ec-welcomeMsg\">
    <p>{{ 'ようこそ%last_name% %first_name%さん'|trans({ '%last_name%': app.user.name01, '%first_name%': app.user.name02 }) }}</p>
    {% if BaseInfo.option_point %}
        <p>{{ '現在の所持ポイントは %point%pt です。'|trans({ '%point%': app.user.point|number_format}) }}</p>
    {% endif %}
</div>
-->

", "Mypage/navi.twig", "/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/src/Eccube/Resource/template/default/Mypage/navi.twig");
    }
}
