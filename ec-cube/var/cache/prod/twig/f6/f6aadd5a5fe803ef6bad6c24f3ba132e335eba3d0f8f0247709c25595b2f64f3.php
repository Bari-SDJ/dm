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

/* Block/login.twig */
class __TwigTemplate_5bec925413025dc516192d71ad6f13c2eb89b9090b4676f9710594b6df556c08 extends \Eccube\Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login.twig"));

        // line 11
        echo "
<div class=\"ec-headerNav\">
    ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 14
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_quotation");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <!--
        ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 21, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 21)) {
                // line 22
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 23
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 29
            echo "        -->
       
            <div class=\"ec-headerNav__item\">
                <a href=\"https://dm.fujiba.jp/help/\" target=\"_blank\" }}\">
                    <i class=\"ec-headerNav__itemIcon fas fa-cube fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help"), "html", null, true);
            echo "</span>
                </a>
            </div>

        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログアウト"), "html", null, true);
            echo "</span>
            </a>
        </div>
    ";
        } else {
            // line 45
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
            echo "</span>
            </a>
        </div>
        <!--
        ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 52, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 52)) {
                // line 53
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 60
            echo "        -->
        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_login");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
            echo "</span>
            </a>
        </div>
    ";
        }
        // line 68
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 68,  146 => 64,  141 => 62,  137 => 60,  130 => 56,  125 => 54,  122 => 53,  120 => 52,  113 => 48,  108 => 46,  105 => 45,  98 => 41,  93 => 39,  85 => 34,  78 => 29,  71 => 25,  66 => 23,  63 => 22,  61 => 21,  54 => 17,  49 => 15,  46 => 14,  44 => 13,  40 => 11,);
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

<div class=\"ec-headerNav\">
    {% if is_granted('ROLE_USER') %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('mypage_quotation') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ 'マイページ'|trans }}</span>
            </a>
        </div>
        <!--
        {% if BaseInfo.option_favorite_product %}
            <div class=\"ec-headerNav__item\">
                <a href=\"{{ url('mypage_favorite') }}\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">{{ 'お気に入り'|trans }}</span>
                </a>
            </div>
        {% endif %}
        -->
       
            <div class=\"ec-headerNav__item\">
                <a href=\"https://dm.fujiba.jp/help/\" target=\"_blank\" }}\">
                    <i class=\"ec-headerNav__itemIcon fas fa-cube fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">{{ 'Help'|trans }}</span>
                </a>
            </div>

        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('logout') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ 'ログアウト'|trans }}</span>
            </a>
        </div>
    {% else %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('entry') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ '新規会員登録'|trans }}</span>
            </a>
        </div>
        <!--
        {% if BaseInfo.option_favorite_product %}
            <div class=\"ec-headerNav__item\">
                <a href=\"{{ url('mypage_favorite') }}\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">{{ 'お気に入り'|trans }}</span>
                </a>
            </div>
        {% endif %}
        -->
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('mypage_login') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ 'ログイン'|trans }}</span>
            </a>
        </div>
    {% endif %}
</div>
", "Block/login.twig", "/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/src/Eccube/Resource/template/default/Block/login.twig");
    }
}
