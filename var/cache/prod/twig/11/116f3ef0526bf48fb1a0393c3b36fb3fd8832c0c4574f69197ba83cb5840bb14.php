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

/* @KnpPaginator/Pagination/sliding.html.twig */
class __TwigTemplate_e4bb16463d3dc1ac2dc92002cfb74e760293830cae87a087a8625d822a06b1dd extends Template
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
        // line 2
        echo "
";
        // line 3
        if (1 === twig_compare(($context["pageCount"] ?? null), 1)) {
            // line 4
            echo "    <div class=\"pagination\">
        ";
            // line 5
            if (((isset($context["first"]) || array_key_exists("first", $context)) && 0 !== twig_compare(($context["current"] ?? null), ($context["first"] ?? null)))) {
                // line 6
                echo "            <span class=\"first\">
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 10
            echo "
        ";
            // line 11
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 12
                echo "            <span class=\"previous\">
                <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&lt;</a>
            </span>
        ";
            }
            // line 16
            echo "
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "            ";
                if (0 !== twig_compare($context["page"], ($context["current"] ?? null))) {
                    // line 19
                    echo "                <span class=\"page\">
                    <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </span>
            ";
                } else {
                    // line 23
                    echo "                <span class=\"current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            ";
                }
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
        ";
            // line 27
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 28
                echo "            <span class=\"next\">
                <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">&gt;</a>
            </span>
        ";
            }
            // line 32
            echo "
        ";
            // line 33
            if (((isset($context["last"]) || array_key_exists("last", $context)) && 0 !== twig_compare(($context["current"] ?? null), ($context["last"] ?? null)))) {
                // line 34
                echo "            <span class=\"last\">
                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 38
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  125 => 35,  122 => 34,  120 => 33,  117 => 32,  111 => 29,  108 => 28,  106 => 27,  103 => 26,  97 => 25,  91 => 23,  83 => 20,  80 => 19,  77 => 18,  73 => 17,  70 => 16,  64 => 13,  61 => 12,  59 => 11,  56 => 10,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/sliding.html.twig", "C:\\www\\TEST\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\sliding.html.twig");
    }
}
