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

/* Mypage/quotation_edit.twig */
class __TwigTemplate_bec3cbacc9de01c663cdbf186d5e5009d63ea510bc8d627c16a4bffa374d2c79 extends \Eccube\Twig\Template
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
        // line 13
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/quotation_edit.twig"));

        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 17
        $context["mypageno"] = "quotation";
        // line 19
        $context["body_class"] = "mypage";
        // line 13
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/quotation_edit.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "
  ";
        // line 23
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 28
        echo "
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規見積書を作成する（Generate an Estimat）"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 34
        echo twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
        </div>
        <form method=\"Post\" action=\"?\" novalidate class=\"h-adr\">
                      <div class=\"ec-off4Grid__cell-bk\">
                          
                      </div>
                    <div class=\"ec-RegisterRole__actions\">
                        <div class=\"ec-off4Grid\" style=\"place-content: center;\">
                            <input type=\"text\" value=\"\" id=\"username\" name=\"username\" size=\"70%\">
                            <div class=\"ec-off4Grid__cell-bk\">
                                 <button type=\"submit\" class=\"ec-blockBtn--cancel\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("自動入力"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                        <div style=\"text-align: center; color:#f71f04\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 47, $this->source); })()), "URL_Error", [], "array", false, false, false, 47), "html", null, true);
        echo "</div>
                    </div>
          </form>
                      <div class=\"ec-off4Grid__cell-bk\">
                            　
                      </div>
        <div class=\"ec-mypageRole\">
             <form id=\"myForm\" method=\"Post\" action=\"?\" novalidate class=\"h-adr\"> 
            ";
        // line 56
        echo "                <div class=\"ec-editRole\">
                    <div class=\"ec-off1Grid\">
                        <div class=\"ec-off1Grid__cell\">

                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "_token", [], "any", false, false, false, 61), 'widget');
        echo "
                            <div class=\"ec-borderedDefs\" style=\"display:none;\" >
                            
                                <dl>
                                    <dt>
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div>

                                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "name", [], "any", false, false, false, 71), "name02", [], "any", false, false, false, 71), 'widget', ["attr" => ["placeholder" => "名"], "value" => "dummy", "id" => "myField"]);
        echo "
                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "name01", [], "any", false, false, false, 72), 'widget', ["attr" => ["placeholder" => "姓"], "value" => "quotation"]);
        echo "
                                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), "name01", [], "any", false, false, false, 73), 'errors', ["value" => "dummy"]);
        echo "
                                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "name02", [], "any", false, false, false, 74), 'errors', ["value" => "dummy"]);
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "kana", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput";
        // line 83
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "kana", [], "any", false, false, false, 83), "kana01", [], "any", false, false, false, 83), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "kana", [], "any", false, false, false, 83), "kana02", [], "any", false, false, false, 83))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "kana", [], "any", false, false, false, 84), "kana01", [], "any", false, false, false, 84), 'widget', ["attr" => ["placeholder" => "セイ"], "value" => "カナ"]);
        echo "
                                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "kana", [], "any", false, false, false, 85), "kana02", [], "any", false, false, false, 85), 'widget', ["attr" => ["placeholder" => "メイ"], "value" => "カナ"]);
        echo "
                                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "kana", [], "any", false, false, false, 86), "kana01", [], "any", false, false, false, 86), 'errors');
        echo "
                                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "kana", [], "any", false, false, false, 87), "kana02", [], "any", false, false, false, 87), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "company_name", [], "any", false, false, false, 93), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput";
        // line 96
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "company_name", [], "any", false, false, false, 96))) ? (" error") : (""));
        echo "\">
                                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "company_name", [], "any", false, false, false, 97), 'widget', ["value" => "dummy"]);
        echo "
                                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "company_name", [], "any", false, false, false, 98), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>
                                
                                <dl>
                                    <dt>
                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "address", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div><span>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "postal_code", [], "any", false, false, false, 109), 'widget', ["value" => "1240004"]);
        echo "
                                            <div class=\"ec-zipInputHelp\">
                                                <div class=\"ec-zipInputHelp__icon\">
                                                    <div class=\"ec-icon\"><img
                                                                src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                </div>></a>
                                            </div>
                                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "postal_code", [], "any", false, false, false, 117), 'errors');
        echo "
                                        </div>

                                        <div >
                                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "address", [], "any", false, false, false, 121), "pref", [], "any", false, false, false, 121), 'widget', ["id" => 3, "value" => "葛飾区"]);
        echo "
                                 
                                        </div>
                                        <div >
                                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "address", [], "any", false, false, false, 125), "addr01", [], "any", false, false, false, 125), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"], "value" => "dummy"]);
        echo "
                                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "address", [], "any", false, false, false, 126), "addr01", [], "any", false, false, false, 126), 'errors');
        echo "
                                        </div>
                                        <div>
                                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "address", [], "any", false, false, false, 129), "addr02", [], "any", false, false, false, 129), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"], "value" => "dummy"]);
        echo "
                                            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "address", [], "any", false, false, false, 130), "addr02", [], "any", false, false, false, 130), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl> 
                                <dl>
                                    <dt>
                                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "phone_number", [], "any", false, false, false, 136), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                                    </dt>
                                    <dd>
                                        <div >
                                            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "phone_number", [], "any", false, false, false, 140), 'widget', ["value" => "11111111111"]);
        echo "
                                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "phone_number", [], "any", false, false, false, 141), 'errors');
        echo "
                                        </div>
                                    </dd>
                                </dl>-->
                                ";
        // line 146
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 146), "eccube_form_options", [], "any", false, false, false, 146), "auto_render", [], "any", false, false, false, 146); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 147
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 147), "eccube_form_options", [], "any", false, false, false, 147), "form_theme", [], "any", false, false, false, 147)) {
                // line 148
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 148), "eccube_form_options", [], "any", false, false, false, 148), "form_theme", [], "any", false, false, false, 148)], true);
                // line 149
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                                    ";
            } else {
                // line 151
                echo "                                        <dl>
                                            <dt>
                                                ";
                // line 153
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'label');
                echo "
                                            </dt>
                                            <dd>
                                                <div class=\"";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 156), "eccube_form_options", [], "any", false, false, false, 156), "style_class", [], "any", false, false, false, 156), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($context["f"])) ? (" error") : (""));
                echo "\">
                                                    ";
                // line 157
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                                    ";
                // line 158
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                                </div>
                                            </dd>
                                        </dl>
                                    ";
            }
            // line 163
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                            </div>

                        </div>
                    </div>

