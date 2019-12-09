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

/* contrat/_form.html.twig */
class __TwigTemplate_82fdc2595b1833dfe1a01384d861fe127c982acd39208c38973c7c81a06d6e96 extends Template
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
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
<div class=\"form-group\">
\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle", [], "any", false, false, false, 3), 'row', ["attr" => ["placeholder" => "Libelle de contrat"], "label" => "Libelle de contrat:", "size" => 100]);
        echo "
\t<ul class=\"tags\" data-prototype=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "affilies", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "prototype", [], "any", false, false, false, 4), 'widget'), "html_attr");
        echo "\">
\t\t<div class=\"col-md-6\">
\t\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "affilies", [], "any", false, false, false, 6), 'row', ["label" => "Libelle de l'affilie: "]);
        echo "
\t\t</div>
\t</ul>
</div>
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
<button class=\"btn btn-primary\">";
        // line 11
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Enregistrer un nouveau contrat")) : ("Enregistrer un nouveau contrat")), "html", null, true);
        echo "</button>
<br>
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "contrat/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  62 => 11,  58 => 10,  51 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contrat/_form.html.twig", "C:\\www\\TEST\\templates\\contrat\\_form.html.twig");
    }
}
