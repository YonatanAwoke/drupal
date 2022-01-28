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

/* themes/theme__100200/templates/block.html.twig */
class __TwigTemplate_5ce70f8556226e957d3af4e744c69a58451be25de9970fb544e7bc4cbc5b2283 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 4), 4, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["plugin_id"] ?? null), 5, $this->source)))];
        // line 8
        $context["theme_path"] = (call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["node"] ?? null), 8, $this->source)]) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        echo " 
 ";
        // line 9
        if ((((((((((((((((((((((((((((((((((((((((((($context["region"] ?? null) == "leftfooterarea") && (($context["style_leftfooterarea"] ?? null) == 0)) || ((($context["region"] ?? null) == "centerfooterarea") && (($context["style_centerfooterarea"] ?? null) == 0))) || ((($context["region"] ?? null) == "rightfooterarea") && (($context["style_rightfooterarea"] ?? null) == 0))) || ((        // line 10
($context["region"] ?? null) == "headerabovecolumn1") && (($context["style_headerabovecolumn1"] ?? null) == 0))) || ((        // line 11
($context["region"] ?? null) == "headerabovecolumn2") && (($context["style_headerabovecolumn2"] ?? null) == 0))) || ((        // line 12
($context["region"] ?? null) == "headerabovecolumn3") && (($context["style_headerabovecolumn3"] ?? null) == 0))) || ((        // line 13
($context["region"] ?? null) == "headerabovecolumn4") && (($context["style_headerabovecolumn4"] ?? null) == 0))) || ((        // line 14
($context["region"] ?? null) == "headerbelowcolumn1") && (($context["style_headerbelowcolumn1"] ?? null) == 0))) || ((        // line 15
($context["region"] ?? null) == "headerbelowcolumn2") && (($context["style_headerbelowcolumn2"] ?? null) == 0))) || ((        // line 16
($context["region"] ?? null) == "headerbelowcolumn3") && (($context["style_headerbelowcolumn3"] ?? null) == 0))) || ((        // line 17
($context["region"] ?? null) == "headerbelowcolumn4") && (($context["style_headerbelowcolumn4"] ?? null) == 0))) || ((        // line 18
($context["region"] ?? null) == "headershape00") && (($context["style_headershape00"] ?? null) == 0))) || ((        // line 19
($context["region"] ?? null) == "menuabovecolumn1") && (($context["style_menuabovecolumn1"] ?? null) == 0))) || ((        // line 20
($context["region"] ?? null) == "menuabovecolumn2") && (($context["style_menuabovecolumn2"] ?? null) == 0))) || ((        // line 21
($context["region"] ?? null) == "menuabovecolumn3") && (($context["style_menuabovecolumn3"] ?? null) == 0))) || ((        // line 22
($context["region"] ?? null) == "menuabovecolumn4") && (($context["style_menuabovecolumn4"] ?? null) == 0))) || ((        // line 23
($context["region"] ?? null) == "menubelowcolumn1") && (($context["style_menubelowcolumn1"] ?? null) == 0))) || ((        // line 24
($context["region"] ?? null) == "menubelowcolumn2") && (($context["style_menubelowcolumn2"] ?? null) == 0))) || ((        // line 25
($context["region"] ?? null) == "menubelowcolumn3") && (($context["style_menubelowcolumn3"] ?? null) == 0))) || ((        // line 26
($context["region"] ?? null) == "menubelowcolumn4") && (($context["style_menubelowcolumn4"] ?? null) == 0))) || ((        // line 27
($context["region"] ?? null) == "contenttopcolumn1") && (($context["style_contenttopcolumn1"] ?? null) == 0))) || ((        // line 28
($context["region"] ?? null) == "contenttopcolumn2") && (($context["style_contenttopcolumn2"] ?? null) == 0))) || ((        // line 29
($context["region"] ?? null) == "contenttopcolumn3") && (($context["style_contenttopcolumn3"] ?? null) == 0))) || ((        // line 30
($context["region"] ?? null) == "contenttopcolumn4") && (($context["style_contenttopcolumn4"] ?? null) == 0))) || ((        // line 31
($context["region"] ?? null) == "contentbottomcolumn1") && (($context["style_contentbottomcolumn1"] ?? null) == 0))) || ((        // line 32
($context["region"] ?? null) == "contentbottomcolumn2") && (($context["style_contentbottomcolumn2"] ?? null) == 0))) || ((        // line 33
($context["region"] ?? null) == "contentbottomcolumn3") && (($context["style_contentbottomcolumn3"] ?? null) == 0))) || ((        // line 34
($context["region"] ?? null) == "contentbottomcolumn4") && (($context["style_contentbottomcolumn4"] ?? null) == 0))) || ((        // line 35
($context["region"] ?? null) == "footerabovecolumn1") && (($context["style_footerabovecolumn1"] ?? null) == 0))) || ((        // line 36
($context["region"] ?? null) == "footerabovecolumn2") && (($context["style_footerabovecolumn2"] ?? null) == 0))) || ((        // line 37
($context["region"] ?? null) == "footerabovecolumn3") && (($context["style_footerabovecolumn3"] ?? null) == 0))) || ((        // line 38
($context["region"] ?? null) == "footerabovecolumn4") && (($context["style_footerabovecolumn4"] ?? null) == 0))) || ((        // line 39
($context["region"] ?? null) == "footercellcolumn1") && (($context["style_footercellcolumn1"] ?? null) == 0))) || ((        // line 40
($context["region"] ?? null) == "footercellcolumn2") && (($context["style_footercellcolumn2"] ?? null) == 0))) || ((        // line 41
($context["region"] ?? null) == "footercellcolumn3") && (($context["style_footercellcolumn3"] ?? null) == 0))) || ((        // line 42
($context["region"] ?? null) == "footercellcolumn4") && (($context["style_footercellcolumn4"] ?? null) == 0))) || ((        // line 43
($context["region"] ?? null) == "footerbelowcolumn1") && (($context["style_footerbelowcolumn1"] ?? null) == 0))) || ((        // line 44
($context["region"] ?? null) == "footerbelowcolumn2") && (($context["style_footerbelowcolumn2"] ?? null) == 0))) || ((        // line 45
($context["region"] ?? null) == "footerbelowcolumn3") && (($context["style_footerbelowcolumn3"] ?? null) == 0))) || ((        // line 46
($context["region"] ?? null) == "footerbelowcolumn4") && (($context["style_footerbelowcolumn4"] ?? null) == 0)))) {
            // line 47
            echo " 
\t";
            // line 48
            if ((($context["region"] ?? null) == "sidebar_first")) {
                echo " 
<div class= \"ttr_sidebar_left_padding\" >
";
            } else {
                // line 50
                echo " 
";
                // line 51
                if ((($context["region"] ?? null) == "sidebar_second")) {
                    echo " 
<div class= \"ttr_sidebar_right_padding\" >
";
                }
                // line 53
                echo " 
";
            }
            // line 54
            echo " 
";
            // line 55
            if (twig_in_filter("shape", ($context["region"] ?? null))) {
                // line 56
                echo "<div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_shapes"], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "> 
";
            } else {
                // line 57
                echo " 
";
                // line 58
                if (twig_in_filter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 59
                    echo "<div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_footer_block"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo "> 
";
                } else {
                    // line 60
                    echo " 
<div";
                    // line 61
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_block"], "method", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "> 
";
                }
                // line 62
                echo " 
";
            }
            // line 63
            echo " 
