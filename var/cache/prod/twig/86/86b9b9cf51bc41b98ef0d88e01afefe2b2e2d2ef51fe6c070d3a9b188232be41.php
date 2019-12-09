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

/* contrat/_delete_form.html.twig */
class __TwigTemplate_754db4bd6ba6a2d099a71a273a8254487c51fbbd754dee799c562f9c3cef105c extends Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["contrat"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Ete vous sure supprimer ce contrat ?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["contrat"] ?? null), "id", [], "any", false, false, false, 3))), "html", null, true);
        echo "\">
    <button class=\"btn btn-danger\">Supprimer</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "contrat/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contrat/_delete_form.html.twig", "C:\\www\\TEST\\templates\\contrat\\_delete_form.html.twig");
    }
}
