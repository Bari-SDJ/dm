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

/* Block/login_sp.twig */
class __TwigTemplate_9784a056d5256d6a7db4fdeef9faecc8214f50edc4f369de241bd4d2272c534c extends \Eccube\Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login_sp.twig"));

        // line 11
        echo "
<div class=\"ec-headerLinkArea\">
    <div class=\"ec-headerLink__list\">
        <a class=\"ec-headerLink__item\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-shopping-cart fa-fw\"></i>
            </div>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートを見る"), "html", null, true);
        echo "</span>
        </a>
        ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 21
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 27, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 27)) {
                // line 28
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 35
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログアウト"), "html", null, true);
            echo "</span>
            </a>
        ";
        } else {
            // line 42
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 48, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 48)) {
                // line 49
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 56
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_login");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 63
        echo "        <a class=\"ec-headerLink__item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-home fa-fw\"></i>
            </div>
            <span>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ホームに戻る"), "html", null, true);
        echo "</span>
        </a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/login_sp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 67,  145 => 63,  139 => 60,  131 => 56,  125 => 53,  117 => 49,  115 => 48,  110 => 46,  102 => 42,  96 => 39,  88 => 35,  82 => 32,  74 => 28,  72 => 27,  67 => 25,  59 => 21,  57 => 20,  52 => 18,  45 => 14,  40 => 11,);
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

<div class=\"ec-headerLinkArea\">
    <div class=\"ec-headerLink__list\">
        <a class=\"ec-headerLink__item\" href=\"{{ url('cart') }}\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-shopping-cart fa-fw\"></i>
            </div>
            <span>{{ 'カートを見る'|trans }}</span>
        </a>
        {% if is_granted('ROLE_USER') %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('mypage') }}\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>{{ 'マイページ'|trans }}</span>
            </a>
            {% if BaseInfo.option_favorite_product %}
                <a class=\"ec-headerLink__item\" href=\"{{ url('mypage_favorite') }}\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>{{ 'お気に入り'|trans }}</span>
                </a>
            {% endif %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('logout') }}\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>{{ 'ログアウト'|trans }}</span>
            </a>
        {% else %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('entry') }}\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>{{ '新規会員登録'|trans }}</span>
            </a>
            {% if BaseInfo.option_favorite_product %}
                <a class=\"ec-headerLink__item\" href=\"{{ url('mypage_favorite') }}\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>{{ 'お気に入り'|trans }}</span>
                </a>
            {% endif %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('mypage_login') }}\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>{{ 'ログイン'|trans }}</span>
            </a>
        {% endif %}
        <a class=\"ec-headerLink__item\" href=\"{{ url('homepage') }}\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-home fa-fw\"></i>
            </div>
            <span>{{ 'ホームに戻る'|trans }}</span>
        </a>
    </div>
</div>
", "Block/login_sp.twig", "/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/src/Eccube/Resource/template/default/Block/login_sp.twig");
    }
}
