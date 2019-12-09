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

/* contrat/new.html.twig */
class __TwigTemplate_f8704cf8430eb04982da2a3ad860e7ee6c94c67d73509516294cf6d991455dff extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contrat/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nouveau Contrat
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"container\">
\t\t<h1>Créer un nouveau contrat</h1>
\t\t<p>
\t\t\t";
        // line 10
        echo twig_include($this->env, $context, "contrat/_form.html.twig");
        echo "
\t\t</p>
\t\t<p>
\t\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_index");
        echo "\" class=\"btn btn-outline-secondary\">Retour a la liste </a>
\t\t</p>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "contrat/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  64 => 10,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contrat/new.html.twig", "C:\\www\\TEST\\templates\\contrat\\new.html.twig");
    }
}
