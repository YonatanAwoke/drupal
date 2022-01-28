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

/* themes/paxton/templates/page.html.twig */
class __TwigTemplate_e5b35a5f3017f76e70579e5c998294d6e88c62c7c0b13a0dff2118c0ebd75aef extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "

<!--start: Header and Navbar -->

<nav class=\"navbar navbar-default\" role=\"navigation\">
  <!--start: Container -->
  <div class=\"container\">
    <div class=\"row\">
     <!--- Start : Header -->
    <!-- Sitename and toggle get grouped for better mobile display -->
    <div class=\"navbar-header col-md-3\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 77)) {
            // line 78
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 80
        echo "    </div>
    <!--- End :Header -->

    <!--- Start: Navigation -->
    <div class=\"col-md-9\">
    ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 85)) {
            // line 86
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 88
        echo "    <!---End: Navigation -->
    </div>
    </div>
  </div>
  <!--/.container-->
</nav>
<!--end: Header and Navbar -->

<!--- Start: Page Title -->
";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 97) &&  !($context["is_front"] ?? null))) {
            // line 98
            echo "
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 108
        echo "<!--- End:Page Title -->

<!-- start: Slider -->
";
        // line 111
        if (($context["is_front"] ?? null)) {
            // line 112
            echo "  <div class=\"slider-wrapper\">
    <div id=\"da-slider\" class=\"da-slider\">
      ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 115
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 115, $this->source));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "      <nav class=\"da-arrows\">
        <span class=\"da-arrows-prev\"></span>
        <span class=\"da-arrows-next\"></span>
      </nav>
    </div>
  </div>
";
        }
        // line 124
        echo "<!-- end: Slider -->

<!--- Start:layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    <!---Start:highlighted -->
      ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 131)) {
            // line 132
            echo "        <div class=\"jumbotron\">
          ";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 136
        echo "    <!---End:highlighted -->

    <!---Start:content top -->
      ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 139)) {
            // line 140
            echo "        <div class=\"row\">
          ";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 144
        echo "    <!---End:Content top -->
    <!-- start: Row -->
    <!--start:content -->
    <div class=\"row layout\">
      <!-- Start:Left SideBar -->
      ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 149)) {
            // line 150
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 151, $this->source), "html", null, true);
            echo " >
            ";
            // line 152
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 156
        echo "      <!-- End:Right SideBar -->

      <!-- Start:content -->
      ";
        // line 159
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 159)) {
            // line 160
            echo "        <div class = \" content_layout \">
          <div class= ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 161, $this->source), "html", null, true);
            echo ">
            ";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
            ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 167
        echo "      <!-- End:content -->

      <!-- Start:Right SideBar -->
      ";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 170)) {
            // line 171
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 172, $this->source), "html", null, true);
            echo ">
            ";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 177
        echo "      <!-- End:Right SideBar -->
    </div>
    <!---End:Content -->
    <!---Start:content bottom -->
    ";
        // line 181
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 181)) {
            // line 182
            echo "      <div class=\"row\">
        ";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 186
        echo "    <!-- End:Content Bottom -->
  </div>
</div>
<!--- End:layout -->

<!-- start: Footer Menu -->
";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 192)) {
            // line 193
            echo "  <div id=\"footer-menu\" class=\"hidden-sm hidden-xs\">
    <!-- start: Container -->
    <div class=\"container\">
      <!-- start: Row -->
      <div class=\"row\">
        <!-- start: Footer Menu Logo -->
        <div class=\"col-sm-2\">
          <div id=\"footer-menu-logo\">
            <a class=\"brand\" href=";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 201, $this->source), "html", null, true);
            echo " > ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 201, $this->source), "html", null, true);
            echo ". </a>
          </div>
        </div>
        <!-- end: Footer Menu Logo -->
        <!-- start: Footer Menu Links-->
        <div class=\"col-sm-9\">
          <div id=\"footer-menu-links\">
            ";
            // line 208
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
            echo "
          </div>
        </div>
        <!-- end: Footer Menu Links-->
        <!-- start: Footer Menu Back To Top -->
        <div class=\"col-sm-1\">
          <div id=\"footer-menu-back-to-top\">
            <a href=\"#\"></a>
          </div>
        </div>
        <!-- end: Footer Menu Back To Top -->
      </div>
      <!-- end: Row -->
    </div>
    <!-- end: Container  -->
  </div>
