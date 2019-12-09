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

/* contrat/edit.html.twig */
class __TwigTemplate_b2ed1ea52e65015e93fe5d33198c249d2346e0ed47094320bf98549c35bfec1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "contrat/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Editer un contrat
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"container\">
\t\t<h1>Editer le Contrat</h1>
\t\t";
        // line 9
        echo twig_include($this->env, $context, "contrat/_form.html.twig", ["button_label" => "Modifier le contrat et affiliés rattachés "]);
        echo "
\t\t<p>
\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
        echo "\" class=\"btn btn-outline-secondary\">Retour a la liste</a>
\t\t</p>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "contrat/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  63 => 9,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contrat/edit.html.twig", "C:\\www\\TEST\\templates\\contrat\\edit.html.twig");
    }
}
