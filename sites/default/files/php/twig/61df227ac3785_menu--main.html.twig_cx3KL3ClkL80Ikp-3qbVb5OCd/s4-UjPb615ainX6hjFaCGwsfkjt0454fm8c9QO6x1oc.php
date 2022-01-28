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

/* themes/paxton/templates/menu--main.html.twig */
class __TwigTemplate_6e4306fb02bb325b35c89be03655a9d7c0164868c0ae7cf5010e8450186a5f7f extends \Twig\Template
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
        // line 10
        echo "
";
        // line 12
        echo "
<div class=\"collapse navbar-collapse\" id=\"main-navigation\">
\t<ul class=\"nav navbar-right navbar-nav\">

\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "
\t\t\t";
            // line 19
            echo "
\t\t\t";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 20)) {
                // line 21
                echo "
\t\t\t\t<li  ";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo " >
\t\t\t\t\t<a href=\"";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo " <b class=\"caret\"></b> </a>

\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
                // line 27
                echo "
\t\t\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "
\t\t\t\t\t\t\t<li ><a href=\"";
                    // line 30
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo " > ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo " </a></li>

\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                // line 36
                echo "
\t\t\t";
            } else {
                // line 38
                echo "
\t\t\t\t";
                // line 40
                echo "
\t\t\t\t<li ";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo " ><a  href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\"  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo " > ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</a></li>

\t\t\t";
            }
            // line 44
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t</ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/paxton/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  124 => 44,  112 => 41,  109 => 40,  106 => 38,  102 => 36,  98 => 33,  85 => 30,  82 => 29,  78 => 28,  75 => 27,  67 => 23,  63 => 22,  60 => 21,  58 => 20,  55 => 19,  52 => 17,  48 => 16,  42 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/paxton/templates/menu--main.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\paxton\\templates\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 16, "if" => 20);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