<div class=\"margin_collapsetop\"></div> 
";
            // line 65
            if (($context["label"] ?? null)) {
                echo " 
<div class=\"ttr_block_header\"> 
";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 67, $this->source), "html", null, true);
                echo " 
<h3 ";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "ttr_block_heading"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "> 
";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 69, $this->source), "html", null, true);
                echo " </h3> 
";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 70, $this->source), "html", null, true);
                echo " 
";
            } else {
                // line 71
                echo " 
<div class=\"ttr_block_without_header\"> 
";
            }
            // line 73
            echo " 
</div> 
";
            // line 75
            if (twig_in_filter("shape", ($context["region"] ?? null))) {
                echo " 
";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 76, $this->source), "html", null, true);
                echo " 
";
            } else {
                // line 77
                echo " 
";
                // line 78
                if (twig_in_filter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 79
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 79, $this->source), "html", null, true);
                    echo "
";
                } else {
                    // line 81
                    echo "<div class = \"ttr_block_content\"> 
";
                    // line 82
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 82, $this->source), "html", null, true);
                    echo "
</div> 
";
                }
            }
            // line 86
            echo "<div class=\"margin_collapsetop\"></div>
</div>
";
        } else {
            // line 88
            echo " 
<div";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "> 
";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 90, $this->source), "html", null, true);
            echo " 
";
            // line 91
            if (($context["label"] ?? null)) {
                echo " 
<h2";
                // line 92
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 92, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 92, $this->source), "html", null, true);
                echo "</h2> 
";
            }
            // line 93
            echo " 
";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 94, $this->source), "html", null, true);
            echo " 
";
            // line 95
            $this->displayBlock('content', $context, $blocks);
            // line 99
            echo " 
</div> 
";
        }
        // line 101
        echo " 
";
    }

    // line 95
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "> 
";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 97, $this->source), "html", null, true);
        echo " 
</div> 
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100200/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 97,  259 => 96,  253 => 95,  248 => 101,  243 => 99,  241 => 95,  237 => 94,  234 => 93,  227 => 92,  223 => 91,  219 => 90,  215 => 89,  212 => 88,  207 => 86,  200 => 82,  197 => 81,  192 => 79,  190 => 78,  187 => 77,  182 => 76,  178 => 75,  174 => 73,  169 => 71,  164 => 70,  160 => 69,  156 => 68,  152 => 67,  147 => 65,  143 => 63,  139 => 62,  134 => 61,  131 => 60,  125 => 59,  123 => 58,  120 => 57,  114 => 56,  112 => 55,  109 => 54,  105 => 53,  99 => 51,  96 => 50,  90 => 48,  87 => 47,  85 => 46,  84 => 45,  83 => 44,  82 => 43,  81 => 42,  80 => 41,  79 => 40,  78 => 39,  77 => 38,  76 => 37,  75 => 36,  74 => 35,  73 => 34,  72 => 33,  71 => 32,  70 => 31,  69 => 30,  68 => 29,  67 => 28,  66 => 27,  65 => 26,  64 => 25,  63 => 24,  62 => 23,  61 => 22,  60 => 21,  59 => 20,  58 => 19,  57 => 18,  56 => 17,  55 => 16,  54 => 15,  53 => 14,  52 => 13,  51 => 12,  50 => 11,  49 => 10,  48 => 9,  44 => 8,  42 => 5,  41 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100200/templates/block.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\theme__100200\\templates\\block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 9, "block" => 95);
        static $filters = array("clean_class" => 4, "escape" => 56);
        static $functions = array("file_url" => 8, "active_theme_path" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                ['file_url', 'active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
