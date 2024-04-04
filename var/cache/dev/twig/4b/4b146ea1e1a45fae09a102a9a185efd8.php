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

/* articles/index.html.twig */
class __TwigTemplate_139cbeace22e304ad87bd0b66f378846 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tListe des Articles
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "\t\t<table id=\"articles\" class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 18
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 21), "titre", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"/article/";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\" class=\"btn btn-dark\">Détails</a>
\t\t\t\t\t\t\t<a href=\"/article/edit/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"btn btn-dark\">Modifier</a>
\t\t\t\t\t\t\t<a href=\"/article/delete/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Etes vous sûr de supprimer cet article?');\">
\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "</tbody></table>";
        } else {
            echo "<p>Aucun articles</p>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  149 => 35,  134 => 26,  130 => 25,  126 => 24,  120 => 21,  116 => 20,  112 => 19,  109 => 18,  105 => 17,  93 => 7,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%}
\tListe des Articles
{% endblock %}
{% block body %}
\t{% if articles %}
\t\t<table id=\"articles\" class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for article in articles %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ article.nom }}</td>
\t\t\t\t\t\t<td>{{ article.prix }}</td>
\t\t\t\t\t\t<td>{{ article.category.titre }}</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"/article/{{ article.id }}\" class=\"btn btn-dark\">Détails</a>
\t\t\t\t\t\t\t<a href=\"/article/edit/{{ article.id }}\" class=\"btn btn-dark\">Modifier</a>
\t\t\t\t\t\t\t<a href=\"/article/delete/{{ article.id }}\" class=\"btn btn-danger\" onclick=\"return confirm('Etes vous sûr de supprimer cet article?');\">
\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</td>
\t\t\t</tbody>
\t\t</tr>
\t{% endfor %}
</tbody></table>{% else %}<p>Aucun articles</p>{% endif %}{% endblock %}
", "articles/index.html.twig", "C:\\xampp\\htdocs\\symfony\\my_project\\templates\\articles\\index.html.twig");
    }
}