";
        }
        // line 225
        echo "  <!-- end: Footer Menu -->

<!-- start: Footer -->
";
        // line 228
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 228) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 228)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 228))) {
            // line 229
            echo "  <div id=\"footer\">
    <!-- start: Container -->
    <div class=\"container\">
      <!-- start: Row -->
      <div class=\"row\">
        <!--- Start:Footer First Region -->
        <div class = ";
            // line 235
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 235, $this->source), "html", null, true);
            echo ">
          ";
            // line 236
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 236)) {
                // line 237
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 237), 237, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 239
            echo "        </div>
        <!--- End :Footer First Region -->
        <!--- Start:Footer Second Region -->
        <div class = ";
            // line 242
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 242, $this->source), "html", null, true);
            echo ">
          ";
            // line 243
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 243)) {
                // line 244
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 246
            echo "        </div>
        <!--- End:Footer Second Region -->
        <!--- Start:Footer third Region -->
        <div class = ";
            // line 249
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_class"] ?? null), 249, $this->source), "html", null, true);
            echo ">
          ";
            // line 250
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 250)) {
                // line 251
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 253
            echo "        </div>
        <!--- End:Footer Third Region -->
      </div>
    </div>
  </div>

";
        }
        // line 260
        echo "
<!---End :Footer -->

<!--- Start:Footer Botoom -->
<div id=\"copyright\">
  <!-- start: Container -->
  <div class=\"container\">
    <div class=\"col-sm-12\">
      ";
        // line 268
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 268)) {
            // line 269
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 271
        echo "      <div class=\"clearfix\"></div>
      <div class=\"credited pull-left\"><p class=\"text-center\">";
        // line 272
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Paxton ported to drupal by"));
        echo " <a href=\"http://dropthemes.in\" target=\"_blank\">DropThemes.in</a></p></div>
      ";
        // line 273
        if (($context["show_social_icons"] ?? null)) {
            // line 274
            echo "\t<div class=\"social pull-right\">
\t  <a href=\"";
            // line 275
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 275, $this->source), "html", null, true);
            echo "\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t  <a href=\"";
            // line 276
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 276, $this->source), "html", null, true);
            echo "\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t  <a href=\"";
            // line 277
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 277, $this->source), "html", null, true);
            echo "\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t  <a href=\"";
            // line 278
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 278, $this->source), "html", null, true);
            echo "\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t  <a href=\"";
            // line 279
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 279, $this->source), "html", null, true);
            echo "\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t  <a href=\"";
            // line 280
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 280, $this->source), "html", null, true);
            echo "\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t</div>
      ";
        }
        // line 283
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/paxton/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 283,  436 => 280,  432 => 279,  428 => 278,  424 => 277,  420 => 276,  416 => 275,  413 => 274,  411 => 273,  407 => 272,  404 => 271,  398 => 269,  396 => 268,  386 => 260,  377 => 253,  371 => 251,  369 => 250,  365 => 249,  360 => 246,  354 => 244,  352 => 243,  348 => 242,  343 => 239,  337 => 237,  335 => 236,  331 => 235,  323 => 229,  321 => 228,  316 => 225,  296 => 208,  284 => 201,  274 => 193,  272 => 192,  264 => 186,  258 => 183,  255 => 182,  253 => 181,  247 => 177,  240 => 173,  236 => 172,  233 => 171,  231 => 170,  226 => 167,  219 => 163,  215 => 162,  211 => 161,  208 => 160,  206 => 159,  201 => 156,  194 => 152,  190 => 151,  187 => 150,  185 => 149,  178 => 144,  172 => 141,  169 => 140,  167 => 139,  162 => 136,  156 => 133,  153 => 132,  151 => 131,  142 => 124,  133 => 117,  124 => 115,  120 => 114,  116 => 112,  114 => 111,  109 => 108,  101 => 103,  94 => 98,  92 => 97,  81 => 88,  75 => 86,  73 => 85,  66 => 80,  60 => 78,  58 => 77,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/paxton/templates/page.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\paxton\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 77, "for" => 114);
        static $filters = array("escape" => 78, "raw" => 115, "t" => 272);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 't'],
                []
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
