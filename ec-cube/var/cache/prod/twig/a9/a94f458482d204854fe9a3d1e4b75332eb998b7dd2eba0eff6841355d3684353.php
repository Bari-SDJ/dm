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

/* Mypage/quotation.twig */
class __TwigTemplate_857c0cdab56d728fde4f348263cd1d1a50b818bfcbfc8008aac4918a1a333640 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/quotation.twig"));

        // line 12
        $context["mypageno"] = "quotation";
        // line 14
        $context["body_class"] = "mypage";
        // line 10
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/quotation.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 18
        echo " <script>
    //alert(document.referrer);
    //alert(window.location.origin + window.location.pathname);
 </script>

 // loading function added
 <script>
  window.addEventListener('load', () => {
    preUrl = document.referrer;
    targetUrl1 = window.location.origin + window.location.pathname + \"/new\";
    targetUrl2 = window.location.origin + window.location.pathname + \"/new?\";
    if (preUrl == targetUrl1 || 
           preUrl == targetUrl2){


        // Add blur on content during loading
        document.getElementById('content').classList.add('blur');

        // Remove loading screen after 3 seconds
        setTimeout(() => {
        document.getElementById('loader-wrapper').style.display = 'none';
        document.getElementById('content').classList.remove('blur');
        }, 2500); // 3 seconds
    }else{
        document.getElementById('loader-wrapper').style.display = 'none';
    }
  });
</script>
 // End loading function added

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 51
        echo "
<!-- loading function added -->
<style>
  body, html {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }

  #loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(5px);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  #loader {
    font-size: 24px;
    color: #333;
  }

  #content {
    padding: 20px;
    transition: filter 0.3s ease;
  }

  .blur {
    filter: blur(5px);
    pointer-events: none;
  }
</style>

<div id=\"loader-wrapper\">
  <div id=\"loader\">Processing(処理中)....</div>
</div>
 <!-- End loading function added -->

<div id=\"content\">
</div>
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("見積書一覧"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 102
        echo twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
        </div>
        <!--
        <div class=\"ec-mypageRole\">
            ";
        // line 106
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 106, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 106)) > 0)) {
            // line 107
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count%件のお届け先があります", ["%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 107, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 107))]), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 109
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先は登録されていません。"), "html", null, true);
            echo "</p>
            ";
        }
        // line 111
        echo "        </div>
        -->
        <div class=\"ec-mypageRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    
                    <div class=\"ec-addressRole\">
                        <div class=\"ec-addressRole__actions\">
                            ";
        // line 119
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 119, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 119)) < twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 119, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, false, 119))) {
            // line 120
            echo "                                <a class=\"ec-inlineBtn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_quotation_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規見積書を作成する/Generate an Estimat"), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 122
            echo "                                <span class=\"ec-errorMessage\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先登録の上限の%count%件に達しています。お届け先を入力したい場合は、削除か変更を行ってください。", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 122, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, false, 122)]), "html", null, true);
            echo "</span>
                            ";
        }
        // line 124
        echo "                        </div>
                    </div>
                    ";
        // line 126
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 126, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 126)) > 0)) {
            // line 127
            echo "                        <div class=\"ec-addressList\">
                            ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 128, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                // line 129
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Name01", [], "any", false, false, false, 129) == "quotation")) {
                    // line 130
                    echo "                                    <div class=\"ec-addressList__item\">
                                        <a class=\"ec-addressList__remove\" href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_quotation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\">
                                            <div class=\"ec-icon\">
                                                <img src=\"";
                    // line 133
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                    echo "\" alt=\"remove\">
                                            </div>
                                        </a>
                                        <div class=\"ec-addressList__address\">
                                            <div>";
                    // line 137
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, false, 137), "html", null, true);
                    echo "</div>
                                            <!-- <div>";
                    // line 138
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, false, 138), "html", null, true);
                    echo "&nbsp;";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, false, 138), "html", null, true);
                    echo "</div>
                                            <div>";
                    // line 139
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, false, 139), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, false, 139), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr01", [], "any", false, false, false, 139), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr02", [], "any", false, false, false, 139), "html", null, true);
                    echo "</div>
                                            <div>";
                    // line 140
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "phone_number", [], "any", false, false, false, 140), "html", null, true);
                    echo "</div>
                                            -->
                                        </div>
                                        <div class=\"ec-addressList__action\">
                                            <!--  <a class=\"ec-inlineBtn\" href=\"";
                    // line 144
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_quotation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                    echo "</a> -->
                                            <!--  <a href=\"/eccube-mylocal/ec-cube/html/upload/quotation/";
                    // line 145
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, false, 145), "html", null, true);
                    echo ".pdf\" target=\"_blank\">Download</a> -->
                                            <a href= \"";
                    // line 146
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "schemeAndHttpHost", [], "any", false, false, false, 146), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "basePath", [], "any", false, false, false, 146), "html", null, true);
                    echo "/html/upload/quotation/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, false, 146), "html", null, true);
                    echo ".pdf\" target=\"_blank\">Download</a>
                                        </div>
                                    </div>
                                ";
                }
                // line 150
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                        </div>
                    ";
        }
        // line 153
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/quotation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 153,  303 => 151,  297 => 150,  285 => 146,  279 => 145,  273 => 144,  266 => 140,  257 => 139,  251 => 138,  247 => 137,  240 => 133,  233 => 131,  230 => 130,  227 => 129,  223 => 128,  220 => 127,  218 => 126,  214 => 124,  208 => 122,  200 => 120,  198 => 119,  188 => 111,  182 => 109,  176 => 107,  174 => 106,  167 => 102,  160 => 100,  109 => 51,  102 => 50,  65 => 18,  58 => 17,  50 => 10,  48 => 14,  46 => 12,  36 => 10,);
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
{% extends 'default_frame.twig' %}