";
        // line 170
        echo "
";
        // line 171
        $context["tax"] = (("Page：, " . (isset($context["CustomerId"]) || array_key_exists("CustomerId", $context) ? $context["CustomerId"] : (function () { throw new RuntimeError('Variable "CustomerId" does not exist.', 171, $this->source); })())) . ".html");
        // line 173
        echo "
";
        // line 174
        $context["partial"] = (("Mypage/" . (isset($context["CustomerId"]) || array_key_exists("CustomerId", $context) ? $context["CustomerId"] : (function () { throw new RuntimeError('Variable "CustomerId" does not exist.', 174, $this->source); })())) . ".html");
        // line 175
        $this->loadTemplate((isset($context["partial"]) || array_key_exists("partial", $context) ? $context["partial"] : (function () { throw new RuntimeError('Variable "partial" does not exist.', 175, $this->source); })()), "Mypage/quotation_edit.twig", 175)->display($context);
        // line 176
        echo "


";
        // line 180
        echo "
                    <div class=\"ec-RegisterRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                            <input type=\"button\" value=\"登録する\" class=\"ec-blockBtn--cancel\" onclick=\"validateAndSubmit()\">
                             <!-- <button type=\"button\" onclick=\"validateAndSubmit()\">送信</button>   
                               <button type=\"submit\" 
                                        class=\"ec-blockBtn--cancel\">";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("登録する"), "html", null, true);
        echo "</button>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/quotation_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 187,  382 => 180,  377 => 176,  375 => 175,  373 => 174,  370 => 173,  368 => 171,  365 => 170,  358 => 164,  352 => 163,  344 => 158,  340 => 157,  335 => 156,  329 => 153,  325 => 151,  319 => 149,  316 => 148,  313 => 147,  308 => 146,  301 => 141,  297 => 140,  290 => 136,  281 => 130,  277 => 129,  271 => 126,  267 => 125,  260 => 121,  253 => 117,  246 => 113,  239 => 109,  235 => 108,  229 => 105,  219 => 98,  215 => 97,  211 => 96,  205 => 93,  196 => 87,  192 => 86,  188 => 85,  184 => 84,  180 => 83,  174 => 80,  165 => 74,  161 => 73,  157 => 72,  153 => 71,  145 => 66,  137 => 61,  130 => 56,  119 => 47,  113 => 44,  100 => 34,  93 => 32,  87 => 28,  80 => 27,  70 => 23,  67 => 22,  60 => 21,  52 => 13,  50 => 19,  48 => 17,  46 => 15,  36 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("