{% set mypageno = 'quotation' %}

{% set body_class = 'mypage' %}


{% block javascript %}
 <script>
    //alert(document.referrer);
    //alert(window.location.origin + window.location.pathname);
 </script>

 // loading function added
 <script>
  window.addEventListener('load', () => {
    preUrl = document.referrer;
    targetUrl1 = window.location.origin + window.location.pathname + \"/new\";
    targetUrl2 = window.location.origin + window.location.pathname + \"/new?\";
    if (preUrl == targetUrl1 || 
           preUrl == targetUrl2){


        // Add blur on content during loading
        document.getElementById('content').classList.add('blur');

        // Remove loading screen after 3 seconds
        setTimeout(() => {
        document.getElementById('loader-wrapper').style.display = 'none';
        document.getElementById('content').classList.remove('blur');
        }, 2500); // 3 seconds
    }else{
        document.getElementById('loader-wrapper').style.display = 'none';
    }
  });
</script>
 // End loading function added

{% endblock javascript %}

{% block main %}

<!-- loading function added -->
<style>
  body, html {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }

  #loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(5px);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  #loader {
    font-size: 24px;
    color: #333;
  }

  #content {
    padding: 20px;
    transition: filter 0.3s ease;
  }

  .blur {
    filter: blur(5px);
    pointer-events: none;
  }
</style>

<div id=\"loader-wrapper\">
  <div id=\"loader\">Processing(処理中)....</div>
</div>
 <!-- End loading function added -->

<div id=\"content\">
</div>
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'マイページ'|trans }}/{{ '見積書一覧'|trans }}</h1>
            </div>
            {{ include('Mypage/navi.twig') }}
        </div>
        <!--
        <div class=\"ec-mypageRole\">
            {% if Customer.CustomerAddresses|length > 0 %}
                <p class=\"ec-para-normal\">{{ '%count%件のお届け先があります'|trans({'%count%':Customer.CustomerAddresses|length}) }}</p>
            {% else %}
                <p class=\"ec-para-normal\">{{ 'お届け先は登録されていません。'|trans }}</p>
            {% endif %}
        </div>
        -->
        <div class=\"ec-mypageRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    
                    <div class=\"ec-addressRole\">
                        <div class=\"ec-addressRole__actions\">
                            {% if Customer.CustomerAddresses|length < eccube_config.eccube_deliv_addr_max %}
                                <a class=\"ec-inlineBtn\" href=\"{{ url('mypage_quotation_new') }}\">{{ '新規見積書を作成する/Generate an Estimat'|trans }}</a>
                            {% else %}
                                <span class=\"ec-errorMessage\">{{ 'お届け先登録の上限の%count%件に達しています。お届け先を入力したい場合は、削除か変更を行ってください。'|trans({ '%count%': eccube_config.eccube_deliv_addr_max }) }}</span>
                            {% endif %}
                        </div>
                    </div>
                    {% if Customer.CustomerAddresses|length > 0 %}
                        <div class=\"ec-addressList\">
                            {% for CustomerAddress in Customer.CustomerAddresses %}
                                {% if CustomerAddress.Name01 == \"quotation\" %}
                                    <div class=\"ec-addressList__item\">
                                        <a class=\"ec-addressList__remove\" href=\"{{ url('mypage_quotation_delete', { id : CustomerAddress.id }) }}\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                            <div class=\"ec-icon\">
                                                <img src=\"{{ asset('assets/icon/cross.svg') }}\" alt=\"remove\">
                                            </div>
                                        </a>
                                        <div class=\"ec-addressList__address\">
                                            <div>{{ CustomerAddress.name02 }}</div>
                                            <!-- <div>{{ CustomerAddress.name01 }}&nbsp;{{ CustomerAddress.name02 }}</div>
                                            <div>{{ '〒'|trans }}{{ CustomerAddress.postal_code }} {{ CustomerAddress.Pref }}{{ CustomerAddress.addr01 }}{{ CustomerAddress.addr02 }}</div>
                                            <div>{{ CustomerAddress.phone_number }}</div>
                                            -->
                                        </div>
                                        <div class=\"ec-addressList__action\">
                                            <!--  <a class=\"ec-inlineBtn\" href=\"{{ url('mypage_quotation_edit', { id : CustomerAddress.id }) }}\" target=\"_blank\">{{ '変更'|trans }}</a> -->
                                            <!--  <a href=\"/eccube-mylocal/ec-cube/html/upload/quotation/{{ Customer.id }}/{{ CustomerAddress.name02 }}.pdf\" target=\"_blank\">Download</a> -->
                                            <a href= \"{{ app.request.schemeAndHttpHost }}{{ app.request.basePath }}/html/upload/quotation/{{ Customer.id }}/{{ CustomerAddress.name02 }}.pdf\" target=\"_blank\">Download</a>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Mypage/quotation.twig", "/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/app/template/default/Mypage/quotation.twig");
    }
}