{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% extends 'default_frame.twig' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% set mypageno = 'quotation' %}

{% set body_class = 'mypage' %}

{% block javascript %}

  {{ parent() }}

{% endblock javascript %}

{% block main %}

    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'マイページ'|trans }}/{{ '新規見積書を作成する（Generate an Estimat）'|trans }}</h1>
            </div>
            {{ include('Mypage/navi.twig') }}
        </div>
        <form method=\"Post\" action=\"?\" novalidate class=\"h-adr\">
                      <div class=\"ec-off4Grid__cell-bk\">
                          
                      </div>
                    <div class=\"ec-RegisterRole__actions\">
                        <div class=\"ec-off4Grid\" style=\"place-content: center;\">
                            <input type=\"text\" value=\"\" id=\"username\" name=\"username\" size=\"70%\">
                            <div class=\"ec-off4Grid__cell-bk\">
                                 <button type=\"submit\" class=\"ec-blockBtn--cancel\">{{ '自動入力'|trans }}</button>
                            </div>
                        </div>
                        <div style=\"text-align: center; color:#f71f04\">{{siteInfo['URL_Error']}}</div>
                    </div>
          </form>
                      <div class=\"ec-off4Grid__cell-bk\">
                            　
                      </div>
        <div class=\"ec-mypageRole\">
             <form id=\"myForm\" method=\"Post\" action=\"?\" novalidate class=\"h-adr\"> 
            {#<form name=\"form1\" id=\"form1\" method=\"post\" action=\"/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php\">#}
                <div class=\"ec-editRole\">
                    <div class=\"ec-off1Grid\">
                        <div class=\"ec-off1Grid__cell\">

                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            {{ form_widget(form._token) }}
                            <div class=\"ec-borderedDefs\" style=\"display:none;\" >
                            
                                <dl>
                                    <dt>
                                        {{ form_label(form.name, 'お名前', { 'label_attr': { 'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div>

                                            {{ form_widget(form.name.name02, { 'attr': { 'placeholder': '名' }, 'value': 'dummy', 'id': 'myField'}) }}
                                            {{ form_widget(form.name.name01, { 'attr': { 'placeholder': '姓' }, 'value': 'quotation'}) }}
                                            {{ form_errors(form.name.name01, {'value': 'dummy'}) }}
                                            {{ form_errors(form.name.name02, {'value': 'dummy'}) }}
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        {{ form_label(form.kana, 'お名前(カナ)', { 'label_attr': { 'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput{{ has_errors(form.kana.kana01, form.kana.kana02) ? ' error'}}\">
                                            {{ form_widget(form.kana.kana01, { 'attr': { 'placeholder': 'セイ' }, 'value': 'カナ'}) }}
                                            {{ form_widget(form.kana.kana02, { 'attr': { 'placeholder': 'メイ' }, 'value': 'カナ'}) }}
                                            {{ form_errors(form.kana.kana01) }}
                                            {{ form_errors(form.kana.kana02) }}
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        {{ form_label(form.company_name, '会社名', { 'label_attr': { 'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div class=\"ec-halfInput{{ has_errors(form.company_name) ? ' error' }}\">
                                            {{ form_widget(form.company_name, {'value': 'dummy'}) }}
                                            {{ form_errors(form.company_name) }}
                                        </div>
                                    </dd>
                                </dl>
                                
                                <dl>
                                    <dt>
                                        {{ form_label(form.address, '住所', { 'label_attr': { 'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div><span>{{ '〒'|trans }}</span>
                                            {{ form_widget(form.postal_code, {'value': '1240004'}) }}
                                            <div class=\"ec-zipInputHelp\">
                                                <div class=\"ec-zipInputHelp__icon\">
                                                    <div class=\"ec-icon\"><img
                                                                src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\">
                                                    </div>
                                                </div>></a>
                                            </div>
                                            {{ form_errors(form.postal_code) }}
                                        </div>

                                        <div >
                                            {{ form_widget(form.address.pref,{id: 3, 'value': '葛飾区'}) }}
                                 
                                        </div>
                                        <div >
                                            {{ form_widget(form.address.addr01, { 'attr': { 'placeholder': '市区町村名(例：大阪市北区)' },'value': 'dummy'}) }}
                                            {{ form_errors(form.address.addr01) }}
                                        </div>
                                        <div>
                                            {{ form_widget(form.address.addr02,  { 'attr': { 'placeholder': '番地・ビル名(例：西梅田1丁目6-8)' }, 'value': 'dummy'}) }}
                                            {{ form_errors(form.address.addr02) }}
                                        </div>
                                    </dd>
                                </dl> 
                                <dl>
                                    <dt>
                                        {{ form_label(form.phone_number, '電話番号', { 'label_attr': { 'class': 'ec-label' }}) }}
                                    </dt>
                                    <dd>
                                        <div >
                                            {{ form_widget(form.phone_number,{'value': '11111111111'}) }}
                                            {{ form_errors(form.phone_number) }}
                                        </div>
                                    </dd>
                                </dl>-->
                                {# エンティティ拡張の自動出力 #}
                                {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <dl>
                                            <dt>
                                                {{ form_label(f) }}
                                            </dt>
                                            <dd>
                                                <div class=\"{{ f.vars.eccube_form_options.style_class }}{{ has_errors(f) ? ' error' }}\">
                                                    {{ form_widget(f) }}
                                                    {{ form_errors(f) }}
                                                </div>
                                            </dd>
                                        </dl>
                                    {% endif %}
                                {% endfor %}
                            </div>

                        </div>
                    </div>

{# Html template start #}

{% set tax = \"Page：, \" ~ CustomerId ~ \".html\" %}
{# <p>Total Price: {{ tax }}</p> #}

{% set partial = \"Mypage/\" ~ CustomerId ~ \".html\" %}
{% include partial %}



{# Html template end #}

                    <div class=\"ec-RegisterRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                            <input type=\"button\" value=\"登録する\" class=\"ec-blockBtn--cancel\" onclick=\"validateAndSubmit()\">
                             <!-- <button type=\"button\" onclick=\"validateAndSubmit()\">送信</button>   
                               <button type=\"submit\" 
                                        class=\"ec-blockBtn--cancel\">{{ '登録する'|trans }}</button>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "Mypage/quotation_edit.twig", "/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/app/template/default/Mypage/quotation_edit.twig");
    }
}
